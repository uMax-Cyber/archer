<?php
/**
 * FileIntegrity Manager class.
 *
 * PHP version 5
 *
 * @category FileIntegrityManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * FileIntegrity Manager class.
 *
 * @category FileIntegrityManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class FileIntegrityManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'fileChecksums';
    /**
     * Install the database and plugin
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
                'fcsID',
                'fcsStorageNodeID',
                'fcsFileModTime',
                'fcsFileChecksum',
                'fcsFilePath',
                'fcsStatus'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'DATETIME',
                'VARCHAR(255)',
                'VARCHAR(255)',
                "ENUM('0', '1', '2')"
            ),
            array(
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
                false
            ),
            array(
                'fcsID'
            ),
            'MyISAM',
            'utf8',
            'fcsID',
            'fcsID'
        );
        return self::$DB->query($sql);
    }
}
