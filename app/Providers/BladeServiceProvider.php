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
        $this->accountStatus();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    protected function accountStatus() {
        Blade::directive('account_status', function ($account_login) {
            return "<?php var_dump(Account::where('login', $account_login)->first()->access_level); ?>";
        });
    }

}
