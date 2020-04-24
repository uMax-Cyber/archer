<?php
/**
 * Checks the snapin.
 *
 * PHP version 5
 *
 * @category SnapinCheck
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Checks the snapin.
 *
 * @category SnapinCheck
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    ARCHERCore::getHostItem(false);
    if (!ARCHERCore::$Host->isValid()) {
        throw new Exception('#!ih');
    }
    $SnapinJob = ARCHERCore::$Host
        ->get('snapinjob');
    if (!$SnapinJob->isValid()) {
        throw new Exception(0);
    }
    $snapinids = ARCHERCore::getSubObjectIDs(
        'SnapinTask',
        array(
            'stateID' => $ARCHERCore->getQUeuedStates(),
            'jobID' => $SnapinJob->get('id')
        ),
        'snapinID'
    );
    if (isset($_REQUEST['getSnapnames'])) {
        $snapins = ARCHERCore::getSubObjectIDs(
            'Snapin',
            array('id' => $snapinids),
            'name'
        );
    } elseif (isset($_REQUEST['getSnapargs'])) {
        $snapins = ARCHERCore::getSubObjectIDs(
            'Snapin',
            array('id' => $snapinids),
            'args'
        );
    } else {
        $snapins = (
            ARCHERCore::getClass('SnapinTaskManager')
            ->count(
                array(
                    'stateID' => ARCHERCore::getQueuedStates(),
                    'jobID' => $SnapinJob->get('id')
                )
            ) ?
            1 :
            0
        );
    }
    echo implode(' ', (array)$snapins);
} catch (Exception $e) {
    echo $e->getMessage();
}
exit;
