<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewLogController extends Controller
{
    public function displayLog(Log $log){

        $log = logPrintView::all(); /**??*/
        return view('logPrintView')->with('logPrintView', $log);

    }
}
