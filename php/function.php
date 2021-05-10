<?php

function check_login($con)
{
if(($_SESSION['id']))
{
$id=$_SESSION['id'];
$query = " select * from users where id= '$id' limit 1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result) > 0)
{
$user_data =mysqli_fetch_assoc($result);
return $user_data;
//header("Location: index.php");
//echo "passed function";
}


}
//redirect to login
else{
header("Location: signup.php");
}
die;

}
function random_num($length)
{

$text ="";
if($length <5)
{
$length = 5;
}
 $len = rand(4,$length);
for($i=0; $i<$len;$i++)
{
#code...
}
return $text;
}

