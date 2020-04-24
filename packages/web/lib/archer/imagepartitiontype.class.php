<?php
/**
 * Image partition type class.
 *
 * PHP version 5
 *
 * @category ImagePartitionType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Image partition type class.
 *
 * @category ImagePartitionType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ImagePartitionType extends ARCHERController
{
    /**
     * The partition type table.
     *
     * @var string
     */
    protected $databaseTable = 'imagePartitionTypes';
    /**
     * The partitoin type fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'imagePartitionTypeID',
        'name' => 'imagePartitionTypeName',
        'type' => 'imagePartitionTypeValue',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
        'type',
    );
}
