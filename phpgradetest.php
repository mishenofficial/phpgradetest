<?php

$marks = 42;
$requiredA = 75 - $marks;
$requiredB = 65 - $marks;
$requiredC = 45 - $marks;
$requiredS = 35 - $marks;

if($marks >= 75)
{
	echo 'Grade A';
}

elseif ($marks < 75 & $marks >= 65)
{
	echo 'Grade B' . '<br>';
	echo 'Your marks are ' . $marks .'<br>';
	echo 'You need '. $requiredA.' to obtain an A';
}

elseif ($marks < 65 & $marks >= 45)
{
	echo 'Grade C'. '<br>';
	echo 'Your marks are ' . $marks .'<br>';
	echo 'You need '. $requiredB.' to obtain an B';
}

elseif ($marks < 45 & $marks >= 35)
{
	echo 'Grade S'. '<br>';
	echo 'Your marks are ' . $marks .'<br>';
	echo 'You need '. $requiredC.' to obtain an C';
}

else 
{
	echo 'Repeat the exam'. '<br>';
	echo 'Your marks are ' . $marks .'<br>';
	echo 'You need '. $requiredS.' to obtain an S';
}


?>