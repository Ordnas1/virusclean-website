<?php
    //Variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cellphone = $_POST['cellphone'];
    $comments = $_POST['comments'];

    //Email data de envio
    $email_from = 'sandromarcelo.peirano@gmail.com';
    $email_subject = 'Nuevo formulario enviado';
    $email_body = "Ha recibido un nuevo mensaje.\n" .
                    "Nombres: $fname\n".
                    "Apellidos: $lname\n". 
                    "Correo: $email\n". 
                    "Teléfono: $cellphone\n". 
                    "Mensaje:\n $comments";

    // Envio de email
    $to = 'sandromarcelo.peirano@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to $email \r\n";

    mail($to, $email_subject, $email_body, $headers)

?>