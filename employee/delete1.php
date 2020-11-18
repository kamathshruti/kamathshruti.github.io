<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <h3 id="title">Delete a record</h3>
    <div class="container">
        <form method="POST">
            <label for="empid">Employee id</label>
            <input type="text" id="empid" name="empid" placeholder="employee id.."><br><br>
            <label for="empname">Employee name</label>
            <input type="text" id="empname" name="empname" placeholder="employee name.."><br><br>
            <label for="salary">Employee salary</label>
            <input type="text" id="salary" name="salary" placeholder="employee salary."><br><br>
            <input type="submit" value="Delete">
        </form>
    </div>
    <?php
$mysql_host = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "emp_details";
$empid = $_POST['empid'];
$empname = $_POST['empname'];
$salary=$_POST['salary'];
$conn =mysqli_connect($mysql_host, $mysql_username, $mysql_password,
$mysql_database);
$sql = ("DELETE FROM emp WHERE empid =".$empid);
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
</body>

</html>
