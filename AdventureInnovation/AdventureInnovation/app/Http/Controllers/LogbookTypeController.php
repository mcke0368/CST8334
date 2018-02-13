<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 

class LogbookTypeController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }
	
	public function showTemplate(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			return view('createLogType');
		} else {
			return "No Authentication";
		}	
		
		return "No Authentication";
    }
 
 
	public function saveType(Request $request) {
        $type_name = (string)$request->type_name;
        $type_html = $request->type_html;
		
		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			
			$s_user_id = $_SESSION["s_user_id"];
			
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			$this->dao->createNewLogbookType($js_user_id, $type_name, $type_html);
			
			return 'true';
			
		} else {
			return false;
		}
		
        return false;
    }
	
}
