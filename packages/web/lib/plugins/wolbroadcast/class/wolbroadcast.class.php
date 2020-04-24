<?php
/**
 * Wolbroadcast Class handler.
 *
 * PHP version 5
 *
 * @category Wolbroadcast
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Wolbroadcast Class handler.
 *
 * @category Wolbroadcast
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Wolbroadcast extends ARCHERController
{
    /**
     * The wolbroadcast table
     *
     * @var string
     */
    protected $databaseTable = 'wolbroadcast';
    /**
     * The wolbroadcast fields and common names
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'wbID',
        'name' => 'wbName',
        'description' => 'wbDesc',
        'broadcast' => 'wbBroadcast',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
        'broadcast',
    );
}
