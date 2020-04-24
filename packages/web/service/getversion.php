<?php
/**
 * Get version, used for multiple things.
 * The new archer client uses this to tell a client to update.
 * It also is used to return the current running ARCHER Version.
 * If the client update is disabled, it should return 0.0.0
 * as all clients use a numerical system of which 0.0.0 is below.
 *
 * PHP version 5
 *
 * @category Getversion
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Get version, used for multiple things.
 * The new archer client uses this to tell a client to update.
 * It also is used to return the current running ARCHER Version.
 * If the client update is disabled, it should return 0.0.0
 * as all clients use a numerical system of which 0.0.0 is below.
 *
 * @category Getversion
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
$clientUpdate = (bool)ARCHERCore::getSetting('ARCHER_CLIENT_AUTOUPDATE');
if (isset($_REQUEST['client'])) {
    $ver = (
        $clientUpdate ?
        '9.9.99' :
        '0.0.0'
    );
} elseif (isset($_REQUEST['clientver'])) {
    $ver = (
        $clientUpdate ?
        ARCHER_CLIENT_VERSION :
        '0.0.0'
    );
} elseif (isset($_REQUEST['url'])) {
    $url = $_REQUEST['url'];
    $res = $ARCHERURLRequests
        ->process($_REQUEST['url']);
    $ver = array_shift($res);
} else {
    $ver = ARCHER_VERSION;
}
echo $ver;
exit;
