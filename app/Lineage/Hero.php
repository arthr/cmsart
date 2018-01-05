<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $connection = 'gameserver';
    protected $table = 'gameserver.heroes';
    protected $fillable = [
        'charId', 'char_name', 'class_id', 'count', 'played',
    ];
    public $incrementing = false;
    protected $primaryKey = 'charId';
    public $timestamps = false;


    public function character() {
        return $this->belongsTo(Character::class, 'obj_Id');
    }
}
