<?php
/**
 * MAC association manager mass management class.
 *
 * PHP version 5
 *
 * @category MACAddressAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * MAC association manager mass management class.
 *
 * @category MACAddressAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class MACAddressAssociationManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'hostMAC';
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
                'hmID',
                'hmHostID',
                'hmMAC',
                'hmDesc',
                'hmPrimary',
                'hmPending',
                'hmIgnoreClient',
                'hmIgnoreImaging'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'VARCHAR(17)',
                'LONGTEXT',
                "ENUM('0', '1')",
                "ENUM('0', '1')",
                "ENUM('0', '1')",
                "ENUM('0', '1')"
            ),
            array(
                false,
                false,
                false,
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
                false,
                '0',
                '0',
                '0'
            ),
            array(
                array(
                    'hmMAC',
                    'hmHostID'
                )
            ),
            'MyISAM',
            'utf8',
            'hmID',
            'hmID'
        );
    }
}
