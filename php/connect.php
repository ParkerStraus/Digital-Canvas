<?php
    function getConnection(){
        $db_host='fdb1029.awardspace.net'; //Should contain the "Database Host" value
        $db_name='4275700_sql'; //Should contain the "Database Name" value
        $db_user='4275700_sql'; //Should contain the "Database User" value
        $db_pass='artsite123567'; //Should contain the "Database Password" value

        $mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);

        if ($mysqli_connection->connect_error) {
        echo "Could not connect to $db_user, error: " . $mysqli_connection->connect_error;
        }
        else return $mysqli_connection;

    }
?>