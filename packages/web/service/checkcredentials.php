<?php
/**
 * Checks credentials for init based calls
 *
 * PHP version 5
 *
 * @category CheckCredentials
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Checks credentials for init based calls
 *
 * @category CheckCredentials
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $username = trim($_REQUEST['username']);
    $username = base64_decode($username);
    $username = trim($username);
    $password = trim($_REQUEST['password']);
    $password = base64_decode($password);
    $password = trim($password);
    $userTest = ARCHERCore::getClass('User')
        ->passwordValidate($username, $password);
    if (!$userTest) {
        throw new Exception('#!il');
    }
    echo '#!ok';
} catch (Exception $e) {
    echo $e->getMessage();
}
