<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>
    <h1>Employee Management</h1>
    
    <form action="create_employee.php" method="post">
        <label for="Employee_Name">Employee Name:</label>
        <input type="text" name="Employee_Name" required><br>
        
        <label for="Employee_Salary">Employee Salary:</label>
        <input type="number" name="Employee_Salary" step="10" required><br>
        
        <label for="Employee_Manager">Employee Manager (ID):</label>
        <input type="number" name="Employee_Manager"><br>
        
        <input type="submit" value="Create Employee">
    </form>

    <br>

    <form action="read_employee.php" method="get">
        <input type="submit" value="View Records">
    </form>

    <br>

    <form action="delete_employee.php" method="post">
        <input type="submit" value="Delete Record">
    </form>

    <br>

    <form action="update_employee.php" method="post">
        <input type="submit" value="Update Record">
    </form>
</body>
</html>
