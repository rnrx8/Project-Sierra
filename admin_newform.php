<html>
    <body>
        Name: <?php echo $_POST["name"]; ?><br>
        Username: <?php echo $_POST["username"]; ?><br>
        Admin ID: <?php echo $_POST["adminid"]; ?><br>
        Password: <?php echo $_POST["password"]; ?><br>
        
        <?php
        include 'dbconnect.php';
        $name = $_POST["name"];
        $username = $_POST["username"];
        $adminid = $_POST["adminid"];
        $password = $_POST["password"];
        
        $sql = "INSERT INTO admintable (name, username, adminid, password)
        VALUES ('$name', '$username', '$adminid', '$password')";
    
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>   
    </body>
</html>