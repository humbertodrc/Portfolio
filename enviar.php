<?php 
    // Variables que vienen por formulario
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $mensaje = $_POST['mensaje'];

    // Variables definidas por nosotros
    $asunto = "Mensaje desde la Web";
    $destino = "humbertoriverio9@gmail.com"; // email al que llegarán nuestros mensajes

    // Cuerpo del email
    $contacto = "
        Nombre: $email <br>
        Apellido: $nombre <br>
        Email: $tel <br>
        Mensaje de la Web: $mensaje <br>
    ";

    // Proceso del envío:
    $headers="MIME-Version: 1.0" . "\r\n";
    $headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.='From: '. $email . "\r\n";
    
    mail($destino, $asunto, $contacto, $headers);
    
    // Mensaje de éxito:
    $URL="https://humbertorivero.netlify.app/confirmacion"; // Ubicación de mi archivo html con mi mensaje de confirmación
    echo "<script>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
?>