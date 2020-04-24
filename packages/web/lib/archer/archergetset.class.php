<?php
/**
 * Get/set container for other elements
 *
 * PHP version 5
 *
 * @category ARCHERGetSet
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Get/set container for other elements
 *
 * @category ARCHERGetSet
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
class ARCHERGetSet extends ARCHERBase
{
    /**
     * The data to set/get
     *
     * @var array
     */
    protected $data = array();
    /**
     * Initializes this class
     *
     * @param array $data the data to set/get
     */
    public function __construct($data = array())
    {
        foreach ((array)$data as $key => &$val) {
            $this->set($key, $val);
            unset($val);
        }
    }
    /**
     * Set value to key
     *
     * @param string $key   the key to set to
     * @param mixed  $value the value to set
     *
     * @throws Exception
     * @return object
     */
    public function set($key, $value)
    {
        try {
            if (!$key) {
                throw new Exception(_('No key being requested'));
            }
            if (is_numeric($value) && $value < ($key == 'id' ? 1 : -1)) {
                throw new Exception(_('Invalid numeric entry'));
            }
            if (is_object($value)) {
                $msg = sprintf(
                    '%s: %s, %s: %s',
                    _('Setting Key'),
                    $key,
                    _('Object'),
                    $value->__toString()
                );
            } elseif (is_array($value)) {
                $msg = sprintf(
                    '%s: %s %s',
                    _('Setting Key'),
                    $key,
                    _('Array')
                );
            } else {
                $msg = sprintf(
                    '%s: %s, %s: %s',
                    _('Setting Key'),
                    $key,
                    _('Value'),
                    $value
                );
            }
            $this->info($msg);
            $this->data[$key] = $value;
        } catch (Exception $e) {
            $str = sprintf(
                '%s: %s: %s, %s: %s',
                _('Set Failed'),
                _('Key'),
                $key,
                _('Error'),
                $e->getMessage()
            );
            $this->debug($str);
        }
        return $this;
    }
    /**
     * Gets an item from the key sent, if no key all object data is returned
     *
     * @param mixed $key the key to get
     *
     * @return object
     */
    public function get($key = '')
    {
        if (!$key) {
            return $this->data;
        }
        if (!array_key_exists($key, $this->data)) {
            return false;
        }
        if (is_object($this->data[$key])) {
            $msg = sprintf(
                '%s: %s, %s: %s',
                _('Returning value of key'),
                $key,
                _('Object'),
                $this->data[$key]->__toString()
            );
        } elseif (is_array($this->data[$key])) {
            $msg = sprintf(
                '%s: %s',
                _('Returning array within key'),
                $key
            );
        } else {
            $msg = sprintf(
                '%s: %s, %s: %s',
                _('Returning value of key'),
                $key,
                _('Value'),
                $this->data[$key]
            );
        }
        $this->info($msg);
        return $this->data[$key];
    }
}
