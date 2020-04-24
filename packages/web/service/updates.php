<?php
/**
 * Legacy client handles module updates
 *
 * PHP version 5
 *
 * @category Updates
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Legacy client handles module updates
 *
 * @category Updates
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new UpdateClient(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
