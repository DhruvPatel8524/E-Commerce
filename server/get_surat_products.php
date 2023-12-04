<?php

include('connection.php');


$stmt = $conn->prepare("Select * From products WHERE product_location = 'surat' LIMIT 4 ");

$stmt->execute();

$product1 = $stmt->get_result();


?>