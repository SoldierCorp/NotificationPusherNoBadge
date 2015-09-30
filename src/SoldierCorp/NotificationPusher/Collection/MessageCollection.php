<?php

/*
 * This file is part of NotificationPusher.
 *
 * (c) 2013 Cédric Dugat <cedric@dugat.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace soldiercorp\NotificationPusher\Collection;

use soldiercorp\NotificationPusher\Model\MessageInterface;

/**
 * MessageCollection.
 *
 * @uses \soldiercorp\NotificationPusher\Collection\AbstractCollection
 * @uses \IteratorAggregate
 * @author Cédric Dugat <cedric@dugat.me>
 */
class MessageCollection extends AbstractCollection implements \IteratorAggregate
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->coll = new \ArrayIterator();
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return $this->coll;
    }

    /**
     * @param \soldiercorp\NotificationPusher\Model\MessageInterface $message Message
     */
    public function add(MessageInterface $message)
    {
        $this->coll[] = $message;
    }
}
