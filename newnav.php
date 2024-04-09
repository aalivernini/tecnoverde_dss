    <nav>
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php">
                    <img class="logo" src="assets/logo.png" alt="logoCnr">
                </a>
            </div>

            <div id="hamnav">
                <label for="hamburger">&#9776</label>
                <input type="checkbox" id="hamburger">

                <div id="hamitems">
                    <a href="#">Home</a>
                    <a href="https://customer.mvc-technology.com/airtree/">Tecnoverde</a>
                    <!-- <a href="#">Docs</a> -->
                    <div>
                        <button class="btn btn-info" id="login-button-toggle" onclick="showLoginBoxToggle()">Accedi</button>
                        <form id="login-form-toggle" class="login" method="POST" action="includes/loginInc.php" enctype="multipart/form-data">
                            <span class="close-button" onclick="closeLoginBoxToggle()">X</span>
                            <input id="name" name="username" type="text" placeholder="Username" required>
                            <input id="password" name="password" type="password" placeholder="Password" required>
                            <input class="btn-login" name="login_submit" type="submit" value="Login">
                        </form>
                    </div>
                </div>
            </div>


            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="https://customer.mvc-technology.com/airtree/">Tecnoverde</a></li>
                <!-- <li><a href="#">Docs</a></li> -->


                <?php

                ?>

                <button class="btn btn-info" id="login-button" onclick="showLoginBox()">Accedi</button>
                <!-- <form id="login-form" class="login" method="POST" action="includes/loginInc.php" enctype="multipart/form-data">
                    <span class="close-button" onclick="closeLoginBox()">X</span>
                    <input id="name" name="username" type="text" placeholder="Username" required>
                    <input id="password" name="password" type="password" placeholder="Password" required>
                    <input class="btn-login" name="login_submit" type="submit" value="Login">
                </form> -->
            </ul>
        </div>
        <?php

        if (isset($_SESSION['error'])) {

        ?>
            <script>
                // Crea il div del popup
                const popupDiv = document.createElement('div');
                popupDiv.className = 'popup';
                popupDiv.id = 'popupDiv';

                // Crea il contenuto del popup
                const popupContenuto = document.createElement('div');
                popupContenuto.className = 'popup-contenuto';
                popupContenuto.textContent = 'Username e/o password errati';

                const popupClose = document.createElement('span');
                popupClose.className = 'popup-close';
                popupClose.id = 'popupClose';
                popupClose.textContent = 'X';

                // Aggiungi il contenuto al popup
                popupDiv.appendChild(popupContenuto);
                popupDiv.appendChild(popupClose);

                // Aggiungi il popup al body del documento
                document.body.appendChild(popupDiv);

                let idDiv = document.getElementById('popupDiv');

                let idClose = document.getElementById('popupClose');

                idDiv.style.display = "block";

                idClose.addEventListener("click", () => {
                    // nascondiamo il form di login
                    idDiv.style.display = "none";
                })
            </script>

        <?php

            unset($_SESSION['error']);
        }

        ?>

    </nav>


    <script>
        const loginButton = document.querySelector("#login-button");
        const loginButtonToggle = document.querySelector("#login-button-toggle");
        $("#login-form").css("display", "none")
        $("#login-form-toggle").css("display", "none")
        // selezioniamo la "x" per chiudere il form
        const closeButton = document.querySelector(".close-button");
        const closeButtonToggle = document.querySelector(".close-button-toggle");

        // selezioniamo il form di login
        const loginForm = document.querySelector("#login-form");
        const loginFormToggle = document.querySelector("#login-form-toggle");

        const buttLogin = document.querySelector(".btn-login");
        const name = document.querySelector("#name");
        const password = document.querySelector("#password");

        //aggiungiamo un evento al click del bottone "Accedi"

        function showLoginBox() {

            if ($("#login-form").css("display", "none")) {

                $("#login-form").css("display", "block")
            } else {
                $("#login-form").css("display", "none")
            }
        }

        // aggiungiamo un evento al click sulla "x" per nascondere il form di login
        function closeLoginBox() {
            $("#login-form").css("display", "none")
        }


        function showLoginBoxToggle() {

            if ($("#login-form-toggle").css("display", "none")) {

                $("#login-form-toggle").css("display", "block")
            } else {
                $("#login-form-toggle").css("display", "none")
            }
        }

        // aggiungiamo un evento al click sulla "x" per nascondere il form di login
        function closeLoginBoxToggle() {
            $("#login-form-toggle").css("display", "none")
        }
    </script>