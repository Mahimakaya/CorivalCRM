
$(document).ready(function () {

    $("#hrms_ats").click(function () {
      if ($(this).is(":checked")) {
        $("#hrms_ats_options").show();
      } else {
        $("#hrms_ats_options").hide(); 
      }
    });
  
  
  
  
  
  //=================================
  // main filter options toggle functionality starts

  $("#opennav").click(function (e) { 
    e.preventDefault();
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#employees_filterbar").hide(500);
  });
  
  $("#open_location").on("click",function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").toggle(500);
    $("#title_filterbar").hide(500);
    $("#employees_filterbar").hide(500);

   
  });
  
  $("#open_title").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").toggle(500);
    $("#employees_filterbar").hide(500);

  });

  $("#open_employees").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").hide(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#employees_filterbar").toggle(500);
  });
  

  $("#open_technology").click(function (e) { 
    e.preventDefault();  
    $("#sidebar").hide(500);
    $("#technology_filterbar").toggle(500);
    $("#location_filterbar").hide(500);
    $("#title_filterbar").hide(500);
    $("#employees_filterbar").hide(500);

  });
  
  // main filter options toggle functionality end
  // ==========================================

  // Technology filter bar start 

  $("#hrms_list").click(function (e) {
    e.preventDefault(); 
    $("#hrms_option").toggle(500);
    $("#ats_option").hide(500);
    $("#technology_option").hide(500);
    
  });
  
  
  
  $("#ats_list").click(function (e) {
    e.preventDefault(); 
    $("#hrms_option").hide(500);
    $("#ats_option").toggle(500);
    $("#technology_option").hide(500);
    
  });
  
  $("#technology_list").click(function (e) {
    e.preventDefault(); 
    $("#hrms_option").hide(500);
    $("#ats_option").hide(500);
    $("#technology_option").toggle(500);
    
  });

  // ===============================================
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