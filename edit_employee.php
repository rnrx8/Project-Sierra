<html>
    <head>
        <title>edit admin</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="back">
        <div class="form1">
            <center><img src="img/f.png" height="58px"></img></center>
            <div class="text"> 
        <?php
        include 'dbconnect.php';
        
        $employeeid=$_GET["employeeid"];
        $sql = "SELECT * FROM employeetable WHERE employeeid=$employeeid";
        $result = $conn->query($sql);
        
        

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $employeeid = $row["employeeid"];
        $username = $row["username"];
        $password = $row["password"];
        $mobile_num = $row["mobile_num"];
        $email = $row["email"];
        $address = $row["address"];
        $birthday = $row["birthday"];
        $sss = $row["sss"];
        $tin = $row["tin"];
        $philhealth= $row["philhealth"];
        $pagibig = $row["pagibig"];
        $department = $row["department"];
        $userimage = $row["userimage"];
        
    }
} else {
    echo "No results!";
}
        ?>
        <form action="employee_editdata.php" method="POST">
           Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
            Username: <input type="text" name="username" value="<?php echo $username; ?>"><br>
            EmployeeID: <input type="text" name="employeeid" value="<?php echo $employeeid; ?>"><br>
            Password: <input type="password" name="password" value="<?php echo $password; ?>"><br>
            Department: <br> 
            
            
            <input type="radio" name="depertment" value="management">Management
            <input type="radio" name="depertment" value="design">Design
            <input type="radio" name="depertment" value="development">Development
            <input type="radio" name="depertment" value="design">Design
            <input type="radio" name="depertment" value="qa">QA
            <input type="radio" name="depertment" value="staff">Staff
            <br>
            <!-- 折り畳み展開ポインタ -->
<div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
<a style="cursor:pointer;border: none;
    color: rgba(241,96,12,0.84);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width: 82.25%;
    margin: auto;
    <!--background-color: rgba(241,96,12,0.84);-->
    ">Add more infomation</a>
</div>
<!--// 折り畳み展開ポインタ -->
 
<!-- 折り畳まれ部分 -->
<div id="open" style="display:none;clear:both;
    border: none;
    color: #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    background-color: #E5E5E5;
    width: 335px;
    position: absolute;
    right: -20px;
    box-shadow: 3px 3px 5px rgba(0,0,0,0.4);
    ">
    
    <style>
    .open{
    
    line-height:30px;
    height: 670px;
    width: 400px;
    margin: auto;
    background-color: #E5E5E5;
    box-shadow: 3px 3px 5px rgba(0,0,0,0.4);
}
    </style>

<!--ここの部分が折りたたまれる＆展開される部分になります。
自由に記述してください。-->

            Mobile Number: <input type="text" name="mobile_num"><br>
            Email: <input type="email" name="email"><br>
            Birthday: <input type="text" name="birthdate"><br>
            SSS: <input type="text" name="sss"><br>
            TIN: <input type="text" name="tin"><br>
            Philhealth: <input type="text" name="philhealth"><br>
            PAG-IBIG: <input type="text" name="pagibig"><br>
            <center><input type="submit"></center>
            </div>
<!--// 折り畳まれ部分 -->     
            <input type="hidden" value="<?php echo $employeeid; ?>" name="employeeid">
            <center><input type="submit"></center>
        </div>
        </div>
        </form>
        </div>
        </div>
        
    </body>
</html>