<?php
/**
 * Pxe menu items class.
 *
 * PHP version 5
 *
 * @category PXEMenuOptions
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Pxe menu items class.
 *
 * @category PXEMenuOptions
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class PXEMenuOptions extends ARCHERController
{
    /**
     * The PXE menu items table.
     *
     * @var string
     */
    protected $databaseTable = 'pxeMenu';
    /**
     * The PXE menu items fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'pxeID',
        'name' => 'pxeName',
        'description' => 'pxeDesc',
        'params' => 'pxeParams',
        'default' => 'pxeDefault',
        'regMenu' => 'pxeRegOnly',
        'args' => 'pxeArgs',
        'hotkey' => 'pxeHotKeyEnable',
        'keysequence' => 'pxeKeySequence',
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
