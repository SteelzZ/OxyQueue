<?php
/**
 * @category Oxy
 * @package  Oxy\Queue
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue;

use Oxy\Queue\Message\MessageInterface;

/**
 * Oxy queue message
 *
 * @category Oxy
 * @package  Oxy\Queue
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
class Message implements MessageInterface
{
    const TYPE_PLAIN_TEXT = 'text/plain';
    const TYPE_XML = 'text/xml';
    
    const DELIVERY_MODE_NOT_PERSISTANCE = 1;
    const DELIVERY_MODE_PERSISTANCE = 2;
  
    /**
     * @var string
     */
    private $_id;
    
    /**
     * @var string
     */    
    private $_content;
    
    /**
     * @var string
     */    
    private $_contentType;
    
    /**
     * @var string
     */    
    private $_queueId;
    
    /**
     * @var integer
     */    
    private $_deliveryMode;
    
    /**
     * @var boolean
     */    
    private $_isRedelivered;
    
    /**
     * @param string  $id
     * @param string  $content
     * @param string  $contentType
     * @param integer $deliveryMode
     * @param string  $queueId
     * @param boolean $isRedelivered
     */
    public function __construct(
        $id, 
        $content, 
        $contentType = self::TYPE_PLAIN_TEXT, 
        $deliveryMode = self::DELIVERY_MODE_PERSISTANCE, 
        $queueId = '',
        $isRedelivered = false
    )
    {
        $this->_id = $id;        
        $this->_content = $content;        
        $this->_queueId = $queueId;        
        $this->_contentType = $contentType;        
        $this->_deliveryMode = $deliveryMode;        
        $this->_isRedelivered = (boolean)$isRedelivered;        
    }
    
    /**
     * @return boolean
     */
    public function isRedelivered()
    {
        return $this->_isRedelivered;
    }

	/**
     * @return string
     */
    public function getContentType()
    {
        return $this->_contentType;
    }
    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getQueueId()
    {
        return $this->_queueId;
    }

    /**
     * @return string
     */
    public function getDeliveryMode()
    {
        return $this->_deliveryMode;
    }
}