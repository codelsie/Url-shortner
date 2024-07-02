<?php
try {
    $conn = new mysqli('localhost', 'root', null, 'url_shortner');
} catch(Exception $exception) {
    die("Connection Failed: " . $exception->getMessage());
}
