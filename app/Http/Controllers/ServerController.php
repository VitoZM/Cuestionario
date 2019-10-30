<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server\Authentication;
use App\Model\Teacher;
use App\Model\Subject;
use App\Model\Test;
use App\Model\Question;
use App\Model\Answer;

class ServerController extends Controller
{
	//
	
	public function authenticate(){
		session_start();
		if(isset($_SESSION['name']))
			$response = $_SESSION['name'];
		else
			$response = "denied";

		return $response;
	}

	public function getSubjects(){
		$subjectsDB = Subject::all();
		$subjects = "";
		foreach($subjectsDB as $s){
			$subjects = $subjects.",".$s->name;
		}
		return $subjects;
	}

	public function close(){
		session_start();
		session_destroy();

		return "destroyed";
	}

	public function saveTest(){
		session_start();
		$name = request('name');
		$description = request('description');
		$nameSubject = request('subjects');
		$idSubject = Subject::where('name',$nameSubject)->first()->idSubject;
		$initialDate = request('initialDate');
		$finalDate = request('finalDate');
		$duration = request('duration');
		$repetitions = request('repetitions');

		Test::create([
			'idTeacher' => $_SESSION['id'],
			'idSubject' => $idSubject,
			'name' => $name,
			'duration' => intval($duration),
			'repetitions' => $repetitions,
			'initialDate' => $initialDate,
			'finalDate' => $finalDate,
			'questions' => "",
			'description' => $description
		]);

		return "400 OK";
	}

	public function authentication(){
		$email = request('email');
		$password = request('password');

		$response = Authentication::authentication($email,$password);
		session_start();
		if($response == "accepted"){
			$teacher = Teacher::where('email',$email)->first();
			$name = $teacher->name;
			$id = $teacher->idTeacher;
			$_SESSION['name'] = $name;
			$_SESSION['id'] = $id;
		}
		else
			session_destroy();
		return $response;
	}

	public function getUser(){
		$request = request();
		$jwt = request('jwt');
		include_once(app_path() . ServerController::getLibrary());
		$user = Authentication::getUser($jwt);

		return $user;
	}

	public function information(){
		$request = request();
		
		$jwt = request('jwt');
		include_once(app_path() . ServerController::getLibrary());
		$ci = Authentication::getCi($jwt);
		$profile = Profile::where('ci',$ci)->first();
		return $profile;
	}

}

