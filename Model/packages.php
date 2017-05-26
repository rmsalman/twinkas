<?php
	require_once 'DbConnect.php';
	class groups extends DbConnect
	{
		
		public function fetchpkg($pkgid)
		{
			$qry="select * from groups where id='$pkgid'";
			return $this->GetData($qry);
		}
	}
?>