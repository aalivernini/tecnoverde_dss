<?php
include "conn.php";
if (isset($_POST['login_submit'])) {
    $username = strtolower($_POST['username']);
    $password = strtolower($_POST['password']);

    if (($username != "") &&  ($password != "")) {

        $query = "select * from users where username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['pwd'] = $password;

                header("Location: ../admin/statistiche.php");
            } else {

                session_start();

                $_SESSION['error'] = "Email o password errati";

                header('Location: ../index.php');
                // echo ("<script>location.href='../index.php'</script>");
            }
        }
    }
}
