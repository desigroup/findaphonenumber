<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');

        body{
            
            background-repeat: no-repeat;
            background-size: 100%;
            color: black;
            font-family: Montserrat;
        }
        .user-input-wrp {
	position: relative;
	width: 50%;
}
.user-input-wrp .inputText{
	width: 100%;
  height: 25px;
	outline: none;
	border:none;
	border-bottom: 1px solid #777;
 	box-shadow: none !important;
    background-color: white;
    color: black;
}
.user-input-wrp .inputText:focus{
	border-color: blue;
	border-width: medium medium 2px;
    
}
.user-input-wrp .floating-label {
	position: absolute;
	pointer-events: none;
	top: 18px;
	left: 10px;
	transition: 0.2s ease all;
    
}
.user-input-wrp input:focus ~ .floating-label,
.user-input-wrp input:not(:focus):valid ~ .floating-label{
	top: 0px;
	left: 10px;
	font-size: 13px;
	opacity: 1;
}

select{
    background-color:white;
    font-weight: bold;
}
button{
    background-color:white;
    font-weight: bold;
}
.navbar{
  color: black;

}
    </style>
</head>
<script>
     var x=window.prompt("ENTER ADMIN CREDENTIALS")
      if (x==="admin"){
        x=0;
      } else {
        alert("INCORRECT.")
        window.location.href="forbid.html"
      }
    </script>
<body>

<div class="container">
  <h3><b>Submit a Phone Number (Nurses)</b></h3>
  
  <ul class="nav nav-pills">
    
    <li><a data-toggle="pill" href="#icu"><h3 class="navbar">ICU<h3></a></li>
    <li><a data-toggle="pill" href="#pcu"><h3 class="navbar">PCU</h3></a></li>
    <li><a data-toggle="pill" href="#medsurge"><h3 class="navbar">MedSurg</h3></a></li>
    <li><a data-toggle="pill" href="#surgicalfloor"><h3 class="navbar">Surgical Floor</h3></a></li>
    <li><a data-toggle="pill" href="#er"><h3 class="navbar">ER</h3></a></li>
  </ul>
  
  <div class="tab-content">
    
    <div id="icu" class="tab-pane fade">
      <h3>ICU</h3>
      <form action="nursetest.php" method="POST">
            <!--Here is my first input, this is name-->
            <div class="user-input-wrp">
  <br/>
  <input type="text" class="inputText" name="docname" required/>
  <span class="floating-label"><b>Name</b></span>
</div>
        <br>
        <br>
        <!--Here is my second input, this is email-->
        
        
        <div class="user-input-wrp">
  <br/>
  <input type="name" class="inputText" name="numbers" required/>
  <span class="floating-label"><b>Phone Number</b></span>
</div>
<br>
<br>


    <select name="room1">
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>

    <select name="room2">
          <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>
    
    <select name="room3">
    <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>

    <select name="room4">
    <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>

    <select name="room5">
    <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>
    
    <select name="room6">
    <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>
          
    <select name="room7">
    <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>
          
    <select name="room8">
    <option value="na">----</option>
          <option value="1101">1101</option>
          <option value="1102">1102</option>
          <option value="1103">1103</option>
          <option value="1104">1104</option>
          <option value="1105">1105</option>
          <option value="1106">1106</option>
          <option value="1107">1107</option>
          <option value="1108">1108</option>
          
          </select>
          
        <br>
        <button name="submit">Add Number (ICU)</button>
        
        <br> 
        <br>
        
        
</form>
    
    </div>
    <div id="pcu" class="tab-pane fade">
     
     <?php include('nurse/pcu.inc.php'); ?>
    </div>
    <div id="medsurge" class="tab-pane fade">
      <h3>MedSurg</h3>
     <?php include('nurse/medsurg.inc.php'); ?>
    </div>
    <div id="surgicalfloor" class="tab-pane fade">
      <h3>Surgical Floor</h3>
     <?php include('nurse/surgicalfloor.inc.php');?>
    </div>
    <div id="er" class="tab-pane fade">
      <h3>ER</h3>
      <?php include('nurse/er.inc.php'); ?>
    </div>
  </div>
</div>

</body>
<?php
//Step1
if(isset($_POST['submit'])) {
    $docname=$_POST['docname'];
    
    $numbers=$_POST['numbers'];
    $room1=$_POST['room1'];
    $room2=$_POST['room2'];
    $room3=$_POST['room3'];
    $room4=$_POST['room4'];
    $room5=$_POST['room5'];
    $room6=$_POST['room6'];
    $room7=$_POST['room7'];
    $room8=$_POST['room8'];
   

 $db = mysqli_connect('localhost','root','','nursedata');
 $query = "INSERT into icu (docname, numbers, room1, room2, room3, room4, room5, room6, room7, room8) VALUES ('$docname', '$numbers', '$room1', '$room2', '$room3', '$room4','$room5','$room6','$room7','$room8');";

mysqli_query($db, $query);


}
?>

</html>
