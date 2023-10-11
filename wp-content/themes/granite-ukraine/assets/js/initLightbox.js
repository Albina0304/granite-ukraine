lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
})
var $lightboxEl = $('.lightbox');
if ($lightboxEl.length) {
    var lbContainer = $lightboxEl.find('.lb-container');
    var lbDataContainer = $lightboxEl.find('.lb-dataContainer');
    $(lbContainer).before($(lbDataContainer));
}