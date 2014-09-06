<?php
/**
 * @category Oxy
 * @package  Oxy\Queue
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue;

use Oxy\Queue\Message\MessageInterface;

/**
 * Oxy Queue interface
 *
 * @category Oxy
 * @package  Oxy\Queue
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
interface QueueInterface
{
    /**
     * Add new message to bus
     * 
     * @param MessageInterface $message
     */
    public function add(MessageInterface $message);
    
    /**
     * Commit message
     */
    public function commit();
    
    /**
     * Rollback messages
     */
    public function rollback();

    /**
     * Get messages from bus
     * 
     * @return MessageInterface
     */
    public function get();

    /**
     * Remove message
     * 
     * @param MessageInterface $message
     */
    public function remove(MessageInterface $message);

    /**
     * Clean up
     */
    public function purge();

    /**
     * Return queue id
     *
     * @return string
     */
    public function getQueueId();
}