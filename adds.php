

<!DOCTYPE html>
<html>
    <head>
        <style>
            input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
div{
    text-align:center;
    background-color:red;
    box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;



border-left-width: 0px;
margin-left: 40px;
	text-align: center;
	font-family: Courier New;
	min-height: 100px;
	width: 15vw;
	margin: 100px auto;
	background: white;
	border-radius: 5px;

}
body {
  background: #EEF2F7;
}
.button {
    box-shadow:inset 0px 1px 0px 0px #3dc21b;
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	background-color:#44c767;
	border-radius:3px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Courier New;
	font-size:15px;
	font-weight:bold;
	padding:9px 32px;
	text-decoration:none;
}
.button:hover {
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	background-color:#5cbf2a;
}
.button:active {
	position:relative;
	top:1px;
}
input[type="text"]
{
    font-size:18px;
	font-family: Courier New,Courier,Lucida Sans Typewriter,Lucida Typewriter,monospace; 
}


		</style>
<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

</head>
  <body>
      <br>
      <br>
	  <a href="book.html">
	  <img src="back.png" style="margin-left: 100px;" width="40" height="40">
	  </a>
      <div style="border-left-style: solid;margin-left: auto;padding-left: 100px;padding-right: 100px;padding-top: 10px;padding-bottom: 40px;">
          <h1>Add Book</h1>
	<form name="myform" method="post" action="">
		Name:<br>
		<input type="text" name="name" required>
		<br>
		<br>
		Department:<br>
		<input type="text" name="dept" required>
		<br>
		<br>
        <input type="submit" class="button" name="save" value="submit">
        <br>
    </form>
</div>
  </body>
</html>

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "library";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $dept = $_POST['dept'];
	 $sql = "INSERT INTO addstaf (name,dept)
	 VALUES ('$name','$dept')";
	 if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript"> alert("staf added successfully")</script>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
