<?php

namespace App\Http\Controllers;

class viewLogController extends Controller
{
    public function displayLog($log_id){

        $log = logPrintView::all(); /**??*/
        return view('logPrintView')->with('logPrintView', $log_id);

    }
}
