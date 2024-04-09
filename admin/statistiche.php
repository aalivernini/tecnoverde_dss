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
        document.getElementById("statistiche").classList.add("current");
    </script>

    <main id="pgmain">
        <div class="dashboard-banner">
            <h2>Statistiche</h2>
        </div>

        <button class="btn-cerca" id="statCsv">Scarica CSV</button>


        <div class="content-page">

            <div id="chart-container">
                <canvas id="chart"></canvas>
            </div>

        </div>
    </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>

    <script>
        var conteggiArray;
        // Effettuare una richiesta AJAX al server per ottenere i dati della colonna
        fetch('includes/statistiche.inc.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
            .then(response => response.json())
            .then(dati => {
                // console.log(dati)

                // Creare un array di stringhe
                const stringhe = [];
                for (let i = 0; i < dati.length; i++) {
                    for (let j = 0; j < dati[i].length; j++) {
                        const stringa = dati[i][j];

                        const valoreEstrapolato = stringa.split(',');
                        // console.log(valoreEstrapolato)



                        if (valoreEstrapolato !== null) {
                            valoreEstrapolato.forEach(valore => {
                                valore = valore.replace(/"/g, "").trim();
                                // console.log(valore)
                                stringhe.push(valore);
                            });
                        }
                    }
                }


                // Creare un oggetto per tenere traccia del numero di occorrenze di ogni valore
                const conteggi = {};
                for (let i = 0; i < stringhe.length; i++) {
                    const stringa = stringhe[i];

                    if (conteggi[stringa]) {
                        conteggi[stringa]++;
                    } else {
                        conteggi[stringa] = 1;
                    }
                }
                // console.log(conteggi)

                // Creare un array di oggetti contenente il conteggio di ogni valore
                conteggiArray = [];
                for (const valore in conteggi) {
                    if (conteggi.hasOwnProperty(valore)) {
                        conteggiArray.push({
                            valore: valore,
                            conteggio: conteggi[valore]
                        });
                    }
                }


                console.log(conteggiArray)
                // Ordinare l'array per conteggio decrescente e prendere solo i primi 6 elementi
                const top6 = conteggiArray.sort((a, b) => b.conteggio - a.conteggio).slice(0, 6);

                // Creare un array di etichette e un array di dati per il grafico
                const etichette = top6.map(elem => elem.valore);
                const datiGrafico = top6.map(elem => elem.conteggio);

                // Creare il grafico
                const ctx = document.getElementById("chart").getContext("2d");
                const chart = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: etichette,
                        datasets: [{
                            label: "Preferenze",
                            data: datiGrafico,
                            backgroundColor: "rgba(54, 162, 235, 0.2)",
                            borderColor: "rgba(54, 162, 235, 1)",
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            })
            .catch(error => console.error("Errore nella richiesta:", error));







        function downloadExcelData(data) {
            // Ordinare i dati in modo decrescente in base al valore di "conteggio"
            data.sort((a, b) => b.conteggio - a.conteggio);

            // Creare un oggetto Workbook
            const workbook = new ExcelJS.Workbook();
            const worksheet = workbook.addWorksheet("Dati");

            // Aggiungere intestazioni delle colonne
            worksheet.addRow(["Valore", "Conteggio"]);

            // Aggiungere i dati alla tabella
            data.forEach((item) => {
                worksheet.addRow([item.valore, item.conteggio]);
            });

            // Generare il file Excel
            workbook.xlsx.writeBuffer().then((buffer) => {
                const blob = new Blob([buffer], {
                    type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                });
                const url = URL.createObjectURL(blob);

                // Creare un link temporaneo per il download del file
                const a = document.createElement("a");
                a.href = url;
                a.download = "stats_preference.xlsx";
                a.click();

                // Liberare la risorsa dell'URL
                URL.revokeObjectURL(url);
            });
        }



        document.addEventListener("DOMContentLoaded", function() {
            const btnCerca = document.getElementById("statCsv");

            btnCerca.addEventListener("click", function() {
                // Aggiungi qui le tue validazioni, se necessario

                // Esegui la funzione downloadExcelData con i dati desiderati
                downloadExcelData(conteggiArray);
            });
        });


        // downloadExcelData(dati);
    </script>

<?php
} else {

    echo "<script>window.location.href = '../index.php'</script>";
}
?>
</body>

</html>