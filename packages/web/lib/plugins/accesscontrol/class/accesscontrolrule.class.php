<?php
/**
 * Access Control plugin
 *
 * PHP version 5
 *
 * @category AccessControlRule
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Access Control plugin
 *
 * @category AccessControlRule
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AccessControlRule extends ARCHERController
{
    /**
     * The example table.
     *
     * @var string
     */
    protected $databaseTable = 'rules';
    /**
     * The database fields and commonized items.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'ruleID',
        'name' => 'ruleName',
        'type' => 'ruleType',
        'value' => 'ruleValue',
        'parent' => 'ruleParent',
        'createdBy' => 'ruleCreatedBy',
        'createdTime' => 'ruleCreatedTime',
        'node' => 'ruleNode'
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'type',
        'value',
    );
    /**
     * Additional fields
     *
     * @var array
     */
    protected $additionalFields = array(
        'parent',
    );
}
