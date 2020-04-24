<?php
/**
 * Scheduled task manager class.
 *
 * PHP version 5
 *
 * @category ScheduledTaskManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Scheduled task manager class.
 *
 * @category ScheduledTaskManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ScheduledTaskManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'scheduledTasks';
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
                'stID',
                'stName',
                'stDesc',
                'stType',
                'stTaskTypeID',
                'stMinute',
                'stHour',
                'stDOM',
                'stMonth',
                'stDOW',
                'stIsGroup',
                'stGroupHostID',
                'stImageID',
                'stShutDown',
                'stOther1',
                'stOther2',
                'stOther3',
                'stOther4',
                'stOther5',
                'stDateTime',
                'stActive'
            ),
            array(
                'INTEGER',
                'VARCHAR(250)',
                'LONGTEXT',
                'VARCHAR(24)',
                'MEDIUMINT(9)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                "ENUM('0', '1')",
                'INTEGER',
                'INTEGER',
                "ENUM('0', '1')",
                'VARCHAR(255)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'TIMESTAMP',
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
                false,
                false,
                false,
                false,
                false,
                false,
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
                false,
                false,
                false,
                false,
                false,
                '0',
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                'CURRENT_TIMESTAMP',
                '1'
            ),
            array(
                'stID'
            ),
            'MyISAM',
            'utf8',
            'stID',
            'stID'
        );
        return self::$DB->query($sql);
    }
    /**
     * Cancels the passed tasks
     *
     * @param mixed $scheduledtaskids the ids to cancel
     *
     * @return bool
     */
    public function cancel($scheduledtaskids)
    {
        $this->destroy(array('id' => $scheduledtaskids));
    }
}
