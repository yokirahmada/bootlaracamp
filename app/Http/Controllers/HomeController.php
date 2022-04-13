<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chekout;
use Auth;

class HomeController extends Controller
{
    public function dashboard() {

        $chekout = Chekout::with('Camp')->whereUserId(Auth::id())->get();
        return view ('user.dashboard', [
            'chekout' => $chekout
        ]);
    }
}
