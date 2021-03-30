<?php include "php/dbconnect.php"; ?>
<?php include "php/law_firms_ajax.php"; ?>


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

  <!-- law firms filter -->
  <link rel="stylesheet" href="css/law_firms_filter.css">
  <script src="js/law_firms_filter.js"></script>

  <title>Law Firms</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
       <?php
        include "includes/navigation.php";
        include "includes/law_firms_filter.php";
       ?>
       
      </div>
      <div class="col-sm-9">

        <!-- table start-->
        <table id="myTable" class="table table-striped table-bordered" >

          <!-- table head start -->
          <thead>
            <tr>
              <th scope="col">Sr.No.</th>
              <th scope="col">Bar Number </th>
              <th scope="col">Technology </th>
              <th scope="col">Firm Name </th>
              <th scope="col"> Website </th>
              <th scope="col"> Country </th>
              <th scope="col"> Street </th>
              <th scope="col"> City</th>
              <th scope="col"> State</th>
              <th scope="col"> ZIP Code</th>
              <th scope="col"> First Name</th>
              <th scope="col"> Last Name</th>
              <th scope="col"> Title</th>
              <th scope="col"> Email</th>
              <th scope="col"> Contact Number</th>
              <th scope="col"> Practice Area</th>
              <th scope="col"> Admited Date</th>
              <th scope="col"> Remark</th>
              <th scope="col"> Law School</th>
              <th scope="col"> State Court</th>
              <th scope="col"> Firm Position</th>
              <th scope="col"> Firm Size</th>
          
           
            </tr>
          </thead>

          <!-- table head end and table body start -->


          <tbody id="result">

            <?php
            $sql = "SELECT * FROM `law_firm`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $sno = $sno + 1;
              echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['bar_number'] . "</td>
            <td>" . $row['technology'] . "</td>
            <td>" . $row['company_name'] . "</td>
            <td><a href='http://". $row['website']."' target='_blank' >". $row['website'] ."</a></td>
            <td>" . $row['country'] . "</td>
            <td>" . $row['street'] . "</td>
            <td>" . $row['city'] . "</td>
            <td>" . $row['state'] . "</td>
            <td>" . $row['zip_code'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['mobile_number'] . "</td>
            <td>" . $row['practice_area'] . "</td>
            <td>" . $row['admited_date'] . "</td>
            <td>" . $row['remark'] . "</td>
            <td>" . $row['law_school'] . "</td>
            <td>" . $row['state_court'] . "</td>
            <td>" . $row['firm_position'] . "</td>
            <td>" . $row['firm_size'] . "</td>
            
            
           

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
  <a href="http://" target="_blank" rel="noopener noreferrer"></a>
































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