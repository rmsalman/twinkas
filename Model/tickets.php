<?php
	
class tickets 
	{


	private $dbConnect;
	function __construct()
	{
		require_once'DbConnect.php';
		$this->dbConnect =new DbConnect();
	}

	public function createTicket($title,$complain,$screenshot,$userid,$date){
		$qry="insert into tickets (ticketTitle,complain,screenshot,userid,date) values ('$title','$complain','$screenshot','$userid','$date')";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function viewmytickets($id)
	{
		$qry="select * from tickets where userid=$id";
		return $this->dbConnect->GetData($qry);
	}
}
?>