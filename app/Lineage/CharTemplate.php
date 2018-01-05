<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class CharTemplate extends Model
{
    protected $connection = 'gameserver';
    protected $table = 'gameserver.char_templates';
    public $timestamps = false;
    protected $primaryKey = 'ClassId';

}
