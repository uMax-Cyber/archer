<?php
/**
 * Group association manager class
 *
 * PHP version 5
 *
 * @category GroupAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Group association manager class
 *
 * @category GroupAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class GroupAssociationManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'groupMembers';
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
                'gmID',
                'gmHostID',
                'gmGroupID'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'INTEGER'
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
            array(
                'gmID',
                array(
                    'gmHostID',
                    'gmGroupID'
                )
            ),
            'MyISAM',
            'utf8',
            'gmID',
            'gmID'
        );
        return self::$DB->query($sql);
    }
}
