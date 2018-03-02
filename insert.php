<?php
    include('conn.php');

    // if(isset($_POST["sub"])) {
        $text = $_POST["text"];
        $receiver = $_POST['username'];
        $sender = 'admin';
        // $tmp = $_FILES["fileToUpload"]["tmp_propic"];
        // move_uploaded_file($tmp, $name)
        $ins = "INSERT INTO chats SET text = '$text', sender='$sender', receiver='$receiver'";

        $con->query($ins);
        // header("location: index.php");
    // }
    // else {
    //     header("location: index.php");
    // }

?>