$(window).on('load resize', function() {
    var win = $(this);
    win = win.width();
	// console.log(win);
	if(win < 768) {
	  $('.login-section .notification-row ul.set-bs-menu').prependTo($('.navbar-header .mob-right-nav'));
	}
	else {
	  $('.navbar-header .mob-right-nav ul.set-bs-menu').prependTo($('.login-section .notification-row'));
	}
});