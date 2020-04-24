<?php
/**
 * Dir Cleaner handles directory cleanup
 *
 * PHP version 5
 *
 * @category DirCleaner
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Dir Cleaner handles directory cleanup
 *
 * @category DirCleaner
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class DirCleaner extends ARCHERController
{
    /**
     * Directory Cleaner table
     *
     * @var string
     */
    protected $databaseTable = 'dirCleaner';
    /**
     * Directory Cleaner fields and common names
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'dcID',
        'path' => 'dcPath',
    );
    /**
     * Directory Cleaner required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'path',
    );
}
