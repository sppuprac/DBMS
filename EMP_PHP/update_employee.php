<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <form action="update_employee.php" method="post">
        <label for="Employee_ID">Enter Employee ID to Update:</label>
        <input type="number" name="Employee_ID" required>
        <br>
        <label for="Employee_Name">New Employee Name:</label>
        <input type="text" name="Employee_Name" required>
        <br>
        <label for="Employee_Salary">New Employee Salary:</label>
        <input type="number" name="Employee_Salary" step="0.01" required>
        <br>
        <label for="Employee_Manager">New Employee Manager (ID):</label>
        <input type="number" name="Employee_Manager">
        <br>
        <input type="submit" value="Update Employee">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";
 
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $employee_id = $_POST['Employee_ID'];
        $Employee_Name = $_POST['Employee_Name'];
        $Employee_Salary = $_POST['Employee_Salary'];
        $Employee_Manager = $_POST['Employee_Manager'];       
        $sql = "UPDATE Employee SET Employee_Name='$Employee_Name', Employee_Salary=$Employee_Salary, Employee_Manager=$Employee_Manager WHERE Employee_id=$employee_id";
        if ($conn->query($sql) === TRUE) {
            echo "Employee with ID $employee_id has been updated successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo '<br><a href="employee_form.php">Back to Employee Form</a>';
        $conn->close();
    }
    ?>
</body>
</html>
