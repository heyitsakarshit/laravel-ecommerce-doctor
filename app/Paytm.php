<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    //
    protected $table = 'paytm';

    protected $fillable = ['name','phone','email','status','amount','order_id','transaction_id'];
}
