<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Employee_Name = $_POST['Employee_Name'];
$Employee_Salary = $_POST['Employee_Salary'];
$Employee_Manager = $_POST['Employee_Manager'];

$sql = "INSERT INTO Employee (Employee_Name, Employee_Salary, Employee_Manager) VALUES ('$Employee_Name', $Employee_Salary, $Employee_Manager)";

if ($conn->query($sql) === TRUE) {
    echo "Employee created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '<br><a href="employee_form.php">Back to Employee Form</a>';
$conn->close();
?>
