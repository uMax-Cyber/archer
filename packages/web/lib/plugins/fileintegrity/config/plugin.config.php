<?php
/**
 * Plugin configuration file.
 *
 * PHP version 5
 *
 * @category Config
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   Wayne Workman <nah@nah.com>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Plugin configuration file.
 *
 * @category Config
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   Wayne Workman <nah@nah.com>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
$archer_plugin = array();
$archer_plugin['name'] = 'fileintegrity';
$archer_plugin['description'] = sprintf(
    '%s %s, %s, %s %s.',
    _('Associates the files on nodes'),
    _('and stores their respective checksums'),
    _('mod dates'),
    _('and the location of the file on that'),
    _('particular node')
);
$archer_plugin['menuicon'] = 'fa fa-list-ol fa-fw';
$archer_plugin['menuicon_hover'] = null;
$archer_plugin['entrypoint'] = 'html/run.php';
