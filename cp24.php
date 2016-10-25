<?php

include 'connection/connection.php';

$sql = "SELECT * FROM cp24";
$result = $conn->query($sql);


$conn->close();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "" . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
?>