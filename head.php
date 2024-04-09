<?php
include 'includes/conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- STILE CSS   -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/table-style.css" />
    <!-- <link rel="stylesheet" href="css/nav.css" /> -->


    <!-- FAVICON  -->
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-/Z1/7D2mJ6zHn6+mZYm6Y5UJF5o6nKlOF1wG+AsihgQDQGG1Edz+Bpi6UugY6U5fyBXMFrM0iKBA6v0AsBglWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-ZNTTtTq3A/IuSvS8J7kPzNSHn0Fp1ggDvLRXhW2thtak1ie7AxnZgJ28mODWtRzR7bJTKtO4l7nlYXRYTzT7Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Decision Support System</title>
</head>


<style>
    .container_jumbo {
        width: 100%;
        height: 100%;
        position: relative;

        background-image: url("assets/background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        opacity: 0.9;
    }


    .selected-filter ul {
        list-style-type: none;
        display: flex;

    }

    .selected-filter ul li {
        padding: 3px 5px;
        border: 1px solid black;
        width: 200px;
        border-radius: 5px;
        background: lightgray;
        margin-right: 3px;
        position: relative;
    }

    .selected-filter ul li span {
        margin-left: 7px;
        cursor: pointer;
        color: black;
        position: absolute;
        display: block;
        width: 2px;
        height: 8px;
        top: 0px;
        /* border-bottom: 8px solid #99a3ba; */
        /* transition: 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955); */
        right: 12px;
        color: darkred;

    }



    .selected-filter ul li span:hover {
        color: red;
        scale: 1.05;
    }

    .other_select {
        /* display: grid; */
        grid-template-columns: auto auto auto auto;
        grid-template-rows: auto auto auto auto;
        column-gap: 0px;
        row-gap: 15px;
        display: none;
    }

    #warning-msg {
        display: none;
        background-color: yellow;
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }


    #myTable {
        display: none;
        border-collapse: collapse;
        margin-top: 20px;
    }

    #myTable th,
    #myTable td {
        border: 1px solid #ccc;
        padding: 8px;
        text-transform: uppercase;
        white-space: nowrap;
    }

    #myTable th {
        color: white;
        background-color: darkred !important;
        font-weight: bold;
        text-align: center;
    }

    .divTable {
        background-color: lightyellow;
        padding: 25px 20px;
    }



    .icon-info {
        display: inline-block;
        position: relative;
        margin-left: 10px;
    }

    .icon-info i {
        font-size: 18px;
        color: #cac6c6;
        cursor: pointer;

    }

    .icon-info .popup {
        display: none;
        position: absolute;
        top: 30px;
        right: 0;
        width: 200px;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 9999;
    }



    .icon-info .info-tooltip {

        width: 300px;
        display: inline-block;
        position: absolute;
        top: 0;
        right: 100%;
        margin-right: 10px;
        padding: 5px;
        background-color: #2d7844;
        color: #fff;
        border-radius: 3px;
        z-index: 9999;
        display: none;
    }

    .intro-text {
        width: 80%;
        z-index: 100;
        opacity: 1;
        left: 10%;
        top: 40px;
        text-align: center;
        font-weight: bold;
        font-size: 20px;
    }

    #cookie-popup {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background-color: #1e7e34;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        z-index: 999;
        color: white;
        font-size: 20px;

    }

    #cookie-popup p {
        margin: 0 0 10px;
    }

    #cookie-accept {
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #cookie-accept:hover {
        background-color: #0062cc;
    }

    /* --------------- */

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

<body id="body">