<?php include "php/dbconnect.php"; ?>
<?php include "php/vacation_rental_ajax.php";
?>




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
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="css/table.css">

  <!-- navigation bar -->
  <link rel="stylesheet" href="css/navigation.css">
  <script src="js/navigation.js"></script>

  <!-- Vacation rental filter -->
  <link rel="stylesheet" href="css/vacation_rental_filter.css">
  <script src="js/vacation_rental_filter.js"></script>

  <!-- Insert and Upload form CSS -->
  <link rel="stylesheet" href="css/insert_form.css">

  <title>Vacation Rental Company</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <?php
        include "includes/navigation.php";
        include "includes/vacation_rental_filter.php";
        ?>

      </div>
      <div class="col-sm-9">
        <h4 class="m-3">Industry : Hospatility/Vacation Rental Company</h4>

        <!-- table start-->
        <table id="myTable" class="table table-striped table-bordered">

          <!-- table head start -->
          <thead>
            <tr>
              <th scope="col">Sr.No.</th>
              <th scope="col">PMS</th>
              <th scope="col">Vacation Rental Company</th>
              <th scope="col">Website</th>
              <th scope="col">Number of Property</th>
              <th scope="col">Country</th>
              <th scope="col">Street</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Zipcode</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Title</th>
              <th scope="col">Email</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>

          <!-- table head end and table body start -->


          <tbody id="result">

            <?php
            $sql = "SELECT * FROM `vacation_rental`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $sno = $sno + 1;
              echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['pms'] . "</td>
            <td>" . $row['vacation_rental_company'] . "</td>
            <td> <a href='http://" . $row['website'] . " ' target='_blank'>" . $row['website'] . "</a></td>
            <td>" . $row['number_of_property'] . "</td>
            <td>" . $row['country'] . "</td>
            <td>" . $row['street'] . "</td>
            <td>" . $row['city'] . "</td>
            <td>" . $row['state'] . "</td>
            <td>" . $row['zipcode'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['contact_number'] . "</td>
            <td><button type='button' class='edit-btn btn btn-sm btn-info p-1' data-eid =  " . $row['data_id'] . ">Update</button></td>
            <td><button type='button' class='delete-btn btn btn-sm btn-danger p-1' data-id =  " . $row['data_id'] . ">Delete</button></td>
           

        </tr>";
            }
            ?>
          </tbody>
          <!-- table body end -->
        </table>


        <!-- table end -->
      </div>

    </div>


    <!-- update modal  -->
    <div id="modal">
      <div id="modal-form">
        <h4 class="text-center">Update Data</h4>
        <hr>

        <table id="update-form" cellpadding="2px" width="100%">

        </table>
        <div id="close-btn">X</div>

      </div>
    </div>
    <!-- insert modal  -->

    <div id="insert-modal">
      <div id="insert-modal-form">
        <h4 class="text-center">Insert New Data into Vacation Rental Company</h4>
        <hr>

        <table id="insert-form" cellpadding="2px" width="100%">
          <form action="php/vacation_rental_ajax.php" method="post">
            <tr>
              <td>PMS:</td>
              <td><input type='text' style='width: 100%;' name='insert-pms'></td>
            </tr>
            <tr>
              <td>Hotel Name: </td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-vname'></td>
            </tr>
            <tr>
              <td>Website:</td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-website'></td>
            </tr>
            <tr>
              <td>No.of Properties:</td>
              <td><input type='text' style='width: 100%;' name='insert-properties'></td>
            </tr>
            <tr>
              <td colspan='4'>
                <h5 class='text-center'>Address</h5>
              </td>
            </tr>
            <td>Street:</td>
            <td colspan='3'> <input type='text' style='width: 100%;' name='insert-street'></td>
            </tr>
            <tr>
              <td>State/Province:</td>
              <td><input type='text' style='width: 100%;' name='insert-state'></td>
              <td>City:</td>
              <td><input type='text' style='width: 100%;' name='insert-city'></td>
            </tr>
            <tr>
              <td>Country:</td>
              <td><input type='text' style='width: 100%;' name='insert-country'></td>
              <td>ZIP Code:</td>
              <td><input type='text' style='width: 100%;' name='insert-zipcode'></td>
            </tr>
            <tr>
              <td colspan='4'>
                <h5 class='text-center'>Person Information</h5>
              </td>
            </tr>
            <tr>
              <td>First Name</td>
              <td><input type='text' style='width: 100%;' name='insert-fname'></td>
              <td>Last Name</td>
              <td><input type='text' style='width: 100%;' name='insert-lname'></td>
            </tr>
            <tr>
              <td>Title</td>
              <td><input type='text' style='width: 100%;' name='insert-title'></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-email'></td>
            </tr>
            <tr>
              <td>Contact Number:</td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-contact'></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><input type='submit' name='insert-submit' id='insert-submit' value='Insert New Data'></td>
            </tr>
          </form>

        </table>
        <div id="insert-close-btn">X</div>

      </div>
    </div>


    <!-- upload modal  -->

    <div id="upload-modal">
      <div id="upload-modal-form">
        <h4 class="text-center">Upload New Data into Vacation Rental Company</h4>
        <hr>
        <strong>Please Check excel sheet format with given sheet before Uploading.</strong><br>
        <strong class="text-danger">If you upload data in wrong format then it will cause very big error.</strong>
        <hr>

        <a href="/resource/excel/table.txt" download>
          vishaal
        </a>
        <!-- <a href="resource/excel/hotel.sql" download>
          vishaal
        </a> -->
        <!-- <a href="resource/excel/vacationRentalCompany.xlsx" download>
          vishaal
        </a> -->





        <form action="php/vacation_rental_ajax.php" method="post">

        </form>


        <div id="upload-close-btn">X</div>

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

      // Delete 
      $(document).on("click", ".delete-btn", function(e) {
        var data_id = $(this).data("id");
        var element = this;
        var dlt_action = "delete";
        var conf = confirm("Dou want to delete this permanently");

        if (conf == true) {
          $.ajax({
            url: "php/vacation_rental_ajax.php",
            type: "POST",
            data: {
              data_id: data_id,
              dlt_action: dlt_action
            },
            success: function(data) {
              if (data == 1) {
                $(element).closest("tr").fadeOut();
                location.reload();
              } else {
                alert("Could not delete");
              }
            }
          });

        }


      });
      // update 
      $(document).on("click", ".edit-btn", function(e) {
        $("#modal").show();
        var data_eid = $(this).data("eid");
        var formfill = "formfill";

        $.ajax({
          url: "php/vacation_rental_ajax.php",
          method: "POST",
          data: {
            eid: data_eid,
            formfill: formfill
          },
          success: function(data) {
            $("#modal #update-form").html(data);
          }

        });

      });

      // hide modal 
      $("#close-btn").on("click", function() {
        $("#modal").hide();
      })
      // save updated data

      $(document).on("click", "#update-submit", function(e) {
        var data_id = $("#data-id").val();
        var pms = $("#update-pms").val();
        var vacation_name = $("#update-vname").val();
        var properties = $("#update-properties").val();
        var website = $("#update-website").val();
        var country = $("#update-country").val();
        var street = $("#update-street").val();
        var city = $("#update-city").val();
        var state = $("#update-state").val();
        var zipcode = $("#update-zipcode").val();
        var prefix = $("#update-prefix").val();
        var first_name = $("#update-fname").val();
        var last_name = $("#update-lname").val();
        var title = $("#update-title").val();
        var email = $("#update-email").val();
        var contact_number = $("#update-contact").val();
        var update = "update";

        $.ajax({
          url: "php/vacation_rental_ajax.php",
          method: "POST",
          data: {
            update: update,
            data_id: data_id,
            pms: pms,
            vacation_rental_company: vacation_name,
            number_of_property: properties,
            website: website,
            country: country,
            street: street,
            city: city,
            state: state,
            zipcode: zipcode,
            first_name: first_name,
            last_name: last_name,
            title: title,
            email: email,
            contact_number: contact_number,
          },
          success: function(data) {
            if (data == 1) {
              $("#modal").hide();
              location.reload();
            } else alert(data);
          }
        });
      });

      // insert functionality 

      // hide modal 
      $("#insert-close-btn").on("click", function() {
        $("#insert-modal").hide();
      })

      $(document).on("click", "#insert-btn", function(e) {
        $("#insert-modal").show();

      });




      //insert bulk data

      // hide modal 
      $("#upload-close-btn").on("click", function() {
        $("#upload-modal").hide();
      })


      $(document).on("click", "#upload-btn", function(e) {
        $("#upload-modal").show();
      });


      //Report generation
      // $(document).on("click", "#generate-report-btn", function(e) {

      //   alert("22");
      // });


    });
  </script>
</body>

</html>