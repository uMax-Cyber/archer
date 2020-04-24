<?php
/**
 * Snapin client checkin
 *
 * PHP version 5
 *
 * @category Snapin_Checkin
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Snapin client checkin
 *
 * @category Snapin_Checkin
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new SnapinClient(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
