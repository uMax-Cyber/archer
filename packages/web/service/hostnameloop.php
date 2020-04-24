<?php
/**
 * Hostname loop simply checks the host doesn't
 * already exist.
 *
 * PHP version 5
 *
 * @category Hostnameloop
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Hostname loop simply checks the host doesn't
 * already exist.
 *
 * @category Hostnameloop
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $host = $_REQUEST['host'];
    $host = trim($host);
    $host = base64_decode($host);
    $host = trim($host);
    $Host = ARCHERCore::getClass('Host')
        ->set('name', $host)
        ->load('name');
    if ($Host->isValid()) {
        $msg = sprintf(
            "\t%s\n\t%s: %s",
            _('A host with that name already exists'),
            _('The primary mac associated is'),
            $Host->get('mac')->__toString()
        );
        throw new Exception($msg);
    }
    $msg = '#!ok';
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg;
exit;
