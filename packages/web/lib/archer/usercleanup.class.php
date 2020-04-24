<?php
/**
 * User cleanup class used for legacy client.
 *
 * PHP version 5
 *
 * @category UserCleanup
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * User cleanup class used for legacy client.
 *
 * @category UserCleanup
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class UserCleanup extends ARCHERController
{
    /**
     * The user cleanup table.
     *
     * @var string
     */
    protected $databaseTable = 'userCleanup';
    /**
     * The user cleanup fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id'        => 'ucID',
        'name'        => 'ucName',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
    );
}
