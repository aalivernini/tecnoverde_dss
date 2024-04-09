<?php
// Connessione al database
include '../../includes/conn.php';

// Prende i dati dal form e sanitizza i valori


// Se il form è stato inviato, cancella i dati dal database
if (isset($_POST['submit'])) {
    $id = (int)$_POST['id'];

    // Inizio Transaction
    $conn->begin_transaction();


    try {
        // Esecuzione e sanitizzazione delle query parametrizzate


        $sql2 = $conn->prepare("DELETE FROM `categoria` WHERE `categoria`.`id_specie`=?");
        $sql2->bind_param("s", $id);
        $sql2->execute();

        if (!$sql2->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql3 = $conn->prepare("DELETE FROM `strutture_urbane_limistrofe` WHERE `strutture_urbane_limistrofe`.`id_specie`=?");
        $sql3->bind_param("s", $id);
        $sql3->execute();

        if (!$sql3->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql4 = $conn->prepare("DELETE FROM `emissione_bvoc` WHERE `emissione_bvoc`.`id_specie`=?");
        $sql4->bind_param("s", $id);
        $sql4->execute();

        if (!$sql4->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql5 = $conn->prepare("DELETE FROM `gruppo` WHERE `gruppo`.`id_specie`=?");
        $sql5->bind_param("s", $id);
        $sql5->execute();

        if (!$sql5->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql6 = $conn->prepare("DELETE FROM `densità_chioma` WHERE `densità_chioma`.`id_specie`=?");
        $sql6->bind_param("s", $id);
        $sql6->execute();

        if (!$sql6->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql7 = $conn->prepare("DELETE FROM `specie_allergenica` WHERE `specie_allergenica`.`id_specie`=?");
        $sql7->bind_param("s", $id);
        $sql7->execute();

        if (!$sql7->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql8 = $conn->prepare("DELETE FROM `autoctona` WHERE `autoctona`.`id_specie`=?");
        $sql8->bind_param("s", $id);
        $sql8->execute();

        if (!$sql8->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql9 = $conn->prepare("DELETE FROM `manutenzione` WHERE `manutenzione`.`id_specie`=?");
        $sql9->bind_param("s", $id);
        $sql9->execute();

        if (!$sql9->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql10 = $conn->prepare("DELETE FROM `ph` WHERE `ph`.`id_specie`=?");
        $sql10->bind_param("s", $id);
        $sql10->execute();

        if (!$sql10->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql11 = $conn->prepare("DELETE FROM `tipologia` WHERE `tipologia`.`id_specie`=?");
        $sql11->bind_param("s", $id);
        $sql11->execute();

        if (!$sql11->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql12 = $conn->prepare("DELETE FROM `tipologia_suolo` WHERE `tipologia_suolo`.`id_specie`=?");
        $sql12->bind_param("s", $id);
        $sql12->execute();

        if (!$sql12->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql13 = $conn->prepare("DELETE FROM `servizi_ecosistemici` WHERE `servizi_ecosistemici`.`id_specie`=?");
        $sql13->bind_param("s", $id);
        $sql13->execute();

        if (!$sql13->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql14 = $conn->prepare("DELETE FROM `fascia_fitosclimatica` WHERE `fascia_fitosclimatica`.`id_specie`=?");
        $sql14->bind_param("s", $id);
        $sql14->execute();

        if (!$sql14->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql15 = $conn->prepare("DELETE FROM `res_malattie` WHERE `res_malattie`.`id_specie`=?");
        $sql15->bind_param("s", $id);
        $sql15->execute();

        if (!$sql15->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql16 = $conn->prepare("DELETE FROM `apparato_radicale` WHERE `apparato_radicale`.`id_specie`=?");
        $sql16->bind_param("s", $id);
        $sql16->execute();

        if (!$sql16->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql17 = $conn->prepare("DELETE FROM `costo_fornitura` WHERE `costo_fornitura`.`id_specie`=?");
        $sql17->bind_param("s", $id);
        $sql17->execute();

        if (!$sql17->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }


        $sql18 = $conn->prepare("DELETE FROM `portamento` WHERE `portamento`.`id_specie`=?");
        $sql18->bind_param("s", $id);
        $sql18->execute();

        if (!$sql18->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql19 = $conn->prepare("DELETE FROM `res_siccità` WHERE `res_siccità`.`id_specie`=?");
        $sql19->bind_param("s", $id);
        $sql19->execute();

        if (!$sql9->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }


        $sql20 = $conn->prepare("DELETE FROM `maturità_pianta` WHERE `maturità_pianta`.`id_specie`=?");
        $sql20->bind_param("s", $id);
        $sql20->execute();


        if (!$sql20->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }


        $sql21 = $conn->prepare("DELETE FROM `dimensione_foglie` WHERE `dimensione_foglie`.`id_specie`=?");
        $sql21->bind_param("s", $id);
        $sql21->execute();

        if (!$sql21->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql22 = $conn->prepare("DELETE FROM `vel_accrescimento` WHERE `vel_accrescimento`.`id_specie`=?");
        $sql22->bind_param("s", $id);
        $sql22->execute();
        if (!$sql22->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }


        $sql23 = $conn->prepare("DELETE FROM `res_gelate` WHERE `res_gelate`.`id_specie`=?");
        $sql23->bind_param("s", $id);
        $sql23->execute();

        if (!$sql23->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql24 = $conn->prepare("DELETE FROM `ubicazione_urbanistica` WHERE `ubicazione_urbanistica`.`id_specie`=?");
        $sql24->bind_param("s", $id);
        $sql24->execute();

        if (!$sql24->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql25 = $conn->prepare("DELETE FROM `esigenza_fert_suolo` WHERE `esigenza_fert_suolo`.`id_specie`=?");
        $sql25->bind_param("s", $id);
        $sql25->execute();

        if (!$sql25->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql26 = $conn->prepare("DELETE FROM `res_alte_temp` WHERE `res_alte_temp`.`id_specie`=?");
        $sql26->bind_param("s", $id);
        $sql26->execute();

        if (!$sql26->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }

        $sql27 = $conn->prepare("DELETE FROM `persistenza_foglia` WHERE `persistenza_foglia`.`id_specie`=?");
        $sql27->bind_param("s", $id);
        $sql27->execute();

        if (!$sql27->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }


        $sql1 = $conn->prepare("DELETE FROM `lista_specie` WHERE `lista_specie`.`id`=?");
        $sql1->bind_param("s", $id);
        $sql1->execute();

        if (!$sql1->execute()) {
            var_dump(mysqli_error($conn));
            die();
        }



        if (
            !$sql2->execute() && !$sql3->execute() && !$sql4->execute() && !$sql5->execute() && !$sql6->execute() &&
            !$sql7->execute() && !$sql8->execute() && !$sql9->execute() && !$sql10->execute() && !$sql11->execute() && !$sql12->execute() &&
            !$sql13->execute() && !$sql14->execute() && !$sql15->execute() && !$sql16->execute() && !$sql17->execute() && !$sql18->execute() &&
            !$sql19->execute() && !$sql20->execute() && !$sql21->execute() && !$sql22->execute() && !$sql23->execute() && !$sql24->execute() &&
            !$sql25->execute() && !$sql26->execute() && !$sql27->execute() &&  !$sql1->execute()
        ) {

            echo "<script>alert('Record eliminato correttamente.')</script>";
            header("Location: ../database_delete.php");
        } else {
            echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
            echo "<script>alert('Si è verificata un'anomalia durante l'eliminazione.')</script>";
            header("Location: ../database_delete.php");
        }

        // Conferma della transazione
        $conn->commit();
    } catch (Exception $e) {
        // Roll back della transaction in caso di errore
        $conn->rollback();
        echo "Transaction fallita: " . $e->getMessage();
    }
}

// Chiudere connessione al database
mysqli_close($conn);
