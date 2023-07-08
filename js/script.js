$(document).ready(function() {
  $('#submitItem').click(function() {
    var item = $('#item').val();
    $.ajax({
      url: 'add_item.php',
      type: 'POST',
      data: { item: item },
      success: function(data) {
        if(parseInt(data)!=0){
         $("#itemsArea").html(data)
        }
        $('#item').val("");
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
});


function markAsDone(lid) {
 
  var elem="#lid"+lid
  $.ajax({
    type: 'POST',
    url: 'update_item.php',
    data: { 
      lid: lid
    },
    success: function(response) {
      $(elem).toggleClass("del");
    },
    error: function() {
      console.log('Error updating database'); // Log error message
    }
  });
}