<?php
/**
 * Used for the location plugin and only checks if it is enabled
 * or not.
 *
 * PHP version 5
 *
 * @category Locationcheck
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Used for the location plugin and only checks if it is enabled
 * or not.
 *
 * @category Locationcheck
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
$count = ARCHERCore::getClass('PluginManager')
    ->count(
        array(
            'installed' => 1,
            'state' => 1,
            'name' => 'location',
        )
    );
if ($count > 0) {
    echo '##';
}
exit;
