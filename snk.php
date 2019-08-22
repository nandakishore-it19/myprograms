<?php

$servername = "121.200.55.60:3307";
$username = "2019UIT1042";
$password = "2019UIT1042";
$database = "2019UIT1042";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br />";
$trunc="truncate table multiplication_table";
mysqli_query($conn,$trunc);
echo "table truncated <br />";
for ($i=1;$i<=30;$i++)
{
$result=$i*5;
$sql="insert into  multiplication_table (multiplicant,multiplier,result)values('$i',5,'$result')";
$res=mysqli_query($conn,$sql);
echo "Sucess $i <br />";
}

?>


