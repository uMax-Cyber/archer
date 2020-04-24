<?php
/**
 * The imaging log class.
 *
 * PHP version 5
 *
 * @category ImagingLog
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The imaging log class.
 *
 * @category ImagingLog
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ImagingLog extends ARCHERController
{
    /**
     * The imaging log table.
     *
     * @var string
     */
    protected $databaseTable = 'imagingLog';
    /**
     * The imaging log fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'ilID',
        'hostID' => 'ilHostID',
        'start' => 'ilStartTime',
        'finish' => 'ilFinishTime',
        'image' => 'ilImageName',
        'type' => 'ilType',
        'createdBy' => 'ilCreatedBy',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'hostID',
        'start',
        'finish',
        'image',
        'type',
    );
    /**
     * Additional fields.
     *
     * @var array
     */
    protected $additionalFields = array(
        'host',
        'images',
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
        )
    );
    /**
     * Return the host object.
     *
     * @return object
     */
    public function getHost()
    {
        return $this->get('host');
    }
}
