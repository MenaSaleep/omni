$(document).ready(function () {

  $(".lnr-menu").click(function () {
    $(".menu-nav").animate({left: '300px'}, "slow");
  });

  $(".lnr-cross").click(function () {
    $(".menu-nav").animate({left: '0px'}, "slow");
  });


    $(".delete").click(function () {
      var ID = $(this).data("id");
      var table = $(this).data("table");
      $(this).parent().parent().hide();

      $.ajax({
        url:"delete.php",
        method:"POST",
        data:{ID:ID, table:table},
        success:function(data) {
           $(ID).css("display", "none");
           
         }
      });
    });


});
