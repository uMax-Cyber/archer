<?php
/**
 * Loads our global values
 *
 * PHP version 5
 *
 * @category LoadGlobals
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Loads our global values
 *
 * @category LoadGlobals
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class LoadGlobals extends ARCHERBase
{
    /**
     * Used to tell if it has already been loaded.
     *
     * @var bool
     */
    private static $_loadedglobals;
    /**
     * Initialize the class.
     *
     * @return void
     */
    private static function _init()
    {
        global $sub;
        if (self::$_loadedglobals) {
            return;
        }
        $GLOBALS['ARCHERFTP'] = new ARCHERFTP();
        $GLOBALS['ARCHERCore'] = new ARCHERCore();
        DatabaseManager::establish();
        $GLOBALS['DB'] = DatabaseManager::getDB();
        if (!$GLOBALS['DB']) {
            return;
        }
        ARCHERCore::setEnv();
        if (session_status() != PHP_SESSION_NONE) {
            $GLOBALS['currentUser'] = new User((int)$_SESSION['ARCHER_USER']);
        } else {
            $GLOBALS['currentUser'] = new User(0);
        }
        $GLOBALS['HookManager'] = ARCHERCore::getClass('HookManager');
        $GLOBALS['HookManager']
            ->load();
        $GLOBALS['EventManager'] = ARCHERCore::getClass('EventManager');
        $GLOBALS['EventManager']
            ->load();
        $GLOBALS['ARCHERURLRequests'] = ARCHERCore::getClass('ARCHERURLRequests');
        $subs = array(
            'configure',
            'authorize',
            'requestClientInfo'
        );
        if (in_array($sub, $subs)) {
            new DashboardPage();
            unset($subs);
            exit;
        }
        self::$_loadedglobals = true;
        unset($subs);
    }
    /**
     * Initializes directly.
     *
     * @return void
     */
    public function __construct()
    {
        self::_init();
        parent::__construct();
    }
}
