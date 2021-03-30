<!-- location filter starts here  -->
<div class="d-grid gap-2">
    <button id="open_location" class="filterbtn btn" style="font-weight: bold;">Location</button>
</div>

<div id="location_filterbar" class="filterbar" style="display: none;">
    <!-- ----------------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="country_list" class="btn filterbtn mt-2">Country</button>
    </div>

    <div id="country_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT country FROM finance ORDER BY country";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='country' class='form-check-label'>
            <input type='checkbox' value='" . $row['country'] . "' class='form-check-input filter_check' id='country'>{$row['country']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>

        <!-- ----------------------------------------------- -->
        <div class="d-grid gap-2">
        <button id="state_list" class="btn filterbtn mt-2">State</button>
    </div>

    <div id="state_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT state FROM finance ORDER BY state";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='state' class='form-check-label'>
            <input type='checkbox' value='" . $row['state'] . "' class='form-check-input filter_check' id='state'>{$row['state']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>

        <!-- ----------------------------------------------- -->
        <div class="d-grid gap-2">
        <button id="city_list" class="btn filterbtn mt-2">City</button>
    </div>

    <div id="city_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT city FROM finance ORDER BY city";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['city'] . "' class='form-check-input filter_check' id='city'>{$row['city']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>
</div>

<!-- =========================================================== -->
<!-- title filter starts -->

<div class="d-grid gap-2">
    <button id="open_title" class="filterbtn btn" style="font-weight: bold;">Title</button>
</div>

<div id="title_filterbar" class="filterbar" style="display:none ;">
<ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT title FROM finance ORDER BY title";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['title'] . "' class='form-check-input filter_check' id='title'>{$row['title']} 
        </label>
    </div>
</li>";
        }  ?>

    </ul>
</div>


<!-- =========================================================== -->

<!-- employees filter starts here  -->

<div class="d-grid gap-2">
    <button id="open_employees" class="filterbtn btn text-left" style="font-weight: bold;">Employees</button>
</div>

<div id="employees_filterbar" class="filterbar" style="display:none ;">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, laboriosam sit facere et architecto ad provident unde enim consectetur? Hic, nobis corrupti! Similique modi neque sequi itaque aliquid, excepturi maiores?
</div>

<!-- ======================================================================================== -->
<!-- technology filter start here  -->
<div class="d-grid gap-2">
    <button id="open_technology" class="filterbtn btn">Technology</button>
</div>

<div id="technology_filterbar" class="filterbar" style="display: none;">
<div class="d-grid gap-2">
        <button id="ats_list" class="btn filterbtn mt-2">ATS</button>
    </div>
    <div id="ats_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT ats FROM finance ORDER BY ats";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['ats'] . "' class='form-check-input filter_check' id='ats'>{$row['ats']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>
<!-- --------------------------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="hrms_list" class="btn filterbtn">HRMS</button>
    </div>

    <div id="hrms_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT hrms FROM finance ORDER BY hrms";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['hrms'] . "' class='form-check-input filter_check' id='hrms'>{$row['hrms']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>
<!-- --------------------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="technology_list" class="btn filterbtn mt-2">Technology</button>
    </div>

    <div id="technology_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT technology FROM finance ORDER BY technology";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['technology'] . "' class='form-check-input filter_check' id='technology'>{$row['technology']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>
</div>

<!-- ========================================================= -->

<script>
    $(document).ready(function() {

        $(".filter_check").click(function() {

            var action = 'data';
            var title = get_filter_text('title');
            var hrms = get_filter_text('hrms');
            var ats = get_filter_text('ats');
            var technology = get_filter_text('technology');
            var country = get_filter_text('country');
            var state = get_filter_text('state');
            var city = get_filter_text('city');

            $.ajax({
                type: 'POST',
                url: "php/finance_company_ajax.php",
                data: {
                    action: action,
                    title: title,
                    hrms: hrms,
                    ats: ats,
                    technology: technology,
                    country: country,
                    state: state,
                    city: city
                },
                success: function(response) {
                    $("#result").html(response);

                }
            });

        });


        function get_filter_text(text_id) {
            var filterData = [];
            $('#' + text_id + ':checked').each(function() {
                filterData.push($(this).val());
            });
            return filterData;
        }

    });
</script>