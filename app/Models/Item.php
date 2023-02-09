<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
