<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use App\Models\GuideDAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 
use Session;

class LoginController extends Controller
{
    private $dao;

    public function __construct() {
        session_start();
        $this->dao = new GuideDAO();
        $this->user_id = NULL;
    }
    //my controller method called on dispatch
    public function login(Request $request) {
        $email= $request->email;
        $password = $request->password;

        $login_state = $this->dao->logUserIn($email, $password);
		
		if($login_state == 'true') {
            $s_user_id = $this->dao->getID($email, $password);
            $_SESSION["s_user_id"] = $s_user_id;

		}	
		
        return $login_state;
    }

    public function signup(Request $request) {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;

        $this->dao->signup($firstname, $lastname, $email, $username, $password);
    }


	
	public function logout(Request $request) {
			$_SESSION = [];
			session_destroy();	
    }

}
