<?php
/**
 * Just allows user to add in any logs they feel they need on the log viewer.
 *
 * NOTE: The log file will need web access to view.  This is given by the root
 * of the folder to read the contents and files of with:
 * chmod -R 755 <foldername>
 * list translates in ls -l to:
 * drwxr-xr-x
 * Also the file will need to be readable by everybody:
 * chmod +r <filename>
 *
 * PHP version 5
 *
 * @category LogViewerHook
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Just allows user to add in any logs they feel they need on the log viewer.
 *
 * NOTE: The log file will need web access to view.  This is given by the root
 * of the folder to read the contents and files of with:
 * chmod -R 755 <foldername>
 * list translates in ls -l to:
 * drwxr-xr-x
 * Also the file will need to be readable by everybody:
 * chmod +r <filename>
 *
 * @category LogViewerHook
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class LogViewerHook extends Hook
{
    /**
     * The name of the hook.
     *
     * @var string
     */
    public $name = 'LogViewerHook';
    /**
     * The description of the hook.
     *
     * @var string
     */
    public $description = 'Allows adding/removing log viewer files to the system';
    /**
     * Is this active?
     *
     * @var bool
     */
    public $active = false;
    /**
     * Initializes object.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        self::$HookManager
            ->register(
                'LOG_VIEWER_HOOK',
                array(
                    $this,
                    'logViewerAdd'
                )
            )
            ->register(
                'LOG_FOLDERS',
                array(
                    $this,
                    'logFolderAdd'
                )
            );
    }
    /**
     * Function to add logs.
     *
     * @param mixed $arguments The items to modify for adding.
     *
     * @return void
     */
    public function logViewerAdd($arguments)
    {
        self::$ARCHERFTP
            ->set('host', $arguments['StorageNode']->get('ip'))
            ->set('username', $arguments['StorageNode']->get('user'))
            ->set('password', $arguments['StorageNode']->get('pass'));
        if (!self::$ARCHERFTP->connect()) {
            return;
        }
        $archerfiles = array();
        $archerfiles = self::$ARCHERFTP->nlist('/var/log/');
        self::$ARCHERFTP->close();
        $systemlog = preg_grep('#(syslog$|messages$)#', $archerfiles);
        $systemlog = array_shift($systemlog);
        if ($systemlog) {
            $arguments['files'][$arguments['StorageNode']->get('name')]['System Log']
                = $systemlog;
        }
    }
    /**
     * Add folder to search.
     *
     * @param mixed $arguments The items to modify.
     *
     * @return void
     */
    public function logFolderAdd($arguments)
    {
        $arguments['folders'][] = '/var/log/';
    }
}
