jQuery(document).ready(function($) {
    
    $(document).on('click', '.single_add_to_cart_button, .add_to_cart_button', function(e) {
      
        $('#gif-popup-modal').fadeIn();

        
        setTimeout(function() {
            $('#gif-popup-modal').fadeOut();
        }, 5000); 
    });

    
    $('.gif-popup-close').on('click', function() {
        $('#gif-popup-modal').fadeOut();
    });

    
    $(window).on('click', function(e) {
        if ($(e.target).is('#gif-popup-modal')) {
            $('#gif-popup-modal').fadeOut();
        }
    });
});
