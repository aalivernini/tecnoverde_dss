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


    <title>Document</title>
</head>

<body class="body">

    <?php
    include 'includes/navbar.php';
    include "includes/conn.php";

    $query_piante = "SELECT lista_specie.id, lista_specie.nome_comune, lista_specie.nome_scientifico, lista_specie.created, apparato_radicale.superficiale, apparato_radicale.profondo, autoctona.autoctona_si, autoctona.autoctona_no, categoria.caducifoglia,categoria.sempreverde, costo_fornitura.costo_min, costo_fornitura.costo_max, densità_chioma.densita_bassa, densità_chioma.densita_media, densità_chioma.densita_alta, dimensione_foglie.dimensione_lung, dimensione_foglie.dimensione_larg, emissione_bvoc.emissione_no, emissione_bvoc.si_preval_isoprene, emissione_bvoc.si_preval_monoterpene, esigenza_fert_suolo.esigenza_bassa, esigenza_fert_suolo.esigenza_media, esigenza_fert_suolo.esigenza_alta, fascia_fitosclimatica.lauretum, fascia_fitosclimatica.castanetum, fascia_fitosclimatica.fagetum, fascia_fitosclimatica.picetum, fascia_fitosclimatica.alpinetum, gruppo.latifoglie, gruppo.conifere, manutenzione.manutenzione_bassa, manutenzione.manutenzione_media, manutenzione.manutenzione_alta, maturità_pianta.altezza_totale, maturità_pianta.altezza_chioma, maturità_pianta.diametro_chioma, maturità_pianta.diametro_fusto, persistenza_foglia.classe_persistenza, ph.acido, ph.neutro, ph.alcalino, portamento.portamento, res_alte_temp.res_temp_bassa, res_alte_temp.res_temp_media, res_alte_temp.res_temp_buona, res_gelate.res_gelo_bassa, res_gelate.res_gelo_media, res_gelate.res_gelo_buona,res_malattie.res_mal_bassa,res_malattie.res_mal_media, res_malattie.res_mal_alta, res_siccità.res_sic_bassa, res_siccità.res_sic_media, res_siccità.res_sic_buona, servizi_ecosistemici.assorbimento_particolato, servizi_ecosistemici.assorbimento_ozono_azoto, servizi_ecosistemici.assorbimento_co2, servizi_ecosistemici.miglioramento_termico, servizi_ecosistemici.miglioramento_acustico, specie_allergenica.allergia_si, specie_allergenica.allergia_no, strutture_urbane_limistrofe.marciapiede, strutture_urbane_limistrofe.strada, strutture_urbane_limistrofe.servizi_sotterranei_fornitura, strutture_urbane_limistrofe.balconi_pensili, tipologia.cespuglio_arbusto, tipologia.albero, tipologia.grande_albero, tipologia_suolo.argilloso, tipologia_suolo.limoso, tipologia_suolo.sabbioso, ubicazione_urbanistica.parco_giardino, ubicazione_urbanistica.strade_viali, ubicazione_urbanistica.laghi_corsiacqua, ubicazione_urbanistica.cimitero, vel_accrescimento.lenta, vel_accrescimento.media, vel_accrescimento.alta
FROM lista_specie 
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
            JOIN vel_accrescimento ON lista_specie.id = vel_accrescimento.id_specie;";

    $risultato_piante = mysqli_query($conn, $query_piante);
    ?>

    <h1 class="titolo">TABELLA PIANTE</h1>
    <h4>Risultati ricerca: <strong><?php echo mysqli_num_rows($risultato_piante) ?></strong></h4>


    <table class="table table-dark table-striped  table-bordered">

        <thead class="thead-dark">
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
        <tbody id="tbody">




        </tbody>
    </table>

    <script src="js/main.js"></script>
    <script src="js/filter.js"></script>

</body>

</html>