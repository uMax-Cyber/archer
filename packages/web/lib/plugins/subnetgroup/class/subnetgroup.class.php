<?php
/**
 * Subnetgroup Class handler.
 *
 * PHP version 5
 *
 * @category Subnetgroup
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Subnetgroup Class handler.
 *
 * @category Subnetgroup
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Subnetgroup extends ARCHERController
{
    /**
     * The subnetgroup table
     *
     * @var string
     */
    protected $databaseTable = 'subnetgroup';
    /**
     * The subnetgroup fields and common names
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'sgID',
        'name' => 'sgName',
        'groupID' => 'sgGroupID',
        'subnets' => 'sgSubnets',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'groupID',
        'subnets',
    );
    /**
     * Additional fields
     *
     * @var array
     */
    protected $additionalFields = array(
        'group',
    );
    /**
     * Database -> Class field relationships
     *
     * @var array
     */
    protected $databaseFieldClassRelationships = array(
        'Group' => array(
            'id',
            'groupID',
            'group'
        ),
    );
}
