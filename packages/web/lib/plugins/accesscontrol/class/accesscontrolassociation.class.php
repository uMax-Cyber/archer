<?php
/**
 * Access Control plugin
 *
 * PHP version 5
 *
 * @category AccessControlAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Access Control plugin
 *
 * @category AccessControlAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AccessControlAssociation extends ARCHERController
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $databaseTable = 'roleUserAssoc';
    /**
     * Table fields.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'ruaID',
        'name' => 'ruaName',
        'accesscontrolID' => 'ruaRoleID',
        'userID' => 'ruaUserID',
    );
    /**
     * Required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'accesscontrolID',
        'userID',
    );
}
