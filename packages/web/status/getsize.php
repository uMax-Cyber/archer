<?php
/**
 * Get's size of file passed.
 *
 * PHP version 5
 *
 * @category Gethash
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Get's size of file passed.
 *
 * PHP version 5
 *
 * @category Gethash
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
ignore_user_abort(true);
set_time_limit(0);
$file = filter_input(
    INPUT_POST,
    'file'
);
$file = base64_decode($file);
if (!file_exists($file)) {
    return 0;
}
echo ARCHERCore::getFilesize($file);
exit;
