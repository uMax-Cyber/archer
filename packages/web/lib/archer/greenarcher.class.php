<?php
/**
 * GreenArcher handler, specific to legacy client now.
 *
 * PHP version 5
 *
 * @category GreenArcher
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * GreenArcher handler, specific to legacy client now.
 *
 * @category GreenArcher
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class GreenArcher extends ARCHERController
{
    /**
     * Green archer table name.
     *
     * @var string
     */
    public $databaseTable = 'greenArcher';
    /**
     * Green archer field names and common names.
     *
     * @var array
     */
    public $databaseFields = array(
        'id'    => 'gfID',
        'hostID' => 'gfHostID',
        'hour'    => 'gfHour',
        'min'    => 'gfMin',
        'action' => 'gfAction',
        'days'    => 'gfDays',
    );
    /**
     * Returns the Host object.
     *
     * @return object
     */
    public function getHost()
    {
        return new Host($this->get('hostID'));
    }
}
