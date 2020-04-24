<?php
/**
 * Access Control plugin
 *
 * PHP version 5
 *
 * @category AccessControlAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Access Control plugin
 *
 * @category AccessControlAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AccessControlAssociationManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'roleUserAssoc';
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
                'ruaID',
                'ruaName',
                'ruaRoleID',
                'ruaUserID'
            ),
            array(
                'INTEGER',
                'VARCHAR(60)',
                'INTEGER',
                'INTEGER'
            ),
            array(
                false,
                false,
                false,
                false
            ),
            array(
                false,
                false,
                false,
                false
            ),
            array(
                'ruaID',
                'ruaUserID',
            ),
            'MyISAM',
            'utf8',
            'ruaID',
            'ruaID'
        );
        if (!self::$DB->query($sql)) {
            return false;
        } else {
            $archerUserID = self::getSubObjectIDs(
                'User',
                array('name' => 'archer')
            );
            $sql = sprintf(
                "INSERT INTO `%s` VALUES (1, '%s', 1, %d)",
                $this->tablename,
                'Administrator-archer',
                intval($archerUserID[0])
            );
            self::$DB->query($sql);
        }
        return self::getClass('AccessControlRuleManager')->install();
    }
    /**
     * Uninstalls the plugin
     *
     * @return bool
     */
    public function uninstall()
    {
        self::getClass('AccessControlRuleManager')->uninstall();
        return parent::uninstall();
    }
}
