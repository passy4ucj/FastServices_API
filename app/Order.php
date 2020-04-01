<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['client_no', 'worker_no', 'service', 'amount', 'status'];
}
