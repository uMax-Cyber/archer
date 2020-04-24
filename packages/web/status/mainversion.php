<?php
/**
 * Gets version information
 *
 * PHP version 5
 *
 * @category Mainversion
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Gets version information
 *
 * @category Mainversion
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
session_write_close();
ignore_user_abort(true);
set_time_limit(0);
$url = 'https://archer.umax.uz/version/index.php';
$data = array(
    'version' => ARCHER_VERSION,
);
$res = $ARCHERURLRequests->process(
    $url,
    'POST',
    $data
);
$res = array_shift($res);
$res = json_encode($res);
echo $res;
exit;
