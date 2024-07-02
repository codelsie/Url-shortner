<?php

require "includes/connection.php";
require "urlmanager.php";

$UrlManager = new UrlManager($conn);
$UrlManager->redirectToOriginalUrl();