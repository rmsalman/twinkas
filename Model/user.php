<?php

class User 
{
	private $dbConnect;

	function __construct()
	{
		require_once 'DbConnect.php';
		$this->dbConnect =new DbConnect();
	}
	public function register($n,$e,$g,$p,$ph,$i,$r,$gr)
	{
		$qry="insert into users (name,email,gender,pass,phone,img,referal,group_id) values ('$n','$e','$g','$p','$ph','$i','$r','$gr')";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function checkUser($e){
		$qry="select * from users where email='$e'";
		return $this->dbConnect->GetData($qry);
	}
	public function myProfile($m){
		$qry="select * from users where id='$m'";
		return $this->dbConnect->GetData($qry);
	}
	public function updateP($id,$title,$dob,$name){
		$qry="update users set title='$title',dob='$dob',name='$name' where id='$id'";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function verify($email,$pass)
	{
		$qry="select * from users where email='$email' and pass='$pass'";
		return $this->dbConnect->GetData($qry);
	}
	public function checkoldpswrd($id,$cp){
		$qry="select * from users where id='$id' and pass='$cp'";
		return $this->dbConnect->GetData($qry);
	}
	public function updatepswrd($id,$np)
	{
		$qry="update users set pass='$np' where id='$id'";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function updateimg($i,$im)
	{
		$qry="update users set img='$im' where id='$i'";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function updateC($id,$mbl2,$addr,$fb,$tw)
	{
		$qry="update users set mbl2='$mbl2',addr='$addr',fb='$fb',tw='$tw' where id='$id'";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function userImgandName($id)
	{
		$qry="select * from users where id='$id'";
		return $this->dbConnect->GetData($qry);
	}
	public function checkuserRefer($u){
		$qry="select * from users where id='$u'";
		return $this->dbConnect->GetData($qry);
	}
	public function updateCash($e,$newCash)
	{
		$qry="update users set cash='$newCash' where email='$e'";
		return $this->dbConnect->ExecuteQry($qry);
	}
	public function checkoldcash($e){
		$qry="select cash from users where email='$e'";
		return $this->dbConnect->GetData($qry);
	}
	public function getpending($e)
	{
		$qry="select * from users where referal='$e' and status='0'";
		return $this->dbConnect->GetData($qry);
	}
	public function me($i)
	{
		$qry="select * from users where id='$i'";
		return $this->dbConnect->GetData($qry);

	}
	public function checkprice($i){
		$qry="select * from groups where id='$i'";
		return $this->dbConnect->GetData($qry);
	}
}

?>