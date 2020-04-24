<?php
/**
 * Presents the page the same to all.
 *
 * PHP version 5
 *
 * @category Index
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Presents the page the same to all.
 *
 * @category Index
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
echo '<!DOCTYPE html>';
echo '<html lang="'
    . ProcessLogin::getLocale()
    . '">';
echo '<head>';
echo '<meta charset="utf-8"/>';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge"/>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1"/>';
echo '<title>' . $this->pageTitle . '</title>';
self::$HookManager
    ->processEvent(
        'CSS',
        array(
            'stylesheets' => &$this->stylesheets
        )
    );
foreach ((array)$this->stylesheets as &$stylesheet) {
    echo '<link href="'
        . $stylesheet
        . '?ver='
        . ARCHER_BCACHE_VER
        . '" rel="stylesheet" type="text/css"/>';
    unset($stylesheet);
}
unset($this->stylesheets);
echo '<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>';
echo '</head>';
echo '<body>';
if (self::$ARCHERUser->isValid()) {
    /**
     * Navigation items
     */
    echo '<nav class="navbar navbar-inverse navbar-fixed-top">';
    echo '<div class="container-fluid">';
    echo '<div class="navbar-header">';
    echo '<button type="button" class="navbar-toggle collapsed" data-toggle="'
        . 'collapse" data-target=".navbar-collapse">';
    echo '<span class="sr-only">'
        . _('Toggle Navigation')
        . '</span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '</button>';
    echo '</div>';
    echo '<div class="collapse navbar-collapse">';
    echo '<ul class="nav navbar-nav">';
    echo '<a class="navbar-brand" href="../management/index.php?node=home">';
    echo '<b>ARCHER</b> Project';
    echo '</a>';
    self::getSearchForm();
    echo $this->menu;
    self::getLogout();
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';
    self::$HookManager
        ->processEvent(
            'CONTENT_DISPLAY',
            array(
                'content' => &$this->body,
                'sectionTitle' => &$this->sectionTitle,
                'pageTitle' => &$this->pageTitle
            )
        );
    /**
     * Main Content
     */
    echo '<div class="container-fluid'
        . (
            $this->isHomepage ?
            ' dashboard' :
            ''
        )
        . '">';
    echo '<div class="panel panel-primary">';
    echo '<div class="panel-heading text-center">';
    echo '<h4 class="title">'
        . $this->sectionTitle
        . '</h4>';
    if (self::$ARCHERUser->isValid && $this->pageTitle) {
        echo '<h5 class="title">'
            . $this->pageTitle
            . '</h5>';
    }
    echo '</div>';
    echo '<input type="hidden" class="archer-delete" id="ARCHERDeleteAuth" value="'
        . (int)self::$archerdeleteactive
        . '"/>';
    echo '<input type="hidden" class="archer-export" id="ARCHERExportAuth" value="'
        . (int)self::$archerexportactive
        . '"/>';
    echo '<input type="hidden" class="archer-variable" id="screenview" value="'
        . self::$defaultscreen
        . '"/>';
    echo '<div class="panel-body">';
    self::getMenuItems();
    self::getMainSideMenu();
    echo $this->body;
    echo '</div>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<nav class="navbar navbar-inverse navbar-fixed-top">';
    echo '<div class="container-fluid">';
    echo '<div class="navbar-header">';
    echo '<button type="button" class="navbar-toggle collapsed" data-toggle="'
        . 'collapse" data-target=".navbar-collapse">';
    echo '<span class="sr-only">'
        . _('Toggle Navigation')
        . '</span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '</button>';
    echo '</div>';
    echo '<div class="collapse navbar-collapse">';
    echo '<ul class="nav navbar-nav">';
    echo '<a class="navbar-brand" href="../management/index.php?node=home">';
    echo '<b>ARCHER</b> Project';
    echo '</a>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';
    /**
     * Main Content
     */
    echo '<div class="container-fluid'
        . (
            $this->isHomepage ?
            ' dashboard' :
            ''
        )
        . '">';
    echo $this->body;
    echo '</div>';
}
echo '<div class="collapse navbar-collapse">';
echo '<footer class="footer">';
echo '<nav class="navbar navbar-inverse navbar-fixed-bottom">';
echo '<div class="container-fluid">';
echo '<ul class="nav navbar-nav">';
echo '<li><a href="https://wiki.archerproject.org/wiki/index.php?title=Credits">'
    . _('Credits')
    . '</a></li>';
echo '<li><a href="?node=client">'
    . _('ARCHER Client')
    . '</a></li>';
echo '<li><a href="https://www.paypal.com/cgi-bin/webscr?item_name=Donation'
    . '+to+ARCHER+-+A+Free+Cloning+Solution&cmd=_donations&business=archerproject.org'
    . '@gmail.com" target="_blank">'
    . _('Donate to ARCHER')
    . '</a></li>';
if (self::$ARCHERUser->isValid()) {
    echo '<li class="pull-right">';
    echo '<a href="../management/index.php?node=about">';
    echo '<b>';
    echo _('Version');
    echo '</b> ';
    echo ARCHER_VERSION;
    echo '</a>';
    echo '</li>';
}
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '</footer>';
echo '</div>';
foreach ((array)$this->javascripts as &$javascript) {
    echo '<script src="'
        . $javascript
        . '?ver='
        . ARCHER_BCACHE_VER
        . '" type="text/javascript"></script>';
    unset($javascript);
}
unset($this->javascripts);
echo '<!-- Memory Usage: ';
echo self::formatByteSize(memory_get_usage(true));
echo '-->';
echo '<!-- Memory Peak: ';
echo self::formatByteSize(memory_get_peak_usage());
echo '-->';
echo '</body>';
echo '</html>';
