<?php
/**
 * Creates the capone menu item.
 *
 * PHP Version 5
 *
 * @category AddBootMenuItem
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Creates the capone menu item.
 *
 * @category AddBootMenuItem
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AddBootMenuItem extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'AddBootMenuItem';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Add capone menu item';
    /**
     * The active flag.
     *
     * @var bool
     */
    public $active = true;
    /**
     * The node this hook enacts with.
     *
     * @var string
     */
    public $node = 'capone';
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
                'BOOT_MENU_ITEM',
                array(
                    $this,
                    'addBootMenuItem'
                )
            );
    }
    /**
     * Creates the storage node.
     *
     * @return void
     */
    public function addBootMenuItem()
    {
        if (!in_array($this->node, (array)self::$pluginsinstalled)) {
            return;
        }
        $dmi = self::getSetting('ARCHER_PLUGIN_CAPONE_DMI');
        $shutdown = self::getSetting('ARCHER_PLUGIN_CAPONE_SHUTDOWN');
        if (!$dmi) {
            return;
        }
        $exists = self::getClass('PXEMenuOptionsManager')
            ->exists('archer.capone', '', 'name');
        $args = trim("mode=capone shutdown=$shutdown");
        $entry = self::getClass('PXEMenuOptions')
            ->set('name', 'archer.capone')
            ->load('name');
        if (!$exists) {
            $entry
                ->set('name', 'archer.capone')
                ->set('description', _('Capone Deploy'))
                ->set('args', $args)
                ->set('params', null)
                ->set('default', 0)
                ->set('regMenu', 2);
        }
        $setArgs = explode(' ', trim($entry->get('args')));
        $neededArgs = explode(' ', trim($args));
        $sureArgs = array();
        foreach ((array)$setArgs as &$arg) {
            if (!preg_match('#^dmi=#', $arg)) {
                $sureArgs[] = $arg;
            }
            unset($arg);
        }
        $setArgs = $sureArgs;
        foreach ((array)$neededArgs as &$arg) {
            if (!in_array($arg, $setArgs)) {
                $setArgs[] = $arg;
            }
            unset($arg);
        }
        $setArgs[] = sprintf('dmi=%s', $dmi);
        $entry
            ->set('args', implode(' ', $setArgs))
            ->save();
    }
}
