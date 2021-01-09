$(document).ready(function () {
    $( "#search" ).keyup(function() {
    $value = $(this).val();
    var url_temp = $(this).attr("url-temp");

    $.ajax({
        type: 'get',
        url: url_temp,
        data: {
            'search': $value
        },
        success:function(data){
            console.log(data);
            $('tbody').html(data);
        }
    });
});
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
});
