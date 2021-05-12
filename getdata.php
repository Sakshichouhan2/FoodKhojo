<!-- PHP Code -->
    
    <?php
$servername = "localhost";
$username = "foodkhojoDB";
$password = "Khojofood@001";
$dbname = "foodkhojoreview";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *  FROM `foodkhojoreview` WHERE `City` = \'Balaghat\'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["Customer Name"]. " - Name: " . $row["City"]. " " . $row["Review"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

	<!-- Code  Close -->