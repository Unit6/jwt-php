<?php
/*
 * This file is part of the JWT package.
 *
 * (c) Unit6 <team@unit6websites.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unit6\JWT\Exception;

use Unit6\JWT;

/**
 * Provided JWT is trying to be used before it's been created as defined by 'iat'
 *
 * @author Unit6 <team@unit6websites.com>
 */
class InvalidIssuedAtClaim extends JWT\Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }
}