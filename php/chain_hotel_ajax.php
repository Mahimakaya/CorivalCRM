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
    $sql .= "AND number_of_hotels >= ".$from_hotels." ";

    $to_hotels = $_POST['to_hotels'];
    $sql .= "AND number_of_hotels <= ".$to_hotels." ";

    $from_rooms = $_POST['from_rooms'];
    $sql .= "AND no_of_rooms >= ".$from_rooms." ";

    $to_rooms = $_POST['to_rooms'];
    $sql .= "AND no_of_rooms <= ".$to_rooms." ";


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
