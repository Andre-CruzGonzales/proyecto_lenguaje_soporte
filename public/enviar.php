<?php
    $destino= "71729475@certus.edu.pe";
    $nombres = $_POST["Nombres"];
    $apellidos = $_POST["Apellidos"];
    $benificencia = $_POST["Beneficencia"];
    $Monto = $_POST["Monto"];
    $RUC = $_POST["RUC"];
    $Mensaje = $_POST["Mensaje"];
    $contenido = "Nombre: " . $nombres . "\nApellidos: " . $apellidos . "\nBeneficencia: " . $benificencia . "\nMonto: " . $Monto . "\nRUC: " . $RUC . "\nMensaje: " . $Mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html");
?>
         