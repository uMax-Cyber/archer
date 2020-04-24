<?php
/**
 * Presents Hardware/Software information of the server.
 *
 * PHP version 5
 *
 * @category HardwareInfo
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Presents Hardware/Software information of the server.
 *
 * @category HardwareInfo
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
session_write_close();
ignore_user_abort(true);
set_time_limit(0);
header('Content-Type: text/event-stream');
$hwinfo = ARCHERCore::getHWInfo();
foreach ((array)$hwinfo as $index => &$val) {
    echo "$val\n";
    unset($val);
}
