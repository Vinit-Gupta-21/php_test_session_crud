<?php
    
    $conn = new mysqli("localhost","root","","library_management");
    session_start();
    if(!conn){
        echo "not connected!";
    }

?>