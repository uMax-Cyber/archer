<?php
/**
 * Returns a listing of all printers in the system.
 *
 * PHP version 5
 *
 * @category Printerlisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Returns a listing of all printers in the system.
 *
 * @category Printerlisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $printerCount = ARCHERCore::getClass('PrinterManager')
        ->count();
    if ($printerCount < 1) {
        throw new Exception("#!np\n");
    }
    echo "#!ok\n";
    $printerids = ARCHERCore::getSubObjectIDs('Printer');
    $printernames = ARCHERCore::getSubObjectIDs(
        'Printer',
        array('id' => $printerids),
        'name'
    );
    foreach ((array)$printerids as $index => $printerid) {
        $name = $printernames[$index];
        echo "#printer$index=$name\n";
        unset(
            $name,
            $index,
            $printerids[$index],
            $printerid,
            $printernames[$index]
        );
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
exit;
