<?php
/**
 * Site plugin
 *
 * PHP version 5
 *
 * @category SiteHostAssoc
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Site plugin
 *
 * @category SiteHostAssoc
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SiteHostAssociation extends ARCHERController
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $databaseTable = 'siteHostAssoc';
    /**
     * The table fields.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'shaID',
        'name' => 'shaName',
        'siteID' => 'shaSiteID',
        'hostID' => 'shaHostID'
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'id',
        'hostID',
        'siteID'
    );
    /**
     * The additional fields.
     *
     * @var array
     */
    protected $additionalFields = array(
        'host',
        'site'
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
        'Site' => array(
            'id',
            'siteID',
            'site'
        )
    );
}
