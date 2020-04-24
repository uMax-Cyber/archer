<?php
/**
 * Add task type type reporter.
 *
 * PHP Version 5
 *
 * @category AddTaskTypeType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Add task type type reporter.
 *
 * @category AddTaskTypeType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AddTaskTypeType extends Hook
{
    /**
     * Name of the hook.
     *
     * @var string
     */
    public $name = 'AddTaskTypeType';
    /**
     * Description of the hook.
     *
     * @var string
     */
    public $description = 'Add Report Management Type';
    /**
     * Active?
     *
     * @var bool
     */
    public $active = true;
    /**
     * Node to work with.
     *
     * @var string
     */
    public $node = 'tasktypeedit';
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
