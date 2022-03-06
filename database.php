<?php

    // create mysql object
    $db = new mysqli("localhost","root","","quizer");

    if($db->connect_error)
    {
        echo "vay vay vay";
    }

    else
    {
        $db->query("SET CHARACTER SET uft8");
    }
?>