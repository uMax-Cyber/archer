<?php
/**
 * Removes slack account.
 *
 * PHP version 5
 *
 * @category RemoveSlackItem
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Removes slack account.
 *
 * @category RemoveSlackItem
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class RemoveSlackItem extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'RemoveSlackMenuItem';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Remove slack item';
    /**
     * The active flag.
     *
     * @var bool
     */
    public $active = true;
    /**
     * The node this plugin enacts against.
     *
     * @var string
     */
    public $node = 'slack';
    /**
     * Initialize object
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$HookManager
            ->register(
                'SLACK_DEL_POST',
                array(
                    $this,
                    'removesingle'
                )
            )->register(
                'MULTI_REMOVE',
                array(
                    $this,
                    'removemulti'
                )
            );
    }
    /**
     * Removes multiple slack items.
     *
     * @param mixed $arguments The items to change.
     *
     * @return void
     */
    public function removemulti($arguments)
    {
        foreach ((array)self::getClass('SlackManager')
            ->find(array('id'=>$arguments['removing'])) as &$Token
        ) {
            $args = array(
                'channel' => $Token->get('name'),
                'text' => sprintf(
                    '%s %s: %s',
                    preg_replace(
                        '/^[@]|^[#]/',
                        '',
                        $Token->get('name')
                    ),
                    _('Account removed from ARCHER GUI at'),
                    self::getSetting('ARCHER_WEB_HOST')
                )
            );
            $Token->call('chat.postMessage', $args);
            unset($Token);
        }
    }
    /**
     * Removes slack item.
     *
     * @param mixed $arguments The items to change.
     *
     * @return void
     */
    public function removesingle($arguments)
    {
        if (!$arguments['Slack']->isValid()) {
            return;
        }
        $args = array(
            'channel' => $arguments['Slack']->get('name'),
            'text' => sprintf(
                '%s %s: %s',
                preg_replace(
                    '/^[@]|^[#]/',
                    '',
                    $arguments['Slack']->get('name')
                ),
                _('Account removed from ARCHER GUI at'),
                self::getSetting('ARCHER_WEB_HOST')
            )
        );
        $arguments['Slack']->call('chat.postMessage', $args);
    }
}
