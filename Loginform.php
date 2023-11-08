<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="Username">
        <label for="">Password</label>
        <input type="text" class="form-control" name="Password">
        <button name="but">submit</button>
    </form>
    </center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","employee");
if(!$con)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    echo"connection successful";
}
if(isset($_POST['but']))
{
    $a=$_POST['Username'];
    $b=$_POST['Password'];
    $in="insert into login(Username,Password)values('$a','$b')";
    $ins=mysqli_query($con,$in);

$sel="select * from login";
$s=mysqli_query($con,$sel);
echo"<table border='1'>";
echo "<tr>";
echo"<th>username</th>";
echo"<th>password</th>";
while($row=mysqli_fetch_assoc($s))
{
    
    echo"<tr>";
    echo"<td>$row[Username]</td>";
    echo"<td>$row[Password]</td>";
    echo"</tr>";
}
}
?>

