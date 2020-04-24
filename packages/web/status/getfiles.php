<?php
/**
 * Get's files stored as requested
 *
 * PHP version 5
 *
 * @category Getfiles
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Get's files stored as requested
 *
 * PHP version 5
 *
 * @category Getfiles
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
if (!is_string($_GET['path'])) {
    echo json_encode(
        _('Invalid')
    );
    exit;
}
$path = $_GET['path'];
$decodePath = urldecode(
    Initiator::sanitizeItems(
        $path
    )
);
$paths = explode(':', $decodePath);
foreach ((array)$paths as &$decodedPath) {
    if (!(is_dir($decodedPath)
        && file_exists($decodedPath)
        && is_readable($decodedPath))
    ) {
        $files[] = json_encode(_('Path is unavailable'));
        continue;
    }
    $replaced_dir_sep = str_replace(
        array('\\', '/'),
        array(
            DS,
            DS
        ),
        $decodedPath
    );
    $glob_str = sprintf(
        '%s%s*',
        $replaced_dir_sep,
        DS
    );
    $files = ARCHERCore::fastmerge(
        (array) $files,
        (array) glob($glob_str)
    );
}
echo json_encode(
    Initiator::sanitizeItems(
        $files
    )
);
exit;
