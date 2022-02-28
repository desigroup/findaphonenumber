<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
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
h1{
  font-weight:bold;
  text-align:center;
}
    #home{
           background-color: white;
           border: white;

       }
       #home:hover{
           cursor: pointer;
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
  <br>
&nbsp; &nbsp; <button id="home" onclick="window.location.href='mainpage.html'"><img src="ico.webp" height="45px"></button>
    <Br>
    <br>
    <h1>Add a Number (Nurse)</h1>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#icu" type="button" role="tab" aria-controls="home" aria-selected="true">ICU</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#pcu" type="button" role="tab" aria-controls="profile" aria-selected="false">PCU</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#medsurg" type="button" role="tab" aria-controls="contact" aria-selected="false">MedSurg</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#surgicalfloor" type="button" role="tab" aria-controls="contact" aria-selected="false">Surgical Floor</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#er" type="button" role="tab" aria-controls="contact" aria-selected="false">ER</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="icu" role="tabpanel" aria-labelledby="home-tab">
      <br>
  <h3 align="center">ICU</h3>

  <center>
      <form action="nurses.php" method="POST">
            <!--Here is my first input, this is name-->
            <div class="user-input-wrp">
  <br/>
  <input type="text" class="inputText" name="docname" required/>
  <span class="floating-label"><b>First Name</b></span>
</div>
        <br>
        <br>
        <!--Here is my second input, this is email-->
        <div class="user-input-wrp">
<br/>
<input type="text" class="inputText" name="lastname" required/>
<span class="floating-label"><b>Last Name</b></span>
</div>
<br>
<br>

        <div class="user-input-wrp">
  <br/>
  <input type="name" class="inputText" name="numbers" required/>
  <span class="floating-label"><b>Phone Number</b></span>
</div>
<br>
<br>

<h3>Assign Rooms</h3>
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
        <br>
        <button name="submit">Add Number (ICU)</button>

        <br>
        <br>


</form>
    </center>
  </div>
  <div class="tab-pane fade" id="pcu" role="tabpanel" aria-labelledby="profile-tab"><br><?php include('nurse/pcu.inc.php');?></div>
  <div class="tab-pane fade" id="medsurg" role="tabpanel" aria-labelledby="contact-tab"><?php include('nurse/medsurg.inc.php');?></div>
  <div class="tab-pane fade" id="surgicalfloor" role="tabpanel" aria-labelledby="contact-tab"><?php include('nurse/surgicalfloor.inc.php');?> </div>
  <div class="tab-pane fade" id="er" role="tabpanel" aria-labelledby="contact-tab"><?php include('nurse/er.inc.php')?> </div>
</div>
<?php
//Step1
if(isset($_POST['submit'])) {
    $docname=$_POST['docname'];
    $lastname=$_POST['lastname'];
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
 $query = "INSERT into icu (docname, numbers, room1, room2, room3, room4, room5, room6, room7, room8, lastname) VALUES ('$docname', '$numbers', '$room1', '$room2', '$room3', '$room4','$room5','$room6','$room7','$room8', '$lastname');";

mysqli_query($db, $query);


}
?>
<script>
      function logmein(){
        usr=document.getElementById('name').value;
        pwd=document.getElementById('pwd').value;
        if (usr && pwd === "admin"){
          console.log('welcome')
        } else {
          window.location.href="forbid.html";
        }
      }

    </script>
</body>
</html>
