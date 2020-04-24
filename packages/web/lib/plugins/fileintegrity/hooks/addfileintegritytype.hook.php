<?php
/**
 * The fileintegiry type hook
 *
 * PHP version 5
 *
 * @category AddFileIntegrityType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The fileintegiry type hook
 *
 * @category AddFileIntegrityType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AddFileIntegrityType extends Hook
{
    /**
     * The hook name
     *
     * @var string
     */
    public $name = 'AddFileIntegrityType';
    /**
     * The hook description
     *
     * @var string
     */
    public $description = 'Add Report Management Type';
    /**
     * The active flag
     *
     * @var bool
     */
    public $active = true;
    /**
     * The node to enact within
     *
     * @var string
     */
    public $node = 'fileintegrity';
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
                'REPORT_TYPES',
                array(
                    $this,
                    'reportTypes'
                )
            );
    }
}
