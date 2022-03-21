<?php

	$name = $_GET["name"];

	$course_id = $_GET["course_id"];



	require_once('db_config.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO teacher VALUES ( '', '$name', '$course_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Name = $name <br> Course ID = $course_id";



	echo "<p><a href=home.html> << Home </a>";

?>