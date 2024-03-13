<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billin;


class UserController extends Controller
{

    public function home(){
        return view('welcome');
    }
    public function create(){
        return view('create');
    }

    public function saved(Request $request){
        $billin = new Billin();
        $billin->firstN = $request->firstN;
        $billin->lastN = $request->lastN;
        $billin->gender = $request->gender;
        $billin->language = $request->language;
        $billin->email = $request->email;
        $billin->address = $request->address;
        $billin->state = $request->state;
        $billin->zip = $request->zip;
        $billin->cardtype = $request->cardtype;
        $billin->save();
        return redirect()->route('home');
    }

}