<?php
/**
 * Site plugin
 *
 * PHP version 5
 *
 * @category SiteAssocManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Site plugin
 *
 * @category SiteAssocManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SiteUserRestrictionManager extends ARCHERManagerController
{
    /**
     * The table name.
     *
     * @var string
     */
    public $tablename = 'siteUserRestriction';
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
                'surID',
                'surUserID',
                'surRestricted'
            ),
            array(
                'INTEGER',
                'INTEGER',
                "ENUM('0', '1')"
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
            'surID',
            'surID'
        );
        if (!self::$DB->query($sql)) {
            return false;
        }
        return true;
    }
}
