<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('modules.account-module.configuration');
    }

    public function update_user(){
        return view('modules.account-module.configuration-username');
    }

    public function update_password(){
        return view('modules.account-module.configuration-password');
    }

}
