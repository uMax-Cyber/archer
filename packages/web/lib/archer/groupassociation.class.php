<?php
/**
 * Group association between host -> group links.
 *
 * PHP version 5
 *
 * @category GroupAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Group association between host -> group links.
 *
 * @category GroupAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class GroupAssociation extends ARCHERController
{
    /**
     * Group association table
     *
     * @var string
     */
    protected $databaseTable = 'groupMembers';
    /**
     * Group Association fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'gmID',
        'hostID' => 'gmHostID',
        'groupID' => 'gmGroupID',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'hostID',
        'groupID',
    );
    /**
     * Gets the group object
     *
     * @return object
     */
    public function getGroup()
    {
        return new Group($this->get('groupID'));
    }
    /**
     * Gets the host object
     *
     * @return object
     */
    public function getHost()
    {
        return new Host($this->get('hostID'));
    }
}
