<?php
/**
 * Slack manager mass management class
 *
 * PHP version 5
 *
 * @category SlackManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Slack manager mass management class
 *
 * @category SlackManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SlackManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'slack';
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
                'sID',
                'sToken',
                'sUsername'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'VARCHAR(255)'
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
                'sID',
                array(
                    'sToken'
                )
            ),
            'MyISAM',
            'utf8',
            'sID',
            'sID'
        );
        return self::$DB->query($sql);
    }
}
