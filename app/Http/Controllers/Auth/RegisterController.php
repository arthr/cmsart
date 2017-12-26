<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Notifications\SendConfirmation;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath() {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        //$this->guard()->login($user);
        return $this->registered($request, $user) ?: redirect($this->redirectPath())
                        ->with('status', "Hi <strong>{$user->name}</strong>, thanks for signing up! Please check your inbox.");
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user) {
        $user->notify(new SendConfirmation($user));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'confirmation_code' => md5(uniqid(rand(), true)),
        ]);
    }

    /**
     * Confirm email from recent registered user.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmation($confirmation_code) {
        $user = User::where('confirmation_code', $confirmation_code)->firstOrFail();
        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();
        $this->guard()->login($user);
        return redirect(route('myaccount.profile'))->with('status', trans('auth.confirmation_complete'));
    }

    /**
     * Resend email confirmation
     * 
     * @return \Illuminate\Http\Response
     */
    public function resendConfirmation(Request $request) {
        if ($request->isMethod('POST')) {
            $user = User::where(['email' => $request->only('email'), 'confirmed' => 0])->first();

            if ($user === null) {
                return $this->sendFailedEmailResponse($request);
            }

            $user->notify(new SendConfirmation($user));

            return redirect(route('register.resend_confirmation'))->with('status', trans('auth.confirmation_sended'));
        } else {
            return view('auth.confirmation.email');
        }
    }

    /**
     * Get failed email response
     * 
     * @param Request $request
     * @throws type
     * */
    protected function sendFailedEmailResponse(Request $request) {
        throw ValidationException::withMessages([
            'email' => [trans('auth.confirmation_not_found')],
        ]);
    }

}
