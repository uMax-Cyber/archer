<?php
/**
 * Site plugin
 *
 * PHP version 5
 *
 * @category SiteAssoc
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Site plugin
 *
 * @category SiteAssoc
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SiteUserAssociation extends ARCHERController
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $databaseTable = 'siteUserAssoc';
    /**
     * The table fields.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'suaID',
        'name' => 'suaName',
        'siteID' => 'suaSiteID',
        'userID' => 'suaUserID',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'id',
        'userID',
        'siteID'
    );
    /**
     * The additional fields.
     *
     * @var array
     */
    protected $additionalFields = array(
        'user',
        'site'
    );
    /**
     * Database -> Class field relationships
     *
     * @var array
     */
    protected $databaseFieldClassRelationships = array(
        'User' => array(
            'id',
            'userID',
            'user'
        ),
        'Site' => array(
            'id',
            'siteID',
            'site'
        )
    );
}
