<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conn.php';

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);


    // Sanitizzazione dei valori
    $valoriSanificati = implode(',', array_map('htmlspecialchars', $data['valoriSelezionati']));

    $n_valori = count($data['valoriSelezionati']);



    if ($n_valori === 0) {
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Nessun valore selezionato']);
        exit;
    }

    $sql = "INSERT INTO statistiche_ricerca (valori, lung_valori) VALUES ('$valoriSanificati', $n_valori)";

    if (!mysqli_query($conn, $sql)) {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Errore nella query: ' . mysqli_error($conn)]);
        exit;
    }

    mysqli_close($conn);

    echo json_encode(['success' => true]);
    exit;
}
