<?php

/*
 * This file is part of NotificationPusher.
 *
 * (c) 2013 Cédric Dugat <cedric@dugat.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace soldiercorp\NotificationPusher\Model;

/**
 * DeviceInterface
 *
 * @author Cédric Dugat <cedric@dugat.me>
 */
interface DeviceInterface
{
    /**
     * Get token.
     *
     * @return string
     */
    public function getToken();

    /**
     * Set token.
     *
     * @param string $token Token
     *
     * @return \soldiercorp\NotificationPusher\Model\DeviceInterface
     */
    public function setToken($token);
}
