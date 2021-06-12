<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM vacation_rental WHERE vacation_rental_company !='' ";

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

    if (isset($_POST['pms'])) {
        $pms = implode("','", $_POST['pms']);
        $sql .= "AND pms IN('" . $pms . "')";
    }

    $from = $_POST['from'];
    $sql .= "AND number_of_property >= ".$from." ";

    $to = $_POST['to'];
    $sql .= "AND number_of_property <= ".$to." ";


    $result = mysqli_query($conn, $sql);
    $output = '';


    if ($result->num_rows > 0) {
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $output .= "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['pms'] . "</td>
            <td>" . $row['vacation_rental_company'] . "</td>
            <td> <a href='http://". $row['website'] . " ' target='_blank'>".$row['website']."</a></td>
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
    } else {
        $output = "<tr>
        <td colspan='12' class='text-center'>
            <h5>Record Not Found</h5>
        </td>
    </tr>";
    }

    echo $output;
}
// delete data 

if (isset($_POST['dlt_action'])) {
    $id = $_POST['data_id'];
    $sql2 = "DELETE FROM vacation_rental WHERE data_id = {$id} ";
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
    $sql3 = "SELECT * FROM vacation_rental WHERE data_id = {$eid}";
    $result3 = mysqli_query($conn, $sql3);
    $output2 = " hiii";
    if (mysqli_num_rows($result3) > 0) {
      while ($row2 = mysqli_fetch_assoc($result3)) {
        $output2 .= "
        <tr>
        <td>PMS:</td>
        <td><input type='text' style='width: 100%;' value='{$row2['pms']}' id='update-pms'></td>
        </tr>
        <tr>
        <td>Hotel name: </td>
        <td colspan='3'><input type='text' style='width: 100%;' value='{$row2['vacation_rental_company']}'  id='update-vname'></td>
      </tr>
       <tr>
        <td>Website:</td>
        <td colspan='3'><input type='text' style='width: 100%;' value='{$row2['website']}' id='update-website'></td>
      </tr>
      <tr>
        <td>No.of Properties:</td>
        <td colspan='3'><input type='text' style='width: 100%;' value='{$row2['number_of_property']}' id='update-properties'></td>
      </tr>
      <tr>
        <td colspan='4'>
          <h5 class='text-center'>Address</h5>
        </td>
      </tr>
      <td>Street:</td>
        <td colspan='3'> <input type='text' style='width: 100%;' value='{$row2['street']}'  id='update-street'></td>
      </tr>
      <tr>
       <td>State/Province:</td>
        <td><input type='text' style='width: 100%;' value='{$row2['state']}'  id='update-state'></td>
        <td>City:</td>
        <td><input type='text' style='width: 100%;' value='{$row2['city']}' id='update-city'></td>
        <td>Country:</td>
        <td><input type='text' style='width: 100%;' value='{$row2['country']}'  id='update-country'></td>
        <td>ZIP Code:</td>
        <td><input type='text' style='width: 100%;' value='{$row2['zipcode']}' id='update-zipcode'></td> 
      </tr>
      <tr>
        <td colspan='4'>
          <h5 class='text-center'>Person Information</h5>
        </td>
      </tr>
      <tr>
        <td>First Name</td>
        <td><input type='text' style='width: 100%;' value='{$row2['first_name']}' id='update-fname'></td>
        <td>Last Name</td>
        <td><input type='text' style='width: 100%;' value='{$row2['last_name']}' id='update-lname'></td>
      </tr>
      <tr>
       <td>Title</td>
        <td><input type='text' style='width: 100%;' value='{$row2['title']}' id='update-title'></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td colspan='3'><input type='text' style='width: 100%;' value='{$row2['email']}' id='update-email'></td>
      </tr>
      <tr>
        <td>Contact Number:</td>
        <td colspan='3'><input type='text' style='width: 100%;' value='{$row2['contact_number']}' id='update-contact'></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type='hidden' value = '{$row2["data_id"]}' id ='data-id' ></td>
        <td><input type='submit' id='update-submit' value='update New Data'></td>
      </tr>
        ";
      }
    }
    echo $output2;
  }


  //update data

 if(isset($_POST['update'])){
    
    $data_id = $_POST['data_id'];
    $pms = $_POST['pms'];
    $vacation_name = $_POST['vacation_rental_company'];
    $website = $_POST['website'];
    $properties = $_POST['number_of_property'];
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
  
    $sql4 = "UPDATE vacation_rental SET pms= '{$pms}' ,vacation_rental_company ='{$vacation_name}' ,website = '{$website}' ,number_of_property = '{$properties}' ,country = '{$country}' ,street = '{$street}' ,city = '{$city}' ,state = '{$state}' ,zipcode = '{$zipcode}' ,first_name = '{$first_name}' ,last_name = '{$last_name}' ,title = '{$title}' ,email = '{$email}' ,contact_number = '{$contact_number}' WHERE data_id = '{$data_id}'";
  
    $result4 = mysqli_query($conn, $sql4);
    if ($result4) {
      echo 1;
    } else {
      echo mysqli_error($conn);
    }

 }  
 // insert new data 

 if (isset($_POST['insert-submit'])) {
    $pms = $_POST['insert-pms'];
    $vacation_name = $_POST['insert-vname'];
    $website = $_POST['insert-website'];
    $properties = $_POST['insert-properties'];
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
   
    $sql5 = "INSERT INTO `vacation_rental` (`pms`, `vacation_rental_company`, `website`, `number_of_property`, `country`, `street`, `city`, `state`, `zipcode`, `first_name`, `last_name`, `title`, `email`, `contact_number`) VALUES ('$pms', '$vacation_name', '$website', '$properties', '$country', '$street', '$city', '$state', '$zipcode', '$first_name', '$last_name', '$title', '$email', '$contact_number')";
    $result5 = mysqli_query($conn, $sql5);
    if ($result5) {
      echo header('Location:../vacation_rental.php');
    } else {
      echo mysqli_error($conn);
    }
  
}
?>
