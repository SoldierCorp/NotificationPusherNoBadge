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

use soldiercorp\NotificationPusher\Model\DeviceInterface;

/**
 * DeviceCollection.
 *
 * @uses \soldiercorp\NotificationPusher\Collection\AbstractCollection
 * @uses \IteratorAggregate
 * @author Cédric Dugat <cedric@dugat.me>
 */
class DeviceCollection extends AbstractCollection implements \IteratorAggregate
{
    /**
     * Constructor.
     *
     * @param array $devices Devices
     */
    public function __construct(array $devices = array())
    {
        $this->coll = new \ArrayIterator();

        foreach ($devices as $device) {
            $this->add($device);
        }
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return $this->coll;
    }

    /**
     * @param \soldiercorp\NotificationPusher\Model\DeviceInterface $device Device
     */
    public function add(DeviceInterface $device)
    {
        $this->coll[$device->getToken()] = $device;
    }

    /**
     * Get tokens.
     *
     * @return array
     */
    public function getTokens()
    {
        $tokens = array();

        foreach ($this as $device) {
            $tokens[] = $device->getToken();
        }

        return array_unique(array_filter($tokens));
    }
}
