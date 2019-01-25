$('#profile_picture').change(function() {
	var file = $(this).val();
	var file_data = $(this).prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('path', './assets/employee-uploads/images/profile-pictures/');
    form_data.append('table_field', 'profile_picture');
    $.ajax({
        url: 'employee_dashboard/ajax_image_upload',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (response) {
            window.location.hash = '#settings';
		    window.location.reload(true);
        },
        error: function (response) {
        	alert(response);
        }
    });
});

$('#cover_picture').change(function() {
	var file = $(this).val();
	var file_data = $(this).prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('path', './assets/employee-uploads/images/cover-pictures/');
    form_data.append('table_field', 'cover_picture');
    $.ajax({
        url: 'employee_dashboard/ajax_image_upload',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (response) {
            window.location.hash = '#settings';
		    window.location.reload(true);
        },
        error: function (response) {
        	alert(response);
        }
    });
});

$('#team_member_edit').click(function() {
    var employee_id = $('#team_member_edit').data('team_member_id');
    var current = $(this);

    $.ajax({
        url: 'employee_dashboard/get_employee_detail',
        type: 'post',
        dataType: 'json',
        data: {'employee_id': employee_id},
        success: function(data) {
            $('#addnewteam').html(data);
        },
        error: function() {

        }
    });
});

/* Document ready start */
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard-portfolio .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard-portfolio .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

