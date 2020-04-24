<?php
/**
 * Access Control plugin
 *
 * PHP version 5
 *
 * @category AccessControlRuleAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Access Control plugin
 *
 * @category AccessControlRuleAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AccessControlRuleAssociation extends ARCHERController
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $databaseTable = 'roleRuleAssoc';
    /**
     * The table fields.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'rraID',
        'name' => 'rraName',
        'accesscontrolID' => 'rraRoleID',
        'accesscontrolruleID' => 'rraRuleID',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'accesscontrolID',
        'accesscontrolruleID',
    );
}
