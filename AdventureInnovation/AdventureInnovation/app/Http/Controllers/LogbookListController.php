<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\GuideDAO;
use Illuminate\Http\Request;

class LogbookListController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }
 
    /* get the logbook templates for this user then return logbook view */
	public function passLogbookData(Request $request) {

	    if ( Auth::check()) {
	        $user = Auth::user();

            $logbook_types = $this->dao->getLogbookTypes($user->id);
			$logbooks = $this->dao->getLogs($user->id);

			return view('logs.logbook', ['logbook_types' => $logbook_types, 'logs' => $logbooks]);

        }
        return "User is not authenticated";
    }

    /* process request to delete log template */
	public function deleteLogType(Request $request) {

	    if ( Auth::check()) {
	        $user = Auth::user();

			$logbook_type_id = $request->logbook_type_id;
			$logbook_type_id = $this->dao->deleteLogType($logbook_type_id);
		}

        return "User is not authenticated";
    }

    /* process request to delete log */
	public function deleteLog(Request $request) {

	    if ( Auth::check()) {
	        $user = Auth::user();

			$logbook_id = $request->logbook_id;
			$logbook_id = $this->dao->deleteLog($logbook_id);
			
		}
        return "User is not authenticated";
    }
	
}
