<?php
    $servername = 'localhost:3307';
    $user = 'root';
    $pw = '';
    $db = 'sfw';

    $con = new mysqli($servername, $user, $pw, $db);

    if ($con->connect_error) {
        die('No Server Connection'.$con->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $nachricht = $_POST['nachricht'];

    $sql = "INSERT INTO Anfragen (Name, EmailAdresse, Nachricht) VALUES (?, ?, ?)";

    if ($con->query($sql) === TRUE) {
        echo 'Nachricht wurde gesendet.';
    }else {
        echo 'Die Nachricht konnte nicht verschickt werden' . $con->error;
    }

    $con->close();
?>