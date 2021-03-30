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
            $sql = "SELECT DISTINCT country FROM seller ORDER BY country";
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
            $sql = "SELECT DISTINCT state FROM seller ORDER BY state";
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
            $sql = "SELECT DISTINCT city FROM seller ORDER BY city";
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
        $sql = "SELECT DISTINCT title FROM seller ORDER BY title";
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



<!-- selling_platform filter start here  -->
<div class="d-grid gap-2">
    <button id="open_selling_platform" class="filterbtn btn">Selling platform</button>
</div>

<div id="selling_platform_filterbar" class="filterbar" style="display: none;">
<ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT selling_platform FROM seller ORDER BY selling_platform";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['selling_platform'] . "' class='form-check-input filter_check' id='selling_platform'>{$row['selling_platform']} 
        </label>
    </div>
</li>";
        }  ?>

    </ul>
</div>

<!-- =========================================================== -->



<!-- product_category filter start here  -->
<div class="d-grid gap-2">
    <button id="open_product_category" class="filterbtn btn">Product Category</button>
</div>

<div id="product_category_filterbar" class="filterbar" style="display: none;">
<ul class="list-group">
        <?php
        $sql = "SELECT DISTINCT product_category FROM seller ORDER BY product_category";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
<li class='list-group-item'>
    <div class='form-check'>
        <label for='title' class='form-check-label'>
            <input type='checkbox' value='" . $row['product_category'] . "' class='form-check-input filter_check' id='product_category'>{$row['product_category']} 
        </label>
    </div>
</li>";
        }  ?>

    </ul>
</div>


<!-- =========================================================== -->




<script>
    $(document).ready(function() {

        $(".filter_check").click(function() {

            var action = 'data';
            var title = get_filter_text('title');
            var selling_platform = get_filter_text('selling_platform');
            var product_category = get_filter_text('product_category');
            var country = get_filter_text('country');
            var state = get_filter_text('state');
            var city = get_filter_text('city');

            $.ajax({
                type: 'POST',
                url: "php/seller_ajax.php",
                data: {
                    action: action,
                    title: title,
                    selling_platform: selling_platform,
                    product_category: product_category,
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