<?php
/**
 * Check if the node exists and return it
 *
 * PHP version 5
 *
 * @category Check_Node_Exists
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Check if the node exists and return it
 *
 * PHP version 5
 *
 * @category Check_Node_Exists
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
$val = '';
$exists = ARCHERCore::getClass('StorageNodeManager')
    ->exists($_POST['ip'], '', 'ip');
if ($exists) {
    $val = 'exists';
}
echo $val;
exit;
