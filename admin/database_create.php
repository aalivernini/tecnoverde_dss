<?php
include 'component/sidebar.php';
include '../includes/conn.php';

?>
<script>
    // Rimuovi la classe "active" dall'elemento con id "primo-elemento"
    document.getElementById("dasboard").classList.remove("current");

    // Aggiungi la classe "active" all'elemento con id "secondo-elemento"
    document.getElementById("database").classList.add("current");
</script>




<main id="pgmain">
    <div class="dashboard-banner">
        <h2>Database</h2>
    </div>

    <div class="content-page">
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="database_db.php">DB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="database_create.php">CREA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="database_update.php">AGGIORNA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="database_delete.php">ELIMINA</a>
            </li>
        </ul>



        <form method="POST" action="includes/database_create.inc.php" enctype="multipart/form-data">
            <div>
                <label class="d-block"><strong>Nome comune: </strong></label>
                <input class="mb-3 select" type="text" name="nome_comune" required>

                <label class="d-block"><strong>Nome scientifico: </strong></label>
                <input class="mb-3 select" type="text" name="nome_scientifico" required>

            </div>

            <!-- tabella categoria -->

            <select class="select" style="text-transform: uppercase;" id="categoria" name="categoria" list="categoria" autocomplete="off">
                <datalist id="categoria-dl">
                    <option style="color: gray;" selected value="">Categoria</option>
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


            <!-- tabella gruppo-->
            <select class="select" style="text-transform: uppercase;" id="gruppo" name="gruppo" list="gruppo" autocomplete="off">
                <datalist id="gruppo-dl">
                    <option style="color: gray;" selected value="">Gruppo</option>
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


            <!-- tabella autoctona-->
            <select class="select" style="text-transform: uppercase;" id="autoctona" name="autoctona" list="autoctona" autocomplete="off">
                <datalist id="autoctona-dl">
                    <option style="color: gray;" selected value="">Autoctona</option>
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

            <!-- tabella res_malattie-->

            <select class="select" style="text-transform: uppercase;" id="res_malattie" name="res_malattie" list="res_malattie" autocomplete="off">
                <datalist id="res_malattie-dl">
                    <option style="color: gray;" selected value="">Resistenza alle malattie</option>
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

            <!-- tabella vel_accrescimento-->

            <select class="select" style="text-transform: uppercase;" id="vel_accrescimento" name="vel_accrescimento" list="vel_accrescimento" autocomplete="off">
                <datalist id="vel_accrescimento-dl">
                    <option style="color: gray;" selected value="">Velocità di accrescimento</option>
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



            <!-- tabella emissione_bvoc-->

            <select class="select" style="text-transform: uppercase;" id="emissione_bvoc" name="emissione_bvoc" list="emissione_bvoc" autocomplete="off">
                <datalist id="emissione_bvoc-dl">
                    <option style="color: gray;" selected value="">Emissione di BVOC</option>
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


            <!-- tabella apparato_radicale-->

            <select class="select" style="text-transform: uppercase;" id="apparato_radicale" name="apparato_radicale" list="apparato_radicale" autocomplete="off">
                <datalist id="apparato_radicale-dl">
                    <option style="color: gray;" selected value="">Apparato radicale</option>
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

            <!-- tabella res_gelate-->

            <select class="select" style="text-transform: uppercase;" id="res_gelate" name="res_gelate" list="res_gelate" autocomplete="off">
                <datalist id="res_gelate-dl">
                    <option style="color: gray;" selected value="">Resistenza alle gelate</option>
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



            <!-- tabella stutture urbane limitrofe-->

            <select class="select" style="text-transform: uppercase;" id="strutture_urbane_limistrofe" name="strutture_urbane_limistrofe" list="strutture_urbane_limistrofe" autocomplete="off">
                <datalist id="strutture_urbane_limistrofe-dl">
                    <option style="color: gray;" selected value="">Presenza di strutture urbane limitrofe</option>
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

            <!-- tabella bicazione urbanistica-->

            <select class="select" style="text-transform: uppercase;" id="ubicazione_urbanistica" name="ubicazione_urbanistica" list="ubicazione_urbanistica" autocomplete="off">
                <datalist id="ubicazione_urbanistica-dl">
                    <option style="color: gray;" selected value="">Ubicazione urbanistica</option>
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


            <!-- tabella ph-->

            <select class="select" style="text-transform: uppercase;" id="manutenzione" name="manutenzione" list="manutenzione" autocomplete="off">
                <datalist id="manutenzione-dl">
                    <option style="color: gray;" selected value="">Manutenzione</option>
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

            <!-- tabella costo fornitura-->


            <label class="d-block"><strong>Costo Fornitura: </strong></label>

            <!-- <label class="d-block mt-3">Altezza totale</label> -->
            <input placeholder="Costo minimo" class="mb-1 select" type="text" name="costo_min">
            <!-- <label class="d-block mt-1">Altezza chioma</label> -->
            <input placeholder="Costo massimo" class="mb-4 select" type="text" name="costo_max">



            <!-- tabella tipologia-->
            <select class="select" style="text-transform: uppercase;" id="tipologia" name="tipologia" list="tipologia" autocomplete="off">
                <datalist id="tipologia-dl">
                    <option style="color: gray;" selected value="">Tipologia</option>
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



            <!-- tabella portamento-->

            <input class="select" type="text" name="portamento" id="portamento" placeholder="PORTAMENTO">





            <!-- tabella esigenza fert suolo-->

            <select class="select" style="text-transform: uppercase;" id="esigenza_fert_suolo" name="esigenza_fert_suolo" list="esigenza_fert_suolo" autocomplete="off">
                <datalist id="esigenza_fert_suolo-dl">
                    <option style="color: gray;" selected value="">Esigenza fertilità suolo</option>
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

            <!-- tabella tipologia_suolo-->
            <select class="select" style="text-transform: uppercase;" id="tipologia_suolo" name="tipologia_suolo" list="tipologia_suolo" autocomplete="off">
                <datalist id="tipologia_suolo-dl">
                    <option style="color: gray;" selected value="">Tipologia Suolo</option>
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



            <!-- tabella res_siccita-->
            <select class="select" style="text-transform: uppercase;" id="res_siccita" name="res_siccita" list="res_siccita" autocomplete="off">
                <datalist id="res_siccita-dl">
                    <option style="color: gray;" selected value="">Resistenza alla siccità</option>
                    <?php
                    $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'res_siccità' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                    $result_cat = mysqli_query($conn, $sql_cat);
                    while ($cat_row = mysqli_fetch_array($result_cat)) {
                    ?>
                        <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                    <?php
                    }
                    ?>
                </datalist>
            </select>

            <!-- tabella res_alte temperature-->
            <select class="select" style="text-transform: uppercase;" id="res_alte_temp" name="res_alte_temp" list="res_alte_temp" autocomplete="off">
                <datalist id="res_alte_temp-dl">
                    <option style="color: gray;" selected value="">Resistenza alle alte temperature</option>
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

            <!-- tabella densità_chioma-->
            <select class="select" style="text-transform: uppercase;" id="densità_chioma" name="densità_chioma" list="densità_chioma" autocomplete="off">
                <datalist id="densità_chioma-dl">
                    <option style="color: gray;" selected value="">Densità della chioma</option>
                    <?php
                    $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'densità_chioma' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created' AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value';";
                    $result_cat = mysqli_query($conn, $sql_cat);
                    while ($cat_row = mysqli_fetch_array($result_cat)) {
                    ?>
                        <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                    <?php
                    }
                    ?>
                </datalist>
            </select>


            <!-- tabella servizi_ecosistemici-->
            <select class="select" style="text-transform: uppercase;" id="servizi_ecosistemici" name="servizi_ecosistemici" list="servizi_ecosistemici" autocomplete="off">
                <datalist id="servizi_ecosistemici-dl">
                    <option style="color: gray;" selected value="">Servizi ecosistemici attesi</option>
                    <?php
                    $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'servizi_ecosistemici' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created'  AND COLUMN_NAME != 'boa_id'  AND COLUMN_NAME != 'value'";
                    $result_cat = mysqli_query($conn, $sql_cat);
                    while ($cat_row = mysqli_fetch_array($result_cat)) {
                    ?>
                        <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                    <?php
                    }
                    ?>
                </datalist>
            </select>

            <!-- tabella ph -->

            <select class="select" style="text-transform: uppercase;" id="ph" name="ph" list="ph" autocomplete="off">
                <datalist id="ph-dl">
                    <option style="color: gray;" selected value="">PH</option>
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


            <!-- tabella maturità pianta-->



            <label class="d-block"><strong>Maturità Pianta: </strong></label>

            <!-- <label class="d-block mt-3">Altezza totale</label> -->
            <input placeholder="Altezza totale" class="mb-1 select" type="text" name="altezza_totale">
            <!-- <label class="d-block mt-1">Altezza chioma</label> -->
            <input placeholder="Altezza chioma" class="mb-1 select" type="text" name="altezza_chioma">
            <!-- <label class="d-block mt-1">Diametro chioma</label> -->
            <input placeholder="Diametro chioma" class="mb-1 select" type="text" name="diametro_chioma">
            <!-- <label class="d-block mt-1">Diametro fusto</label> -->
            <input placeholder="Diametro fusto" class="mb-4 select" type="text" name="diametro_fusto">

            <!-- tabella persistenza_foglia-->



            <input class="select" type="text" name="persistenza_foglia" id="persistenza_foglia" placeholder="PERSISTENZA FORGLIA - classe persistenza">




            <!-- tabella specie_allergenica-->

            <select class="select" style="text-transform: uppercase;" id="specie_allergenica" name="specie_allergenica" list="specie_allergenica" autocomplete="off">
                <datalist id="specie_allergenica-dl">
                    <option style="color: gray;" selected value="">Specie allergenica</option>
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

            <!-- tabella fascia_fitoclimatica-->

            <select class="select" style="text-transform: uppercase;" id="clima" name="clima" list="clima" autocomplete="off">
                <option style="color: gray;" selected value="">Clima</option>
                <datalist id="clima-dl">

                    <option class="value-selected" style="text-transform: uppercase;" value="lauretum">fascia fitoclimatica del lauretum</option>

                    <option class="value-selected" style="text-transform: uppercase;" value="castanetum">fascia fitoclimatica del castanetum</option>

                    <option class="value-selected" style="text-transform: uppercase;" value="fagetum">fascia fitoclimatica del fagetum</option>

                    <option class="value-selected" style="text-transform: uppercase;" value="picetum">fascia fitoclimatica del picetum</option>

                    <option class="value-selected" style="text-transform: uppercase;" value="alpinetum">fascia fitoclimatica del alpinetum</option>

                </datalist>
            </select>

            <!-- tabella dimensione_foglie-->



            <label class="d-block"><strong>Dimensione Foglia: </strong></label>

            <input placeholder="Lunghezza foglia" class="mb-1 select" type="text" name="lunghezza_foglia">
            <input placeholder="Larghezza foglia" class="mb-4 select" type="text" name="larghezza_foglia">


            <!-- altri campi per le altre tabelle -->
            <div>
                <input class="btn btn-info" type="submit" name="submit_created" value="Inserisci">

            </div>

        </form>



    </div>
</main>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $(".table-name").click(function() {
            var tableName = $(this).data("table-name");
            $("#table-" + tableName).toggle();
        });
    });
</script>
</body>
</body>

</html>