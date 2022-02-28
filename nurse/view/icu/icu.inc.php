<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICU View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('http://fonts.cdnfonts.com/css/segoe-ui-4');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        html {

          height:100%;
        }

        body {
        font-family: 'Montserrat';
        transition: .25s ease-in-out;
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
 $query="select * from icu";
 $result=mysqli_query($db, $query);


    ?>
    <br>
    <br>
    <h2 id="main-field">ICU</h2>
    <br>
    <br>

    <table class="table table-striped table-hover">
    <tr>
    <th style='color:red;'>  <b>First Name</b></th>
    <th style='color:red;'>  <?php echo "Last Name"; ?> </th>
      <th style='color:red;'>  <?php echo "<b>PHONE NUMBER </b>"; ?></th>

      <th style='color:red;'>  <?php echo "Room1"; ?> </th>
      <th style='color:red;'>  <?php echo "Room2"; ?> </th>
      <th style='color:red;'>  <?php echo "Room3"; ?> </th>
      <th style='color:red;'>  <?php echo "Room4"; ?> </th>
      <th style='color:red;'>  <?php echo "Room5"; ?> </th>
      <th style='color:red;'>  <?php echo "Room6"; ?> </th>
      <th style='color:red;'>  <?php echo "Room7"; ?> </th>
      <th style='color:red;'>  <?php echo "Room8"; ?> </th>
      <th style='color:red;'>  <?php echo "DELETE"; ?> </th>

    </tr>
    <?php while($rows=mysqli_fetch_assoc($result))
		{
		?>

    <tr>

    <td>  <?php echo $rows['docname']; ?></td>
    <td style='text-align: center;' ><?php echo $rows['lastname']; ?></td>
       <td style='text-align: center;' ><?php echo $rows['numbers']; ?></td>



    <td style='text-align: center;'> <?php echo $rows['room1']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room2']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room3']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room4']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room5']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room6']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room7']; ?></td>
    <td style='text-align: center;'> <?php echo $rows['room8']; ?></td>
    <td style='text-align: center;'><?php echo "<a class='btn btn-danger'><button onclick='check()' id='delete' value=".$rows['lastname']."> Delete</button></a>";?></td>
    </tr>
    <script>

    function check(){
    x=window.prompt("Enter Admin Credentials")
    const data=document.getElementById('delete').value;
    if(x==="admin"){
    console.log(data)
    window.location.href="http://localhost/combinednumbers/nurse/view/icu/delete.php?lastname="+data;
    } else {
    window.location.href='http://localhost/combinednumbers/forbid.html';
    }
    }
    </script>

	<?php
               }
          ?>
</table>
<br>
<br>
<br>
<br>


</body>
</html>
