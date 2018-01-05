<?php

namespace App\Http\Controllers\MyAccount;

use App\Http\Controllers\Controller;
use App\Lineage\Account;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GameAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        auth()->user()->load(['accounts' => function ($query) {
            $query->orderBy('lastactive', 'desc')->orderBy('login', 'asc');
        }, 'accounts.characters']);
        return view('myaccount.game_account.index');
    }

    public function create()
    {
        return view('myaccount.game_account.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'g-recaptcha-response.required' => trans('myaccount.game_account_create_captcha_required'),
            'g-recaptcha-response.validation.captcha' => 'validacao captcha',
            'maxaccount' => trans('validation.maxaccount', ['limit' => 10]),
        ];

        Validator::extend('maxaccount', function ($attribute, $value, $parameters) {
            $totalAccounts = Auth::user()->accounts()->count();
            return ($totalAccounts < $parameters[0]);
        });

        $validator = Validator::make($request->all(), [
            'login' => 'required|min:4|alpha_num|unique:loginserver.accounts,login|maxaccount:10',
            'password' => 'required|min:6',
            'g-recaptcha-response' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect(route('myaccount.game_account.create'))
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find(auth()->id());
        $account = new Account();
        $account->login = $request->input('login');
        $account->password = base64_encode($request->input('password'));
        $account->lastactive = null;
        $account->access_level = 0;
        $account->user()->associate($user);
        $account->save();

        return redirect(route('myaccount.game_account.index'))
            ->with('status', trans('myaccount.game_account_create_success'));
    }

    public function settings($login)
    {
        $account = Account::find($login);
        $exists = auth()->user()->accounts->contains($account);
        return $exists ? view('myaccount.game_account.settings')->with('account', $account) : redirect(route('myaccount.game_account.index'));
    }

    public function update($login)
    {
        $account = Account::find($login);
        $exists = auth()->user()->accounts->contains($account);

        if ($exists) {
            $messages = [
                'g-recaptcha-response.required' => trans('myaccount.game_account_create_captcha_required'),
                'g-recaptcha-response.validation.captcha' => 'validacao captcha',
            ];

            $validator = Validator::make(\Request::all(), [
                'password' => 'nullable|min:6',
                'g-recaptcha-response' => 'required',
            ], $messages);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator);
            }

            if (\Request::input('password')) {
                $account->password = base64_encode(\Request::input('password'));
            }
            $account->access_level = \Request::has('block') ? -10 : 0;
            $account->update();

            return redirect()
                ->back()
                ->with(['status' => trans('myaccount.game_account_settings_update_success')]);
        }

        return redirect()
            ->route('myaccount.game_account.settings');
    }

    public function destroy($login)
    {
        $user = User::find(auth()->id());
        $account = Account::find($login)->load('user');
        $exists = auth()->user()->accounts->contains($account);

        if ($exists && $account->login == \Request::input('login')) {
            $account->delete();
            return redirect(route('myaccount.game_account.index'))
                ->with('status', trans('myaccount.game_account_settings_delete_success'));
        }

        return redirect()->back()
            ->withErrors(['login' => trans('myaccount.game_account_settings_delete_fail')]);
    }

}
