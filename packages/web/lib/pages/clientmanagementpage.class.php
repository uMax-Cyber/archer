<?php
/**
 * Client Management Page
 *
 * PHP version 5
 *
 * Presents the client page where users can download the ARCHER Client and
 * related utilities as needed.
 *
 * @category ClientManagementPage
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Client Management Page
 *
 * Presents the client page where users can download the ARCHER Client and
 * related utilities as needed.
 *
 * @category ClientManagementPage
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ClientManagementPage extends ARCHERPage
{
    /**
     * The node that's related to this class
     *
     * @var string
     */
    public $node = 'client';
    /**
     * Initializes the page
     *
     * @param string $name the name to initialize with
     *
     * @return void
     */
    public function __construct($name = '')
    {
        $this->name = 'Client Management';
        parent::__construct($this->name);
        $this->menu = array();
    }
    /**
     * This is the default method called.  Displays what we want on the
     * "home" of the relevant page.
     *
     * @return void
     */
    public function index()
    {
        $this->title = _('ARCHER Client Installer');
        $webArr = array(
            'name' => array(
                'ARCHER_WEB_HOST'
            )
        );
        list($ip) = self::getSubObjectIDs(
            'Service',
            $webArr,
            'value'
        );
        $url = sprintf(
            '%s://%s/archer/client/download.php',
            self::$httpproto,
            $ip
        );
        $url = filter_var(
            $url,
            FILTER_SANITIZE_URL
        );
        // Dash boxes row.
        echo '<div class="row">';
        // New Client and utilties
        echo '<div class="col-xs-4">';
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading text-center">';
        echo '<h4 class="title">';
        echo _('New Client and Utilities');
        echo '</h4>';
        echo '<p class="category">';
        echo _('The installers for the archer client');
        echo '<br/>';
        echo _('Client Version');
        echo ': ';
        echo ARCHER_CLIENT_VERSION;
        echo '</p>';
        echo '</div>';
        echo '<div class="panel-body">';
        printf(
            '%s, %s, %s, %s. ',
            _('Cross platform'),
            _('more secure'),
            _('faster'),
            _('and much easier on the server')
        );
        printf(
            '%s.',
            _('Especially when your organization has many hosts')
        );
        echo '<br/>';
        echo '<a href="'
            . $url
            . '?newclient" data-toggle="tooltip" data-placement="right" ';
        printf(
            'title="%s. %s. %s.">',
            _('Use this for network installs'),
            _('For example, a GPO policy to push'),
            _('This file will only work on Windows')
        );
        echo '<br/>';
        echo _('MSI');
        echo ' -- ';
        echo _('Network Installer');
        echo '<br/>';
        printf(
            '<a href="%s?%s" data-toggle="tooltip" data-placement="right" '
            . 'title="%s. %s, %s, %s.">%s (%s)</a>',
            $url,
            'smartinstaller',
            _('This is the recommended installer to use now'),
            _('It can be used on Windows'),
            _('Linux'),
            _('and Mac OS X'),
            _('Smart Installer'),
            _('Recommended')
        );
        echo '</div>';
        echo '</div>';
        echo '</div>';
        // Help and guide box
        echo '<div class="col-xs-4">';
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading text-center">';
        echo '<h4 class="title">';
        echo _('Help and Guide');
        echo '</h4>';
        echo '<p class="category">';
        echo _('Where to get help');
        echo '</p>';
        echo '</div>';
        echo '<div class="panel-body">';
        printf(
            '%s. %s: %s %s.<br/><br/>',
            _('Use the links below if you need assistance'),
            _('NOTE'),
            _('Forums are the most common and fastest method of getting'),
            _('help with any aspect of ARCHER')
        );
        echo '<br/>';
        printf(
            '<a href="'
            . 'https://wiki.archerproject.org/wiki/index.php?title=ARCHER_client'
            . '" data-toggle="tooltip" data-placement="right" '
            . 'title="%s. %s">%s</a><br/>',
            _('Detailed documentation'),
            _('It is primarily geared for the smart installer methodology now'),
            _('ARCHER Client Wiki')
        );
        printf(
            '<a href="'
            . 'https://forums.archerproject.org'
            . '" data-toggle="tooltip" data-placement="right" '
            . 'title="%s? %s. %s %s. %s.">%s</a>',
            _('Need more support'),
            _('Somebody will be able to help in some form'),
            _('Use the forums to post issues so others'),
            _('may see the issue and help and/or use the solutions'),
            _('Chat is also available on the forums for more realtime help'),
            _('ARCHER Forums')
        );
        echo '</div>';
        echo '</div>';
        echo '</div>';
        // Help and guide box
        echo '<div class="col-xs-4">';
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading text-center">';
        echo '<h4 class="title">';
        echo _('Legacy Client and Utilities');
        echo '</h4>';
        echo '<p class="category">';
        echo _('The old client and archercrypt, deprecated');
        echo '</p>';
        echo '</div>';
        echo '<div class="panel-body">';
        printf(
            '%s %s. %s %s.<br/>',
            _('The legacy client and archer crypt utility for those'),
            _('that are not yet using the new client'),
            _('We highly recommend you make the switch for more'),
            _('security and faster client communication and management')
        );
        printf(
            '<a href="'
            . $url
            . '?legclient" data-toggle="tooltip" data-placement="right" '
            . 'title="%s. %s %s. %s %s, %s, %s.">%s</a><br/>',
            _('This is the file to install the legacy client'),
            _('It is recommended to not use this file but'),
            _('you may do as you please'),
            _('This client is not being developed any further so any issues'),
            _('you may find'),
            _('or features you may request'),
            _('will not be added to this client'),
            _('Legacy ARCHER Client')
        );
        printf(
            '<a href="'
            . $url
            . '?archercrypt" data-toggle="tooltip" data-placement="right" '
            . 'title="%s. %s">%s</a>',
            _('This file is used to encrypt the AD Password'),
            _('DO NOT USE THIS IF YOU ARE USING THE NEW CLIENT'),
            _('ARCHER Crypt')
        );
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
