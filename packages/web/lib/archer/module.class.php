<?php
/**
 * The module class.
 *
 * PHP version 5
 *
 * @category Module
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The module class.
 *
 * @category Module
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Module extends ARCHERController
{
    /**
     * The module table name.
     *
     * @var string
     */
    protected $databaseTable = 'modules';
    /**
     * The module fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'id',
        'name' => 'name',
        'shortName' => 'short_name',
        'description' => 'description',
        'isDefault' => 'default',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
        'shortName',
    );
    /**
     * Additional fields
     *
     * @var array
     */
    protected $additionalFields = array(
        'hosts',
        'hostsnotinme'
    );
    /**
     * Alters valid method.
     *
     * @return bool
     */
    public function isValid()
    {
        return (bool)parent::isValid()
            && $this->get('shortName');
    }
    /**
     * Destroys the object.
     *
     * @param string $key the key to match for removal.
     *
     * @return bool|mixed
     */
    public function destroy($key = 'id')
    {
        self::getClass('ModuleAssociationManager')
            ->destroy(
                array(
                    'moduleID' => $this->get('id')
                )
            );
        return parent::destroy($key);
    }
    /**
     * Loads any hosts this module is not associated with.
     *
     * @return void
     */
    protected function loadHostsnotinme()
    {
        $hosts = array_diff(
            self::getSubObjectIDs('Host'),
            $this->get('hosts')
        );
        $this->set('hostsnotinme', (array)$hosts);
    }
    /**
     * Loads any hosts this module has
     *
     * @return void
     */
    protected function loadHosts()
    {
        $hosts = self::getSubObjectIDs(
            'ModuleAssociation',
            array('moduleID' => $this->get('id')),
            'hostID'
        );
        $hosts = self::getSubObjectIDs(
            'Host',
            array('id' => $hosts)
        );
        $this->set('hosts', (array)$hosts);
    }
}
