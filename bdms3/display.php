<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Repository</title>
</head>
<body background="fin3.jpg">

    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>REGISTERED DONOR'S DETAILS</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>id</th>
                                    <th>namee</th>
                                    <th>sex</th>
                                    <th>blood_group</th>
                                    <th>addresss</th>
                                    <th>area</th>
                                    <th>pincode</th>
                                    <th>city</th>
                                    <th>mobile_no</th>
                                    <th>dob</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","bdms_final");
                                    $query = "SELECT id,namee , sex, blood_group ,addresss ,area ,pincode ,city , mobile_no ,dob FROM donor";

                                   
                                        $query_run = mysqli_query($con, $query);

                                    
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['namee']; ?></td>
                                                    <td><?= $items['sex']; ?></td>
                                                    <td><?= $items['blood_group']; ?></td>
                                                    <td><?= $items['addresss']; ?></td>
                                                    <td><?= $items['area']; ?></td>
                                                    <td><?= $items['pincode']; ?></td>
                                                    <td><?= $items['city']; ?></td> 
                                                    <td><?= $items['mobile_no']; ?></td>
                                                    <td><?= $items['dob']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        
                                       
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>