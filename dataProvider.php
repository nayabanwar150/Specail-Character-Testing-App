<?php include('conn.php');

echo "<table>";
echo "<tr><th>id</th><th>Username</th><th>Message</th></tr>";
$sql = "SELECT * FROM `specialcharater` ";
$query = mysqli_query($con, $sql);
while ($res = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>".$res['id']."</td>";
    echo "<td>".$res['username']."</td>";
    echo "<td>".$res['message']."</td>";
    echo "</tr>";
}

echo "</table>";
?>