<?php
if (isset($_POST['submit_created'])) {

    include '../../includes/conn.php';

    $nome_comune = strtolower($_POST['nome_comune']);
    $nome_scientifico = strtolower($_POST['nome_scientifico']);
    $categoria = strtolower($_POST['categoria']);
    $gruppo = strtolower($_POST['gruppo']);
    $autoctona = strtolower($_POST['autoctona']);
    $res_malattie = strtolower($_POST['res_malattie']);
    $vel_accrescimento = strtolower($_POST['vel_accrescimento']);
    $emissione_bvoc = strtolower($_POST['emissione_bvoc']);
    $apparato_radicale = strtolower($_POST['apparato_radicale']);
    $res_gelate = strtolower($_POST['res_gelate']);
    $strutture_urbane_limistrofe = strtolower($_POST['strutture_urbane_limistrofe']);
    $ubicazione_urbanistica = strtolower($_POST['ubicazione_urbanistica']);
    $manutenzione = strtolower($_POST['manutenzione']);
    $costo_min = strtolower($_POST['costo_min']);
    $costo_max = strtolower($_POST['costo_max']);
    $tipologia = strtolower($_POST['tipologia']);
    $portamento = strtolower($_POST['portamento']);
    $esigenza_fert_suolo = strtolower($_POST['esigenza_fert_suolo']);
    $tipologia_suolo = strtolower($_POST['tipologia_suolo']);
    $res_siccita = strtolower($_POST['res_siccita']);
    $res_alte_temp = strtolower($_POST['res_alte_temp']);
    $densità_chioma = strtolower($_POST['densità_chioma']);
    $servizi_ecosistemici = strtolower($_POST['servizi_ecosistemici']);
    $ph = strtolower($_POST['ph']);
    $altezza_totale = strtolower($_POST['altezza_totale']);
    $altezza_chioma = strtolower($_POST['altezza_chioma']);
    $diametro_chioma = strtolower($_POST['diametro_chioma']);
    $diametro_fusto = strtolower($_POST['diametro_fusto']);
    $persistenza_foglia = strtolower($_POST['persistenza_foglia']);
    $specie_allergenica = strtolower($_POST['specie_allergenica']);
    $clima = strtolower($_POST['clima']);
    $lunghezza_foglia = strtolower($_POST['lunghezza_foglie']);
    $larghezza_foglia = strtolower($_POST['larghezza_foglia']);

    if ($nome_comune != "" && $nome_scientifico != "") {
        $sql = "insert into lista_specie (nome_comune, nome_scientifico) values ('$nome_comune', '$nome_scientifico')";
        $result = mysqli_query($conn, $sql);

        if ($result) {

            $sqlGetId = "select id from lista_specie where nome_comune = '$nome_comune' and nome_scientifico = '$nome_scientifico' order by created desc limit 1 ";
            $resultGetId = mysqli_query($conn, $sqlGetId);

            $fetchId = mysqli_fetch_assoc($resultGetId);
            $mainId =  $fetchId['id'];


            if ($categoria != "") {
                if ($categoria == 'caducifoglia') {

                    $sql_categoria = "insert into categoria (id_specie, caducifoglia, sempreverde) values ('$mainId', 1, 0)";
                    $result_categoria = mysqli_query($conn, $sql_categoria);
                } else if ($categoria == 'sempreverde') {
                    $sql_categoria = "insert into categoria (id_specie, caducifoglia, sempreverde) values ('$mainId', 0, 1)";
                    $result_categoria = mysqli_query($conn, $sql_categoria);
                }
            }

            if ($gruppo != "") {

                if ($gruppo == "latifoglie") {
                    $sql_gruppo = "insert into gruppo (id_specie, latifoglie, conifere) values ('$mainId', 1 , 0)";
                    $result_gruppo = mysqli_query($conn, $sql_gruppo);
                } else if ($gruppo == "conifere") {
                    $sql_gruppo = "insert into gruppo (id_specie, latifoglie, conifere) values ('$mainId', 0 , 1)";
                    $result_gruppo = mysqli_query($conn, $sql_gruppo);
                }
            }

            if ($autoctona != "") {

                if ($autoctona == "autoctona_si") {
                    $sql_autoctona = "insert into autoctona (id_specie, autoctona_si, autoctona_no) values ('$mainId', 1 , 0)";
                    $result_autoctona = mysqli_query($conn, $sql_autoctona);
                } else if ($autoctona == "autoctona_no") {
                    $sql_autoctona = "insert into autoctona (id_specie, autoctona_si, autoctona_no) values ('$mainId', 0 , 1)";
                    $result_autoctona = mysqli_query($conn, $sql_autoctona);
                }
            }

            if ($res_malattie != "") {

                if ($res_malattie == "res_mal_bassa") {
                    $sql_res_malattie = "insert into res_malattie (id_specie, res_mal_bassa, res_mal_media, res_mal_alta) values ('$mainId', 1 , 0, 0)";
                    $result_res_malattie = mysqli_query($conn, $sql_res_malattie);
                } else if ($res_malattie == "res_mal_media") {
                    $sql_res_malattie = "insert into res_malattie (id_specie, res_mal_bassa, res_mal_media, res_mal_alta) values ('$mainId', 0 , 1, 0)";
                    $result_res_malattie = mysqli_query($conn, $sql_res_malattie);
                } else if ($res_malattie == "res_mal_alta") {
                    $sql_res_malattie = "insert into res_malattie (id_specie, res_mal_bassa, res_mal_media, res_mal_alta) values ('$mainId', 0 , 0, 1)";
                    $result_res_malattie = mysqli_query($conn, $sql_res_malattie);
                }
            }

            if ($vel_accrescimento != "") {

                if ($vel_accrescimento == "lenta") {
                    $sql_vel_accrescimento = "insert into vel_accrescimento (id_specie, lenta, media, alta) values ('$mainId', 1 , 0, 0)";
                    $result_vel_accrescimento = mysqli_query($conn, $sql_vel_accrescimento);
                } else if ($vel_accrescimento == "media") {
                    $sql_vel_accrescimento = "insert into vel_accrescimento (id_specie, lenta, media, alta) values ('$mainId', 0 , 1, 0)";
                    $result_vel_accrescimento = mysqli_query($conn, $sql_vel_accrescimento);
                } else if ($vel_accrescimento == "alta") {
                    $sql_vel_accrescimento = "insert into vel_accrescimento (id_specie, lenta, media, alta) values ('$mainId', 0 , 0, 1)";
                    $result_vel_accrescimento = mysqli_query($conn, $sql_vel_accrescimento);
                }
            }

            if ($emissione_bvoc != "") {

                if ($emissione_bvoc == "emissione_no") {
                    $sql_emissione_bvoc = "insert into emissione_bvoc (id_specie, emissione_no, si_preval_isoprene, si_preval_monoterpene) values ('$mainId', 1 , 0, 0)";
                    $result_emissione_bvoc = mysqli_query($conn, $sql_emissione_bvoc);
                } else if ($emissione_bvoc == "si_preval_isoprene") {
                    $sql_emissione_bvoc = "insert into emissione_bvoc (id_specie, emissione_no, si_preval_isoprene, si_preval_monoterpene) values ('$mainId', 0 , 1, 0)";
                    $result_emissione_bvoc = mysqli_query($conn, $sql_emissione_bvoc);
                } else if ($emissione_bvoc == "si_preval_monoterpene") {
                    $sql_emissione_bvoc = "insert into emissione_bvoc (id_specie, emissione_no, si_preval_isoprene, si_preval_monoterpene) values ('$mainId', 0 , 0, 1)";
                    $result_emissione_bvoc = mysqli_query($conn, $sql_emissione_bvoc);
                }
            }

            if ($apparato_radicale != "") {

                if ($apparato_radicale == "superficiale") {
                    $sql_apparato_radicale = "insert into apparato_radicale (id_specie, superficiale, profondo) values ('$mainId', 1 , 0)";
                    $result_apparato_radicale = mysqli_query($conn, $sql_apparato_radicale);
                } else if ($apparato_radicale == "profondo") {
                    $sql_apparato_radicale = "insert into apparato_radicale (id_specie, superficiale, profondo) values ('$mainId', 0 , 1)";
                    $result_apparato_radicale = mysqli_query($conn, $sql_apparato_radicale);
                }
            }

            if ($res_gelate != "") {

                if ($res_gelate == "res_gelo_bassa") {
                    $sql_res_gelate = "insert into res_gelate (id_specie, res_gelo_bassa, res_gelo_media, res_gelo_buona) values ('$mainId', 1 , 0, 0)";
                    $result_res_gelate = mysqli_query($conn, $sql_res_gelate);
                } else if ($res_gelate == "res_gelo_media") {
                    $sql_res_gelate = "insert into res_gelate (id_specie, res_gelo_bassa, res_gelo_media, res_gelo_buona) values ('$mainId', 0 , 1, 0)";
                    $result_res_gelate = mysqli_query($conn, $sql_res_gelate);
                } else if ($res_gelate == "res_gelo_buona") {
                    $sql_res_gelate = "insert into res_gelate (id_specie, res_gelo_bassa, res_gelo_media, res_gelo_buona) values ('$mainId', 0 , 0, 1)";
                    $result_res_gelate = mysqli_query($conn, $sql_res_gelate);
                }
            }

            if ($strutture_urbane_limistrofe != "") {

                if ($strutture_urbane_limistrofe == "marciapiede") {
                    $sql_strutture_urbane_limistrofe = "insert into strutture_urbane_limistrofe (id_specie, marciapiede, strada, servizi_sotterranei_fornitura, balconi_pensili) values ('$mainId', 1 , 0, 0, 0)";
                    $result_strutture_urbane_limistrofe = mysqli_query($conn, $sql_strutture_urbane_limistrofe);
                } else if ($strutture_urbane_limistrofe == "strada") {
                    $sql_strutture_urbane_limistrofe = "insert into strutture_urbane_limistrofe (id_specie, marciapiede, strada, servizi_sotterranei_fornitura, balconi_pensili) values ('$mainId', 0 , 1, 0 , 0)";
                    $result_strutture_urbane_limistrofe = mysqli_query($conn, $sql_strutture_urbane_limistrofe);
                } else if ($strutture_urbane_limistrofe == "servizi_sotterranei_fornitura") {
                    $sql_strutture_urbane_limistrofe = "insert into strutture_urbane_limistrofe (id_specie, marciapiede, strada, servizi_sotterranei_fornitura, balconi_pensili) values ('$mainId', 0 , 0, 1 , 0)";
                    $result_strutture_urbane_limistrofe = mysqli_query($conn, $sql_strutture_urbane_limistrofe);
                } else if ($strutture_urbane_limistrofe == "balconi_pensili") {
                    $sql_strutture_urbane_limistrofe = "insert into strutture_urbane_limistrofe (id_specie, marciapiede, strada, servizi_sotterranei_fornitura, balconi_pensili) values ('$mainId', 0 , 0, 0 , 1)";
                    $result_strutture_urbane_limistrofe = mysqli_query($conn, $sql_strutture_urbane_limistrofe);
                }
            }



            if ($ph != "") {

                if ($ph == "acido") {
                    $sql_ph = "insert into ph (id_specie, acido, neutro, alcalino) values ('$mainId', 1 , 0, 0)";
                    $result_ph = mysqli_query($conn, $sql_ph);
                } else if ($ph == "neutro") {
                    $sql_ph = "insert into ph (id_specie, acido, neutro, alcalino) values ('$mainId', 0 , 1, 0)";
                    $result_ph = mysqli_query($conn, $sql_ph);
                } else if ($ph == "alcalino") {
                    $sql_ph = "insert into ph (id_specie, acido, neutro, alcalino) values ('$mainId', 0 , 0, 1)";
                    $result_ph = mysqli_query($conn, $sql_ph);
                }
            }

            if ($ubicazione_urbanistica != "") {

                if ($ubicazione_urbanistica == "parco_giardino") {
                    $sql_ubicazione_urbanistica = "insert into ubicazione_urbanistica (id_specie, parco_giardino, strade_viali, laghi_corsiacqua, cimitero) values ('$mainId', 1 , 0, 0, 0)";
                    $result_ubicazione_urbanistica = mysqli_query($conn, $sql_ubicazione_urbanistica);
                } else if ($ubicazione_urbanistica == "strade_viali") {
                    $sql_ubicazione_urbanistica = "insert into ubicazione_urbanistica (id_specie, parco_giardino, strade_viali, laghi_corsiacqua, cimitero) values ('$mainId', 0 , 1, 0 , 0)";
                    $result_ubicazione_urbanistica = mysqli_query($conn, $sql_ubicazione_urbanistica);
                } else if ($ubicazione_urbanistica == "laghi_corsiacqua") {
                    $sql_ubicazione_urbanistica = "insert into ubicazione_urbanistica (id_specie, parco_giardino, strade_viali, laghi_corsiacqua, cimitero) values ('$mainId', 0 , 0, 1 , 0)";
                    $result_ubicazione_urbanistica = mysqli_query($conn, $sql_ubicazione_urbanistica);
                } else if ($ubicazione_urbanistica == "cimitero") {
                    $sql_ubicazione_urbanistica = "insert into ubicazione_urbanistica (id_specie, parco_giardino, strade_viali, laghi_corsiacqua, cimitero) values ('$mainId', 0 , 0, 0 , 1)";
                    $result_ubicazione_urbanistica = mysqli_query($conn, $sql_ubicazione_urbanistica);
                }
            }

            if ($manutenzione != "") {

                if ($manutenzione == "manutenzione_bassa") {
                    $sql_manutenzione = "insert into manutenzione (id_specie, manutenzione_bassa, manutenzione_media, manutenzione_alta) values ('$mainId', 1 , 0, 0)";
                    $result_manutenzione = mysqli_query($conn, $sql_manutenzione);
                } else if ($manutenzione == "manutenzione_media") {
                    $sql_manutenzione = "insert into manutenzione (id_specie, manutenzione_bassa, manutenzione_media, manutenzione_alta) values ('$mainId', 0 , 1, 0)";
                    $result_manutenzione = mysqli_query($conn, $sql_manutenzione);
                } else if ($manutenzione == "manutenzione_alta") {
                    $sql_manutenzione = "insert into manutenzione (id_specie, manutenzione_bassa, manutenzione_media, manutenzione_alta) values ('$mainId', 0 , 0, 1)";
                    $result_manutenzione = mysqli_query($conn, $sql_manutenzione);
                }
            }

            if ($costo_min != "" || $costo_max != "") {
                $sql_costo_fornitura = "insert into costo_fornitura (id_specie, costo_min, costo_max) values ('$mainId', '$costo_min', '$costo_max')";
                $result_costo_fornitura = mysqli_query($conn, $sql_costo_fornitura);
            }

            if ($tipologia != "") {

                if ($tipologia == "cespuglio_arbusto") {
                    $sql_tipologia = "insert into tipologia (id_specie, cespuglio_arbusto, albero, grande_albero) values ('$mainId', 1 , 0, 0)";
                    $result_tipologia = mysqli_query($conn, $sql_tipologia);
                } else if ($tipologia == "albero") {
                    $sql_tipologia = "insert into tipologia (id_specie, cespuglio_arbusto, albero, grande_albero) values ('$mainId', 0 , 1, 0)";
                    $result_tipologia = mysqli_query($conn, $sql_tipologia);
                } else if ($tipologia == "grande_albero") {
                    $sql_tipologia = "insert into tipologia (id_specie, cespuglio_arbusto, albero, grande_albero) values ('$mainId', 0 , 0, 1)";
                    $result_tipologia = mysqli_query($conn, $sql_tipologia);
                }
            }

            if ($portamento != "") {

                $sql_portamento = "insert into portamento (id_specie, portamento) values ('$mainId', '$portamento')";
                $result_portamento = mysqli_query($conn, $sql_portamento);
            }

            if ($esigenza_fert_suolo != "") {

                if ($esigenza_fert_suolo == "esigenza_bassa") {
                    $sql_esigenza_fert_suolo = "insert into esigenza_fert_suolo (id_specie, esigenza_bassa, esigenza_media, esigenza_alta) values ('$mainId', 1 , 0, 0)";
                    $result_esigenza_fert_suolo = mysqli_query($conn, $sql_esigenza_fert_suolo);
                } else if ($esigenza_fert_suolo == "esigenza_media") {
                    $sql_esigenza_fert_suolo = "insert into esigenza_fert_suolo (id_specie, esigenza_bassa, esigenza_media, esigenza_alta) values ('$mainId', 0 , 1, 0)";
                    $result_esigenza_fert_suolo = mysqli_query($conn, $sql_esigenza_fert_suolo);
                } else if ($esigenza_fert_suolo == "esigenza_alta") {
                    $sql_esigenza_fert_suolo = "insert into esigenza_fert_suolo (id_specie, esigenza_bassa, esigenza_media, esigenza_alta) values ('$mainId', 0 , 0, 1)";
                    $result_esigenza_fert_suolo = mysqli_query($conn, $sql_esigenza_fert_suolo);
                }
            }

            if ($tipologia_suolo != "") {

                if ($tipologia_suolo == "argilloso") {
                    $sql_tipologia_suolo = "insert into tipologia_suolo (id_specie, argilloso, limoso, sabbioso) values ('$mainId', 1 , 0, 0)";
                    $result_tipologia_suolo = mysqli_query($conn, $sql_tipologia_suolo);
                } else if ($tipologia_suolo == "limoso") {
                    $sql_tipologia_suolo = "insert into tipologia_suolo (id_specie, argilloso, limoso, sabbioso) values ('$mainId', 0 , 1, 0)";
                    $result_tipologia_suolo = mysqli_query($conn, $sql_tipologia_suolo);
                } else if ($tipologia_suolo == "sabbioso") {
                    $sql_tipologia_suolo = "insert into tipologia_suolo (id_specie, argilloso, limoso, sabbioso) values ('$mainId', 0 , 0, 1)";
                    $result_tipologia_suolo = mysqli_query($conn, $sql_tipologia_suolo);
                }
            }

            if ($res_siccita != "") {

                if ($res_siccita == "res_sic_bassa") {
                    $sql_res_siccita = "insert into res_siccità (id_specie, res_sic_bassa, res_sic_media, res_sic_buona) values ('$mainId', 1 , 0, 0)";
                    $result_res_siccita = mysqli_query($conn, $sql_res_siccita);
                } else if ($res_siccita == "res_sic_media") {
                    $sql_res_siccita = "insert into res_siccità (id_specie, res_sic_bassa, res_sic_media, res_sic_buona) values ('$mainId', 0 , 1, 0)";
                    $result_res_siccita = mysqli_query($conn, $sql_res_siccita);
                } else if ($res_siccita == "res_sic_buona") {
                    $sql_res_siccita = "insert into res_siccità (id_specie, res_sic_bassa, res_sic_media, res_sic_buona) values ('$mainId', 0 , 0, 1)";
                    $result_res_siccita = mysqli_query($conn, $sql_res_siccita);
                }
            }

            if ($res_alte_temp != "") {

                if ($res_alte_temp == "res_temp_bassa") {
                    $sql_res_alte_temp = "insert into res_alte_temp (id_specie, res_temp_bassa, res_temp_media, res_temp_buona) values ('$mainId', 1 , 0, 0)";
                    $result_res_alte_temp = mysqli_query($conn, $sql_res_alte_temp);
                } else if ($res_alte_temp == "res_temp_media") {
                    $sql_res_alte_temp = "insert into res_alte_temp (id_specie, res_temp_bassa, res_temp_media, res_temp_buona) values ('$mainId', 0 , 1, 0)";
                    $result_res_alte_temp = mysqli_query($conn, $sql_res_alte_temp);
                } else if ($res_alte_temp == "res_temp_buona") {
                    $sql_res_alte_temp = "insert into res_alte_temp (id_specie, res_temp_bassa, res_temp_media, res_temp_buona) values ('$mainId', 0 , 0, 1)";
                    $result_res_alte_temp = mysqli_query($conn, $sql_res_alte_temp);
                }
            }

            if ($densità_chioma != "") {

                if ($densità_chioma == "densita_bassa") {
                    $sql_densità_chioma = "insert into densità_chioma (id_specie, densita_bassa, densita_media, densita_alta) values ('$mainId', 1 , 0, 0)";
                    $result_densità_chioma = mysqli_query($conn, $sql_densità_chioma);
                } else if ($densità_chioma == "densita_media") {
                    $sql_densità_chioma = "insert into densità_chioma (id_specie, densita_bassa, densita_media, densita_alta) values ('$mainId', 0 , 1, 0)";
                    $result_densità_chioma = mysqli_query($conn, $sql_densità_chioma);
                } else if ($densità_chioma == "densita_alta") {
                    $sql_densità_chioma = "insert into densità_chioma (id_specie, densita_bassa, densita_media, densita_alta) values ('$mainId', 0 , 0, 1)";
                    $result_densità_chioma = mysqli_query($conn, $sql_densità_chioma);
                }
            }

            if ($servizi_ecosistemici != '') {

                if ($servizi_ecosistemici == "assorbimento_particolato") {
                    $sql_servizi_ecosistemici = "insert into servizi_ecosistemici (id_specie, assorbimento_particolato, assorbimento_ozono_azoto, assorbimento_co2, miglioramento_termico, miglioramento_acustico ) values ('$mainId', 1 , 0, 0, 0 , 0)";
                    $result_servizi_ecosistemici = mysqli_query($conn, $sql_servizi_ecosistemici);
                } else if ($servizi_ecosistemici == "assorbimento_ozono_azoto") {
                    $sql_servizi_ecosistemici = "insert into servizi_ecosistemici (id_specie, assorbimento_particolato, assorbimento_ozono_azoto, assorbimento_co2, miglioramento_termico, miglioramento_acustico ) values ('$mainId', 0 , 1, 0, 0 , 0)";
                    $result_servizi_ecosistemici = mysqli_query($conn, $sql_servizi_ecosistemici);
                } else if ($servizi_ecosistemici == "assorbimento_co2") {
                    $sql_servizi_ecosistemici = "insert into servizi_ecosistemici (id_specie, assorbimento_particolato, assorbimento_ozono_azoto, assorbimento_co2, miglioramento_termico, miglioramento_acustico ) values ('$mainId', 0 , 0, 1, 0 , 0)";
                    $result_servizi_ecosistemici = mysqli_query($conn, $sql_servizi_ecosistemici);
                } else if ($servizi_ecosistemici == "	miglioramento_termico") {
                    $sql_servizi_ecosistemici = "insert into servizi_ecosistemici (id_specie, assorbimento_particolato, assorbimento_ozono_azoto, assorbimento_co2, miglioramento_termico, miglioramento_acustico ) values ('$mainId', 0 , 0, 0, 1 , 0)";
                    $result_servizi_ecosistemici = mysqli_query($conn, $sql_servizi_ecosistemici);
                } else if ($servizi_ecosistemici == "miglioramento_acustico") {
                    $sql_servizi_ecosistemici = "insert into servizi_ecosistemici (id_specie, assorbimento_particolato, assorbimento_ozono_azoto, assorbimento_co2, miglioramento_termico, miglioramento_acustico ) values ('$mainId', 0 , 0, 0, 0 , 1)";
                    $result_servizi_ecosistemici = mysqli_query($conn, $sql_servizi_ecosistemici);
                }
            }


            if ($altezza_totale != "" || $altezza_chioma != "" || $diametro_chioma != "" || $diametro_fusto != "") {

                $sql_maturità_pianta = "insert into maturità_pianta (id_specie, altezza_totale, altezza_chioma, diametro_chioma, diametro_fusto) values ('$mainId', '$altezza_totale', '$altezza_chioma', '$diametro_chioma', '$diametro_fusto')";
                $result_maturità_pianta = mysqli_query($conn, $sql_maturità_pianta);
            }

            if ($persistenza_foglia != "") {

                $sql_persistenza_foglia = "insert into persistenza_foglia (id_specie, classe_persistenza) values ('$mainId', '$persistenza_foglia')";
                $result_persistenza_foglia = mysqli_query($conn, $sql_persistenza_foglia);
            }

            if ($specie_allergenica != "") {

                if ($specie_allergenica == "allergia_si") {
                    $sql_specie_allergenica = "insert into specie_allergenica (id_specie, allergia_si, allergia_no) values ('$mainId', 1 , 0)";
                    $result_specie_allergenica = mysqli_query($conn, $sql_specie_allergenica);
                } else if ($specie_allergenica == "allergia_no") {
                    $sql_specie_allergenica = "insert into specie_allergenica (id_specie, allergia_si, allergia_no) values ('$mainId', 0 , 1)";
                    $result_specie_allergenica = mysqli_query($conn, $sql_specie_allergenica);
                }
            }

            if ($clima != "") {

                if ($clima == "lauretum") {
                    $sql_clima = "insert into fascia_fitosclimatica (id_specie, lauretum, castanetum, fagetum, picetum, alpinetum ) values ('$mainId', 1 , 0, 0, 0 , 0)";
                    $result_clima = mysqli_query($conn, $sql_clima);
                } else if ($clima == "castanetum") {
                    $sql_clima = "insert into fascia_fitosclimatica (id_specie, lauretum, castanetum, fagetum, picetum, alpinetum ) values ('$mainId', 0 , 1, 0, 0 , 0)";
                    $result_clima = mysqli_query($conn, $sql_clima);
                } else if ($clima == "fagetum") {
                    $sql_clima = "insert into fascia_fitosclimatica (id_specie, lauretum, castanetum, fagetum, picetum, alpinetum ) values ('$mainId', 0 , 0, 1, 0 , 0)";
                    $result_clima = mysqli_query($conn, $sql_clima);
                } else if ($clima == "picetum") {
                    $sql_clima = "insert into fascia_fitosclimatica (id_specie, lauretum, castanetum, fagetum, picetum, alpinetum ) values ('$mainId', 0 , 0, 0, 1 , 0)";
                    $result_clima = mysqli_query($conn, $sql_clima);
                } else if ($clima == "alpinetum") {
                    $sql_clima = "insert into fascia_fitosclimatica (id_specie, lauretum, castanetum, fagetum, picetum, alpinetum ) values ('$mainId', 0 , 0, 0, 0 , 1)";
                    $result_clima = mysqli_query($conn, $sql_clima);
                }
            }


            if ($lunghezza_foglia != "" || $larghezza_foglia != "") {

                $sql_dimensione_foglie = "insert into dimensione_foglie (id_specie, dimensione_lung, dimensione_larg) values ('$mainId', '$lunghezza_foglia', '$larghezza_foglia')";
                $result_dimensione_foglie = mysqli_query($conn, $sql_dimensione_foglie);
            }
        }
    }
}
