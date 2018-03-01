<?php
    include('conn.php');
    mysqli_select_db($con, "autorefresh");
        $sel = "SELECT * FROM chats";
            $res = $con->query($sel);
            while($row = $res->fetch_assoc())
            {?>
                <div id="chat_data">
                    <span style="color:green;"><?php echo $row['sender']; ?> : </span>
                    <span style="size:5px;"><?php echo $row['time']; ?></span>
                    <p><span style="color:brown;"><?php echo $row['text']; ?></span></p>
                    
                    
                </div>
<?php


            };
?>