<?php
/**
 * The main index presenter
 *
 * PHP version 5
 *
 * @category Index_Page
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The main index presenter
 *
 * @category Index_Page
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
$ARCHERPageManager = ARCHERCore::getClass('ARCHERPageManager');
if (session_status() != PHP_SESSION_NONE) {
    if (isset($_SESSION['delitems'])
        && !in_array($sub, array('deletemulti', 'deleteconf'))
    ) {
        unset($_SESSION['delitems']);
    }
}
ARCHERCore::getClass('ProcessLogin')->processMainLogin();
require '../commons/text.php';
$Page = ARCHERCore::getClass('Page');
$nodes = array(
    'schema',
    'client',
    'ipxe'
);
if (!in_array($node, $nodes)
    && ($node == 'logout' || !$currentUser->isValid())
) {
    $currentUser->logout();
    $Page
        ->setTitle($archerlang['Login'])
        ->setSecTitle($archerlang['ManagementLogin'])
        ->startBody();
    ARCHERCore::getClass('ProcessLogin')
        ->mainLoginForm();
    $Page
        ->endBody()
        ->render();
} else {
    if (ARCHERCore::$ajax) {
        $ARCHERPageManager->render();
        exit;
    }
    $Page->startBody();
    $ARCHERPageManager->render();
    //if ($ARCHERPageManager->getARCHERPageName() !== $ARCHERPageManager->getARCHERPageTitle()) {
    $Page
            ->setTitle($ARCHERPageManager->getARCHERPageTitle());
    //}
    $Page->setSecTitle($ARCHERPageManager->getARCHERPageName());
    $Page
        ->endBody()
        ->render();
}
