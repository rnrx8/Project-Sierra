<html>
    <body>
        Name: <?php echo $_POST["name"]; ?><br>
        EmployeeID: <?php echo $_POST["employeeid"]; ?><br>
        Username: <?php echo $_POST["username"]; ?><br>
        Password: <?php echo $_POST["password"]; ?><br>
        
        <?php
        include 'dbconnect.php';
        $name = $_POST["name"];
        $employeeid = $_POST["employeeid"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "UPDATE employeetable SET name='$name', EmployeeID='$employeeid', Username='$username', Password='$password'
        WHERE employeeid=$employeeid";
    
        if ($conn->query($sql) === TRUE) {
        echo "New record changed successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>  
    </body>
</html>