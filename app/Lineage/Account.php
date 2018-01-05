<?php

namespace App\Lineage;

use App\Lineage\Character;
use App\User;
use App\UserAccount;
use App\Traits\HumanTimeTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HumanTimeTrait;
    
    protected $connection = 'loginserver';
    protected $table = 'loginserver.accounts';
    protected $fillable = [
        'login', 'password', 'lastactive', 'access_level',
    ];
    public $incrementing = false;
    protected $primaryKey = 'login';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $appends = [
        'account_status', 'last_login',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function characters()
    {
        return $this->hasMany(Character::class, 'account_name');
    }

    public function delete(){
        $this->access_level = -50;
        return parent::update();
    }

    public function getAccountStatusAttribute()
    {
        switch ($this->access_level):
            case 0:
                $status = trans('myaccount.game_account_status_active');
                break;
            case 100:
                $status = trans('myaccount.game_account_status_administrator');
                break;
            case -10:
                $status = trans('myaccount.game_account_status_blocked');
                break;
            case -100:
                $status = trans('myaccount.game_account_status_banned');
                break;
            case $this->access_level > 10:
                $status = trans('myaccount.game_account_status_gamemaster');
                break;
            default:
            $status = trans('myaccount.game_account_status_unknown');
        endswitch;

        return $status;
    }

    public function getLastLoginAttribute()
    {
        $now = Carbon::now();
        return $this->lastactive ? $this->getDateHumanDiff($now->timestamp, (int) ($this->lastactive / 1000)) : 0;
    }

}
