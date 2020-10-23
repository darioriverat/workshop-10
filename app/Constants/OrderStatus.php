<?php

namespace App\Constants;

interface OrderStatus
{
    public const CREATED = 0;
    public const PENDING = 1;
    public const PAID = 2;

    public const STATUSES = [
        self::CREATED => 'created',
        self::PENDING => 'pending',
        self::PAID => 'paid',
    ];
}
