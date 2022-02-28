<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');

        body{
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            color: white;
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
#home{
           background-color: white;
           border: white;

       }
       #home:hover{
           cursor: pointer;
       }


    </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
    <!-- <script>
     var x=window.prompt("ENTER ADMIN CREDENTIALS")
      if (x==="admin"){
        x=0;
      } else {
        alert("INCORRECT.")
        window.location.href="forbid.html"
      }
    </script> -->
</head>
<body>
  <br>
  <br>
&nbsp; &nbsp; <button id="home" onclick="window.loctation.href='mainpage.html'"><img src="ico.webp" height="45px"></button>
<div id="myModal"  data-backdrop="static"   class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign in</h5>

            </div>
            <div class="modal-body">
				<p>Type the admin credentials</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Password">
                    </div>

                    <button type="button" class="close" data-dismiss="modal" onclick="logmein()">Login</button>

                </form>

            </div>
        </div>
    </div>
</div>
<br>
<br>


    <h1 align="center">Submit a Phone Number/Pager Number</h1>
    <div class="register-form" align="center">
    <form action="submit.php" method="POST">
            <!--Here is my first input, this is name-->
            <div class="user-input-wrp">
  <br/>
  <input type="text" class="inputText" name="docname" required/>
  <span class="floating-label">First Name</span>
</div>
<br>
<br>
<div class="user-input-wrp">
<br/>
<input type="text" class="inputText" name="lastname" required/>
<span class="floating-label">Last Name</span>
</div>
<br>
<br>


        <!--Here is my second input, this is email-->


        <div class="user-input-wrp">
  <br/>
  <input type="name" class="inputText" name="numbers" required/>
  <span class="floating-label">Phone Number</span>
</div>
<br>
<br>
<div class="user-input-wrp">
  <br/>
  <input type="text" class="inputText" name="randomid" required/>
  <span class="floating-label">Pager Number</span>
</div>
<br>
<br>

    <select name="field">
          <option value="anesthesia">Anesthesia</option>
          <option value="bloodbank">Bloodbank</option>
          <option value="cardiology">Cardiology</option>
          <option value="case_management">Case Management</option>
          <option value="er">Emergency Room</option>
          <option value="hemonc">Hematology/Oncology</option>
          <option value="hospitalist">Hospitalist</option>
          <option value="housesupervisor">House Supervisor</option>
          <option value="infectious_disease">Infectious Disease</option>
          <option value="interventional_radiology">Interventional Radiology</option>
          <option value="labs">Labs</option>
          <option value="nephrology">Nephrology</option>
          <option value="neurosurgery">Neurosurgery</option>
          <option value="neurology">Neurology</option>
          <option value="obgyn">Obstetrics and Gynaecology (OB-GYN)</option>
          <option value="ophthalmolgy">Opthamology</option>
          <option value="orthopedic">Orthopedic</option>
          <option value="pathology">Pathology</option>
          <option value="pediatrics">Pediatrics</option>
          <option value="pharmacy">Pharmacy</option>
          <option value="picc">PICC Line</option>
          <option value="podiatrist">Podiatrist</option>
          <option value="pulmonary">Pulmonary</option>
          <option value="radiation_oncology">Radiation Oncology</option>
          <option value="radiology">Radiology</option>
          <option value="surgery">Surgery</option>
          <option value="transferline">Transfer Line</option>
          <option value="urology">Urology</option>
          </select>

        <br>
        <br>
        <button name="submit">Add Number</button>
        <br>
        <br>
        <h3>To add a nurse's number, click <a href="nurses.php">here</a></h3>
        <br>
        <br>


</form>
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
<?php
//Step1

if(isset($_POST['submit'])) {
    $docname=$_POST['docname'];
    $randomid=$_POST['randomid'];
    $numbers=$_POST['numbers'];
    $field=$_POST['field'];
    $lastname=$_POST['lastname'];

 $db = mysqli_connect('localhost','root','','docphonenumbers');
 $query = "INSERT into numsfornums (docname, numbers, field, randomid, lastname) VALUES ('$docname', '$numbers', '$field', '$randomid', '$lastname');";

mysqli_query($db, $query);
// header("Location: http://localhost/combinednumbers/view/$field.php" );

}
?>
