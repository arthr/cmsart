<?php

namespace App\Http\Controllers\MyAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('myaccount.donations.index');
    }

}
