<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    protected $connection = 'mysql';
    protected $table = 'cms.user_accounts';
    protected $fillable = [
        'user_id', 'login'
    ];
    protected $dates = [
        'deleted_at'
    ];
    
    
}
