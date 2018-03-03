<?php
    include('conn.php');

    // if(isset($_POST["sub"])) {
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $sel = "SELECT * FROM users WHERE name='$name' AND pass='$pass'";
        $res = $con->query($sel);
        $row = mysqli_num_rows($res);
        if($row!=1) {
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