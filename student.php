<?php
    include "db_connect.php";
    $result = $conn->query("SELECT*FROM students");
    echo "<h2>Registered Students</h2>";
    echo "<table border='1' cellpadding='5'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    </tr>";
    while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['email']}</td>
    <td>{$row['age']}</td>
    </tr>";
    }
    echo "</table>";
    echo '<br><a href="activity.php">Back to Registration</a>';
?>