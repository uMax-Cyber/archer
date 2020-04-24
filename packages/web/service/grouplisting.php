<?php
/**
 * Returns a listing of all groups in the system.
 *
 * PHP version 5
 *
 * @category Grouplisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Returns a listing of all groups in the system.
 *
 * @category Grouplisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $groupCount = ARCHERCore::getClass('GroupManager')
        ->count();
    if ($groupCount < 1) {
        throw new Exception(
            _('There are no groups on this server')
        );
    }
    $groupids = ARCHERCore::getSubObjectIDs('Group');
    $groupnames = ARCHERCore::getSubObjectIDs(
        'Group',
        array('id' => $groupids),
        'name'
    );
    foreach ((array)$groupids as $index => $groupid) {
        printf(
            '\tID# %d\t-\t%s\n',
            $groupid,
            $groupnames[$index]
        );
        unset(
            $groupid,
            $groupnames[$index],
            $groupids[$index]
        );
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
exit;
