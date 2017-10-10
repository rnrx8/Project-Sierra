<html>
    <head>
        <title>edit admin</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="back">
        <div class="form3">
            <center><img src="img/f.png" height="58px"></img></center>
            <div class="text"> 
        <?php
        include 'dbconnect.php';
        
        $adminid=$_GET["adminid"];
        $sql = "SELECT * FROM admintable WHERE adminid=$adminid";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $adminid = $row["adminid"];
        $username = $row["username"];
        $password = $row["password"];
    }
} else {
    echo "0 results";
}
        ?>
        <form action="admin_editdata.php" method="POST">
            Name: <input type="text" name="name" value="<?php echo $name; ?>"<br><br>
            AdminID: <input type=text name="adminid" name="adminid" value="<?php echo $adminid; ?>"<br><br>
            Username: <input type="text" name="username" value="<?php echo $username; ?>"<br><br>
            Password: <input type="password" name="password" value="<?php echo $password; ?>"<br><br>
            <br>
            <center><input type="submit"></center>
        </form>
        </div>
        </div>
    </body>
</html>