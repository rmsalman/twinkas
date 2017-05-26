<?php

class Wallet 
{
	private $dbConnect;

	function __construct()
	{
		require_once 'DbConnect.php';
		$this->dbConnect =new DbConnect();
	}
	public function creatWallet($e,$r,$g)
	{
		$qry="insert into wallet (user_id,referal_user,group_id) values ('$e','$r','$g')";
		return $this->dbConnect->ExecuteQry($qry);
	}
}

?>