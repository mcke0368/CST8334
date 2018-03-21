<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewLogController extends Controller
{
    public function displayLog($log_id){

        $log = logPrintView::all(); /**??*/
        return view('logPrintView')->with('logPrintView', $log_id);

    }
}
