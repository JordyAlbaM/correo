<?php
if (isset($_POST['']))
{
    if (!empty($_POST['name']) && !empty($_POST['correo']) && !empty ($_POST['msj'])) {
        $number = $_POST['number'];
        $correo = $_POST['correo'];
        $msj = $_POST['msj'];


        $header = "From: jordyalba959@gmail.com" . "\r\n";
        $header.= "Reply-To: jordyalba959@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($number,$correo,$msj,$header);
        if ($mail)
            echo "<h4> ¡Mail enviado correctamente! <h4> ";
    }
}
