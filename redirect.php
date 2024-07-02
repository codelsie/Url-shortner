<?php
require 'includes/connection.php';
    if(isset($_GET['code'])){
        $code = $_GET['code'];


    $sql = "SELECT * FROM urls WHERE short_code = '$code'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        header("location: " . $row['original_url']);
        exit;
    }else{
        echo "Url not found";
    }
    }

$conn->close();