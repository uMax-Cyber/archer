<?php
/**
 * Creates the timer item so we know when
 * something is supposed to occur.
 *
 * PHP version 5
 *
 * @category Timer
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Creates the timer item so we know when
 * something is supposed to occur.
 *
 * @category Timer
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class Timer extends ARCHERCron
{
    /**
     * Is single?
     *
     * @var bool
     */
    private $_blSingle;
    /**
     * Cron time
     *
     * @var string
     */
    private $_cron;
    /**
     * Line single run.
     *
     * @var mixed
     */
    private $_lngSingle;
    /**
     * Initializes the Timer class.
     *
     * @param mixed $minute The minute field.
     * @param mixed $hour   The hour field.
     * @param mixed $dom    The dom field.
     * @param mixed $month  The motnh field.
     * @param mixed $dow    The dow field.
     *
     * @return void
     */
    public function __construct(
        $minute,
        $hour = null,
        $dom = null,
        $month = null,
        $dow = null
    ) {
        parent::__construct();
        if ($minute != null
            && $hour == null
            && $dom == null
            && $month == null
            && $dow == null
        ) {
            // Single task based on timestamp
            $this->_lngSingle = $minute;
            $this->_blSingle = true;
        } else {
            $this->_cron = sprintf(
                '%s %s %s %s %s',
                $minute,
                $hour,
                $dom,
                $month,
                $dow
            );
            $this->_lngSingle = self::parse($this->_cron);
            $this->_blSingle = false;
        }
    }
    /**
     * Is this a single run or cron?
     *
     * @return bool
     */
    public function isSingleRun()
    {
        return $this->_blSingle;
    }
    /**
     * The time to run single.
     *
     * @return string
     */
    public function getSingleRunTime()
    {
        return $this->_lngSingle;
    }
    /**
     * Send the time to string.
     *
     * @return string
     */
    public function toString()
    {
        $runTime = self::niceDate()->setTimestamp($this->_lngSingle);
        return $runTime->format('r');
    }
    /**
     * Should single run now?
     *
     * @return bool
     */
    private function _shouldSingleRun()
    {
        $CurrTime = self::niceDate();
        $Time = self::niceDate()->setTimestamp($this->_lngSingle);
        return (bool) ($Time <= $CurrTime);
    }
    /**
     * Should run common.
     *
     * @return bool
     */
    public function shouldRunNow()
    {
        return (bool) (
            $this->_blSingle ?
            $this->_shouldSingleRun() :
            self::shouldRunCron($this->_lngSingle)
        );
    }
}
