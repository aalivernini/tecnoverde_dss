<?php

// Connessione al database
include '../../includes/conn.php';


// Esecuzione della query per selezionare tutti i record di una colonna di una tabella
$nome_tabella = "statistiche_ricerca";
$nome_colonna = "valori";
$sql = "SELECT " . $nome_colonna . " FROM " . $nome_tabella;
$result = mysqli_query($conn, $sql);

// Creazione dell'array associativo e conversione in JSON
$dati = array();
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    $dati[] = $row;
}
$dati_json = json_encode($dati);

// Chiusura della connessione al database
mysqli_close($conn);

// Restituzione del JSON alla richiesta AJAX
echo $dati_json;
