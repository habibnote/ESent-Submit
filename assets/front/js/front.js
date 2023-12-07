jQuery(function($){
    $( document ).ready(function() {

        /**
         * click after preview button
         */
        $('#ess-preview').on('click', function(){
            
            let essName     = $('#ess-name').val();
            let essEmail    = $('#ess-email').val();

            console.log( essName + essEmail );
        });
    });
});