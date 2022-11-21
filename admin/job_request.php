<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Request</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

    <?php
        include("../include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md12">
            <div class="row">
                <div class="col-md-2"  style="margin-left: -30px;">
                    <?php
                        include("sidenav.php");
                    ?>
                </div>

                <div class="col-md-10">
                    <h5 class="text-center">Job Request</h5>

                <div id="show">

                </div>
                   
                </div>
                
            </div>
        </div>
    </div>


    <script type="text/javascript">
         $.ajaxSetup({
         url: 'ping.php'
         });
        // show();
        // function show() {
        //     $.ajaxSetup({url: "ajax_job_request.php", success: function(data){
        //     $("#show").html(data);
        // }});
        // $.ajax();
        // }
        
        $(document).ready(function($) {
           
            show();
            function show() {
            
                $.ajaxSetup({
                    url:"ajax_job_request.php",
                    method:"POST",
                    success:function(data) {
                        $("#show").html(data);
                    }
                });
                $.ajaxSetup();
            }
        });
    </script> 
    
</body>
</html>