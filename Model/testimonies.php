<?php
	class testimonies
	{
		private $dbConnect;
		function __construct()
		{
			require_once 'DbConnect.php';
			$this->dbConnect =new DbConnect();
		}
		public function alltestmonies(){
			$qry="select * from testestimonies";
			return $this->dbConnect->GetData($qry);
		}
		public function mytestimonies($me)
		{
			$qry="select * from testestimonies where id=$me";
			return $this->dbConnect->GetData($qry);
		}
		public function addtestimony($u,$r,$t){
			$qry="insert into testestimonies (id,rating,testimony) values ('$u','$r','$t')";
			return $this->dbConnect->ExecuteQry($qry);
		}
		public function updatetestimony($u,$r,$t){
			$qry="update testestimonies set rating='$r',testimony='$t' where id=$u";
			return $this->dbConnect->ExecuteQry($qry);
		}
		public function alltestmonieswithLimit($s,$e)
		{	
			$qry="select * from testestimonies limit $s,$e";
			return $this->dbConnect->GetData($qry);
		}
	}
?>