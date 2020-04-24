<?php
/**
 * Cleans directories but only for legacy client
 *
 * PHP version 5
 *
 * @category DirectoryCleanup
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Cleans directories but only for legacy client
 *
 * @category DirectoryCleanup
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class DirectoryCleanup extends ARCHERClient implements ARCHERClientSend
{
    /**
     * Module associated shortname
     *
     * @var string
     */
    public $shortName = 'dircleanup';
    /**
     * Stores the data to send
     *
     * @var string
     */
    protected $send;
    /**
     * Creates the send string and stores to send variable
     *
     * @return void
     */
    public function send()
    {
        foreach ((array)self::getClass('DirCleanerManager')
            ->find() as $i => &$DirectoryCleanup
        ) {
            $SendEnc = base64_encode($DirectoryCleanup->get('path'));
            $SendEnc .= "\n";
            $Send[$i] = $SendEnc;
            unset($DirectoryCleanup);
        }
        unset($DirectoryCleanups);
        $this->send = implode((array)$Send);
        $this->send = trim($this->send);
        if (empty($this->send)) {
            $this->send = sprintf(
                '#!er: %s',
                _('No directories defined to be cleaned up')
            );
        }
    }
}
