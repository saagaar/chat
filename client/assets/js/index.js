// JavaScript Document
jQuery(document).ready(function($) {
    /*-----------------*/
    
    var cururl = window.location.pathname;
    var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
    var hash = window.location.hash.substr(1);
    console.log(curpage);
    if ((curpage == "" || curpage == "/" || curpage == "admin") && hash == "")
    {
        $("#menu ul > li:first-child").addClass("active");
    }
    else
    {
        $("#menu ul li").each(function()
        {
            $(this).removeClass("active");
        });
        if (hash != "")
            $("#menu ul li a[href*='" + hash + "']").parents("li").addClass("active");
        else
            $("#menu ul li a[href*='" + curpage + "']").parents("li").addClass("active");
    }


});  


(function($) {
    "use strict";

    /* ==============================================
     LOADMORE -->
     =============================================== */

    $(function() {
        $(".job-tab").slice(0, 6).show();
        $("#loadMore").on('click', function(e) {
            e.preventDefault();
            $(".job-tab:hidden").slice(0, 2).slideDown();
            if ($(".job-tab:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });
    });

    /* ==============================================
     LOADER -->
     =============================================== */

    $(window).load(function() {
        $('.cssload-container').delay(300).fadeOut('slow');
        $('body').delay(300).css({
            'overflow': 'visible'
        });
    })

    /* ==============================================
     FUN FACTS -->
     =============================================== */

    function count($this) {
        var current = parseInt($this.html(), 10);
        current = current + 1; /* Where 50 is increment */
        $this.html(++current);
        if (current > $this.data('count')) {
            $this.html($this.data('count'));
        } else {
            setTimeout(function() {
                count($this)
            }, 50);
        }
    }
    $(".stat-count").each(function() {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    }); 
	

    /* ==============================================
     TOOLTIP -->
     =============================================== */



    /* ==============================================
     MENU -->
     =============================================== */

    $('.header .nav-tabs > li > a').hover(function() {
        $(this).tab('show');
    });

    /* ==============================================
     BACK TOP
     =============================================== */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.dmtop').css({bottom: "75px"});
        } else {
            jQuery('.dmtop').css({bottom: "-100px"});
        }
    });
    jQuery('.dmtop').click(function() {
        jQuery('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

    /* ==============================================
     BACK TOP
     =============================================== */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.contactme').css({bottom: "75px"});
        } else {
            jQuery('.contactme').css({bottom: "-100px"});
        }
    });

})(jQuery);



jQuery(document).ready(function($) {
    $("#menu ul > li:has(ul)").addClass("drop");
    $("#menu ul > li.drop > ul").addClass("dropdown");
    $("#menu ul > li.drop > ul.dropdown ul").addClass("sup-dropdown").removeClass("dropdown");
    $("#menu ul > li.drop > ul.dropdown ul.sup-dropdown ul").addClass("super-dropdown").removeClass("dropdown, sup-dropdown");

    $("#toggle").click(function() {
        $(this).toggleClass("active");
        $("#menu").animate({height: 'toggle'}, 1000,
                function() {
                    $('#menu').toggleClass('active');
                });
        return false;
    });

    /*$('.menu').children().click(function(){
     $(this).toggleClass("clicked");
     $(this).children('.dropdown ').slideToggle('slow');    
     }).children('.dropdown').click(function (event) {
     event.stopPropagation();
     });
     
     
     $('.dropdown').children().click(function(){
     $(this).toggleClass("clicked");
     $(this).children('.sup-dropdown ').slideToggle('slow');    
     }).children('.sup-dropdown').click(function (event) {
     event.stopPropagation();
     });
     
     $('.sup-dropdown').children().click(function(){
     $(this).toggleClass("clicked");
     $(this).children('.super-dropdown').slideToggle('slow');    
     }).children('.super-dropdown').click(function (event) {
     event.stopPropagation();
     });
     */

    $('[data-action="click-trigger"]').click(function() {
        $(this).toggleClass('clicked');
    });

});
$(document).ready(function() {
    
    $('#myteambutton').click(function () {
        $('#addnewbuttonsse').css('display','block');
    });
    $('#OurTasks5154button').click(function () {
        $('#addnewbuttonsse').css('display','none');
    });
    
    $('.presentationbestseller').click(function () {  
      $('#addnewservicevalue').attr('data-target',"#bestselleraddnewservice");
    });
     $('.presentationmangeservice').click(function () {
      $('#addnewservicevalue').attr('data-target',"#manageservicesaddnewservice");
    });
    $('.presentationselesservices').click(function () {
      $('#addnewservicevalue').attr('data-target',"#salesservicesaddnew");
    });
    /*****************************************************************/
    $('body').on('click', '.div-link a', function() {  
	$('.single').hide();
	$('.div-link li').removeClass('active');
	var openId = $(this).attr('href');
	$(openId).show();
	$(this).parent().addClass('active');
    
    if ($('#a').is(':hidden')) {
		$('.back').show();
        $('.closeds').css('display','none');
	} else {
		$('.back').hide();
        $('.closeds').css('display','block');
	};
    
    if ($('#e').is(':hidden')) {
		$('.next').show();
        $('.savebutton').css('display','none');
	} else {
		$('.next').hide();
        $('.savebutton').css('display','block');
	};
    
});

   
$(document).ready(function() { 
    // $('.back').click(function(){
    $('body').on('click', '.back', function() {
    	$('.div-link .active').prev().children('a').click();
    });

    // $('.next').click(function(){
    $('body').on('click', '.next', function() {
        $('.closeds').css('display','none');            
        $('.div-link .active').next().children('a').click();
    });
});
/*******************************************************/
    $('body').on('click', '.div-link2 a', function() {  
	$('.single2').hide();
	$('.div-link2 li').removeClass('active');
	var openId = $(this).attr('href');
	$(openId).show();
	$(this).parent().addClass('active');
    
    if ($('#a1').is(':hidden')) {
		$('.back1').show();
        $('.closeds1').css('display','none');
	} else {
		$('.back1').hide();
        $('.closeds1').css('display','block');
	};
    
    if ($('#e1').is(':hidden')) {
		$('.next1').show();
        $('.savebutton1').css('display','none');
	} else {
		$('.next1').hide();
        $('.savebutton1').css('display','block');
	};
    
});

    
$('.back1').click(function(){
    
	$('.div-link2 .active').prev().children('a').click();
});

$('.next1').click(function(){
    $('.closeds1').css('display','none');
        

    $('.div-link2 .active').next().children('a').click();
});
/*******************************************************/
       $('body').on('click', '.div-link3 a', function() {  
	$('.single3').hide();
	$('.div-link3 li').removeClass('active');
	var openId = $(this).attr('href');
	$(openId).show();
	$(this).parent().addClass('active');
    
    if ($('#a2').is(':hidden')) {
		$('.back2').show();
        $('.closeds2').css('display','none');
	} else {
		$('.back2').hide();
        $('.closeds2').css('display','block');
	};
    
    if ($('#e2').is(':hidden')) {
		$('.next2').show();
        $('.savebutton2').css('display','none');
	} else {
		$('.next2').hide();
        $('.savebutton2').css('display','block');
	};
    
});

    
$('.back2').click(function(){
    
	$('.div-link3 .active').prev().children('a').click();
});

$('.next2').click(function(){
    $('.closeds2').css('display','none');
        

    $('.div-link3 .active').next().children('a').click();
});
/*******************************************************/
         $('body').on('click', '.div-link4 a', function() {  
	$('.single5').hide();
	$('.div-link4 li').removeClass('active');
	var openId = $(this).attr('href');
	$(openId).show();
	$(this).parent().addClass('active');
    
    if ($('#a4').is(':hidden')) {
		$('.back4').show();
        $('.closeds4').css('display','none');
	} else {
		$('.back4').hide();
        $('.closeds4').css('display','block');
	};
    
    if ($('#c4').is(':hidden')) {
		$('.next4').show();
        $('.savebutton4').css('display','none');
	} else {
		$('.next4').hide();
        $('.savebutton4').css('display','block');
	};
    
});

    
$('.back4').click(function(){
    
	$('.div-link4 .active').prev().children('a').click();
});

$('.next4').click(function(){
    $('.closeds4').css('display','none');
        

    $('.div-link4 .active').next().children('a').click();
});
/*******************************************************/
    $(function() {
        $('.selectpicker').selectpicker();
    });
    $(function() {
        $('#portfolio-list').mixItUp();
    });


    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()

});

$(function() {
    $('.button-checkbox').each(function() {

        // Settings
        var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
                };

        // Event Handlers
        $button.on('click', function() {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function() {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                        .removeClass('btn-default')
                        .addClass('btn-' + color + ' active');
            }
            else {
                $button
                        .removeClass('btn-' + color + ' active')
                        .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});



$(document).ready(function() {
    $("div.bhoechie-tab-menu01>div.list-group>ul>li a").click(function(e) {
        e.preventDefault();
        $(this).parent().siblings().removeClass("active");
        $(this).parent().addClass('active');
        var cclass = $(this).attr('data-id');
        $("div.bhoechie-tab>div.bhoechie-tab-content01").removeClass('active');
        $("div.bhoechie-tab>div.bhoechie-tab-content01#" + cclass).addClass("active");
        /*        var index = $(this).index();
         console.log(index);
         $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
         $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
         */    });


    $(".chat-filter a").click(function() {
        $(this).toggleClass("active");
        $(".chat-filter ul ul").animate({height: 'toggle'}, 500,
                function() {
                    $('.chat-filter').toggleClass('active');
                });
        return false;
    });
    $(".user-profile a").click(function() {
        $(this).toggleClass("active");
        $(".profile-option").animate({height: 'toggle'}, 200,
                function() {
                    $('.profile-option').toggleClass('active');
                });
        return false;
    });
    $(".userImg").click(function() {
        $(this).toggleClass("active");
        $(".userImg").animate({height: 'toggle'}, 500,
                function() {
                    $('.profile-option').toggleClass('active');
                });
        return false;
    });
    $(".hidden-print a").click(function() {
        $(this).parent().parent().siblings().removeClass('active');
        $(this).parent().parent().toggleClass("active");
        return false;
    });
});


$(function() {
    $('#menu a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
                return false;
            }
        }
    });
});


$(document).ready(function() {
    var nav = function() {
        $('.gw-nav > li > a').click(function() {
            var gw_nav = $('.gw-nav');
            gw_nav.find('li').removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');

            var checkElement = $(this).parent();
            var ulDom = checkElement.find('.gw-submenu')[0];

            if (ulDom == undefined) {
                checkElement.addClass('active');
                $('.gw-nav').find('li').find('ul:visible').slideUp();
                return;
            }
            if (ulDom.style.display != 'block') {
                gw_nav.find('li').find('ul:visible').slideUp();
                gw_nav.find('li.init-arrow-up').removeClass('init-arrow-up').addClass('arrow-down');
                gw_nav.find('li.arrow-up').removeClass('arrow-up').addClass('arrow-down');
                checkElement.removeClass('init-arrow-down');
                checkElement.removeClass('arrow-down');
                checkElement.addClass('arrow-up');
                checkElement.addClass('active');
                checkElement.find('ul').slideDown(300);
            } else {
                checkElement.removeClass('init-arrow-up');
                checkElement.removeClass('arrow-up');
                checkElement.removeClass('active');
                checkElement.addClass('arrow-down');
                checkElement.find('ul').slideUp(300);

            }
        });
        $('.gw-nav > li > ul > li > a').click(function() {
            $(this).parent().parent().parent().removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');
            $(this).parent().addClass('active')
        });
    };
    nav();
});


$(document).ready(function() {
    $(function() {
        $(".search-submit").click(function() {
            $(this).parent().toggleClass('search-open');
        });
        $("#list").click(function() {
            $('#products .item').removeClass('grid-group').addClass('list-group');
        });
        $("#grid").click(function() {
            $('#products .item').removeClass('list-group').addClass('grid-group');
        });
        $(".sub-drop-user > i").click(function() {
            $(this).parent().toggleClass('sub-drop-open');

        });
    })


});
$(document).ready(function() {
    $('.example-multiple-selected').multiselect();
});
$(function() {
    $('#datetimepicker8').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    });
    /*----------------------------fix heighr auto ---------------------------------*/

    var windowHeight = $(window).height();
    $(".sidebar-afix").height(windowHeight - 50);

    $(window).resize(function() {
        var windowHeight = $(window).height();
        $(".sidebar-afix").height(windowHeight - 50);
    });

    /*----------------------------fix heighr auto chatpage ------------------------*/

    var windowHeight = $(window).height();
    $("#chat").height(windowHeight - 223);

    $(window).resize(function() {
        var windowHeight = $(window).height();
        $("#chat").height(windowHeight - 223);
    });

    var windowHeight = $(window).height();
    $(".member_list").height(windowHeight - 160);

    $(window).resize(function() {
        var windowHeight = $(window).height();
        $(".member_list").height(windowHeight - 160);
    });


    var windowHeight = $(window).height();
    $(".hovercard ").height(windowHeight - 120);

    $(window).resize(function() {
        var windowHeight = $(window).height();
        $(".hovercard ").height(windowHeight - 120);
    });



});


/*----------------------------scroll effact----------------------*/
$(document).ready(function() {
    nice = $("html, .sidebar-afix, #chat, .member_list, .hovercard, .message-list-container, .notification-wrap,.modal-content ").niceScroll();
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()
});


/*---------------------------- ------------------------*/

$(document).ready(function() {
    if ($(".textarea").length) {
        var tiny = tinymce.init({
            selector: ".textarea",
            plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help"],
            toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link image"
        });
    }
    
    $('.selectpayement .col-lg-4').click(function () {
        $(this).siblings().removeClass('borderbottomred');
         $(this).removeClass('added');
        if($(this).hasClass('added')){
            $(this).removeClass('borderbottomred');
            $(this).removeClass('added');
        }
        else{
            $(this).addClass('borderbottomred');
            $(this).addClass('added');
        }
    
});
     $('.selectpayement .col-lg-6').click(function () {
        $(this).siblings().removeClass('borderbottomgreen');
         $(this).removeClass('added');
        if($(this).hasClass('added')){
            $(this).removeClass('borderbottomgreen');
            $(this).removeClass('added');
        }
        else{
            $(this).addClass('borderbottomgreen');
            $(this).addClass('added');
        }
    
});
});



$(document).ready(function() {
    
$('.ourteamdiverclick').click(function () {
    if(!$(this).hasClass('clickactivebodrder')){
        $(this).addClass('clickactivebodrder');
    }
    else{
        $(this).removeClass('clickactivebodrder');
    }
    
});


    $('.edit-btn').on('click', function() {
        /*$('.text').on('click', function() {*/
        $(this).parent().find(".text").hide();
        $(this).parent().find(".edit-btn").after('<button type="button" class="save-btn">Save</button><button type="button" class="cancel-btn">Cancel</button>');
        $(this).parent().find(".edit-btn").hide();
        if ($(".text").text() == "Add New text") {
            $('.mce-content-body').html("");
        } else {
            if (tinymce.activeEditor.selection.serializer.getTrimmedContent() == '<p><br data-mce-bogus="1"></p>') {
                tinymce.activeEditor.selection.setContent($(this).parent().find(".text").html());
            }
        }
        $(this).parent().find(".text_div").show();
    });

    $(document).on('click', ".save-btn,.cancel-btn", function() {
        hideEditor();
    });

    var hideEditor = function() {
        $(".edit-btn").each(function() {
            if (!$(this).parent().find(".text").is(":visible")) {
                $(this).parent().find(".text_div").hide();
                $(this).parent().find(".text").html(tinymce.activeEditor.selection.serializer.getTrimmedContent());
//                console.log($(".edit-btn").parent().find(".text").html(tinymce.activeEditor.selection.serializer.getTrimmedContent()));
                $(this).parent().find(".text").show();
                $(this).show();
                $(this).siblings(".save-btn,.cancel-btn").remove();
            }
        });
    };
    $(document).click(function(event) {

        if (!$(event.target).closest('.editable').length) {
            hideEditor();
        }
    });
$('.edit').click(function(){
    $('.edit1').toggle()
    var $div=$('.canedit'), isEditable=$div.is('.editablthis');
    $('.f-info span').prop('contenteditable',!isEditable).toggleClass('editablthis')
     $('#CompanyName').focus();
    $(".edit").html($(".edit").html() == 'Edit' ? 'Save' : 'Edit');

    
});
    $('.edit1').click(function(){
            $('.edit').toggle()

    var $div=$('.canedit'), isEditable=$div.is('.editablthis');
    $('.f-pass span').prop('contenteditable',!isEditable).toggleClass('editablthis')
     $('#Companyemail').focus();
        $(".edit1").html($(".edit1").html() == 'Edit' ? 'Save' : 'Edit');
});
     $('.editcompany').click(function(){
    var $div=$('.canedit'), isEditable=$div.is('.editablthis');
    $('.c-info span').prop('contenteditable',!isEditable).toggleClass('editablthis')
              $('#editCompanyName').focus();
        $(".editcompany").html($(".editcompany").html() == 'Edit' ? 'Save' : 'Edit');
});
     $('.editowner').click(function(){
    var $div=$('.canedit'), isEditable=$div.is('.editablthis');
    $('.O-info span').prop('contenteditable',!isEditable).toggleClass('editablthis')
              $('#editOwnerName').focus();
        $(".editowner").html($(".editowner").html() == 'Edit' ? 'Save' : 'Edit');
         $('.check_boxes label input').attr('disabled',false)
});
     $('.editsecu').click(function(){
    var $div=$('.canedit'), isEditable=$div.is('.editablthis');
    $('.s-info span').prop('contenteditable',!isEditable).toggleClass('editablthis')
              $('#secuCompanyName').focus();
        $(".editsecu").html($(".editsecu").html() == 'Edit' ? 'Save' : 'Edit');
});
    
    
});





