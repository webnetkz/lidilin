<?php

    require_once 'connect.php';


    if(!empty($_POST['nameUser']) && !empty($_POST['textUser'])) {
        $name = htmlspecialchars($_POST['nameUser']);
        $text = htmlspecialchars($_POST['textUser']);
        $date = date('d.m.Y');

        $sql = 'INSERT INTO review(`nameU`, `textU`, `dateU`)VALUES ("'.$name.'", "'.$text.'", "'.$date.'")';
        $res = $pdo->query($sql);
    }
header("Location: ../lechenie.php");