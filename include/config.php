<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "mytechquestdb");

    $connectdb = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(!$connectdb){
        echo "Not Connected!";
    }
?>