$(document).ready(function() {
    // Sayfa ilk yüklendiğinde section-one'ı göster
    $('#section-one').show();
    $('#section-two').hide();
    $('#section-three').hide();

    $('.service-title').click(function() {
        var target = $(this).data('target');
        $(target).show().siblings('div').hide();
        $(this).addClass('active').siblings().removeClass('active');
    });
});