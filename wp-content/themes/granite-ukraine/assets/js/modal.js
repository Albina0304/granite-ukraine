const $modalFormWwpcf7 = $('#modal-form .wpcf7');
const $modalShow = $('#modal-form, #modal-price, #confirmation')
const $modalForm = $('#modal-form')
const $modalPrice = $('#modal-price')
const $confirmation = $('#confirmation');
const $contactForm = $('.form-contact .wpcf7');
const $toggleModalShow = $('#toggleModalShow');
if ($modalFormWwpcf7.length) {
    $modalFormWwpcf7.on('wpcf7mailsent', function(e) {
        $modalForm.modal('hide');
        setTimeout(function() {
            $confirmation.modal('show');
        },50);
        setTimeout(function() {
            $confirmation.modal('hide');
        }, 2000);
    });
}
if($toggleModalShow.length) {
    $toggleModalShow.on('click', function(e) {
        e.preventDefault();
        $modalPrice.modal('hide');
        setTimeout(function() {
            $modalForm.modal('show');
        },50);
    })
}
$modalShow.on('hidden.bs.modal', function (e) {
    $('.header').css('padding-right', 0);
});
$modalShow.on('show.bs.modal', function (e) {
    $('.header').css('padding-right', (window.innerWidth - document.documentElement.clientWidth));
});
if ($contactForm.length) {
    $contactForm.on('wpcf7mailsent', function(e) {
        $confirmation.modal('show');
        setTimeout(function() {
            $confirmation.modal('hide');
        }, 2000);
    });
}
