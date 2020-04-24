<?php
/**
 * Stores any actions to the database.
 *
 * PHP version 5
 *
 * @category History
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Stores any actions to the database.
 *
 * @category History
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class History extends ARCHERController
{
    /**
     * History table name.
     *
     * @var string
     */
    protected $databaseTable = 'history';
    /**
     * History field and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'hID',
        'info' => 'hText',
        'createdBy' => 'hUser',
        'createdTime' => 'hTime',
        'ip' => 'hIP',
    );
}
