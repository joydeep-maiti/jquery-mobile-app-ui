<?php
    include('conn.php');
    mysqli_select_db($con, "autorefresh");
        $sender = $_POST['username'];
        $sel = "SELECT * FROM chats WHERE sender='$sender'";
            $res = $con->query($sel);
            while($row = $res->fetch_assoc())
            {?>
                <div id="chat_data" style="background-color:aqua;">
                    <span style="color:green;"><?php echo $row['sender']; ?> : </span>
                    <span style="color:blue;"><?php echo date($row['time']); ?></span>
                    <p><span style="color:brown;"><?php echo $row['text']; ?></span><p>  
                </div>
<?php


            };
?>