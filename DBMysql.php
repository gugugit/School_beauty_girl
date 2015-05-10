<?php
/**
* ??: ?????
* Author: ??? ???
* E-Mail: winipcss@outlook.com
*/
class DBMysql
{

	function dbc(){
		$dbc = @mysql_connect('localhost','root','') OR die('Could not connected to MySQL: '.mysql_error());
		$db_selected = mysql_select_db('beauty',$dbc);
		$program_char = "utf8";
		mysql_set_charset($program_char, $dbc);
		mysql_client_encoding($dbc);
		mysql_query("set character_set_results=utf8");
		mysql_query("SET NAMES utf8");   //?????????
		return $dbc;
	}
	
	function query($sql){
		$dbc=$this->dbc();
		$result=mysql_query($sql, $dbc);
		return $result;
	}
	
	function fetch($sql){
		$result=$this->query($sql);
		$fetch=mysql_fetch_array($result);
		return $fetch;
	}

}

