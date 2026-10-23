<?php
	session_start();
	require('../model/userModel.php');

	//<?php
	//session_start();
	//include "../controller/loginCheck.php"
  $id = $_SESSION["id"];
	  $passwordErr = "";


	if(isset($_POST['submit']))
  {
		$password = $_POST['password'];

		if($id != null && $password != null)
    {

			$status = deleteId($id, $password);
			if($status)
      {
				//$_SESSION['status'] = 'true';
        header('location: ../index.php');
      //  echo "Your account is deleted";
      }
	    else
      {
		    $passwordErr="invalid credentials!";
	    }
	  }
}

?>
