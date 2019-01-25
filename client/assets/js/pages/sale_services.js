/* Document ready start */
$(document).ready(function() {
    $('#add_new_service').click(function() {
        // var employee_id = $('#team_member_edit').data('team_member_id');
        // var current = $(this);

        $.ajax({
            url: base_url + 'sale_services/service_popup',
            type: 'post',
            dataType: 'json',
            // data: {'employee_id': employee_id},
            success: function(data) {
                $('#bestselleraddnewservice').html(data);
            },
            error: function() {

            }
        });
    });

    $('body').on('click', '#edit_service', function() {
        var service_id = $(this).data('service_id');

        $.ajax({
            url: base_url + 'sale_services/edit_service_popup',
            type: 'post',
            dataType: 'json',
            data: {'service_id': service_id},
            success: function(data) {
                $('#bestselleraddnewservice').html(data);
            },
            error: function() {

            }
        });
    });

    $('body').on('click', '#view_service', function() {
        var service_id = $(this).data('service_id');

        $.ajax({
            url: base_url + 'sale_services/view_service_popup',
            type: 'post',
            dataType: 'json',
            data: {'service_id': service_id},
            success: function(data) {
                $('#viewAccept').html(data);
            },
            error: function() {

            }
        });
    });

    // $('#add_service_submit').click(function() {alert('a');
    //     $('#service_form').submit();
    // });

    $('body').on('click', '#delete_service', function() {
        var url = $(this).data("delete_url");
        $("#service_delete_confirm").prop("href", url);
    });

    $('body').on('click', '#delete_service2', function() {
        var url = $(this).data("delete_url");
        $("#service_delete_confirm2").prop("href", url);
    });

    list_services();
    list_manage_services();
    list_sale_services_history();

    function list_services(ajax_url='') {
        if(ajax_url == '') {
            var ajax_url = $('.ajax_url').val();
        }
         
        $.ajax({
            url: ajax_url,
            dataType: 'json',
            success: function(data) {
                $('.list_sale_services').html(data);                
            },
            beforeSend: function(){                
                // ajaxindicatorstart();
            },
            complete: function(){
                // ajaxindicatorEnd();
            }, 
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus);
            }
        });
    }

    function list_manage_services(ajax_url='') {
        if(ajax_url == '') {
            var ajax_url = $('.ajax_url2').val();
        }
         
        $.ajax({
            url: ajax_url,
            dataType: 'json',
            success: function(data) {
                $('.manage_sale_services').html(data);                
            },
            beforeSend: function(){                
                // ajaxindicatorstart();
            },
            complete: function(){
                // ajaxindicatorEnd();
            }, 
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus);
            }
        });
    }

    function list_sale_services_history(ajax_url='') {
        if(ajax_url == '') {
            var ajax_url = $('.ajax_url3').val();
        }
         
        $.ajax({
            url: ajax_url,
            dataType: 'json',
            success: function(data) {
                $('.sale_services_history').html(data);
            },
            beforeSend: function(){                
                // ajaxindicatorstart();
            },
            complete: function(){
                // ajaxindicatorEnd();
            }, 
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus);
            }
        });
    }

    $('body').on('click','ul#list_services_pagination>li>a', function(e) {        
        e.preventDefault();

        var ajax_url = $(this).attr('href');
        list_services(ajax_url);
    });
    $('body').on('click','ul#manage_services_pagination>li>a', function(e) {        
        e.preventDefault();

        var ajax_url = $(this).attr('href');
        list_manage_services(ajax_url);
    });
    $('body').on('click','ul#sale_services_pagination>li>a', function(e) {        
        e.preventDefault();

        var ajax_url = $(this).attr('href');
        list_sale_services_history(ajax_url);
    });
}); /* Document ready end */