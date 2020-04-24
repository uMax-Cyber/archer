<?php
/**
 * TaskstateeditManager
 *
 * PHP version 5
 *
 * @category TaskstateeditManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * TaskstateeditManager
 *
 * @category TaskstateeditManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class TaskstateeditManager extends TaskStateManager
{
    /**
     * Install the plugin, table already exists.
     *
     * @return bool
     */
    public function install()
    {
        return true;
    }
    /**
     * Uninstall the plugin, but we don't uninstall real data.
     *
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }
}
