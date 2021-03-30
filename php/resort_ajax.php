<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM resort WHERE company_name !='' ";

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

    if (isset($_POST['pool'])) {
        $pool = implode("','", $_POST['pool']);
        $sql .= "AND pool IN('" . $pool . "')";
    }

    if (isset($_POST['activities'])) {
        $activities = implode("','", $_POST['activities']);
        $sql .= "AND activities IN('" . $activities . "')";
    }

    if (isset($_POST['bar'])) {
        $bar = implode("','", $_POST['bar']);
        $sql .= "AND bar IN('" . $bar . "')";
    }

    if (isset($_POST['golf_course'])) {
        $golf_course = implode("','", $_POST['golf_course']);
        $sql .= "AND golf_course IN('" . $golf_course . "')";
    }

    if (isset($_POST['gym'])) {
        $gym = implode("','", $_POST['gym']);
        $sql .= "AND gym IN('" . $gym . "')";
    }

    if (isset($_POST['spa'])) {
        $spa = implode("','", $_POST['spa']);
        $sql .= "AND spa IN('" . $spa . "')";
    }

    $from = $_POST['from'];
    $sql .= "AND number_of_rooms >= ".$from." ";

    $to = $_POST['to'];
    $sql .= "AND number_of_rooms <= ".$to." ";


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