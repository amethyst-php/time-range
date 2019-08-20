<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TimeRangeAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'time-range.create',
        Tokens::PERMISSION_UPDATE => 'time-range.update',
        Tokens::PERMISSION_SHOW   => 'time-range.show',
        Tokens::PERMISSION_REMOVE => 'time-range.remove',
    ];
}
