
$('.card').mouseenter(function (e) {
        $('#'+e.currentTarget.id).css("box-shadow", "0px 0px 10px black");
        $('#overlay-'+e.currentTarget.id).css("display", "block");
        $('#img-'+e.currentTarget.id).css("opacity", "0.20");
});

$('.card').mouseleave(function (e) {
    $('#'+e.currentTarget.id).css("box-shadow", "none");
    $('#overlay-'+e.currentTarget.id).css("display", "none");
    $('#img-'+e.currentTarget.id).css("opacity", "1");
});