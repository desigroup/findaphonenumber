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
#home{
           background-color: white;
           border: white;

       }
       #home:hover{
           cursor: pointer;
       }
      
    </style>
</head>
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

&nbsp; &nbsp; <button id="home" onclick="window.location.href='mainpage.html'"><img src="ico.webp" height="45px"></button>
    <Br>
    <br>
    <center>
    <b><h1>View Nurse Number</h1></b>
    </center>
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
  <div class="tab-pane fade show active" id="icu" role="tabpanel" aria-labelledby="home-tab"><?php include('nurse/view/icu/icu.inc.php')?></div>
  <div class="tab-pane fade" id="pcu" role="tabpanel" aria-labelledby="profile-tab"><?php include('nurse/view/pcu/pcu.inc.php');?></div>
  <div class="tab-pane fade" id="medsurg" role="tabpanel" aria-labelledby="contact-tab"><?php include('nurse/view/medsurg/medsurg.inc.php');?></div>
  <div class="tab-pane fade" id="surgicalfloor" role="tabpanel" aria-labelledby="contact-tab"><?php include('nurse/view/surgicalfloor/surgicalfloor.inc.php');?> </div>
  <div class="tab-pane fade" id="er" role="tabpanel" aria-labelledby="contact-tab"><?php include('nurse/view/er/er.inc.php')?> </div>
</div>
</body>
</html>