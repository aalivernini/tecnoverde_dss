<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/finder.css">
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">
    <!------ Include the above in your HEAD tag ---------->

    <title>Fascia Fitosclimatica - Suolo</title>
</head>

<body class="body">

    <?php
    include "includes/conn.php";
    include "includes/navbar.php";




    // if (isset($_POST['submit'])) {


    $oggettiFiltrati = $_POST['oggettiFiltrati'];
    // $valoriSelezionati = json_decode($_POST['valoriSelezionati']);



    var_dump($oggettiFiltrati);
    die();

    $risultato_piante = $oggettiFiltrati;



    ?>


    <h1 class="titolo">TABELLA RISULTATI</h1>
    <!-- <h3>Risultati ricerca: <strong><?php echo count($risultato_piante) ?></strong></h3>
    <h4>fascia fitosclimatica = <strong><?php echo $_SESSION['clima'] ?></strong>, tipologia suolo = <strong><?php echo $_SESSION['tipologia_suolo'] ?></strong></h4> -->
    <!-- <a class="btn btn-success mb-5" href="includes/json.php">aggiungi filtri alla ricerca</a> -->

    <table class="table table-dark table-striped  table-bordered">

        <thead style="position:sticky; top: -1px;" class="thead-dark">
            <?php
            // $query = "SELECT * from information_schema.tables where table_schema = 'airtree'";
            $query = "SELECT * from information_schema.tables where table_schema = 'airtree' ORDER BY IF(TABLE_NAME RLIKE '^[l]', 1, 2), TABLE_NAME";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    echo '<th scope="col">' .  $row['TABLE_NAME'] . '</th> ';
                }
            }
            ?>
        </thead>
        <tbody>


            <?php
            if (count($oggettiFiltrati) > 0) {

                for ($i = 0; $i <= count($oggettiFiltrati); $i++) {
                    # code...
                    $row_piante = $oggettiFiltrati[$i];
            ?>


                    <tr>
                        <td><strong><?php echo $row_piante['nome_comune'] ?></strong></td>

                        <td>
                            <?php
                            if ($row_piante["profondo"] == 1) {
                                echo "profondo";
                            } else {
                                echo "superficiale";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["autoctona_si"] == 1) {
                                echo "si";
                            } else {
                                echo "no";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["caducifoglia"] == 1) {
                                echo "caducifoglia";
                            } else {
                                echo "sempreverde";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            echo $row_piante["costo_min"] . ' - ' . $row_piante["costo_max"];
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["densita_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["densita_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["densita_alta"] == 1) {
                                echo "alta";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            echo "lunghezza: " . $row_piante["dimensione_lung"] . "  larghezza: " . $row_piante["dimensione_larg"];
                            ?>
                        </td>


                        <td>
                            <?php
                            if ($row_piante["emissione_no"] == 1) {
                                echo "no";
                            };

                            if ($row_piante["si_preval_isoprene"] == 1) {
                                echo "isoprene";
                            };

                            if ($row_piante["si_preval_monoterpene"] == 1) {
                                echo "monoterpene";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["esigenza_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["esigenza_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["esigenza_alta"] == 1) {
                                echo "alta";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["lauretum"] == 1) {
                                echo "lauretum, ";
                            };

                            if ($row_piante["castanetum"] == 1) {
                                echo "castanetum, ";
                            };

                            if ($row_piante["fagetum"] == 1) {
                                echo "fagetum, ";
                            };

                            if ($row_piante["picetum"] == 1) {
                                echo "picetum, ";
                            };

                            if ($row_piante["alpinetum"] == 1) {
                                echo "alpinetum";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["latifoglie"] == 1) {
                                echo "latifoglie";
                            } else {
                                echo "conifere";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["manutenzione_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["manutenzione_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["manutenzione_alta"] == 1) {
                                echo "alta";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            echo "altezza totale:  " . $row_piante["altezza_totale"] . ", <br> ";
                            echo "altezza chioma: " . $row_piante["altezza_chioma"] . ",<br> ";
                            echo "diametro chioma: " . $row_piante["diamentro_chioma"] . ",<br> ";
                            echo "diametro fusto: " . $row_piante["diametro_fusto"] . "";;
                            ?>
                        </td>

                        <td>
                            <?php
                            echo  $row_piante["classe_persistenza"];
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["acido"] == 1) {
                                echo "acido";
                            };

                            if ($row_piante["neutro"] == 1) {
                                echo "neutro";
                            };

                            if ($row_piante["alcalino"] == 1) {
                                echo "alcalino";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            echo  $row_piante["portamento"];
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["res_temp_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["res_temp_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["res_temp_buona"] == 1) {
                                echo "buona";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["res_gelo_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["res_gelo_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["res_gelo_buona"] == 1) {
                                echo "buona";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["res_mal_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["res_mal_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["res_mal_buona"] == 1) {
                                echo "buona";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["res_sic_bassa"] == 1) {
                                echo "bassa";
                            };

                            if ($row_piante["res_sic_media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["res_sic_buona"] == 1) {
                                echo "buona";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["assorbimento_particolato"] == 1) {
                                echo "assorbimento particolato, ";
                            };

                            if ($row_piante["assorbimento_ozono_atoto"] == 1) {
                                echo "asssorbimento ozono e azoto, ";
                            };

                            if ($row_piante["assorbimento_co2"] == 1) {
                                echo "assorbimento co2, ";
                            };

                            if ($row_piante["miglioramento_termico"] == 1) {
                                echo "miglioramento termico, ";
                            };

                            if ($row_piante["miglioramento_acustico"] == 1) {
                                echo "miglioramento acustico";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["allergia_si"] == 1) {
                                echo "si";
                            };

                            if ($row_piante["allergia_no"] == 1) {
                                echo "no";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["marciapiede"] == 1) {
                                echo "marciapiede, ";
                            };

                            if ($row_piante["strada"] == 1) {
                                echo "strada, ";
                            };

                            if ($row_piante["servizi_sotterranei_fornitura"] == 1) {
                                echo "fornitura servizi sotterranei, ";
                            };

                            if ($row_piante["balconi_pensili"] == 1) {
                                echo "balconi pensili";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["cespuglio_arbusto"] == 1) {
                                echo "cespuglio arbusto, ";
                            };

                            if ($row_piante["albero"] == 1) {
                                echo "albero, ";
                            };

                            if ($row_piante["grande_albero"] == 1) {
                                echo "grande albero, ";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["argilloso"] == 1) {
                                echo "argilloso, ";
                            };

                            if ($row_piante["limoso"] == 1) {
                                echo "limoso, ";
                            };

                            if ($row_piante["sabbioso"] == 1) {
                                echo "sabbioso ";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["parco_giardino"] == 1) {
                                echo "parco giardino, ";
                            };

                            if ($row_piante["strade_viali"] == 1) {
                                echo "strade viali, ";
                            };

                            if ($row_piante["laghi_corsiacqua"] == 1) {
                                echo "laghi corsi acqua, ";
                            };

                            if ($row_piante["cimitero"] == 1) {
                                echo "cimitero";
                            };
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($row_piante["lenta"] == 1) {
                                echo "lenta";
                            };

                            if ($row_piante["media"] == 1) {
                                echo "media";
                            };

                            if ($row_piante["alta"] == 1) {
                                echo "alta";
                            };
                            ?>
                        </td>

                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>

    <?php include "footer.php" ?>

    <script src="js/main.js"></script>
    <script src="js/filter.js"></script>
</body>

</html>

<?php
// }
?>