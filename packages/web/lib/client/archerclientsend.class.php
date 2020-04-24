<?php
/**
 * A basic interface to define how client classes should operate
 *
 * PHP version 5
 *
 * @category ARCHERClientSend
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * A basic interface to define how client classes should operate
 *
 * @category ARCHERClientSend
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
interface ARCHERClientSend
{
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send();
}
