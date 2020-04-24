<?php
/**
 * Sends the directories to clean up.
 * Mainly for the legacy client.
 *
 * PHP version 5
 *
 * @category Dircleanup_Dirs
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Sends the directories to clean up.
 * Mainly for the legacy client.
 *
 * @category Dircleanup_Dirs
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new DirectoryCleanup(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
