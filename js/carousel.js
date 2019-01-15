// Animate a carousel with additional slide-in captions
// Modified from http://stackoverflow.com/questions/21206244/bootstrap-carousel-caption-animation
$(document).ready(function() {
    var carouselContainer = $('.carousel');
    var slideInterval = 5000;

    function toggleCaption() {
        $('.carousel-caption').hide();
        var caption = carouselContainer.find('.active').find('.carousel-caption');
        caption.delay(100).toggle("slide", {
            direction: 'right'
        });
    }
    carouselContainer.carousel({
        interval: slideInterval,
        cycle: true,
        pause: "hover"
    }).on('slid.bs.carousel', function() {
        toggleCaption();
    });
    toggleCaption();
});
