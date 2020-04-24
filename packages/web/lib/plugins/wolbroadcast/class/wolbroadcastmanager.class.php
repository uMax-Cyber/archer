<?php
/**
 * Manager class for wolbroadcast
 *
 * PHP Version 5
 *
 * @category WolbroadcastManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Manager class for wolbroadcast
 *
 * @category WolbroadcastManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class WolbroadcastManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'wolbroadcast';
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
                'wbID',
                'wbName',
                'wbDesc',
                'wbBroadcast'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'LONGTEXT',
                'VARCHAR(16)'
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
                'wbID'
            ),
            'MyISAM',
            'utf8',
            'wbID',
            'wbID'
        );
        return self::$DB->query($sql);
    }
}
