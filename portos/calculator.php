<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Calculator</title>
</head>
<style>
	body {
		background-color: #D3D3D3;
		font-family: sans-serif;
		}
	.calculator {
		border-radius: 5px;
		background-color: #ffffff;
		padding: 25px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
		box-shadow: 0px 0px 23px -1px rgba(0,0,0,0.74);
		-webkit-box-shadow: 0px 0px 23px -1px rgba(0,0,0,0.74);
		-moz-box-shadow: 0px 0px 23px -1px rgba(0,0,0,0.74);
	}
	.numbox {
		margin-bottom: 6px;
		padding: 15px;
		font-size: 20px;
		border-radius: 3px;
		outline: none;
		box-sizing: border-box;
		-webkit-transition: 0.5s;
		transition: 0.5s;
		border: 3px solid #ccc;
	}
	.numbox:focus {
		border: 3px solid #555;
	}
	.opbox {
		margin-bottom: 6px;
		color: #ffffff;
		background-color: #0099E4;
		border: none;
		padding: 15px 20px;
		font-size: 20px;
		border-radius: 3px;
	}
	.opbox:hover {
		background-color: #6C94BC;
	}
	input[type=reset] {
		background-color: #ED684B;
	}
	input[type=reset]:hover {
		background-color: #BA8475;
	}
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
	  -webkit-appearance: none;
		margin: 0;
	}
	input[type=number] {
		-moz-appearance: textfield;
	}
	h2 {
		text-align: center;
	}
</style>
<body>
	<?php
	if(isset($_POST['op'])) {
		$num1 = $_POST['firstnum'];
		$num2 = $_POST['secondnum'];
		$operator = $_POST['op'];
		if(is_numeric($num1) && is_numeric($num2)) {
			switch($operator){
				case "+":
					$result = $num1 + $num2;
					break;
				case "x":
					$result = $num1 * $num2;
					break;
				case "-":
					$result = $num1 - $num2;
					break;
				case "/":
					$result = $num1 / $num2;
					break;
			}
		}
		else {
			echo "<script>alert('Input error!')</script>";
		}
	}
	?>
	<div class="calculator">
		<h2>Simple PHP Calculator</h2>
		<form method="post">
			<input type="number" class="numbox" name="firstnum" placeholder="Enter first number.."><br>
			<input type="number" class="numbox" name="secondnum" placeholder="Enter second number.."><br>
			<input type="submit" class="opbox" name="op" value="+">
			<input type="submit" class="opbox" name="op" value="-">
			<input type="submit" class="opbox" name="op" value="x">
			<input type="submit" class="opbox" name="op" value="/">
			<input type="reset" class="opbox" value=Clr><br>
			<input type="number" class="numbox" name="result" value="<?php echo (isset($result))?$result:'';?>" readonly>
		</form>
	</div>
</body>
</html>
