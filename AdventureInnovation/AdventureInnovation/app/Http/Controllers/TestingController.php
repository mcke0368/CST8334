<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestingController extends Controller
{
    public function getWeather(Request $request) {

        return view('logs.testing');
    }
}
