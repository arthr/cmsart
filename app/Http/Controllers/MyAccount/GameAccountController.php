<?php

namespace App\Http\Controllers\MyAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameAccountController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        auth()->user()->load(['accounts' => function($query) {
                $query->orderBy('lastactive', 'desc');
            }, 'accounts.characters']);
        return view('myaccount.game_account.index');
    }

}
