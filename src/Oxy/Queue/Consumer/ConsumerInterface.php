<?php
/**
 * @category Oxy
 * @package  Oxy\Queue\Consumer
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue\Consumer;

/**
 * Oxy Queue consumer
 *
 * @category Oxy
 * @package  Oxy\Queue\Consumer
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
interface ConsumerInterface
{
    /**
     * Consume messages
     */
    public function consume();
    
    /**
     * Listen for messages
     */
    public function listen();      
}