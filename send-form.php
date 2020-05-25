<?php
    ini_set( 'display_errors', 1 );
    //Variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cellphone = $_POST['cellphone'];
    $comments = $_POST['comments'];

    //Email data de envio
    $email_from = 'ventas@virusclean.pe';
    $email_subject = 'Nuevo formulario enviado';
    $email_body = "Ha recibido un nuevo mensaje.\n" .
                    "Nombres: $fname\n".
                    "Apellidos: $lname\n". 
                    "Correo: $email\n". 
                    "Teléfono: $cellphone\n". 
                    "Mensaje:\n $comments";

    // Envio de email
    $to = 'ventas@virusclean.pe';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to $email \r\n";


    //Revisa injecciones de código
    function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}


  mail($to, $email_subject, $email_body, $headers);
  

?>