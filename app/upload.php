<?php
// Database connection details
$hostname = "mysql";
$username = "user";
$password = "your_password";
$database = "asknicely";

try {
    // Create PDO database connection
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // If the connection fails, exit the script
    exit();
}
omov


// Connect to MySQL
$conn = new mysqli("localhost", "user", "your_password", "asknicely");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display employees
$result = $conn->query("SELECT * FROM employees");
while ($row = $result->fetch_assoc()) {
    echo "Company: " . $row["company_name"] . "<br>";
    echo "Employee: " . $row["employee_name"] . "<br>";
    echo "Email: " . $row["email_address"] . "<br>";
    echo "Salary: " . $row["salary"] . "<br><br>";
}

$conn->close();
?>
