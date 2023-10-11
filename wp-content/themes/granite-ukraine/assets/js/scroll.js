function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll").style.display = "block";
    } else {
    document.getElementById("scroll").style.display = "none";
    }
}
$('#scroll').click(function() {
    $('html, body').animate({
        scrollTop: 0,
    }, 800);
});