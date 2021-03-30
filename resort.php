<?php include "php/dbconnect.php"; ?>
<?php include "php/resort_ajax.php"; ?>


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

  <!-- hotel filter -->
  <link rel="stylesheet" href="css/resort_filter.css">
  <script src="js/resort_filter.js"></script>

  <title>Resort</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
       <?php
        include "includes/navigation.php";
        include "includes/resort_filter.php";
       ?>
       
      </div>
      <div class="col-sm-9">

        <!-- table start-->
        <table id="myTable" class="table table-striped table-bordered" >

          <!-- table head start -->
          <thead>
            <tr>
              <th scope="col">Sr.No.</th>
              <th scope="col">HRMS</th>
              <th scope="col">ATS</th>
              <th scope="col">ERP</th>
              <th scope="col">POS</th>
              <th scope="col">RMS</th>
              <th scope="col">CM</th>
              <th scope="col">PMS</th>
              <th scope="col">IBE</th>
              <th scope="col">CRS</th>
              <th scope="col">Company Name</th>
              <th scope="col">Website</th>
              <th scope="col">street</th>
              <th scope="col">City</th>
              <th scope="col">State/Province</th>
              <th scope="col">Zipcode</th>
              <th scope="col">country</th>
              <th scope="col">Prefix</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Title</th>
              <th scope="col">Email</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Number of Rooms</th>
              <th scope="col">Star Rating</th>
              <th scope="col">ADR</th>
              <th scope="col">Services</th>
              <th scope="col">Type of Hotel</th>
              <th scope="col">Onwership</th>
              <th scope="col">Chain Name</th>
              <th scope="col">Facebook URL</th>
              <th scope="col">Alexa Rank</th>
              <th scope="col">Pool</th>
              <th scope="col">Activities</th>
              <th scope="col">Bar</th>
              <th scope="col">Golf Course</th>
              <th scope="col">Gym</th>
              <th scope="col">Spa</th>
            </tr>
          </thead>

          <!-- table head end and table body start -->


          <tbody id="result">

            <?php
            $sql = "SELECT * FROM `resort`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $sno = $sno + 1;
              echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['hrms'] . "</td>
            <td>" . $row['ats'] . "</td>
            <td>" . $row['erp'] . "</td>
            <td>" . $row['pos'] . "</td>
            <td>" . $row['rms'] . "</td>
            <td>" . $row['cm'] . "</td>
            <td>" . $row['pms'] . "</td>
            <td>" . $row['ibe'] . "</td>
            <td>" . $row['crs'] . "</td>
            <td>" . $row['company_name'] . "</td>
            <td> <a href='http://" . $row['website'] . " ' target='_blank'>" . $row['website'] . "</a></td>
            <td>" . $row['street'] . "</td>
            <td>" . $row['city'] . "</td>
            <td>" . $row['state'] . "</td>
            <td>" . $row['zipcode'] . "</td>
            <td>" . $row['country'] . "</td>
            <td>" . $row['prefix'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['contact_number'] . "</td>
            <td>" . $row['number_of_rooms'] . "</td>
            <td>" . $row['star_rating'] . "</td>
            <td>" . $row['adr'] . "</td>
            <td>" . $row['services'] . "</td>
            <td>" . $row['type_of_hotel'] . "</td>
            <td>" . $row['ownership'] . "</td>
            <td>" . $row['chain_name'] . "</td>
            <td>" . $row['facebook_url'] . "</td>
            <td>" . $row['alexa_rank'] . "</td>
            <td>" . $row['pool'] . "</td>
            <td>" . $row['activities'] . "</td>
            <td>" . $row['bar'] . "</td>
            <td>" . $row['golf_course'] . "</td>
            <td>" . $row['gym'] . "</td>
            <td>" . $row['spa'] . "</td>
           

          </tr>";
            }
            ?>
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

  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>