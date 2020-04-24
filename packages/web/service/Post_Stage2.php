<?php
/**
 * Check out upload task.
 *
 * PHP version 5
 *
 * @category Upload_Complete
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Check out upload task.
 *
 * @category Upload_Complete
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
ARCHERCore::getClass('TaskQueue')
    ->checkout();
