<?php
$mysqli = new mysqli("localhost", "user", "password", "airtree");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$table = "lista_specie";
echo "<div class='table-name' data-table-name='$table'>$table</div>";
echo "<div class='table-content d-block' id='table-$table'>";
$result = $mysqli->query("SELECT * FROM $table");
echo "<table>";
echo "<thead><tr>";
while ($fieldinfo = $result->fetch_field()) {
    echo "<th>" . $fieldinfo->name . "</th>";
}
echo "</tr></thead>";
echo "<tbody>";
while ($row = $result->fetch_row()) {
    echo "<tr class='table-row' data-row-id='$row[0]'>";
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
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";

?>

<script>
    $(document).ready(function() {
        // Mostra il pop-up di modifica quando si fa clic sulla riga della tabella
        $('.edit-row').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                url: 'modifica.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    $('#popup-container').html(response);
                    $('#popup').modal('show');
                }
            });
        });
    });
</script>