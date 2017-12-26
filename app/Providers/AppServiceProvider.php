<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Blade::directive('account_status', function ($account_login) {
//            $access_level = \App\Lineage\Account::where('login', $account_login)->first()->access_level;
            return "<?php var_dump(\App\Lineage\Account::where('login', $account_login)->first()->access_level); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
