<?php

// Load the database configuration file 
include_once 'conn.php';

session_start();

$categoria = $_SESSION['categoria'];
$tipologia_suolo = $_SESSION['tipologia_suolo'];
$densità_chioma = "densita_" . $_SESSION['densità_chioma'];


// Fetch records from database 
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
            WHERE categoria.$categoria = 1 and 
            tipologia_suolo.$tipologia_suolo = 1 and
            densità_chioma.$densità_chioma = 1 order by lista_specie.id";


$risultato_piante = mysqli_query($conn, $query_piante);


if (mysqli_num_rows($risultato_piante) > 0) {
    $delimiter = ";";
    $filename = "allfields_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w');

    // Set column headers 
    $fields = array('lista_specie', 'apparato_radicale', 'autoctona', 'categoria', 'costo_fornitura', 'densità_chioma',     'dimensione_foglie', 'emissione_bvoc', 'esigenza_fert_suolo', 'fascia_fitosclimatica', 'gruppo', 'manutenzione',     'maturità_pianta', 'persistenza_foglia', 'ph', 'portamento', 'res_alte_temp', 'res_gelate', 'res_malattie', 'res_siccità',   'servizi_ecosistemici', 'specie_allergenica', 'strutture_urbane_limistrofe', 'tipologia', 'tipologia_suolo',    'ubicazione_urbanistica', 'vel_accrescimento');
    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer 
    while ($row_piante = mysqli_fetch_array($risultato_piante)) {

        $nomecomune = $row_piante['nome_comune'];


        if ($row_piante["profondo"] == 1) {
            $apparato_radicale = "profondo";
        } else {
            $apparato_radicale = "superficiale";
        };


        if ($row_piante["autoctona_si"] == 1) {
            $autoctona = "si";
        } else {
            $autoctona = "no";
        };


        if ($row_piante["caducifoglia"] == 1) {
            $categoria = "caducifoglia";
        } else {
            $categoria = "sempreverde";
        };


        $costo_fornitura = $row_piante["costo_min"] . ' - ' . $row_piante["costo_max"];


        if ($row_piante["densita_bassa"] == 1) {
            $densità_chioma = "bassa";
        };

        if ($row_piante["densita_media"] == 1) {
            $densità_chioma = "media";
        };

        if ($row_piante["densita_alta"] == 1) {
            $densità_chioma = "alta";
        };




        $dimensione_foglie = "lunghezza: " . $row_piante["dimensione_lung"] . "  larghezza: " . $row_piante["dimensione_larg"];


        if ($row_piante["emissione_no"] == 1) {
            $emissione_bvoc = "no";
        };

        if ($row_piante["si_preval_isoprene"] == 1) {
            $emissione_bvoc = "isoprene";
        };

        if ($row_piante["si_preval_monoterpene"] == 1) {
            $emissione_bvoc = "monoterpene";
        };



        if ($row_piante["esigenza_bassa"] == 1) {
            $esigenza_fert_suolo = "bassa";
        };

        if ($row_piante["esigenza_media"] == 1) {
            $esigenza_fert_suolo = "media";
        };

        if ($row_piante["esigenza_alta"] == 1) {
            $esigenza_fert_suolo = "alta";
        };

        if ($row_piante["esigenza_bassa"] == NULL) {
            $esigenza_fert_suolo = "";
        };







        if ($row_piante["lauretum"] == 1) {
            $fascia_fitosclimatica = "lauretum, ";
        };

        if ($row_piante["castanetum"] == 1) {
            $fascia_fitosclimatica .= "castanetum, ";
        };

        if ($row_piante["fagetum"] == 1) {
            $fascia_fitosclimatica .= "fagetum, ";
        };

        if ($row_piante["picetum"] == 1) {
            $fascia_fitosclimatica .= "picetum, ";
        };

        if ($row_piante["alpinetum"] == 1) {
            $fascia_fitosclimatica .= "alpinetum";
        };




        if ($row_piante["latifoglie"] == 1) {
            $gruppo = "latifoglie";
        } else {
            $gruppo = "conifere";
        };







        if ($row_piante["manutenzione_bassa"] == 1) {
            $manutenzione = "bassa";
        };

        if ($row_piante["manutenzione_media"] == 1) {
            $manutenzione = "media";
        };

        if ($row_piante["manutenzione_alta"] == 1) {
            $manutenzione = "alta";
        };


        $maturità_pianta  = "altezza totale:  " . $row_piante["altezza_totale"] . ", altezza chioma: " . $row_piante["altezza_chioma"] . ", diametro chioma: " . $row_piante["diamentro_chioma"] . ", diametro fusto: " . $row_piante["diametro_fusto"];


        $persistenza_foglia = $row_piante["classe_persistenza"];



        if ($row_piante["acido"] == 1) {
            $ph = "acido";
        };

        if ($row_piante["neutro"] == 1) {
            $ph = "neutro";
        };

        if ($row_piante["alcalino"] == 1) {
            $ph = "alcalino";
        };



        $portamento = $row_piante["portamento"];


        if ($row_piante["res_temp_bassa"] == 1) {
            $res_alte_temp = "bassa";
        };

        if ($row_piante["res_temp_media"] == 1) {
            $res_alte_temp = "media";
        };

        if ($row_piante["res_temp_buona"] == 1) {
            $res_alte_temp = "buona";
        };





        if ($row_piante["res_gelo_bassa"] == 1) {
            $res_gelate = "bassa";
        };

        if ($row_piante["res_gelo_media"] == 1) {
            $res_gelate = "media";
        };

        if ($row_piante["res_gelo_buona"] == 1) {
            $res_gelate = "buona";
        };




        if ($row_piante["res_mal_bassa"] == 1) {
            $res_malattie = "bassa";
        };

        if ($row_piante["res_mal_media"] == 1) {
            $res_malattie = "media";
        };

        if ($row_piante["res_mal_buona"] == 1) {
            $res_malattie = "buona";
        };


        if ($row_piante["res_sic_bassa"] == 1) {
            $res_siccità = "bassa";
        };

        if ($row_piante["res_sic_media"] == 1) {
            $res_siccità = "media";
        };

        if ($row_piante["res_sic_buona"] == 1) {
            $res_siccità = "buona";
        };


        if ($row_piante["assorbimento_particolato"] == 1) {
            $servizi_ecosistemici = "assorbimento particolato, ";
        };

        if ($row_piante["assorbimento_ozono_atoto"] == 1) {
            $servizi_ecosistemici .= "asssorbimento ozono e azoto, ";
        };

        if ($row_piante["assorbimento_co2"] == 1) {
            $servizi_ecosistemici .= "assorbimento co2, ";
        };

        if ($row_piante["miglioramento_termico"] == 1) {
            $servizi_ecosistemici .= "miglioramento termico, ";
        };

        if ($row_piante["miglioramento_acustico"] == 1) {
            $servizi_ecosistemici .= "miglioramento acustico";
        };







        if ($row_piante["allergia_si"] == 1) {
            $specie_allergenica = "si";
        };

        if ($row_piante["allergia_no"] == 1) {
            $specie_allergenica = "no";
        };




        if ($row_piante["marciapiede"] == 1) {
            $strutture_urbane_limistrofe = "marciapiede, ";
        };

        if ($row_piante["strada"] == 1) {
            $strutture_urbane_limistrofe .= "strada, ";
        };

        if ($row_piante["servizi_sotterranei_fornitura"] == 1) {
            $strutture_urbane_limistrofe .= "fornitura servizi sotterranei, ";
        };

        if ($row_piante["balconi_pensili"] == 1) {
            $strutture_urbane_limistrofe .= "balconi pensili";
        };







        if ($row_piante["cespuglio_arbusto"] == 1) {
            $tipologia = "cespuglio arbusto, ";
        };

        if ($row_piante["albero"] == 1) {
            $tipologia = "albero, ";
        };

        if ($row_piante["grande_albero"] == 1) {
            $tipologia = "grande albero, ";
        };





        if ($row_piante["argilloso"] == 1) {
            $tipologia_suolo =  "argilloso, ";
        };

        if ($row_piante["limoso"] == 1) {
            $tipologia_suolo =  "limoso, ";
        };

        if ($row_piante["sabbioso"] == 1) {
            $tipologia_suolo =  "sabbioso ";
        };




        if ($row_piante["parco_giardino"] == 1) {
            $ubicazione_urbanistica = "parco giardino, ";
        };

        if ($row_piante["strade_viali"] == 1) {
            $ubicazione_urbanistica .= "strade viali, ";
        };

        if ($row_piante["laghi_corsiacqua"] == 1) {
            $ubicazione_urbanistica .= "laghi corsi acqua, ";
        };

        if ($row_piante["cimitero"] == 1) {
            $ubicazione_urbanistica .= "cimitero";
        };


        if ($row_piante["lenta"] == 1) {
            $vel_accrescimento = "lenta";
        };

        if ($row_piante["media"] == 1) {
            $vel_accrescimento = "media";
        };

        if ($row_piante["alta"] == 1) {
            $vel_accrescimento = "alta";
        };



        $lineData = array(
            $nomecomune,
            $apparato_radicale,
            $autoctona,
            $categoria,
            $costo_fornitura,
            $densità_chioma,
            $dimensione_foglie,
            $emissione_bvoc,
            $esigenza_fert_suolo,
            $fascia_fitosclimatica,
            $gruppo,
            $manutenzione,
            $maturità_pianta,
            $persistenza_foglia,
            $ph,
            $portamento,
            $res_alte_temp,
            $res_gelate,
            $res_malattie,
            $res_siccità,
            $servizi_ecosistemici,
            $specie_allergenica,
            $strutture_urbane_limistrofe,
            $tipologia,
            $tipologia_suolo,
            $ubicazione_urbanistica,
            $vel_accrescimento
        );

        fputcsv($f, $lineData, $delimiter);
    }

    // Move back to beginning of file 
    fseek($f, 0);

    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '";');


    //output all remaining data on a file pointer 
    fpassthru($f);
}
exit;
