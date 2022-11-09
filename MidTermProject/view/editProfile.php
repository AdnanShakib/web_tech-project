<?php
session_start();
include '../controller/editProfileCheck.php';

 ?>

<html>
<head>
	<title>Edit Profile</title>
  <link rel="stylesheet" href="../css/mix.css">
</head>
<body>
  <div class="header">


<table border="0" width="100%" height="100px">
  <tr>
    <td align="left">
      <img src="../images/airline.jpg" width="100px" height="100px">

    </td>
    <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td>
    <td align="right">
      <h3 class="pos">
        <a href="../controller/logout.php"> Logout </a>
      </h3>
    </td>
  </tr>
</table>
  </div>
<hr>
<div style = "background-color: tomato">
  <center>
    <h2 style="color:white">Change General Information</h2>
  </center>
</div>

  <!-- <input type="image"> -->



<table border="0" width="100%" height="100px">
<form  method="post">

  <tr>
    <td align="center"><b>Name:</b></td>
    <td width="50px"></td>
    <td align="center"><?php echo $_SESSION['Name']  ?></td>

  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>User Name:</b></td>
    <td width="50px"></td>
    <td align="center"><input type="text" name="username" value="<?php echo $_SESSION['Username']  ?>"> <?php echo $unameErr; ?> </td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>Email:</b></td>
    <td width="100px"></td>
    <td align="center"><input type="text" name="email" value="<?php echo $_SESSION['Email']  ?>"><?php echo $unameErr; ?></td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>Gender:</b></td>
    <td width="50px"></td>
    <td align="center"><input type="radio" name="gender" value="male">Male
                      <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other  <?php echo $unameErr; ?></td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>Date of Birth:</b></td>
    <td width="50px"></td>
    <td align="center"><?php echo $_SESSION['Dob']  ?></td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
 <tr>
   <td align='right'><br></td>
   <td align='center'><br></td>
   <td align='center'><input class = "size"style="background-color: tomato; color: white" type="submit" name="submit"><br></td>

 </tr>
</form>
</table>
<div class="header">

<table class="bottom" border="0" width="100%" height="50px">
  <tr>
    <td colspan="2" align="center">
      Copyright ~ Web Technology, Section: A, Group: 3
    </td>
  </tr>
</table>
</div>
</body>
</html>
