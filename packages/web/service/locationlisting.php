<?php
/**
 * Returns a listing of all locations in the system.
 *
 * PHP version 5
 *
 * @category Locationlisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Returns a listing of all locations in the system.
 *
 * @category Locationlisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $locationCount = ARCHERCore::getClass('LocationManager')
        ->count();
    if ($locationCount < 0) {
        throw new Exception(
            _('There are no locations on this server')
        );
    }
    $locationids = ARCHERCore::getSubObjectIDs('Location');
    $locationnames = ARCHERCore::getSubObjectIDs(
        'Location',
        array('id' => $locationids),
        'name'
    );
    foreach ((array)$locationids as $index => $locationid) {
        printf(
            '\tID# %d\t-\t%s\n',
            $locationid,
            $locationnames[$index]
        );
        unset(
            $locationid,
            $locationnames[$index],
            $locationids[$index]
        );
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
exit;
