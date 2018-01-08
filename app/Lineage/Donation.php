<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model {

    protected $connection = 'mysql';
    protected $table = 'cms.donations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];
    protected $dates = ['deleted_at'];

    public function user() {
        return $this->belongsTo(\App\User::class);
    }

    public function payment() {
        return $this->hasOne(\App\Payment::class);
    }

    public function items() {
        return $this->belongsToMany(Item::class);
    }

}
