<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function guestList(){
        $guests = Guest::all();

        return view('guests.list', ['guests' => $guests]);
    }

    public function createGuest(){
        return view('guests.form');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function storeGuest(){
        $guest = new Guest();

        $guest->name = request('name');
        $guest->passport = request('passport');
        $guest->enter = date("Y-m-d H:i:s");

        $guest->save();

        return redirect('/guests');
    }

    public function quitGuest($id){
        $guest = Guest::find(['id' => $id])->first();
        $guest->quit = date("Y-m-d H:i:s");
        $guest->save();

        return redirect('/guests');
    }
}
