<?php
/**
 * Display sender for the clients
 *
 * PHP version 5
 *
 * @category DisplayManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Display sender for the clients
 *
 * @category DisplayManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new DisplayManager(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
