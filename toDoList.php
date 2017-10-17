<!DOCTYPE html>
<html lang="en">

<head>

	<?php require('components/head.php'); ?>

    <?php require('components/csslinks.php'); ?>

    <link rel="stylesheet" type="text/css" href="css/user/user_toDoList.css">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php require('components/sidebar.php'); ?>
        <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
        	<?php require('components/user/user_toDoList.php'); ?>
            <!-- Page Content -->

    </div>
    <!-- /#wrapper -->

    <!--JS Files-->
    <?php require('components/jsfiles.php'); ?>

</body>

</html>
