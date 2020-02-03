// $(document).ready(function () {
//   $(window).scroll(function () {
//     if ($(this).scrollTop() >= 40) {
//       $(".navbar-me").addClass("fixed-me");
//       $(".img-navbar").fadeIn(10).attr("src", "assets/img/LOGO-BIJOU-PNG.png");
//       $(".header__main").css({ "padding": "2rem" });

//       $(".logo").css({ "padding-top": "0px" });

//     } else {
//       $(".navbar-me").removeClass("fixed-me");
//       $(".img-navbar").fadeIn(10).attr("src", "assets/img/LOGO-BIJOU-PNG.png").css({ "padding": "2rem" });
//       $(".header__main").css({ "padding": "5rem" });
//       $(".logo").css({ "padding-top": "35px" });

//     }
//   });
// });


const responsiveBtnIcon = document.querySelector(".responsive-menu-btn");
const navMenu = document.querySelector(".nav__menu");

responsiveBtnIcon.addEventListener("click", () => {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});


$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.img-navbar').addClass("none-b");
    } else {
      $(".img-navbar").removeClass("none-b");
    }
  });
});
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.none-a').addClass("no-none");
    } else {
      $(".none-a").removeClass("no-none");
    }
  });
});
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.header__main').addClass("fixed-me");
    } else {
      $(".header__main").removeClass("fixed-me");
    }
  });
});


// $(document).ready(function () {
//   $("#mostrarmodal").modal("show");
// });


$('.nav-item').click(function () {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});

