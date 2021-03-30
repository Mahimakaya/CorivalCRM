<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM event_company WHERE company_name !='' ";

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

    if (isset($_POST['hrms'])) {
        $hrms = implode("','", $_POST['hrms']);
        $sql .= "AND hrms IN('" . $hrms . "')";
    }

    if (isset($_POST['ats'])) {
        $ats = implode("','", $_POST['ats']);
        $sql .= "AND ats IN('" . $ats . "')";
    }

    if (isset($_POST['technology'])) {
        $technology = implode("','", $_POST['technology']);
        $sql .= "AND technology IN('" . $technology . "')";
    }

    $from = $_POST['from'];
    $sql .= "AND employees >= ".$from." ";

    $to = $_POST['to'];
    $sql .= "AND employees <= ".$to." ";


    $result = mysqli_query($conn, $sql);
    $output = '';


    if ($result->num_rows > 0) {
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $output .= "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['ats'] . "</td>
            <td>" . $row['hrms'] . "</td>
            <td>" . $row['technology'] . "</td>
            <td>" . $row['industry'] . "</td>
            <td>" . $row['employees'] . "</td>
            <td>" . $row['company_name'] . "</td>
            <td><a href='http://". $row['website']."' target='_blank' >". $row['website'] ."</a></td>
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
            <td>" . $row['valuation'] . "</td>
            <td>" . $row['revenue'] . "</td>
            <td>" . $row['tag'] . "</td>
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
