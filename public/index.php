<?php
    // Going to mvc-toets.org/ doesn't work and the .htaccess doesn't automatically send you to domain/index
    if("http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'] == "http://mvc-toets.org/") {
        header("Location: http://mvc-toets.org/index");
    }

    require_once '../app/require.php';
?>

<a href="http://mvc-toets.org/countries/index"><h1>Countries Index</h1></a>