
<!DOCTYPE html>
<html>
<head>
<title>📖Welcome</title>
<style>
   li {
      float: left;
    }
    
    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 50px;
      text-decoration: none;
    }
    .btn, button, input[type="button"], input[type="reset"], input[type="submit"] {
    appearance: none;
    background-color: #fae4e8;
border: none;
border-radius: 3px;
color:
    #0b2239;
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
    .count {
  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;

  
  

  width: 50vw;
  margin: 100px auto;
  background: #fae4e8;
  border-radius: 5px;
  text-align: center;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: #2f3778;
   text-align: center;
   font-family: 'Montserrat';
   font-size: 22px;
}

    </style>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
    <ul style="list-style-type:none;font-family: 'Montserrat';color:#2f3778;font-size: 20px;">
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="Library">Libaray</a></li>
      </ul>
      <div><input type="button" onclick="window.location.href = 'admin.html'" class="button" value="Let's Go" style="padding-left: 40px;padding-right: 40px;margin-left: 1200px;margin-top: -70px;"></div>
      <img src="bak.jpg" alt="library" style="height: 500px;width: 580px;margin-left: 700px;margin-top: -;">
 <div style="font-family: Proxima Nova,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;padding-top: 0px;margin-left: 60px;font-size:30px;text-align:center;margin-top: -400px;padding-bottom: 0px;width: 300px;height: 100px;">    
 <p style="color:#2f3778;font-family: 'Montserrat';font-size: 22px;">Number of Books</p>
<div style="font-family: Montserrat;
font-size: 100px;
text-align: center;">
<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM addbook";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?> 
</div>
</div>
<div style="font-family: Proxima Nova,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;padding-top: 0px;font-size:30px;text-align:center;padding-bottom: 0px;width: 300px;height: 100px;margin-top: -122px;margin-left: 340px;">    
 <p style="color:#2f3778;font-family: 'Montserrat';font-size: 22px;">Number of Users</p>
<div style="font-family: Montserrat;
font-size: 100px;
text-align: center;">
<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM addbook";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?> 
</div>
</div>

<div class="footer">
  <p>©</p>
</div>
</body>
</html>


