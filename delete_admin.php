<html>
    <body>

    <?php
include 'dbconnect.php';

    $adminid = $_GET["adminid"];

    $sql = "DELETE FROM admintable WHERE adminid=$adminid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record is deleted successfully";
    } else {
        echo "Error durinf deleteing record: " . $conn->error;
    }
    ?>
    <a href="admin.php">Home</a>
    </body>
</html>