<?php
/**
 * Hook event tracker.
 *
 * PHP Version 5
 *
 * @category HookEvent
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Hook event tracker.
 *
 * @category HookEvent
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HookEvent extends ARCHERController
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $databaseTable = 'hookEvents';
    /**
     * The table fields.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'heID',
        'name' => 'heName'
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'name'
    );
}
