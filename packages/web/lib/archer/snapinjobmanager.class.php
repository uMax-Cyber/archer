<?php
/**
 * The snapin job handler class.
 *
 * PHP version 5
 *
 * @category SnapinJob
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The snapin job handler class.
 *
 * @category SnapinJob
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SnapinJobManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'snapinJobs';
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
                'sjID',
                'sjHostID',
                'sjStateID',
                'sjCreateTime'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'INTEGER',
                'TIMESTAMP'
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
                'CURRENT_TIMESTAMP'
            ),
            array(
                'sjID',
                'sjHostID'
            ),
            'MyISAM',
            'utf8',
            'sjID',
            'sjID'
        );
        return self::$DB->query($sql);
    }
    /**
     * Cancels the snapin job.
     *
     * @param array $snapinjobids The jobs to cancel.
     *
     * @return bool
     */
    public function cancel($snapinjobids)
    {
        $findWhere = array('id' => (array) $snapinjobids);
        $cancelled = self::getCancelledState();
        $snapintaskids = self::getSubObjectIDs(
            'SnapinTask',
            array('jobID' => $snapinjobids)
        );
        return self::getClass('SnapinTaskManager')
            ->cancel($snapintaskids);
    }
}
