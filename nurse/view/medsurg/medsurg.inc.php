<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('http://fonts.cdnfonts.com/css/segoe-ui-4');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        html {
            cursor: url('assets/pleasework.png'), auto;
            height:100%;
        }
    
        body {
        font-family: 'Montserrat';
        transition: .25s ease-in-out;
}

.controller {
  text-align: center;
  color: rgba(0, 0, 0, 0.9);
  min-width: 100px;
  padding: 10px 15px 8px 15px;
  position: absolute;
  font-size: 22px;
  border: solid 3px rgba(0, 0, 0, 0.9);
  text-transform: uppercase;
  top: 50%;
  left: 50%;
  margin: -22px 0 0 -68px;
  cursor: pointer;
  transition: .25s ease-in-out;
  z-index:500;
}

/*Ripple*/
.ripple {
  width: 10px;
  height: 10px;
  opacity: 0;
  transform: scale(0);
  background: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  position: fixed;
}

/*Bright Ripple*/
body.dark {
  background: rgba(0, 0, 0, 0.9);
}
body.dark .ripple {
  background: rgba(255, 255, 255, 0.5);
}
body.dark .controller {
  color: rgba(255, 255, 255, 0.9);
  border-color: rgba(255, 255, 255, 0.9);
}

/*Animate Function*/
.animate {
  animation: ripple-mo 1s cubic-bezier(0, 0, 0.2, 1);
}
@keyframes ripple-mo {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  100% {
    transform: scale(10);
    opacity: 0;
  }
}
table, th, td {
  border:1px solid black;

}

th{

  text-align: center;
}

th,td{
 font-family: Montserrat;
 font-weight: bold;
}

#main-field{
  text-align: center;
}
    </style>
</head>
<body>
<div class="ripple"></div>

    <?php




 $db = mysqli_connect('localhost','root','','nursedata');
 $query="select * from medsurg"; 
 $result=mysqli_query($db, $query); 


    ?>
    <br>
    <br>
    <h2 id="main-field">MedSurg</h2>
    <br>
    <br>

    <table class="table table-striped table-hover">
    <tr>
    <th style='color:red;'>  <b>NAME</b></th>
      <th style='color:red;'>  <?php echo "<b>PHONE NUMBER </b>"; ?></th>
      
      <th style='color:red;'>  <?php echo "Room1"; ?> </th>
      <th style='color:red;'>  <?php echo "Room2"; ?> </th>
      <th style='color:red;'>  <?php echo "Room3"; ?> </th>
      <th style='color:red;'>  <?php echo "Room4"; ?> </th>
      <th style='color:red;'>  <?php echo "Room5"; ?> </th>
      <th style='color:red;'>  <?php echo "Room6"; ?> </th>
      <th style='color:red;'>  <?php echo "Room7"; ?> </th>
      <th style='color:red;'>  <?php echo "Room8"; ?> </th>

    </tr>
    <?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
   
    <tr>

    <td> <input type="checkbox">&nbsp; &nbsp;  &nbsp; &nbsp; <?php echo $rows['docname']; ?></td>
       <td style='text-align: center;' ><?php echo $rows['numbers']; ?></td> 
        
		 
    
    <td style='text-align: center;'> <?php echo $rows['room1']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room2']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room3']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room4']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room5']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room6']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room7']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room8']; ?></td>
		
    </tr>

		
	<?php 
               } 
          ?> 
</table>
<br>
<br>
<br>
<br>

        <script>
                //Ripple Event Handler
var drawRipple = function(ev) {
  var x = ev.clientX;
  var y = ev.clientY;
  var node = document.querySelector(".ripple");
  var newNode = node.cloneNode(true);
  newNode.classList.add("animate");
  newNode.style.left = ev.clientX - 5 + "px";
  newNode.style.top = ev.clientY - 5 + "px";
  node.parentNode.replaceChild(newNode, node);
};

//Ripple Triggers
window.addEventListener("click", drawRipple);


//Control Handler
var controlHandler = function() {
  document.body.classList.toggle("dark");
  if (document.body.classList.contains("dark")) {
    controller.textContent = "Dark Ripple";
  } else {
    controller.textContent = "Bright Ripple";
  }
};

// Control Trigger
var controller = document.querySelector(".controller");
controller.addEventListener("click", controlHandler);

        </script>
      
</body>
</html>