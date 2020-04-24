<?php
/**
 * Windows keys association manager class.
 *
 * PHP version 5
 *
 * @category WindowsKeyAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Windows keys association manager class.
 *
 * @category WindowsKeyAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class WindowsKeyAssociationManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'windowsKeysAssoc';
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
                'wkaID',
                'wkaImageID',
                'wkaKeyID'
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
                array(
                    'wkaImageID',
                    'wkaKeyID',
                )
            ),
            'MyISAM',
            'utf8',
            'wkaID',
            'wkaID'
        );
        return self::$DB->query($sql);
    }
}
