<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>DSS Management</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/todolist.css">
    <style>
        #pgside {
            display: flex;
            flex-direction: column;

            width: 200px;
            flex-shrink: 0;
            transition: width 0.2s;
            background: #283039;
        }

        .welcome {
            align-self: center;
        }

        .user-details {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 500px;
        }

        .user-details h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .info-row {
            display: flex;
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            width: 100px;
        }

        .info-value {
            flex-grow: 1;
        }

        .profile-box,
        .visit-counter {
            width: 50%;
            /* margin-bottom: 3em; */

        }

        .visit-counter,
        .todo-box {

            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 10px;
            font-size: 18px;
        }

        .visit-counter {
            height: 3em;
            align-self: center;
        }

        .visit-counter #visit-count {
            font-weight: bold;
        }


        .dashboard-banner {
            background-color: #283039;
            color: #FFF;
            padding: 10px;
            text-align: center;
            position: relative;
            margin-bottom: 2em;
        }

        .dashboard-banner::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            margin-left: -10px;
            border-top: 10px solid #283039;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
        }

        .content-page {
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .wrapper {
            max-width: 80%;
            min-height: 300px;
            background: #f2f2f2;
            margin: 4em auto;
            border-radius: 7px;
            padding: 28px 0 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-style: solid;
            border-width: thin;
            border-color: black
        }

        .father-container {
            display: flex;
            width: 100%;
        }

        .close-btn {
            position: absolute;
            top: 70px;
            right: 70px;
            background-color: transparent;
            border: none;
            color: #007bff;
            transition: color 0.3s ease-in-out;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #ff0000;
        }


        /* ------------------- */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .table-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .table-name {
            width: calc(50% - 20px);
            /* margin-bottom: 20px; */
            padding: 10px;
            /* border: 1px solid #ccc; */
            /* cursor: pointer; */
        }

        .table-name:hover {
            background-color: #f5f5f5;
        }

        .table-content {
            /* display: none; */
            width: 100%;
            margin-bottom: 20px;
        }

        .table-content table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-content table th,
        .table-content table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover {
            color: red;
        }

        .myselect {
            writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: fieldtext;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            appearance: auto;
            box-sizing: border-box;
            align-items: center;
            white-space: pre;
            -webkit-rtl-ordering: logical;
            background-color: field;
            cursor: default;
            margin: 0em;
            border-width: 1px;
            border-style: solid;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
            border-image: initial;
            border-radius: 0px;
            border: 1px solid black;
            background-color: #fff;
        }





        /* ------------- */


        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        td button:hover {
            background-color: #d32f2f;
        }

        .current {
            display: block;
        }


        /* Div principale */
        #pgmain {
            padding-top: 2rem;
        }

        /* Banner */
        .dashboard-banner {
            text-align: center;
            margin-bottom: 1rem;
        }

        /* Tabella */
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
        }

        /* Intestazione tabella */
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        /* Contenuto tabella */
        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        /* Righe tabella */
        .table tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        /* Cellule tabella */
        .table tbody td {
            vertical-align: middle;
        }

        .legend {
            padding: 7px;
            border: 2px solid black;
            border-radius: 5px;
            max-width: 9em;
            text-align: center;
        }

        .legend .icon {
            font-size: 1.2em;
            margin-right: 5px;
            color: green;
            /* colore della spunta */
        }

        .legend .icon+span {
            margin-left: 10px;
            color: black;
            /* colore del testo */
        }

        .legend .icon:last-of-type {
            color: red;
            /* colore della croce */
        }


        /* Aggiungi le classi per rendere la pagina responsive */
        @media (max-width: 575.98px) {

            /* Div principale */
            #pgmain {
                padding-top: 1rem;
            }

            /* Tabella */
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 767.98px) {

            /* Tabella */
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 991.98px) {

            /* Tabella */
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1199.98px) {

            /* Tabella */
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
    </style>



</head>

<body>