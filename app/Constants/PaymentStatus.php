<?php

namespace App\Constants;

interface PaymentStatus
{
    const FAILED = 0;
    const APPROVED = 1;
    const DECLINED = 2;
    const PENDING = 3;

    public const DESCRIPTION = [
        self::FAILED => 'FAILED',
        self::APPROVED => 'APPROVED',
        self::DECLINED => 'DECLINED',
        self::PENDING => 'PENDING',
    ];
}