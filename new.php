<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


       while($data = mysqli_fetch_assoc($records)){

       echo "<tr>";
       echo "<td>".$data['id']."</td>";
       echo "<td>".$data['name']."</td>";
       echo "<td>".$data['subject']."</td>";
       echo "<td><a href='delete.php?id=".$data['id']."'>Delete</a></td>";
       echo "</tr>";
       }
?> 