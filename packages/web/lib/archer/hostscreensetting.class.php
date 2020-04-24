<?php
/**
 * Host screen settings class.
 *
 * PHP version 5
 *
 * @category HostScreenSetting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Host screen settings class.
 *
 * @category HostScreenSetting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HostScreenSetting extends ARCHERController
{
    /**
     * The host screen settings table name.
     *
     * @var string
     */
    protected $databaseTable = 'hostScreenSettings';
    /**
     * The host screen settings fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'hssID',
        'hostID' => 'hssHostID',
        'width' => 'hssWidth',
        'height' => 'hssHeight',
        'refresh' => 'hssRefresh',
        'orientation' => 'hssOrientation',
        'other1' => 'hssOther1',
        'other2' => 'hssOther2',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'hostID',
    );
    /**
     * Gets the host object.
     *
     * @return object
     */
    public function getHost()
    {
        return new Host($this->get('hostID'));
    }
}
