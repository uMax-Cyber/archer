<?php
/**
 * Manager class for pushbullet
 *
 * PHP Version 5
 *
 * @category PushbulletManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Manager class for pushbullet
 *
 * @category PushbulletManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class PushbulletManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'pushbullet';
    /**
     * Perform the database and plugin installation
     *
     * @return bool
     */
    public function install()
    {
        $this->uninstall();
        $fields = array(
            'pID',
            'pToken',
            'pName',
            'pEmail'
        );
        $types = array(
            'INTEGER',
            'VARCHAR(255)',
            'VARCHAR(255)',
            'VARCHAR(255)'
        );
        $notnulls = array(
            false,
            false,
            false,
            false
        );
        $defaults = array(
            false,
            false,
            false,
            false
        );
        $keys = array(
            'pID',
            'pToken'
        );
        $sql = Schema::createTable(
            $this->tablename,
            true,
            $fields,
            $types,
            $notnulls,
            $defaults,
            $keys,
            'MyISAM',
            'utf8',
            'pID',
            'pID'
        );
        return self::$DB->query($sql);
    }
}
