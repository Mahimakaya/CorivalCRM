<?php include "php/dbconnect.php"; ?>
<?php include "php/bespoke_travel_agency_ajax.php"; ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!-- data table css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/table.css">

    <!-- navigation bar -->
    <link rel="stylesheet" href="css/navigation.css">
    <script src="js/navigation.js"></script>

    <!-- bespoke_travel_agency filter -->
    <link rel="stylesheet" href="css/bespoke_travel_agency_filter.css">
    <script src="js/bespoke_travel_agency_filter.js"></script>

    <title> Bespoke Travel Agency </title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php
                include "includes/navigation.php";
                include "includes/bespoke_travel_agency_filter.php";
                ?>

            </div>
            <div class="col-sm-9">

                <!-- table start-->
                <table id="myTable" class="table table-striped table-bordered">

                    <!-- table head start -->
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">Technology</th>
                            <th scope="col">Remark</th>
                            <th scope="col">No of Property</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Website</th>
                            <th scope="col">Street</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">ZIP Code</th>
                            <th scope="col">Country</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact Number</th>

                        </tr>
                    </thead>

                    <!-- table head end and table body start -->


                    <tbody id="result">


                    </tbody>
                    <!-- table body end -->
                </table>


                <!-- table end -->
            </div>

        </div>

    </div>

    































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>

</html>