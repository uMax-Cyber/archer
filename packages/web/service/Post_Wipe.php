<?php
/**
 * Check out other tasks.
 *
 * PHP version 5
 *
 * @category Other_Complete
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Check out other tasks.
 *
 * @category Other_Complete
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
ARCHERCore::getClass('TaskQueue')
    ->checkout();
