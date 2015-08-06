$(document).ready(function(){

  $('body').addClass('branches');
  
  branches = $('.branch');

  $('fieldset[data-branch-name], .field[data-branch-name]').each(function(){
    this.fields = $(this).find('input');
    this.fields.change(function(){
      branchName = $(this).parents('*[data-branch-name]').attr('data-branch-name');
      value = $(this).attr('value');
      branches.filter('.branch[data-branch-name=' + branchName + ']').attr('disabled', 'disabled').hide();
      branches.hide();
      if ($(this).is(':checked')) {
        branches.filter('.branch[data-branch-name=' + branchName + '][data-branch-value~=' + value + ']').removeAttr('disabled').show();
      }
    });
    this.fields.change();
  });

  $('.field input, .field textarea, .field select').focus(function(){ $(this).parents('.field').addClass('is-focused'); });
  $('.field input, .field textarea, .field select').blur(function(){ $(this).parents('.field').removeClass('is-focused'); });


  $.bigfoot();
  $('body').addClass('bigfoot');

});