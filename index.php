<?php
    set_error_handler('error_handler');
    function error_handler($errno, $errstr, $errfile, $errline) {
        $date = date('Y-m-d H:i:s');
        $f = fopen('error_log.txt', 'a');
        $err = "[$date]:  $errstr in $errfile on line $errline\r\n";
        fwrite($f, $err);
        fclose($f);
    }
        include("top.html");
        include("header.html");
        include("main.php");
        include("footer.html");
        include("end.html");
?>