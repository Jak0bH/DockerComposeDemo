<?php
	$_db_host = "db";
	$_db_datenbank = "web";
	$_db_username = "root";
	$_db_password = "kreativling420";

	echo "Connecting...";
	$conn = new mysqli($_db_host, $_db_username, $_db_password, $_db_datenbank);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	echo "Connected.";
	if ($_res = $conn->query("SELECT VERSION()")) {
		while ($row = $_res->fetch_assoc()) {
			echo "MySQL Version: " . $row['VERSION()'];
		}
	} else {
		echo "Couldn't query database version";
	}
?>
