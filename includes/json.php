<?php
include "conn.php";


$query_piante = "SELECT lista_specie.id, lista_specie.nome_comune, lista_specie.nome_scientifico, lista_specie.created, apparato_radicale.superficiale, apparato_radicale.profondo, autoctona.autoctona_si, autoctona.autoctona_no, categoria.caducifoglia,categoria.sempreverde, costo_fornitura.costo_min, costo_fornitura.costo_max, densita_chioma.densita_bassa, densita_chioma.densita_media, densita_chioma.densita_alta, dimensione_foglie.dimensione_lung, dimensione_foglie.dimensione_larg, emissione_bvoc.emissione_no, emissione_bvoc.si_preval_isoprene, emissione_bvoc.si_preval_monoterpene, esigenza_fert_suolo.esigenza_bassa, esigenza_fert_suolo.esigenza_media, esigenza_fert_suolo.esigenza_alta, fascia_fitosclimatica.lauretum, fascia_fitosclimatica.castanetum, fascia_fitosclimatica.fagetum, fascia_fitosclimatica.picetum, fascia_fitosclimatica.alpinetum, gruppo.latifoglie, gruppo.conifere, manutenzione.manutenzione_bassa, manutenzione.manutenzione_media, manutenzione.manutenzione_alta, maturita_pianta.altezza_totale, maturita_pianta.altezza_chioma, maturita_pianta.diametro_chioma, maturita_pianta.diametro_fusto, persistenza_foglia.classe_persistenza, ph.acido, ph.neutro, ph.alcalino, portamento.portamento, res_alte_temp.res_temp_bassa, res_alte_temp.res_temp_media, res_alte_temp.res_temp_buona, res_gelate.res_gelo_bassa, res_gelate.res_gelo_media, res_gelate.res_gelo_buona,res_malattie.res_mal_bassa,res_malattie.res_mal_media, res_malattie.res_mal_alta, res_siccita.res_sic_bassa, res_siccita.res_sic_media, res_siccita.res_sic_buona, servizi_ecosistemici.assorbimento_particolato, servizi_ecosistemici.assorbimento_ozono_azoto, servizi_ecosistemici.assorbimento_co2, servizi_ecosistemici.miglioramento_termico, servizi_ecosistemici.miglioramento_acustico, specie_allergenica.allergia_si, specie_allergenica.allergia_no, strutture_urbane_limistrofe.marciapiede, strutture_urbane_limistrofe.strada, strutture_urbane_limistrofe.servizi_sotterranei_fornitura, strutture_urbane_limistrofe.balconi_pensili, tipologia.cespuglio_arbusto, tipologia.albero, tipologia.grande_albero, tipologia_suolo.argilloso, tipologia_suolo.limoso, tipologia_suolo.sabbioso, ubicazione_urbanistica.parco_giardino, ubicazione_urbanistica.strade_viali, ubicazione_urbanistica.laghi_corsiacqua, ubicazione_urbanistica.cimitero, vel_accrescimento.lenta, vel_accrescimento.media, vel_accrescimento.alta, link_specie.ACTAPLANTARUM, link_specie.FLORADITALIA, link_specie.EUFORGEN
        FROM lista_specie 
            JOIN link_specie ON lista_specie.id = link_specie.id_specie 
            JOIN apparato_radicale ON lista_specie.id = apparato_radicale.id_specie 
            JOIN autoctona ON lista_specie.id = autoctona.id_specie
            JOIN categoria ON lista_specie.id = categoria.id_specie
            JOIN costo_fornitura ON lista_specie.id = costo_fornitura.id_specie
            JOIN densita_chioma ON lista_specie.id = densita_chioma.id_specie
            JOIN dimensione_foglie ON lista_specie.id = dimensione_foglie.id_specie
            JOIN emissione_bvoc ON lista_specie.id = emissione_bvoc.id_specie
            JOIN esigenza_fert_suolo ON lista_specie.id = esigenza_fert_suolo.id_specie
            JOIN fascia_fitosclimatica ON lista_specie.id = fascia_fitosclimatica.id_specie
            JOIN gruppo ON lista_specie.id = gruppo.id_specie
            JOIN manutenzione ON lista_specie.id = manutenzione.id_specie
            JOIN maturita_pianta ON lista_specie.id = maturita_pianta.id_specie
            JOIN persistenza_foglia ON lista_specie.id = persistenza_foglia.id_specie
            JOIN ph ON lista_specie.id = ph.id_specie
            JOIN portamento ON lista_specie.id = portamento.id_specie
            JOIN res_alte_temp ON lista_specie.id = res_alte_temp.id_specie
            JOIN res_gelate ON lista_specie.id = res_gelate.id_specie
            JOIN res_malattie ON lista_specie.id = res_malattie.id_specie
            JOIN res_siccita ON lista_specie.id = res_siccita.id_specie
            JOIN servizi_ecosistemici ON lista_specie.id = servizi_ecosistemici.id_specie
            JOIN specie_allergenica ON lista_specie.id = specie_allergenica.id_specie
            JOIN strutture_urbane_limistrofe ON lista_specie.id = strutture_urbane_limistrofe.id_specie
            JOIN tipologia ON lista_specie.id = tipologia.id_specie
            JOIN tipologia_suolo ON lista_specie.id = tipologia_suolo.id_specie
            JOIN ubicazione_urbanistica ON lista_specie.id = ubicazione_urbanistica.id_specie
            JOIN vel_accrescimento ON lista_specie.id = vel_accrescimento.id_specie;";





$risultato_piante = mysqli_query($conn, $query_piante);
// if (!$risultato_piante) {
//     die('Errore nell\'esecuzione della query: ' . mysqli_error($conn));
// }

while ($row_piante = mysqli_fetch_assoc($risultato_piante)) {
    $myArray[] = $row_piante;
}



echo json_encode($myArray);
