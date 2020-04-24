<?php
/**
 * The multicast association class.
 *
 * PHP version 5
 *
 * @category MulticastSessionAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The multicast association class.
 *
 * @category MulticastSessionAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class MulticastSessionAssociation extends ARCHERController
{
    /**
     * The association table name.
     *
     * @var string
     */
    protected $databaseTable = 'multicastSessionsAssoc';
    /**
     * The association fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'msaID',
        'msID' => 'msID',
        'taskID' => 'tID',
    );
    /**
     * The required fields.
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'msID',
        'taskID',
    );
    /**
     * Return the multicast session object.
     *
     * @return object
     */
    public function getMulticastSession()
    {
        return new MulticastSession($this->get('msID'));
    }
    /**
     * Return the task object.
     *
     * @return object
     */
    public function getTask()
    {
        return new Task($this->get('taskID'));
    }
}
