

  // When the user scrolls down 500px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


  //disable body scroll which navbar is in active -->

  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });

//disable body scroll which navbar is in active -->

// owl carousel -->



  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        767: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
