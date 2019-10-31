<?php

    $name = htmlspecialchars($_POST["nameInput"]);
    $surname = htmlspecialchars($_POST["surnameInput"]);
    $mail = htmlspecialchars($_POST["mailInput"]);

    $filename = $mail.".txt";
    if (file_exists("participants/$filename")) {
        echo 'Ce login existe déjà, veuillez en saisir un nouveau';
    } else {
        file_put_contents("participants/".$mail.".txt", "Nom : $name\n Prénom : $surname\n Mail: $mail\n");
        echo "Voici vos données saisies : $name, $surname, $mail";

    }

?>