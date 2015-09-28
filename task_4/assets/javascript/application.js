$(document).ready(function() {
  $("#navToggle a").click(function(e) {
    e.preventDefault();

    $("header > nav").slideToggle();
    $("#logo").toggleClass("menuUp menuDown");
  });

  $("header > nav > ul > li > a").click(function(e) {
    if ($(window).width() <= "600") {
      if ($(this).siblings().size() > 0) {
        e.preventDefault();
        $(this.siblings).slideToggle("fast");
        $(this).children(".toggle").html($(this).children(".toggle").html() == "close" ? "expand" : "close");
      }
    }
  });

  $(window).resize(function() {
    if($( window ).width() >= "600") {
        $("header > nav").css("display", "block");

        if($("#logo").attr('class') == "menuDown") {
            $("#logo").toggleClass("menuUp menuDown");
        }
    }
    else {
        $("header > nav").css("display", "none");
    }
  });

  $( ".date" ).datepicker({
    changeMonth: true,
    changeYear: true
  });

  $("select.province").change(function(){
    var selected = $(".province option:selected").val();
    console.log (selected);
    $.ajax({
      type: "GET",
      url: "_city.php",
      data: { province: selected }
    }).done(function(data){
      $("select.city").html(data);
    });
  });
});

function validate_password()
{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password_confirmation');

    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = "#fff";
    }else{
        pass2.style.backgroundColor = "#ff6666";
    }
}

function validate_email()
{
    var format = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var email = document.getElementById('email');

    if(email.value.match(format)){
        email.style.backgroundColor = "#fff";
    }else{
        email.style.backgroundColor = "#ff6666";
    }
}
