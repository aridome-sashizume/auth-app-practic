<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //認証済みのユーザを取得
    public function index(Request $request)
    {
        return view('dashboard',[
            'user' => $request->user(),
        ]);
    }
}
