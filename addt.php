

<!DOCTYPE html>
<html>
    <head>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
	font-family: Montserrat;
	min-height: 100px;
	width: 15vw;
	margin: 100px auto;
	background: white;
	border-radius: 5px;

}
body {
  background: #EEF2F7;
}
.btn, button, input[type="button"], input[type="reset"], input[type="submit"] {
    appearance: none;
    background-color: #1a73e8;
border: none;
border-radius: 3px;
color:
    white;
    cursor: pointer;
    display: inline-block;
    font-family: Proxima Nova,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;
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
	  <div style="border-left-style: solid;margin-left: auto;padding-left: 100px;padding-right: 100px;padding-top: 10px;padding-bottom: 40px;margin-top: 1px;">
          <h1>Add Book</h1>
	<form name="myform" method="post" action="">
		Book Name:<br>
		<input type="text" name="name" required="">
		<br>
		Subject:<br>
		<input type="text" name="subject" required="">
		<br>
		Author:<br>
		<input type="text" name="author" required="">
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
	 $subject = $_POST['subject'];
	 $author = $_POST['author'];
	 $sql = "INSERT INTO addbook (name,subject,author)
	 VALUES ('$name','$subject','$author')";
	 if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript"> alert("Book added successfully")</script>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
