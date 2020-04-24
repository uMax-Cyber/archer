<?php
/**
 * This is used by the client to determine
 * domain joining and changing hostname.
 *
 * PHP version 5
 *
 * @category Hostname
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * This is used by the client to determine
 * domain joining and changing hostname.
 *
 * @category Hostname
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new HostnameChanger(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
