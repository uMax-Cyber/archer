<?php
/**
 * Handles exporting of csv, pdf, or DB after verification
 *
 * PHP version 5
 *
 * @category Export
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Handles exporting of csv, pdf, or DB after verification
 *
 * @category Export
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
$report = unserialize($_SESSION['archerlastreport']);
if (!($report instanceof ReportMaker)) {
    $report = ARCHERCore::getClass('ReportMaker');
}
$report->outputReport();
