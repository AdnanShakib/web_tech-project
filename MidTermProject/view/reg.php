<?php
  include "../controller/regCheck.php";
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Registration</title>
          <link rel="stylesheet" href="../css/mix.css">
          <style>
            body{
            //  background-color: #66BFBF;
            }
            label{
              font-size: 20px;
            }
          </style>
     </head>
     <body>

<div class="header">

       <table border="0" width="100%" height="100px">
         <tr>
           <td align="left">
             <img src="../images/airline.jpg" width="100px" height="100px">

           </td>
           <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td>

         </tr>
       </table>
       </div>
       <hr>

          <center>
          <div class="container" style="width:800px;">

               <form method="post" action=''>
                    <br>
                    <fieldset>
                      <legend style="color:green; font-size: 30px">Registration</legend>
                      <table>
                        <tr>
                          <td><label>Name</label></td>
                          <td><input type="text" name="name"> <span style="color : red;"> <?php echo $nameErr; ?></span><br></td>
                        </tr>

                        <tr>
                          <td><label>E-mail</label></td>
                          <td><input type="email" name = "email"> <span style="color : red;"> <?php echo $emailErr; ?></span> <br></td>
                        </tr>

                        <tr>
                          <td><label>User Name</label></td>
                          <td><input type="text" name = "username">  <span style="color : red;"> <?php echo $unameErr; ?></span><br></td>
                        </tr>

                        <tr>
                          <td><label>Password</label></td>
                          <td><input type="password" name = "pass">  <span style="color : red;"> <?php echo $passErr; ?></span><br></td>
                        </tr>

                        <tr>
                          <td><label>Confirm Password</label></td>
                          <td><input type="password" name = "cPass"> <span style="color : red;"> <?php echo $cPassErr; ?> </span><br></td>
                        </tr>

                        <tr>
                          <td><label>Gender</label></td>
                          <td><input type="radio" id="male" name="gender" value="male">
                              <label for="male">Male</label>
                              <input type="radio" id="female" name="gender" value="female">
                              <label for="female">Female</label>
                              <input type="radio" id="other" name="gender" value="other">
                              <label for="other">Other</label> <span style="color : red;"> <?php echo $nameErr; ?><br> </td>
                        </tr>

                        <tr>
                          <td><lable>Date of Birth:</label></td>
                          <td><input type="date" name="dob"> <span style="color : red;"> <?php echo $nameErr; ?> <br><br></td>
                        </tr>
                   </fieldset>
                    </table>
                    <input style ="background-color: tomato; color: white" type="submit" name="submit"><br>

               </form>
          </div>
            </center>
          <br>
          <hr>
          <table border="0" width="100%" height="50px">
            <tr>
              <td colspan="2" align="center">
                Copyright ~ Web Technology, Section: A, Group: 3
              </td>
            </tr>
          </table>
     </body>
</html>
