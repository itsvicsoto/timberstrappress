'use strict';

(function() {

  $(document).on('scroll', function(e) {

    var $document = $(this);
    var $targetContent = $('[data-ui="coloredHeaderTrigger"]');
    var $targetNavbar = $('[data-ui="navbarHeader"]');
    var $targetoffset = $targetContent.offset();
    var $windowOffsetTop = $(window).scrollTop();
    var HEADER_HEIGHT = 84;


    if (!$targetNavbar.length) return;

    if ($windowOffsetTop + HEADER_HEIGHT >= $targetoffset.top) {
      addNavbarClass($targetNavbar);
    } else {
      removeNavbarClass($targetNavbar);
    }

    function addNavbarClass(targetNavbar) {
      targetNavbar.addClass('active');
    }

    function removeNavbarClass(targetNavbar) {
      targetNavbar.removeClass('active');
    }

  });

})()
