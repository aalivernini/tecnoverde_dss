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
                    <a class="nav-link" href="database_update.php">AGGIORNA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="database_delete.php">ELIMINA</a>
                </li>
            </ul>

            <?php
            $sql = "select * from lista_specie";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    // Output dei dati in una tabella
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nome comune</th><th>Nome scientifico</th><th></th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome_comune"] . "</td><td>" . $row["nome_scientifico"] . "</td><td><form method='post' action='includes/database_delete_inc.php'><input type='hidden' name='id' value='" . $row["id"] . "'><button name='submit' type='submit'>Elimina</button></form></td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Nessun risultato trovato";
                }
            }
            $conn->close();
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
<?php
} else {

    echo "<script>window.location.href = '../index.php'</script>";
}
?>

</body>

</html>