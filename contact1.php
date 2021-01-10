<?php
    $to = 'kampawbas@gmail.com';
    $toName = "Moustafa photography";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];




    $headers = 'Subject : '. $subject . "\r\n";
    $headers .= "From : " . $name . "\r\n"; // Sender's E-mail
    $headers .= "E-mail : " . $name . "\r\n"; 
    $headers .= 'this message from your website ' . "\r\n" . $message;

    $body ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$email.'</td>
        </tr>
        <tr><td>Name: '.$name.'</td></tr>
        <tr><td>Messege: '.$message.'</td></tr>       
    </table>';

    // if (@mail($to, $email, $message, $headers))
    // {
    //     echo 'The message has been sent.';
    // }else{
    //     echo 'failed' ;
    // }
    


            require_once("connection.php");    
            require_once("send_mail.php");   
            send_email($email , $name , $to , $toName , $subject , $headers ); 
            header("location:index.php#contact?msg=sent");
?>