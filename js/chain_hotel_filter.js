 
$(document).ready(function () {

  
  
  
  
  //=================================
  // main filter options toggle functionality starts

  $("#opennav").click(function (e) { 
    e.preventDefault();
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").hide(500);


  });
  
  
  $("#open_location").on("click",function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").toggle(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").hide(500);



   
  });
  
  $("#open_title").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").toggle(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").hide(500);


  });


  $("#open_technology").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").toggle(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").hide(500);

  });


  $("#open_star_rating").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").toggle(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").hide(500);

  });


  $("#open_hotel_type").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").toggle(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").hide(500);

  });
  

  $("#open_hotels").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").toggle(500);
    $("#rooms_filterbar").hide(500);

  });
  

  $("#open_rooms").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#star_rating_filterbar").hide(500);
    $("#hotel_type_filterbar").hide(500);
    $("#hotels_filterbar").hide(500);
    $("#rooms_filterbar").toggle(500);

  });
  
  // main filter options toggle functionality
  // ==========================================

  $("#pms_list").click(function (e) {
    e.preventDefault(); 
    $("#pms_option").toggle(500);
    $("#ibe_option").hide(500);
    $("#cms_option").hide(500);
    $("#crm_option").hide(500);
    $("#crs_option").hide(500);
    
  });
  

  $("#ibe_list").click(function (e) {
    e.preventDefault(); 
    $("#pms_option").hide(500);
    $("#ibe_option").toggle(500);
    $("#cms_option").hide(500);
    $("#crm_option").hide(500);
    $("#crs_option").hide(500);
    
  });
  

  $("#cms_list").click(function (e) {
    e.preventDefault(); 
    $("#pms_option").hide(500);
    $("#ibe_option").hide(500);
    $("#cms_option").toggle(500);
    $("#crm_option").hide(500);
    $("#crs_option").hide(500);
    
  });
  

  $("#crm_list").click(function (e) {
    e.preventDefault(); 
    $("#pms_option").hide(500);
    $("#ibe_option").hide(500);
    $("#cms_option").hide(500);
    $("#crm_option").toggle(500);
    $("#crs_option").hide(500);
    
  });
  

  $("#crs_list").click(function (e) {
    e.preventDefault(); 
    $("#pms_option").hide(500);
    $("#ibe_option").hide(500);
    $("#cms_option").hide(500);
    $("#crm_option").hide(500);
    $("#crs_option").toggle(500);
    
  });
  
  // ==============================
  // location filter toggle option 

  $("#country_list").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#country_option").toggle(500);
    $("#state_option").hide(500);
    $("#city_option").hide(500);

  });
  

  $("#state_list").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#country_option").hide(500);
    $("#state_option").toggle(500);
    $("#city_option").hide(500);

  });
  

  $("#city_list").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#country_option").hide(500);
    $("#state_option").hide(500);
    $("#city_option").toggle(500);

  });
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  });