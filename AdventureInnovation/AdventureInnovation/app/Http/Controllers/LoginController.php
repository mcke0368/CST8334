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

    public function getGuide () {
        //var_dump($_SESSION["s_user_id"]);die;
        $guide = $this->dao->getGuideInfo($_SESSION["s_user_id"][0]->id);
        $certs = $this->dao->getAllCerts($guide[0]->id);
        return view('profile', ['guide' => $guide, 'certs' => $certs, 
        'firstname' => $_SESSION["s_user_id"][0]->firstname,
        'email' => $_SESSION["s_user_id"][0]->email]);
    }

    public function editGuide () {
        $guide = $this->dao->getGuideInfo($_SESSION["s_user_id"][0]->id);
        $_SESSION["guide"] = $guide[0]->Id;
        $certs = $this->dao->getAllCerts($guide[0]->Id);
        return view('editprofile', ['guide' => $guide, 'certs' => $certs, 
        'firstname' => $_SESSION["s_user_id"][0]->firstname,
        'email' => $_SESSION["s_user_id"][0]->email]);
    }

    public function updateProfile(Request $request){
        //ajax goes here to insert into DB for profile stuff

        $about= $request->about;
        $work = $request->work;
        $employment = $request->employment;
        $training = $request->training;
        $this->dao->updateProfile($_SESSION["guide"],$about, $work,$employment, $training);
    }

    public function updateCerts(Request $request) {
        //ajax goes here to insert into DB for cert  stuff
       
        $name= $request->name;
        $link = $request->link;
        $exp = $request->expiry;
        $this->dao->updateCerts($_SESSION["guide"], $name,$link,$exp);
    }
	
	public function logout(Request $request) {
			$_SESSION = [];
			session_destroy();	
    }

}
