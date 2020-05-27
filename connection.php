<?php
        $con = mysqli_connect("localhost","root","pass","my_data");

        if (mysqli_connect_errno())
        {
              die "Failed to connect to MySQL: " . mysqli_connect_error();
        }
  ?>