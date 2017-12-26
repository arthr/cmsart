<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $connection = 'lineage';
    protected $table = 'gameserver.characters';
    protected $fillable = [
        'account_name', 'obj_Id', 'char_name', 'level',
        'maxHp', 'curHp', 'maxCp', 'curCp', 'maxMp', 'curMp',
        'sex', 'x', 'y', 'z', 'karma', 'pvpkills', 'pkkills', 'clanid',
        'race', 'classid', 'base_class', 'deletetime', 'title',
        'rec_have', 'accesslevel', 'online', 'char_slot', 'newbie',
        'lastAccess', 'clan_privs', 'nobless', 'subpledge', 'last_recom_date', 
        
    ];
    public $incrementing = false;
    protected $primaryKey = 'obj_Id';
    public $timestamps = false;
}
