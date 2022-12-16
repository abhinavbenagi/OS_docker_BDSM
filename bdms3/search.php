<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Recipient Page</title>
</head>
<body background="fin3.jpg">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>SEARCH FOR DONOR'S </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter the required blood group">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

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

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM donor WHERE CONCAT( blood_group ,area,pincode) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
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
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="10">No Record Found</td>  
                                                </tr>
                                            <?php
                                        }
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