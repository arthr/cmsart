<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentStatus extends Model
{
    protected $connection = 'mysql';
    protected $table = 'cms.paymentstatus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status'
    ];
}
