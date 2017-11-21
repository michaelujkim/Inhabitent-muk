(function($){
  
    $('.search-icon').onclick(function(){
        $('.search-field').toggleClass('search-open');
    

    $(document).click(function(e){
        if(!$(e.target).closest('.search-form').length){
            $('.search-field').removeClass('search-open');
        }
    })
});
})(jQuery);