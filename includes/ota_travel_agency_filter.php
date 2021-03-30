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
            $sql = "SELECT DISTINCT country FROM ota_travel_agency ORDER BY country";
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
            $sql = "SELECT DISTINCT state FROM ota_travel_agency ORDER BY state";
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
            $sql = "SELECT DISTINCT city FROM ota_travel_agency ORDER BY city";
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
        $sql = "SELECT DISTINCT title FROM ota_travel_agency ORDER BY title";
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

<!-- Number of property filter starts here  -->

<div class="d-grid gap-2">
    <button id="open_property" class="filterbtn btn text-left" style="font-weight: bold;">Number of Property</button>
</div>

<div id="property_filterbar" class="filterbar" style="display:none ;">
    <div class="form-floating my-3">
        <input type="text" class="form-control" id="from" placeholder="From" autocomplete="off">
        <label for="from">From</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="to" placeholder="To" autocomplete="off">
        <label for="to">To</label>
    </div>
    <div class="d-grid gap-2">
        <button  class="m-2 btn filter_check">Search</button>
    </div>

</div>

<!-- ======================================================================================== -->



<!-- technology filter start here  -->
<div class="d-grid gap-2">
    <button id="open_technology" class="filterbtn btn">Technology</button>
</div>

<div id="technology_filterbar" class="filterbar" style="display: none;">
    <ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT technology FROM ota_travel_agency ORDER BY technology";
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


<!-- =========================================================== -->



<!-- remark filter start here  -->
<div class="d-grid gap-2">
    <button id="open_remark" class="filterbtn btn">Remark</button>
</div>

<div id="remark_filterbar" class="filterbar" style="display: none;">
    <ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT remark FROM ota_travel_agency ORDER BY remark";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['remark'] . "' class='form-check-input filter_check' id='remark'>{$row['remark']} 
        </label>
    </div>
</li>";
        }  ?>

    </ul>
</div>

<!-- ========================================================= -->

<script>
    $(document).ready(function() {

        $(".filter_check").click(function() {

            var action = 'data';
            var title = get_filter_text('title');
            var technology = get_filter_text('technology');
            var remark = get_filter_text('remark');
            var country = get_filter_text('country');
            var state = get_filter_text('state');
            var city = get_filter_text('city');
            var from = get_min_value();
            var to = get_max_value();

            
            $.ajax({
                type: 'POST',
                url: "php/ota_travel_agency_ajax.php",
                data: {
                    action: action,
                    title: title,
                    technology: technology,
                    remark: remark,
                    country: country,
                    state: state,
                    city: city,
                    from : from,
                    to : to


                },
                success: function(response) {
                    $("#result").html(response);
                }
            });

        });

        function get_min_value() {
            var small = Number.MIN_VALUE;
            var min = $("#from").val();
            if(min != '')
            {
                small = min;
            }
            return small;
        }

        function get_max_value() {
            var big = Number.MAX_VALUE;
            var max = $("#to").val();
            if(max != '')
            {
                big = max;
            }
            return big;
        }



        function get_filter_text(text_id) {
            var filterData = [];
            $('#' + text_id + ':checked').each(function() {
                filterData.push($(this).val());
            });
            return filterData;
        }

    });
</script>