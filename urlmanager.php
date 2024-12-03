<?php

class UrlManager
{
    public mysqli $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function redirectToOriginalUrl(): void
    {

        if(isset($_GET['code'])) {
            $code = $_GET['code'];

            $sql = "SELECT * FROM urls WHERE short_code = '$code'";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                header("location: " . $row['original_url']);
                exit;

            } else {
                echo "Url not found";
            }
        }
    }

    public function shortenUrl(): string|null
    {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $original_url = $_POST['url'];
            $short_code = substr(md5(time() . $original_url), 0, 5);

            $sql = "INSERT INTO urls (original_url, short_code) VALUES ('$original_url', '$short_code')";

            if($this->conn->query($sql) == true) {
                return "http://localhost/url_shortner/redirect.php?code=$short_code";
            }

        };
        return null;
    }

}
