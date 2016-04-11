// Featured Widget
jQuery(document).ready(function(){

    function purpleplay_lite_media_upload(button_class) {

        jQuery('body').on('click', button_class, function(e) {
            var button_id ='#'+jQuery(this).attr('id');
            var display_field = jQuery(this).parent().children('input:text');
            var _custom_media = true;

            wp.media.editor.send.attachment = function(props, attachment){

                if ( _custom_media  ) {
                    if(typeof display_field != 'undefined'){
                        switch(props.size){
                            case 'full':
                                display_field.val(attachment.sizes.full.url);
                                display_field.trigger('change');
                                break;
                            case 'medium':
                                display_field.val(attachment.sizes.medium.url);
                                display_field.trigger('change');
                                break;
                            case 'thumbnail':
                                display_field.val(attachment.sizes.thumbnail.url);
                                display_field.trigger('change');
                                break;
                           
                            default:
                                display_field.val(attachment.url);
                                display_field.trigger('change');
                        }
                    }
                    _custom_media = false;
                } else {
                    return wp.media.editor.send.attachment( button_id, [props, attachment] );
                }
            }
            wp.media.editor.open(button_class);
            window.send_to_editor = function(html) {

            }
            return false;
        });
    }
    purpleplay_lite_media_upload('.purple-play-widget-media-upload');

    jQuery('.purple-play-featured-checkbox').live("change", function(){
        if (jQuery(this).attr('checked') == "checked") {
            jQuery(this).parent().parent().find('.purple-play-fimage').css('display','block');
            jQuery(this).parent().parent().find('.purple-play-ficon').css('display','none');
        } else {
            jQuery(this).parent().parent().find('.purple-play-fimage').css('display','none');
            jQuery(this).parent().parent().find('.purple-play-ficon').css('display','block');
        }
    });
});