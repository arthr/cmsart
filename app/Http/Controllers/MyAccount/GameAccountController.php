<?php

namespace App\Http\Controllers\MyAccount;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Lineage\Account;
use App\UserAccount;

class GameAccountController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        auth()->user()->load(['accounts' => function($query) {
                $query->orderBy('lastactive', 'desc')->orderBy('login', 'asc');
            }, 'accounts.characters']);
        return view('myaccount.game_account.index');
    }

    public function create() {
        return view('myaccount.game_account.create');
    }

    public function store(Request $request) {
        $messages = [
            'g-recaptcha-response.required' => trans('myaccount.game_account_create_captcha_required'),
            'g-recaptcha-response.validation.captcha' => 'validacao captcha'
        ];

        $validator = Validator::make($request->all(), [
                    'login' => 'required|min:4|alpha_num|unique:loginserver.accounts',
                    'password' => 'required|min:6',
                    'g-recaptcha-response' => 'required'
                        ], $messages);

        if ($validator->fails()) {
            return redirect(route('myaccount.game_account.create'))
                            ->withErrors($validator)
                            ->withInput();
        }

        $account = new Account();
        $account->login = $request->input('login');
        $account->password = base64_encode($request->input('password'));
        $account->lastactive = null;
        $account->access_level = 0;

        $userAccount = new UserAccount();
        $userAccount->user_id = auth()->id();
        $userAccount->login = $request->input('login');

        DB::transaction(function() use ($account, $userAccount) {
            $account->save();
            $userAccount->save();
        });

        DB::commit();

        return redirect(route('myaccount.game_account.create'))
                        ->with('status', trans('myaccount.game_account_create_success'));
    }

    public function settings($login) {
        $account = Account::find($login);
        $exists = auth()->user()->load('accounts')->accounts->contains($account);
        return $exists ? view('myaccount.game_account.settings')->with('account', $account) : redirect(route('myaccount.game_account.index'));
    }

    public function update($login) {

        return $login;
    }

    public function destroy($login) {
        $user = Auth::user();
        $account = Account::find($login)->load('user');
        $exists = auth()->user()->load('accounts')->accounts->contains($account);
        
//        dd($user->accounts->where('login', $login)->delete());
        
        if($exists){
//            $account->delete();
            return 'deleted';
        }else{
            return 'fail';
        }
    }

}
