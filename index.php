<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kalkulators</title>
</head>

<body>

<form>	
	<input text="text" name="Num1" placeholder="Number 1">
	<input text="text" name="Num2" placeholder="Number 2">
	<select name="operator">
		<option>None</option>
		<option>Saskaitīt</option>
		<option>Atņemt</option>
		<option>Reizināt</option>
		<option>Dalīt</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit">Izrēķināt</button>
</form>
<p>Tava atbilde ir:</p>
<?php
	if (isset($_GET['submit'])) {
		$result1 = $_GET['Num1'];
		$result2 = $_GET['Num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case "None":
				echo "Tev vajag izvēlēties darbību!";
				break;
			case "Saskaitīt":
				echo $result1 + $result2;
				break;
			case "Atņemt":
				echo $result1 - $result2;
				break;
			case "Reizināt":
				echo $result1 * $result2;
				break;
			case "Dalīt":
				echo $result1 / $result2;
				break;
		}
	}
?>

</body>

</html> 