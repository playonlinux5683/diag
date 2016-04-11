jQuery(document).ready(function() {
    var rational_aboutpage = rationalLiteWelcomeScreenCustomizerObject.aboutpage;
    var rational_nr_actions_required = rationalLiteWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof rational_aboutpage !== 'undefined') && (typeof rational_nr_actions_required !== 'undefined') && (rational_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + rational_aboutpage + '"><span class="rational-lite-actions-count">' + rational_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".rational-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section rational-upsells">');
    }
    if (typeof rational_aboutpage !== 'undefined') {
        jQuery('.rational-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="' + rational_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', rationalLiteWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".rational-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});