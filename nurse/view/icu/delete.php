
<?php

require_once('db.php');

if(isset($_GET['lastname'])){
    $id = $_GET['lastname'];

    $sql = "DELETE FROM `icu` WHERE `icu`.`lastname` = '$id'";

    if($con->query($sql) === TRUE){
        header('Location: http://localhost/combinednumbers/nurseview.php');
    }

  }

?>
