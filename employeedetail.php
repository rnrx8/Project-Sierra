<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <input type="button" onclick="location.href='https://basic-programming-class-ryoka24.c9users.io/PHPForm-Activity/Add.php'"value="Add Info">
        
        
        
        <!--リスト-->
        <table>
            <tr>
                <th>Name</th>
            </tr>
            <tr>
                <th>User name</th>
            </tr>
            <tr>
                <th>Company ID</th>
            </tr>
        </table>
        
        <table>
            <tr>
                <th>Address</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Birthday/Age</th>
                <th>SSS</th>
                <th>TIN</th>
                <th>Philhealth</th>
                <th>PAG-IBIG</th>
            </tr>
        
        <?php
include 'dbconnect.php';

$sql = "SELECT * FROM employeetable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $infoID = $row["infoID"];
        echo "<tr><td>" . $row["employeeid"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["mobile_num"] . "</td>";
        echo "<td>" . $row["birthday"] . "</td>";
        echo "<td>" . $row["sss"] . "</td>";
        echo "<td>" . $row["tin"] . "</td>";
        echo "<td>" . $row["philhealth"] . "</td>";
        echo "<td>" . $row["pagibig"] . "</td>";
        echo "<td><a href='edit_employee.php?employeeidID=$employee'><button>edit</button></a>";
        echo "<a href='employee_delete.php?employeeid=$employeeid'><button>delete</button></a></td>";
    }
} else {
    echo "0 results";
}
?>
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