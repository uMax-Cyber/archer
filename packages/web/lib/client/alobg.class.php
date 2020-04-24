<?php
/**
 * Sends the auto logout background image
 * NOTE: Only used on legacy client
 *
 * PHP version 5
 *
 * @category ALOGB
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Sends the auto logout background image
 * NOTE: Only used on legacy client
 *
 * @category ALOGB
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ALOBG extends ARCHERClient implements ARCHERClientSend
{
    /**
     * Module associated shortname
     *
     * @var string
     */
    public $shortName = 'autologout';
    /**
     * Stores the data to send
     *
     * @var string
     */
    protected $send;
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send()
    {
        $this->send = self::getSetting('ARCHER_CLIENT_AUTOLOGOFF_BGIMAGE');
    }
}
