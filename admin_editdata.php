<html>
    <body>
        Name: <?php echo $_POST["name"]; ?><br>
        Admind: <?php echo $_POST["adminid"]; ?><br>
        Username: <?php echo $_POST["username"]; ?><br>
        Password: <?php echo $_POST["password"]; ?><br>
        
        <?php
        include 'dbconnect.php';
        $name = $_POST["name"];
        $adminid = $_POST["adminid"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "UPDATE admintable SET name='$name', AdminID='$adminid', Username='$username', Password='$password'
        WHERE adminid=$adminid";
    
        if ($conn->query($sql) === TRUE) {
        echo "New record changed successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>  
    </body>
</html>