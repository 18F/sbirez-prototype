$(document).ready(function(){

  $('div.field.field-radio input[type=radio]')
    .focus(function(){
      $(this)
        .parents('div.field.field-radio')
        .addClass('is-focused');
    })
    .blur(function()){
      $(this)
        .parents('div.field.field-radio')
        .removeClass('is-focused');
    });

  $('.is-branch').hide();

});