<?php
/**
 * Site plugin
 *
 * PHP version 5
 *
 * @category SiteHostAssocManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Site plugin
 *
 * @category SiteHostAssocManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SiteHostAssociationManager extends ARCHERManagerController
{
    /**
     * The table name.
     *
     * @var string
     */
    public $tablename = 'siteHostAssoc';
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
                'shaID',
                'shaName',
                'shaSiteID',
                'shaHostID',
            ),
            array(
                'INTEGER',
                'VARCHAR(60)',
                'INTEGER',
                'INTEGER',
            ),
            array(
                false,
                false,
                false,
                false,
            ),
            array(
                false,
                false,
                false,
                false,
            ),
            array(),
            'MyISAM',
            'utf8',
            'shaID',
            'shaID'
        );
        if (!self::$DB->query($sql)) {
            return false;
        }
        //return true;
        return self::getClass('SiteUserAssociationManager')->install();
    }
    /**
     * Uninstalls plugin.
     *
     * @return void
     */
    public function uninstall()
    {
        self::getClass('SiteUserAssociationManager')->uninstall();
        return parent::uninstall();
    }
}
