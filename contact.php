<?php 

session_start();

if (!empty($_POST["name"]) &&  
!empty($_POST["email"]) && 
!empty($_POST["subject"]) 
&& !empty($_POST["message"]) ){

    // filter name 
    $name = $_POST["name"] ;
    $name = strip_tags($name);
    $name = htmlspecialchars($name);

    // filter email
    $email = $_POST["email"] ;
    $email = filter_var($email , FILTER_VALIDATE_EMAIL) ;
    

    
    $subject = $_POST["subject"] ;
    $message = $_POST["message"] ;
    $message_send = true;
    $_SESSION["message_send"]= $message_send;

    header("location:index.php#contact");
    
}else {
    if(empty($_POST["name"])){
        $nameEr = "Name is Important ";
        $nameEr = $_SESSION["nameEr"];
    }
    elseif(empty($_POST["email"])){
        $emailEr = "email is Important ";
        $emailEr = $_SESSION["emailEr"];
    }
    elseif(empty($_POST["subject"])){
        $subjectEr = "subject is Important ";
        $subjectEr = $_SESSION["subjectEr"];
    }
    
    if(empty($_POST["message"])){
        $messageEr = "message is Important ";
        $messageEr = $_SESSION["messageEr"];
    }
    header("location:index.php?msg=error");
}


$to = "kampawbas@gmail.com" ;
$txt = "This Message from Your website " . $message ;
$body = "From :" . $name . "\r\n";
$body .= "E-mail :" . $email . "\r\n";
$body .= "Message is :" . $message . "\r\n";



// if ( mail($to , $subject , $message) ) {
//     // header("location:index.php?msg=sent");
//     echo $body ;
// }else{
//     // header("location:index.php?msg=empty");
// }

?>