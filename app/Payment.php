<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

    protected $connection = 'mysql';
    protected $table = 'cms.payments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'donation_id', 'user_id', 'status_id'
    ];
    protected $dates = ['deleted_at'];
    
    public function donation() {
        return $this->belongsTo(Lineage\Donation::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function paymentStatus() {
        return $this->hasOne(PaymentStatus::class);
    }

}
