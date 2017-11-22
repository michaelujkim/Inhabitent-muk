(function ($) {

  $('.icon-search').on('click', function (e) {
    e.preventDefault();

    $('.search-field').toggleClass('search-open').focus();

    // $(document).click(function (e) {
    //   if (!$(e.target).closest('.search-form').length) {
    //     $('.search-field').removeClass('search-open');
    //   }
    // });

  });

  $('.search-field').on('blur', function(){
    $(this).toggleClass('search-open')
  });

})(jQuery);