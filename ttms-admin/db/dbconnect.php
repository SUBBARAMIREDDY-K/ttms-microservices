<?php
    $host = 'db';
    $user = 'php_docker';
    $pass = 'php_docker';
    $dbname ='timetable';
    if($mycon = @mysqli_connect($host,$user,$pass))
    {
        if(!mysqli_select_db($mycon,$dbname))
        {
            echo 'Could not connect to the DataBase';
        }
    }
    else{
        echo 'Could not connect to the server';
    }
?>