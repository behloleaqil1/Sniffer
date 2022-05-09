<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SniffingController extends Controller
{
    public function storeUser(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'user_name' => 'required'
        ]);

    }
}
