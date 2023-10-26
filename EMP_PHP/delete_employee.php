<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
</head>
<body>
    <h1>Delete Employee</h1>
    <form action="delete_employee.php" method="post">
        <label for="Employee_ID">Enter Employee ID to Delete:</label>
        <input type="number" name="Employee_ID" required>
        <input type="submit" value="Delete Employee">
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
        
        $sql = "DELETE FROM Employee WHERE Employee_id=$employee_id";
        
        if ($conn->query($sql) === TRUE) {
            echo "Employee with ID $employee_id has been deleted successfully.";
			
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo '<br><a href="employee_form.php">Back to Employee Form</a>';
        $conn->close();
    }
    ?>
</body>
</html>
