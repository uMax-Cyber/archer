<?php
/**
 * Wake on lan management class.
 *
 * PHP version 5
 *
 * @category WakeOnLan
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Wake on lan management class.
 *
 * @category WakeOnLan
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class WakeOnLan extends ARCHERBase
{
    /**
     * UDP port default is 9.
     *
     * @var int
     */
    private static $_port = 9;
    /**
     * MAC Array holder.
     *
     * @var array
     */
    private static $_arrMAC;
    /**
     * The initializer.
     *
     * @param mixed $mac the mac or macs to use
     */
    public function __construct($mac)
    {
        parent::__construct();
        self::$_arrMAC = self::parseMacList($mac, true);
    }
    /**
     * Send the requests.
     *
     * @return void
     */
    public function send()
    {
        if (self::$_arrMAC === false
            || count(self::$_arrMAC) < 0
        ) {
            throw new Exception(self::$archerlang['InvalidMAC']);
        }
        $BroadCast = self::fastmerge(
            (array) '255.255.255.255',
            self::getBroadcast()
        );
        self::$HookManager->processEvent(
            'BROADCAST_ADDR',
            array(
                'broadcast' => &$BroadCast,
            )
        );
        foreach ((array) self::$_arrMAC as &$mac) {
            foreach ((array) $BroadCast as &$SendTo) {
                $mac->wake($SendTo, self::$_port);
                unset($SendTo);
            }
            unset($mac);
        }
    }
}
