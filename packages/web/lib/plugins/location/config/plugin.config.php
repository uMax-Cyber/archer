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
$archer_plugin['name'] = 'location';
$archer_plugin['description'] = sprintf(
    '%s %s %s. %s %s %s.',
    _('Location is a plugin that allows your ARCHER Server'),
    _('to operate in an environment where there may be'),
    _('multiple places to get your image'),
    _('This is especially useful if you have multiple'),
    _('sites with clients moving back and forth'),
    _('between different sites')
);
$archer_plugin['menuicon'] = 'fa fa-globe fa-fw';
$archer_plugin['menuicon_hover'] = null;
$archer_plugin['entrypoint'] = 'html/run.php';
