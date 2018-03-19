<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Models\GuideDAO;
use MongoDB\Driver\Exception\ExecutionTimeoutException;

//use Illuminate\Support\Facades\DB; needed for DB access
//use Illuminate\Http\Request; needed for DB access

class GuideProfileController extends Controller
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

    public function getGuide()
    {
        $user = Auth::user();
        $guide = $user->guide;
        if ($guide) {
            $certs = $guide->certifications->all();
            $video = $user->videos()->first();
            $social_media = $user->socialmedia()->first();
            return view('profile', ['user' => $user, 'guide' => $guide, 'certs' => $certs,
                'firstname' => $user->firstname,
                'email' => $user->email, 'video' => $video, 'social_media' => $social_media]);
        } else {
            /* log the person out and go back to welcome screen
            TODO = make it known to end-user why this redirect is happening!!!!
             */
            auth()->logout();
            return redirect('/');
        }
    }

    public function editGuide()
    {
        $user = Auth::user();
        $guide = $user->guide;
        $certs = $guide->certifications->all();
        $video = $user->videos()->first();
        $social_media = $user->socialmedia()->first();

        return view('editprofile', ['user' => $user, 'guide' => $guide, 'certs' => $certs,
            'firstname' => $user->firstname,
            'email' => $user->email, 'video' => $video, 'social_media' => $social_media]);
    }

    /* called via AJAX to update profile information */
    public function ajaxUpdateProfile(Request $request)
    {
        //ajax goes here to insert into DB for profile stuff
        try {
            $user = Auth::user();
            $guide = $user->guide;
            $about = $request->about;
            $work = $request->work;
            $employment = $request->employment;
            $training = $request->training;
            $phone = $request->phone;
            $videos = $request->videos;
            $social_media = $request->social_media;

            $this->dao->updateProfile($guide->id, $about, $work, $employment, $training, $phone, $videos, $social_media);
        }
        catch (Execption $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

    }

    /* called via AJAX to update the certificates */
    public function ajaxUpdateCerts(Request $request)
    {
        //ajax goes here to insert into DB for cert  stuff

        $name = $request->name;
        $link = $request->link;
        $exp = $request->expiry;
        $this->dao->updateCerts($_SESSION["guide"], $name, $link, $exp);
    }
}
