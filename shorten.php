<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $original_url = $_POST['url'];
    $short_code = substr(md5(time() . $original_url), 0, 5);

    $sql = "INSERT INTO urls (original_url, short_code) VALUES ('$original_url', '$short_code')";

    if($conn->query($sql) == TRUE){
        $short_url = "http://localhost/url_shortner/redirect.php?code=$short_code";
        $link = "Short URL: <a href='$short_url'>$short_url</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    
    }

};