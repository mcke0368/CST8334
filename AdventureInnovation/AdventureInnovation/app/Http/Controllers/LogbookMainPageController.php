<?php

namespace App\Http\Controllers;
use App\Models\BaseLog;
use App\Models\GuideDAO;
use App\Models\LogType;
use Illuminate\Support\Facades\Auth;

/**
 * Controller class for the main Logbook page.  This page needs info to help populate
 * the dropdown for log book types and the logbook history.
 * Class LogbookMainPageController
 * @package App\Http\Controllers
 */
class LogbookMainPageController extends Controller
{
    private $dao;

    public function __construct()
    {

        // make sure they're authorized and logged in. If not, they are redirected to login
        $this->middleware('auth');

        // fire up the GuideDAO so we can access the guide data
        // TODO - get rid of this!!!!! and use proper methods.
        $this->dao = new GuideDAO();
    }

    /**
     * Show the main page.  Just need to populate some information to pass along:
     * - log data, log types and log count,
     * -
     */
    public function show() {

        $user = Auth::user();
        $guide = $user->guide;

        if ($guide) {
            $base_logs = BaseLog::all()->where('user_id', '=', $user->id);
            $log_data = [];
            foreach($base_logs as $bl) {
                $type = $bl->base_logable_type;
                $id = $bl->base_logable_id;
                $sl = $type::find($id) ;

                // gather up the data we need
                $data = array(
                    'id' => $bl->id,
                    'title' => $bl->title,
                    'location' => $bl->location,
                    'activity' => $sl->name,
                    'slug' => $sl->slug,
                    'date' => $bl->start_time
                );

                array_push($log_data, $data);
            }

            $logcount = $base_logs->count();

            $types = LogType::all();

            return view('logs/logbookMainPage',
                ['user' => $user, 'guide' => $guide, 'log_data' => $log_data, 'log_types' => $types, 'logcount' => $logcount]);

        } else {
            /* log the person out and go back to welcome screen
            TODO = make it known to end-user why this redirect is happening!!!!
             */
            auth()->logout();
            return redirect('/');
        }

    }

}
