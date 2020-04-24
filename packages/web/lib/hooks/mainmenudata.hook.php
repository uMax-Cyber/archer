<?php
/**
 * Main menu hook changer.
 *
 * PHP version 5
 *
 * @category MainMenuData
 * @package  ARCHERProject
 * @author   Sebastian Roth <nah@nah.com>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Main menu hook changer.
 *
 * @category MainMenuData
 * @package  ARCHERProject
 * @author   Sebastian Roth <nah@nah.com>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class MainMenuData extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'MainMenuData';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Example to show how to change MainMenu data.';
    /**
     * Is this hook active or not.
     *
     * @var bool
     */
    public $active = false;
    /**
     * Position of the new main menu entry.
     *
     * @var string
     */
    public $insertAfter = 'task';
    /**
     * Name/link for the new menu entry.
     *
     * @var string
     */
    public $menuitem = 'Inventory';
    /**
     * Icon for the new menu entry.
     *
     * @var string
     */
    public $icon = 'fa-paperclip';
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
                'MAIN_MENU_DATA',
                array(
                    $this,
                    'addToMainMenu'
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
    public function addToMainMenu($arguments)
    {
        $link = strtolower($this->menuitem);
        self::arrayInsertAfter(
            $this->insertAfter,
            $arguments['main'],
            $link,
            array(
                _($this->menuitem),
                'fa ' . $this->icon . ' fa-2x'
            )
        );
    }
}
