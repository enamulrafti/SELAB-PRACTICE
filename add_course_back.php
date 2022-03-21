<?php

	$title = $_GET["title"];


	require_once('db_config.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course VALUES ( '', '$title' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> title = $title <br> ";



	echo "<p><a href=home.html> << Home </a>";

?>