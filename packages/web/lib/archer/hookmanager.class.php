<?php
/**
 * HookManager handles registering and loading
 * events and hooks.
 *
 * PHP version 5
 *
 * @category HookManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * HookManager handles registering and loading
 * events and hooks.
 *
 * @category HookManager
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class HookManager extends EventManager
{
    /**
     * Log level if needed.
     *
     * @var int
     */
    public $logLevel = 0;
    /**
     * Data to store and use.
     *
     * @var mixed
     */
    public $data;
    /**
     * Events to work off.
     *
     * @var array
     */
    public $events = array();
    /**
     * Processes the system for customizable elements.
     *
     * @param string $event     the event to process
     * @param array  $arguments the arguments to pass
     *
     * @return void
     */
    public function processEvent($event, $arguments = array())
    {
        $this->events[] = $event;
        $exists = self::getClass('HookEventManager')->exists(
            $event,
            '',
            'name'
        );
        if (!$exists) {
            self::getClass('HookEvent')
                ->set('name', $event)
                ->save();
        }
        if (!isset($this->data[$event])) {
            return;
        }
        foreach ((array) $this->data[$event] as &$function) {
            $active = false;
            $className = get_class($function[0]);
            $refClass = new ReflectionClass($className);
            $filename = $refClass->getFileName();
            if (!method_exists($function[0], $function[1])) {
                continue;
            }
            if (stripos($filename, 'plugins') !== false) {
                $function[0]->active = true;
            }
            $active = $function[0]->active;
            if (!$active) {
                continue;
            }
            $mergedArr = self::fastmerge(
                array('event' => $event),
                $arguments
            );
            $function[0]->{$function[1]}($mergedArr);
            unset($function);
        }
    }
}
