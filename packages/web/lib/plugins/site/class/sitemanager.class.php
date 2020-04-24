<?php
/**
 * Site plugin
 *
 * PHP version 5
 *
 * @category SiteManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Site plugin
 *
 * @category SiteManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SiteManager extends ARCHERManagerController
{
    /**
     * The table name.
     *
     * @var string
     */
    public $tablename = 'site';
    /**
     * Installs the database for the plugin.
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
                'sID',
                'sName',
                'sDesc'
            ),
            array(
                'INTEGER',
                'VARCHAR(60)',
                'VARCHAR(255)',
            ),
            array(
                false,
                false,
                false
            ),
            array(
                false,
                false,
                false
            ),
            array(),
            'MyISAM',
            'utf8',
            'sID',
            'sID'
        );
        if (!self::$DB->query($sql)) {
            return false;
        }
        //return true;
        return self::getClass('SiteHostAssociationManager')->install();
    }
    /**
     * Uninstalls plugin.
     *
     * @return void
     */
    public function uninstall()
    {
        self::getClass('SiteHostAssociationManager')->uninstall();
        return parent::uninstall();
    }
}
