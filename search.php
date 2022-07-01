<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
if(count($_POST)>0) {
$name=$_POST[name];
$result = mysqli_query($conn,"SELECT * FROM addbook where name='$name' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Return</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
<style>
#customers {
  font-family:Montserrat;
  border-collapse: collapse;
  width: 50%;
  text-align: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  color: #ffffff;
  background: #6c7ae0;
}
.myButton {
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	background-color:#007dc1;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Courier New;
	font-size:13px;
	padding:5px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.myButton:hover {
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	background-color:#0061a7;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>
</head>
<body>
<h1 style="font-family:Montserrat;margin-left: 600px;">Return Book</h1>
<div style="margin-left: 450px;margin-top: 100px;">
<table id="customers">
<tr>
<th>id</th>
<th>name</th>
<th>subject</th>
<th>author</th>
<th>return</th>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["subject"]; ?></td>
<td><?php echo $row["author"]; ?></td>
<td><a  class="myButton" href="delete.php?id=<?php echo $row['id']; ?>">Return</a></td>
</tr>
<?php
$i++;
}
?>
</table>
<div>
</body>
</html>
