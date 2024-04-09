<?php
include 'sidebar.php';
include '../../includes/conn.php';


$target_id = $_GET['id'];

// Dichiarazione della query con un segnaposto '?'

// Preparazione della statement
// $stmt = $mysqli->prepare("SELECT * FROM lista_specie WHERE id ='$target_id'");
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();


// $stmt = $mysqli->prepare("SELECT * FROM lista_specie WHERE id = ?");
// $stmt->bind_param("s", $target_id);
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();


// var_dump($row);




?>
<script>
    // Rimuovi la classe "active" dall'elemento con id "primo-elemento"
    document.getElementById("dasboard").classList.remove("current");

    // Aggiungi la classe "active" all'elemento con id "secondo-elemento"
    document.getElementById("database").classList.add("current");
</script>




<main id="pgmain">
    <div class="dashboard-banner">
        <h2>Aggiorna Record</h2>
    </div>

    <div class="content-page">


        <?php
        $mysqli = new mysqli("localhost", "username", "password", "airtree");
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }

        // Get all table names in the database
        $tables = array();
        $result = $mysqli->query("SHOW TABLES");
        while ($row = $result->fetch_row()) {
            $tables[] = $row[0];
        }

        // Display table names and their contents
        foreach ($tables as $table) {
            echo "<div class='table-name' data-table-name='$table'>$table</div>";
            echo "<div class='table-content' id='table-$table'>";
            $result = $mysqli->query("SELECT * FROM $table ");
            echo "<table>";

            echo "<thead><tr>";
            while ($fieldinfo = $result->fetch_field()) {
                echo "<th>" . $fieldinfo->name . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_row()) {
                echo "<tr>";
                foreach ($row as $index => $data) {
                    if ($fieldinfo = $result->fetch_field_direct($index)) {
                        $column_name = $fieldinfo->name;
                        if ($column_name == "id_specie" && $table != "lista_specie") {
                            $species_query = "SELECT nome_comune FROM lista_specie WHERE id = $target_id";
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
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";

            echo "</div>";
        }


        ?>


    </div>
</main>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $(".table-name").click(function() {
            var tableName = $(this).data("table-name");
            $("#table-" + tableName).toggle();
        });


    });
</script>
</body>
</body>

</html>