<?php
$hostname = "sql.njit.edu";
$username = "mp473";
$password = "LXPjXPMZ";
$conn = NULL;
try 
{
    $conn = new PDO("mysql:host=$hostname;dbname=mp473",
    $username, $password);
}
catch(PDOException $e)
{
	http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
}

function runQuery($query) {
	global $conn;
    try {
		$q = $conn->prepare($query);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;	
	} catch (PDOException $e) {
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	}	  
}

function http_error($message) 
{
	header("Content-type: text/plain");
	die($message);
}

?>