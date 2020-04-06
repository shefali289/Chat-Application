<?php
session_start();
include 'dbh.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div id="main">
        <div class="form-header">
            <h1><i class="fa fa-circle" style="margin-left: -40px; font-size: 25px; color: green;"></i> Online: <?php echo $_SESSION['name'];?></h1>
            <form action="logout.php" method="post">
                <input style="" type="submit" value="Logout">
            </form>
        </div>
        <div class="output">
            <?php
            
            $sql="SELECT * FROM posts";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "" . "<b>" .$row["name"] . "</b> ". " " . "==>" . "<b>" . $row["msg"] . "</b>" . "--" . $row["date"] . "<br>";
                    echo "<br>";  
                }
            }
            else
            {
                echo "0 results";
            }
            $conn->close();

            ?>
        </div>

        <form action="send.php" method="post" id="msgbox">
            <textarea class="form-control" name="msg" cols="30" rows="10" placeholder="Type to send message..."></textarea>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">
                    <b>Send</b>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
