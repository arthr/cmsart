<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    protected $connection = 'gameserver';
    protected $table = 'gameserver.class_list';
    public $timestamps = false;
    protected $appends = [
        'class_view_name',
    ];

    public function charTemplate() {
        return $this->belongsTo(CharTemplate::class, 'id', 'ClassId');
    }
}
