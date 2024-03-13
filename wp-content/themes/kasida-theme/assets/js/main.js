jQuery(document).ready(function ($) {


  // show and hide footer
  const footer = $("#main-footer");
  const topCopyright = $("#top-copyright");
  const showFooter = $("#show-footer");
  const bottomCopyright = $("#bottom-copyright");
  const hideFooter = $("#hide-footer");

  showFooter.on("click", function () {
    footer.css({
      'display': 'block'
    });

    bottomCopyright.css({
      'display': 'block'
    });

    topCopyright.css({
      'display': 'none'
    });

  });

  hideFooter.on("click", function () {
    footer.css({
      'display': 'none'
    });

    bottomCopyright.css({
      'display': 'none'
    });

    topCopyright.css({
      'display': 'block'
    });
  })

  // rezide the main area.
  function resizeContent() {
    let headerHeight = $('#header').outerHeight();
    let footerHeight = $('#footer').outerHeight();
    let viewportHeight = $(window).height() - headerHeight + footerHeight;
    return viewportHeight;
  }

  let contentHeight = resizeContent();
  // if ( contentHeight > 0 ) {
  //   $("#home-hero, #home-hero ul").css({
  //     'height': contentHeight
  //   })
  // }

});