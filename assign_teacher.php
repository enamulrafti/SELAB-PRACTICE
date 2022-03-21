<?php
	require_once('db_config.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM teacher as t LEFT JOIN course as c ON t.course_id = c.course_id " )
		or die("Can not execute query");


	echo "<table border> \n";
	echo "<th>ID</th> <th>Name</th> <th>Course</th> <th>Assign</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );

		echo "<tr>";
		echo "<td> $teacher_id </td>";
		echo "<td> $name </td>";
        echo "<td> $title </td>";
        
        $results1 = mysqli_query( $connect, "SELECT * FROM course")
        or die("can't connect");

        while ( $rows1 = mysqli_fetch_array($results1)){

            extract ($rows1);
            echo "<td> <a href = 'assign_back.php? teacher_id=$teacher_id & course_id=$course_id'> $title  </a> </td>";
        }
		
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>