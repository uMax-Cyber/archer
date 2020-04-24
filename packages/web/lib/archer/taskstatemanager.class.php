<?php
/**
 * The task state manager class.
 *
 * PHP version 5
 *
 * @category TaskStateManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The task state manager class.
 *
 * @category TaskStateManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class TaskStateManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'taskStates';
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
                'tsID',
                'tsName',
                'tsDescription',
                'tsOrder',
                'tsIcon'
            ),
            array(
                'INTEGER',
                'VARCHAR(50)',
                'LONGTEXT',
                'TINYINT(4)',
                'VARCHAR(255)'
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
                false,
                false
            ),
            array(
                'tsID',
                'tsName'
            ),
            'MyISAM',
            'utf8',
            'tsID',
            'tsID'
        );
        return self::$DB->query($sql);
    }
}
