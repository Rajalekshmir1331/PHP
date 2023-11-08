<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="post">
      <label for="" class="form-label"> Enter the first number </label>  
      <input type="text" name="num1" class="form-control"><br>
      <label for="" class="form-label">Enter the second number</label>
      <input type="text" name="num2" class="form-control"> <br>
      <button name="SUM">SUM</button>
      <button name="DIFF">DIFF</button>
      <button name="MUL">MUL</button>
      <button name="DIV">DIV</button>
      <BUTTON name="MOD">MOD</BUTTON>

</form>
<body>
</body>
</html>
<?php
if(isset($_POST["SUM"]))
{
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$n1+$n2;
    echo"The Sum is",$n3;
}
if(isset($_POST["DIFF"]))
{
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$n1-$n2;
    echo"The Difference is ",$n3;
}
if(isset($_POST["MUL"]))
{
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$n1*$n2;
    echo"The product is",$n3;
}
if(isset($_POST["DIV"]))
{
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$n1/$n2;
    echo"The quotient is",$n3;
}
if(isset($_POST["MOD"]))
{
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$n1%$n2;
    echo"The remainder is",$n3;
}
?>