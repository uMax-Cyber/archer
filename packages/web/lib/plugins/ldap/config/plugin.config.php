<?php
/**
 * Plugin configuration file.
 *
 * PHP version 5
 *
 * @category Config
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Plugin configuration file.
 *
 * @category Config
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
$archer_plugin = array();
$archer_plugin['name'] = 'LDAP';
$archer_plugin['description'] = 'LDAP plugin to use a LDAP validation with ARCHER'
    . '. Ensure you have the php ldap module installed and loaded on your '
    . 'server.  This can be done typically by using your distros package '
    . 'manager software.  (e.g. apt-get install php5-ldap, '
    . 'yum install php-ldap). Version: 1.5.5_1';
$archer_plugin['menuicon'] = 'fa fa-key fa-fw';
$archer_plugin['menuicon_hover'] = null;
$archer_plugin['entrypoint'] = 'html/run.php';
