$servername = "sql313.epizy.com";
    $username = "epiz_32212029";
    $password = "Td30EDZH5T";
    $dbname = "epiz_32212029_BaseDatos"; 
 
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
};