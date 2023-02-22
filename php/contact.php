<?php
 ini_set( 'display_errors', 1 );
 error_reporting( E_ALL );

   $to="kevinjimenez@giomadero.com";
   $name= $_POST['nameContact'];
   $lastname=$_POST['lastnameContact'];
   $email=$_POST['emailContact'];
   $text=$_POST['textContact'];

    $subject = "Pagina web Curriculum Vitae (CV)";
    $header= 'Desde: ' .$email .' '.'Mensaje: '.$text;
    $fullname="Nombre Completo: ".$name.' '.$lastname;

    mail($to, $subject, $header, $fullname);
    echo "<script>alert('Envió exitoso')</script>";
    echo "<script>setTimeout(\"location.href='https://www.giomadero.com/kevinjimenez'\",1000)</script>";
?>