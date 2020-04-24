<?php
/**
 * Creates or updates nodes.
 *
 * PHP version 5
 *
 * @category Create_Update_Node
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Creates or updates nodes.
 *
 * PHP version 5
 *
 * @category Create_Update_Node
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
foreach ((array)$_POST as $key => &$val) {
    if (!isset($val)) {
        continue;
    }
    $_POST[$key] = trim(
        base64_decode($val)
    );
    unset($val);
}
if (!isset($_POST['archerverified'])) {
    return;
}
if (isset($_POST['newNode'])) {
    $exists = ARCHERCore::getClass('StorageNodeManager')
        ->exists($_POST['ip'], '', 'ip');
    if ($exists) {
        return;
    }
    ARCHERCore::getClass('StorageNode')
        ->set('name', trim($_POST['name']))
        ->set('path', trim($_POST['path']))
        ->set('ftppath', trim($_POST['ftppath']))
        ->set('snapinpath', trim($_POST['snapinpath']))
        ->set('sslpath', trim($_POST['sslpath']))
        ->set('ip', trim($_POST['ip']))
        ->set('maxClients', trim($_POST['maxClients']))
        ->set('user', trim($_POST['user']))
        ->set('pass', trim($_POST['pass']))
        ->set('interface', trim($_POST['interface']))
        ->set('bandwidth', trim($_POST['bandwidth']))
        ->set('webroot', trim($_POST['webroot']))
        ->set('isEnabled', '1')
        ->save();
} elseif (isset($_POST['nodePass'])) {
    foreach ((array)ARCHERCore::getClass('StorageNodeManager')
        ->find(array('ip' => $_POST['ip'])) as &$Node
    ) {
        if (($Node->get('pass') === trim($_POST['pass'])) &&
            ($Node->get('user') === trim($_POST['user']))) {
            continue;
        }
        $Node
            ->set('pass', trim($_POST['pass']))
            ->set('user', trim($_POST['user']))
            ->save();
        unset($Node);
    }
}
