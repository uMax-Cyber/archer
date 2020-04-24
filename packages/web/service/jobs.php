<?php
/**
 * Checks for any jobs for the host
 *
 * PHP version 5
 *
 * @category Jobs
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Checks for any jobs for the host
 *
 * @category Jobs
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new Jobs(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
