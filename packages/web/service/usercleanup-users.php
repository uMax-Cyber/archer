<?php
/**
 * Cleans up users ony good for Windows XP
 *
 * PHP version 5
 *
 * @category Usercleanup_Users
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Cleans up users ony good for Windows XP
 *
 * @category Usercleanup_Users
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new UserCleaner(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
