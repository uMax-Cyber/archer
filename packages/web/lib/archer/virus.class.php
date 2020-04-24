<?php
/**
 * Virus handler class (informative).
 *
 * PHP version 5
 *
 * @category Virus
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Virus handler class (informative).
 *
 * @category Virus
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Virus extends ARCHERController
{
    /**
     * The virus table.
     *
     * @var string
     */
    protected $databaseTable = 'virus';
    /**
     * The virus fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'vID',
        'name' => 'vName',
        'mac' => 'vHostMAC',
        'file' => 'vOrigFile',
        'date' => 'vDateTime',
        'mode' => 'vMode',
        'anon2' => 'vAnon2',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
        'mac',
        'file',
        'date',
    );
}
