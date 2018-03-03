<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Guide;
use App\Models\GuideDAO;
use App\Models\User;

//use Illuminate\Support\Facades\DB; needed for DB access
//use Illuminate\Http\Request; needed for DB access

class ProfileController extends Controller
{
    private $dao;

    public function __construct() {
        $this->dao = new GuideDAO();
    }

    public function getGuide () {
        $user = Auth::user();
        $guide = $user->guide;
        $certs = $guide->certifications->all();
        //$certs = $this->dao->getAllCerts($guide[0]->id);

        return view('profile', ['guide' => $guide, 'certs' => $certs,
            'firstname' => $user->firstname,
            'email' => $user->email]);
    }

    public function editGuide () {
        $user = Auth::user();
        $guide = $user->guide;
        $certs = $guide->certifications->all();
        return view('editprofile', ['guide' => $guide, 'certs' => $certs,
            'firstname' => $user->firstname,
            'email' => $user->email]);
    }

    public function updateProfile(Request $request){
        //ajax goes here to insert into DB for profile stuff

        $user = Auth::user();
        $guide = $user->guide;
        $about= $request->about;
        $work = $request->work;
        $employment = $request->employment;
        $training = $request->training;
        $this->dao->updateProfile($guide->id,$about, $work,$employment, $training);
    }

    public function updateCerts(Request $request) {
        //ajax goes here to insert into DB for cert  stuff

        $name= $request->name;
        $link = $request->link;
        $exp = $request->expiry;
        $this->dao->updateCerts($_SESSION["guide"], $name,$link,$exp);
    }
}
