<?php
/**
 * Legacy client uses this to find out
 * if the module checked is usable.
 *
 * PHP version 5
 *
 * @category ServiceModule_Active
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Legacy client uses this to find out
 * if the module checked is usable.
 *
 * @category ServiceModule_Active
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new ServiceModule(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
