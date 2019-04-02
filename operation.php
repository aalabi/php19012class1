<?php	
	$math = 91;
	$english = 63;
	$physics = 76;
	$chemistry = 78;
	$furtherMath = 58;
	
	$totalScore = $math+$english+$physics+$chemistry+$furtherMath;
	$averageScore = $totalScore/5;
	
	echo "Math:$math English:$english<br/>Total Score:$totalScore <br/> Average Score:$averageScore";
	
	$biology = $furtherMath;
	
	$biology += 10;
	
	echo "<br/>";
	echo $biology;
	
	$biology -=5;
	
	echo "<br/>";
	echo $biology;
	
	echo "<br/>";
	++$biology;
	echo $biology;
	
	echo "<br/>";
	$day = 8;
	$month = 'April';
	$year = 2018;
	echo 'Today\'s date is ' .$day.' '.$month.' '.$year;
	
