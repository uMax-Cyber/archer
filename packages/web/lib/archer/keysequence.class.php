<?php
/**
 * The key sequence class.
 *
 * PHP version 5
 *
 * @category KeySequence
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The key sequence class.
 *
 * @category KeySequence
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class KeySequence extends ARCHERController
{
    /**
     * The keysequence table name.
     *
     * @var string
     */
    protected $databaseTable = 'keySequence';
    /**
     * The keysequence field and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'ksID',
        'name' => 'ksValue',
        'ascii' => 'ksAscii',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name',
        'ascii',
    );
}
