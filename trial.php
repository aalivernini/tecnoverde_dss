<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- STILE CSS   -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/table-style.css" />

    <!-- FAVICON  -->
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">
    <title>Document</title>
</head>
<style>
    .form-container {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .form-group {
        flex: 1 1 calc(50% - 10px);
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .form-group:last-child {
        margin-right: 0;
    }

    .form-group.hidden {
        display: none;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group select {
        display: block;
        width: 100%;
        height: 30px;
        padding: 5px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        box-shadow: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .form-group select[multiple] {
        height: auto;
        min-height: 100px;
    }

    .form-group button {
        display: block;
        margin-top: 10px;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #0069d9;
    }

    .selected-values {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .selected-values span {
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 5px;
        padding: 5px;
        font-size: 16px;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .selected-values span:hover {
        background-color: #0069d9;
    }
</style>

<body>
    <form id="form" action="#" method="post">
        <div class="multiselect-container">
            <div class="multiselect">
                <select multiple>
                    <option value="valore1">Valore 1</option>
                    <option value="valore2">Valore 2</option>
                    <option value="valore3">Valore 3</option>
                </select>
            </div>
            <div class="multiselect">
                <select multiple>
                    <option value="valore4">Valore 4</option>
                    <option value="valore5">Valore 5</option>
                    <option value="valore6">Valore 6</option>
                </select>
            </div>
            <div class="multiselect hidden">
                <select multiple>
                    <option value="valore7">Valore 7</option>
                    <option value="valore8">Valore 8</option>
                    <option value="valore9">Valore 9</option>
                </select>
            </div>
            <!-- aggiungi altre select qui -->
        </div>
        <button id="mostra-filtri" type="button">Aggiungi filtri</button>
        <button type="submit">Invia</button>
    </form>
    <div id="selezionati"></div>





    <script>
        $(document).ready(function() {
            // mostra le select aggiuntive quando viene cliccato il pulsante "Aggiungi filtri"
            $('#mostra-filtri').click(function() {
                $('.hidden').removeClass('hidden');
                $(this).hide();
            });

            // quando viene inviato il form, stampa i valori delle select selezionate in console
            $('#form').submit(function(event) {
                event.preventDefault(); // previene l'invio del form
                $('select').each(function() {
                    var selectedValues = $(this).val();
                    if (selectedValues) {
                        console.log(selectedValues.join(', '));
                    }
                });
            });

            // Quando un'opzione viene selezionata in una select, la aggiunge al div #selezionati
            $('select').change(function() {
                var selectedValues = $(this).val();
                var selectId = $(this).closest('.multiselect').index();
                $('#selezionati').empty();
                $('select').each(function() {
                    var id = $(this).closest('.multiselect').index();
                    if (id === selectId && selectedValues) {
                        $.each(selectedValues, function(index, value) {
                            $('#selezionati').append('<span class="selezionato" data-value="' + value + '"> ' + value + '<span class="rimuovi">x</span></span>');
                        });
                    }
                });
            });


            // Rimuove un valore selezionato quando viene cliccata la "x" accanto ad esso
            $('#selezionati').on('click', '.rimuovi', function() {
                var value = $(this).closest('.selezionato').attr('data-value');
                $('option[value="' + value + '"]').prop('selected', false);
                $(this).closest('.selezionato').remove();
            });

        })
    </script>
</body>

</html>