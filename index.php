<?php
    $servername = 'localhost:3307'; // Servername
    $user = 'root'; // Serveruser
    $pw = ''; // Serverpasswort
    $db = 'sfw'; // Serverdatabase


    $con = new mysqli($servername, $user, $pw, $db);

    if ($con->connect_error) {
        die('No Server Connection'.$con->connect_error);
    } 


        $name = $_POST["name"];
        $email = $_POST["email"];
        $nachricht = $_POST["nachricht"];

    
    $query = "INSERT INTO Anfragen (Name, EmailAdresse, Nachricht) VALUES ('$name', '$email', '$nachricht')";


    if ($con->query($query) === TRUE) {
        echo 'Nachricht wurde gesendet.';
    }else {
        echo 'Die Nachricht konnte nicht verschickt werden' . $con->error;
    }

    $con->close();
?>