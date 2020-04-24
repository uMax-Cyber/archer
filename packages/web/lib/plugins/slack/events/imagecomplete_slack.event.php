<?php
/**
 * The event to call when Images are complete
 *
 * PHP version 5
 *
 * @category ImageComplete_Slack
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The event to call when Images are complete
 *
 * @category ImageComplete_Slack
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ImageComplete_Slack extends Event
{
    /**
     * The name of this event
     *
     * @var string
     */
    public $name = 'ImageComplete_Slack';
    /**
     * The description of this event
     *
     * @var string
     */
    public $description = 'Triggers when a host finishes imaging';
    /**
     * The event is active
     *
     * @var bool
     */
    public $active = true;
    /**
     * Initialize object.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$EventManager->register(
            'HOST_IMAGE_COMPLETE',
            $this
        )->register(
            'HOST_IMAGEUP_COMPLETE',
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
        foreach ((array)self::getClass('SlackManager')
            ->find() as &$Token
        ) {
            $args = array(
                'channel' => $Token->get('name'),
                'text' => sprintf(
                    '%s %s',
                    $data['HostName'],
                    _('Completed imaging')
                )
            );
            $Token->call('chat.postMessage', $args);
            unset($Token);
        }
    }
}
