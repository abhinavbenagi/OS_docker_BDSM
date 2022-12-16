<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
      { // servername => localhost
        // username => root
        // password => empty
        // database name => bdms_final
     $conn= mysqli_connect('localhost','root','','bdms_final') or  die("Connection failed: " .mysqli_connect_error());
      if(isset($_POST['namee']) && isset($_POST['sex']) && isset($_POST['blood_group'] )&& isset($_POST['mobile_no']))

        {
           $namee = $_POST['namee'];
           $sex = $_POST['sex'];
           $blood_group = $_POST['blood_group'];
           $addresss = $_POST['addresss'];
           $area = $_POST['area'];
           $pincode = $_POST['pincode'];
           $city = $_POST['city'];
		    $mobile_no = $_POST['mobile_no'];
		    $dob = $_POST['dob'];
           
             $sql = "INSERT INTO donor ( namee , sex, blood_group ,addresss ,area ,pincode ,city , mobile_no ,dob) VALUES ('$namee', '$sex', '$blood_group', '$addresss', '$area', '$pincode', '$city', '$mobile_no', '$dob')";

             $query=mysqli_query($conn,$sql);

                if($query)
                  {
                    echo 'entry succeccful' ;


                     }
                 else{
                      echo 'error occured';
                    }                 
           }   
    }
 ?>