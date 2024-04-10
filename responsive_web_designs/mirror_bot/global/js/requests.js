includeHTML();

function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.outerHTML = this.responseText;}
          if (this.status == 404) {elmnt.outerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
};



(function ($) {

  $(document).ready(function(){


      // Accordian
      $('.faq-sec .sky-strip').on('click', function(e) {
        e.preventDefault();
      
        var $this = $(this);
      
        if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.parents(".common").toggleClass('show');
        $this.next().slideUp(350);
        } else {
        $(".common").removeClass('show');
        $this.parent().parent().find('.details').removeClass('show');
        $this.parent().parent().find('.details').slideUp(350);
        $this.parents(".common").toggleClass('show');
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
        }
      });


      /* home tabbing */
      $('.tabing_listing li:first-child').addClass('active');
      $('.tabing_contetnt .tabbing_column').hide();
      $('.tabbing_column:first').show();

      // Click function
      $('.tabing_listing li').click(function () {
          $('.tabing_listing li').removeClass('active');
          $(this).addClass('active');
          $('.tabing_contetnt .tabbing_column').hide();

          var activeTab = $(this).find('a').attr('href');
          $(activeTab).fadeIn();
          return false;
      });

      // Range Slider
      $("#ex24").slider({});

      
      // Tabing Slider
      $('.tabing_contetnt-slide').slick({
        infinite: true,
        slidesToShow: 1,
        dots: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 600,
        fade: true,
        slidesToScroll: 1
      });

      // toggle menu

      $('#menu-icon').on('click', function(){

        $('.navbar').toggleClass('expand');

        return false;

      });

      $(".menu-box").bind("touch click", function () {

          $(this).toggleClass("active");

      });

      $(".menu-box").on("click",function(){

        $("body").toggleClass("add");

    });


  });

})(jQuery);
