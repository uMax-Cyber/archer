<?php
/**
 * Gets free space of disk/partition holding images from server
 *
 * PHP version 5
 *
 * @category Freespace
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Gets free space of disk/partition holding images from server
 *
 * @category Freespace
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
session_write_close();
ignore_user_abort(true);
set_time_limit(0);
header('Content-Type: text/event-stream');
$decodePath = base64_decode($_REQUEST['path']);
if (!(file_exists($decodePath)
    && is_readable($decodePath)
    && is_dir($decodePath))
) {
    return;
}
$folder = escapeshellarg(
    base64_decode($_REQUEST['path'])
);
$output = `df -PB1 $folder | tail -1`;
$test = preg_match(
    '/\d+\s+(\d+)\s+(\d+)\s+\d+\%.*$/',
    $output,
    $match
);
if (!$test) {
    return;
}
$hdfree = $match[2];
$hdused = $match[1];
$data = array(
    'free' => $hdfree,
    'used' => $hdused,
);
echo json_encode($data);
exit;
