<?php
/**
 * Returns a listing of all images in the system.
 *
 * PHP version 5
 *
 * @category Imagelisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Returns a listing of all images in the system.
 *
 * @category Imagelisting
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
try {
    $imageCount = ARCHERCore::getClass('ImageManager')
        ->count();
    if ($imageCount < 1) {
        throw new Exception(
            _('There are no images on this server')
        );
    }
    $imageids = ARCHERCore::getSubObjectIDs('Image');
    $imagenames = ARCHERCore::getSubObjectIDs(
        'Image',
        array('id' => $imageids),
        'name'
    );
    foreach ((array)$imageids as $index => $imageid) {
        printf(
            '\tID# %d\t-\t%s\n',
            $imageid,
            $imagenames[$index]
        );
        unset(
            $imageid,
            $imagenames[$index],
            $imageids[$index]
        );
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
exit;
