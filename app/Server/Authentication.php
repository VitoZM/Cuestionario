<?php

	namespace App\Server;
	use App\Model\Teacher;

	class Authentication{

        public static function getToken($userId,$password){
			$error = "denied";
			$user=User::where('userid',$userId);
			if($user->first()){
				$profile = Profile::where('id',$user->first()->id)->first();
				if($user->count() > 0 && $password == $user->first()->password){
					date_default_timezone_set("UTC"); 
					$time = time();
					$key = "secretKeyWord5-";
					$token = array(
						'user' => [$userId,$profile->ci],
						'role' => $user->first()->role,
						'time' => $time
					);
					$jwt = JWT::encode($token, $key);
					return $jwt;
				}
			}
            return $error;
		}		

		public static function authentication($email,$password){
			$error = "denied";
			$teacher = Teacher::where('email',$email)->where('password',$password);
			if($teacher->first())
				return "accepted";			
			return $error;
		}
	};
	
?>

