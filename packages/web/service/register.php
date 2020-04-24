<?php
/**
 * Passes the legacy and new client
 * host register information.  Particularly
 * useful for adding additional mac addresses.
 *
 * PHP version 5
 *
 * @category Register
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Passes the legacy and new client
 * host register information.  Particularly
 * useful for adding additional mac addresses.
 *
 * @category Register
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new RegisterClient(
    true,
    false,
    isset($_REQUEST['newService']),
    false,
    isset($_REQUEST['newService'])
);
