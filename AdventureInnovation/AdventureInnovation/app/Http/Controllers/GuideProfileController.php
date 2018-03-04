<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Models\GuideDAO;

//use Illuminate\Support\Facades\DB; needed for DB access
//use Illuminate\Http\Request; needed for DB access

class GuideProfileController extends Controller
{
    private $dao;

    public function __construct() {

        // make sure they're authorized and logged in. If not, they are redirected to login
        $this->middleware('auth');

        // fire up the GuideDAO so we can access the guide data
        // TODO - get rid of this!!!!! and use proper methods.
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

    /* called via AJAX to update profile information */
    public function ajaxUpdateProfile(Request $request){
        //ajax goes here to insert into DB for profile stuff

        $user = Auth::user();
        $guide = $user->guide;

        $about= $request->about;
        $work = $request->work;
        $employment = $request->employment;
        $training = $request->training;
        $this->dao->updateProfile($guide->id,$about, $work,$employment, $training);
    }

    /* called via AJAX to update the certificates */
    public function ajaxUpdateCerts(Request $request) {
        //ajax goes here to insert into DB for cert  stuff

        $name= $request->name;
        $link = $request->link;
        $exp = $request->expiry;
        $this->dao->updateCerts($_SESSION["guide"], $name,$link,$exp);
    }
}
