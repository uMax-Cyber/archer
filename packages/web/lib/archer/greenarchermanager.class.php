<?php
/**
 * Green archer manager class.
 *
 * PHP version 5
 *
 * @category GreenArcherManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Green archer manager class.
 *
 * @category GreenArcherManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class GreenArcherManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'greenArcher';
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
                'gfID',
                'gfHostID',
                'gfHour',
                'gfMin',
                'gfAction',
                'gfDays'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'INTEGER',
                'INTEGER',
                'VARCHAR(2)',
                'VARCHAR(25)'
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
                'gfID',
                array(
                    'gfHour',
                    'gfMin',
                    'gfAction'
                ),
            ),
            'MyISAM',
            'utf8',
            'gfID',
            'gfID'
        );
        return self::$DB->query($sql);
    }
}
