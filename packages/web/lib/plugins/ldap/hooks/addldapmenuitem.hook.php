<?php
/**
 * Adds the menu item for this plugin
 *
 * PHP version 5
 *
 * @category AddLDAPMenuItem
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Adds the menu item for this plugin
 *
 * @category AddLDAPMenuItem
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AddLDAPMenuItem extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'AddLDAPMenuItem';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Add menu item for LDAP';
    /**
     * The active flag.
     *
     * @var bool
     */
    public $active = true;
    /**
     * The node to enact on.
     *
     * @var string
     */
    public $node = 'ldap';
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
                'MAIN_MENU_DATA',
                array(
                    $this,
                    'menuData'
                )
            )
            ->register(
                'SEARCH_PAGES',
                array(
                    $this,
                    'addSearch'
                )
            )
            ->register(
                'PAGES_WITH_OBJECTS',
                array(
                    $this,
                    'addPageWithObject'
                )
            );
    }
    /**
     * Sets the menu item into the menu
     *
     * @param mixed $arguments the item to adjust
     *
     * @return void
     */
    public function menuData($arguments)
    {
        if (!in_array($this->node, (array)self::$pluginsinstalled)) {
            return;
        }
        self::arrayInsertAfter(
            'storage',
            $arguments['main'],
            $this->node,
            array(
                _('LDAP Servers'),
                'fa fa-key'
            )
        );
    }
    /**
     * Adds the plugin page to the search page lists
     *
     * @param mixed $arguments the item to adjust
     *
     * @return void
     */
    public function addSearch($arguments)
    {
        if (!in_array($this->node, (array)self::$pluginsinstalled)) {
            return;
        }
        array_push($arguments['searchPages'], $this->node);
    }
    /**
     * Adds the plugin page to use internalized objects
     *
     * @param mixed $arguments the item to adjust
     *
     * @return void
     */
    public function addPageWithObject($arguments)
    {
        if (!in_array($this->node, (array)self::$pluginsinstalled)) {
            return;
        }
        array_push($arguments['PagesWithObjects'], $this->node);
    }
}
