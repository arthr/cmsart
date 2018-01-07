<?php

namespace App\Http\Controllers\MyAccount;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Helpers\Telnet;
use App\Helpers\TelnetA;

class CharacterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $telnetA = new Telnet('10.0.2.2', 54321);
        $telnetA->connect();
        $logged = $telnetA->exec('55465213');
        dd($telnetA->exec('give Arthr 57 1000'));
        $telnetA->disconnect();

        $order = \Request::has('order') ? \Request::input('order') : 'lastAccess';
        $orientation = $order == 'char_name' ? 'asc' : 'desc';
        $characters = User::find(auth()->id())->characters()->orderBy($order, $orientation)->paginate(3);
        $characters->appends(['order' => $order])->render();

        return view('myaccount.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
