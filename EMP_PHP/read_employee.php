<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Salary</th><th>Manager</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Employee_id"]."</td><td>".$row["Employee_Name"]."</td><td>".$row["Employee_Salary"]."</td><td>".$row["Employee_Manager"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo '<br><a href="employee_form.php">Back to Employee Form</a>';
$conn->close();
?>
