<?php
/**
 * Changes the table header
 *
 * PHP version 5
 *
 * @category ChangeTableHeader
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Changes the table header
 *
 * @category ChangeTableHeader
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ChangeTableHeader extends Hook
{
    /**
     * The name of this hook.
     *
     * @var string
     */
    public $name = 'ChangeTableHeader';
    /**
     * The description of this hook.
     *
     * @var string
     */
    public $description = 'Remove & add table header columns';
    /**
     * Is the hook active or not.
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
                'HOST_HEADER_DATA',
                array(
                    $this,
                    'hostTableHeader'
                )
            );
    }
    /**
     * Changes the table header.
     *
     * @param mixed $arguments The items to alter.
     *
     * @return void
     */
    public function hostTableHeader($arguments)
    {
        global $node;
        if ($node != 'host') {
            return;
        }
        $arguments['headerData'][3] = 'Chicken Sandwiches';
    }
}
