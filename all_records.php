
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
body{
    
}
</style>
</head>
<body>
<div class="container">
  <form class="form-inline" method = "post" action = "">>
    <input type="text" name="name" class="form-control" placeholder="Search name">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>
<table>
<tr>
<td>id</td>
<td>Name</td>
<td>subject</td>
<td>author</td>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
if(count($_POST)>0) {
$name=$_POST[name];
$result = mysqli_query($conn,"SELECT * FROM addbook where name='$name' ");
}
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["subject"]; ?></td>
<td><?php echo $row["author"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>