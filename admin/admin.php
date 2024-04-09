<?php
include "../includes/conn.php";

session_start();

$username = $_SESSION['username'];
$password = $_SESSION['pwd'];
$authQuery = "select username, password from users where username = '$username' and password = '$password'";
$authResult = mysqli_query($conn, $authQuery);


if (mysqli_num_rows($authResult) === 1) {


?>

  <?php
  include 'component/sidebar.php';

  ?>

  <!-- (B) MAIN -->
  <main id="pgmain">
    <div class="dashboard-banner">
      <h2>Dashboard</h2>
    </div>

    <div class="content-page d-flex">



      <div class="profile-box ">

        <?php
        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          if (mysqli_num_rows($result) == 1) {
            $profile_row = mysqli_fetch_array($result);
            $nome_admin = $profile_row['nome'];
            $cognome_admin = $profile_row['cognome'];
            $email_admin = $profile_row['email'];
            $username_admin = $profile_row['username'];


        ?>
            <div class="user-details">
              <h2>Dettagli Admin</h2>
              <div class="user-info">
                <div class="info-row">
                  <span class="info-label">Nome: </span>
                  <span class="info-value" id="name"><?php echo  $nome_admin; ?></span>
                </div>
                <div class="info-row">
                  <span class="info-label">Cognome: </span>
                  <span class="info-value" id="lastname"><?php echo  $cognome_admin; ?></span>
                </div>
                <div class="info-row">
                  <span class="info-label">Email: </span>
                  <span class="info-value" id="email"><?php echo  $email_admin; ?></span>
                </div>
                <div class="info-row">
                  <span class="info-label">Username: </span>
                  <span class="info-value" id="username"><?php echo   $username_admin; ?></span>
                </div>

              </div>
            </div>

        <?php
          }
        }

        ?>
      </div>

      <div class="visit-counter">
        <span id="visit-count">
          Numero di visitatori:
        </span>
      </div>


      <!-- <div class="todo-box"> -->
      <?php include 'todolist.php'; ?>
      <!-- </div> -->
    </div>
  </main>
  </div>







  <script>
    if (typeof(Storage) !== "undefined") {
      // Check if the count is already stored in the localStorage
      if (localStorage.indexVisitCount) {
        // Check if the current page is the index.php
        if (window.location.href.endsWith("../index.php")) {
          localStorage.indexVisitCount = Number(localStorage.indexVisitCount) + 1; // Increment the count
        }
      } else {
        // Check if the current page is the index.php
        if (window.location.href.endsWith("../index.php")) {
          localStorage.indexVisitCount = 1; // Initialize the count to 1
        } else {
          localStorage.indexVisitCount = 0; // Initialize the count to 0 for other pages
        }
      }
      var visitCountElement = document.getElementById("visit-count"); // Select the element
      visitCountElement.innerHTML = "Numero di visitatori: " + localStorage.indexVisitCount; // Update the content
    } else {
      document.write("Sorry, your browser does not support web storage.");
    }
  </script>


<?php
} else {
  echo "<script>window.location.href = '../index.php'</script>";
}
?>
</body>

</html>