<?php 
session_start();
if(!empty($_POST["id"])){

    $id = $_POST["id"];
    $old_logo =$_SESSION["data"]["photo"]; 
    
    if (!empty($_FILES["new_logo"]["tmp_name"])) {

        $text = "abcdefghijklmniqrstwuyz123456789v_";
        $text = substr(str_shuffle($text), 1, 10);

        $new_logo = "assets/img/" . date("YmdHis") . $text . "." . pathinfo($_FILES["new_logo"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["new_logo"]["tmp_name"], $new_logo);
        unlink($old_logo);
        $qry = "update photos set photo = '$new_logo' where id =$id";
        
        require("connection.php");    
        $rslt = mysqli_query($connect , $qry);
        mysqli_close($connect);
        header("location:myphotos.php?msg=updated");
    }else {
        header("location:myphotos.php?msg=error");
    }

}
    
    ?>