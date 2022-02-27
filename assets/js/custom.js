(function($) {

  "use strict";

  // Window Resize Mobile Menu Fix
  mobileNav();


  // Scroll animation init
  window.sr = new scrollReveal();


  // Menu Dropdown Toggle
  if ($('.menu-trigger').length) {
    $(".menu-trigger").on('click', function() {
      $(this).toggleClass('active');
      $('.header-area .nav').slideToggle(200);
    });
  }


  // Menu elevator animation
  // $('a[href*=\\#]:not([href=\\#])').on('click', function() {
  //   if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
  //     var target = $(this.hash);
  //     target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  //     if (target.length) {
  //       var width = $(window).width();
  //       if (width < 991) {
  //         $('.menu-trigger').removeClass('active');
  //         $('.header-area .nav').slideUp(200);
  //       }
  //       $('html,body').animate({
  //         scrollTop: (target.offset().top) - 130
  //       }, 700);
  //       return false;
  //     }
  //   }
  // });

  // $(document).ready(function() {
  //   $(document).on("scroll", onScroll);

  //   smoothscroll
  //   $('a[href^="#"]').on('click', function(e) {
  //     e.preventDefault();
  //     $(document).off("scroll");

  //     $('a').each(function() {
  //       $(this).removeClass('active');
  //     })
  //     $(this).addClass('active');

  //     var target = this.hash,
  //       menu = target;
  //     var target = $(this.hash);
  //     $('html, body').stop().animate({
  //       scrollTop: (target.offset().top) - 130
  //     }, 500, 'swing', function() {
  //       window.location.hash = target;
  //       $(document).on("scroll", onScroll);
  //     });
  //   });
  // });

  // function onScroll(event) {
  //   var scrollPos = $(document).scrollTop();
  //   $('.nav a').each(function() {
  //     var currLink = $(this);
  //     var refElement = $(currLink.attr("href"));
  //     if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
  //       $('.nav ul li a').removeClass("active");
  //       currLink.addClass("active");
  //     } else {
  //       currLink.removeClass("active");
  //     }
  //   });
  // }

  var i = 0;

  var isedit = false;

  var passmatch = false;
  var isSpace = false;
  var useravaible = "notavaibale";
  var emailavaible = "notavaibale";

  //checkpassword
  $('#password, #confirm_password').on('input', function() {
    if ($('#password').val() == "" && $('#confirm_password').val() == "") {
      $('#passwordmatch').html("&nbsp;");
    } else {
      if ($('#password').val() == $('#confirm_password').val()) {
        $('#password, #confirm_password').css('color', 'green');

        $('#passwordmatch').html("รหัสตรงกันแล้ว").css('color', 'green');

        passmatch = true;


      } else {
        $('#password, #confirm_password').css('color', 'red');
        $('#passwordmatch').html("รหัสไม่ตรงกัน").css('color', 'red');

        passmatch = false;
      }
    }
  });

  //checkusername

  $('#username').on('input', function() {

    var username = $(this).val();



    if (username != '') {
      for (var i = 0; i < username.length; i++) {
        if (username[i] == " ") {
          isSpace = true;
          $('#usernamestatus').html("<span style='color: red;'>เว้นช่องว่างไม่ได้</span>");
          break;
        } else {
          isSpace = false;
        }

      }

      if (!isSpace) {


        $.ajax({
          url: 'assets/php/check.php',
          type: 'post',
          data: { username: username },
          success: function(usernamestatus) {
            if (usernamestatus == "avaible") {
              useravaible = usernamestatus;
              $('#usernamestatus').html("<span style='color: green;'>ใช้ชื่อผู้ใช้นี้ได้</span>");

            } else {
              usernamestatus = usernamestatus;
              $('#usernamestatus').html("<span style='color: red;'>มีคนใช้ชื่อนี้แล้ว</span>");

            }

          }
        });
      }

    } else {
      $("#usernamestatus").html("&nbsp;");
    }

  });

  $('#email').on('input', function() {

    var email = $(this).val().trim();
    if (email != '') {

      $.ajax({
        url: 'assets/php/check.php',
        type: 'post',
        data: { email: email },
        success: function(emailstatus) {
          if (emailstatus == "avaible") {
            emailavaible = emailstatus;
            $('#emailstatus').html("<span style='color: green;'>ใช้อีเมลนี้ได้</span>");

          } else {
            emailavaible = emailstatus;
            $('#emailstatus').html("<span style='color: red;'>มีคนใช้อีเมลนี้แล้ว</span>");

          }

        }
      });
    } else {
      $("#emailstatus").html("&nbsp;");
    }

  });



  // setInterval(() => {
  //   if (useravaible == "avaible" && emailavaible == "avaible" && passmatch && !isSpace) {
  //     $("#form_register").attr('action', 'assets/php/registerrequest.php');

  //   } else {
  //     $("#form_register").attr('action', 'javascript:alert(\"กรุณากรอกข้อมูลให้สมบูรณ์\");');

  //   }
  // }, 0);


  //checkll
  $('.btnRegister').on('click', function() {
    if (useravaible == "avaible" && emailavaible == "avaible" && passmatch && !isSpace) {
      $("#form_register").attr('action', 'assets/php/registerrequest.php');

    } else {
      $("#form_register").attr('action', 'javascript:alert(\"กรุณากรอกข้อมูลให้สมบูรณ์\");');

    }
  });






  // Home seperator
  if ($('.home-seperator').length) {
    $('.home-seperator .left-item, .home-seperator .right-item').imgfix();
  }


  // Home number counterup
  if ($('.count-item').length) {
    $('.count-item strong').counterUp({
      delay: 10,
      time: 1000
    });
  }


  // Page loading animation
  $(window).on('load', function() {
    if ($('.cover').length) {
      $('.cover').parallax({
        imageSrc: $('.cover').data('image'),
        zIndex: '1'
      });
    }

    $("#preloader").animate({
      'opacity': '0'
    }, 600, function() {
      getBrand();
      setTimeout(function() {
        $("#preloader").css("visibility", "hidden").fadeOut();
      }, 300);
    });
  });

  function getBrand() {
    i = 0;
    fetch("assets/json/car-models.json")
      .then(response => response.json())
      .then(json => {
        json.forEach(data => {
            $("#brand").html($("#brand").html() + "<option value='" + data.brand + "'>" + data.brand + "</option>");

            i++;
          }

        );
      });

  }

  function getModels() {
    fetch("assets/json/car-models.json")
      .then(response => response.json())
      .then(json => {
        $("#model").html("<option value='' disabled selected>รุ่น</option>");
        var selectedBrand = $("#brand")[0].selectedIndex - 1;
        json[selectedBrand].models.forEach(data => {

          $("#model").html($("#model").html() + "<option value=" + data + ">" + data + "</option>");
          i++;
        })
      });

  }


  $("#brand").on('change', function() {
      getModels();
    }

  );


  // Window Resize Mobile Menu Fix
  $(window).on('resize', function() {
    mobileNav();
  });


  // Window Resize Mobile Menu Fix
  function mobileNav() {
    var width = $(window).width();
    $('.submenu').on('click', function() {
      if (width < 992) {
        $('.submenu ul').removeClass('active');
        $(this).find('ul').toggleClass('active');
      }
    });
  }


})(window.jQuery);