<?php
include 'conn.php'; // Include the database connection script

header('Content-Type: application/json');


$sql = "SELECT 
            e.event_name, 
            e.event_price, 
            e.event_date, 
            e.student_branch, 
            e.event_discription, 
            e.event_image, 
            e.event_register_link, 
            et.name AS event_type_name 
        FROM 
            your_table_name e 
        JOIN 
            event_type et 
        ON 
            e.event_type_id = et.id"; 

$result = $conn->query($sql);

$events = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = array(
            'eventName' => $row['event_name'],
            'eventPrice' => $row['event_price'],
            'eventDate' => $row['event_date'],
            'studentBranch' => $row['student_branch'],
            'description' => $row['event_discription'],
            'imageUrl' => $row['event_image'],
            'registerUrl' => $row['event_register_link'],
            'eventType' => $row['event_type_name'] 
        );
    }
} else {
    echo json_encode(array('message' => 'No events found.'));
    exit;
}

echo json_encode($events);

$conn->close();
?>
