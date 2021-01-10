<?php 

if(!empty($_GET["id"])){
    $id = $_GET["id"];


    require_once("connection.php");
    $query = "delete from photos where id = $id";
    $rslt = mysqli_query($connect , $query);
    mysqli_close($connect);
    header("location:myphotos.php?msg=deleted");
    }else {
        
        header("location:myphotos.php?msg=no_delet");
    }
?>