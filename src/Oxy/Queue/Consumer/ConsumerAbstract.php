<?php
/**
 * @category Oxy
 * @package  Oxy\Queue\Consumer
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue\Consumer;

/**
 * Oxy Queue consumer 
 * Base class
 *
 * @category Oxy
 * @package  Oxy\Queue\Consumer
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
abstract class ConsumerAbstract implements ConsumerInterface
{    
    /**
     * @var array
     */
    protected $_options;

    /**
     * @param array $options
     */
    public function __construct($options = array())
    {
        $this->_options = $options;
    }  
}