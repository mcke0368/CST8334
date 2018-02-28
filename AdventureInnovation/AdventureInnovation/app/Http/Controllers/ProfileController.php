<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use App\Models\GuideDAO;
//use Illuminate\Support\Facades\DB; needed for DB access
//use Illuminate\Http\Request; needed for DB access

class GuideController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }
    //my controller method called on dispatch
    public function khalid() {
        //move this into a DAO
        //$guide = DB::select('select * from guide');
        
        $guide = $this->dao->getAllGuides();

        foreach ($guide as $g) {
            $guide = new Guide($g->ID, $g->Name, $g->Certifications);
        }

        
        return view('Guide', ['guide' => $guide]);
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
        $_SESSION["guide"] = $guide[0]->id;
        $certs = $this->dao->getAllCerts($guide[0]->id);
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
}
