<?php
    $con = mysqli_connect("localhost", "root", "", "prj");

    // if(isset($_POST["sub"])) {
        $text = $_POST["text"];
        $sender = 'joy';
        // $tmp = $_FILES["fileToUpload"]["tmp_propic"];
        // move_uploaded_file($tmp, $name)
        $ins = "INSERT INTO chats SET text = '$text', sender='$sender'";

        $con->query($ins);
        // header("location: index.php");
    // }
    // else {
    //     header("location: index.php");
    // }

?>