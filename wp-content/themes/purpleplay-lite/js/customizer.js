// Live update
( function( $ ) {
    /* ==============================
        Site Title and Description
    ============================== */
    wp.customize('blogname',function( value ) {
        value.bind(function(newvalue) {
            $('#sktsite-title').html(newvalue);
        });
    });
    wp.customize('blogdescription',function( value ) {
        value.bind(function(newvalue) {
            $('#site-description').html(newvalue);
        });
    });

    /* ==============================
        Footer Copyright Section
    ============================== */
    wp.customize('purpleplay_lite_copyright_text',function( value ) {
        value.bind(function(newvalue) {
            $('#site-info').html(newvalue);
        });
    });

} )( jQuery )