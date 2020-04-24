<?php
/**
 * Remove the ip column from host list.
 *
 * PHP version 5
 *
 * @category RemoveIPAddressColumn
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Remove the ip column from host list.
 *
 * @category RemoveIPAddressColumn
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class RemoveIPAddressColumn extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'RemoveIPAddressColumn';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Removes the "IP Address" column from Host Lists';
    /**
     * Is this hook active or not.
     *
     * @var bool
     */
    public $active = false;
    /**
     * Initializes object.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$HookManager
            ->register(
                'HOST_HEADER_DATA',
                array(
                    $this,
                    'hostTableHeader'
                )
            )
            ->register(
                'HOST_DATA',
                array(
                    $this,
                    'hostData'
                )
            );
    }
    /**
     * Changes the table header.
     *
     * @param mixed $arguments The items to alter.
     *
     * @return void
     */
    public function hostTableHeader($arguments)
    {
        global $node;
        if ($node != 'host') {
            return;
        }
        unset($arguments['headerData'][4]);
    }
    /**
     * The data to alter.
     *
     * @param mixed $arguments The items to alter.
     *
     * @return void
     */
    public function hostData($arguments)
    {
        global $node;
        if ($node != 'host') {
            return;
        }
        unset($arguments['templates'][4]);
    }
}
