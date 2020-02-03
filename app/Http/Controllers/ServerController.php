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
		if(isset($_SESSION['name'])){
            $object = [
                'name'=> $_SESSION['name'],
                'photo'=> $_SESSION['photo']
            ];
            $response = json_encode($object);
        }
		else
			$response = "denied";

		return $response;
	}

	public function getSubjects(){
		$subjectsDB = Subject::all();
		$subjects = "";
		foreach($subjectsDB as $s){
			$subjects = $subjects.",".$s->initials;
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
		$subjectInitial = request('subjects');
		$idSubject = Subject::where('initials',$subjectInitial)->first()->idSubject;
		$initialDate = request('initialDate');
		$finalDate = request('finalDate');
		$duration = request('duration');
		$repetitions = request('repetitions');
        $rightAnswers = request('rigthAnswers') ? 1 : 0;
        $wrongAnswers = request('wrongAnswers') ? 1 : 0;

		Test::create([
			'idTeacher' => $_SESSION['id'],
			'idSubject' => $idSubject,
			'name' => $name,
			'duration' => intval($duration),
			'repetitions' => $repetitions,
			'initialDate' => $initialDate,
            'finalDate' => $finalDate,
            'rightAnswers' => $rightAnswers,
            'wrongAnswers' => $wrongAnswers,
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
            $photo = $teacher->photo;
			$_SESSION['name'] = $name;
            $_SESSION['id'] = $id;
            $_SESSION['photo'] = $photo;
		}
		else
			session_destroy();
		return $response;
    }

    public function verify(){
        $name = request('name');
        $email = request('email');
        $photo = request('photo');

        $response = Authentication::authentication($email, "auto");
        session_start();
		if($response != "accepted"){
            $teacher = new Teacher;
            return $teacher->insert($name, $email, $photo);
        }

        $teacher = Teacher::where('email',$email)->first();
		$name = $teacher->name;
		$id = $teacher->idTeacher;
		$_SESSION['name'] = $name;
        $_SESSION['id'] = $id;
        $_SESSION['photo'] = $photo;
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

