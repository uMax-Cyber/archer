<?php
/**
 * This presents the advanced menu
 *
 * PHP version 5
 *
 * @category Advanced
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * This presents the advanced menu
 *
 * @category Advanced
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../../commons/base.inc.php';
header('Content-type: text/plain');
/**
 * Parses the statements to print the advanced menu
 *
 * @param array $Send the data to be parsed
 *
 * @return void
 */
$parseMe = function ($Send) {
    foreach ($Send as $ipxe => &$val) {
        printf("%s\n", implode("\n", (array)$val));
        unset($val);
    }
};
$login = isset($_REQUEST['login']);
$user = trim($_REQUEST['username']);
$pass = trim($_REQUEST['password']);
if ($login) {
    $Send['loginstuff'] = array(
        '#!ipxe',
        'clear username',
        'clear password',
        'login',
        'params',
        'param username ${username}',
        'param password ${password}',
        'chain ${boot-url}/service/ipxe/advanced.php##params',
    );
    $parseMe($Send);
    unset($_REQUEST['login']);
}
if (!empty($user)) {
    $tmp = ARCHERCore::attemptLogin($user, $pass);
    if ($tmp) {
        $Send['loginsuccess'] = array(
            '#!ipxe',
            'set userID ${username}',
            'chain ${boot-url}/service/ipxe/advanced.php',
        );
    } else {
        $Send['loginfail'] = array(
            '#!ipxe',
            'clear username',
            'clear password',
            'echo Invalid login!',
            'sleep 3',
            'chain -ar ${boot-url}/service/ipxe/advanced.php',
        );
        $parseMe($Send);
        unset($user, $pass);
    }
}
printf(
    "#!ipxe\n%s",
    ARCHERCore::getSetting('ARCHER_PXE_ADVANCED')
);
