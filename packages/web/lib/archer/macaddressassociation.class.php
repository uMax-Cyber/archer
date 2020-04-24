<?php
/**
 * MAC Address associations
 *
 * PHP version 5
 *
 * @category MACAddressAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * MAC Address associations
 *
 * @category MACAddressAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class MACAddressAssociation extends ARCHERController
{
    /**
     * The database table associated for this class
     *
     * @var string
     */
    protected $databaseTable = 'hostMAC';
    /**
     * The fields the table contains and commonizing names
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'hmID',
        'hostID' => 'hmHostID',
        'mac' => 'hmMAC',
        'description' => 'hmDesc',
        'pending' => 'hmPending',
        'primary' => 'hmPrimary',
        'clientIgnore' => 'hmIgnoreClient',
        'imageIgnore' => 'hmIgnoreImaging',
    );
    /**
     * The fields required for the db
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'hostID',
        'mac',
    );
    /**
     * Additional fields
     *
     * @var array
     */
    protected $additionalFields = array(
        'host'
    );
    /**
     * Returns the host associated
     *
     * @return object
     */
    public function getHost()
    {
        if (!$this->isLoaded('host')) {
            $this->set('host', new Host($this->get('hostID')));
        }
        return $this->get('host');
    }
    /**
     * Returns if mac is pending
     *
     * @return bool
     */
    public function isPending()
    {
        return (bool)$this->get('pending');
    }
    /**
     * Returns if mac is ignored for the client
     *
     * @return bool
     */
    public function isClientIgnored()
    {
        return (bool)$this->get('clientIgnore');
    }
    /**
     * Returns if mac is ignored for imaging
     *
     * @return bool
     */
    public function isImageIgnored()
    {
        return (bool)$this->get('imageIgnore');
    }
    /**
     * Returns if mac is primary
     *
     * @return bool
     */
    public function isPrimary()
    {
        return (bool)$this->get('primary')
            && !$this->get('pending');
    }
}
