// ASSOCIAZIONE BOX INPUT


const body = document.getElementById("body");
const nav = document.getElementById("navbar");
const boxFiltri = document.getElementById("box-filtri");
const boxBtn = document.getElementById("box-btn");
const corpoPagina = document.getElementById("corpo-pagina");
const strutturaPagina = document.getElementById("struttura-pagina");
const divTable = document.getElementById("div-tabella");
const table = document.getElementById("table");
const tbody = document.getElementById("tbody");
const risRicerca = document.getElementById("ris-ricerca");
const listaFiltri = document.getElementById("lista-filtri");



// ASSOCIAZIONE BOTTONI PRIMO BOX
const btnFiltri = document.getElementById("btn-filtri");
const btnReset = document.getElementById("btn-reset");
const btnCerca = document.getElementById("btn-cerca");

// ASSOCIAZIONE SELECT
const selClima = document.getElementById("clima");
const selTipoSuolo = document.getElementById("tipologia_suolo");

// ASSOCIAZIONE ARRAY
let filteredArray = [];
var arrayIntero = [];

// DISATTICA BTN CERCA
btnReset.addEventListener("click", function () {
    btnCerca.setAttribute("disabled", "");
    btnFiltri.setAttribute("disabled", "");
    boxFiltri.classList.add("invisibile");
});

// ATTIVA-DISATTIVA BTN CERCA E FILTRO
if (selClima.value == "" && selTipoSuolo.value == "") {
    btnCerca.setAttribute("disabled", "");
    btnFiltri.setAttribute("disabled", "");
    boxFiltri.classList.add("invisibile");
} else {
    btnCerca.removeAttribute("disabled");
    btnFiltri.removeAttribute("disabled");
}

// ATTIVA-DISATTIVA BTN CERCA E FILTRO
selClima.addEventListener("change", function () {
    btnCerca.removeAttribute("disabled");
    btnFiltri.removeAttribute("disabled");
    if (selClima.value == "" && selTipoSuolo.value == "") {
        btnCerca.setAttribute("disabled", "");
        btnFiltri.setAttribute("disabled", "");
        boxFiltri.classList.add("invisibile");
    }
});

// ATTIVA-DISATTIVA BTN CERCA E FILTRO
selTipoSuolo.addEventListener("change", function () {
    btnCerca.removeAttribute("disabled");
    btnFiltri.removeAttribute("disabled");
    if (selClima.value == "" && selTipoSuolo.value == "") {
        btnCerca.setAttribute("disabled", "");
        btnFiltri.setAttribute("disabled", "");
        boxFiltri.classList.add("invisibile");
    }
});

// CHIAMATA FETCH DELLE PIANTE
fetch("includes/json.php")
    .then((response) => response.json())
    .then((piante) => {
        piante = piante.forEach((element) => {
            arrayIntero.push(element);
        });
    });

// PRIMO CLICK SU FILTRA, ATTIVA LA PRIMA BOX AGGIUNTIVA DI RICERCA E FILTRA L'ARRRAY TOTALE
btnFiltri.addEventListener("click", function () {
    boxFiltri.classList.remove("invisibile");

    // CONTROLLO SE è SETTATO IL VALORE DEL CLIMA
    if (selClima.value != "") {
        filteredArray = arrayIntero.filter((item) => item[selClima.value] == 1);
    }

    // FACCIO UN CONTROLLO SU QUALE ARRAY SI DOVRA' FILTRARE IL SUOLO, SE PER SUL JSON INTERO O PARZIALE
    if (filteredArray.length > 0) {
        if (selTipoSuolo.value != "") {
            filteredArray = filteredArray.filter((item) => item[selTipoSuolo.value] == 1);
        }
    } else {
        if (selTipoSuolo.value != "") {
            filteredArray = arrayIntero.filter((item) => item[selTipoSuolo.value] == 1);
        }
    }
    
    boxFiltri.scrollIntoView({ behavior: 'smooth' });
    console.log(filteredArray);
});

// --------------------------------------------------------------------------------------------------------------

// ASSOCIAZIONI BOTTONI HABITAT BOX
const btnFiltriHabitat = document.getElementById("btn-filtri-habitat");
const btnResetHabitat = document.getElementById("btn-reset-habitat");
const btnCercaHabitat = document.getElementById("btn-cerca-habitat");

// ASSOCIAZIONE SELECT HABITAT
const selPh = document.getElementById("ph");
const selEsigenzaSuolo = document.getElementById("esigenza_suolo");
const selAutoctona = document.getElementById("autoctona");

// console.log(selPh.value);
// console.log(selEsigenzaSuolo.value);
// console.log(selAutoctona.value);

if (selPh.value == "" && selEsigenzaSuolo.value == "" && selAutoctona.value == "") {
    btnCercaHabitat.setAttribute("disabled", "");
    btnFiltriHabitat.setAttribute("disabled", "");

} else {
    btnCercaHabitat.removeAttribute("disabled");
    btnFiltriHabitat.removeAttribute("disabled");
}


// ATTIVA-DISATTIVA BTN CERCA E FILTRO
selPh.addEventListener("change", function () {
    btnCercaHabitat.removeAttribute("disabled");
    btnFiltriHabitat.removeAttribute("disabled");
    if (selPh.value == "" && selEsigenzaSuolo.value == "" && selAutoctona.value == "") {
        btnCercaHabitat.setAttribute("disabled", "");
        btnFiltriHabitat.setAttribute("disabled", "");
    }
});

// ATTIVA-DISATTIVA BTN CERCA E FILTRO
selEsigenzaSuolo.addEventListener("change", function () {
    btnCercaHabitat.removeAttribute("disabled");
    btnFiltriHabitat.removeAttribute("disabled");
    if (selPh.value == "" && selEsigenzaSuolo.value == "" && selAutoctona.value == "") {
        btnCercaHabitat.setAttribute("disabled", "");
        btnFiltriHabitat.setAttribute("disabled", "");
    }
});

// ATTIVA-DISATTIVA BTN CERCA E FILTRO
selAutoctona.addEventListener("change", function () {
    btnCercaHabitat.removeAttribute("disabled");
    btnFiltriHabitat.removeAttribute("disabled");
    if (selPh.value == "" && selEsigenzaSuolo.value == "" && selAutoctona.value == "") {
        btnCercaHabitat.setAttribute("disabled", "");
        btnFiltriHabitat.setAttribute("disabled", "");
    }
});

// CLICK RESET
btnResetHabitat.addEventListener("click", function () {
    btnCercaHabitat.setAttribute("disabled", "");
    btnFiltriHabitat.setAttribute("disabled", "");
})



// MAGIA AL TASTO CERCA
// btnCercaHabitat.addEventListener("click", function () {
//     body.classList.add("body2");
//     corpoPagina.classList.add("invisibile");
//     divTable.classList.remove("invisibile");

//     console.log(filteredArray);

//     risRicerca.innerHTML = filteredArray.length;

//     filteredArray.forEach(pianta => {
//         let trow = document.createElement("tr");
//         tbody.append(trow);

//         let nomeComune = document.createElement("td");
//         nomeComune.innerHTML = "<strong>" + pianta['nome_comune'] + "</strong>";
//         trow.append(nomeComune);

//         let apparatoRadicale = document.createElement("td");
//         if (pianta["profondo"] == 1) {
//             apparatoRadicale.innerHTML = "profondo";
//         } else {
//             apparatoRadicale.innerHTML = "superficiale";
//         };
//         trow.append(apparatoRadicale);

//         let autoctona = document.createElement("td");
//         if (pianta["autoctona_si"] == 1) {
//             autoctona.innerHTML = "si";
//         } else {
//             autoctona.innerHTML = "no";
//         };
//         trow.append(autoctona);

//         let categoria = document.createElement("td");
//         if (pianta["caducifoglia"] == 1) {
//             categoria.innerHTML = "caducifoglia";
//         } else {
//             categoria.innerHTML = "sempreverde";
//         };
//         trow.append(categoria);

//         let costoFornitura = document.createElement("td");
//         costoFornitura.innerHTML = pianta["costo_min"] + ' - ' + pianta["costo_max"];
//         trow.append(costoFornitura);

//         let densitaChioma = document.createElement("td");
//         if (pianta["densita_bassa"] == 1) {
//             densitaChioma.innerHTML = "bassa";
//         };

//         if (pianta["densita_media"] == 1) {
//             densitaChioma.innerHTML = "media";
//         };

//         if (pianta["densita_alta"] == 1) {
//             densitaChioma.innerHTML = "alta";
//         };
//         trow.append(densitaChioma);


//         let dimensioneFoglie = document.createElement("td");
//         dimensioneFoglie.innerHTML = "lunghezza: " + pianta["dimensione_lung"] + "  larghezza: " + pianta["dimensione_larg"];
//         trow.append(dimensioneFoglie);


//         let emissioneBvoc = document.createElement("td");
//         if (pianta["emissione_no"] == 1) {
//             emissioneBvoc.innerHTML = "no";
//         };

//         if (pianta["si_preval_isoprene"] == 1) {
//             emissioneBvoc.innerHTML = "isoprene";
//         };

//         if (pianta["si_preval_monoterpene"] == 1) {
//             emissioneBvoc.innerHTML = "monoterpene";
//         };
//         trow.append(emissioneBvoc);

//         let esigenzaSuolo = document.createElement("td");
//         if (pianta["esigenza_bassa"] == 1) {
//             esigenzaSuolo.innerHTML = "bassa";
//         };

//         if (pianta["esigenza_media"] == 1) {
//             esigenzaSuolo.innerHTML = "media";
//         };

//         if (pianta["esigenza_alta"] == 1) {
//             esigenzaSuolo.innerHTML = "alta";
//         };
//         trow.append(esigenzaSuolo);

//         let fasciaFitosclimatica = document.createElement("td");
//         if (pianta["lauretum"] == 1) {
//             fasciaFitosclimatica.innerHTML = "lauretum, ";
//         };

//         if (pianta["castanetum"] == 1) {
//             fasciaFitosclimatica.innerHTML += "castanetum, ";
//         };

//         if (pianta["fagetum"] == 1) {
//             fasciaFitosclimatica.innerHTML += "fagetum, ";
//         };

//         if (pianta["picetum"] == 1) {
//             fasciaFitosclimatica.innerHTML += "picetum, ";
//         };

//         if (pianta["alpinetum"] == 1) {
//             fasciaFitosclimatica.innerHTML += "alpinetum";
//         };
//         trow.append(fasciaFitosclimatica);



//         let gruppo = document.createElement("td");
//         if (pianta["latifoglie"] == 1) {
//             gruppo.innerHTML = "latifoglie";
//         } else {
//             gruppo.innerHTML = "conifere";
//         };
//         trow.append(gruppo);



//         let manutenzione = document.createElement("td");
//         if (pianta["manutenzione_bassa"] == 1) {
//             manutenzione.innerHTML = "bassa";
//         };

//         if (pianta["manutenzione_media"] == 1) {
//             manutenzione.innerHTML = "media";
//         };

//         if (pianta["manutenzione_alta"] == 1) {
//             manutenzione.innerHTML = "alta";
//         };
//         trow.append(manutenzione);

//         let maturitaPianta = document.createElement("td");
//         maturitaPianta.innerHTML = "altezza totale:  " + pianta["altezza_totale"] + ", <br> ";
//         maturitaPianta.innerHTML += "altezza chioma: " + pianta["altezza_chioma"] + ",<br> ";
//         maturitaPianta.innerHTML += "diametro chioma: " + pianta["diametro_chioma"] + ",<br> ";
//         maturitaPianta.innerHTML += "diametro fusto: " + pianta["diametro_fusto"];
//         trow.append(maturitaPianta);


//         let persistenzaFoglia = document.createElement("td");
//         persistenzaFoglia.innerHTML = pianta["classe_persistenza"];
//         trow.append(persistenzaFoglia);

//         let ph = document.createElement("td");
//         if (pianta["acido"] == 1) {
//             ph.innerHTML = "acido";
//         };

//         if (pianta["neutro"] == 1) {
//             ph.innerHTML = "neutro";
//         };

//         if (pianta["alcalino"] == 1) {
//             ph.innerHTML = "alcalino";
//         };
//         trow.append(ph);


//         let portamento = document.createElement("td");
//         portamento.innerHTML = pianta["portamento"];
//         trow.append(portamento);


//         let resTempAlte = document.createElement("td");
//         if (pianta["res_temp_bassa"] == 1) {
//             resTempAlte.innerHTML = "bassa";
//         };

//         if (pianta["res_temp_media"] == 1) {
//             resTempAlte.innerHTML = "media";
//         };

//         if (pianta["res_temp_buona"] == 1) {
//             resTempAlte.innerHTML = "buona";
//         };
//         trow.appendChild(resTempAlte);




//         let resGelate = document.createElement("td");
//         if (pianta["res_gelo_bassa"] == 1) {
//             resGelate.innerHTML = "bassa";
//         };

//         if (pianta["res_gelo_media"] == 1) {
//             resGelate.innerHTML = "media";
//         };

//         if (pianta["res_gelo_buona"] == 1) {
//             resGelate.innerHTML = "buona";
//         };
//         trow.appendChild(resGelate);




//         let resMalattie = document.createElement("td");
//         if (pianta["res_mal_bassa"] == 1) {
//             resMalattie.innerHTML = "bassa";
//         };

//         if (pianta["res_mal_media"] == 1) {
//             resMalattie.innerHTML = "media";
//         };

//         if (pianta["res_mal_buona"] == 1) {
//             resMalattie.innerHTML = "buona";
//         };
//         trow.appendChild(resMalattie);





//         let resSiccita = document.createElement("td");
//         if (pianta["res_sic_bassa"] == 1) {
//             resSiccita.innerHTML = "bassa";
//         };

//         if (pianta["res_sic_media"] == 1) {
//             resSiccita.innerHTML = "media";
//         };

//         if (pianta["res_sic_buona"] == 1) {
//             resSiccita.innerHTML = "buona";
//         };
//         trow.appendChild(resSiccita);


//         let serviziEcosistemici = document.createElement("td");
//         if (pianta["assorbimento_particolato"] == 1) {
//             serviziEcosistemici.innerHTML = "assorbimento particolato, ";
//         };

//         if (pianta["assorbimento_ozono_atoto"] == 1) {
//             serviziEcosistemici.innerHTML += "asssorbimento ozono e azoto, ";
//         };

//         if (pianta["assorbimento_co2"] == 1) {
//             serviziEcosistemici.innerHTML += "assorbimento co2, ";
//         };

//         if (pianta["miglioramento_termico"] == 1) {
//             serviziEcosistemici.innerHTML += "miglioramento termico, ";
//         };

//         if (pianta["miglioramento_acustico"] == 1) {
//             serviziEcosistemici.innerHTML += "miglioramento acustico";
//         };
//         trow.appendChild(serviziEcosistemici);


//         let specieAllergienica = document.createElement("td");
//         if (pianta["allergia_si"] == 1) {
//             specieAllergienica.innerHTML = "si";
//         };

//         if (pianta["allergia_no"] == 1) {
//             specieAllergienica.innerHTML = "no";
//         };
//         trow.appendChild(specieAllergienica);



//         let struttureUrbaneLimitrofe = document.createElement("td");
//         if (pianta["marciapiede"] == 1) {
//             struttureUrbaneLimitrofe.innerHTML = "marciapiede, ";
//         };

//         if (pianta["strada"] == 1) {
//             struttureUrbaneLimitrofe.innerHTML += "strada, ";
//         };

//         if (pianta["servizi_sotterranei_fornitura"] == 1) {
//             struttureUrbaneLimitrofe.innerHTML += "fornitura servizi sotterranei, ";
//         };

//         if (pianta["balconi_pensili"] == 1) {
//             struttureUrbaneLimitrofe.innerHTML += "balconi pensili";
//         };
//         trow.appendChild(struttureUrbaneLimitrofe);




//         let tipologia = document.createElement("td");
//         if (pianta["cespuglio_arbusto"] == 1) {
//             tipologia.innerHTML = "cespuglio arbusto, ";
//         };

//         if (pianta["albero"] == 1) {
//             tipologia.innerHTML += "albero, ";
//         };

//         if (pianta["grande_albero"] == 1) {
//             tipologia.innerHTML += "grande albero, ";
//         };
//         trow.appendChild(tipologia);




//         let tipo_suolo = document.createElement("td");
//         if (pianta["argilloso"] == 1) {
//             tipo_suolo.innerHTML = "argilloso, ";
//         };

//         if (pianta["limoso"] == 1) {
//             tipo_suolo.innerHTML = "limoso, ";
//         };

//         if (pianta["sabbioso"] == 1) {
//             tipo_suolo.innerHTML = "sabbioso ";
//         };
//         trow.appendChild(tipo_suolo);


//         let ubicazioneUrbanistica = document.createElement("td");
//         if (pianta["parco_giardino"] == 1) {
//             ubicazioneUrbanistica.innerHTML = "parco giardino, ";
//         };

//         if (pianta["strade_viali"] == 1) {
//             ubicazioneUrbanistica.innerHTML += "strade viali, ";
//         };

//         if (pianta["laghi_corsiacqua"] == 1) {
//             ubicazioneUrbanistica.innerHTML += "laghi corsi acqua, ";
//         };

//         if (pianta["cimitero"] == 1) {
//             ubicazioneUrbanistica.innerHTML += "cimitero";
//         };
//         trow.appendChild(ubicazioneUrbanistica);


//         let velCrescita = document.createElement("td");
//         if (pianta["lenta"] == 1) {
//             velCrescita.innerHTML = "lenta";
//         };

//         if (pianta["media"] == 1) {
//             velCrescita.innerHTML = "media";
//         };

//         if (pianta["alta"] == 1) {
//             velCrescita.innerHTML = "alta";
//         };
//         trow.appendChild(velCrescita);

//     });

//     nav.scrollIntoView({ behavior: 'smooth' });
// });


let arrayPh = [];
let arrayEsigSuolo = [];
let arrayAutoctona = [];

btnCercaHabitat.addEventListener("click", function () {
    listaFiltri.innerHTML = selClima.value + " " + selTipoSuolo.value + " " + selPh.value + " " + selEsigenzaSuolo.value + " " + selAutoctona.value;


    // CONTROLLO SE è SETTATO IL VALORE DEL CLIMA
    if (selPh.value != "") {
        arrayPh = filteredArray.filter((item) => item[selPh.value] == 1);
        console.log(selPh.value);
        console.log(selEsigenzaSuolo.value);
        console.log(selAutoctona.value);
        console.log(arrayPh);
    }

    // FACCIO UN CONTROLLO SU QUALE ARRAY SI DOVRA' FILTRARE IL SUOLO, SE PER SUL JSON INTERO O PARZIALE
    if (arrayPh.length > 0) {
        if (selEsigenzaSuolo.value != "") {
            arrayEsigSuolo = arrayPh.filter((item) => item[selEsigenzaSuolo.value] == 1);
            console.log(selPh.value);
            console.log(selEsigenzaSuolo.value);
            console.log(selAutoctona.value);
            console.log(arrayEsigSuolo);
        }
    } else {
        if (selEsigenzaSuolo.value != "") {
            arrayEsigSuolo = filteredArray.filter((item) => item[selEsigenzaSuolo.value] == 1);
            console.log(selPh.value);
            console.log(selEsigenzaSuolo.value);
            console.log(selAutoctona.value);
            console.log(arrayEsigSuolo);
        }
    }

    // FACCIO UN CONTROLLO SU QUALE ARRAY SI DOVRA' FILTRARE IL SUOLO, SE PER SUL JSON INTERO O PARZIALE
    if (arrayPh.length > 0 && arrayEsigSuolo.length == 0) {
        if (selAutoctona.value != "") {
            arrayAutoctona = arrayPh.filter((item) => item[selAutoctona.value] == 1);
            console.log(selPh.value);
            console.log(selEsigenzaSuolo.value);
            console.log(selAutoctona.value);
            console.log(arrayAutoctona);
        }
    } else {
        if (arrayEsigSuolo.length > 0) {
            if (selAutoctona.value != "") {
                arrayAutoctona = arrayEsigSuolo.filter((item) => item[selAutoctona.value] == 1);
                console.log(selPh.value);
                console.log(selEsigenzaSuolo.value);
                console.log(selAutoctona.value);
                console.log(arrayAutoctona);
            }
        } else {
            if (selAutoctona.value != "") {
                arrayAutoctona = filteredArray.filter((item) => item[selAutoctona.value] == 1);
                console.log(selPh.value);
                console.log(selEsigenzaSuolo.value);
                console.log(selAutoctona.value);
                console.log(arrayAutoctona);
            }
        }
    }

    let filtraggioAttivatoArray = [];

    body.classList.add("body2");
    corpoPagina.classList.add("invisibile");
    divTable.classList.remove("invisibile");

    if (arrayPh.length > 0) {
        filtraggioAttivatoArray = arrayPh;
    };

    if (arrayEsigSuolo.length > 0) {
        filtraggioAttivatoArray = arrayEsigSuolo;
    };

    if (arrayAutoctona.length > 0) {
        filtraggioAttivatoArray = arrayAutoctona;
    };

    risRicerca.innerHTML = filtraggioAttivatoArray.length;

    filtraggioAttivatoArray.forEach(pianta => {
        let trow = document.createElement("tr");
        tbody.append(trow);

        let nomeComune = document.createElement("td");
        nomeComune.innerHTML = "<strong>" + pianta['nome_comune'] + "</strong>";
        trow.append(nomeComune);

        let apparatoRadicale = document.createElement("td");
        if (pianta["profondo"] == 1) {
            apparatoRadicale.innerHTML = "profondo";
        } else {
            apparatoRadicale.innerHTML = "superficiale";
        };
        trow.append(apparatoRadicale);

        let autoctona = document.createElement("td");
        if (pianta["autoctona_si"] == 1) {
            autoctona.innerHTML = "si";
        } else {
            autoctona.innerHTML = "no";
        };
        trow.append(autoctona);

        let categoria = document.createElement("td");
        if (pianta["caducifoglia"] == 1) {
            categoria.innerHTML = "caducifoglia";
        } else {
            categoria.innerHTML = "sempreverde";
        };
        trow.append(categoria);

        let costoFornitura = document.createElement("td");
        costoFornitura.innerHTML = pianta["costo_min"] + ' - ' + pianta["costo_max"];
        trow.append(costoFornitura);

        let densitaChioma = document.createElement("td");
        if (pianta["densita_bassa"] == 1) {
            densitaChioma.innerHTML = "bassa";
        };

        if (pianta["densita_media"] == 1) {
            densitaChioma.innerHTML = "media";
        };

        if (pianta["densita_alta"] == 1) {
            densitaChioma.innerHTML = "alta";
        };
        trow.append(densitaChioma);


        let dimensioneFoglie = document.createElement("td");
        dimensioneFoglie.innerHTML = "lunghezza: " + pianta["dimensione_lung"] + "  larghezza: " + pianta["dimensione_larg"];
        trow.append(dimensioneFoglie);


        let emissioneBvoc = document.createElement("td");
        if (pianta["emissione_no"] == 1) {
            emissioneBvoc.innerHTML = "no";
        };

        if (pianta["si_preval_isoprene"] == 1) {
            emissioneBvoc.innerHTML = "isoprene";
        };

        if (pianta["si_preval_monoterpene"] == 1) {
            emissioneBvoc.innerHTML = "monoterpene";
        };
        trow.append(emissioneBvoc);

        let esigenzaSuolo = document.createElement("td");
        if (pianta["esigenza_bassa"] == 1) {
            esigenzaSuolo.innerHTML = "bassa";
        };

        if (pianta["esigenza_media"] == 1) {
            esigenzaSuolo.innerHTML = "media";
        };

        if (pianta["esigenza_alta"] == 1) {
            esigenzaSuolo.innerHTML = "alta";
        };
        trow.append(esigenzaSuolo);

        let fasciaFitosclimatica = document.createElement("td");
        if (pianta["lauretum"] == 1) {
            fasciaFitosclimatica.innerHTML = "lauretum, ";
        };

        if (pianta["castanetum"] == 1) {
            fasciaFitosclimatica.innerHTML += "castanetum, ";
        };

        if (pianta["fagetum"] == 1) {
            fasciaFitosclimatica.innerHTML += "fagetum, ";
        };

        if (pianta["picetum"] == 1) {
            fasciaFitosclimatica.innerHTML += "picetum, ";
        };

        if (pianta["alpinetum"] == 1) {
            fasciaFitosclimatica.innerHTML += "alpinetum";
        };
        trow.append(fasciaFitosclimatica);



        let gruppo = document.createElement("td");
        if (pianta["latifoglie"] == 1) {
            gruppo.innerHTML = "latifoglie";
        } else {
            gruppo.innerHTML = "conifere";
        };
        trow.append(gruppo);



        let manutenzione = document.createElement("td");
        if (pianta["manutenzione_bassa"] == 1) {
            manutenzione.innerHTML = "bassa";
        };

        if (pianta["manutenzione_media"] == 1) {
            manutenzione.innerHTML = "media";
        };

        if (pianta["manutenzione_alta"] == 1) {
            manutenzione.innerHTML = "alta";
        };
        trow.append(manutenzione);

        let maturitaPianta = document.createElement("td");
        maturitaPianta.innerHTML = "altezza totale:  " + pianta["altezza_totale"] + ", <br> ";
        maturitaPianta.innerHTML += "altezza chioma: " + pianta["altezza_chioma"] + ",<br> ";
        maturitaPianta.innerHTML += "diametro chioma: " + pianta["diametro_chioma"] + ",<br> ";
        maturitaPianta.innerHTML += "diametro fusto: " + pianta["diametro_fusto"];
        trow.append(maturitaPianta);


        let persistenzaFoglia = document.createElement("td");
        persistenzaFoglia.innerHTML = pianta["classe_persistenza"];
        trow.append(persistenzaFoglia);

        let ph = document.createElement("td");
        if (pianta["acido"] == 1) {
            ph.innerHTML = "acido";
        };

        if (pianta["neutro"] == 1) {
            ph.innerHTML = "neutro";
        };

        if (pianta["alcalino"] == 1) {
            ph.innerHTML = "alcalino";
        };
        trow.append(ph);


        let portamento = document.createElement("td");
        portamento.innerHTML = pianta["portamento"];
        trow.append(portamento);


        let resTempAlte = document.createElement("td");
        if (pianta["res_temp_bassa"] == 1) {
            resTempAlte.innerHTML = "bassa";
        };

        if (pianta["res_temp_media"] == 1) {
            resTempAlte.innerHTML = "media";
        };

        if (pianta["res_temp_buona"] == 1) {
            resTempAlte.innerHTML = "buona";
        };
        trow.appendChild(resTempAlte);




        let resGelate = document.createElement("td");
        if (pianta["res_gelo_bassa"] == 1) {
            resGelate.innerHTML = "bassa";
        };

        if (pianta["res_gelo_media"] == 1) {
            resGelate.innerHTML = "media";
        };

        if (pianta["res_gelo_buona"] == 1) {
            resGelate.innerHTML = "buona";
        };
        trow.appendChild(resGelate);




        let resMalattie = document.createElement("td");
        if (pianta["res_mal_bassa"] == 1) {
            resMalattie.innerHTML = "bassa";
        };

        if (pianta["res_mal_media"] == 1) {
            resMalattie.innerHTML = "media";
        };

        if (pianta["res_mal_buona"] == 1) {
            resMalattie.innerHTML = "buona";
        };
        trow.appendChild(resMalattie);





        let resSiccita = document.createElement("td");
        if (pianta["res_sic_bassa"] == 1) {
            resSiccita.innerHTML = "bassa";
        };

        if (pianta["res_sic_media"] == 1) {
            resSiccita.innerHTML = "media";
        };

        if (pianta["res_sic_buona"] == 1) {
            resSiccita.innerHTML = "buona";
        };
        trow.appendChild(resSiccita);


        let serviziEcosistemici = document.createElement("td");
        if (pianta["assorbimento_particolato"] == 1) {
            serviziEcosistemici.innerHTML = "assorbimento particolato, ";
        };

        if (pianta["assorbimento_ozono_atoto"] == 1) {
            serviziEcosistemici.innerHTML += "asssorbimento ozono e azoto, ";
        };

        if (pianta["assorbimento_co2"] == 1) {
            serviziEcosistemici.innerHTML += "assorbimento co2, ";
        };

        if (pianta["miglioramento_termico"] == 1) {
            serviziEcosistemici.innerHTML += "miglioramento termico, ";
        };

        if (pianta["miglioramento_acustico"] == 1) {
            serviziEcosistemici.innerHTML += "miglioramento acustico";
        };
        trow.appendChild(serviziEcosistemici);


        let specieAllergienica = document.createElement("td");
        if (pianta["allergia_si"] == 1) {
            specieAllergienica.innerHTML = "si";
        };

        if (pianta["allergia_no"] == 1) {
            specieAllergienica.innerHTML = "no";
        };
        trow.appendChild(specieAllergienica);



        let struttureUrbaneLimitrofe = document.createElement("td");
        if (pianta["marciapiede"] == 1) {
            struttureUrbaneLimitrofe.innerHTML = "marciapiede, ";
        };

        if (pianta["strada"] == 1) {
            struttureUrbaneLimitrofe.innerHTML += "strada, ";
        };

        if (pianta["servizi_sotterranei_fornitura"] == 1) {
            struttureUrbaneLimitrofe.innerHTML += "fornitura servizi sotterranei, ";
        };

        if (pianta["balconi_pensili"] == 1) {
            struttureUrbaneLimitrofe.innerHTML += "balconi pensili";
        };
        trow.appendChild(struttureUrbaneLimitrofe);




        let tipologia = document.createElement("td");
        if (pianta["cespuglio_arbusto"] == 1) {
            tipologia.innerHTML = "cespuglio arbusto, ";
        };

        if (pianta["albero"] == 1) {
            tipologia.innerHTML += "albero, ";
        };

        if (pianta["grande_albero"] == 1) {
            tipologia.innerHTML += "grande albero, ";
        };
        trow.appendChild(tipologia);




        let tipo_suolo = document.createElement("td");
        if (pianta["argilloso"] == 1) {
            tipo_suolo.innerHTML = "argilloso, ";
        };

        if (pianta["limoso"] == 1) {
            tipo_suolo.innerHTML = "limoso, ";
        };

        if (pianta["sabbioso"] == 1) {
            tipo_suolo.innerHTML = "sabbioso ";
        };
        trow.appendChild(tipo_suolo);


        let ubicazioneUrbanistica = document.createElement("td");
        if (pianta["parco_giardino"] == 1) {
            ubicazioneUrbanistica.innerHTML = "parco giardino, ";
        };

        if (pianta["strade_viali"] == 1) {
            ubicazioneUrbanistica.innerHTML += "strade viali, ";
        };

        if (pianta["laghi_corsiacqua"] == 1) {
            ubicazioneUrbanistica.innerHTML += "laghi corsi acqua, ";
        };

        if (pianta["cimitero"] == 1) {
            ubicazioneUrbanistica.innerHTML += "cimitero";
        };
        trow.appendChild(ubicazioneUrbanistica);


        let velCrescita = document.createElement("td");
        if (pianta["lenta"] == 1) {
            velCrescita.innerHTML = "lenta";
        };

        if (pianta["media"] == 1) {
            velCrescita.innerHTML = "media";
        };

        if (pianta["alta"] == 1) {
            velCrescita.innerHTML = "alta";
        };
        trow.appendChild(velCrescita);



        nav.scrollIntoView({ behavior: 'smooth' });
    });

});

