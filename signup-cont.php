<?php
    include('conn.php');

    // if(isset($_POST["sub"])) {
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $ins = "INSERT INTO users SET name='$name', email='$email', pass='$pass'";
        $res = $con->query($ins);
        if($res!=1) {
            echo "Incorrect login";
        }
        else {
            echo 'logged in';
        }

        // header("location: index.php");
    // }
    // else {
    //     header("location: index.php");
    // }

?>