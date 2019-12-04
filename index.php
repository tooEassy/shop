<?php 
    if (!isset($_COOKIE['user_id'])) {
        include("top.html");
        include("header.html");
        include("main.php");
        include("footer.html");
        include("end.html");
    }
?>