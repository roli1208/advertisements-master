<?php
require_once "../Model/User.php";
require_once "../Model/Services/DBManager.php";
$sql = "SELECT id, name FROM users";
$result = connectToDB()->query($sql);
$users = [];
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $users[$row["id"]] = new User($row["id"],$row["name"]);
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
print_r($users);
