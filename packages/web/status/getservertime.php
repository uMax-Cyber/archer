<?php
/**
 * Returns the server time
 *
 * PHP version 5
 *
 * @category Getservertime
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Returns the server time
 *
 * @category Getservertime
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
session_write_close();
ignore_user_abort(true);
set_time_limit(0);
echo ARCHERCore::formatTime(
    'Now',
    'M d, Y G:i a'
);
exit;
