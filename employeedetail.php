<?php
    session_start();
    if(isset($_SESSION['username'])) {
      echo "Your session is running " . $_SESSION['username'] . "<br>";
      echo "employeeid is " . $_SESSION['employeeid'];
    } else {
      header("Location: home.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        
        include 'dbconnect.php';
        
        $employeeid = $_SESSION['employeeid'];
        $sql = "SELECT * FROM employeetable WHERE employeeid=$employeeid";
        $result = $conn->query($sql);
        
        $row = $result->fetch_assoc();
        
        $employeeid = $row["employeeid"];
        $name = $row["name"];
        $username = $row["username"];
        $mobile_num = $row["mobile_num"];
        $email = $row["email"];
        $address = $row["address"];
        $birthday = $row["birthday"];
        $sss = $row["sss"]; 
        $tin = $row["tin"] ;
        $philhealth = $row["philhealth"]; 
        ?>
        
        
        
        <!--リスト-->
        <table>
            <tr><th>Name</th></tr>
            <tr><td><?php echo $name; ?></td></tr>
            <tr><th>Username</th></tr>
            <tr><td><?php echo $username; ?></td></tr>
            <tr><th>Company ID</th></tr>
            <tr><td><?php echo $employeeid; ?></td></tr>
        </table>
        
        <br><br><br><br>
        
        <table>
            <tr><th>Mobile Number</th></tr>
            <tr><td><?php echo $mobile_num; ?></td></tr>
            <tr><th>Email</th>
                <tr><td><?php echo $email; ?></td></tr>
                <th>Address</th>
                <th>Birthday/Age</th>
                <th>SSS</th>
                <th>TIN</th>
                <th>Philhealth</th>
                <th>PAG-IBIG</th></tr>
            </tr>
            <tr>
                <td>
                    <a href="edit_employee.php?employeeid=<?php echo $employeeid; ?>"><button>edit</button></a>
                    <a href="employee_delete.php?employeeid=<?php echo $employeeid; ?>"><button>delete</button></a>
                </td>
            </tr>
        </table>
    <h4>In case of emagency</h4>
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>contact</th>
        </tr>
        <tr>
        
        </tr>
    </table>
    </body>
    
</html>