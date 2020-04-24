<?php
/**
 * Sub menu hook changer.
 *
 * PHP version 5
 *
 * @category SubMenuData
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Sub menu hook changer.
 *
 * @category SubMenuData
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SubMenuData extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'SubMenuData';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Change all SubMenu data for the new gui';
    /**
     * Is this hook active or not.
     *
     * @var bool
     */
    public $active = true;
    /**
     * The node to interact with.
     *
     * @var string
     */
    public $node = '';
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
                'SUB_MENULINK_DATA',
                array(
                    $this,
                    'subMenu'
                )
            );
    }
    /**
     * The changer method.
     *
     * @param mixed $arguments The items to change.
     *
     * @return void
     */
    public function subMenu($arguments)
    {
        if (!$arguments['node']) {
            return;
        }
        switch (strtolower($arguments['node'])) {
        case 'home':
            $arguments['menu'] = array();
            break;
        case 'client':
            $arguments['menu'] = array();
            break;
        case 'about':
            $arguments['menu'] = array(
                'home' => self::$archerlang['Home'],
                'license' => self::$archerlang['License'],
                'kernelUpdate' => self::$archerlang['KernelUpdate'],
                'pxemenu' => self::$archerlang['PXEBootMenu'],
                'customizepxe' => self::$archerlang['PXEConfiguration'],
                'newMenu' => self::$archerlang['NewMenu'],
                'clientupdater' => self::$archerlang['ClientUpdater'],
                'maclist' => self::$archerlang['MACAddrList'],
                'settings' => self::$archerlang['ARCHERSettings'],
                'logviewer' => self::$archerlang['LogViewer'],
                'config' => self::$archerlang['ConfigSave'],
            
            );
            break;
        case 'group':
            break;
        case 'host':
            break;
        case 'image':
            $arguments['menu']['multicast'] = sprintf(
                '%s %s',
                self::$archerlang['Multicast'],
                self::$archerlang['Image']
            );
            break;
        case 'plugin':
            $arguments['menu'] = array(
                'home'=>self::$archerlang['Home'],
                'activate'=>self::$archerlang['ActivatePlugins'],
                'install'=>self::$archerlang['InstallPlugins'],
                'installed'=>self::$archerlang['InstalledPlugins'],
            );
            break;
        case 'printer':
            break;
        case 'report':
            $arguments['menu'] = array();
            break;
        case 'schema':
            $arguments['menu'] = array();
            break;
        case 'service':
            $arguments['menu'] = array();
            break;
        case 'snapin':
            break;
        case 'storage':
            $arguments['menu'] = array(
                'list' => self::$archerlang['AllSN'],
                'addStorageNode' => self::$archerlang['AddSN'],
                'storageGroup' => self::$archerlang['AllSG'],
                'addStorageGroup' => self::$archerlang['AddSG'],
            );
            break;
        case 'task':
            $arguments['menu'] = array(
                'active' => self::$archerlang['ActiveTasks'],
                'activemulticast' => self::$archerlang['ActiveMCTasks'],
                'activesnapins' => self::$archerlang['ActiveSnapins'],
                'activescheduled' => self::$archerlang['ScheduledTasks'],
            );
            break;
        case 'hwinfo':
            $arguments['menu'] = array();
            break;
        case 'user':
            break;
        default:
            break;
        }
    }
}
