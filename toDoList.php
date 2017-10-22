<!DOCTYPE html>
<html lang="en">

<?php 

    require('components/connection.php');

    $table = "personaltodo";
    $query = "Select * from $table";

    $results =  mysqli_query($con,"$query");

    

    $rows = array();

    while($row = $results->fetch_assoc())
    $rows[] = $row;



?>

<head>

	<?php require('components/head.php'); ?>

    <?php require('components/csslinks.php'); ?>

    <link rel="stylesheet" type="text/css" href="css/user/user_toDoList.css">

    <script>
    /* must apply only after HTML has loaded */
        $(document).ready(function () {
            $("#memo_form").on("submit", function(e) {
                var postData = $(this).serializeArray();
                var formURL = $(this).attr("action");
                $.ajax({
                    url: formURL,
                    type: "POST",
                    data: postData,
                    success: function(data, textStatus, jqXHR) {
                        // $('#contact_dialog .modal-header .modal-title').html("Result");
                        // $('#contact_dialog .modal-body').html(data);
                        // $("#submitForm").remove();
                    },
                    error: function(jqXHR, status, error) {
                        console.log(status + ": " + error);
                    }
                });
                e.preventDefault();
            });
             
            $("#submitForm").on('click', function() {
                $("#memo_form").submit();
                location.reload();
            });
        });
    </script>

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
