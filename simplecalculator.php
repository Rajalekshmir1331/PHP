<html>
<head>
	<title>Simple Calculator</title>
</head>
<?php
$firstnum = $_POST['firstnum'];
$secondnum = $_POST['secondnum'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($firstnum) && is_numeric($secondnum)) {
    switch ($operator) {
        case "Add":
           $result = $firstnum + $secondnum;
            break;
        case "Subtract":
           $result = $firstnum - $secondnum;
            break;
        case "Multiply":
            $result = $firstnum * $secondnum;
            break;
        case "Divide":
            $result = $firstnum / $secondnum;
    }
}

?>

<body>
    <div id="page-wrap">
	<h1>PHP Simple Calculator Program</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="firstnum" id="firstnum" required="required" value="
                <?php echo $firstnum; ?>" /> <b>firstnum</b>
            </p>
            <p>
                <input type="number" name="secondnum" id="secondnum" required="required" value="
                <?php echo $secondnum; ?>" /> <b>secondnum</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </div>
</body>
</html>