jQuery(function($){
    $( document ).ready(function() {

        /**
         * click after preview button
         */
        $('#ess-preview').on('click', function(){
            
            let essName     = $('#ess-name').val();
            let essEmail    = $('#ess-email').val();

            if( essName == '' && essEmail == '' ) {
                $('#ess-message').text("Field must not be empty!");
            }else{
                $('.ess-form').hide();
                $('.ess-preview').show();

                $('.esc_preview_name').text(essName);
                $('.esc_preview_email').text(essEmail);
            }

        });

        /**
         * click after back button
         */
        $('#ess_preview').on('click', function(){
            $('.ess-form').show();
            $('.ess-preview').hide();
        });

        /**
         * click after submit button
         */
        $('#ess_submit').on('click', function(){
            
        });
    });

    console.log(ESS_ajax);
});