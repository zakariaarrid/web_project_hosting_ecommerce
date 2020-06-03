

jQuery(document).ready(function($) {
    $('.but').on('click', function () {

        $('.but').removeClass('active');
        $(this).toggleClass('active');
    });

    $('#card_payment').on('click', function () {
        document.getElementsByClassName("stripe-button-el")[0].click();
        // $('').click()
    });
})
