<?php
/**
* ??: ?? Rank stu
* ???: Elo Rating System (???????)
* Author: ??? ???
* E-Mail: winipcss@outlook.com
*/
$run=new Rank();
$a=$run->selectStu();
var_dump($a); 
class Rank
{
	private static $K=32;

	function queryScore($stu){
		$sql="SELECT * FROM stu WHERE `id` = {$stu}";
		$query=new DBMysql();
		$info=$query->fetch($sql);
		return $info['score'];
	}

	function updateScore($Ra,$stu){
		$query=new DBMysql();
		$query->query("UPDATE `stu` SET `score` = $Ra WHERE `id` = $stu");
	}

	function expect($Ra,$Rb){
		$Ea=1/(1+pow(10,($Rb-$Ra)/400));
		return $Ea;
	}

	function calculateScore($Ra,$Ea,$num){
		$Ra=$Ra+$this::$K*($num-$Ea);
		return $Ra;
	}

	function selectStu(){
		require("DBMysql.php");
		$stu1=@$_POST['stu1'];
		$stu2=@$_POST['stu2'];
		$victoryid=@$_POST['id'];
		return $this->getScore($stu1,$stu2,$victoryid);
	}

	function getScore($stu1,$stu2,$victoryid){
		// ??????
		$Ra=$this->queryScore($stu1);
		$Rb=$this->queryScore($stu2);
		if($Ra & $Rb){
		// ????
		$Ea=$this->expect($Ra,$Rb);
		$Eb=$this->expect($Rb,$Ra);

		$Ra=$this->calculateScore($Ra,$Ea,$victoryid);
		$Rb=$this->calculateScore($Rb,$Eb,1-$victoryid);
		$Rab=array($Ra,$Rb);

		// ?????
		$this->updateScore($Ra,$stu1);
		$this->updateScore($Rb,$stu2);

		return $Rab;
		}
		else{
			return false;
		}
	}
}
