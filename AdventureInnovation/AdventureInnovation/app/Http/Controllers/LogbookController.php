<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;

class LogbookController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }
	
	public function setLogType(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			
			$type_id= $request->type_id;
			$_SESSION["logtype_id"] = $type_id;
			
			return 'true';
			
		} else {
			return false;
		}	
		
		return false;
    }
 
	public function showLogTemplate(Request $request) {
		
		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			
			$s_user_id = $_SESSION["s_user_id"];
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			
			$logtype_id = $_SESSION["logtype_id"];
			$logtype_id = substr($logtype_id, 2);
			$log_types = $this->dao->getLogbookTypeHTML($logtype_id);
			
			return view('createDefaultLogbook', ['log_types' => $log_types]);
			
		} else {
			return "No Authentication";
		}
		
        return "No Authentication";
    }
	
	public function saveLog(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			
			$logbook_title= $request->logbook_title;
			$logbook_html= $request->logbook_html;
			
			$logtype_id = $_SESSION["logtype_id"];
			$logtype_id = substr($logtype_id, 2);
			
			$s_user_id = $_SESSION["s_user_id"];
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			
			$this->dao->createNewLogbook($logbook_title, $logtype_id, $js_user_id, $logbook_html);
			
			return 'true';
			
		} else {
			return false;
		}	
		
		return false;
    }
	
	public function showLog(Request $request) {
		
		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			
			$s_user_id = $_SESSION["s_user_id"];
			foreach($s_user_id as $js_user_id) break;
			$js_user_id = $js_user_id->id;
			
			$log_id = $_SESSION["log_id"];
			$log_id = substr($log_id, 2);
			$log_info = $this->dao->getLogInfo($log_id);
			
			return view('defaultLog', ['log_info' => $log_info]);
			
		} else {
			return "No Authentication";
		}
		
        return "No Authentication";
    }
	
	public function setLog(Request $request) {

		session_start();
		
		if(isset($_SESSION["s_user_id"])) {
			
			$log_id= $request->log_id;
			$_SESSION["log_id"] = $log_id;
			
			return 'true';
			
		} else {
			return false;
		}	
		
		return false;
    }
		
}
