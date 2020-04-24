<?php
/**
 * The image type class.
 *
 * PHP version 5
 *
 * @category ImageType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The image type class.
 *
 * @category ImageType
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ImageType extends ARCHERController
{
    /**
     * The image type table.
     *
     * @var string
     */
    protected $databaseTable = 'imageTypes';
    /**
     * The image type fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'imageTypeID',
        'name' => 'imageTypeName',
        'type' => 'imageTypeValue'
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
