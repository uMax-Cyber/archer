<?php
/**
 * Handles display manager
 *
 * PHP version 5
 *
 * @category DisplayManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Handles display manager
 *
 * @category DisplayManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class DisplayManager extends ARCHERClient implements ARCHERClientSend
{
    /**
     * Function returns data that will be translated to json
     *
     * @return array
     */
    public function json()
    {
        return array(
            'x' => self::$Host->getDispVals('width'),
            'y' => self::$Host->getDispVals('height'),
            'r' => self::$Host->getDispVals('refresh'),
        );
    }
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send()
    {
        $this->send = base64_encode(
            sprintf(
                '%dx%dx%d',
                self::$Host->getDispVals('width'),
                self::$Host->getDispVals('height'),
                self::$Host->getDispVals('refresh')
            )
        );
    }
}
