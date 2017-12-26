<?php

namespace App\Lineage;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Account extends Model {

    protected $connection = 'lineage';
    protected $table = 'loginserver.accounts';
    protected $fillable = [
        'login', 'password', 'lastactive', 'access_level', 'lastIP', 'lastServer'
    ];
    public $incrementing = false;
    protected $primaryKey = 'login';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $appends = [
        'account_status', 'last_login'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'login', 'id', UserAccount::class);
    }

    public function characters() {
        return $this->hasMany(Character::class, 'account_name');
    }

    public function getAccountStatusAttribute() {
        switch ($this->access_level):
            case 0:
                $status = trans('myaccount.profile_account_status_active');
                break;
            case 100:
                $status = trans('myaccount.profile_account_status_administrator');
                break;
            case -100:
                $status = trans('myaccount.profile_account_status_banned');
                break;
            case $this->access_level > 10:
                $status = trans('myaccount.profile_account_status_gamemaster');
                break;
            default:
                $status = trans('myaccount.profile_account_status_unknown');
        endswitch;

        return $status;
    }

    public function getLastLoginAttribute() {
        $now = Carbon::now();
        return $this->getDateHumanDiff($now->timestamp,(int)($this->lastactive / 1000));
    }

    /**
     * Get human readable time difference between 2 dates
     *
     * Return difference between 2 dates in year, month, hour, minute or second
     * The $precision caps the number of time units used: for instance if
     * $time1 - $time2 = 3 days, 4 hours, 12 minutes, 5 seconds
     * - with precision = 1 : 3 days
     * - with precision = 2 : 3 days, 4 hours
     * - with precision = 3 : 3 days, 4 hours, 12 minutes
     * 
     * From: http://www.if-not-true-then-false.com/2010/php-calculate-real-differences-between-two-dates-or-timestamps/
     *
     * @param mixed $time1 a time (string or timestamp)
     * @param mixed $time2 a time (string or timestamp)
     * @param integer $precision Optional precision 
     * @return string time difference
     */
    private function getDateHumanDiff($time1, $time2, $precision = 2) {
        // If not numeric then convert timestamps
        if (!is_int($time1)) {
            $time1 = strtotime($time1);
        }
        if (!is_int($time2)) {
            $time2 = strtotime($time2);
        }
        // If time1 > time2 then swap the 2 values
        if ($time1 > $time2) {
            list( $time1, $time2 ) = array($time2, $time1);
        }
        // Set up intervals and diffs arrays
        $intervals = array('year', 'month', 'day', 'hour', 'minute', 'second');
        $diffs = array();
        foreach ($intervals as $interval) {
            // Create temp time from time1 and interval
            $ttime = strtotime('+1 ' . $interval, $time1);
            // Set initial values
            $add = 1;
            $looped = 0;
            // Loop until temp time is smaller than time2
            while ($time2 >= $ttime) {
                // Create new temp time from time1 and interval
                $add++;
                $ttime = strtotime("+" . $add . " " . $interval, $time1);
                $looped++;
            }
            $time1 = strtotime("+" . $looped . " " . $interval, $time1);
            $diffs[$interval] = $looped;
        }
        $count = 0;
        $times = array();
        foreach ($diffs as $interval => $value) {
            // Break if we have needed precission
            if ($count >= $precision) {
                break;
            }
            // Add value and interval if value is bigger than 0
            if ($value > 0) {
                if ($value != 1) {
                    $interval .= "s";
                }
                // Add value and interval to times array
                $times[] = $value . " " . $interval;
                $count++;
            }
        }
        // Return string with times
        return implode(", ", $times);
    }

}
