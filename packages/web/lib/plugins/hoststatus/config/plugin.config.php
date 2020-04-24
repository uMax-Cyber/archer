<?php
/**
 * Plugin configuration file.
 *
 * @category Config
 * @package  ARCHERProject
 * @author   Fernando Gietz <fernando.gietz@ehu.eus>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
$archer_plugin = array();
$archer_plugin['name'] = 'hoststatus';
$archer_plugin['description'] = sprintf(
    '%s %s. %s. %s. %s.',
    _('Host Status is a plugin that adds a new entry in the Host edit Page'),
    _('that detects the status on the fly, poweron or poweroff and the OS, of the client'),
    _('<p>Possible status: Windows, Linux, FOS and Unknown'),
    _('<p>Dependencies: port TCP 445 open in the client side'),
    _('<p>Version 1.5.5')
);
$archer_plugin['menuicon'] = 'fa fa-eye fa-fw';
$archer_plugin['menuicon_hover'] = null;
$archer_plugin['entrypoint'] = 'html/run.php';
