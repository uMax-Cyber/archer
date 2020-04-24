<?php
/**
 * The association between hosts and locations.
 *
 * PHP version 5
 *
 * @category LocationAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The association between hosts and locations.
 *
 * @category LocationAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class LocationAssociation extends ARCHERController
{
    /**
     * The association table.
     *
     * @var string
     */
    protected $databaseTable = 'locationAssoc';
    /**
     * The association fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'laID',
        'locationID' => 'laLocationID',
        'hostID' => 'laHostID',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'locationID',
        'hostID',
    );
    /**
     * Additional fields
     *
     * @var array
     */
    protected $additionalFields = array(
        'host',
        'location'
    );
    /**
     * Database -> Class field relationships
     *
     * @var array
     */
    protected $databaseFieldClassRelationships = array(
        'Host' => array(
            'id',
            'hostID',
            'host'
        ),
        'Location' => array(
            'id',
            'locationID',
            'location'
        )
    );
    /**
     * Return the associated location.
     *
     * @return object
     */
    public function getLocation()
    {
        return $this->get('location');
    }
    /**
     * Return the associated host.
     *
     * @return host
     */
    public function getHost()
    {
        return $this->get('host');
    }
    /**
     * Return the locations storage group.
     *
     * @return object
     */
    public function getStorageGroup()
    {
        return $this->getLocation()->getStorageGroup();
    }
    /**
     * Return the locations storage node.
     *
     * @return object
     */
    public function getStorageNode()
    {
        return $this->getLocation()->getStorageNode();
    }
    /**
     * Return the location is using inits/kernels.
     *
     * @return bool
     */
    public function isTFTP()
    {
        return (bool)$this->getLocation()->get('tftp');
    }
}
