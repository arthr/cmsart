<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $connection = 'mysql';
    protected $table = 'cms.items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item', 'price'
    ];
    
    protected $dates = ['deleted_at'];
    
    public function donations() {
        return $this->belongsToMany(Donation::class);
    }

}
