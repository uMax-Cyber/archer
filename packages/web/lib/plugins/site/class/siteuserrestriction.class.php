<?php
/**
 * Site plugin
 *
 * PHP version 7
 *
 * @category SiteUserRestriction
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Site plugin
 *
 * @category SiteUserRestriction
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class SiteUserRestriction extends ARCHERController
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $databaseTable = 'siteUserRestriction';
    /**
     * The table fields.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'surID',
        'userID' => 'surUserID',
        'isRestricted' => 'surRestricted'
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'id',
        'userID'
    );
    /**
     * Additional fields.
     *
     * @var array
     */
    protected $additionalFields = array(
        'user'
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
        )
    );
}
