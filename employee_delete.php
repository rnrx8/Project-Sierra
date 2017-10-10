<html>
    <body>

    <?php
include 'dbconnect.php';

    $employeeid = $_GET["employeeid"];

    $sql = "DELETE FROM employeetable WHERE adminid=$employeeid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record is deleted successfully";
    } else {
        echo "Error durinf deleteing record: " . $conn->error;
    }
    ?>
    <a href="home.php">Home</a>
    </body>
</html>