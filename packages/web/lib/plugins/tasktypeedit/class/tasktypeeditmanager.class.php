<?php
/**
 * TasktypeeditManager
 *
 * PHP version 5
 *
 * @category TaskypeeditManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * TasktypeeditManager
 *
 * @category TaskypeeditManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class TasktypeeditManager extends TaskTypeManager
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
