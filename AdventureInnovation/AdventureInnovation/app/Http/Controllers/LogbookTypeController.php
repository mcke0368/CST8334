<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookTypeController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }
	
	public function showTemplate(Request $request) {

	    if ( Auth::check()) {
	        $user = Auth::user();
			return view('logs.createLogType');
		} else {
			return "No Authentication";
		}	
		
		return "No Authentication";
    }
 
 
	public function saveType(Request $request) {
        $type_name = (string)$request->type_name;
        $type_html = $request->type_html;
		
	    if ( Auth::check()) {
	        $user = Auth::user();
			$this->dao->createNewLogbookType($user->id, $type_name, $type_html);
			return 'true';
			
		} else {
			return false;
		}
		
        return false;
    }

    public function showTemplateList(Request $request) {

        if ( Auth::check()) {
            $user = Auth::user();


            //$logbook_types =
            //return view('logTemplate-partial', ['logbook_types' => $logbook_types]);
        }
    }
}
