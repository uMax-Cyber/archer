<?php
/**
 * The host serial hook.
 *
 * PHP version 5
 *
 * @category AddHostSerial
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   Greg Grammon <nah@nah.com>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The host serial hook.
 *
 * @category AddHostSerial
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @author   Greg Grammon <nah@nah.com>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class AddHostSerial extends Hook
{
    /**
     * The name of the hook.
     *
     * @var string
     */
    public $name = 'AddHostSerial';
    /**
     * The description of the hook.
     *
     * @var string
     */
    public $description = 'Adds host serial to the host lists';
    /**
     * Is the hook active of not.
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
                'HOST_DATA',
                array(
                    $this,
                    'hostData'
                )
            )
            ->register(
                'HOST_HEADER_DATA',
                array(
                    $this,
                    'hostTableHeader'
                )
            );
    }
    /**
     * The data to alter.
     *
     * @param mixed $arguments The items to alter.
     *
     * @return void
     */
    public function hostData($arguments)
    {
        global $node;
        if ($node != 'host') {
            return;
        }
        $arguments['templates'][] = '${serial}';
        $arguments['attributes'][] = array(
            'class' => 'c',
            'width' => '20',
        );
        $items = $arguments['data'];
        $hostnames = array();
        foreach ((array)$items as &$data) {
            $hostnames[] = $data['host_name'];
            unset($data);
        }
        Route::listem(
            'host',
            'name',
            false,
            array('name' => $hostnames)
        );
        $Hosts = json_decode(
            Route::getData()
        );
        $Hosts = $Hosts->hosts;
        foreach ((array)$Hosts as &$Host) {
            $arguments['data'][$i]['serial'] = $Host
                ->inventory
                ->sysserial;
            unset($Host);
        }
        unset($Hosts);
    }
    /**
     * Alter the table header data.
     *
     * @param mixed $arguments The arguments to alter.
     *
     * @return void
     */
    public function hostTableHeader($arguments)
    {
        global $node;
        if ($node != 'host') {
            return;
        }
        $arguments['headerData'][] = _('Serial');
    }
}
