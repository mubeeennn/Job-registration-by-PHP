<?php
    $username="root";
    $pass="";
    $link="localhost";
    $port="3308";
    $dbname="we-backend";

    $con= mysqli_connect($link,$username,$pass,$dbname,$port);
    if($con){
        ?>
        <script>
            alert("connection success");
        </script>
        <?php
    }else{ ?>
        <script>
            alert("connection failed");
        </script>
        <?php

    }
    ?>