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
 $query = "INSERT into er (docname, numbers, room1, room2, room3, room4, room5, room6, room7, room8) VALUES ('$docname', '$numbers', '$room1', '$room2', '$room3', '$room4','$room5','$room6','$room7','$room8');";

mysqli_query($db, $query);
header("Location: http://localhost/combinednumbers/nurses.php");


}
?>