<?php
	$db_con = mysqli_connect("localhost", "bnm3614", "bnm55166432!");
	$db_select = mysqli_select_db($db_con,"bnm3614");
	mysqli_query($db_con,"set names utf8");

	function db_close()
	{
		$db_close = mysqli_close($db_con);
	}
?>