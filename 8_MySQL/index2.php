<?php
    session_start();
//    $_SESSION['loginID']=1;

    $loginID=$_SESSION['loginID'];
    
    $_SESSION['loginID']++;


    echo "Login ID ". $loginID;
    
    
    
?>