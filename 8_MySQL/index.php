<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

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
    echo "Connected successfully (".$db->host_info.") <br>"; 
    
    
    //PULLING DATA FROM THE DATABASE!
//    $query = "SELECT * FROM users ";
//    $query ="SELECT * FROM users WHERE name='Beth'";  
//    $query = "SELECT * FROM users WHERE name LIKE 'b%'";  //all users with an h in their email;
//    $query = "SELECT * FROM users WHERE id<3";  
//    $query = "SELECT * FROM users WHERE id<4 AND password !=''";
//   $query = "SELECT `name` FROM users";

    $name="Ian Mc'Neil";
    $query = "SELECT `name` FROM users WHERE name='". mysqli_real_escape_string($db, $name) . "'";

    $numRows=0;
    
    if ($result = mysqli_query($db, $query) ) {
        $numRows = mysqli_num_rows( $result);
        
        echo "<pre>I got $numRows of data  here.\n\n";

        while ($row = mysqli_fetch_array($result ) ) {



            print_r ($row);
            echo "<br/>";
            
        }
        echo "</pre>";
        
    }
    
    /*
        $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('Beth', 'Beth@gmail.com', 'false')";
        $result = mysqli_query($db, $query);    
        echo "I added a row!<br>";
    */
    
//    $query = "UPDATE `users` SET `email`='ian@hotmail.com' WHERE `id`=3 LIMIT 1";
//    $query = "UPDATE `users` SET `name`='Ian Mc\'Neil' WHERE `id`=3 LIMIT 1";

    $result = mysqli_query ($db, $query);
    
    $query = "UPDATE `users` SET `email`='beth@hotmail.com' WHERE `id`=5 LIMIT 1";
    $result = mysqli_query ($db, $query);
    
    
    
    
    
    
    
    
    
    
?>