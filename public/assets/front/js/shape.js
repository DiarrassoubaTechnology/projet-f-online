/**
* Template Name: Arsha
* Updated: Jul 05 2023 with Bootstrap v5.3.0
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
    "use strict";
  
    /**
     * Animation on Shape
     */
    var html = "";
    for (var i = 1; i <= 50; i++) {
      html +=
        '<div class="shape-container--' +
        i +
        ' shape-animation"><div class="random-shape"></div></div>';
    }
  
    document.querySelector(".shape").innerHTML += html;
  
    // var $allShapes = $("[class*='shape-container--']");
    var $allShapes = document.querySelector('.shape-container--');
  
  })()
  