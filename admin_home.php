<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <input type="button" onclick="location.href='add_admin.php'"value="Register Admin">
        <?php
        
        include 'dbconnect.php';
        
        $adminid=$_GET["adminid"];
        
        echo "<a href='admin_delete.php?adminid=$adminid'><button>delete adminuser</button>";
        ?>
        
        
        <!--リスト-->
        <table>
            <tr>
                <th>Name</th>
            </tr>
            <tr>
                <th
            </tr>
        </table>
        <table>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Department</th>
            </tr>
        
        <?php
include 'dbconnect.php';

$sql = "SELECT * FROM employeetable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $employeeid = $row["employeeid"];
        echo "<tr><td>" . $row["employeeid"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";
        echo "<td><a href='edit_employee.php?employeeid=$employeeid'><button>edit</button></a>";
        echo "<a href='employee_delete.php?employeeid=$employeeid'><button>delete</button></a></td></tr>";
    }
} else {
    echo "0 results";
}
?>
    </table>
    
    </body>
    
</html>