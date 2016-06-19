<?php
    $servername = getenv('IP');
//$username = getenv('C9_USER');
    $username="spartan_patrolle";
    $password = '';
//    $database = "c9";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
//    echo "Connected successfully (".$db->host_info.") <br>"; 
    


$con = mysql_connect($servername,$username,"");
mysql_select_db("test",$con);

    return false;
?>