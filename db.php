<?php

    $server= "sql307.epizy.com";
    $username= "epiz_30922593";
    $password= "4pZzXDhMO5BJRU";
    $dbname= "epiz_30922593_contactform";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed:" .mysqli_connect_error())
    }

?>