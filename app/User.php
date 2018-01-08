<?php

namespace App;

use App\Traits\HumanTimeTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;
    use HumanTimeTrait;

    protected $connection = 'mysql';
    protected $table = 'cms.users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'confirmation_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'is_online', 'last_access', 'characters_online'
    ];

    public function accounts()
    {
        return $this->hasMany(Lineage\Account::class, 'user_id')->where('access_level', '<>', '-50');
    }

    public function accountsTrashed()
    {
        return $this->hasMany(Lineage\Account::class, 'user_id');
    }
    
    public function characters()
    {
        return $this->hasManyThrough(Lineage\Character::class, Lineage\Account::class, 'user_id', 'account_name', 'id', 'login');
    }

    public function getCharactersOnlineAttribute()
    {
        $charactersOnline = $this->characters->filter(function ($char) {
            if ($char->online) {
                return $char;
            }

        });
        return $charactersOnline;
    }

    public function getIsOnlineAttribute()
    {
        return $this->characters->contains('online', 1);
    }

    public function getLastAccessAttribute()
    {
        $diff = 0;
        if ($this->characters->count()) {
            $lastAccess = $this->characters->sortBy('lastAccess')->first()->lastAccess;
            $diff = $this->getDateHumanDiff(Carbon::now()->timestamp, (int) ($lastAccess / 1000));
        }
        return $diff;
    }
    
    public function donations() {
        return $this->hasMany(Lineage\Donation::class);
    }

}
