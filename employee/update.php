<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <h3 id="title">Update a record</h3>
    <div class="container">
        <form method="post">
            <label for="empid">Employee id</label>
            <input type="text" id="empid" name="empid" placeholder="employee id.."><br><br>
            <label for="empname">Employee name</label>
            <input type="text" id="empname" name="empname" placeholder="employee name.."><br><br>
            <label for="designation">Employee designation</label>
            <input type="text" id="designation" name="designation" placeholder="employee designation."><br><br>
            <label for="salary">Employee salary</label>
            <input type="text" id="salary" name="salary" placeholder="employee salary."><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $mysql_host = "localhost";
        $mysql_username = "root";
        $mysql_password = "";
        $mysql_database = "emp_details";
        $empid = $_POST['empid'];
        $empname = $_POST['empname'];
        $designation = $_POST['designation'];
        $salary= $_POST['salary'];
        $conn=new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);   
        $sql = ("UPDATE emp SET empname=\"$empname\", designation=\"$designation\", salary=\"$salary\" 
        WHERE empid =\"$empid\";");
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    ?>
</body>

</html>
