<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 

class LogbookListController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }
 
 
	public function passLogbookData(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			$s_user_id = $_SESSION["s_user_id"];
			
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			$logbook_types = $this->dao->getLogbookTypes($js_user_id);
			$logbooks = $this->dao->getLogs($js_user_id);
			
			return view('logbook', ['logbook_types' => $logbook_types, 'logs' => $logbooks]);
			
		} else {
			return "No Authentication";
		}	
		
		return "No Authentication";
    }
	
	public function deleteLogType(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			$s_user_id = $_SESSION["s_user_id"];
			
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			
			$logbook_type_id = $request->logbook_type_id;
			$logbook_type_id = $this->dao->deleteLogType($logbook_type_id);
			
			
		}	
		
    }
	
	public function deleteLog(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			$s_user_id = $_SESSION["s_user_id"];
			
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			
			$logbook_id = $request->logbook_id;
			$logbook_id = $this->dao->deleteLog($logbook_id);
			
		} else {
		}	
		
    }
	
}
