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
 * Header provided is invalid.
 *
 * @author Unit6 <team@unit6websites.com>
 */
class InvalidHeader extends JWT\Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }
}