<?php
include 'popup_design.php';
include '../../includes/conn.php';
session_start();

$target_id = $_GET['id'];
$_SESSION['id'] = $target_id;


$mysqli = new mysqli("localhost", "username", "password", "airtree");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


echo "<script>alert('Attenzione: puoi modificare solo un record alla volta!')</script>";
// Get all table names in the database
$tables = array();
$result = $mysqli->query("SELECT TABLE_NAME
FROM information_schema.tables
WHERE table_schema = 'airtree'
AND table_name NOT IN ('users') AND table_name NOT IN ('statistiche_ricerca')");
while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

?>

<main id="pgmain">
    <div class="dashboard-banner">
        <h2>Aggiorna Record</h2>
    </div>

    <div class="content-page">
        <div class="legend">
            <span><strong>Leggenda:</strong></span><br>
            <span class="icon">&#10004;</span> 1 <br>
            <span class="icon">&#10060;</span> 0
        </div>
        <?php
        foreach ($tables as $table) {
            echo "<div class='table-name' data-table-name='$table'><strong>$table</strong></div>";
            echo "<div class='table-content mb-4' id='table-$table'>";
            $query = ($table == "lista_specie") ? "SELECT *  FROM $table WHERE id = $target_id" : "SELECT *  FROM $table WHERE id_specie = '$target_id'";
            $result = $mysqli->query($query);

            echo "<form method='POST' action='../includes/database_update_inc.php' enctype='multipart/form-data'>";
            echo "<table>";

            echo "<thead><tr>";
            while ($fieldinfo = $result->fetch_field()) {
                echo "<th>" . $fieldinfo->name . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $column => $data) {

                    if ($column == "id" || $column == "id_specie" || $column == "created") {
                        echo "<td>" . $data . "<input type='hidden' name='$table" . "[" . $column . "]' value='$data'></td>";
                    } else {
                        // echo "<td><input type='text' name='$table" . "[" . $column . "]' value='$data'></td>";
                        echo "<td><input type='text' name='target' value='$data'></td>";

                        $_SESSION['table'] = $table;
                        $_SESSION['column'] = $column;
                    }
                }
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";

            echo "<div >";
            echo "<button class='btn btn-info' type='submit' name='update-$table" . "[" . $column . "]'>Aggiorna</button>";

            echo "</form>";
        }

        ?>


    </div>
</main>

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