<?php
include 'component/sidebar.php';
include '../includes/conn.php';

session_start();

$username = $_SESSION['username'];
$password = $_SESSION['pwd'];
$authQuery = "select username, password from users where username = '$username' and password = '$password'";
$authResult = mysqli_query($conn, $authQuery);


if (mysqli_num_rows($authResult) === 1) {

?>
    <script>
        // Rimuovi la classe "active" dall'elemento con id "primo-elemento"
        // document.getElementById("dasboard").classList.remove("current");

        // Aggiungi la classe "active" all'elemento con id "secondo-elemento"
        document.getElementById("database").classList.add("current");
    </script>

    <main id="pgmain">
        <div class="dashboard-banner">
            <h2>Database</h2>
        </div>

        <div class="content-page">
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="database_db.php">DB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database_create.php">CREA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="database_update.php">AGGIORNA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database_delete.php">ELIMINA</a>
                </li>
            </ul>

            <?php
            $mysqli = new mysqli("localhost", "username", "password", "airtree");
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                exit();
            }



            $table = "lista_specie";
            echo "<div class='table-name' data-table-name='$table'>$table</div>";
            echo "<div class='table-content d-block' id='table-$table'>";
            $result = $mysqli->query("SELECT * FROM $table");
            echo "<table id='table-lista_specie'>";

            echo "<thead><tr>";
            while ($fieldinfo = $result->fetch_field()) {
                echo "<th>" . $fieldinfo->name . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_row()) {


                echo "<tr data-id='" . $row[0] . "'  class='table-row'>";
                $id = $row[0];


                foreach ($row as $index => $data) {
                    if ($fieldinfo = $result->fetch_field_direct($index)) {
                        $column_name = $fieldinfo->name;
                        if ($column_name == "id_specie" && $table != "lista_specie") {
                            $species_query = "SELECT nome_comune FROM lista_specie WHERE id = $data";
                            $species_result = $mysqli->query($species_query);
                            if ($species_row = $species_result->fetch_row()) {
                                $data = strtoupper($species_row[0]);
                            }
                        } elseif ($data == "1" && $column_name != "id") {
                            $data = "<span  style='color:green;'>&#10004;</span>";
                        } elseif ($data == "0" && $column_name != "id") {
                            $data = "<span >&#10060;</span>";
                        }
                    }
                    echo "<td class='text-center'>" . $data . "</td>";
                }
            ?>
                <td class='text-center'> <a href="#" onclick="openPopup(<?php echo $id; ?>)">Aggiorna</a></td>
            <?php
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";

            echo "</div>";



            ?>
            <script>
                function openPopup(id) {
                    // apriamo una finestra pop - up con la pagina per visualizzare i dati
                    window.open("component/popup2.php?id=" + id, "popup", "width=700,height=500");
                    console.log(id)
                }



                const rows = document.querySelectorAll("#table-lista_specie tbody tr");
                rows.forEach(row => {
                    row.addEventListener("click", () => {
                        // Mostra il pop-up per la modifica
                        const popup = document.createElement("div");
                        popup.classList.add("popup");

                        // Aggiungi un campo di input per la modifica
                        const input = document.createElement("input");
                        input.type = "text";
                        input.value = row.cells[1].textContent; // Aggiungi il valore corrente
                        popup.appendChild(input);

                        // Aggiungi un pulsante di conferma
                        const confirmButton = document.createElement("button");
                        confirmButton.textContent = "Conferma";
                        confirmButton.addEventListener("click", () => {
                            // Esegui la modifica sul server tramite AJAX
                            const newValue = input.value;
                            const id = row.cells[0].textContent;
                            const xhr = new XMLHttpRequest();
                            xhr.open("POST", "update_species.php");
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                            xhr.onload = () => {
                                // Aggiorna la riga con il nuovo valore
                                row.cells[1].textContent = newValue;
                                // Chiudi il pop-up
                                popup.remove();
                            };
                            xhr.send(`id=${id}&value=${newValue}`);
                        });
                        popup.appendChild(confirmButton);

                        // Aggiungi un pulsante di annullamento
                        const cancelButton = document.createElement("button");
                        cancelButton.textContent = "Annulla";
                        cancelButton.addEventListener("click", () => {
                            // Chiudi il pop-up senza effettuare alcuna modifica
                            popup.remove();
                        });
                        popup.appendChild(cancelButton);

                        // Aggiungi il pop-up al documento
                        document.body.appendChild(popup);
                    });


                    $('.table-row').on('click', function() {
                        var id = $(this).data('id');

                        $.ajax({
                            url: 'includes/database_update_inc.php',
                            type: 'post',
                            data: {
                                id: id,
                                nome: $('#nome').val(),
                                // inserisci qui tutti i campi che devono essere aggiornati
                            },
                            success: function(data) {
                                // aggiorna la tabella con i nuovi dati
                            }
                        });
                        // apri il popup e invia una richiesta AJAX per recuperare i dati della riga
                    });








                });
            </script>

        <?php
    } else {
        echo "<script>window.location.href = '../index.php'</script>";
    }
        ?>