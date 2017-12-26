<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $connection = 'lineage';
    protected $table = 'loginserver.accounts';
    protected $fillable = [
        'login', 'password', 'lastactive', 'access_level', 'lastIP', 'lastServer'
    ];
    public $incrementing = false;
    protected $primaryKey = 'login';
    protected $keyType = 'string';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo(User::class, 'login', 'id', UserAccount::class);
    }
    
    public function characters() {
        return $this->hasMany(Character::class, 'account_name');
    }
    
    public function status() {
        return $this->status;
    }
}
