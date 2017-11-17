$(document).ready(function(){
  var submitIcon = $('.icon-search');
  var inputBox = $('.search-form');
  var searchBox = $('.search-field');
  var isOpen = false;
  submitIcon.click(function(){
      if(isOpen == false){
          searchBox.addClass('.search-form-open');
          inputBox.focus();
          isOpen = true;
      } else {
          searchBox.removeClass('.search-form-open');
          inputBox.focusout();
          isOpen = false;
      }
  });  
   submitIcon.mouseup(function(){
          return false;
      });
  searchBox.mouseup(function(){
          return false;
      });
  $(document).mouseup(function(){
          if(isOpen == true){
              $('.icon-search').css('display','block');
              submitIcon.click();
          }
      });
});
  function buttonUp(){
      var inputVal = $('.search-field').val();
      inputVal = $.trim(inputVal).length;
      if( inputVal !== 0){
          $('.icon-search').css('display','none');
      } else {
          $('.search-form').val('');
          $('.icon-search').css('display','block');
      }
  }