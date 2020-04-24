<?php
/**
 * The pushbullet database and object definer
 *
 * PHP version 5
 *
 * @category Pushbullet
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The pushbullet database and object definer
 *
 * @category Pushbullet
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Pushbullet extends ARCHERController
{
    /**
     * The pushbullet table
     *
     * @var string
     */
    protected $databaseTable = 'pushbullet';
    /**
     * The pushbullet fields and common names
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'pID',
        'token' => 'pToken',
        'name' => 'pName',
        'email' => 'pEmail',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'token',
        'name',
        'email',
    );
}
