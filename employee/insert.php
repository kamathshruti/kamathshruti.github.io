<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h3 id="title">Insert New record</h3>
    <div>
        <form method="POST" action="insert.php">
            <label for="empid">Employee id</label>
            <input type="text" name="empid" placeholder="employee id.."><br><br>
            <label for="empname">Employee name</label>
            <input type="text" name="empname" placeholder="employee name.."><br><br>
            <label for="designation">Employee designation</label>
            <input type="text" name="designation" placeholder="employee designation."><br><br>
            <label for="salary">Employee salary</label>
            <input type="text" name="salary" placeholder="employee salary."><br><br>
            <input type="submit" name="submit" value="Insert">
        </form>
    </div>
    <?php
        $mysql_host = "localhost";
        $mysql_username = "root";
        $mysql_password = "";
        $mysql_database = "emp_details";
        $empid = $_POST['empid'];
        $empname = $_POST['empname'];
        $designation = $_POST['designation'];
        $salary= $_POST['salary'];
        $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
        $prepare = $mysqli->prepare("INSERT INTO emp ( empid , empname , designation , salary) VALUES (?, ?, ?, ?)");
        $prepare->bind_param("ssss",$empid,$empname,$designation,$salary);
        $prepare->execute();
        $mysqli->close();
    ?>
</body>

</html>

