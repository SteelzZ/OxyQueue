<?php
/**
 * @category Oxy
 * @package  Oxy\Queue\Consumer
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Queue\Consumer;

use Oxy\Queue\QueueInterface;

/**
 * Oxy Queue worker
 *
 * @category Oxy
 * @package  Oxy\Queue\Consumer
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
class Amqp extends ConsumerAbstract
{
    /**
     * @var QueueInterface
     */
    protected $_queue;

    /**
     * @param QueueInterface $queueAdapter
     * @param array          $options
     */
    public function __construct(QueueInterface $queueAdapter, array $options = array())
    {
        parent::__construct($options);
        $this->_queue = $queueAdapter;                        
    }

    /**
     * Consume messages
     */
    public function consume()
    {
        // TODO: Implement consume() method.
    }

    /**
     * Listen for messages
     */
    public function listen()
    {
        // TODO: Implement listen() method.
    }
}