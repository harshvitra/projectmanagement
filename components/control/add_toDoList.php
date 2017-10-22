<?php

        require('../connection.php');

        $user = "14104023";

        $sToDoId = 0;

        $toDoTitle = $_POST["toDoTitle"];
        $toDoDate = $_POST["toDoDate"];

        $table = "personaltodo";

        $query = "insert into $table (toDoTitle,sToDoId,toDoUser,toDoDate) values ('$toDoTitle','$sToDoId','$user','$toDoDate')";

        mysqli_query($con,"$query");


?>