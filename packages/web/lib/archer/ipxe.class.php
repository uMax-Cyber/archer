<?php
/**
 * The ipxe class.
 *
 * PHP version 5
 *
 * @category Ipxe
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The ipxe class.
 *
 * @category Ipxe
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Ipxe extends ARCHERController
{
    /**
     * The ipxe table name.
     *
     * @var string
     */
    protected $databaseTable = 'ipxeTable';
    /**
     * The ipxe table fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'ipxeID',
        'product' => 'ipxeProduct',
        'manufacturer' => 'ipxeManufacturer',
        'mac' => 'ipxeMAC',
        'success' => 'ipxeSuccess',
        'failure' => 'ipxeFailure',
        'file' => 'ipxeFilename',
        'version' => 'ipxeVersion',
    );
}
