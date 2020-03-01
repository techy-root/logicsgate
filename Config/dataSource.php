<?php
        # set required property to connect database
        $servername = "localhost";
        $hostUsername = "dbuser";
        $hostPassword = "dbpassword";
        $dbname = "social_account";

        //new connection
        $conRef = new mysqli($servername, $hostUsername, $hostPassword, $dbname);

        // Check connection
        if ($conRef->connect_error) {
            die("Connection failed: " . $conRef->connect_error);
        }
        
?>