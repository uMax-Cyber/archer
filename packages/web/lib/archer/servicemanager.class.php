<?php
/**
 * The service/global settings manager class.
 *
 * PHP version 5
 *
 * @category ServiceManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The service/global settings manager class.
 *
 * @category ServiceManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ServiceManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'globalSettings';
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
                'settingID',
                'settingKey',
                'settingDesc',
                'settingValue',
                'settingCategory'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'LONGTEXT',
                'LONGTEXT',
                'LONGTEXT'
            ),
            array(
                false,
                false,
                false,
                false,
                false
            ),
            array(
                false,
                false,
                false,
                false,
                false
            ),
            array(
                'settingID',
                'settingKey'
            ),
            'MyISAM',
            'utf8',
            'settingID',
            'settingID'
        );
        return self::$DB->query($sql);
    }
    /**
     * Gets the setting categories.
     *
     * @return array
     */
    public function getSettingCats()
    {
        return self::getSubObjectIDs(
            'Service',
            '',
            'category',
            false,
            'id',
            'category',
            'category'
        );
    }
}
