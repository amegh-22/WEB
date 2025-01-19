<?php
session_start();
$data = $_SESSION['data'];
echo "<center><h1>details</h1></center><br><br><center><table border='1' cellspacing='5'>
<tr>

    <th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>User</th>
</tr>";

// Loop through the data and display it
foreach ($data as $row) {
echo "<tr><td>" . $row["name"] . "</td>
    <td>" . $row["gen"] . "</td>
    <td>" . $row["age"] . "</td>
    <td>" . $row["user"] . "</td></tr></table></center>";
}

?>