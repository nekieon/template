<?php
header('Content-Type: application/json');

//  Example query

$conn = new mysqli("localhost", "root", "root", "testgraph");

if ($conn->connect_error) {
    echo '<script>console.log(' . json_encode("Failed to connect to MySQL: " . $mysqli->connect_error) . ') </script>';
    exit();
}

$sqlQuery = "SELECT name, score FROM student";

$result = $conn->query($sqlQuery);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// $data = array(array('student' => 'Juan', 'score' => 45));

echo json_encode($data);
