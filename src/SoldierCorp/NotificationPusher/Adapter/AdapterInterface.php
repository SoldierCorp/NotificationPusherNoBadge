<?php

/*
 * This file is part of NotificationPusher.
 *
 * (c) 2013 Cédric Dugat <cedric@dugat.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoldierCorp\NotificationPusher\Adapter;

use SoldierCorp\NotificationPusher\Model\PushInterface;

/**
 * AdapterInterface.
 *
 * @author Cédric Dugat <cedric@dugat.me>
 */
interface AdapterInterface
{
    /**
     * Push.
     *
     * @param \SoldierCorp\NotificationPusher\Model\PushInterface $push Push
     *
     * @return \SoldierCorp\NotificationPusher\Collection\DeviceCollection
     */
    public function push(PushInterface $push);

    /**
     * Supports.
     *
     * @param string $token Token
     *
     * @return boolean
     */
    public function supports($token);

    /**
     * Get defined parameters.
     *
     * @return array
     */
    public function getDefinedParameters();

    /**
     * Get default parameters.
     *
     * @return array
     */
    public function getDefaultParameters();

    /**
     * Get required parameters.
     *
     * @return array
     */
    public function getRequiredParameters();
}
