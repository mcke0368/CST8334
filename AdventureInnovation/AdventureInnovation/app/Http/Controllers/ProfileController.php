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

}
