<?php

    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $mail = htmlspecialchars($_POST["mail"]);

    echo 'Données saisies : <br/>';
    foreach($_POST as $key => $value){
        echo $key, " = ", $value, "<br/>";
    }
?>