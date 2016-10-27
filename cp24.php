<?php
include 'connection/connection.php';
$sql = "SELECT * FROM cp24";
$result = $conn->query($sql);
$conn->close();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         echo "" . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
<!DOCTYPE html>
<html>
<body>
<script>
    var val = "<?php echo $result; ?>";
    document.getElementById("txt").innerHTML = val;
</script>

<p id='txt'>
</p>
</body>
</html>
