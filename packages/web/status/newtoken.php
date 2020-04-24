<?php
/**
 * Generates a new token on ajax request.
 *
 * PHP Version 5
 *
 * @category NewToken
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz/
 */
/**
 * Generates a new token on ajax request.
 *
 * PHP Version 5
 *
 * @category NewToken
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz/
 */
/**
 * Lambda to create random data.
 *
 * @return string
 */
require '../commons/base.inc.php';
return print json_encode(
    base64_encode(
        ARCHERCore::createSecToken()
    )
);
