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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- STILE CSS   -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/table-style.css" />

    <!-- FAVICON  -->
    <link rel="shortcut icon" href="https://www.cnr.it/sites/all/themes/custom/cnr03_theme/img/favicon-cnrlogo.png" type="image/vnd.microsoft.icon">

    <title>Document</title>
</head>

<style>
    * {
        color: black !important;
    }

    /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: top;
        height: 100vh;
        overflow: hidden;
        background-image: linear-gradient(to top, #09203f 0%, #537895 100%);
    } */

    .select-wrap {
        margin-top: 100px;
        width: 250px;
        transition: 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .select {
        padding: 15px 55px 15px 15px;
        border-radius: 8px;
        box-shadow: 0 3px 20px -1px rgba(22, 42, 90, 0.5);
        position: relative;
        min-height: 61px;
        z-index: 1;
        transition: 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .select p {
        text-transform: capitalize;
        color: black;
        opacity: 0.7;
        letter-spacing: 0.6pt;
        line-height: 2.2;
        font-size: 0.9em;
        transition: margin 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .select .arrow {
        right: 10px;
        top: calc(50% - 15px);
        bottom: 0;
        cursor: pointer;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .select .arrow:before,
    .select-wrap .select .arrow:after {
        content: "";
        position: absolute;
        display: block;
        width: 2px;
        height: 8px;
        top: 11px;
        border-bottom: 8px solid #99a3ba;
        transition: 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .select .arrow:before {
        -webkit-transform: rotate(-130deg);
        transform: rotate(-130deg);
    }

    .select-wrap .select .arrow:after {
        -webkit-transform: rotate(130deg);
        transform: rotate(130deg);
    }

    .select-wrap .select .arrow:hover {
        transition: 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        background: rgba(0, 0, 0, 0.1);
    }

    .select-wrap .select .filter {
        display: inline-block;
        padding: 5px 30px 5px 8px;
        margin: 10px 10px 0 0;
        background: #99a3ba;
        color: black;
        font-size: 0.9em;
        border-radius: 4px;
        position: relative;
        cursor: pointer;
        transform: scale(0);
        opacity: 0;
        display: none;
        transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55), opacity 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955), background 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .select .filter:after {
        content: "+";
        cursor: pointer;
        position: absolute;
        right: 4px;
        top: calc(50% - 10px);
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8em;
        color: #fff;
        border-radius: 20px;
        background: rgba(0, 0, 0, 0);
    }

    .select-wrap .select .filter:nth-child(3) {
        margin: 0 10px 0 0;
    }

    .select-wrap .select .filter:nth-child(4) {
        margin: 0 10px 0 0;
    }

    .select-wrap .select .filter:hover:after {
        transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55), opacity 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955), background 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        background: rgba(0, 0, 0, 0.2);
    }

    .select-wrap .select .filter.active {
        transform: scale(1);
        opacity: 1;
    }

    .select-wrap .filter-wrap {
        list-style-type: none;
        border-radius: 0 0 8px 8px;
        box-shadow: 0 4px 15px -1px rgba(22, 42, 90, 0.5);
        position: relative;
        display: none;
    }

    .select-wrap .filter-wrap li {
        padding: 5px 15px 5px 15px;
        cursor: pointer;
        transition: transform 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955), opacity 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955), background 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        opacity: 1;
        color: #fff;
    }

    .select-wrap .filter-wrap li:nth-child(1) {
        padding-top: 10px;
    }

    .select-wrap .filter-wrap li:last-child {
        padding-bottom: 9px;
    }

    .select-wrap .filter-wrap li:hover {
        background: #537895;
        transition: background 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .select-wrap .filter-wrap li.remove {
        transition: transform 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955), opacity 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955), background 0.2s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        transform: translateX(100px);
        opacity: 0;
    }

    .select-wrap.open .select {
        border-radius: 8px 8px 0 0;
        box-shadow: 0 0 15px -1px rgba(22, 42, 90, 0.2);
    }

    .select-wrap.open .select .arrow:before,
    .select-wrap.open .select .arrow:after {
        top: 4px;
    }

    .select-wrap.open .select .arrow:before {
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }

    .select-wrap.open .select .arrow:after {
        -webkit-transform: rotate(50deg);
        transform: rotate(50deg);
    }

    .header {
        text-align: center;
        color: black;
        /* background: #18bc9c; */
        /* position: fixed; */
        width: 100%;
        z-index: 1;
        height: 88vh;
        overflow: hidden;
        top: 0;
        left: 0;
    }
</style>

<body>

    <?php
    include "includes/conn.php";
    include "includes/navbar.php";
    include "includes/jumbo.php";
    ?>
    <div></div>
    <form style="width: 100%; text-align: center;" method="post" action="finder.php" enctype="multipart/form-data">

        <div class="search-item">
            <select placeholder="Fascia Fitosclimatica" id="clima" name="clima" list="clima" style="text-transform: uppercase;">
                <datalist id="clima-dl">
                    <!-- <option style="color: gray;" selected value="">Fascia Fitosclimatica</option> -->
                    <?php
                    $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'fascia_fitosclimatica' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created';";
                    $result_cat = mysqli_query($conn, $sql_cat);
                    while ($cat_row = mysqli_fetch_array($result_cat)) {
                    ?>
                        <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                    <?php
                    }
                    ?>
                </datalist>
            </select>
        </div>


        <div class="search-item">
            <select placeholder="Tipologia Suolo" class="select" style="text-transform: uppercase;" id="tipologia_suolo" name="tipologia_suolo" list="tipologia_suolo">
                <datalist id="tipologia_suolo-dl">
                    <!-- <option style="color: gray;" selected value="">Tipologia Suolo</option> -->
                    <?php
                    $sql_cat = "SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'tipologia_suolo' AND COLUMN_NAME != 'id' AND COLUMN_NAME != 'id_specie' AND COLUMN_NAME != 'created';";
                    $result_cat = mysqli_query($conn, $sql_cat);
                    while ($cat_row = mysqli_fetch_array($result_cat)) {
                    ?>
                        <option style="text-transform: uppercase;" value="<?php echo $cat_row['column_name']; ?>"><?php echo $cat_row['column_name']; ?></option>
                    <?php
                    }
                    ?>
                </datalist>
            </select>
        </div>


        <div style="width: 100%;" class="flexato" id="box-btn">
            <div>
                <button class="btn-cerca" id="btn-filtri" style="background-color: orange;" type="button" name="filtri">Aggiungi filtri</button>
            </div>

            <div>
                <input class="btn-cerca" id="btn-reset" style="background-color: red;" type="reset" value="Reset">
                <button class="btn-cerca" id="btn-cerca" name="submit" value="submit">Cerca</button>
            </div>
        </div>

    </form>



    <script>
        $.fn.selectify = function() {
            var select = $(this);
            var option = $("option")(this);
            var placeholder = select.attr("placeholder");

            // reorganize DOM, since <select> isn't much styleable
            // create the wrapper
            select.wrap("<div class='select-wrap'></div>");

            // create the filter wrap and the options in it
            select.after("<ul class='filter-wrap'></ul>");
            option.each(function() {
                var label = $(this).text();

                $(".select-wrap ul").append("<li>" + label + "</li>");
            });

            // replace the <select> with a div
            select.replaceWith("<div class='select'></div>");

            // add the expand arrow and the label
            $(".select-wrap .select")
                .prepend("<div class='arrow'></div>")
                .prepend("<p>" + placeholder + "</p>");

            // update variables
            select = $(".select-wrap");
            var filters = select.find("ul");
            option = select.find("ul li");
            placeholder = select.find("p");

            // open click
            select.find(".arrow").click(function() {
                $(select).toggleClass("open");

                filters.slideToggle(400, "easeInOutBack");
            });

            // add filter click
            $(document).on("click", ".select-wrap ul li", function() {
                var dis = $(this);

                function inFilter() {
                    // add same filter to box
                    var filter = $("<div class='filter'>" + dis.text() + "</div>");
                    $(".select").append(filter);

                    // remove transition
                    dis.addClass("remove");

                    // collapse list and remove the element
                    setTimeout(function() {
                        dis.slideToggle(200, function() {
                            dis.remove();
                        });

                        // set filter to inline block
                        filter.css("display", "inline-block");

                        // make it visible with transition
                        setTimeout(function() {
                            filter.addClass("active");
                        }, 200);
                    }, 300);
                }

                // change styling if there are no filters left
                if ($(".filter-wrap").children().length == 1) {
                    $(".select").css("border-radius", "8px");
                    $(".arrow").fadeOut();
                } else {
                    $(".select").removeAttr('style');
                    $(".arrow").fadeIn();
                }

                // fade out placeholder if its the first filter
                if ($(".select").children(".filter").length == 0) {
                    placeholder.css({
                        'margin': '-45px 0 15px 0'
                    });
                    inFilter();
                } else {
                    inFilter();
                }
            });

            // remove filter click
            $(document).on("click", ".filter", function() {
                var dis = $(this);

                function outFilter() {
                    // out transition
                    dis.removeClass("active");

                    // make the filter visible and remove the element from above
                    setTimeout(function() {
                        // append same filter to list
                        var filter = $("<li style='display:none'>" + dis.text() + "</li>");
                        filters.append(filter);

                        filter.slideToggle(200, function() {
                            dis.remove();
                        });
                    }, 300);
                }

                // change styling if there are filters again
                if ($(".filter-wrap").children().length == 0) {
                    $(".select").removeAttr('style');
                    $(".arrow").fadeIn();
                }

                // fade in label if no filter is active and execute function
                if ($(".select").children(".filter").length == 1) {
                    outFilter();

                    setTimeout(function() {
                        placeholder.removeAttr("style");
                    }, 470);
                } else {
                    outFilter();
                }
            });
        };

        $("select").selectify();
    </script>
</body>

</html>