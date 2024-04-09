<!DOCTYPE html>
<html>

<head>
    <title>Form con select dinamiche</title>
    <style>
        /* Nascondi tutte le select eccetto le prime due */
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <form id="my-form">
        <select name="select1">
            <option value="">Seleziona opzione 1</option>
            <option value="opzione1-1">Opzione 1-1</option>
            <option value="opzione1-2">Opzione 1-2</option>
        </select>

        <select name="select2">
            <option value="">Seleziona opzione 2</option>
            <option value="opzione2-1">Opzione 2-1</option>
            <option value="opzione2-2">Opzione 2-2</option>
        </select>

        <!-- Le select successive saranno inizialmente nascoste -->
        <select name="select3" class="hidden">
            <option value="">Seleziona opzione 3</option>
            <option value="opzione3-1">Opzione 3-1</option>
            <option value="opzione3-2">Opzione 3-2</option>
        </select>

        <select name="select4" class="hidden">
            <option value="">Seleziona opzione 4</option>
            <option value="opzione4-1">Opzione 4-1</option>
            <option value="opzione4-2">Opzione 4-2</option>
        </select>

        <!-- Aggiungi un bottone per mostrare le select nascoste -->
        <button type="button" id="show-filters">Aggiungi filtri</button>

        <button type="submit">Invia</button>
    </form>

    <script>
        // Aggiungi un event listener al bottone "Aggiungi filtri"
        document.getElementById("show-filters").addEventListener("click", function() {
            // Mostra tutte le select nascoste
            var hiddenSelects = document.querySelectorAll(".hidden");
            for (var i = 0; i < hiddenSelects.length; i++) {
                hiddenSelects[i].classList.remove("hidden");
            }
        });

        // Aggiungi un event listener alla form per gestire l'invio dei dati
        document.getElementById("my-form").addEventListener("submit", function(event) {
            // Impedisci il comportamento predefinito della form (ovvero ricaricare la pagina)
            event.preventDefault();

            // Recupera tutti i value delle select presenti nella form
            var selects = document.getElementsByTagName("select");
            var values = [];
            for (var i = 0; i < selects.length; i++) {
                var select = selects[i];
                values.push(select.value);
            }

            // Stampa i value nella console
            console.log(values);
        });
    </script>
</body>

</html>