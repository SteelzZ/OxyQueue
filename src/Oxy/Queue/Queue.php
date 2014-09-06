<?php
/**
 * @category Oxy
 * @package  Oxy\Queue
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue;

use Oxy\Queue\Message\MessageInterface;

/**
 * Queue
 *
 * @category Oxy
 * @package  Oxy\Queue
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 **/
class Queue implements QueueInterface
{
    /**
     * @var string
     */
    const OPTION_KEY_AUTO_COMMIT = 'auto-commit';
    
    /**
     * @var QueueInterface
     */
    protected $_queueImpl;
    
    /**
     * @var array
     */
    protected $_options;
 
    /**
     * @return QueueInterface
     */
    public function getQueueImpl()
    {
        return $this->_queueImpl;
    }

	/**
     * @param QueueInterface $queueImpl
     * @param array $options
     */
    public function __construct(QueueInterface $queueImpl, array $options = array())
    {
        $this->_queueImpl = $queueImpl;
        $this->_options = $options;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    private function checkAndGetOption($key)
    {
        if(isset($this->_options[$key])){
            return $this->_options[$key];
        } else {
            return false;
        }     
    }
    
    /**
     * @param MessageInterface $message
     */
    public function add(MessageInterface $message)
    {
        $this->_queueImpl->add($message);
        if($this->checkAndGetOption(self::OPTION_KEY_AUTO_COMMIT)){
            $this->commit();
        }
    }
    
    /**
     * Commit messages
     */
    public function commit()
    {
        $this->_queueImpl->commit();
    }

    /**
     * @return MessageInterface
     */
    public function get()
    {
        return $this->_queueImpl->get();
    }

    /**
     * @return void
     */
    public function purge()
    {
        $this->_queueImpl->purge();
    }

    /**
     * @param MessageInterface $message
     */
    public function remove(MessageInterface $message)
    {
        $this->_queueImpl->remove($message);
    }

    /**
     * @return void
     */
    public function rollback()
    {
        $this->_queueImpl->rollback();
    }

    /**
     * Return queue id
     *
     * @return string
     */
    public function getQueueId()
    {
        $this->_queueImpl->getQueueId();
    }
}