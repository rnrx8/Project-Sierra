<!doctypehtml>
<?php
   ob_start();
   session_start();
   
   include 'dbconnect.php';
    
    $msg = '';
    
    if (isset($_POST['login']) && !empty($_POST['username']) 
     && !empty($_POST['password']) && !empty($_POST['logintype'])) {
    
    echo "hello gwapo";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $logintype = $_POST['logintype'];
    
    echo $username . $password . $logintype; 
    
    if ($logintype == "employee") {
         
    $sql = "SELECT * FROM employeetable WHERE username='$username' AND password='$password'";
    $login = $conn->query($sql);
    $count = mysqli_num_rows($login);
    echo $count;
    
    $row = $login->fetch_assoc();
            $employeeid = $row["employeeid"];
            
            $redirect = "employeedetail.php";
        } elseif ($logintype == "admin") {
            $sql = "SELECT * FROM admintable WHERE username='$username' AND password='$password' ";
            $login = $conn->query($sql);
            $count = mysqli_num_rows($login);
            
            $row = $login->fetch_assoc();
            $employeeid = $row["employeeid"];
            
            $redirect = "admin_home.php";
        } else {
            $msg = "Please select Login Type";
        }
    
     if ($count == 1) {
            
        $_SESSION['username'] = $username;
        $_SESSION['employeeid'] = $employeeid;
        header("Location: $redirect"); /* Redirect browser */
        exit();  

     }else {
        $msg = 'Wrong Username or Password';
     }
    }
?>

<html>
    <head>
        <title>Framgia Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="back">
        <div class="form">
            <center><img src="img/f.png" height="58px"></img></center>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <center>
                <span><?php echo $msg; ?></span>
            <div class="text">
                <div class="box">    
                <input type="text" name="username" width="100%" placeholder="Enter username" minlength="4" maxlength="20">
                </div>
                <br>
                <br>
                <div class="box">
                <input type="password" name="password" width="100%" placeholder="Enter Password" minlength="6" maxlength="20">
                </div>
                <br>
                <br>
                <input type="radio" name="logintype" value="admin">Admin
                <input type="radio" name="logintype" value="employee">Employee
                <input type="submit" value="Login" name="login" /><br><br>
                <a href="add_employee.php" color+"white">Register</a><br><br>
            </div>
            </center>
        </form>
        </div>
        </div>
        </body>
</html>