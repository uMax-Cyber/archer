<?php
/**
 * Checks the database is running
 *
 * PHP version 5
 *
 * @category Dbrunning
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Checks the database is running
 *
 * @category Dbrunning
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
session_write_close();
ignore_user_abort(true);
set_time_limit(0);
$link = DatabaseManager::getLink();
$redirect = false;
if ($link) {
    $redirect = ARCHERCore::getClass('Schema', 1)
        ->get('version') == ARCHER_SCHEMA;
}
$ret = array(
    'running' => (bool)$link,
    'redirect' => (bool)$redirect,
);
$ret = json_encode($ret);
echo $ret;
exit;
