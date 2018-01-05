<?php

namespace App\Lineage;

use App\Traits\HumanTimeTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    use HumanTimeTrait;

    protected $connection = 'gameserver';
    protected $table = 'gameserver.characters';
    protected $fillable = [
        'account_name', 'obj_Id', 'char_name', 'level',
        'maxHp', 'curHp', 'maxCp', 'curCp', 'maxMp', 'curMp',
        'sex', 'x', 'y', 'z', 'karma', 'pvpkills', 'pkkills', 'clanid',
        'race', 'classid', 'base_class', 'deletetime', 'title', 'title_color',
        'rec_have', 'accesslevel', 'online', 'onlinetime', 'char_slot', 'newbie',
        'lastAccess', 'clan_privs', 'nobless', 'subpledge', 'last_recom_date',
    ];
    public $incrementing = false;
    protected $primaryKey = 'obj_Id';
    public $timestamps = false;
    protected $appends = [
        'last_login', 'race_name', 'total_online_time',
    ];

    public function account() {
        return $this->belongsTo(Account::class, 'account_name', 'login');
    }

    public function class ()
    {
        return $this->belongsTo(CharacterClass::class, 'classid');
    }

    public function hero() {
        return $this->hasOne(Hero::class, 'charId');
    }

    public function getLastLoginAttribute()
    {
        return $this->lastAccess ? Carbon::createFromTimestamp($this->lastAccess / 1000)->diffForHumans() : 0;
    }

    public function getRaceNameAttribute()
    {
        $raceName = null;
        switch ($this->race) {
            case 0:
                $raceName = 'Human';
                break;
            case 1:
                $raceName = 'Elven';
                break;
            case 2:
                $raceName = 'Dark Elven';
                break;
            case 3:
                $raceName = 'Orc';
                break;
            case 4:
                $raceName = 'Dwarven';
                break;
        }
        return $raceName;
    }

    public function getTotalOnlineTimeAttribute()
    {
        return $this->onlinetime ? $this->getDateHumanDiff(Carbon::now()->timestamp, Carbon::now()->timestamp - $this->onlinetime) : 0;
    }

}
