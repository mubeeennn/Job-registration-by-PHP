<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="First Name" name="firstName">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Last Name" name="lastName">
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
    include ('connection.php');
    if(isset($_POST['submit'])){
        $fname=mysqli_real_escape_string($con,$_POST['firstName']);
        $lname=mysqli_real_escape_string($con,$_POST['lastName']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone= mysqli_real_escape_string($con,$_POST['phone']);
        $password= mysqli_real_escape_string($con,$_POST['password']);

        $insertQuery= "insert into user (`firstName`, `lastName`, `email`, `phone`, `password`)
        VALUES('$fname','$lname','$email','$phone','$password')";

        $query= mysqli_query($con,$insertQuery);

        if($query){
            ?>
            <script>
                alert("Inserted success");
            </script>
            <?php
        }else{ ?>
            <script>
                alert("insertion failed");
            </script>
            <?php
    
        }


    }
?>