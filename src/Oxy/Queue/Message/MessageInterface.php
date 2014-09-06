<?php
/**
 * @category Oxy
 * @package  Oxy\Queue\Message
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue\Message;

/**
 * Oxy Queue interface
 *
 * @category Oxy
 * @package  Oxy\Queue\Message
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
interface MessageInterface
{
    /**
     * @return string
     */
    public function getId();
    
    /**
     * @return string
     */
    public function getContent();
    
    /**
     * @return string
     */
    public function getContentType();
    
    /**
     * @return string
     */
    public function getQueueId();
    
    /**
     * @return string
     */
    public function getDeliveryMode();
    
     /**
     * @return boolean
     */
    public function isRedelivered();
}