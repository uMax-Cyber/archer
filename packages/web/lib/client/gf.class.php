<?php
/**
 * Handles GreenArcher, now only for legacy client
 *
 * PHP version 5
 *
 * @category Greenarcher
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Handles GreenArcher, now only for legacy client
 *
 * @category Greenarcher
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class GF extends ARCHERClient implements ARCHERClientSend
{
    /**
     * Module associated shortname
     *
     * @var string
     */
    public $shortName = 'greenarcher';
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send()
    {
        $gfcount = self::getClass('GreenArcherManager')
            ->count();
        if ($gfcount < 1) {
            throw new Exception('#!na');
        }
        $Send = array();
        foreach ((array)self::getClass('GreenArcherManager')
            ->find() as $index => &$gf
        ) {
            $actionTemp = $gf->get('action');
            $actionTemp = strtolower($actionTemp);
            $actionTemp = trim($actionTemp);
            $action = '';
            switch ($actionTemp) {
            case 's':
                $action = 'shutdown';
                break;
            case 'r':
                $action = 'reboot';
                break;
            }
            if (empty($action)) {
                continue;
            }
            $val = sprintf(
                '%d@%d@%s',
                $gf->get('hour'),
                $gf->get('min'),
                $action
            );
            $Send[$index] = sprintf(
                "%s\n",
                base64_encode($val)
            );
        }
        $this->send = implode($Send);
    }
}
