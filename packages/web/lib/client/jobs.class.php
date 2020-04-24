<?php
/**
 * Tells the client if there's a task waiting for the host
 *
 * PHP version 5
 *
 * @category Jobs
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Tells the client if there's a task waiting for the host
 *
 * @category Jobs
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Jobs extends ARCHERClient implements ARCHERClientSend
{
    /**
     * Module associated shortname
     *
     * @var string
     */
    public $shortName = 'taskreboot';
    /**
     * Function returns data that will be translated to json
     *
     * @return array
     */
    public function json()
    {
        $Task = self::$Host->get('task');
        $script = strtolower(self::$scriptname);
        $script = trim($script);
        $script = basename($script);
        if ($script === 'jobs.php') {
            $field = 'error';
        } else {
            $field = 'job';
        }
        if ($Task->isInitNeededTasking()) {
            $field = 'job';
            if ($script === 'jobs.php') {
                $answer = 'ok';
            } else {
                $answer = true;
            }
        } else {
            if ($script === 'jobs.php') {
                $answer = 'nj';
            } else {
                $answer = false;
            }
        }
        return array($field => $answer);
    }
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send()
    {
        $Task = self::$Host->get('task');
        if ($Task->isInitNeededTasking()) {
            $this->send = '#!ok';
        } else {
            throw new Exception('#!nj');
        }
    }
}
