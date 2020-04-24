<?php
/**
 * The association between images and windows keys.
 *
 * PHP version 5
 *
 * @category WindowsKeyAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * The association between images and windows keys.
 *
 * @category WindowsKeyAssociation
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class WindowsKeyAssociation extends ARCHERController
{
    /**
     * The association table.
     *
     * @var string
     */
    protected $databaseTable = 'windowsKeysAssoc';
    /**
     * The association fields and common names.
     *
     * @var array
     */
    protected $databaseFields = array(
        'id' => 'wkaID',
        'imageID' => 'wkaImageID',
        'windowskeyID' => 'wkaKeyID',
    );
    /**
     * The required fields
     *
     * @var array
     */
    protected $databaseFieldsRequired = array(
        'imageID',
        'windowskeyID',
    );
    /**
     * Additional fields
     *
     * @var array
     */
    protected $additionalFields = array(
        'key',
        'image'
    );
    /**
     * Database -> Class field relationships
     *
     * @var array
     */
    protected $databaseFieldClassRelationships = array(
        'WindowsKey' => array(
            'id',
            'windowskeyID',
            'key'
        ),
        'Image' => array(
            'id',
            'imageID',
            'image'
        )
    );
    /**
     * Return the associated image.
     *
     * @return object
     */
    public function getImage()
    {
        return $this->get('image');
    }
    /**
     * Return the associated key.
     *
     * @return host
     */
    public function getKey()
    {
        return $this->get('key');
    }
}
