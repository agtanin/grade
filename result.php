<?php

$marks = 0;

if ($marks<=100 && $marks>=80) {
	echo "You have got A+!";
}

elseif ($marks <=79 && $marks>=70) {
	echo "You have got A!";
}

elseif ($marks <=69 && $marks>=60) {
	echo "You have got A-!";
}

elseif ($marks<=59 && $marks >=50) {
	echo "You have got B!";
}

elseif ($marks <=49 && $marks>=40) {
	 echo "You have got C!";
}

if($marks<=39 && $marks>=33){
	echo "You have been passed!";
}

elseif($marks<0 OR $marks > 100){
	echo "Invalid Marks!";
}

else {
	echo "You have been failed! Better luck next time.";
}

?>

