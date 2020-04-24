<?php
/**
 * Manager class for subnetgroup
 *
 * PHP Version 5
 *
 * @category SubnetgroupManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Manager class for subnetgroup
 *
 * @category SubnetgroupManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SubnetgroupManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'subnetgroup';
    /**
     * Perform the database and plugin installation
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
                'sgID',
                'sgName',
                'sgGroupID',
                'sgSubnets'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'INTEGER',
                'TEXT',
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
            array(
                'sgID'
            ),
            'MyISAM',
            'utf8',
            'sgID',
            'sgID'
        );
        return self::$DB->query($sql);
    }
}
