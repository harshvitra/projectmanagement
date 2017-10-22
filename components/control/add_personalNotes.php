<?php

        require('../connection.php');

        $user = "14104023";

        $noteTitle = $_POST["noteTitle"];
        $noteContent = $_POST["noteContent"];
        
        //$date = new DateTime('2000-01-01', new DateTimeZone('Asia/Kolkata'));
        date_default_timezone_set("Asia/Kolkata");


        $sqldate = date('Y-m-d');
        $time = date('H:i:s');

        $table = "personalnotes";

        $query = "insert into $table (noteTitle,noteContent,noteDate,noteTime,noteUser) values ('$noteTitle','$noteContent','$sqldate','$time','$user')";

        mysqli_query($con,"$query");


?>