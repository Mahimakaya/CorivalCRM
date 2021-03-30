<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM schools_colleges WHERE college_name !='' ";

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

    if (isset($_POST['hrms'])) {
        $hrms = implode("','", $_POST['hrms']);
        $sql .= "AND hrms IN('" . $hrms . "')";
    }

    if (isset($_POST['ats'])) {
        $ats = implode("','", $_POST['ats']);
        $sql .= "AND ats IN('" . $ats . "')";
    }

    if (isset($_POST['school_college'])) {
        $school_college = implode("','", $_POST['school_college']);
        $sql .= "AND school_college IN('" . $school_college . "')";
    }

    if (isset($_POST['type_of_organisation'])) {
        $type_of_organisation = implode("','", $_POST['type_of_organisation']);
        $sql .= "AND type_of_organisation IN('" . $type_of_organisation . "')";
    }


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
            <td>" . $row['no_of_student'] . "</td>
            <td>" . $row['college_name'] . "</td>
            <td> <a href='http://" . $row['website'] . " ' target='_blank'>" . $row['website'] . "</a></td>
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
            <td>" . $row['type_of_organisation'] . "</td>
            <td>" . $row['school_college'] . "</td>
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
