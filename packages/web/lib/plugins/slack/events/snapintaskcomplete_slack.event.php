<?php
/**
 * Sends notification when snapin task completes.
 *
 * PHP version 5
 *
 * @category SnapinTaskComplete_Slack
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Sends notification when snapin task completes.
 *
 * @category SnapinTaskComplete_Slack
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SnapinTaskComplete_Slack extends PushbulletExtends
{
    /**
     * The name of the event
     *
     * @var string
     */
    protected $name = 'SnapinTaskComplete_Slack';
    /**
     * The description of the event
     *
     * @var string
     */
    protected $description = 'Triggers when a host completes snapin task';
    /**
     * The event is active
     *
     * @var bool
     */
    public $active = true;
    /**
     * Initialize item.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$EventManager->register(
            'HOST_SNAPINTASK_COMPLETE',
            $this
        );
    }
    /**
     * Perform action
     *
     * @param string $event the event to enact
     * @param mixed  $data  the data
     *
     * @return void
     */
    public function onEvent($event, $data)
    {
        self::$message = sprintf(
            'The snapin has completed installation on %s with status code: %s',
            $data['Host']->get('name'),
            $data['SnapinTask']->get('return')
        );
        self::$shortdesc = sprintf(
            '%s completed',
            $data['Snapin']->get('name')
        );
        parent::onEvent($event, $data);
    }
}
