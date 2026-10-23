<?php
	session_start();
	require('../model/userModel.php');

	//<?php
	//session_start();
	//include "../controller/loginCheck.php" ?>
	<?php
	  $id = $password = "";
	  $uidErr = $passwordErr = "";


	// if (isset($_POST["submit"])) {
	//       //$error = false;
	//       if (empty($_POST["userid"])) {
	//         $uidErr = "username is required";
	//       }
	// if(empty($_POST["password"]))
	//  {
	//    $passwordErr = "password is required";
	//
	//  }
	// }

	if(isset($_POST['submit'])){
		$id = $_POST['userid'];
		$password = $_POST['password'];

		if($id != null && $password != null){

			$status = login($id, $password);
			if($status){
				//$_SESSION['status'] = 'true';
				$_SESSION['username'] = $status["USERNAME"];
				$_SESSION['id'] = $status["ID"];
				$_SESSION['Name'] = $status['NAME'];
				$_SESSION['Username'] = $status['USERNAME'];
				$_SESSION['Email'] = $status['EMAIL'];
				$_SESSION['Gender'] = $status['GENDER'];
				$_SESSION['Dob'] = $status['DOB'];
				$_SESSION['Password'] = $status['PASSWORD'];
				if(isset($_POST['remember']))
				{
					//$_SESSION['username'] = $status["USERNAME"];
					//$_SESSION['password'] = $password;
					setcookie($id,$password, time()+36000, '/');

				header('location: ../view/homePage.php');
				}
				else if(!isset($_POST['remember']))
				{
					$_SESSION['username'] = $status["USERNAME"];
					header('location: ../view/homePage.php');
				}


		}else{
		echo "invalid credentials!";
		}
	}
}
?>
