<!DOCTYPE html>
<html>
<head>
<title> Table with Database</title>
</head>

<body>
<h1>Emin
</h1>
<table>
<tr>
<th>Id</th>
<th>User_Id</th>
<th>Username</th>
<th>Password</th>
<th>Date</th>
</tr>
</table>
</body>
</html>
<?php
include("connection.php");
$sql= "Select * from users";
$result=mysqli_query($con,$sql);
if( $result -> num_rows > 0)
{
while($row= $result -> fetch_assoc())
{
echo"<tr><td>".$row["id"]."</td><td>".$row["user_id"]."</td><td>".$row["user_name"]."</td><td>".$row["password"]."</td><td>".$row["date"]."</td></tr>";
echo "<br>";
}
echo"</table>";
}
else{
echo "0 result";
}

?>