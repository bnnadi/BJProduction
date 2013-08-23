<?php
    // an OOP class in PHP
    class Whale {
    	
		public $name;
		public $length;
		public $whaleId;
		
		public function setWhaleID($givenID) {
			$this->whaleId = $givenID;
		}
		
		public function getWhaleID(){
			return $this->whaleId;
		}
		
		public static function getWhaleLength($humanHeight){
			return $humanHeight * 50;
		}
		
    }
    
?>