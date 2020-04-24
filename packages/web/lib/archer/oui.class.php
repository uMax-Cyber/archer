<?php
/**
 * The oui class.
 *
 * PHP version 5
 *
 * @category OUI
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archerproject.rog
 */
/**
 * The oui class.
 *
 * @category OUI
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archerproject.rog
 */
class OUI extends ARCHERController
{
    /**
     * The oui table name.
     *
     * @var string
     */
    protected $databaseTable = 'oui';
    /**
     * The oui fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'ouiID',
        'prefix' => 'ouiMACPrefix',
        'name' => 'ouiMan',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'prefix',
        'name',
    );
}
