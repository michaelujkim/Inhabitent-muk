(function ($) {

  $('.icon-search').on('click', function (e) {
    e.preventDefault();

    $('.search-field').animate(
      {width:200},"slow").focus()


    

  });

  $('.search-field').on('blur', function(){
    $('.search-field').animate(
      {width:0},"slow")

  });

})(jQuery);