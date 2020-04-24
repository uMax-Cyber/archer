<?php
/**
 * Handles auto log information as requested.
 *
 * PHP version 5
 *
 * @category AutoLogout
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Handles auto log information as requested.
 *
 * @category AutoLogout
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Autologout extends ARCHERClient implements ARCHERClientSend
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
     * Function returns data that will be translated to json
     *
     * @return array
     */
    public function json()
    {
        $time = self::$Host->getAlo();
        if ($time < 5) {
            return array('error' => 'time');
        }
        return array('time' => $time * 60);
    }
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send()
    {
        $time = self::$Host->getAlo();
        if (self::$newService) {
            if ($time < 5) {
                throw new Exception('#!time');
            }
            $this->send = $time * 60;
        } else {
            $this->send = base64_encode($time);
        }
    }
}
