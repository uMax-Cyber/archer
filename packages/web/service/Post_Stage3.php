<?php
/**
 * Check out download task.
 *
 * PHP version 5
 *
 * @category Download_Complete
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Check out download task.
 *
 * @category Download_Complete
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
ARCHERCore::getClass('TaskQueue')
    ->checkout();
