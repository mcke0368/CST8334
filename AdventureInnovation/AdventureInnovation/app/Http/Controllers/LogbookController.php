<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookController extends Controller
{
    private $dao;

    public function __construct()
    {
        $this->dao = new GuideDAO();
    }

    /* sets the current template type in the session data
    This gets called via ajax to set type_id, then calls createDefaultLogbook, which uses type_id
    Not sure why they didn't just do a get request with params....
    TODO - get rid of references to session
    */
    public function setLogType(Request $request)
    {
        /* make sure we're authenticated */
        if (Auth::check()) {
            $user = Auth::user();

            /* check that we have a valid template type
            Set a session variable to store the template type.
            TODO - no sure why */
            try {
                /* use regex to get the value */
                $val = $request->get('type_id');
                preg_match('/^create_logtype_(?P<id>\d+)$/', $request->get('type_id'), $matches);
                /* temporarily store log type in the session */
                $request->session()->put('logtype_id', $matches['id']);
                return 'true';
            } catch (Exception $e) {
                /* throw an error if this didn't work */
                throw new \Exception('This request needs to pass in the template log type as type_id', 0, $e);
            }
        } else {
            return 'Not authenticated';
        }
    }

    /* create a new logbook from the template */
    public
    function showLogTemplate(Request $request)
    {
        if (Auth::check()) {
            $logtype_id = $request->session()->get('logtype_id');
            $log_types = $this->dao->getLogbookTypeHTML($logtype_id);
            return view('logs.createDefaultLogbook', ['log_types' => $log_types]);

        }

        return "No Authentication";
    }

    public
    function saveLog(Request $request)
    {

        if (Auth::check()) {
            $user = Auth::user();
            $logbook_title = $request->logbook_title;
            $logbook_html = $request->logbook_html;

            $logtype_id = $request->session()->get('logtype_id');
            $this->dao->createNewLogbook($logbook_title, $logtype_id, $user->id, $logbook_html);

            return 'true';

        } else {
            return false;
        }

        return false;
    }

    public
    function showLog(Request $request)
    {

        session_start();

        if (isset($_SESSION["s_user_id"])) {

            $s_user_id = $_SESSION["s_user_id"];
            foreach ($s_user_id as $js_user_id) break;
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

    public
    function setLog(Request $request)
    {

        session_start();

        if (isset($_SESSION["s_user_id"])) {

            $log_id = $request->log_id;
            $_SESSION["log_id"] = $log_id;

            return 'true';

        } else {
            return false;
        }

        return false;
    }

}
