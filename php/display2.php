<!DOCTYPE html>
<html>
<head>
<title> Table with Database</table>
<style type="text/css"
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>User_Id</th>
<th>Username</th>
<th>Password</th>
<th>Date</th>
</tr>
</body>
</html>
<?php
include("connection.php");
$sql= "Select * from users";
$result=mysqli_query($con,$sql);
if($result && mysqli_num_rows > 0)
{
while($row= $result -> fetch_assoc())
{
echo"<tr><td>".$row["id"]."</td><td>".$row["user_id"]."</td><td>".$row["user_name"]."</td><td>".$row["password"]."</td><td>".$row["date"]."</td></tr>";
}
echo"</table>";
}
else{
echo "0 result";
}

?>