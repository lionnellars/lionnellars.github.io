<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lionnellars</title>
</head>
<body>
    <?php
    $to = "emirh66@gmail.com";
    $subject = "Your TUM SOM order has been received!";

    $message = file_get_contents("tumsom.html");

    $header = "From:fachschaft@tum-som.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail ($to,$subject,$message,$header);

    if( $retval == true ) {
        echo "Message sent successfully...";
    }else {
        echo "Message could not be sent...";
    }
    ?>
</body>
</html>