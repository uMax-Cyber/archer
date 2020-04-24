<?php
/**
 * Autologout information client
 *
 * PHP version 5
 *
 * @category Autologout
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Autologout information client
 *
 * @category Autologout
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new Autologout(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
