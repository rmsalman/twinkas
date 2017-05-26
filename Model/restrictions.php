<?php
	class restrictions
	{
		public function loginrestriction(){
			if (isset($_SESSION['userid'])) {
				
			}
			else{
			header("Location:login.php");
		}
	}
	}

?>