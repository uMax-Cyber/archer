<?php
/**
 * Returns a listing of all snapins in the system.
 *
 * PHP version 5
 *
 * @category Snapinlisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Returns a listing of all snapins in the system.
 *
 * @category Snapinlisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $snapinCount = ARCHERCore::getClass('SnapinManager')
        ->count();
    if ($snapinCount < 1) {
        throw new Exception(
            _('There are no snapins on this server')
        );
    }
    $snapinids = ARCHERCore::getSubObjectIDs('Snapin');
    $snapinnames = ARCHERCore::getSubObjectIDs(
        'Snapin',
        array('id' => $snapinids),
        'name'
    );
    foreach ((array)$snapinids as $index => $snapinid) {
        printf(
            '\tID# %d\t-\t%s\n',
            $snapinid,
            $snapinnames[$index]
        );
        unset(
            $snapinid,
            $snapinnames[$index],
            $snapinids[$index]
        );
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
exit;
