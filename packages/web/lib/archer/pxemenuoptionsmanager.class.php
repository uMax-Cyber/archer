<?php
/**
 * Pxe menu items manager class.
 *
 * PHP version 5
 *
 * @category PXEMenuOptionsManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Pxe menu items manager class.
 *
 * @category PXEMenuOptionsManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class PXEMenuOptionsManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'dirCleaner';
    /**
     * Install our table.
     *
     * @return bool
     */
    public function install()
    {
        $this->uninstall();
        $sql = Schema::createTable(
            $this->tablename,
            true,
            array(
                'dcID',
                'dcPath'
            ),
            array(
                'INTEGER',
                'LONGTEXT'
            ),
            array(
                false,
                false
            ),
            array(
                false,
                false
            ),
            array(
                'dcID',
                'dcPath'
            ),
            'MyISAM',
            'utf8',
            'dcID',
            'dcID'
        );
        return self::$DB->query($sql);
    }
    /**
     * The Storage point for the registration items.
     *
     * @var array
     */
    private static $_regVals = array();
    /**
     * Builds the array.
     *
     * @return array
     */
    private static function _regText()
    {
        return self::$_regVals = array(
            0 => self::$archerlang['NotRegHost'],
            1 => self::$archerlang['RegHost'],
            2 => self::$archerlang['AllHosts'],
            3 => self::$archerlang['DebugOpts'],
            4 => self::$archerlang['AdvancedOpts'],
            5 => self::$archerlang['AdvancedLogOpts'],
            6 => self::$archerlang['PendRegHost'],
            7 => self::$archerlang['DoNotList'],
        );
    }
    /**
     * The menu select list item.
     *
     * @param string $request Which item is currently selected.
     * @param string $id      Should we send an id.
     *
     * @return string
     */
    public function regSelect($request = '', $id = '')
    {
        self::$selected = $request;
        ob_start();
        $sender = self::_regText();
        array_walk(
            $sender,
            self::$buildSelectBox
        );
        return sprintf(
            '<select name="menu_regmenu" class="form-control"'
            . (
                $id ?
                ' id="'
                . $id
                . '"' :
                ''
            )
            . '>%s</select>',
            ob_get_clean()
        );
    }
}
