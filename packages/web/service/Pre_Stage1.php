<?php
/**
 * Check in tasks.
 *
 * PHP version 5
 *
 * @category Check_In
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Check in tasks.
 *
 * @category Check_In
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
ARCHERCore::getClass('TaskQueue')
    ->checkIn();
