<?php
/**
 * Plugin run file.
 *
 * PHP version 5
 *
 * @category Run
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Plugin run file.
 *
 * @category Run
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
$pluginIDs = self::getSubObjectIDs(
    'Plugin',
    array('name' => 'example')
);
$pluginIDs = @min($pluginIDs);
$plugin = new Plugin($pluginIDs);
if (!$plugin->isValid()) {
    die(
        _('Unable to determine plugin details')
    );
}
$ARCHERCore->title = sprintf(
    '%s: %s',
    _('Plugin'),
    $plugin->get('name')
);
printf(
    '<p>%s: %s</p>',
    _('Plugin Description'),
    $plugin->get('description')
);
echo '<p>This is just an example of information pushed out '
    . 'if the plugin is installed!</p>';
