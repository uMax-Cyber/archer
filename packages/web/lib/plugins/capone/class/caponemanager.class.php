<?php
/**
 * Manager class for Capone
 *
 * PHP version 5
 *
 * @category CaponeManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Manager class for Capone
 *
 * @category CaponeManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class CaponeManager extends ARCHERManagerController
{
    /**
     * The base table name.
     *
     * @var string
     */
    public $tablename = 'capone';
    /**
     * Installs the capone database
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
                'cID',
                'cImageID',
                'cOSID',
                'cKey'
            ),
            array(
                'INTEGER',
                'INTEGER',
                'INTEGER',
                'VARCHAR(255)'
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
                'cID',
                'cKey'
            ),
            'MyISAM',
            'utf8',
            'cID',
            'cID'
        );
        if (!self::$DB->query($sql)) {
            return false;
        }
        $category = sprintf('Plugin: %s', $name);
        $insert_fields = array(
            'name',
            'description',
            'value',
            'category'
        );
        $insert_values = array();
        $insert_values[] = array(
            'ARCHER_PLUGIN_CAPONE_DMI',
            'This setting is used for the capone '
            . 'module to set the DMI field used.',
            '',
            $category
        );
        $insert_values[] = array(
            'ARCHER_PLUGIN_CAPONE_REGEX',
            'This setting is used for the capone '
            . 'module to set the reg ex used.',
            '',
            $category
        );
        $insert_values[] = array(
            'ARCHER_PLUGIN_CAPONE_SHUTDOWN',
            'This setting is used for the capone '
            . 'module to set the shutdown after imaging.',
            '',
            $category
        );
        self::getClass('ServiceManager')
            ->insertBatch(
                $insert_fields,
                $insert_values
            );
        return true;
    }
    /**
     * Removes the database items when plugin is removed.
     *
     * @return bool
     */
    public function uninstall()
    {
        self::getClass('ServiceManager')
            ->destroy(
                array(
                    'name' => 'ARCHER_PLUGIN_CAPONE_%'
                )
            );
        self::getClass('PXEMenuOptionsManager')
            ->destroy(
                array(
                    'name' => 'archer.capone'
                )
            );
        return parent::uninstall();
    }
}
