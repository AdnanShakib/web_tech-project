<?php
//session_start();
// final term using database
if(!isset($_SESSION))
	{
			session_start();
	}
function getConnection()
{
	$servername="localhost";
	$uname="root";
	$pass="";
	$dbname="webtech";

	$conn=new mysqli($servername,$uname,$pass,$dbname);

//	$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	return $conn;
}

function signup($name,$username,$email,$password,$gender,$dob)
{
	$conn = getConnection();
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}
	else
	{
		$sql = "INSERT INTO users (name,username,email,password,gender,dob) VALUES('".$name."','".$username."','".$email."','".$password."','".$gender."','".$dob."')";
		//	$sql = "INSERT into users values ('','nafis', 'naf', 'abc@gmail.com', '123', 'male', '1-2-22')";

		if($conn->query($sql)==true){
		//	echo "record inserted successfully";
			return true;
		}else{
		//	echo "not valid";
			return false;
		}
	}

}


function login($id, $password)
{
	$conn = getConnection();
//	$sql = "select * from users where ID=$id} and password={$password}";
	$sql = "SELECT * from users where ID = '{$id}' and PASSWORD = '{$password}'";
	$result = $conn->query($sql);
	if($result->num_rows>0)
  	{
				$row = $result->fetch_assoc();
				return $row;
  	}
	else
		{
				return false;
		}
}
function userdata($id)
{
	$conn = getConnection();
	$sql = "SELECT * from users where ID = $id";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$row = $result->fetch_assoc();
		return $row;
	}
	else {
		return false;
	}
}

function updateInfo($id,$email, $username,$gender)
{
	$conn = getConnection();
	$sql = "UPDATE users set USERNAME = '{$username}',EMAIL ='{$email}',GENDER = '{$gender}' where ID = '{$id}'";
	$result = $conn->query($sql);
	return true;
}
function updatePassword($id,$newPass)
{
	$conn = getConnection();
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}
	else
	{
		$sql = "UPDATE users set PASSWORD = '{$newPass}' where ID = '{$id}'";
		$result = $conn->query($sql);
		return true;
		//$sql = "UPDATE users set password ='".$newPass"'";
		//	$sql = "INSERT into users values ('','nafis', 'naf', 'abc@gmail.com', '123', 'male', '1-2-22')";
	}

}


function deleteId($id,$password)
{
	$conn=getConnection();
	$sql = "DELETE from users where id=$id and password=$password";
	$result = $conn->query($sql);
	return true;
}

function thisSchedule()
{
	$conn=getConnection();
	$sql = "SELECT * from workSchedule where flight_id ='202'";
	$result = $conn->query($sql);
	//$row = $result->fetch_assoc();
	return $result;
}

function complaint($c_email,$c_reason)
{
	  $current_data = file_get_contents('../model/complain.json');
	  $array_data = json_decode($current_data, true);
	  $newdata = array(
							'email'=>  $c_email,
							'reason' =>     $c_reason );
	 	$array_data[] = $newdata;
		$final_data = json_encode($array_data);
		file_put_contents('../model/complain.json', $final_data);
		return $final_data;
	//
}

// Midterm codes using files
//
//
// function signup($name, $email, $username, $password, $gender, $dob)
// {
//
// 		$current_data = file_get_contents('../model/data.json');
// 		$array_data = json_decode($current_data, true);
// 			 $extra = array(
// 				    'name'        =>   $name,
// 						'email'          =>  $email,
// 						'username'     =>     $username,
// 						'password'     =>     $password,
// 						'gender'    =>  $gender,
// 						'dob'    => $dob
//
// 			 );
//
// 			$array_data[] = $extra;
// 			$final_data = json_encode($array_data);
//
// 			file_put_contents('../model/data.json', $final_data);
// 			return $final_data;
//
//
// }
//
// function login($username, $password)
// {
// 	$current_data = file_get_contents('../model/data.json');
// 	$array_data = json_decode($current_data, true);
// //	print_r ($array_data);
// 	for($i=0;$i<sizeof($array_data);$i++)
// 	{
// 		foreach($array_data[$i] as $key => $val)
// 		{
// 			if($array_data[$i]['username']==$username && $array_data[$i]['password']==$password)
// 			return true;
// 		}
//
// 	}
// 	  //print_r($array_data);
//
//
// }
//
//
// function userdata($username)
// {
//
// 	$data = json_decode(file_get_contents("../model/data.json"), true);
//
// 	foreach($data as $user){
// 	    if($user["username"] === $username){
// 					return $user;
//
// 	    }
// }
// }
//
// function forgotPassword($email)
// {
//
// 	$data = json_decode(file_get_contents("../model/data.json"), true);
//
// 	foreach($data as $user){
// 	    if($user["email"] === $email){
// 					return $user;
//
// 	    }
// }
// }
//
//
//
// function updateInfo($name, $email, $username, $dob,$gender)
// {
// 	$data = file_get_contents('../model/data.json');
//
// 	// decode json to array
// 	$json_arr = json_decode($data, true);
//
// 	foreach ($json_arr as $key => $value) {
// 	    if ($value['name'] === $name && $value['dob']===$dob) {
// 	        $json_arr[$key]['email'] = $email;
// 					$json_arr[$key]['username'] = $username;
// 					$json_arr[$key]['gender'] = $gender;
// 					file_put_contents('../model/data.json', json_encode($json_arr));
// 					return true;
//
//
// 	    }
// 	}
// }
//
// function updatePassword($name,$currentPass,$newPass)
// {
// 	$data = file_get_contents('../model/data.json');
//
// 	// decode json to array
// 	$json_arr = json_decode($data, true);
//
// 	foreach ($json_arr as $key => $value) {
// 	    if ($value['username'] === $name && $value['password']===$currentPass) {
// 	        $json_arr[$key]['password'] = $newPass;
// 					file_put_contents('../model/data.json', json_encode($json_arr));
// 					return true;
//
//
// 	    }
// 	}
// }
//


 ?>
