<?php

namespace App\Http\Controllers;


use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Controller for Videos in the user profile.  This functionionality has been moved to the GuideProfileController
 * so this could probably be removed.
 * Class VideoController
 * @package App\Http\Controllers
 */
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get current guide_id
        $user_id = Auth::id();
        $guide = DB::table('guides')->where('user_id', $user_id)->first();
        $id = $guide->id;
        //verify if the data is exists

        $user_video = DB::table('videos')->where('guide_id', $id)->first();
        // if it is not exists, create a record
        if ($user_video == null) {
            $video = new Video;
            $video->Youtube_URL = $request->Youtube_URL;
            $video->Facebook_URL = $request->Facebook_URL;
            $video->Twitter_URL = $request->Twitter_URL;
            $video->Instagram_URL = $request->Instagram_URL;
            $video->guide_id = $id;
            $video->save();
        }
        // else update the value
        else {
        DB::table('videos')
            ->where('guide_id', $id)
            ->update(array('Youtube_URL' => $request->Youtube_URL, 'Facebook_URL' => $request->Facebook_URL, 'Twitter_URL' => $request->Twitter_URL, 'Instagram_URL' => $request->Instagram_URL ));
        }
        // reroute the page
        return redirect()->action(
            'GuideProfileController@getGuide'
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // $video = Video::find($id);
        //$video->Title = $request->input('Title');
       // $video->URL = $request->input('URL');
       // $video->save();
        //return redirect()->route('profie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
