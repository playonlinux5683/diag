jQuery(document).ready(function() {
	
	/* Tabs in welcome page */
	function rational_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".rational-lite-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}
	
	var rational_actions_anchor = location.hash;
	
	if( (typeof rational_actions_anchor !== 'undefined') && (rational_actions_anchor != '') ) {
		rational_welcome_page_tabs('a[href="'+ rational_actions_anchor +'"]');
	}
	
    jQuery(".rational-lite-nav-tabs a").click(function(event) {
        event.preventDefault();
		rational_welcome_page_tabs(this);
    });

});