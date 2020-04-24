<?php
/**
 * History manager class.
 *
 * PHP version 5
 *
 * @category HistoryManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * History manager class.
 *
 * @category HistoryManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HistoryManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'history';
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
                'hID',
                'hText',
                'hUser',
                'hTime',
                'hIP'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'VARCHAR(40)',
                'TIMESTAMP',
                'VARCHAR(50)'
            ),
            array(
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
                'CURRENT_TIMESTAMP',
                false
            ),
            array(
                'hID',
                array(
                    'hUser',
                    'hTime'
                )
            ),
            'MyISAM',
            'utf8',
            'hID',
            'hID'
        );
        return self::$DB->query($sql);
    }
}
