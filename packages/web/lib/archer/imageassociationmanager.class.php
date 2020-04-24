<?php
/**
 * Image association manager class
 *
 * PHP version 5
 *
 * @category ImageAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Image association manager class
 *
 * @category ImageAssociationManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ImageAssociationManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'imageGroupAssoc';
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
                'igaID',
                'igaImageID',
                'igaStorageGroupID',
                'igaPrimary'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'INTEGER',
                "ENUM('0', '1')"
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
                'igaID',
                array(
                    'igaImageID',
                    'igaStorageGroupID'
                )
            ),
            'MyISAM',
            'utf8',
            'igaID',
            'igaID'
        );
        return self::$DB->query($sql);
    }
}
