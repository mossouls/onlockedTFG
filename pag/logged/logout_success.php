<?php
    session_start();
    session_unset();
    session_destroy();
    print("<p>You have successfully logged out. You will be redirected to the main page shortly...</p>");
    header("Refresh:3;./../../index.php");
?>