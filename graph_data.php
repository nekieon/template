<?php
header('Content-Type: application/json');

//  Example query

// $conn = mysqli_connect("localhost","root","root","testgraph");

// $sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

// $result = mysqli_query($conn,$sqlQuery);

// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

// mysqli_close($conn);

// echo json_encode($data);

// Example returned data
$graph_array = array(
	array(
		'month' => 'January',
		'hits' => 10,
	),
	array(
		'month' => 'February',
		'hits' => 18,
	),
	array(
		'month' => 'March',
		'hits' => 10,
	),
	array(
		'month' => 'April',
		'hits' => 65,
	),
	array(
		'month' => 'May',
		'hits' => 25,
	),
	array(
		'month' => 'June',
		'hits' => 87,
	),
	array(
		'month' => 'July',
		'hits' => 53,
	),
	array(
		'month' => 'August',
		'hits' => 33,
	),
	array(
		'month' => 'September',
		'hits' => 42,
	),
	array(
		'month' => 'October',
		'hits' => 5,
	),
	array(
		'month' => 'November',
		'hits' => 33,
	),
	array(
		'month' => 'December',
		'hits' => 14,
	),
);

echo json_encode($graph_array);
?>