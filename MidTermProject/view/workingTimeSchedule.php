<?php
//include "../controller/workingTimeScheduleCheck.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Time</title>
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
    <div style = "background-color: tomato" class="welcome">

    <center style="color:white">
      <h2>Working Schedule</h2>
    </center>
    </div>
   <div class="">
     <button id="load">Click to see this months schedule!</button>
     <button id="load1">Click to see next months schedule!</button>
   </div>
   <h2>Current months schedule</h2>
   <div id="main">

   </div>
   <h2>Next months schedule</h2>
   <div id="main2">

   </div>
   <div class="header">

   <table class="bottom" border="0" width="100%" height="50px">
     <tr>
       <td colspan="2" align="center">
         Copyright ~ Web Technology, Section: A, Group: 3
       </td>
     </tr>
   </table>
   </div>
   <script src="../jquery/jquery.js"></script>
   <script>
     $(document).ready(function(){
       $("#load").on("click",function(e){
         $.ajax({
           url:"../controller/workingTimeScheduleCheck.php",
           type:"POST",
           success:function(info){
             $("#main").html(info);
           }
         });
       });
     });

     $(document).ready(function(){
       $("#load1").on("click",function(f){
         $.ajax({
           url:"../controller/upcomingWorkingScheduleCheck.php",
           type:"POST",
           success:function(info){
             $("#main2").html(info);
           }
         });
       });
     });

   </script>
  </body>
  </html>
