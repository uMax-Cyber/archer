<?php
/**
 * The os class.
 *
 * PHP version 5
 *
 * @category OS
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The os class.
 *
 * @category OS
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class OS extends ARCHERController
{
    /**
     * The os table name.
     *
     * @var string
     */
    protected $databaseTable = 'os';
    /**
     * The os fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'osID',
        'name' => 'osName',
        'description' => 'osDescription'
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
