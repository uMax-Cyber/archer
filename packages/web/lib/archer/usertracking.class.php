<?php
/**
 * UserTracking handles tracking users from client to client
 *
 * PHP version 5
 *
 * @category UserTracking
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * UserTracking handles tracking users from client to client
 *
 * @category UserTracking
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class UserTracking extends ARCHERController
{
    /**
     * DatabaseTable
     *
     * @var string
     */
    protected $databaseTable = 'userTracking';
    /**
     * DatabaseFields
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'utID',
        'hostID' => 'utHostID',
        'username' => 'utUserName',
        'action' => 'utAction',
        'datetime' => 'utDateTime',
        'description' => 'utDesc',
        'date' => 'utDate',
        'anon3' => 'utAnon3',
    );
    /**
     * DatabaseFieldsRequired
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'hostID',
        'username',
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
}
