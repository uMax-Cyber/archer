<?php
/**
 * Presents the client with auto logout info.
 *
 * PHP version 5
 *
 * @category HostAutoLogout
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Presents the client with auto logout info.
 *
 * @category HostAutoLogout
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HostAutoLogout extends ARCHERController
{
    /**
     * The host auto logout table.
     *
     * @var string
     */
    protected $databaseTable = 'hostAutoLogOut';
    /**
     * The host auto logout fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'haloID',
        'hostID' => 'haloHostID',
        'time' => 'haloTime',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'hostID',
        'time',
    );
    /**
     * Return the host object.
     *
     * @return object
     */
    public function getHost()
    {
        return new Host($this->get('hostID'));
    }
}
