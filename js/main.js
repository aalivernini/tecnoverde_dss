$(document).ready(function() {






    $('body *').not('[class],[id]').each(function() {
        $(this).html(function(i, html) {
            return html.replace(/_/g, ' ');
        });
    });


    $("#myTable").css("display", "none");

    var arrayIntero = [];



    fetch("includes/json.php")
        .then((response) => response.json())
        .then((piante) => {

            var piante = piante.forEach((element) => {
                arrayIntero.push(element);


                // console.log(arrayIntero)

            });
        });

    console.log(arrayIntero.length)

    var valoriSelezionati = []; // lista dei valori selezionati
    var myfilteredArray = [];
    var selectedValues = [];
    var oggettiFiltrati = [];

    var selectClima = $('#clima').val();
    var selectTipSuolo = $('#tipologia_suolo').val();
    var selectPh = $('#ph').val();
    var selectEsigSuolo = $('#esigenza_suolo').val();
    var selectAutoctona = $('#autoctona').val();
    var selectResSiccita = $('#res_siccita').val();
    var selectResAlteTemp = $('#res_alte_temp').val();
    var selectResGelate = $('#res_gelate').val();
    var selectResMalattie = $('#res_malattie').val();
    var selectGruppo = $('#gruppo').val();
    var selectCategoria = $('#catagoria').val();
    var selectVelAccrescimento = $('#vel_accrescimento').val();
    var selectDimFoglia = $('#dimensione_foglie').val();
    var selectTipologia = $('#tipologia').val();
    var selectDensChioma = $('#densità_chioma').val();
    var selectAppRadicale = $('#apparato_radicale').val();
    var selectSpecieAllerg = $('#specie_allergenica').val();
    var selectEmissBvoc = $('#emissione_bvoc').val();
    var selectUbicazioneUrb = $('#ubicazione_urbanistica').val();
    var selectStruttUrbLim = $('#strutture_urbane_limitrofe').val();
    var selectManutenzione = $('#manutenzione').val();
    var selectSerEco = $('#servizi_ecosistemici').val();

    const nav = document.getElementById("navbar");

    $('.selected-filter').on('click', '.selezionato', function() {
        if (valoriSelezionati.length === 0) {
            $('.delete_all_filters').hide();
            $(".selected-filter").hide();
        }
    })


    // Mostra la didascalia al click sull'icona "i"
    $('.icon-info').click(function() {
        // Chiudi il pop-up precedente
        $('.info-tooltip').not($(this).find('.info-tooltip')).hide();

        $(this).find('.info-tooltip').show();

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.icon-info').length && !$(event.target).is('.info-tooltip')) {
                $('.info-tooltip').hide();
            }
        });
    });





    $("#myForm").submit(function(event) {
        event.preventDefault(); // Previeni il comportamento predefinito del form

        $("#corpo-pagina").css("display", "none");
        $(".divTable").css("display", "block");
        $("#myTable").css("display", "block");

        if ($('#myTable').is(':visible')) {
            $('html').css('background-color', 'lightyellow');
        }


        var table = $('#myTable');
        var $headerRow = $('#myTable thead tr');
        var header = ["lista specie", "nome scientifico", "actaplantarum", "flora d'italia", "euforgen", "apparato radicale", "autoctona", "categoria", "costo fornitura", "densità chioma", "dimensione foglie", "emissione bvoc", "esigenza fertilità suolo", "fascia fitosclimatica", "gruppo", "manutenzione", "maturità pianta", "persistenza foglia", "ph", "portamento", "resistenza alte temperature", "resistenza gelate", "resistenza malattie", "resistenza siccità", "servizi ecosistemici", "specie allergenica", "strutture urbane limistrofe", "tipologia", "tipologia suolo", "ubicazione urbanistica", "velocità accrescimento"]
        // console.log(oggettiFiltrati)

        const tbody = document.getElementById("tbody");
        // nasconde il corpo della pagina

        // aggiunge le colonne dell'header alla tabella
        $.each(header, function(index, value) {
            $headerRow.append('<th>' + value + '</th>');
        });
        $('#result').html('Trovati <strong>' + oggettiFiltrati.length + '</strong> record');

        if (valoriSelezionati.length > 0) {
            $('#showFilter').text('Filtri applicati: ');

            valoriSelezionati.forEach(function(elemento, indice) {
                const filtriHTMLString = '<strong>' + elemento + '</strong>';
                $('#showFilter').append(filtriHTMLString);

                if (indice !== valoriSelezionati.length - 1) {
                    $('#showFilter').append(", ");
                } else {
                    $('#showFilter').append(" ");
                }
            });
        }

        oggettiFiltrati.forEach(pianta => {
            let trow = document.createElement("tr");
            tbody.append(trow);

            let nomeComune = document.createElement("td");
            nomeComune.innerHTML = "<strong>" + pianta['nome_comune'] + "</strong>";
            trow.append(nomeComune);



            let nomeScientifico = document.createElement("td");
            let nomeScientificoModificato = pianta['nome_scientifico'].charAt(0).toUpperCase() + pianta['nome_scientifico'].slice(1).toLowerCase();
            nomeScientifico.innerHTML = "<i><strong>" + nomeScientificoModificato + "</strong></i>";

            // Rimuovere text-transform: uppercase dal td
            nomeScientifico.style.textTransform = "none";

            // rimuovi text-transform: capitalize al tag i
            let tagI = nomeScientifico.querySelector("i");
            tagI.style.textTransform = "none";

            trow.append(nomeScientifico);

            let linkACTAPLANTARUM = document.createElement("td");
            if (pianta['ACTAPLANTARUM'] && pianta['ACTAPLANTARUM'] !== '') {
                linkACTAPLANTARUM.innerHTML = "<a href='" + pianta['ACTAPLANTARUM'] +
                    "' target='_blank'><span>Scopri di più su www.actaplantarum.org</span></a>";
            } else {
                linkACTAPLANTARUM.innerText = 'LINK NON DISPONIBILE';
            }
            trow.append(linkACTAPLANTARUM);

            let linkFLORADITALIA = document.createElement("td");
            if (pianta['FLORADITALIA'] && pianta['FLORADITALIA'] !== '') {
                linkFLORADITALIA.innerHTML = "<a href='" + pianta['FLORADITALIA'] +
                    "' target='_blank'><span>Scopri di più su www.dryades.units.it.org</span></a>";
            } else {
                linkFLORADITALIA.innerText = 'LINK NON DISPONIBILE';
            }
            trow.append(linkFLORADITALIA);

            let linkEUFORGEN = document.createElement("td");
            if (pianta['EUFORGEN'] && pianta['EUFORGEN'] !== '') {
                linkEUFORGEN.innerHTML = "<a href='" + pianta['EUFORGEN'] +
                    "' target='_blank'><span>Scopri di più su www.euforgen.org</span></a>";
            } else {
                linkEUFORGEN.innerText = 'LINK NON DISPONIBILE';
            }
            trow.append(linkEUFORGEN);

            let apparatoRadicale = document.createElement("td");
            if (pianta["profondo"] == 1) {
                apparatoRadicale.innerHTML += "profondo";
            } else if (pianta["superficiale"] == 1) {
                apparatoRadicale.innerHTML += "superficiale";
            } else {
                apparatoRadicale.innerHTML += "Dato non disponibile";
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
                densitaChioma.innerHTML += "bassa";
            };

            if (pianta["densita_media"] == 1) {
                densitaChioma.innerHTML += "media";
            };

            if (pianta["densita_alta"] == 1) {
                densitaChioma.innerHTML += "alta";
            };
            trow.append(densitaChioma);


            let dimensioneFoglie = document.createElement("td");
            if (pianta["dimensione_lung"] != '') {
                pianta["dimensione_lung"] = pianta["dimensione_lung"] + " cm";
            }

            if (pianta["dimensione_larg"] != '') {
                pianta["dimensione_larg"] = pianta["dimensione_larg"] + " cm";
            }

            if (pianta["dimensione_lung"] == '') {
                pianta["dimensione_lung"] = "Dato non disponibile";
            }
            if (pianta["dimensione_larg"] == '') {
                pianta["dimensione_larg"] = "Dato non disponibile";
            }

            dimensioneFoglie.innerHTML = "lunghezza: " + pianta["dimensione_lung"] + " larghezza: " + pianta["dimensione_larg"];

            trow.append(dimensioneFoglie);


            let emissioneBvoc = document.createElement("td");
            if (pianta["emissione_no"] == 1) {
                emissioneBvoc.innerHTML += "no";
            };

            if (pianta["si_preval_isoprene"] == 1) {
                emissioneBvoc.innerHTML += "isoprene";
            };

            if (pianta["si_preval_monoterpene"] == 1) {
                emissioneBvoc.innerHTML += "monoterpene";
            };
            trow.append(emissioneBvoc);

            let esigenzaSuolo = document.createElement("td");
            if (pianta["esigenza_bassa"] == 1) {
                esigenzaSuolo.innerHTML += "bassa";
            };

            if (pianta["esigenza_media"] == 1) {
                esigenzaSuolo.innerHTML += "media";
            };

            if (pianta["esigenza_alta"] == 1) {
                esigenzaSuolo.innerHTML += "alta";
            };
            trow.append(esigenzaSuolo);

            let fasciaFitosclimatica = document.createElement("td");
            if (pianta["lauretum"] == 1) {
                fasciaFitosclimatica.innerHTML += "lauretum, ";
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
                gruppo.innerHTML += "latifoglie";
            } else {
                gruppo.innerHTML += "conifere";
            };
            trow.append(gruppo);



            let manutenzione = document.createElement("td");
            if (pianta["manutenzione_bassa"] == 1) {
                manutenzione.innerHTML += "bassa";
            };

            if (pianta["manutenzione_media"] == 1) {
                manutenzione.innerHTML += "media";
            };

            if (pianta["manutenzione_alta"] == 1) {
                manutenzione.innerHTML += "alta";
            };
            trow.append(manutenzione);

            let maturitaPianta = document.createElement("td");

            maturitaPianta.innerHTML += "altezza totale:  " + pianta["altezza_totale"] + ", <br> ";
            maturitaPianta.innerHTML += "altezza chioma: " + pianta["altezza_chioma"] + ",<br> ";
            maturitaPianta.innerHTML += "diametro chioma: " + pianta["diametro_chioma"] + ",<br> ";
            maturitaPianta.innerHTML += "diametro fusto: " + pianta["diametro_fusto"];

            trow.append(maturitaPianta);

            let persistenzaFoglia = document.createElement("td");
            persistenzaFoglia.innerHTML = pianta["classe_persistenza"];
            trow.append(persistenzaFoglia);

            let ph = document.createElement("td");
            if (pianta["acido"] == 1) {
                ph.innerHTML += "acido";
            };

            if (pianta["neutro"] == 1) {
                ph.innerHTML += "neutro";
            };

            if (pianta["alcalino"] == 1) {
                ph.innerHTML += "alcalino";
            };
            trow.append(ph);


            let portamento = document.createElement("td");
            portamento.innerHTML = pianta["portamento"];
            trow.append(portamento);


            let resTempAlte = document.createElement("td");
            if (pianta["res_temp_bassa"] == 1) {
                resTempAlte.innerHTML += "bassa";
            };

            if (pianta["res_temp_media"] == 1) {
                resTempAlte.innerHTML += "media";
            };

            if (pianta["res_temp_buona"] == 1) {
                resTempAlte.innerHTML += "buona";
            };
            trow.appendChild(resTempAlte);




            let resGelate = document.createElement("td");
            if (pianta["res_gelo_bassa"] == 1) {
                resGelate.innerHTML += "bassa";
            };

            if (pianta["res_gelo_media"] == 1) {
                resGelate.innerHTML += "media";
            };

            if (pianta["res_gelo_buona"] == 1) {
                resGelate.innerHTML += "buona";
            };
            trow.appendChild(resGelate);




            let resMalattie = document.createElement("td");
            if (pianta["res_mal_bassa"] == 1) {
                resMalattie.innerHTML += "bassa";
            };

            if (pianta["res_mal_media"] == 1) {
                resMalattie.innerHTML += "media";
            };

            if (pianta["res_mal_buona"] == 1) {
                resMalattie.innerHTML += "buona";
            };
            trow.appendChild(resMalattie);

            let resSiccita = document.createElement("td");
            if (pianta["res_sic_bassa"] == 1) {
                resSiccita.innerHTML += "bassa";
            };

            if (pianta["res_sic_media"] == 1) {
                resSiccita.innerHTML += "media";
            };

            if (pianta["res_sic_buona"] == 1) {
                resSiccita.innerHTML += "buona";
            };
            trow.appendChild(resSiccita);


            let serviziEcosistemici = document.createElement("td");
            if (pianta["assorbimento_particolato"] == 1) {
                serviziEcosistemici.innerHTML += "assorbimento particolato, ";
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
                struttureUrbaneLimitrofe.innerHTML += "marciapiede, ";
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
                tipologia.innerHTML += "cespuglio arbusto, ";
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
                tipo_suolo.innerHTML += "argilloso, ";
            };

            if (pianta["limoso"] == 1) {
                tipo_suolo.innerHTML += "limoso, ";
            };

            if (pianta["sabbioso"] == 1) {
                tipo_suolo.innerHTML += "sabbioso ";
            };
            trow.appendChild(tipo_suolo);


            let ubicazioneUrbanistica = document.createElement("td");
            if (pianta["parco_giardino"] == 1) {
                ubicazioneUrbanistica.innerHTML += "parco giardino, ";
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
                velCrescita.innerHTML += "lenta";
            };

            if (pianta["media"] == 1) {
                velCrescita.innerHTML += "media";
            };

            if (pianta["alta"] == 1) {
                velCrescita.innerHTML += "alta";
            };
            trow.appendChild(velCrescita);

            const table = document.getElementById("myTable");
            const headers = table.getElementsByTagName("th");
            for (let i = 0; i < headers.length; i++) {
                headers[i].setAttribute("id", i);
                headers[i].addEventListener("click", function() {
                    const thId = this.getAttribute("id");
                    sortBy(thId);
                    // aggiungere icona di freccia al th cliccato
                    const arrows = document.querySelectorAll("#myTable th .arrow");
                    arrows.forEach(arrow => arrow.parentNode.removeChild(arrow));
                    const arrow = document.createElement("span");
                    arrow.classList.add("arrow");
                    if (this.classList.contains("asc")) {
                        arrow.classList.add("asc");
                        this.classList.remove("asc");
                    } else {
                        arrow.classList.add("desc");
                        this.classList.add("asc");
                    }
                    this.appendChild(arrow);
                });
            }
            $('td').each(function() {
                if (!$(this).text().trim() || $(this).text() === " - - - " || $(this).text() == "NULL - NULL") {
                    $(this).text("Dato non disponibile");
                }
            });

        });


        //invio l'array dei filtri selezionati per statistiche
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/preference.php');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {

            } else {
                console.error('Errore durante la richiesta. Codice di stato HTTP: ' + xhr.status);
            }
        };
        xhr.onerror = function() {
            console.error('Errore durante la richiesta.');
        };
        xhr.send(JSON.stringify({
            valoriSelezionati: valoriSelezionati
        }));

    });





    $('#btn-cerca').on('click', function() {

        if (valoriSelezionati.length == 0) {
            $('#warning-msg').show();
            setTimeout(function() {
                $('#warning-msg').hide();
            }, 5000);
            event.preventDefault();
        }

    })




    var selezioniPerSelect = {};

    $('select').change(function() {
        var selectId = $(this).attr('id');
        var valoreSelezionato = $(this).val();

        // Aggiungi il valore selezionato alla lista dei valori selezionati
        if (valoreSelezionato !== '') {


            if (!valoriSelezionati.includes(valoreSelezionato)) {
                valoriSelezionati.push(valoreSelezionato);
                if (!selezioniPerSelect[selectId]) {
                    selezioniPerSelect[selectId] = [];
                }
                selezioniPerSelect[selectId].push(valoreSelezionato);
            }

        }

        // Stampa i valori selezionati nella lista
        var listaValori = '';
        for (var i = 0; i < valoriSelezionati.length; i++) {
            listaValori += '<li style="margin-left:7px">' + valoriSelezionati[i] + '<span class="selezionato" value="' + valoriSelezionati[i] + '"> x</span></li>';
        }
        $('.selected-filter').html('<ul style="text-decoration:none;">I tuoi filtri:  ' + listaValori + '</ul>');

        if (valoriSelezionati.length > 0) {
            $(".delete_all_filters").show();
        } else {
            $(".delete_all_filters").hide();
        }

        oggettiFiltrati = arrayIntero.filter((oggetto) => {
            var selectIds = Object.keys(selezioniPerSelect);
            for (var j = 0; j < selectIds.length; j++) {
                var selectId = selectIds[j];
                var selezioniStessaSelect = selezioniPerSelect[selectId];
                var selezioniAltreSelect = valoriSelezionati.filter((selezione) => selezioniPerSelect[selectId].indexOf(selezione) === -1);

                if (selezioniStessaSelect.length > 0) {
                    if (!selezioniStessaSelect.some((selezione) => oggetto[selezione] === "1")) {
                        return false;
                    }
                } else {
                    if (!selezioniAltreSelect.every((selezione) => oggetto[selezione] === "1")) {
                        return false;
                    }
                }
            }
            return true;
        });

        const numOggettiFiltrati = oggettiFiltrati.length;

        // Visualizza l'anteprima del numero di oggetti filtrati
        $('#btn-cerca').text('Cerca (' + numOggettiFiltrati + ')');
    });





    // $('body').on('click', '.selezionato', function() {
    //   var valoreSelezionato = $(this).attr('value');

    //   // Rimuovi il valore selezionato dalla lista dei filtri
    //   var index = valoriSelezionati.indexOf(valoreSelezionato);
    //   if (index !== -1) {
    //     valoriSelezionati.splice(index, 1);
    //   }

    //   // Rimuovi il filtro dalla lista dei filtri per la select corrispondente
    //   var selectId = $(this).parent().closest('select').attr('id');
    //   if (selezioniPerSelect[selectId]) {
    //     var selezioniSelect = selezioniPerSelect[selectId];
    //     var selezioneIndex = selezioniSelect.indexOf(valoreSelezionato);
    //     if (selezioneIndex !== -1) {
    //       selezioniSelect.splice(selezioneIndex, 1);
    //     }
    //   }

    //   // Aggiorna l'array degli oggetti filtrati
    //   oggettiFiltrati = arrayIntero.filter((oggetto) => {
    //     var selectIds = Object.keys(selezioniPerSelect);
    //     for (var j = 0; j < selectIds.length; j++) {
    //       var selectId = selectIds[j];
    //       var selezioniStessaSelect = selezioniPerSelect[selectId];
    //       var selezioniAltreSelect = valoriSelezionati.filter((selezione) => selezioniPerSelect[selectId].indexOf(selezione) === -1);

    //       if (selezioniStessaSelect.length > 0) {
    //         if (!selezioniStessaSelect.some((selezione) => oggetto[selezione] === "1")) {
    //           return false;
    //         }
    //       } else {
    //         if (!selezioniAltreSelect.every((selezione) => oggetto[selezione] === "1")) {
    //           return false;
    //         }
    //       }
    //     }
    //     return true;
    //   });

    //   const numOggettiFiltrati = oggettiFiltrati.length;

    //   // Visualizza l'anteprima del numero di oggetti filtrati
    //   $('#btn-cerca').text('Cerca (' + numOggettiFiltrati + ')');

    //   // Rimuovi l'elemento dalla lista visuale dei filtri
    //   $(this).parent().remove();
    // });




    // Rimuovi tutti i valori selezionati
    $('.delete_all_filters').click(function() {
        valoriSelezionati = [];
        selezioniPerSelect = {};
        $('.selected-filter').empty();

        // Aggiorna l'array degli oggetti filtrati
        oggettiFiltrati = arrayIntero;

        // Visualizza l'anteprima del numero di oggetti filtrati
        $('#btn-cerca').text('Cerca (' + oggettiFiltrati.length + ')');

        // Reimposta tutte le select
        $('select').each(function() {
            $(this).val('');
        });
    });





    // Rimuovi tutti i valori selezionati
    $('.delete_all_filters').click(function() {
        valoriSelezionati = [];
        selezioniPerSelect = {};
        $('.selected-filter').empty();

        // Aggiorna l'array degli oggetti filtrati
        oggettiFiltrati = arrayIntero;

        // Visualizza l'anteprima del numero di oggetti filtrati
        $('#btn-cerca').text('Cerca (' + oggettiFiltrati.length + ')');

        // Reimposta tutte le select
        $('select').each(function() {
            $(this).val('');
        });
    });




    // Funzione per rimuovere un filtro selezionato
    $('.selected-filter').on('click', '.selezionato', function() {
        var filtroDaRimuovere = $(this).attr('value');

        // Rimuovi il filtro dalla lista dei valori selezionati
        valoriSelezionati = valoriSelezionati.filter((valore) => valore !== filtroDaRimuovere);

        // Rimuovi il filtro dalla lista delle selezioni per select
        var selectIds = Object.keys(selezioniPerSelect);
        for (var j = 0; j < selectIds.length; j++) {
            var selectId = selectIds[j];
            selezioniPerSelect[selectId] = selezioniPerSelect[selectId].filter((valore) => valore !== filtroDaRimuovere);

            // Imposta la select di provenienza al valore di default
            $('#' + selectId).val('');
        }

        // Aggiorna la visualizzazione dei valori selezionati nella lista
        var listaValori = '';
        for (var i = 0; i < valoriSelezionati.length; i++) {
            listaValori += '<li style="margin-left:7px">' + valoriSelezionati[i] + '<span class="selezionato" value="' + valoriSelezionati[i] + '"> x</span></li>';
        }
        $('.selected-filter').html('<ul style="text-decoration:none;">I tuoi filtri:  ' + listaValori + '</ul>');

        // Aggiorna il numero di oggetti filtrati
        oggettiFiltrati = arrayIntero.filter((oggetto) => {
            var selectIds = Object.keys(selezioniPerSelect);
            for (var j = 0; j < selectIds.length; j++) {
                var selectId = selectIds[j];
                var selezioniStessaSelect = selezioniPerSelect[selectId];
                var selezioniAltreSelect = valoriSelezionati.filter((selezione) => selezioniPerSelect[selectId].indexOf(selezione) === -1);

                if (selezioniStessaSelect.length > 0) {
                    if (!selezioniStessaSelect.some((selezione) => oggetto[selezione] === "1")) {
                        return false;
                    }
                } else {
                    if (!selezioniAltreSelect.every((selezione) => oggetto[selezione] === "1")) {
                        return false;
                    }
                }
            }
            return true;
        });

        console.log("aoaoaoaoaoaoaoaoaoa")
        $('#' + selectId).val('');
        const numOggettiFiltrati = oggettiFiltrati.length;

        // Aggiorna l'anteprima del numero di oggetti filtrati nel tasto Cerca
        $('#btn-cerca').text('Cerca (' + numOggettiFiltrati + ')');
    });










    $('body').on('click', function() {
        // console.log(valoriSelezionati)
        let lunghezzaPrecedente = valoriSelezionati.length;
        // console.log("lunghezzaPrecedente " + lunghezzaPrecedente)


        if (lunghezzaPrecedente === 0) {
            $(".delete_all_filters").hide();
            $("#filter-box").hide();
            $(".selected-filter").hide();
            $('#btn-cerca').text('Cerca');
        } else {
            $(".delete_all_filters").show();
            $("#filter-box").show();
            $(".selected-filter").show();
        }
    });


    $('.delete_all_filters').on('click', function() {
        while (valoriSelezionati.length > 0) {
            valoriSelezionati.pop();
        }
        $('.selected-filter').html('');
        $(".delete_all_filters").hide();

        $('select').each(function() {
            this.selectedIndex = 0; // reimposta il valore della select al valore predefinito
        });

        $('#btn-cerca').text('Cerca');

    })

    $('#btn-piu').on('click', function() {
        $(".other_select").css("display", "grid");
        $('#btn-piu').css("display", "none")

    })



    function showCookiePopup() {
        // Verifichiamo se il popup dei cookie è già stato mostrato nella sessione corrente
        if (sessionStorage.getItem("cookiePopupShown") === "true") {
            return;
        }

        // Creiamo l'elemento del pop-up
        var cookiePopup = document.createElement("div");
        cookiePopup.id = "cookie-popup";

        // Creiamo il contenuto del pop-up
        var content = document.createElement("h1");
        content.textContent = "Benvenuto in Progetto Tecnoverde!";
        cookiePopup.appendChild(content);

        var content = document.createElement("p");
        content.textContent = "Per continuare la navigazione, è necessario accettare l 'utilizzo dei cookie.";
        cookiePopup.appendChild(content);

        var content = document.createElement("p");
        content.textContent = "Questo sito utilizza i cookie per garantire una migliore esperienza di navigazione. Cliccando su Accetta, acconsenti all'utilizzo dei cookie.";
        cookiePopup.appendChild(content);

        var content = document.createElement("p");
        content.textContent = "Per ulteriori informazioni consulta la nostra ";
        var link = document.createElement("a");
        link.href = "privacypolicy.php";
        link.textContent = "Privacy Policy";
        content.appendChild(link);
        cookiePopup.appendChild(content);

        // Creiamo il pulsante Accetta
        var acceptButton = document.createElement("button");
        acceptButton.id = "cookie-accept";
        acceptButton.textContent = "Accetta";
        cookiePopup.appendChild(acceptButton);


        // Aggiungiamo il pop-up al body
        document.body.appendChild(cookiePopup);

        // Quando si clicca sul pulsante Accetta, nascondiamo il pop-up e salviamo la scelta dell'utente in sessionStorage
        acceptButton.addEventListener("click", function() {
            cookiePopup.style.display = "none";
            sessionStorage.setItem("cookieAccepted", true);
        });

        // Salviamo il fatto che il popup dei cookie è stato mostrato nella sessione corrente
        sessionStorage.setItem("cookiePopupShown", true);
    }

    // Quando si carica la pagina, mostriamo il pop-up se non è già stato mostrato nella sessione corrente
    window.addEventListener("load", function() {
        showCookiePopup();
    });

    // Quando l'utente aggiorna la pagina, rimuoviamo il flag della scelta dell'utente dai dati sessionStorage
    window.addEventListener("beforeunload", function() {
        sessionStorage.removeItem("cookieAccepted");
    });


    $('#dowCsv').click(function() {

        const delimiter = ";";
        const table = document.getElementById("myTable");
        const rows = table.querySelectorAll("tr");
        const csvData = [];

        for (const row of rows) {
            const rowData = [];
            const cells = row.querySelectorAll("td, th");
            for (const cell of cells) {
                let cellValue = cell.textContent.trim();
                cellValue = Papa.unparse([
                    [cellValue]
                ], {
                    delimiter: '',
                    newline: ''
                }).trim();
                rowData.push(cellValue);
            }
            csvData.push(rowData.join(delimiter));
        }

        const csvText = csvData.join("\n");

        const downloadLink = document.createElement("a");
        downloadLink.setAttribute("href", "data:text/csv;charset=utf-8," + encodeURIComponent(csvText));
        downloadLink.setAttribute("download", "dss-result.csv");
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);


    })


    var cPrev = -1;

    function sortBy(c) {
        rows = document.getElementById("myTable").rows.length; // num of rows
        columns = document.getElementById("myTable").rows[0].cells.length; // num of columns
        arrTable = [...Array(rows)].map(e => Array(columns)); // create an empty 2d array

        for (ro = 0; ro < rows; ro++) { // cycle through rows
            for (co = 0; co < columns; co++) { // cycle through columns
                // assign the value in each row-column to a 2d array by row-column
                arrTable[ro][co] = document.getElementById("myTable").rows[ro].cells[co].innerHTML;
            }
        }

        th = arrTable.shift(); // remove the header row from the array, and save it

        if (c !== cPrev) { // different column is clicked, so sort by the new column
            arrTable.sort(
                function(a, b) {
                    if (a[c] === b[c]) {
                        return 0;
                    } else {
                        return (a[c] < b[c]) ? -1 : 1;
                    }
                }
            );
        } else { // if the same column is clicked then reverse the array
            arrTable.reverse();
        }

        cPrev = c; // save in previous c

        arrTable.unshift(th); // put the header back in to the array

        // cycle through rows-columns placing values from the array back into the html table
        for (ro = 0; ro < rows; ro++) {
            for (co = 0; co < columns; co++) {
                document.getElementById("myTable").rows[ro].cells[co].innerHTML = arrTable[ro][co];
            }
        }
    }
});