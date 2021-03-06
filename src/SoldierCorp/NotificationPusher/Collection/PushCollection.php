<?php

/*
 * This file is part of NotificationPusher.
 *
 * (c) 2013 Cédric Dugat <cedric@dugat.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoldierCorp\NotificationPusher\Collection;

use SoldierCorp\NotificationPusher\Model\PushInterface;

/**
 * PushCollection.
 *
 * @uses \SoldierCorp\NotificationPusher\Collection\AbstractCollection
 * @uses \IteratorAggregate
 * @author Cédric Dugat <cedric@dugat.me>
 */
class PushCollection extends AbstractCollection implements \IteratorAggregate
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
     * @param \SoldierCorp\NotificationPusher\Model\PushInterface $push Push
     */
    public function add(PushInterface $push)
    {
        $this->coll[] = $push;
    }
}
