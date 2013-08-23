<?php
    function build_house($width, $length) {
    	
    }
	
	function build_neighborhood($num_houses){
		for ($i=0; $i<$num_houses; $i++){
			build_house(300, 700);
		}
	}
	build_neighborhood(100)
?>