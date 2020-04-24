<?php
/**
 * Host list event
 *
 * PHP version 5
 *
 * @category HostList_Event
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Host list event
 *
 * @category HostList_Event
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HostList extends Event
{
    /**
     * Name of event.
     *
     * @var string
     */
    public $name = 'HostListEvent';
    /**
     * Description of event.
     *
     * @var string
     */
    public $description = 'Triggers when the hosts are listed';
    /**
     * Status of event.
     *
     * @var string
     */
    public $active = false;
    /**
     * Initialize our item.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$EventManager->register(
            'HOST_LIST_EVENT',
            $this
        );
    }
}
