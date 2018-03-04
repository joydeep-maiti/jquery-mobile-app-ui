<?php
    include('conn.php');
    mysqli_select_db($con, "autorefresh");
        $sender = $_POST['username'];
        // $receiver = $_POST['loggedUser'];
        $receiver=$_COOKIE['loggedUser'];
        // echo $receiver;
        // $sel = "SELECT * FROM chats "; 
        // -- sender in ('$sender','admin)' AND receiver in ('admin','$sender)";
        $sel = "SELECT * FROM `chats` WHERE (sender='$sender' AND receiver='$receiver') OR (sender='$receiver' AND receiver='$sender')";
            $res = $con->query($sel);
            while($row = $res->fetch_assoc())
            {?>
                <!-- <div id="chat_data" style="background-color:aqua;">
                    <span style="color:green;"><?php echo $row['sender']; ?> : </span>
                    <span style="color:blue;"><?php echo date($row['time']); ?></span>
                    <p><span style="color:brown;"><?php echo $row['text']; ?></span><p>  
                </div> -->
                <p><span style="color:brown;"><?php echo $row['text']; ?></span><p>
<?php


            };
?>