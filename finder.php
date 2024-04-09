<?php


if (isset($_POST['submit'])) {

    include 'includes/conn.php';

    session_start();

    $clima = $_POST['clima'];
    $tipologia_suolo = $_POST['tipologia_suolo'];

    $_SESSION['clima'] = $clima;
    $_SESSION['tipologia_suolo'] = $tipologia_suolo;


    if ($clima != "" && $tipologia_suolo == "") {
        // solo clima 
        include 'includes/clima.php';
    }


    if ($tipologia_suolo != "" && $clima == "") {
        // solo suolo 
        include 'includes/suolo.php';
    }

    if ($tipologia_suolo != "" && $clima != "") {
        // clima e suolo 
        include 'includes/clima-suolo.php';
    }
} else {
    header("location: index.php");
}
