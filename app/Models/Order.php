<?php

namespace App\Models;

use App\Constants\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function status(): string
    {
        return OrderStatus::STATUSES[$this->status];
    }
}
