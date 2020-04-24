<?php
/**
 * Deals with the client updater files
 *
 * PHP version 5
 *
 * @category ClientUpdater
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Deals with the client updater files
 *
 * @category ClientUpdater
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ClientUpdater extends ARCHERController
{
    /**
     * Client Updater table
     *
     * @var string
     */
    protected $databaseTable = 'clientUpdates';
    /**
     * Client Updater fields and common names
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'cuID',
        'name' => 'cuName',
        'md5' => 'cuMD5',
        'type' => 'cuType',
        'file' => 'cuFile',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
        'file',
    );
}
