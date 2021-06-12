<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM chain_hotel WHERE hotel_name !='' ";

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

    if (isset($_POST['star_rating'])) {
        $star_rating = implode("','", $_POST['star_rating']);
        $sql .= "AND star_rating IN('" . $star_rating . "')";
    }

    if (isset($_POST['hotel_type'])) {
        $hotel_type = implode("','", $_POST['hotel_type']);
        $sql .= "AND hotel_type IN('" . $hotel_type . "')";
    }

    if (isset($_POST['pms'])) {
        $pms = implode("','", $_POST['pms']);
        $sql .= "AND pms IN('" . $pms . "')";
    }

    if (isset($_POST['ibe'])) {
        $ibe = implode("','", $_POST['ibe']);
        $sql .= "AND ibe IN('" . $ibe . "')";
    }

    if (isset($_POST['cms'])) {
        $cms = implode("','", $_POST['cms']);
        $sql .= "AND cms IN('" . $cms . "')";
    }

    if (isset($_POST['crm'])) {
        $crm = implode("','", $_POST['crm']);
        $sql .= "AND crm IN('" . $crm . "')";
    }

    if (isset($_POST['crs'])) {
        $crs = implode("','", $_POST['crs']);
        $sql .= "AND crs IN('" . $crs . "')";
    }

    $from_hotels = $_POST['from_hotels'];
    $sql .= "AND number_of_hotels >= " . $from_hotels . " ";

    $to_hotels = $_POST['to_hotels'];
    $sql .= "AND number_of_hotels <= " . $to_hotels . " ";

    $from_rooms = $_POST['from_rooms'];
    $sql .= "AND no_of_rooms >= " . $from_rooms . " ";

    $to_rooms = $_POST['to_rooms'];
    $sql .= "AND no_of_rooms <= " . $to_rooms . " ";


    $result = mysqli_query($conn, $sql);
    $output = '';


    if ($result->num_rows > 0) {
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $output .= "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['pms'] . "</td>
            <td>" . $row['ibe'] . "</td>
            <td>" . $row['cms'] . "</td>
            <td>" . $row['crm'] . "</td>
            <td>" . $row['crs'] . "</td>
            <td>" . $row['hotel_name'] . "</td>
            <td> <a href='http://" . $row['website'] . " ' target='_blank'>" . $row['website'] . "</a></td>
            <td>" . $row['last_activity'] . "</td>
            <td>" . $row['number_of_hotels'] . "</td>
            <td>" . $row['street'] . "</td>
            <td>" . $row['city'] . "</td>
            <td>" . $row['state'] . "</td>
            <td>" . $row['zipcode'] . "</td>
            <td>" . $row['country'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['title'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['contact_number'] . "</td>
            <td>" . $row['star_rating'] . "</td>
            <td>" . $row['no_of_rooms'] . "</td>
            <td>" . $row['hotel_type'] . "</td>
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
    $sql2 = "DELETE FROM chain_hotel WHERE data_id = {$id} ";
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
    $sql3 = "SELECT * FROM chain_hotel WHERE data_id = {$eid}";
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
              <td>PMS:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["pms"]}' id='update-pms'></td>
              <td>IBE:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["ibe"]}' id='update-ibe'></td>
            </tr>
            <tr>
              <td>CMS:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["cms"]}' id='update-cms'></td>
              <td>CRM:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["crm"]}' id='update-crm'></td>
            </tr>
            <tr>
              <td>CRS:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["crs"]}' id='update-crs'></td>
              <td></td>
              <td></td>
            </tr>

            <tr>
            <td colspan='4' class='text-center'>
              <h5>Company Info</h5>
            </td>
          </tr>
           
  
            <tr>
              <td>Hotel Name: </td>
              <td colspan=3><input type='text' style='width: 100%;' value = '{$row2["hotel_name"]}' id='update-hname'></td>
            </tr> 
  
            <tr>
              <td>Website</td>
              <td colspan=3><input type='text' style='width: 100%;' value = '{$row2["website"]}' id='update-website'></td>
            </tr>
            <tr>
            <tr>
            <td>Last Activity:</td>
            <td><input type='text' style='width: 100%;' value = '{$row2["last_activity"]}' id='update-last_activity'></td>
            <td>Number of Hotels:</td>
            <td><input type='text' style='width: 100%;' value = '{$row2["number_of_hotels"]}' id='update-number_of_hotels'></td>

          </tr>
              <td colspan='4'>
                <h5 class='text-center'>Address</h5>
              </td>
            </tr>
            <tr>
              <td>Street:</td>
              <td colspan='3'> <input type='text' style='width: 100%;' value = '{$row2["street"]}' id='update-street'></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["city"]}' id='update-city'></td>
              <td>State/Province:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["state"]}' id='update-state'></td>
            </tr>
            <tr>
              <td>ZIP Code:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["zipcode"]}' id='update-zipcode'></td>
              <td>Country:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["country"]}' id='update-country'></td>
            </tr>
            <tr>
              <td colspan='4'>
                <h5 class='text-center'>Person Information</h5>
              </td>
            </tr>
            <tr>
              <td>Title</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["title"]}' id='update-title'></td>
              <td></td>            
              <td></td>
            </tr>
            <tr>
              <td>First Name</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["first_name"]}' id='update-fname'></td>
              <td>Last Name</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["last_name"]}' id='update-lname'></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td colspan='3'><input type='text' style='width: 100%;' value = '{$row2["email"]}' id='update-email'></td>
            </tr>
            <tr>
              <td>Contact Number:</td>
              <td colspan='3'><input type='text' style='width: 100%;' value = '{$row2["contact_number"]}' id='update-contact'></td>
            </tr>
            <tr>
              <td colspan='4'>
                <h5 class='text-center'>Hotel Specifications</h5>
              </td>
            </tr>
            <tr>
              <td>Star Rating:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["star_rating"]}' id='update-star_rating'></td>
              <td>Number of Rooms:</td>
              <td><input type='text' style='width: 100%;' value = '{$row2["no_of_rooms"]}' id='update-no_of_rooms'></td>
            </tr>
            <tr>
              <td>Tpe of Hotel:</td>
              <td colspan = '3'><input type='text' style='width: 100%;' value = '{$row2["hotel_type"]}' id='update-hotel_type'></td>
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

//   // update data 

if (isset($_POST['update'])) {

    $data_id = $_POST['data_id'];
    $pms = $_POST['pms'];
    $ibe = $_POST['ibe'];
    $cms = $_POST['cms'];
    $crm = $_POST['crm'];
    $crs = $_POST['crs'];
    $hotel_name = $_POST['hotel_name'];
    $website = $_POST['website'];
    $last_activity = $_POST['last_activity'];
    $no_of_hotels = $_POST['no_of_hotels'];
    $country = $_POST['country'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $number_of_rooms = $_POST['number_of_rooms'];
    $star_rating = $_POST['star_rating'];
    $hotel_type = $_POST['hotel_type'];

    $sql4 = "UPDATE chain_hotel SET crm = '{$crm}' ,cms = '{$cms}' ,pms= '{$pms}' ,ibe = '{$ibe}' ,crs = '{$crs}' ,hotel_name = '{$hotel_name}' ,website = '{$website}' , last_activity = '{$last_activity}' ,number_of_hotels = '{$no_of_hotels}',country = '{$country}' ,street = '{$street}' ,city = '{$city}' ,chain_hotel.state = '{$state}' ,zipcode = '{$zipcode}' ,first_name = '{$first_name}' ,last_name = '{$last_name}' ,title = '{$title}' ,email = '{$email}' ,contact_number = '{$contact_number}' ,no_of_rooms = '{$number_of_rooms}' ,hotel_type = '{$hotel_type}' ,star_rating= '{$star_rating}'  WHERE data_id = '{$data_id}'";

    $result4 = mysqli_query($conn, $sql4);
    if ($result4) {
        echo 1;
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
}


// insert new data 

if (isset($_POST['insert-submit'])) {
  $pms = $_POST['insert-pms'];
  $ibe = $_POST['insert-ibe'];
  $cms = $_POST['insert-cms'];
  $crm = $_POST['insert-crm'];
  $crs = $_POST['insert-crs'];
  $hotel_name = $_POST['insert-hname'];
  $website = $_POST['insert-website'];
  $last_activity = $_POST['insert-last_activity'];
  $number_of_hotels = $_POST['insert-number_of_hotels'];
  $country = $_POST['insert-country'];
  $street = $_POST['insert-street'];
  $city = $_POST['insert-city'];
  $state = $_POST['insert-state'];
  $zipcode = $_POST['insert-zipcode'];
  $first_name = $_POST['insert-fname'];
  $last_name = $_POST['insert-lname'];
  $title = $_POST['insert-title'];
  $email = $_POST['insert-email'];
  $contact_number = $_POST['insert-contact'];
  $no_of_rooms = $_POST['insert-no_of_rooms'];
  $hotel_type = $_POST['insert-hotel_type'];
  $star_rating = $_POST['insert-star_rating'];


        $sql5 = "INSERT INTO chain_hotel (pms,ibe,cms,crm,crs,hotel_name,website,last_activity,number_of_hotels,street,city,state,zipcode,country,first_name,last_name,title,email,contact_number,star_rating,no_of_rooms, hotel_type) VALUES ('$pms','$ibe','$cms','$crm' ,'$crs','$hotel_name','$website','$last_activity','$number_of_hotels','$street','$city','$state','$zipcode','$country','$first_name','$last_name','$title','$email','$contact_number','$star_rating','$no_of_rooms','$hotel_type'); ";

    $result5 = mysqli_query($conn, $sql5);
    if ($result5) {
        echo header('Location:../chain_hotel.php');
    } else {
        echo "Something Went Wrong.Please Contact IT team.";
    }
}
