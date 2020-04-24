<?php
/**
 * Legacy client use only just returns the users to cleanup
 *
 * PHP version 5
 *
 * @category UserCleaner
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Legacy client use only just returns the users to cleanup
 *
 * @category UserCleaner
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class UserCleaner extends ARCHERClient implements ARCHERClientSend
{
    /**
     * Module associated shortname
     *
     * @var string
     */
    public $shortName = 'usercleanup';
    /**
     * Sends the data to the client
     *
     * @return void
     */
    public function send()
    {
        $this->send = "#!start\n";
        foreach ((array)self::getClass('UserCleanupManager')
            ->find() as &$User
        ) {
            $this->send .= sprintf(
                "%s\n",
                base64_encode($User->get('name'))
            );
            unset($User);
        }
        $this->send .= "#!end";
    }
}
