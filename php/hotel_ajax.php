<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
  $sql = "SELECT * FROM hotel WHERE hotel_name !='' ";

  if (isset($_POST['country'])) {
    $country = implode("','", $_POST['country']);
    $sql .= "AND country IN('" . $country . "')";
  }

  if (isset($_POST['state'])) {
    $state = implode("','", $_POST['state']);
    $sql .= "AND state IN('" . $state . "')";
  }

  if (isset($_POST['city'])) {
    $city = implode("','", $_POST['city']);
    $sql .= "AND city IN('" . $city . "')";
  }

  if (isset($_POST['title'])) {
    $title = implode("','", $_POST['title']);
    $sql .= "AND title IN('" . $title . "')";
  }

  if (isset($_POST['hotel_class'])) {
    $hotel_class = implode("','", $_POST['hotel_class']);
    $sql .= "AND hotel_class IN('" . $hotel_class . "')";
  }

  if (isset($_POST['type_of_hotel'])) {
    $type_of_hotel = implode("','", $_POST['type_of_hotel']);
    $sql .= "AND type_of_hotel IN('" . $type_of_hotel . "')";
  }

  if (isset($_POST['hrms'])) {
    $hrms = implode("','", $_POST['hrms']);
    $sql .= "AND hrms IN('" . $hrms . "')";
  }

  if (isset($_POST['ats'])) {
    $ats = implode("','", $_POST['ats']);
    $sql .= "AND ats IN('" . $ats . "')";
  }

  if (isset($_POST['crm'])) {
    $crm = implode("','", $_POST['crm']);
    $sql .= "AND crm IN('" . $crm . "')";
  }

  if (isset($_POST['erp'])) {
    $erp = implode("','", $_POST['erp']);
    $sql .= "AND erp IN('" . $erp . "')";
  }

  if (isset($_POST['pos'])) {
    $pos = implode("','", $_POST['pos']);
    $sql .= "AND pos IN('" . $pos . "')";
  }

  if (isset($_POST['rms'])) {
    $rms = implode("','", $_POST['rms']);
    $sql .= "AND rms IN('" . $rms . "')";
  }

  if (isset($_POST['cm'])) {
    $cm = implode("','", $_POST['cm']);
    $sql .= "AND cm IN('" . $cm . "')";
  }

  if (isset($_POST['pms'])) {
    $pms = implode("','", $_POST['pms']);
    $sql .= "AND pms IN('" . $pms . "')";
  }

  if (isset($_POST['ibe'])) {
    $ibe = implode("','", $_POST['ibe']);
    $sql .= "AND ibe IN('" . $ibe . "')";
  }

  if (isset($_POST['crs'])) {
    $crs = implode("','", $_POST['crs']);
    $sql .= "AND crs IN('" . $crs . "')";
  }

  $from = $_POST['from'];
  $sql .= "AND number_of_rooms >= " . $from . " ";

  $to = $_POST['to'];
  $sql .= "AND number_of_rooms <= " . $to . " ";




  $result = mysqli_query($conn, $sql);
  $output = '';


  if ($result->num_rows > 0) {
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $sno = $sno + 1;
      $output .= "<tr>
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
  } else {
    $output = "<tr>
        <td colspan='12' class='text-center'>
            <h5>Record Not Found</h5>
        </td>
    </tr>";
  }

  echo $output;
}

// dalete data 

if (isset($_POST['dlt_action'])) {
  $id = $_POST['data_id'];
  $sql2 = "DELETE FROM hotel WHERE data_id = {$id} ";
  $result2 = mysqli_query($conn, $sql2);
  if ($result2) {
    echo 1;
  } else {
    echo 0;
  }
}

// return data in form for update 


if (isset($_POST['formfill'])) {
  $eid = $_POST['eid'];
  $sql3 = "SELECT * FROM hotel WHERE data_id = {$eid}";
  $result3 = mysqli_query($conn, $sql3);
  $output2 = " hiii";
  if (mysqli_num_rows($result3) > 0) {
    while ($row2 = mysqli_fetch_assoc($result3)) {
      $output2 .= "
            <tr>
            <td colspan='4' class='text-center'>
              <h5>Technology</h5>
            </td>
          </tr>
          <tr>
            <td>HRMS:</td>
            <td><input type='text' value = '{$row2["hrms"]}' id='update-hrms'></td>
            <td>ATS:</td>
            <td><input type='text' value = '{$row2["ats"]}' id='update-ats'></td>
          </tr>
          <tr>
            <td>CRM:</td>
            <td><input type='text' value = '{$row2["crm"]}' id='update-crm'></td>
            <td>ERP:</td>
            <td><input type='text' value = '{$row2["erp"]}' id='update-erp'></td>
          </tr>
          <tr>
            <td>POS:</td>
            <td><input type='text' value = '{$row2["pos"]}' id='update-pos'></td>
            <td>RMS:</td>
            <td><input type='text' value = '{$row2["rms"]}' id='update-rms'></td>
          </tr>
          <tr>
            <td>CM:</td>
            <td><input type='text' value = '{$row2["cm"]}' id='update-cm'></td>
            <td>PMS:</td>
            <td><input type='text' value = '{$row2["pms"]}' id='update-pms'></td>
          </tr>
          <tr>
            <td>IBE:</td>
            <td><input type='text' value = '{$row2["ibe"]}' id='update-ibe'></td>
            <td>CRS:</td>
            <td><input type='text' value = '{$row2["crs"]}' id='update-crs'></td>
          </tr>

          <tr>
            <td>Hotel Name: </td>
            <td colspan='3'><input type='text' value = '{$row2["hotel_name"]}' id='update-hname'></td>
          </tr>


          <tr>
            <td>Website</td>
            <td colspan='3'><input type='text' value = '{$row2["website"]}' id='update-website'></td>
          </tr>
          <tr>
            <td colspan='4'>
              <h5 class='text-center'>Address</h5>
            </td>
          </tr>
          <tr>
            <td>Street:</td>
            <td colspan='3'> <input type='text' value = '{$row2["street"]}' id='update-street'></td>
          </tr>
          <tr>
            <td>City:</td>
            <td><input type='text' value = '{$row2["city"]}' id='update-city'></td>
            <td>State/Province:</td>
            <td><input type='text' value = '{$row2["state"]}' id='update-state'></td>
          </tr>
          <tr>
            <td>ZIP Code:</td>
            <td><input type='text' value = '{$row2["zipcode"]}' id='update-zipcode'></td>
            <td>Country:</td>
            <td><input type='text' value = '{$row2["country"]}' id='update-country'></td>
          </tr>
          <tr>
            <td colspan='4'>
              <h5 class='text-center'>Person Information</h5>
            </td>
          </tr>
          <tr>
            <td>Prefix</td>
            <td><input type='text' value = '{$row2["prefix"]}' id='update-prefix'></td>
            <td>Title</td>
            <td><input type='text' value = '{$row2["title"]}' id='update-title'></td>
          </tr>
          <tr>
            <td>First Name</td>
            <td><input type='text' value = '{$row2["first_name"]}' id='update-fname'></td>
            <td>Last Name</td>
            <td><input type='text' value = '{$row2["last_name"]}' id='update-lname'></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td colspan='3'><input type='text' value = '{$row2["email"]}' id='update-email'></td>
          </tr>
          <tr>
            <td>Contact Number:</td>
            <td colspan='3'><input type='text' value = '{$row2["contact_number"]}' id='update-contact'></td>
          </tr>
          <tr>
            <td colspan='4'>
              <h5 class='text-center'>Hotel Specifications</h5>
            </td>
          </tr>
          <tr>
            <td>No. of Rooms</td>
            <td><input type='text' value = '{$row2["number_of_rooms"]}' id='update-room'></td>
            <td>Hotel Class</td>
            <td><input type='text' value = '{$row2["hotel_class"]}' id='update-class'></td>
          </tr>
          <tr>
            <td>ADR</td>
            <td><input type='text' value = '{$row2["adr"]}' id='update-adr'></td>
            <td>Type of Hotel:</td>
            <td><input type='text' value = '{$row2["type_of_hotel"]}' id='update-type'></td>
          </tr>
          <tr>
            <td>Services:</td>
            <td colspan='3'><input type='text' value = '{$row2["services"]}' id='update-services'></td>
          </tr>
          <tr>
            <td>Ownership:</td>
            <td><input type='text' value = '{$row2["ownership"]}' id='update-ownership'></td>
            <td>Chain Name:</td>
            <td><input type='text' value = '{$row2["chain_name"]}' id='update-chain'></td>
          </tr>
          <tr>
            <td>Facebook URL:</td>
            <td colspan='3'><input type='text' value = '{$row2["facebook_url"]}' id='update-fburl'></td>
          </tr>
          <tr>
            <td>Alexa Rank:</td>
            <td><input type='text' value = '{$row2["alexa_rank"]}' id='update-alexa'></td>
            <td>monthly Visitor:</td>
            <td><input type='text' value = '{$row2["monthly_visitor"]}' id='update-visitors'></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
           <td><input type='hidden' value = '{$row2["data_id"]}' id ='data-id' ></td>
            <td><input type='submit' id='update-submit' value='Update'></td>
          </tr>

            ";
    }
  }
  echo $output2;
}

// update data 

if (isset($_POST['update'])) {

  $data_id = $_POST['data_id'];
  $hrms = $_POST['hrms'];
  $ats = $_POST['ats'];
  $crm = $_POST['crm'];
  $erp = $_POST['erp'];
  $pos = $_POST['pos'];
  $rms = $_POST['rms'];
  $cm = $_POST['cm'];
  $pms = $_POST['pms'];
  $ibe = $_POST['ibe'];
  $crs = $_POST['crs'];
  $hotel_name = $_POST['hotel_name'];
  $website = $_POST['website'];
  $country = $_POST['country'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipcode = $_POST['zipcode'];
  $prefix = $_POST['prefix'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $title = $_POST['title'];
  $email = $_POST['email'];
  $contact_number = $_POST['contact_number'];
  $number_of_rooms = $_POST['number_of_rooms'];
  $hotel_class = $_POST['hotel_class'];
  $adr = $_POST['adr'];
  $services = $_POST['services'];
  $type_of_hotel = $_POST['type_of_hotel'];
  $ownership = $_POST['ownership'];
  $chain_name = $_POST['chain_name'];
  $facebook_url = $_POST['facebook_url'];
  $alexa_rank = $_POST['alexa_rank'];
  $monthly_visitor = $_POST['monthly_visitor'];

  $sql4 = "UPDATE hotel SET hrms = '{$hrms}' ,ats = '{$ats}' ,crm = '{$crm}' ,erp = '{$erp}' ,pos = '{$pos}' ,rms = '{$rms}' ,cm = '{$cm}' ,pms= '{$pms}' ,ibe = '{$ibe}' ,crs = '{$crs}' ,hotel_name = '{$hotel_name}' ,website = '{$website}' ,country = '{$country}' ,street = '{$street}' ,city = '{$city}' ,state = '{$state}' ,zipcode = '{$zipcode}' ,prefix = '{$prefix}' ,first_name = '{$first_name}' ,last_name = '{$last_name}' ,title = '{$title}' ,email = '{$email}' ,contact_number = '{$contact_number}' ,number_of_rooms = '{$number_of_rooms}' ,hotel_class = '{$hotel_class}' ,adr= '{$adr}' ,services = '{$services}' ,type_of_hotel = '{$type_of_hotel}' , ownership = '{$ownership}' ,chain_name = '{$chain_name}' ,facebook_url = '{$facebook_url}' ,alexa_rank = '{$alexa_rank}' ,monthly_visitor = '{$monthly_visitor}' WHERE data_id = '{$data_id}'";

  $result4 = mysqli_query($conn, $sql4);
  if ($result4) {
    echo 1;
  } else {
    echo 0;
  }
}

// insert new data 

if (isset($_POST['insert-submit'])) {
  $hrms = $_POST['insert-hrms'];
  $ats = $_POST['insert-ats'];
  $crm = $_POST['insert-crm'];
  $erp = $_POST['insert-erp'];
  $pos = $_POST['insert-pos'];
  $rms = $_POST['insert-rms'];
  $cm = $_POST['insert-cm'];
  $pms = $_POST['insert-pms'];
  $ibe = $_POST['insert-ibe'];
  $crs = $_POST['insert-crs'];
  $hotel_name = $_POST['insert-hname'];
  $website = $_POST['insert-website'];
  $country = $_POST['insert-country'];
  $street = $_POST['insert-street'];
  $city = $_POST['insert-city'];
  $state = $_POST['insert-state'];
  $zipcode = $_POST['insert-zipcode'];
  $prefix = $_POST['insert-prefix'];
  $first_name = $_POST['insert-fname'];
  $last_name = $_POST['insert-lname'];
  $title = $_POST['insert-title'];
  $email = $_POST['insert-email'];
  $contact_number = $_POST['insert-contact'];
  $number_of_rooms = $_POST['insert-room'];
  $hotel_class = $_POST['insert-class'];
  $adr = $_POST['insert-adr'];
  $services = $_POST['insert-services'];
  $type_of_hotel = $_POST['insert-type'];
  $ownership = $_POST['insert-ownership'];
  $chain_name = $_POST['insert-chain'];
  $facebook_url = $_POST['insert-fburl'];
  $alexa_rank = $_POST['insert-alexa'];
  $monthly_visitor = $_POST['insert-visitors'];

  // $sql5 = "INSERT INTO hotel (hrms,ats,crm,erp,pos,rms,cm,pms,ibe,crs,hotel_name,website,country,street,city,state,zipcode,prefix,first_name,last_name,title,email,contact_number, number_of_rooms, hotel_clas, adr, services,type_of_hotel,ownership,chain_name,facebook_url,alexa_rank,monthly_visitor) VALUES ('$hrms','$ats' ,'$crm' ,'$erp','$pos','$rms','$cm','$pms','$ibe','$crs','$hotel_name','$website','$country','$street','$city','$state','$zipcode','$prefix','$first_name','$last_name','$title','$email','$contact_number','$number_of_rooms','$hotel_class','$adr','$services','$type_of_hotel','$ownership','$chain_name','$facebook_url','$alexa_rank','$monthly_visitor');";

  $sql5 = "INSERT INTO hotel (hrms,ats,crm,erp,pos,rms,cm,pms,ibe,crs,hotel_name,website,country,street,city,hotel.state,zipcode,prefix,first_name,last_name,title,email,contact_number,number_of_rooms, hotel_class, adr, services,type_of_hotel,hotel.ownership,chain_name,facebook_url,alexa_rank,monthly_visitor) VALUES ('$hrms','$ats','$crm' ,'$erp','$pos','$rms','$cm','$pms','$ibe','$crs','$hotel_name','$website','$country','$street','$city','$state','$zipcode','$prefix','$first_name','$last_name','$title','$email','$contact_number','$number_of_rooms','$hotel_class','$adr','$services','$type_of_hotel','$ownership','$chain_name','$facebook_url','$alexa_rank','$monthly_visitor'); ";
  $result5 = mysqli_query($conn, $sql5);
  if ($result5) {
    echo header('Location:../hotels.php');
  } else {
    echo "Something Went Wrong.Please Contact IT team.";
  }

  




}
