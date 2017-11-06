<?php
require "db.php" ;

$mode = $_GET["case_label"];
switch ($mode) {
	case 'insert':
		$sql = "insert into accounts (email, fname, lname,phone, birthday,
		gender,password) values ('mp473@njit.edu','Moises', 'Parra','201-222-2222','1992-19-07','Male','huehue11');";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
		
	case 'delete':
		$fname = 'Moises';
		$sql ="delete from accounts where fname = '$fname' ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;

	case 'update':
		$fname = 'Moises';
		$sql ="update accounts set password = 'dachin11' where fname = '$fname' ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
}

