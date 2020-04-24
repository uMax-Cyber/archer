<?php
/**
 * Multicast check in
 *
 * PHP version 5
 *
 * @category Multicast_Checkin
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Multicast check in
 *
 * @category Multicast_Checkin
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
ARCHERCore::getClass('TaskQueue')
    ->checkIn();
