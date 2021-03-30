<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM law_firm WHERE company_name !='' ";

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

    if (isset($_POST['technology'])) {
        $technology = implode("','", $_POST['technology']);
        $sql .= "AND technology IN('" . $technology . "')";
    }

    $result = mysqli_query($conn, $sql);
    $output = '';


    if ($result->num_rows > 0) {
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $output .= "<tr>
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
    } else {
        $output = "<tr>
        <td colspan='12' class='text-center'>
            <h5>Record Not Found</h5>
        </td>
    </tr>";
    }

    echo $output;
}

?>
