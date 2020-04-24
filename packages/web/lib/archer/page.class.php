<?php
/**
 * The page display/modifier
 *
 * PHP version 5
 *
 * @category Page
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The page display/modifier
 *
 * @category Page
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Page extends ARCHERBase
{
    /**
     * The title element.
     *
     * @var string
     */
    protected $title;
    /**
     * The body container
     *
     * @var string
     */
    protected $body;
    /**
     * The menu container
     *
     * @var mixed
     */
    protected $menu;
    /**
     * The media container
     *
     * @var mixed
     */
    protected $media;
    /**
     * The theme container
     *
     * @var mixed
     */
    protected $theme;
    /**
     * If this is homepage
     *
     * @var bool
     */
    protected $isHomepage;
    /**
     * The page title container
     *
     * @var string
     */
    protected $pageTitle;
    /**
     * The section title container
     *
     * @var string
     */
    protected $sectionTitle;
    /**
     * The stylesheets to add
     *
     * @var array
     */
    protected $stylesheets = array();
    /**
     * The javascripts to add
     *
     * @var array
     */
    protected $javascripts = array();
    /**
     * Initializes the page element
     *
     * @return void
     */
    public function __construct()
    {
        global $node;
        global $sub;
        parent::__construct();
        if (!$this->theme) {
            $this->theme = self::getSetting('ARCHER_THEME');
            if (!$this->theme) {
                $this->theme = 'default/archer.css';
            } elseif (!file_exists("../management/css/$this->theme")) {
                $this->theme = 'default/archer.css';
            }
            $dispTheme = "css/$this->theme";
            $this->imagelink = 'css/'
                . dirname($this->theme)
                . '/images/';
            if (!file_exists("../management/$dispTheme")) {
                $dispTheme = 'css/default/archer.css';
            }
        }
        $this
            ->addCSS('css/animate.min.css')
            ->addCSS('css/font-awesome.min.css')
            ->addCSS('css/jquery-ui.css')
            ->addCSS('css/jquery-ui.theme.css')
            ->addCSS('css/jquery-ui.structure.css')
            ->addCSS('css/jquery-ui-timepicker-addon.css')
            ->addCSS('css/select2.min.css')
            ->addCSS('css/bootstrap.min.css')
            ->addCSS('css/bootstrap-theme.min.css')
            ->addCSS('css/theme.bootstrap_3.css')
            ->addCSS('css/theme.blue.css')
            ->addCSS('css/bootstrap-dialog.min.css')
            ->addCSS($dispTheme);
        if (!isset($node)
            || !$node
        ) {
            $node = 'home';
        }
        $homepages = array(
            'home',
            'dashboard',
            'schema',
            'client',
            'ipxe',
            'login',
            'logout'
        );
        $this->isHomepage = in_array($node, $homepages)
            || !self::$ARCHERUser->isValid();
        if (self::$ARCHERUser->isValid()
            && strtolower($node) != 'schema'
        ) {
            $this->main = array(
                'home' => array(
                    self::$archerlang['Dashboard'],
                    'fa fa-dashboard'
                ),
                'user' => array(
                    self::$archerlang['Users'],
                    'fa fa-users'
                ),
                'host' => array(
                    self::$archerlang['Hosts'],
                    'fa fa-desktop'
                ),
                'group' => array(
                    self::$archerlang['Groups'],
                    'fa fa-sitemap'
                ),
                'image' => array(
                    self::$archerlang['Images'],
                    'fa fa-picture-o'
                ),
                'storage' => array(
                    self::$archerlang['Storage'],
                    'fa fa-archive'
                ),
                'snapin' => array(
                    self::$archerlang['Snapin'],
                    'fa fa-files-o'
                ),
                'printer' => array(
                    self::$archerlang['Printer'],
                    'fa fa-print'
                ),
                'service' => array(
                    self::$archerlang['ClientSettings'],
                    'fa fa-cogs'
                ),
                'task' => array(
                    self::$archerlang['Tasks'],
                    'fa fa-tasks'
                ),
                'report' => array(
                    self::$archerlang['Reports'],
                    'fa fa-file-text'
                ),
                'about' => array(
                    self::$archerlang['ARCHER Configuration'],
                    'fa fa-wrench'
                )
            );
            if (self::getSetting('ARCHER_PLUGINSYS_ENABLED')) {
                self::arrayInsertAfter(
                    'about',
                    $this->main,
                    'plugin',
                    array(
                        self::$archerlang['Plugins'],
                        'fa fa-cog'
                    )
                );
            }
            $this->main = array_unique(
                array_filter($this->main),
                SORT_REGULAR
            );
            self::$HookManager
                ->processEvent(
                    'MAIN_MENU_DATA',
                    array(
                        'main' => &$this->main
                    )
                );
            if (count($this->main) > 0) {
                $links = array_keys($this->main);
            }
            $links = self::fastmerge(
                (array)$links,
                array(
                    'home',
                    'logout',
                    'hwinfo',
                    'client',
                    'schema',
                    'ipxe'
                )
            );
            if ($node
                && !in_array($node, $links)
            ) {
                self::redirect('index.php');
            }
            ob_start();
            $count = false;
            if (count($this->main) > 0) {
                foreach ($this->main as $link => &$title) {
                    $links[] = $link;
                    if (!$node && $link == 'home') {
                        $node = $link;
                    }
                    $activelink = ($node == $link);
                    echo '<li'
                        . (
                            $activelink ?
                            ' class="active"' :
                            ''
                        )
                        . '>';
                    echo '<a href="?node='
                        . $link
                        . '" data-toggle="tooltip" title="'
                        . $title[0]
                        . '" data-placement="bottom">';
                    echo '<i class="'
                        . $title[1]
                        . ' fa-2x fa-fw"></i>';
                    echo '<span class="collapsedmenu-text">';
                    echo ' ';
                    echo $title[0];
                    echo '</span>';
                    echo '</a>';
                    echo '</li>';
                    unset($title);
                }
            }
            $this->menu = ob_get_clean();
        }
        $files = array(
            'js/jquery-latest.min.js',
            'js/jquery.validate.min.js',
            'js/additional-methods.min.js',
            'js/jquery.tablesorter.combined.js',
            'js/select2.min.js',
            'js/jquery-migrate-latest.min.js',
            'js/jquery.progressbar.js',
            'js/jquery.tmpl.js',
            'js/jquery.placeholder.js',
            'js/jquery-ui.min.js',
            'js/flot/jquery.flot.js',
            'js/flot/jquery.flot.time.js',
            'js/flot/jquery.flot.pie.js',
            'js/flot/jquery.flot.JUMlib.js',
            'js/flot/jquery.flot.gantt.js',
            'js/jquery-ui-timepicker-addon.js',
            'js/bootstrap.min.js',
            'js/bootstrap-dialog.min.js',
            'js/archer/archer.js',
            'js/archer/archer.main.js',
            'js/jscolor.min.js'
        );
        if (!self::$ARCHERUser->isValid()) {
            $files[] = 'js/archer/archer.login.js';
        } else {
            $subset = $sub;
            if ($sub == 'membership') {
                $subset = 'edit';
            }
            $node = preg_replace(
                '#_#',
                '-',
                $node
            );
            $subset = preg_replace(
                '#_#',
                '-',
                $subset
            );
            $filepaths = array(
                "js/archer/archer.{$node}.js",
                "js/archer/archer.{$node}.{$subset}.js",
            );
        }
        array_map(
            function (&$jsFilepath) use (&$files) {
                if (file_exists($jsFilepath)) {
                    array_push($files, $jsFilepath);
                }
                unset($jsFilepath);
            },
            (array)$filepaths
        );
        $pluginfilepaths = array(
            "../lib/plugins/{$node}/js/archer.{$node}.js",
            "../lib/plugins/{$node}/js/archer.{$node}.{$subset}.js",
        );
        array_map(
            function (&$pluginfilepath) use (&$files) {
                if (file_exists($pluginfilepath)) {
                    array_push($files, $pluginfilepath);
                }
                unset($pluginfilepath);
            },
            (array)$pluginfilepaths
        );
        if ($this->isHomepage
            && self::$ARCHERUser->isValid()
            && ($node == 'home'
            || !$node)
        ) {
            array_push($files, 'js/archer/archer.dashboard.js');
            $test = preg_match(
                '#MSIE [6|7|8|9|10|11]#',
                self::$useragent
            );
            if ($test) {
                array_push(
                    $files,
                    'js/flot/excanvas.js'
                );
            }
        }
        if ($node === 'schema') {
            array_push($files, 'js/archer/archer.schema.js');
        }
        $files = array_unique((array)$files);
        array_map(
            function (&$path) {
                if (file_exists($path)) {
                    $this->addJavascript($path);
                }
                unset($path);
            },
            (array)$files
        );
    }
    /**
     * Sets the title
     *
     * @param string $title the title to set
     *
     * @return object
     */
    public function setTitle($title)
    {
        $this->pageTitle = $title;
        return $this;
    }
    /**
     * Sets the section title
     *
     * @param string $title the title to set
     *
     * @return object
     */
    public function setSecTitle($title)
    {
        $this->sectionTitle = $title;
        return $this;
    }
    /**
     * Adds a css path
     *
     * @param string $path the path to add
     *
     * @return object
     */
    public function addCSS($path)
    {
        $this->stylesheets[] = "../management/$path";
        return $this;
    }
    /**
     * Adds a javascript path
     *
     * @param string $path the path to add
     *
     * @return object
     */
    public function addJavascript($path)
    {
        $this->javascripts[] = $path;
        return $this;
    }
    /**
     * Starts the body
     *
     * @return object
     */
    public function startBody()
    {
        ob_start();
        return $this;
    }
    /**
     * Ends the body
     *
     * @return object
     */
    public function endBody()
    {
        $this->body = ob_get_clean();
        return $this;
    }
    /**
     * Renders the index page
     *
     * @return object
     */
    public function render()
    {
        if (true === self::$showhtml) {
            include '../management/other/index.php';
        } else {
            echo $this->body;
            exit;
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset($$var);
        }
        return $this;
    }
    /**
     * Generate the search form.
     *
     * @return void
     */
    public static function getSearchForm()
    {
        global $node;
        echo '<div class="col-md-3">';
        if (in_array($node, self::$searchPages)) {
            echo '<li class="pull-left">';
            echo '<form class="navbar-form navbar-left search-wrapper" role='
                . '"search" method="post" action="'
                . '../management/index.php?node='
                . $node
                . '&sub=search">';
            echo '<div class="input-group">';
            echo '<input type="text" class="'
                . 'form-control search-input" placeholder="'
                . self::$archerlang['Search']
                . '..." name="crit"/>';
            echo '<span class="input-group-addon search-submit">';
            echo '<i class="archersearch fa fa-search">';
            echo '<span class="sr-only">';
            echo self::$archerlang['Search'];
            echo '</span>';
            echo '</i>';
            echo '</span>';
            echo '</div>';
            echo '</form>';
            echo '</li>';
        }
        echo '</div>';
    }
    /**
     * Generate the logout element.
     *
     * @return void
     */
    public static function getLogout()
    {
        echo '<li class="pull-right">';
        if (self::$ARCHERUser->isValid()) {
            echo '<a href="../management/index.php?node=logout" '
                . 'data-toggle="tooltip" data-placement="bottom" title="'
                . _('Logout')
                . ': '
                . strtolower(
                    trim(
                        self::$ARCHERUser->get('name')
                    )
                )
                . '">';
            echo '<i class="fa fa-sign-out fa-2x fa-fw"></i>';
            echo '<span class="collapsedmenu-text">';
            echo ' ';
            echo _('Logout');
            echo '</span>';
            echo '</a>';
        } else {
            echo '<a href="../management/index.php"';
            echo '<i class="fa fa-sign-in fa-2x fa-fw"></i>';
            echo '<span class="collapsedmenu-text">';
            echo ' ';
            echo _('Login');
            echo '</span>';
            echo '</a>';
        }
        echo '</li>';
        echo '<li class="separator hidden-lg hidden-md"></li>';
    }
    /**
     * Get main side menu items.
     *
     * @return void
     */
    public static function getMainSideMenu()
    {
        global $node;
        global $sub;
        $class = self::$ARCHERPageManager->getARCHERPageClass();
        if (count($class->menu) < 1) {
            return;
        }
        $ARCHERSub = new ARCHERSubMenu();
        foreach ($class->menu as $l => &$t) {
            $ARCHERSub->addMainItems(
                $class->node,
                array((string)$t => (string)$l),
                '',
                '',
                'mainmenu'
            );
            unset($t);
        }
        unset($class);
        echo $ARCHERSub->getMainItems($node);
        unset($ARCHERSub);
    }
    /**
     * Generates our main item, sub item, and notes tabs.
     *
     * @return void
     */
    public static function getMenuItems()
    {
        $class = self::$ARCHERPageManager->getARCHERPageClass();
        $ARCHERSub = new ARCHERSubMenu();
        if (count($class->subMenu)) {
            foreach ($class->subMenu as $l => &$t) {
                $ARCHERSub->addItems(
                    $class->node,
                    array((string)$t => (string)$l),
                    $class->id,
                    sprintf(
                        self::$archerlang['SelMenu'],
                        get_class($class->obj)
                    ),
                    'submenu'
                );
                unset($t);
            }
            unset($classSubMenu);
        }
        if (count($class->notes)) {
            foreach ($class->notes as $l => &$t) {
                $ARCHERSub->addNotes(
                    $class->node,
                    array((string)$t => (string)$l),
                    $class->id
                );
                unset($t);
            }
        }
        echo $ARCHERSub->get($class->node);
    }
}
