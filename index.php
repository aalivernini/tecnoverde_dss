<?php
include 'includes/conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/papaparse.min.js"></script>
    <!-- <script src="js/index.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- STILE CSS   -->
    <link rel="stylesheet" href="css/newstyle.css" />


    <!-- FAVICON  -->
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-/Z1/7D2mJ6zHn6+mZYm6Y5UJF5o6nKlOF1wG+AsihgQDQGG1Edz+Bpi6UugY6U5fyBXMFrM0iKBA6v0AsBglWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-ZNTTtTq3A/IuSvS8J7kPzNSHn0Fp1ggDvLRXhW2thtak1ie7AxnZgJ28mODWtRzR7bJTKtO4l7nlYXRYTzT7Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Decision Support System</title>
</head>


<style>

</style>

<body id="body">

    <?php
    include "newnav.php";
    ?>

    <div class="struttura-pagina">


        <div id="corpo-pagina">
            <header id="page-top">

                <div class="container_jumbo">

                    <div class="intro-text">
                        <h2 class="name">Description</h2>
                        <hr class="star-light">
                        <p class="skills descr-text" style="font-weight: bold;">Un Decision Support System (DSS) è un sistema software di supporto alle decisioni, che permette di aumentare l'efficacia dell'analisi in quanto fornisce supporto a tutti coloro che devono prendere decisioni strategiche di fronte a problemi che non possono essere risolti con i modelli della ricerca operativa.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!--  -->
                        </div>
                    </div>
                </div>
            </header>
            <div class="content-wrapper">
                <section class="primary" id="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2>EFFETTUA RICHIESTA</h2>
                                <hr class="star-primary">
                            </div>
                        </div>

                        <!------------------- BOX PER LA PRIMA RICERCA  ------------------------------------ -->
                        <div class="row">
                            <!-- <div class="search-container"> -->
                            <div id="warning-msg" class="text-center">Seleziona almeno una opzione di ricerca!</div>
                            <form id="myForm" style="width: 100%; text-align: center;" method="post" action="" enctype="multipart/form-data">
                                <div id="filter-box" class="mb-4 text-left">
                                    <a style="display:none;cursor:pointer;" class='delete_all_filters btn btn-info'>Cancella tutti i filtri</a>
                                </div>
                                <div class='selected-filter'></div>


                                <!-- sezione habitat -->
                                <div class="search-item">
                                    <!-- <label for="categoria">Categoria:</label> -->
                                    <select class="select" style="text-transform: uppercase;" id="clima" name="clima" list="clima" autocomplete="off">
                                        <option hidden selected style="color: gray;" value="">Clima</option>
                                        <datalist id="clima-dl">




                                            <option class="value-selected" style="text-transform: uppercase;" value="lauretum">fascia fitoclimatica del lauretum</option>

                                            <option class="value-selected" style="text-transform: uppercase;" value="castanetum">fascia fitoclimatica del castanetum</option>

                                            <option class="value-selected" style="text-transform: uppercase;" value="fagetum">fascia fitoclimatica del fagetum</option>

                                            <option class="value-selected" style="text-transform: uppercase;" value="picetum">fascia fitoclimatica del picetum</option>

                                            <option class="value-selected" style="text-transform: uppercase;" value="alpinetum">fascia fitoclimatica del alpinetum</option>

                                        </datalist>
                                    </select>
                                    <span class="icon-info">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="info-tooltip">
                                            <!-- La fascia fitoclimatica è un'area geografica caratterizzata da condizioni climatiche simili che influenzano la vegetazione che vi cresce. Queste condizioni includono temperatura, precipitazioni, umidità, altitudine e latitudine. Ogni fascia ha una flora e fauna specifiche e sono importanti per la conservazione della biodiversità. -->
                                            <strong>Lauretum</strong>: Fascia da costiera a intermedia, con temperature medie annue tra i 12°/23° C, si estende dalla costa fino agli 800 metri di altitudine. <br>
                                            <strong>Castanetum</strong>: Fascia prealpina e della pianura Padana, con temperature medie annue tra i 10°/15° C, 300-900 metri di altitudine. <br>
                                            <strong>Fagetum</strong>: Fascia montana Prealpina e Appenninica, con temperature medie annue tra i 6°/12° C, 800-1500 metri di altitudine. <br>
                                            <strong>Picetum</strong>: Fascia montana Aplina, con temperature medie annue tra i 3°/6° C, 1400-2000 metri di altitudine. <br>
                                            <strong>Alpinetum</strong>: Fascia alpina estrema, con temperature medie annue sotto i -2° C, 1700 metri al limite della vegetazione arborea

                                        </span>
                                    </span>
                                </div>

                                <div class="search-item">
                                    <select class="select" style="text-transform: uppercase;" id="tipologia_suolo" name="tipologia_suolo" list="tipologia_suolo" autocomplete="off">
                                        <datalist id="tipologia_suolo-dl">
                                            <option hidden selected style="color: gray;" value="">Tipologia Suolo</option>
                                            <?php
                                            $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'tipologia_suolo' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                            $result_cat = mysqli_query($conn, $sql_cat);
                                            while ($cat_row = mysqli_fetch_array($result_cat)) {
                                            ?>
                                                <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </datalist>
                                    </select>
                                    <span class="icon-info">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="info-tooltip">La tipologia del suolo si riferisce alla classificazione dei suoli in base alle loro proprietà fisiche, chimiche e biologiche. La classificazione può essere basata sulla granulometria, sulla composizione chimica, sulla struttura e sulla profondità del suolo. Questa conoscenza è importante per l'agricoltura, l'ingegneria civile e la conservazione dell'ambiente.</span>
                                    </span>
                                </div>

                                <div class="other_select">


                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="ph" name="ph" list="ph" autocomplete="off">
                                            <datalist id="ph-dl">
                                                <option hidden selected style="color: gray;" value="">PH</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'ph' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">Il pH è una scala di misura che indica il grado di acidità o basicità di una soluzione, che va da 0 a 14. Il valore 7 è neutro, valori inferiori indicano una soluzione acida e valori superiori indicano una soluzione basica. Il pH è importante per diverse applicazioni, come l'agricoltura, la chimica e la biologia.</span>
                                        </span>
                                    </div>




                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="esigenza_suolo" name="esigenza_suolo" list="esigenza_suolo" autocomplete="off">
                                            <datalist id="esigenza_suolo-dl">
                                                <option hidden selected style="color: gray;" value="">Esigenza Suolo</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'esigenza_fert_suolo' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">L'esigenza del suolo si riferisce alla capacità di una pianta di crescere in un particolare tipo di suolo, che dipende dalle sue caratteristiche chimiche, fisiche e biologiche. L'esigenza di una pianta per il suolo può essere influenzata dal pH, dalla struttura del suolo, dalla presenza di nutrienti e di acqua, e può essere un fattore importante da considerare per la coltivazione e la gestione delle piante.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="autoctona" name="autoctona" list="autoctona" autocomplete="off">
                                            <datalist id="autoctona-dl">
                                                <option hidden selected style="color: gray;" value="">Autoctona</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'autoctona' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">Una pianta autoctona è una specie vegetale che è originaria di una determinata area geografica, dove si è sviluppata naturalmente senza l'intervento umano. Queste piante sono adattate alle condizioni ambientali locali e hanno un ruolo importante nella conservazione della biodiversità e nella protezione degli ecosistemi. L'utilizzo di piante autoctone può anche favorire la sostenibilità delle attività agricole e la riduzione dell'impatto ambientale.</span>
                                        </span>
                                    </div>

                                    <!-- fine habitat -->

                                    <!-- sezione resistenza parametri biotici e abiotici -->



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="res_siccita" name="res_siccita" list="res_siccita" autocomplete="off">
                                            <datalist id="res_siccita-dl">
                                                <option hidden selected style="color: gray;" value="">Resistenza alla siccità</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'res_siccita' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La resistenza alla siccità di una pianta è la sua capacità di tollerare condizioni di stress idrico, ovvero di sopravvivere e mantenere la crescita e la produzione in assenza o limitata disponibilità di acqua. Questa capacità dipende dalle caratteristiche anatomiche, fisiologiche e genetiche della pianta e può essere influenzata dal tipo di suolo, dal clima e dal sistema di gestione del terreno. La resistenza alla siccità è un importante criterio di selezione per la coltivazione di piante in aree a rischio di siccità.</span>
                                        </span>
                                    </div>





                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="res_alte_temp" name="res_alte_temp" list="res_alte_temp" autocomplete="off">
                                            <datalist id="res_alte_temp-dl">
                                                <option hidden selected style="color: gray;" selected value="">Resistenza alle alte temperature</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'res_alte_temp' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La resistenza alle alte temperature di una pianta si riferisce alla sua capacità di tollerare condizioni di stress termico, ovvero di sopravvivere e mantenere la crescita e la produzione in condizioni di elevate temperature ambientali. Questa capacità dipende dalle caratteristiche anatomiche, fisiologiche e genetiche della pianta e può essere influenzata dal clima, dalla disponibilità di acqua e di nutrienti. La resistenza alle alte temperature è un importante criterio di selezione per la coltivazione di piante in ambienti caldi e aridi o per fronteggiare gli effetti del cambiamento climatico.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="res_gelate" name="res_gelate" list="res_gelate" autocomplete="off">
                                            <datalist id="res_gelate-dl">
                                                <option hidden selected style="color: gray;" selected value="">Resistenza alle gelate</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'res_gelate' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La resistenza alle gelate di una pianta si riferisce alla sua capacità di tollerare le temperature basse, ovvero di sopravvivere e mantenere la crescita e la produzione in condizioni di freddo estremo. Questa capacità dipende dalle caratteristiche anatomiche, fisiologiche e genetiche della pianta e può essere influenzata dal clima, dalla disponibilità di acqua e di nutrienti. La resistenza alle gelate è un importante criterio di selezione per la coltivazione di piante in ambienti freddi e per la gestione delle risorse naturali.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="res_malattie" name="res_malattie" list="res_malattie" autocomplete="off">
                                            <datalist id="res_malattie-dl">
                                                <option hidden selected style="color: gray;" selected value="">Resistenza alle malattie</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'res_malattie' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La resistenza alle malattie di una pianta si riferisce alla sua capacità di proteggersi da agenti patogeni, come batteri, virus, funghi e insetti, che possono causare malattie e danni alle piante. Questa capacità dipende dalle caratteristiche anatomiche, fisiologiche e genetiche della pianta e può essere influenzata dalla gestione del terreno e dalle tecniche di coltivazione. La resistenza alle malattie è un importante criterio di selezione per la coltivazione di piante sane e produttive, senza l'uso eccessivo di pesticidi chimici.</span>
                                        </span>
                                    </div>


                                    <!-- fine sezione resistenza parametri biotici e abiotici -->


                                    <!-- sezione  parametri strutturali e fisiologici -->




                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="gruppo" name="gruppo" list="gruppo" autocomplete="off">
                                            <datalist id="gruppo-dl">
                                                <option hidden selected style="color: gray;" selected value="">Gruppo</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'gruppo' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">Il gruppo di una pianta si riferisce alla sua classificazione tassonomica sulla base delle sue caratteristiche morfologiche, anatomiche e fisiologiche. Le piante vengono classificate in gruppi in base alle loro relazioni filogenetiche, ovvero alla loro evoluzione biologica e alle caratteristiche condivise con altre piante. I gruppi possono essere distinti in base a diversi criteri, come la presenza o l'assenza di foglie, la morfologia dei fiori, la modalità di riproduzione e altri fattori. La conoscenza del gruppo di appartenenza di una pianta può essere utile per la sua identificazione, la gestione e la coltivazione.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="categoria" name="categoria" list="categoria" autocomplete="off">
                                            <datalist id="categoria-dl">
                                                <option hidden selected style="color: gray;" selected value="">Categoria</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'categoria' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La categoria di una pianta si riferisce alla sua classificazione sulla base delle sue caratteristiche funzionali, ovvero il suo utilizzo o la sua funzione all'interno di un ecosistema o in un contesto specifico. Le piante possono essere classificate in diverse categorie, come piante da giardino, piante da frutto, piante ornamentali, piante medicinali, piante alimentari, piante officinali e altre. La conoscenza della categoria di una pianta può essere utile per la scelta della specie e delle tecniche di coltivazione, oltre che per la sua gestione e valorizzazione.</span>
                                        </span>
                                    </div>


                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="vel_accrescimento" name="vel_accrescimento" list="vel_accrescimento" autocomplete="off">
                                            <datalist id="vel_accrescimento-dl">
                                                <option hidden selected style="color: gray;" selected value="">Velocità di accrescimento</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'vel_accrescimento' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La velocità di accrescimento di una pianta si riferisce alla quantità di massa vegetale che la pianta è in grado di produrre in un dato periodo di tempo. Questo parametro è influenzato da diversi fattori, come la genetica, il clima, il tipo di suolo, l'irrigazione e la disponibilità di nutrienti. La conoscenza della velocità di accrescimento di una pianta può essere utile per la gestione della sua coltivazione, la pianificazione di interventi di potatura o di raccolta e per la scelta delle specie da impiegare in contesti specifici.</span>
                                        </span>
                                    </div>






                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="tipologia" name="tipologia" list="tipologia" autocomplete="off">
                                            <datalist id="tipologia-dl">
                                                <option hidden selected style="color: gray;" selected value="">Tipologia</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'tipologia' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La tipologia di una pianta si riferisce alla sua classificazione in base a diversi criteri, come il ciclo di vita, la forma, la dimensione, la morfologia, il tipo di foglia e la struttura del fusto. La conoscenza della tipologia di una pianta è importante per la sua gestione, la scelta delle tecniche di coltivazione, la selezione della specie migliore per un determinato ambiente e la comprensione delle sue caratteristiche biologiche e morfologiche.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="densità_chioma" name="densità_chioma" list="densità_chioma" autocomplete="off">
                                            <datalist id="densità_chioma-dl">
                                                <option hidden selected style="color: gray;" selected value="">Densità della chioma</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'densita_chioma' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La densità della chioma di una pianta si riferisce alla quantità di foglie e rami presenti all'interno della chioma stessa. È influenzata dalla genetica della pianta, dalle tecniche di coltivazione, dal clima e dalle condizioni ambientali. La conoscenza della densità della chioma può essere utile per la gestione della pianta, la valutazione della sua salute e della produttività, e la scelta delle tecniche di potatura e di gestione della chioma stessa.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="apparato_radicale" name="apparato_radicale" list="apparato_radicale" autocomplete="off">
                                            <datalist id="apparato_radicale-dl">
                                                <option hidden selected style="color: gray;" selected value="">Apparato radicale</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'apparato_radicale' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">L'apparato radicale di una pianta è costituito dall'insieme delle radici che si sviluppano nel terreno, e ha la funzione di assorbire acqua, sali minerali e sostanze organiche utili alla crescita e alla sopravvivenza della pianta. La forma, la profondità e la distribuzione delle radici possono variare in base alla specie, al clima e alle condizioni ambientali. La conoscenza dell'apparato radicale è importante per la gestione della pianta, la scelta delle tecniche di coltivazione e l'ottimizzazione della produzione.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="specie_allergenica" name="specie_allergenica" list="specie_allergenica" autocomplete="off">
                                            <datalist id="specie_allergenica-dl">
                                                <option hidden selected style="color: gray;" selected value="">Specie allergenica</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'specie_allergenica' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">Una specie allergenica è una pianta in grado di produrre polline o altre sostanze che possono causare reazioni allergiche in alcune persone. Queste reazioni possono manifestarsi come rinite allergica, congiuntivite, asma o dermatite. La sensibilità alle allergie varia da persona a persona e dipende anche dal tipo di specie allergenica coinvolta.</span>
                                        </span>
                                    </div>



                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="emissione_bvoc" name="emissione_bvoc" list="emissione_bvoc" autocomplete="off">
                                            <datalist id="emissione_bvoc-dl">
                                                <option hidden selected style="color: gray;" selected value="">Emissione di BVOC</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'emissione_bvoc' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">L'emissione di BVOC (Composti Organici Volatili Biogenici) da parte delle piante è un processo naturale in cui vengono rilasciati composti organici volatili nell'atmosfera. Questi composti possono influenzare la qualità dell'aria, il clima e la chimica dell'atmosfera, e sono importanti per la comunicazione tra le piante e per la loro difesa contro i predatori.</span>
                                        </span>
                                    </div>



                                    <!-- fine sezione  parametri strutturali e fisiologici -->

                                    <!--  sezione  ambiente urbano di destinazione -->

                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="ubicazione_urbanistica" name="ubicazione_urbanistica" list="ubicazione_urbanistica" autocomplete="off">
                                            <datalist id="ubicazione_urbanistica-dl">
                                                <option hidden selected style="color: gray;" selected value="">Ubicazione urbanistica</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'ubicazione_urbanistica' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">L'ubicazione urbanistica di una pianta si riferisce alla sua posizione all'interno di un ambiente urbano, come ad esempio un parco o una strada. L'ubicazione può influenzare la salute e la crescita della pianta, poiché fattori come la disponibilità di luce solare, l'accesso all'acqua e l'inquinamento atmosferico possono variare a seconda della posizione. Inoltre, le piante possono avere un impatto sull'ambiente urbano, contribuendo ad abbassare la temperatura, migliorare la qualità dell'aria e fornire habitat per la fauna selvatica.</span>
                                        </span>
                                    </div>




                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="strutture_urbane_limistrofe" name="strutture_urbane_limistrofe" list="strutture_urbane_limistrofe" autocomplete="off">
                                            <datalist id="strutture_urbane_limistrofe-dl">
                                                <option hidden selected style="color: gray;" selected value="">Presenza di strutture urbane limitrofe</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'strutture_urbane_limistrofe' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La presenza di strutture vicino ad una pianta si riferisce alla presenza di oggetti o elementi nell'ambiente circostante della pianta che possono influenzare la sua crescita e il suo sviluppo. Questi elementi possono includere strutture artificiali come edifici, recinzioni o infrastrutture, o elementi naturali come altre piante, alberi, rocce o corsi d'acqua. La presenza di queste strutture può influenzare la quantità di luce solare, acqua, nutrienti e spazio disponibile per la pianta.</span>
                                        </span>
                                    </div>



                                    <!-- sezione  fornitura e manutenzione -->


                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="manutenzione" name="manutenzione" list="manutenzione" autocomplete="off">
                                            <datalist id="manutenzione-dl">
                                                <option hidden selected style="color: gray;" selected value="">Manutenzione</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'manutenzione' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">La manutenzione di una pianta si riferisce all'insieme di attività necessarie per mantenerla in salute e promuoverne la crescita. Queste attività possono includere l'irrigazione, la concimazione, la potatura, la rimozione delle erbacce, la prevenzione e il controllo delle malattie e delle infestazioni di insetti. La manutenzione regolare è importante per garantire la longevità e la bellezza della pianta.</span>
                                        </span>
                                    </div>

                                    <!--fine sezione  fornitura e manutenzione -->

                                    <!--sezione servizi ecosistemici attesi-->

                                    <div class="search-item">
                                        <select class="select" style="text-transform: uppercase;" id="servizi_ecosistemici" name="servizi_ecosistemici" list="servizi_ecosistemici" autocomplete="off">
                                            <datalist id="servizi_ecosistemici-dl">
                                                <option hidden selected style="color: gray;" selected value="">Servizi ecosistemici attesi</option>
                                                <?php
                                                $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'servizi_ecosistemici' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created'  AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value'";
                                                $result_cat = mysqli_query($conn, $sql_cat);
                                                while ($cat_row = mysqli_fetch_array($result_cat)) {
                                                ?>
                                                    <option id="servizi_ecosistemici" style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </select>
                                        <span class="icon-info">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="info-tooltip">Le piante offrono una vasta gamma di servizi ecosistemici essenziali per la sopravvivenza della vita sulla Terra. Tra questi ci sono la produzione di ossigeno, l'assorbimento di anidride carbonica, la stabilizzazione del suolo, la regolazione del clima, la creazione di habitat per la fauna selvatica, la fornitura di cibo, legno e altre risorse utili per l'uomo, nonché la bellezza estetica che ci donano. In sintesi, le piante sono fondamentali per il benessere dell'ambiente e dell'umanità.</span>
                                        </span>
                                    </div>

                                </div>

                                <div style="width: 100%;" class="flexato" id="box-btn">
                                    <div>
                                        <button class="btn-cerca" id="btn-piu" style="background-color: orange;" type="button" name="filtri">Aggiungi filtri</button>
                                    </div>

                                    <div>

                                        <button class="btn-cerca" id="btn-cerca" name="submit" value="submit">Cerca</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="footer mt-5 pt-3" style="margin-bottom: -88px;">
                        <footer class="d-flex p-4 " style="justify-content:space-evenly;"> <span>All Rights Reserved by
                                <a class="footer-link" href="https://mvc-technology.eu">mvc-technology </a></span>
                            <a class="footer-link" href="privacypolicy.php">Privacy Policy</a>
                        </footer>
                    </div>
            </div>
        </div>

        <!-- myform -->
        <div class="divTable">
            <h1 class="titolo">TABELLA RISULTATI</h1>
            <button id="dowCsv" class="btn btn-info">Scarica in formato CSV</button>
            <h5 class="mt-3 mb-3"><a href="index.php">Effettua nuova ricerca</a></h5>
            <h3 id="result"></h3>
            <h4 id="showFilter"></h4>
            <table id="myTable" class="text-center">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
            </table>

        </div>

    </div>
    </section>
    <script>
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

                    });
                });


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
            var arrIdFiltri = [];

            $('select').change(function() {
                var selectId = $(this).attr('id');
                var valoreSelezionato = $(this).val();

                // Aggiungi il valore selezionato alla lista dei valori selezionati
                if (valoreSelezionato !== '') {

                    if (!valoriSelezionati.includes(valoreSelezionato)) {
                        valoriSelezionati.push(valoreSelezionato);
                        arrIdFiltri.push(selectId)
                        if (!selezioniPerSelect[selectId]) {
                            selezioniPerSelect[selectId] = [];
                        }
                        selezioniPerSelect[selectId].push(valoreSelezionato);
                    }

                }

                var listaValori = '';
                for (var i = 0; i < valoriSelezionati.length; i++) {
                    listaValori += '<li style="margin-left:7px">' + valoriSelezionati[i] + '<span id="' + arrIdFiltri[i] + '" class="selezionato" value="' + valoriSelezionati[i] + '"> x</span></li>';
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




            $(document).on('click', '.selezionato', function() {
                var filtroDaCancellare = $(this).attr('value');
                var idFiltroDaCancellare = $(this).attr('id');
                var index = valoriSelezionati.indexOf(filtroDaCancellare);
                var targetId
                // var indiceFiltro = selezioniPerSelect[idFiltroDaCancellare].indexOf(filtroDaCancellare);

                // Rimuovi il filtro dalla lista dei valori selezionati
                if ((index !== -1)) {
                    valoriSelezionati.splice(index, 1);
                    arrIdFiltri.splice(index, 1);

                }
                // selezioniPerSelect[idFiltroDaCancellare].splice(indiceFiltro, 1);

                var g = selezioniPerSelect[idFiltroDaCancellare];
                var t = g.indexOf(filtroDaCancellare);
                console.log(t)
                if (t !== -1) {
                    g.splice(t, 1);
                }



                for (var key in selezioniPerSelect) {
                    if (Array.isArray(selezioniPerSelect[key]) && selezioniPerSelect[key].length === 0) {
                        delete selezioniPerSelect[key];
                    }
                }


                $(document).ready(function() {
                    $('#' + idFiltroDaCancellare).val('');
                });


                // Aggiorna i valori selezionati nella lista
                var listaValori = '';
                for (var i = 0; i < valoriSelezionati.length; i++) {
                    listaValori += '<li style="margin-left:7px">' + valoriSelezionati[i] + '<span id="' + arrIdFiltri[i] + '" class="selezionato" value="' + valoriSelezionati[i] + '"> x</span></li>';
                }
                $('.selected-filter').html('<ul style="text-decoration:none;">I tuoi filtri:  ' + listaValori + '</ul>');

                if (valoriSelezionati.length > 0) {
                    $(".delete_all_filters").show();
                } else {
                    $(".delete_all_filters").hide();
                }

                // Aggiorna gli oggetti filtrati
                oggettiFiltrati = arrayIntero.filter((oggetto) => {
                    var selectIds = Object.keys(selezioniPerSelect);

                    for (var j = 0; j < selectIds.length; j++) {
                        var selectId = selectIds[j];
                        var selezioni = selezioniPerSelect[selectId];

                        if (selezioni.length > 0) {
                            var selectValid = false;

                            for (var k = 0; k < selezioni.length; k++) {
                                var selezione = selezioni[k];

                                if (oggetto[selezione] === "1") {
                                    selectValid = true;
                                    break;
                                }
                            }

                            if (!selectValid) {
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






            $('body').on('click', function() {

                let lunghezzaPrecedente = valoriSelezionati.length;

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


                valoriSelezionati = [];
                arrIdFiltri = [];
                selezioniPerSelect = {}
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
    </script>

</body>

</html>