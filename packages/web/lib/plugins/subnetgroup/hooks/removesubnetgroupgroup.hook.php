<?php
/**
 * Remove the subnetgroup group.
 *
 * PHP version 5
 *
 * @category AddLocationHost
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Remove the subnetgroup group.
 *
 * @category AddLocationHost
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */

class RemoveSubnetgroupGroup extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'RemoveSubnetgroupGroup';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Remove SubnetGroup Group';
    /**
     * The active flag (always true but for posterity)
     *
     * @var bool
     */
    public $active = true;
    /**
     * The node this hook enacts with.
     *
     * @var string
     */
    public $node = 'subnetgroup';
    /**
     * Initialize object.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$HookManager
            ->register(
                'GROUP_DELETE_SUCCESS',
                array(
                    $this,
                    'removeSubnetgroupGroup'
                )
            );
    }
    /**
     * Remove the subnetgroup group.
     *
     * @param mixed $arguments The arguments to evaluate.
     *
     * @return void
     */
    public function removeSubnetgroupGroup($arguments)
    {
        if (!in_array($this->node, (array)self::$pluginsinstalled)) {
            return;
        }

        $Group = $arguments['Group'];
        Route::listem(
            'subnetgroup',
            'name',
            false,
            array('groupID' => $Group->get('id'))
        );

        $Subnetgroup = json_decode(
            Route::getData()
        );

        foreach ($Subnetgroup->subnetgroups as $SG) {
            $SG = new Subnetgroup($SG->id);
            $SG->destroy();
        }
    }
}
