$(document).ready(function(){
    sendfilter();
});

$('#filter').keypress(function(e) {

  if(e.which == 13) {
    search_user();
  }

});

function search_user(){

  var search_value = $("#filter").val();

  if(search_value != ""){
      $("#result_report tbody tr").addClass('hidden');

      $('#result_report tbody tr').each(function(){
             if($(this).text().toUpperCase().indexOf(search_value.toUpperCase()) != -1){
                 $(this).removeClass('hidden');
             }
      });

      var row_sum = $('#result_report tbody tr').not('.hidden').length;
      $("#row_sum").html(row_sum);

  }else{
      $("#result_report tbody tr").removeClass('hidden');
      var row_sum = $('#result_report tbody tr').not('.hidden').length;
      $("#row_sum").html(row_sum);
  }

}

$(document).on('change', '#filter_year', function() {
    sendfilter();
});

function sendfilter(){

      var year = $("#filter_year").val();

      $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });

      $.ajax({
          url: 'get_reportassign',
          type: "post",
          data: {'year': year,},
          success: function(data){
            $("#result_report").html(data);
          }
        });

}
