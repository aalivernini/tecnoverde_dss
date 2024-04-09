<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/finder.css">
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">
    <!------ Include the above in your HEAD tag ---------->


    <title>Fascia Fitosclimatica</title>
</head>

<body class="body">

    <?php
    include "includes/conn.php";
    include "navbar.php";
    ?>


    <?php

    $query_piante = "SELECT * FROM lista_specie 
            JOIN apparato_radicale ON lista_specie.id = apparato_radicale.id_specie 
            JOIN autoctona ON lista_specie.id = autoctona.id_specie
            JOIN categoria ON lista_specie.id = categoria.id_specie
            JOIN costo_fornitura ON lista_specie.id = costo_fornitura.id_specie
            JOIN densità_chioma ON lista_specie.id = densità_chioma.id_specie
            JOIN dimensione_foglie ON lista_specie.id = dimensione_foglie.id_specie
            JOIN emissione_bvoc ON lista_specie.id = emissione_bvoc.id_specie
            JOIN esigenza_fert_suolo ON lista_specie.id = esigenza_fert_suolo.id_specie
            JOIN fascia_fitosclimatica ON lista_specie.id = fascia_fitosclimatica.id_specie
            JOIN gruppo ON lista_specie.id = gruppo.id_specie
            JOIN manutenzione ON lista_specie.id = manutenzione.id_specie
            JOIN maturità_pianta ON lista_specie.id = maturità_pianta.id_specie
            JOIN persistenza_foglia ON lista_specie.id = persistenza_foglia.id_specie
            JOIN ph ON lista_specie.id = ph.id_specie
            JOIN portamento ON lista_specie.id = portamento.id_specie
            JOIN res_alte_temp ON lista_specie.id = res_alte_temp.id_specie
            JOIN res_gelate ON lista_specie.id = res_gelate.id_specie
            JOIN res_malattie ON lista_specie.id = res_malattie.id_specie
            JOIN res_siccità ON lista_specie.id = res_siccità.id_specie
            JOIN servizi_ecosistemici ON lista_specie.id = servizi_ecosistemici.id_specie
            JOIN specie_allergenica ON lista_specie.id = specie_allergenica.id_specie
            JOIN strutture_urbane_limistrofe ON lista_specie.id = strutture_urbane_limistrofe.id_specie
            JOIN tipologia ON lista_specie.id = tipologia.id_specie
            JOIN tipologia_suolo ON lista_specie.id = tipologia_suolo.id_specie
            JOIN ubicazione_urbanistica ON lista_specie.id = ubicazione_urbanistica.id_specie
            JOIN vel_accrescimento ON lista_specie.id = vel_accrescimento.id_specie 
            WHERE fascia_fitosclimatica.$clima = 1";

    // var_dump($query_piante);

    $risultato_piante = mysqli_query($conn, $query_piante);
    ?>

    <h1 class="titolo">TABELLA RISULTATI</h1>
    <h3>Risultati ricerca: <strong><?php echo mysqli_num_rows($risultato_piante) ?></strong></h3>
    <h4>fascia fitosclimatica = <strong><?php echo $_SESSION['clima'] ?></strong></h4>

    <table class="table table-striped  table-bordered">

        <thead style="position:sticky; top: -1px;" class="thead-dark">
            <?php
            // $query = "SELECT * from information_schema.tables where table_schema = 'airtree'";
            $query = "SELECT * from information_schema.tables where table_schema = 'airtree' ORDER BY IF(TABLE_NAME RLIKE '^[l]', 1, 2), TABLE_NAME";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    echo '  <th scope="col">' .  $row['TABLE_NAME'] . '</th> ';
                }
            }
            ?>
        </thead>

        <tbody>
            <?php
            if (mysqli_num_rows($risultato_piante) > 0) {
                while ($row_piante = mysqli_fetch_array($risultato_piante)) { ?>

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
</body>

</html>