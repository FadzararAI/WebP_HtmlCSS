<!DOCTYPE html>
<html>
<head>
	<title>Building Blocks PHP - Fadzarar</title>
</head>
<style>
	body{
		font-family: sans-serif;
	}
	code {
		display: inline-block;
		background-color: #f1f1f1;
		width: 95%;
		padding: 10px;
		font-size: 16px;
		border-radius: 10px;
	}
</style>
<body>
	<h1>Type Cast</h1>
	<code>
		<?php
			$a = 3.14159; // double
			$b = 12; // integer
			$a_cast = (int)$a;
			$b_cast = (double)$b;
			echo "a_cast: $a_cast<br>";
			echo "b_cast: $b_cast<br>";
		?>
	</code>
	<h1>Double to Integer</h1>
	<code>
		<?php
			$num = 12.54;
			$num2 = (int)$num;
			echo "num: $num<br>";
			echo "num2: $num2<br>";
			echo "Data Type num: " . gettype($num) . "<br>";
			echo "Data Type num2: " . gettype($num2);
		?>
	</code>
	<h1>Integer to Double</h1>
	<code>
		<?php
			$num1 = 12;
			$num2 = (double)$num1;
			echo "num1: $num1<br>";
			echo "num2: $num2<br>";
			echo "Data Type num1: " . gettype($num1) . "<br>";
			echo "Data Type num2: " . gettype($num2);
		?>
	</code>
	<h1>String to Double</h1>
	<code>
		<?php
			$string1 = '23.45';
			$string2 = 'ahmad';
			$num1 = (double)$string1;
			$num2 = (double)$string2;
			echo "$num1<br>";
			echo "$num2<br>";
			echo "Data Type num1: " . gettype($num1) . "<br>";
			echo "Data Type num2: " . gettype($num2)
		?>
	</code>
	<h1>Integer to String</h1>
	<code>
		<?php
			$num1 = 70;
			$string1 = (string)$num1;
			echo "$string1<br>";
			echo "Data Type: " . gettype($string1);
		?>
	</code>
	<h1>Double to String</h1>
	<code>
		<?php
			$num1 = 23.45;
			$string1 = (string)$num1;
			echo "string1: $string1<br>";
			echo "Data Type: " . gettype($string1);
		?>
	</code>
	<h1>General</h1>
	<code>
		<?php
			$string="45 students";
			$number=(int) $string;
			echo "The number of students in this class is ", $number, ".<br/>";
			echo " *************** <br/>";
			$book=8;
			$record=(string) $book;
			$total=$record + 3.5;
			print "The total is $total. <br>";
			echo " ============== <br/>";
			$sum=$string+$record;
			print "the sum is $sum.";
		?>
	</code>
	<h1>Single quote Double Quote</h1>
	<code>
		<?php
			$a=5000;
			$b="I have $a";
			$c='I get $a';
			$d=(float)pow($a,2);
			print $a."<br>";
			print $b."<br>";
			print $c."<br>";
			print $d."<br>";
		?>
	</code>
	<h1>Variable Variable</h1>
	<code>
		<?php
			$strname = 'amount';
			$$strname = 5;
			echo $amount;
		?>
	</code>

</body>
</html>