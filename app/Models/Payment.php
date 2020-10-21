<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'request_id',
        'status',
        'process_url',
        'receipt',
        'authorization',
        'currency',
        'total_paid',
        'paid_at',
    ];
}
