jQuery(function($){
    $( document ).ready(function() {

        let essName     = $('#ess-name').val();
        let essEmail    = $('#ess-email').val();

        /**
         * click after preview button
         */
        $('#ess-preview').on('click', function(){
            
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
            $.ajax({
                url: ESS_ajax.url,
                type: 'POST',
                data: {
                    action: 'ess_form_submit',
                    nonce: ESS_ajax.nonce,
                    ess_name: essName,
                    ess_email: essEmail,
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                }
            });
        });
    });
});