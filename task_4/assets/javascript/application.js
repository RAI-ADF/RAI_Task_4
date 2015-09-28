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
      url: "/_city.php",
      data: { province: selected }
    }).done(function(data){
      $("select.city").html(data);

      var province = $(".province option:selected").val();
      var city = $(".city option:selected").val();
      $("input#birthplace").val(province + ", " + city);
    });
  });

  $("select.city").change(function(){
    var province = $(".province option:selected").val();
    var city = $(".city option:selected").val();
    $("input#birthplace").val(province + ", " + city);
  });

  if ($(".datatable").length > 0){
    load_table("/" + $(".datatable").attr("id") + "/index.json.php");

    if ($('#search')){
      $('#search').on('keypress', function(e) {
        if (e.keyCode === 13) {
          e.preventDefault();
          load_table("/" + $(".datatable").attr("id") + "/index.json.php?search=" + $('#search').val());
        }
      });
    }
  }
});

function validate_password() {
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password_confirmation');

    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = "#fff";
    }else{
        pass2.style.backgroundColor = "#ff6666";
    }
}

function validate_email() {
    var format = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var email = document.getElementById('email');

    if(email.value.match(format)){
        email.style.backgroundColor = "#fff";
    }else{
        email.style.backgroundColor = "#ff6666";
    }
}

function table_action_form(action, method, id, text, form_method){
  if (typeof(form_method)==='undefined') form_method = "get";

  return "\
  <form action='"+ action +"' method='"+ form_method +"'> \
    <input type='hidden' name='_METHOD'  value='"+ method + "' /> \
    <input type='hidden' name='id' value='"+ id +"' /> \
    <button type='submit' class='plain'>"+ text +"</button>\
  </form>";
}

function load_table(json_url) {
  var data = $.ajax({
    url: json_url,
    dataType: "json",
    success: function(data) {
      var tabledata = data.lines;

      $(".datatable").find("tr:gt(0)").remove();

      if( data.length === 0)
      {
           $('#message').html('Sorry, <strong>no</strong> rows returned!');
           return;
      }

      for( var i=0; i < data.length; i++ )
      {
         var line = data[i];
         $('.datatable > tbody:last').append(function(){
           var html_data = "<tr>";
           $.each(line, function(k,v){
             html_data += "<td>"+v+"</td>";
           });
           html_data += "\
           <td> \
            <div class='form-inline'>"
              + table_action_form("show.php", "GET", line.id, "Show") +"|"
              + table_action_form("edit.php", "GET", line.id, "Edit") +"|"
              + table_action_form("index.php", "DELETE", line.id, "Delete", "post") +
            "</div> \
           </td>";
           return html_data+"</tr>";
         });
      }
    },
    error: function(data, errorText)
    {
      $("#message").html(errorText).show();
    }
  });
}
