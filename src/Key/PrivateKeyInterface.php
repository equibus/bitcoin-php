<?php

namespace Afk11\Bitcoin\Key;

use Bitcoin\NetworkInterface;
use Bitcoin\Buffer;
use Afk11\Bitcoin\Signature\K\KInterface;

/**
 * Interface PrivateKeyInterface
 * @package Bitcoin
 * @author Thomas Kerin
 */
interface PrivateKeyInterface
{
    /**
     * Return the WIF key
     *
     * @param NetworkInterface $network
     * @return mixed
     */
    public function getWif(NetworkInterface $network);

    /**
     * Return the decimal secret multiplier
     *
     * @return int|string
     */
    public function getSecretMultiplier();
}
