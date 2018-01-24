<?php
/**
 * This file uses the DB class to avoid security issues like SQL Injections
 */
namespace App;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuideDAO {

    public function getAllGuides() {
        //move this into a DAO
        $guide = DB::select('select * from guide');
        return $guide;
    }

    public function logUserIn($email, $password) {
        
        $login = DB::select("select id, firstname, lastname, username, email, password from users 
        where email = '" . $email . "' and password = '" . $password . "'");

        if (sizeof($login) > 0) {
            return 'true';
        }
        return false;     
	}

	public function signup($firstname, $lastname, $email, $username, $password) {
		$lastInsertedId = DB::table('users')->insertGetId(
			['firstname' => $firstname,
			'lastname' => $lastname, 
			'username' => $username,
			'email' => $email,
			'password' => $password]
		);
		//DB::getPdo()->lastInsertId() for columns not named id

		DB::table('guide')->insert(['user_id' => $lastInsertedId]);
	}
	
	public function getGuideInfo($id){
		$guide = DB::select('select * from guide where user_id =' . $id);
        return $guide;
	}
	
	public function getAllCerts($id){
		$certs = DB::select('select * from certifications where guide_id =' . $id);
        return $certs;
	}

	public function getID($email, $password) {
		$id = DB::select("select * from users where email = '" . $email . "' and password = '" . $password . "'");
		
		return $id;
	}
	
	public function getLogbookTypes($user_id) {
		$logbook_types = DB::select("select id, title from logbook_type where user_id = '" . $user_id . "'");
		
		return $logbook_types;
	}
	
	public function getLogbookTypeHTML($logbook_type_id) {
		$logbook_type_html = DB::select("select title, html_text from logbook_type where id = '" . $logbook_type_id . "'");
		
		return $logbook_type_html;
	}
	
	public function getLogs($user_id) {
		$logs = DB::select("SELECT logbook_type.title AS type_title, logbook.id AS id, logbook.title AS title
		FROM logbook_type
		INNER JOIN logbook
		ON logbook_type.id = logbook.logbook_type_id
		AND logbook.user_id = '" . $user_id . "'");
		
		return $logs;
	}
	
	public function createNewLogbookType($user_id, $type_name, $type_html) {
		DB::table('logbook_type')->insert(
			['user_id' => $user_id, 
			'title' => $type_name,
			'html_text' => $type_html]
		);
	}	
	
	public function createNewLogbook($logbook_title, $logtype_id, $js_user_id, $logbook_html) {
		DB::table('logbook')->insert(
			['title' => $logbook_title,
			'logbook_type_id' => $logtype_id, 
			'user_id' => $js_user_id,
			'html_text' => $logbook_html]
		);
	}	
	
	public function getLogInfo($log_id) {
		$logbook_html = DB::select("select title, html_text from logbook where id = '" . $log_id . "'");
		
		return $logbook_html;
	}
	
	public function deleteLogType($logbook_type_id) {
		DB::table('logbook_type')->where('id', '=', $logbook_type_id)->delete();
	}
	
	public function deleteLog($logbook_id) {
		DB::table('logbook')->where('id', '=', $logbook_id)->delete();
	}

	public function updateProfile($guide_id, $about,  $work, $employment, $training){
		DB::table('guide')
			->where('id', $guide_id)
			->update(
			['about' => $about, 
			'work_experience' => $work,
			'employment_history' => $employment,
			'training' => $training]);
	}

	public function updateCerts($guide_id, $name, $link, $expiry){
		DB::table('certifications')->insert(
			['guide_id' => $guide_id,
			'cert_name' => $name, 
			'cert_link' => $link,
			'cert_expiry' => $expiry]
		);
	}
	
}