// JavaScript Document
jQuery(document).ready(function($){  
var cururl = window.location.pathname;
var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
var hash = window.location.hash.substr(1);
console.log(curpage);
if((curpage == "" || curpage == "/" || curpage == "admin") && hash=="")
{
$("#menu ul > li:first-child").addClass("active");
}
else
{
$("#menu ul li").each(function()
{
    $(this).removeClass("active");
});
if(hash != "")
$("#menu ul li a[href*='"+hash+"']").parents("li").addClass("active");
else
$("#menu ul li a[href*='"+curpage+"']").parents("li").addClass("active");
}

  
});

 
(function($) {
    "use strict";

    /* ==============================================
     LOADMORE -->
     =============================================== */

    $(function () {
        $(".job-tab").slice(0,6).show();
            $("#loadMore").on('click', function (e) {
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
      jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 1) {
          jQuery('.dmtop').css({bottom:"75px"});
        } else {
          jQuery('.dmtop').css({bottom:"-100px"});
        }
      });
      jQuery('.dmtop').click(function(){
        jQuery('html, body').animate({scrollTop: '0px'}, 800);
        return false;
      });

    /* ==============================================
    BACK TOP
    =============================================== */
      jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 1) {
          jQuery('.contactme').css({bottom:"75px"});
        } else {
          jQuery('.contactme').css({bottom:"-100px"});
        }
      });

})(jQuery);

 
 
jQuery(document).ready(function($){  
	$("#menu ul > li:has(ul)").addClass("drop");
	$("#menu ul > li.drop > ul").addClass("dropdown");
	$("#menu ul > li.drop > ul.dropdown ul").addClass("sup-dropdown").removeClass("dropdown");
	$("#menu ul > li.drop > ul.dropdown ul.sup-dropdown ul").addClass("super-dropdown").removeClass("dropdown, sup-dropdown");
	
	$("#toggle").click(function(){
		$(this).toggleClass("active");
		$("#menu").animate({height: 'toggle'}, 1000,
			function(){
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

$('[data-action="click-trigger"]').click(function(){
	$(this).toggleClass('clicked');
	});

});
$( document ).ready(function() {

$(function(){
    $('.selectpicker').selectpicker();
});
$(function(){
	  $('#portfolio-list').mixItUp();
});


    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()

});

$(function () {
    $('.button-checkbox').each(function () {

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
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
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
		$("div.bhoechie-tab>div.bhoechie-tab-content01#"+cclass).addClass("active");
/*        var index = $(this).index();
		console.log(index);
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
*/    });
	
	
	$(".chat-filter a").click(function(){
		$(this).toggleClass("active");
		$(".chat-filter ul ul").animate({height: 'toggle'}, 500,
			function(){
				$('.chat-filter').toggleClass('active');
			});
			return false;
	  });
	  $(".user-profile a").click(function(){
		$(this).toggleClass("active");
		$(".profile-option").animate({height: 'toggle'}, 200,
			function(){
				$('.profile-option').toggleClass('active');
			});
			return false;
	  });
	  $(".hidden-print a").click(function(){
		  $(this).parent().parent().siblings().removeClass('active');
		  $(this).parent().parent().toggleClass("active");			
		  return false;
	  });
});


$(function() {
  $('#menu a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-80
        }, 1000);
        return false;
      }
    }
  });
});


$(document).ready(function () {
    var nav = function () {
        $('.gw-nav > li > a').click(function () {
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
        $('.gw-nav > li > ul > li > a').click(function () {
            $(this).parent().parent().parent().removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');
            $(this).parent().addClass('active')
        });
    };
    nav();
});


$(document).ready(function() {
	$(function(){
		$(".search-submit").click(function () {
		  $(this).parent().toggleClass('search-open');
		}); 
		$("#list").click(function () {
		  $('#products .item').removeClass('grid-group').addClass('list-group');
		}); 
		$("#grid").click(function () {
		  $('#products .item').removeClass('list-group').addClass('grid-group');
		}); 
		$(".sub-drop-user > i").click(function () {
		  $(this).parent().toggleClass('sub-drop-open');
		  
		});  
	})
	

});
$(document).ready(function() {
        $('.example-multiple-selected').multiselect();
});
$(function () {
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
$("#chat").height(windowHeight - 223) ;

$(window).resize(function() {
  var windowHeight = $(window).height();
$("#chat").height(windowHeight - 223);
});

var windowHeight = $(window).height();
$(".member_list").height(windowHeight - 160) ;

$(window).resize(function() {
  var windowHeight = $(window).height();
$(".member_list").height(windowHeight - 160);
});


var windowHeight = $(window).height();
$(".hovercard ").height(windowHeight - 120) ;

$(window).resize(function() {
  var windowHeight = $(window).height();
$(".hovercard ").height(windowHeight - 120);
});



});


/*----------------------------scroll effact----------------------*/
 $(document).ready(function() {
    // nice = $("html, .sidebar-afix, #chat, .member_list, .hovercard, .message-list-container, .notification-wrap,.modal-content ").niceScroll();
    
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
});



$(document).ready(function () {
		
$('.edit-btn').on('click', function() {
/*$('.text').on('click', function() {*/
	$(this).parent().find(".text").hide();
	$(this).parent().find(".edit-btn").hide();
	if ($(".text").text()=="Add New text"){
	$('.mce-content-body').html("");
	}else{
    if(tinymce.activeEditor.selection.serializer.getTrimmedContent() == '<p><br data-mce-bogus="1"></p>'){
	tinymce.activeEditor.selection.setContent($(this).parent().find(".text").html());
		}
	
	}
	$(this).parent().find(".text_div").show();
});

$(document).click(function(event) {
	
if(!$(event.target).closest('.editable').length) {
	$(".edit-btn").each(function(){
		if($(this).parent().find(".text").css('display') == 'none'){
			$(this).parent().find(".text_div").hide();
			$(this).parent().find(".text").html(tinymce.activeEditor.selection.serializer.getTrimmedContent());
			console.log($(".edit-btn").parent().find(".text").html(tinymce.activeEditor.selection.serializer.getTrimmedContent()));
			$(this).parent().find(".text").show();
			$(this).show();
		}
	});
	
}
});

});







		
		
