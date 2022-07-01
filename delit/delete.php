<?php

// Using database connection file here
$db = mysqli_connect("localhost","root","","library");
$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from addbook where id = '$id'"); // delete query

if($del)
{
    
    echo '"Book Returned To Library"';
    header("location:return.html"); // redirects to all records pag	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
mysqli_close($db);
?>