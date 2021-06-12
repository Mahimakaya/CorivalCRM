<?php include "php/dbconnect.php"; ?>
<?php include "php/hotel_ajax.php"; ?>


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
  <link rel="stylesheet" href="css/hotel_filter.css">
  <script src="js/hotel_filter.js"></script>

  <!-- Insert form CSS -->
  <link rel="stylesheet" href="css/insert_form.css">


  <title>Hotel</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 mainnav">
        <?php
        include "includes/navigation.php";
        include "includes/hotel_filter.php";
        ?>

      </div>
      <div class="col-sm-9 maintable">

        <h4 class="m-3">Industry : Hospatility/Hotels</h4>


        <!-- table start-->
        <table id="myTable" class="table table-striped table-bordered">

          <!-- table head start -->
          <thead>
            <tr>
              <th scope="col">Sr.No.</th>
              <th scope="col">HRMS</th>
              <th scope="col">ATS</th>
              <th scope="col">CRM</th>
              <th scope="col">ERP</th>
              <th scope="col">POS</th>
              <th scope="col">RMS</th>
              <th scope="col">CM</th>
              <th scope="col">PMS</th>
              <th scope="col">IBE</th>
              <th scope="col">CRS</th>
              <th scope="col">Hotel Name</th>
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
              <th scope="col">Hotel Class</th>
              <th scope="col">ADR</th>
              <th scope="col">Services</th>
              <th scope="col">Type of Hotel</th>
              <th scope="col">Onwership</th>
              <th scope="col">Chain Name</th>
              <th scope="col">Facebook URL</th>
              <th scope="col">Alexa Rank</th>
              <th scope="col">Monthly Visitors</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>

          <!-- table head end and table body start -->


          <tbody id="result">

            <?php
            $sql = "SELECT * FROM `hotel`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $sno = $sno + 1;
              echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['hrms'] . "</td>
            <td>" . $row['ats'] . "</td>
            <td>" . $row['crm'] . "</td>
            <td>" . $row['erp'] . "</td>
            <td>" . $row['pos'] . "</td>
            <td>" . $row['rms'] . "</td>
            <td>" . $row['cm'] . "</td>
            <td>" . $row['pms'] . "</td>
            <td>" . $row['ibe'] . "</td>
            <td>" . $row['crs'] . "</td>
            <td>" . $row['hotel_name'] . "</td>
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
            <td>" . $row['hotel_class'] . "</td>
            <td>" . $row['adr'] . "</td>
            <td>" . $row['services'] . "</td>
            <td>" . $row['type_of_hotel'] . "</td>
            <td>" . $row['ownership'] . "</td>
            <td>" . $row['chain_name'] . "</td>
            <td>" . $row['facebook_url'] . "</td>
            <td>" . $row['alexa_rank'] . "</td>
            <td>" . $row['monthly_visitor'] . "</td>
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
        <h4 class="text-center">Insert New Data into Hotel</h4>
        <hr>

        <table id="insert-form" cellpadding="2px" width="100%">
          <form action="php/hotel_ajax.php" method="post">
            <tr>
              <td colspan='4' class='text-center'>
                <h5>Technology</h5>
              </td>
            </tr>
            <tr>
              <td>HRMS:</td>
              <td><input type='text' style='width: 100%;' name='insert-hrms'></td>
              <td>ATS:</td>
              <td><input type='text' style='width: 100%;' name='insert-ats'></td>
            </tr>
            <tr>
              <td>CRM:</td>
              <td><input type='text' style='width: 100%;' name='insert-crm'></td>
              <td>ERP:</td>
              <td><input type='text' style='width: 100%;' name='insert-erp'></td>
            </tr>
            <tr>
              <td>POS:</td>
              <td><input type='text' style='width: 100%;' name='insert-pos'></td>
              <td>RMS:</td>
              <td><input type='text' style='width: 100%;' name='insert-rms'></td>
            </tr>
            <tr>
              <td>CM:</td>
              <td><input type='text' style='width: 100%;' name='insert-cm'></td>
              <td>PMS:</td>
              <td><input type='text' style='width: 100%;' name='insert-pms'></td>
            </tr>
            <tr>
              <td>IBE:</td>
              <td><input type='text' style='width: 100%;' name='insert-ibe'></td>
              <td>CRS:</td>
              <td><input type='text' style='width: 100%;' name='insert-crs'></td>
            </tr>
            <tr>
              <td colspan='4' class='text-center'>
                <h5>Hotel Info</h5>
              </td>
            </tr>

            <tr>
              <td>Hotel Name: </td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-hname'></td>
            </tr>


            <tr>
              <td>Website:</td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-website'></td>
            </tr>
            <tr>
              <td colspan='4'>
                <h5 class='text-center'>Address</h5>
              </td>
            </tr>
            <tr>
              <td>Street:</td>
              <td colspan='3'> <input type='text' style='width: 100%;' name='insert-street'></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input type='text' style='width: 100%;' name='insert-city'></td>
              <td>State/Province:</td>
              <td><input type='text' style='width: 100%;' name='insert-state'></td>
            </tr>
            <tr>
              <td>ZIP Code:</td>
              <td><input type='text' style='width: 100%;' name='insert-zipcode'></td>
              <td>Country:</td>
              <td><input type='text' style='width: 100%;' name='insert-country'></td>
            </tr>
            <tr>
              <td colspan='4'>
                <h5 class='text-center'>Person Information</h5>
              </td>
            </tr>
            <tr>
              <td>Prefix</td>
              <td><input type='text' style='width: 100%;' name='insert-prefix'></td>
              <td>Title</td>
              <td><input type='text' style='width: 100%;' name='insert-title'></td>
            </tr>
            <tr>
              <td>First Name</td>
              <td><input type='text' style='width: 100%;' name='insert-fname'></td>
              <td>Last Name</td>
              <td><input type='text' style='width: 100%;' name='insert-lname'></td>
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
              <td colspan='4'>
                <h5 class='text-center'>Hotel Specifications</h5>
              </td>
            </tr>
            <tr>
              <td>No. of Rooms</td>
              <td><input type='text' style='width: 100%;' name='insert-room'></td>
              <td>Hotel Class</td>
              <td><input type='text' style='width: 100%;' name='insert-class'></td>
            </tr>
            <tr>
              <td>ADR</td>
              <td><input type='text' style='width: 100%;' name='insert-adr'></td>
              <td>Type of Hotel:</td>
              <td><input type='text' style='width: 100%;' name='insert-type'></td>
            </tr>
            <tr>
              <td>Services:</td>
              <td colspan='3'><input type='text' style='width: 100%;' services name='insert-services'></td>
            </tr>
            <tr>
              <td>Ownership:</td>
              <td><input type='text' style='width: 100%;' name='insert-ownership'></td>
              <td>Chain Name:</td>
              <td><input type='text' style='width: 100%;' name='insert-chain'></td>
            </tr>
            <tr>
              <td>Facebook URL:</td>
              <td colspan='3'><input type='text' style='width: 100%;' name='insert-fburl'></td>
            </tr>
            <tr>
              <td>Alexa Rank:</td>
              <td><input type='text' style='width: 100%;' name='insert-alexa'></td>
              <td>monthly Visitor:</td>
              <td><input type='text' style='width: 100%;' name='insert-visitors'></td>
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
            url: "php/hotel_ajax.php",
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
          url: "php/hotel_ajax.php",
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
        var hrms = $("#update-hrms").val();
        var ats = $("#update-ats").val();
        var crm = $("#update-crm").val();
        var erp = $("#update-erp").val();
        var pos = $("#update-pos").val();
        var rms = $("#update-rms").val();
        var cm = $("#update-cm").val();
        var pms = $("#update-pms").val();
        var ibe = $("#update-ibe").val();
        var crs = $("#update-crs").val();
        var hotel_name = $("#update-hname").val();
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
        var number_of_rooms = $("#update-room").val();
        var hotel_class = $("#update-class").val();
        var adr = $("#update-adr").val();
        var services = $("#update-services").val();
        var type_of_hotel = $("#update-type").val();
        var ownership = $("#update-ownership").val();
        var chain_name = $("#update-chain").val();
        var facebook_url = $("#update-fburl").val();
        var alexa_rank = $("#update-alexa").val();
        var monthly_visitor = $("#update-visitors").val();

        var update = "update";

        $.ajax({
          url: "php/hotel_ajax.php",
          method: "POST",
          data: {
            update: update,
            data_id: data_id,
            hrms: hrms,
            ats: ats,
            crm: crm,
            erp: erp,
            pos: pos,
            rms: rms,
            cm: cm,
            pms: pms,
            ibe: ibe,
            crs: crs,
            hotel_name: hotel_name,
            website: website,
            country: country,
            street: street,
            city: city,
            state: state,
            zipcode: zipcode,
            prefix: prefix,
            first_name: first_name,
            last_name: last_name,
            title: title,
            email: email,
            contact_number: contact_number,
            number_of_rooms: number_of_rooms,
            hotel_class: hotel_class,
            adr: adr,
            services: services,
            type_of_hotel: type_of_hotel,
            ownership: ownership,
            chain_name: chain_name,
            facebook_url: facebook_url,
            alexa_rank: alexa_rank,
            monthly_visitor: monthly_visitor
          },

          success: function(data) {
            if(data == 1)
          {$("#modal").hide();
          location.reload();}
          else alert(data);
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








    });
  </script>

</body>

</html>