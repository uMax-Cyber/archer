<?php
/**
 * Boot page for pxe/iPXE
 *
 * PHP version 5
 *
 * @category Boot
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Boot page for pxe/iPXE
 *
 * @category Boot
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../../commons/base.inc.php';
header("Content-type: text/plain");
$items = array(
    'mac' => filter_input(INPUT_POST, 'mac'),
    'mac0' => filter_input(INPUT_POST, 'mac0'),
    'mac1' => filter_input(INPUT_POST, 'mac1'),
    'mac2' => filter_input(INPUT_POST, 'mac2')
);
$mac = ARCHERCore::fastmerge(
    explode('|', $items['mac']),
    explode('|', $items['mac0']),
    explode('|', $items['mac1']),
    explode('|', $items['mac2'])
);
$mac = implode(
    '|',
    array_values(
        array_unique(
            array_filter($mac)
        )
    )
);
ARCHERCore::getHostItem(
    false,
    false,
    true,
    false,
    false,
    $mac
);
new BootMenu();
