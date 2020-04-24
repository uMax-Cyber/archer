<?php
/**
 * Presents the ARCHER Kernels version that the clients will use.
 *
 * PHP version 5
 *
 * @category KernelVersion
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Presents the ARCHER Kernels version that the clients will use.
 *
 * @category KernelVersion
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
$url = filter_input(INPUT_POST, 'url');
if ($url) {
    $res = $ARCHERURLRequests
        ->process($url);
    foreach ((array)$res as &$response) {
        echo $response;
        unset($response);
    }
    exit;
}
$kernelvers = function ($kernel) {
    $currpath = sprintf(
        '%s%sservice%sipxe%s%s',
        BASEPATH,
        DS,
        DS,
        DS,
        $kernel
    );
    $basepath = escapeshellarg($currpath);
    $findstr = sprintf(
        'strings %s | grep -A1 "%s:" | tail -1 | awk \'{print $1}\'',
        $basepath,
        'Undefined video mode number'
    );
    return shell_exec($findstr);
};
printf(
    "%s\n",
    ARCHER_VERSION
);
printf(
    "bzImage Version: %s\n",
    $kernelvers('bzImage')
);
printf(
    "bzImage32 Version: %s",
    $kernelvers('bzImage32')
);
