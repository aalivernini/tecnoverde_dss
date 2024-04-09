<?php

// Verifico se è stato cliccato il pulsante "Aggiorna"
session_start();
include "../../includes/conn.php";
if (isset($_POST['update'])) {

    // Recupero i dati dal form
    $table = $_POST['table'];
    $column = $_POST['column'];
    $value = $_POST['value'];
    $id = (int)$_POST['id'];

    if (strlen($value) === 1) {
        $value = (int)$value;
    }



    // Verifico la struttura della tabella
    $result = $conn->query("DESCRIBE $table");

    // Recupero i nomi dei campi della tabella
    $fields = array();
    while ($row = $result->fetch_assoc()) {
        $fields[] = $row['Field'];
    }
    if (strlen($value) === 1) {
        if (in_array($column, $fields)) {
            // Eseguo l'update del campo modificato
            $query = "UPDATE $table SET $column=$value WHERE id='$id'";


            $conn->query($query);
        }
    } else {
        if (in_array($column, $fields)) {
            // Eseguo l'update del campo modificato
            $query = "UPDATE $table SET $column='$value' WHERE id='$id'";



            $conn->query($query);
        }
    }


    echo "<script>alert('Record modificato correttamente.')</script>";
    header("Location: ../database_update.php");
    // Verifico se il campo modificato esiste nella tabella

}
