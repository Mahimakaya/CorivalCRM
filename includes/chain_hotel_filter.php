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
            $sql = "SELECT DISTINCT country FROM chain_hotel ORDER BY country";
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
            $sql = "SELECT DISTINCT state FROM chain_hotel ORDER BY state";
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
            $sql = "SELECT DISTINCT city FROM chain_hotel ORDER BY city";
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
        $sql = "SELECT DISTINCT title FROM chain_hotel ORDER BY title";
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



<!-- 	star_rating filter start here  -->
<div class="d-grid gap-2">
    <button id="open_star_rating" class="filterbtn btn">Star Rating</button>
</div>

<div id="star_rating_filterbar" class="filterbar" style="display: none;">
    <ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT star_rating FROM chain_hotel ORDER BY star_rating";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['star_rating'] . "' class='form-check-input filter_check' id='star_rating'>{$row['star_rating']} 
        </label>
    </div>
</li>";
        }  ?>

    </ul>
</div>

<!-- =========================================================== -->

<!-- Type of hotel filter start here  -->
<div class="d-grid gap-2">
    <button id="open_hotel_type" class="filterbtn btn">Type of Hotel</button>
</div>

<div id="hotel_type_filterbar" class="filterbar" style="display: none;">
    <ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT hotel_type FROM chain_hotel ORDER BY hotel_type";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['hotel_type'] . "' class='form-check-input filter_check' id='hotel_type'>{$row['hotel_type']} 
        </label>
    </div>
</li>";
        }  ?>

    </ul>
</div>



<!-- =========================================================== -->

<!-- no of hotels filter starts here  -->

<div class="d-grid gap-2">
    <button id="open_hotels" class="filterbtn btn text-left" style="font-weight: bold;">Number of Hotels</button>
</div>

<div id="hotels_filterbar" class="filterbar" style="display:none ;">
    <div class="form-floating my-3">
        <input type="text" class="form-control" id="from_hotels" placeholder="From" autocomplete="off">
        <label for="from_hotels">From</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="to_hotels" placeholder="To" autocomplete="off">
        <label for="to_hotels">To</label>
    </div>
    <div class="d-grid gap-2">
        <button  class="m-2 btn filter_check">Search</button>
    </div>

</div>



<!-- =========================================================== -->

<!-- no of rooms filter starts here  -->

<div class="d-grid gap-2">
    <button id="open_rooms" class="filterbtn btn text-left" style="font-weight: bold;">Number of Rooms</button>
</div>

<div id="rooms_filterbar" class="filterbar" style="display:none ;">
    <div class="form-floating my-3">
        <input type="text" class="form-control" id="from_rooms" placeholder="From" autocomplete="off">
        <label for="from_rooms">From</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="to_rooms" placeholder="To" autocomplete="off">
        <label for="to_rooms">To</label>
    </div>
    <div class="d-grid gap-2">
        <button  class="m-2 btn filter_check">Search</button>
    </div>

</div>

<!-- =========================================================== -->


<!-- technology filter start here  -->
<div class="d-grid gap-2">
    <button id="open_technology" class="filterbtn btn">Technology</button>
</div>

<div id="technology_filterbar" class="filterbar" style="display: none;">
    <!-- --------------------------------------------- -->

    <div class="d-grid gap-2">
        <button id="pms_list" class="btn filterbtn mt-2">PMS</button>
    </div>


    <div id="pms_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT pms FROM chain_hotel ORDER BY pms";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['pms'] . "' class='form-check-input filter_check' id='pms'>{$row['pms']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>


    <!-- ----------------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="ibe_list" class="btn filterbtn mt-2">IBE</button>
    </div>

    <div id="ibe_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT ibe FROM chain_hotel ORDER BY ibe";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['ibe'] . "' class='form-check-input filter_check' id='ibe'>{$row['ibe']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>


    <!-- ----------------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="cms_list" class="btn filterbtn mt-2">CMS</button>
    </div>

    <div id="cms_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT cms FROM chain_hotel ORDER BY cms";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['cms'] . "' class='form-check-input filter_check' id='cms'>{$row['cms']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>


    <!-- --------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="crm_list" class="btn filterbtn mt-2">CRM</button>
    </div>

    <div id="crm_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT crm FROM chain_hotel ORDER BY crm";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['crm'] . "' class='form-check-input filter_check' id='crm'>{$row['crm']} 
        </label>
    </div>
</li>";
            }  ?>

        </ul>
    </div>

    <!-- ----------------------------------------------- -->
    <div class="d-grid gap-2">
        <button id="crs_list" class="btn filterbtn mt-2">CRS</button>
    </div>

    <div id="crs_option" class="mt-2" style="display:none ;">
        <ul class="list-group ">
            <?php
            $sql = "SELECT DISTINCT crs FROM chain_hotel ORDER BY crs";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['crs'] . "' class='form-check-input filter_check' id='crs'>{$row['crs']} 
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
            var star_rating = get_filter_text('star_rating');
            var hotel_type = get_filter_text('hotel_type');
            var pms = get_filter_text('pms');
            var ibe = get_filter_text('ibe');
            var cms = get_filter_text('cms');
            var crm = get_filter_text('crm');
            var crs = get_filter_text('crs');
            var country = get_filter_text('country');
            var state = get_filter_text('state');
            var city = get_filter_text('city');
            var from_hotels = get_hotels_min_value();
            var to_hotels = get_hotels_max_value();
            var from_rooms = get_rooms_min_value();
            var to_rooms = get_rooms_max_value();


            $.ajax({
                type: 'POST',
                url: "php/chain_hotel_ajax.php",
                data: {
                    action: action,
                    title: title,
                    star_rating: star_rating,
                    hotel_type: hotel_type,
                    pms: pms,
                    ibe: ibe,
                    cms: cms,
                    crm: crm,
                    crs: crs,
                    country: country,
                    state: state,
                    city: city,
                    from_hotels : from_hotels,
                    to_hotels : to_hotels,
                    from_rooms : from_rooms,
                    to_rooms : to_rooms


                },
                success: function(response) {
                    $("#result").html(response);
                }
            });

        });

        // funcctions for hotels 
        function get_hotels_min_value() {
            var small_hotels = Number.MIN_VALUE;
            var min_hotels = $("#from_hotels").val();
            if(min_hotels != '')
            {
                small = min_hotels;
            }
            return small_hotels;
        }

        function get_hotels_max_value() {
            var big_hotels = Number.MAX_VALUE;
            var max_hotels = $("#to_hotels").val();
            if(max_hotels != '')
            {
                big_hotels = max_hotels;
            }
            return big_hotels;
        }

        // fumctions for rooms 
        function get_rooms_min_value() {
            var small_rooms = Number.MIN_VALUE;
            var min_rooms = $("#from_rooms").val();
            if(min_rooms != '')
            {
                small_rooms = min_rooms;
            }
            return small_rooms;
        }

        function get_rooms_max_value() {
            var big_rooms = Number.MAX_VALUE;
            var max_rooms = $("#to_rooms").val();
            if(max_rooms != '')
            {
                big_rooms = max_rooms;
            }
            return big_rooms;
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