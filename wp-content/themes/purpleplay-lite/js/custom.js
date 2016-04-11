jQuery.noConflict();	

//add span in widget title
jQuery(document).ready(function(){
	jQuery('.widget-title').wrapInner('<span class="title-border"></span>');
});


//MOBILE MENU -----------------------------------------
//-----------------------------------------------------
jQuery(document).ready(function(){
	'use strict';
	jQuery('#menu-main').superfish();
	jQuery('#menu-main li.current-menu-item,#menu-main li.current_page_item,#menu-main li.current-menu-parent,#menu-main li.current-menu-ancestor,#menu-main li.current_page_ancestor').each(function(){
		jQuery(this).prepend('<span class="item_selected"></span>');
	});
});


jQuery(document).ready(function(){
'use strict';
	jQuery('#menu-main').superfish('init');

	jQuery('#skenav').prepend('<div id="menu-icon" class="close"><button id="menubtn" class="c-hamburger c-hamburger--htx"> <span>toggle menu</span> </button><ul id="mini-menu"></ul></div>');
	jQuery('#menu-main>li').clone().appendTo('#mini-menu');
	jQuery('#mini-menu').append('<span id="close-menu"></span>');

	var menubtn = jQuery("#menubtn");
	jQuery("#mini-menu").slideUp();
	menubtn.on("click", function(){
		( menubtn.hasClass("is-active") === false ) ? menubtn.addClass("is-active") : menubtn.removeClass("is-active");
		jQuery("#mini-menu").slideToggle();
	});
	jQuery('#mini-menu li.menu-item-has-children').hover(function() {
		jQuery(this).find('ul.sub-menu').first().stop(true, true).delay(250).slideDown();

		}, function() {
		jQuery(this).find('ul.sub-menu').first().stop(true, true).delay(100).slideUp();
	});
	jQuery('#mini-menu').click( function() {
		jQuery("#mini-menu").slideUp();
	});
});

jQuery(window).load(function() {

	jQuery('#header').prepend('<div class="noti-push"></div>');
	jQuery("#notificationbar").delay(1000).slideDown(500);
	var height = jQuery("#notificationbar").height();
	jQuery('.noti-push').css('height',height).delay(1000).slideDown(500);

	jQuery('.notification-close').click(function() {
		jQuery("#notificationbar").slideUp(500);
		jQuery('.noti-push').css('height',height).slideUp(500);
	});

});