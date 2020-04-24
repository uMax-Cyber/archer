<?php
/**
 * Template for others to work from.
 *
 * PHP version 5
 *
 * @category Template
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Template for others to work from.
 *
 * @category Template
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Template extends Hook
{
    /**
     * The name for this hook.
     *
     * @var string
     */
    public $name = 'Hook Name';
    /**
     * The description for this hook.
     *
     * @var string
     */
    public $description = 'Hook Description';
    /**
     * If the hook is active or not.
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
                'HOST_DATA',
                array(
                    $this,
                    'HostData'
                )
            );
    }
    /**
     * Host data example method.
     *
     * @param mixed $arguments The data to alter, work with.
     *
     * @return void
     */
    public function hostData($arguments)
    {
        self::log(
            print_r($arguments, 1),
            0,
            0,
            $this,
            0
        );
    }
}
