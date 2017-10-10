<html>
    <body>
        <?php echo $_POST["name"]; ?><br>
        <?php echo $_POST["employeeid"]; ?><br>
        <?php echo $_POST["username"]; ?><br>
        <?php echo $_POST["mobile_num"]; ?><br>
        <?php echo $_POST["email"]; ?><br>
        <?php echo $_POST["address"]; ?><br>
        <?php echo $_POST["birthday"]; ?><br>
        <?php echo $_POST["sss"]; ?><br>
        <?php echo $_POST["tin"]; ?><br>
        <?php echo $_POST["philhealth"]; ?><br>
        <?php echo $_POST["pagibig"]; ?><br>
        <?php echo $_POST["department"]; ?><br>
        <?php echo $_POST["password"]; ?><br>
        
        <?php
        include 'dbconnect.php';
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $employeeid = $_POST["employeeid"];
        $username = $_POST["username"];
        $mobile_num = $_POST["mobile_num"];
        $birthday = $_POST["birthday"];
        $sss = $_POST["sss"];
        $tin = $_POST["tin"];
        $philhealth = $_POST["philhealth"];
        $pagibig = $_POST["pagibig"];
        $department = $_POST["department"];
        
        $sql = "INSERT INTO employeetable (name, email, address, employeeid, username,password, mobile_num, birthday,sss, tin, philhealth, pagibig, department)
        VALUES ('$name', '$email', '$address', '$employeeid', '$username','$password', '$mobile_num', '$birthday','$sss', '$tin', '$philhealth', '$pagibig', '$department' )";
    
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>   
    </body>
</html>