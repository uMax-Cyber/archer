<?php
/**
 * Plugin configuration file.
 *
 * PHP version 5
 *
 * @category Config
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   George Rowlett <nah@nah.com>
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
$archer_plugin['name'] = 'windowskey';
$archer_plugin['description'] = sprintf(
    '%s %s. %s %s. %s %s. %s: %s %s.',
    _('Windows keys is a plugin that associates product keys'),
    _('for Microsoft Windows to images'),
    _('Those images should be activated with the associated'),
    _('key'),
    _('The key will be assigned to registered hosts when a'),
    _('deploy task occurs for it'),
    _('NOTE'),
    _('When the plugin is removed, the assigned key will remain'),
    _('with the host')
);
$archer_plugin['menuicon'] = 'fa fa-windows fa-fw';
$archer_plugin['menuicon_hover'] = null;
$archer_plugin['entrypoint'] = 'html/run.php';
