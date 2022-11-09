<?php
include '../controller/viewProfileCheck.php';
//session_start();
 ?>

<html>
<head>
	<title>Profile</title>
  <link rel="stylesheet" href="../css/mix.css">
</head>
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
<div style = "background-color: tomato" class="welcome">

<center style="color:white">
  <h2>General Information</h2>
</center>
</div>


<body>




<table border="0" width="100%" height="100px">

  <tr>
    <td align="center"><b>Name:</b></td>
    <td width="50px"></td>
    <td align="center"><?php echo $_SESSION['name']  ?></td>

  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>User Name:</b></td>
    <td width="50px"></td>
    <td align="center"><?php echo $_SESSION['username']  ?></td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>Email:</b></td>
    <td width="100px"></td>
    <td align="center"><?php echo $_SESSION['email'] ?></td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>Gender:</b></td>
    <td width="50px"></td>
    <td align="center"><?php echo $_SESSION['gender']  ?></td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
  <tr>
    <td align="center"><b>Date of Birth:</b></td>
    <td width="50px"></td>
    <td align="center"><?php echo $_SESSION['dob']  ?></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>



</table>

<hr>
<table class="bottom" border="0" width="100%" height="50px">
  <tr>
    <td colspan="2" align="center">
      Copyright ~ Web Technology, Section: A, Group: 3
    </td>
  </tr>
</table>
</body>
</html>
