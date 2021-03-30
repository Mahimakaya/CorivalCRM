 
$(document).ready(function () {


  
  
  
  
  
  //=================================
  // main filter options toggle functionality starts

  $("#opennav").click(function (e) { 
    e.preventDefault();
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#remark_filterbar").hide(500);
    $("#category_filterbar").hide(500);



  });
  
  
  $("#open_location").on("click",function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").toggle(500);
    $("#title_filterbar").hide(500);
    $("#remark_filterbar").hide(500);
    $("#category_filterbar").hide(500);




   
  });
  
  $("#open_title").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").toggle(500);
    $("#remark_filterbar").hide(500);
    $("#category_filterbar").hide(500);



  });


  $("#open_technology").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").toggle(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#remark_filterbar").hide(500);
    $("#category_filterbar").hide(500);


  });


  $("#open_remark").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#remark_filterbar").toggle(500);
    $("#category_filterbar").hide(500);


  });

  $("#open_category").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#remark_filterbar").hide(500);
    $("#category_filterbar").toggle(500);

  });
  
  // main filter options toggle functionality
  // ==========================================
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