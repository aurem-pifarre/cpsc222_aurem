<?php

function letter($score){	
	if($score<65){
		return "F";
	}
	if($score>=65 and $score<70){
		return "D";
	}
	if($score>=70 and $score<80){
		return "C";
	}
	if($score>=80 and $score<90){
		return "B";
	}
	if($score>=90 and $score<=100){
		return "A";
	}
}
?>
