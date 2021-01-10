<?php 


if (!empty($_FILES["logo"]["tmp_name"])){

    $picName = $_FILES["logo"]["name"];
    $text = "abcdefghijklmniqrstwuyz123456789v_";
    $text = substr( str_shuffle($text) , 1,10);
    $logo_name ="assets/img/". date("YmdHis").$text . "." . pathinfo($_FILES["logo"]["name"] ,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["logo"]["tmp_name"] ,$logo_name );
   
    $qry = "insert into photos (photo , name ) values('$logo_name' , '$picName')";

    require("connection.php");    
    $rslt = mysqli_query($connect , $qry);
    mysqli_close($connect);
    header("location:index.php?msg=add_ok");
}else {
    header("location:index.php?msg=error");
}


?>