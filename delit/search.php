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
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
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
	appearance: none;
    background-color: #C70039;
border: none;
border-radius: 3px;
font-family: Raleway;
color:
    white;
    cursor: pointer;
    display: inline-block;
	font-family: Raleway;
    font-size: 1em;
    -webkit-font-smoothing: antialiased;
    font-weight: 500;
    line-height: 1;
    padding: .75em 1em;
    text-decoration: none;
    user-select: none;
    vertical-align: middle;
    white-space: nowrap;
    outline: none;
    -webkit-transition: all .1s cubic-bezier(.165,.84,.44,1);
    -moz-transition: all .1s cubic-bezier(.165,.84,.44,1);
    transition: all .1s cubic-bezier(.165,.84,.44,1);
}

</style>
</head>
<body>
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
