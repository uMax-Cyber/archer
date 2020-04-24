<?php
/**
 * HostStatus manager mass class.
 *
 * @category HostStatus
 * @package  ARCHERProject
 * @author   Fernando Gietz <fernando.gietz@ehu.eus>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HostStatusManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'hoststatus';
    /**
     * Install our database
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
                'hsID',
                'hsName',
                'hsDesc'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'LONGTEXT',
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
                'hsID',
                'hsName',
                array(
                )
            ),
            'MyISAM',
            'utf8',
            'hsID',
            'hsID'
        );
        if (!self::$DB->query($sql)) {
            return false;
        }
        return true;
    }
    /**
     * Uninstalls the database
     *
     * @return bool
     */
    public function uninstall()
    {
        return parent::uninstall();
    }
}
