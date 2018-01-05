<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->lastLogin();
        $this->lastAccess();
        $this->onlineChars();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }
    
    protected function lastLogin() {
        Blade::directive('accountLastLogin', function($lastLogin){
            return "<?php echo trans_choice('myaccount.game_account_last_login', $lastLogin, ['lastLogin' => $lastLogin]); ?>";
        });
    }
    
    protected function lastAccess() {
        Blade::directive('characterLastAccess', function($lastAccess){
            return "<?php echo trans_choice('myaccount.game_account_character_last_access', $lastAccess, ['lastAccess' => $lastAccess]); ?>";
        });
    }

    protected function onlineChars() {
        Blade::directive('onlineChars', function($charCount){
            return "<?php echo trans_choice('myaccount.game_account_total_characters_online', $charCount, ['charCount' => $charCount]); ?>";
        });
    }

}
