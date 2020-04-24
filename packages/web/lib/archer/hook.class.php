<?php
/**
 * Hooks allow customization between different aspects.
 *
 * While not everything is hookable, there is quite a lot
 * that is able to be customized.
 *
 * Most of the accessible elements are handled from the event class.
 *
 * PHP version 5
 *
 * @category Hook
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Hooks allow customization between different aspects.
 *
 * While not everything is hookable, there is quite a lot
 * that is able to be customized.
 *
 * @category Hook
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
abstract class Hook extends Event
{
    /**
     * Function enables reportTypes
     * to allow plugins, and all hooks really, to tie into
     * report structures.
     *
     * @param mixed $arguments the item to tie into
     *
     * @return void
     */
    public function reportTypes($arguments)
    {
        $arguments['types'][$this->node] = 4;
    }
}
