var SBIR = {
  init: function(){
    $('body').attr('role', 'application');
    this.dialog = $('<div id="sbir-dialog" />');    
    this.dialog.dialog({
      autoOpen: false,
      minHeight: 100,
      modal: true,
      open: function(event, ui){
        // Make the dialog draggable by its new title
        dialog = $(this);
        dialog.parent().draggable({
          handle: 'section#preferences-index > ul', 
          cancel: ""
        })
        
        dialog.find('.cancel').click(function(){
          dialog.dialog("close");
          return false;
        });
        
        dialog.find('section#preferences-index > header h1').remove();
        dialog.find('section#preferences-index ul li a').each(function(){
          href = $(this).attr('href');
          newHref = href + "?is_modal=true";
          $(this).attr('href', newHref);
        });        
      },
      position: ['center','middle'],
      resizable: false,
      width: 'auto'
    });
    
  },
    
  openDialog: function(link){
    url = $(link).attr('href');
    // Need to add a param to any existing params of the URL when opening the dialog
    var newAdditionalURL = "is_modal=true&"; // Adding this param for modals
    var tempArray = url.split("?"); // Get url from href attr, split the base URL from any params in href.
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1]; 
    var temp = '';
    if(additionalURL != undefined) {
      var tempArray = additionalURL.split("&");
      for ( var i in tempArray ){
        if(tempArray[i].indexOf("rows") == -1){
          newAdditionalURL += temp+tempArray[i];
          temp = "&";
        }
      }
    }
    var finalURL = baseURL+"?"+newAdditionalURL;
    console.log('Preferences.dialog.load(' + finalURL + ');');
    
    Preferences.dialog.load(
      finalURL,
      function() { 
        Preferences.dialog.dialog('open');
      }
    );
    return false;
  }  
}