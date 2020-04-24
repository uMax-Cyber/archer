<?php
/**
 * The module manager class.
 *
 * PHP version 5
 *
 * @category ModuleManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The module manager class.
 *
 * @category ModuleManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ModuleManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'modules';
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
                'id',
                'name',
                'short_name',
                'description',
                'default'
            ),
            array(
                'INTEGER',
                'VARCHAR(255)',
                'VARCHAR(255)',
                'LONGTEXT',
                'INTEGER'
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
                'id',
                'short_name'
            ),
            'MyISAM',
            'utf8',
            'id',
            'id'
        );
        return self::$DB->query($sql);
    }
}
