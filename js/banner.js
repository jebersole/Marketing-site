// Banner text animation
var width = $('#topcont').width();
if (width > 395) {
    $('#topcap').animate({
        marginLeft: width / (2.8)
    }, 1000);
} else {
    $('#topcap').animate({
        marginLeft: width / 4
    }, 1000);
}
window.addEventListener('resize', function(){
        var width = $('#topcont').width();
        if (width > 395) {
            $('#topcap').css(
                "marginLeft", width / 2.8);
        } else {
            $('#topcap').css(
                "marginLeft", width / 4);
        }
});
