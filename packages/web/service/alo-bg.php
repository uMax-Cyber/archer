<?php
/**
 * Legacy client only, gives the background image
 * to use.
 *
 * PHP version 5
 *
 * @category ALO-BG
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Legacy client only, gives the background image
 * to use.
 *
 * @category ALO-BG
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
new ALOBG(
    true,
    false,
    false,
    false,
    isset($_REQUEST['newService'])
);
