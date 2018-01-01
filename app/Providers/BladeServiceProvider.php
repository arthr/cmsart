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

}
