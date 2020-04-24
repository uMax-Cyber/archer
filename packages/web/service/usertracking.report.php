<?php
/**
 * Tracks users logging in and out
 *
 * PHP version 5
 *
 * @category UserTrack
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Tracks users logging in and out
 *
 * @category UserTrack
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new UserTrack(
    true,
    !isset($_REQUEST['newService'])
);
