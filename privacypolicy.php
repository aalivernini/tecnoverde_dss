<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Privacy Policy - Progetto Tecnoverde</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- STILE CSS   -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/table-style.css" />

    <!-- FAVICON  -->
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-/Z1/7D2mJ6zHn6+mZYm6Y5UJF5o6nKlOF1wG+AsihgQDQGG1Edz+Bpi6UugY6U5fyBXMFrM0iKBA6v0AsBglWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-ZNTTtTq3A/IuSvS8J7kPzNSHn0Fp1ggDvLRXhW2thtak1ie7AxnZgJ28mODWtRzR7bJTKtO4l7nlYXRYTzT7Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #2E8B57;
            color: #FFFFFF;
            padding: 10px;
        }

        h1 {
            margin: 0;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            margin-top: 30px;
        }



        nav {
            background-color: #7ab634;
            color: #fff;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        nav img {
            height: 5em;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
        }

        .nav-logo a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 24px;
        }

        .nav-toggle {
            display: none;
            cursor: pointer;
            padding: 10px;
            position: relative;
            z-index: 1;
        }

        .nav-toggle span {
            display: block;
            background-color: #fff;
            height: 2px;
            width: 25px;
            margin-bottom: 5px;
            position: relative;
            transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
        }

        .nav-menu {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            list-style: none;
        }

        .nav-menu li {
            margin-right: 20px;
        }

        .nav-menu a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        @media screen and (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                background-color: #8BC34A;
                width: 100%;
                padding: 10px;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .nav-menu li {
                margin: 10px 0;
            }

            .nav-toggle {
                display: block;
            }

            .nav-toggle span:first-child {
                transform: translateY(-5px);
            }

            .nav-toggle span:last-child {
                transform: translateY(5px);
            }

            .nav-toggle.open span:first-child {
                transform: translateY(0) rotate(45deg);
            }

            .nav-toggle.open span:last-child {
                transform: translateY(0) rotate(-45deg);
            }

            .nav-toggle.open span:nth-child(2) {
                opacity: 0;
            }
        }



        .login {
            /* display: none; */
            overflow: hidden;
            background-color: white;
            padding: 40px 30px 30px 30px;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            border: 1px solid black;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: -webkit-transform 300ms, box-shadow 300ms;
            -moz-transition: -moz-transform 300ms, box-shadow 300ms;
            transition: transform 300ms, box-shadow 300ms;
            box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
            z-index: 999;
        }

        .login::before,
        .login::after {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border-top-left-radius: 40%;
            border-top-right-radius: 45%;
            border-bottom-left-radius: 35%;
            border-bottom-right-radius: 40%;
            z-index: -1;
        }

        .login::before {
            left: 40%;
            bottom: -130%;
            background-color: rgba(69, 105, 144, 0.15);
            -webkit-animation: wawes 6s infinite linear;
            -moz-animation: wawes 6s infinite linear;
            animation: wawes 6s infinite linear;
        }

        .login::after {
            left: 35%;
            bottom: -125%;
            background-color: rgba(2, 128, 144, 0.2);
            -webkit-animation: wawes 7s infinite;
            -moz-animation: wawes 7s infinite;
            animation: wawes 7s infinite;
        }

        .login>input {
            /* font-family: "Asap", sans-serif; */
            display: block;
            border-radius: 5px;
            font-size: 16px;
            background: white;
            width: 100%;
            border: 0;
            padding: 10px 10px;
            margin: 15px -10px;
        }

        .login>.btn-login {
            /* font-family: "Asap", sans-serif; */
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            width: 80px;
            border: 0;
            padding: 10px 0;
            margin-top: 10px;
            margin-left: -5px;
            border-radius: 5px;
            background-color: #f45b69;
            -webkit-transition: background-color 300ms;
            -moz-transition: background-color 300ms;
            transition: background-color 300ms;
        }

        .login>.btn-login:hover {
            background-color: #f24353;
        }

        @-webkit-keyframes wawes {
            from {
                -webkit-transform: rotate(0);
            }

            to {
                -webkit-transform: rotate(360deg);
            }
        }

        @-moz-keyframes wawes {
            from {
                -moz-transform: rotate(0);
            }

            to {
                -moz-transform: rotate(360deg);
            }
        }

        @keyframes wawes {
            from {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
            }

            to {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }



        .close-button:hover {
            color: red;
        }

        .close-button {
            cursor: pointer;
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
        }

        .welcome {
            font-weight: bold;
            color: darkgreen;
        }
    </style>
</head>

<body>
    <?php
    include "newnav.php";
    ?>
    <div class='header'>
        <h1>Privacy Policy</h1>
    </div>
    <main>
        <a href="index.php">Torna Indietro</a>
        <h2>Introduzione</h2>
        <p>Questa Privacy Policy descrive come Progetto Tecnoverde raccoglie, utilizza e protegge le informazioni personali degli utenti del nostro sito web.</p>
        <h2>Raccolta delle informazioni personali</h2>
        <p>Raccogliamo informazioni personali come nome, cognome, indirizzo email e informazioni di contatto quando l'utente ci fornisce tali informazioni tramite il nostro sito web o in altri modi di comunicazione.</p>
        <h2>Utilizzo delle informazioni personali</h2>
        <p>Le informazioni personali raccolte vengono utilizzate per rispondere alle richieste degli utenti, per migliorare i nostri servizi e per inviare comunicazioni commerciali se l'utente ha fornito il consenso esplicito.</p>
        <h2>Condivisione delle informazioni personali</h2>
        <p>Non condividiamo le informazioni personali degli utenti con terze parti, a meno che non sia richiesto dalla legge o necessario per proteggere i nostri diritti.</p>
        <h2>Protezione delle informazioni personali</h2>
        <p>Adottiamo misure di sicurezza tecniche e organizzative per proteggere le informazioni personali degli utenti da accessi non autorizzati e da perdite, usi o divulgazioni non autorizzati.</p>
        <h2>Modifiche alla Privacy Policy</h2>
        <p>Ci riserviamo il diritto di apportare modifiche a questa Privacy Policy in qualsiasi momento. Le modifiche saranno pubblicate sul nostro sito web e saranno efficaci dalla data di pubblicazione.</p>
    </main>
</body>

</html>