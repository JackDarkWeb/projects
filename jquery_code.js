$(function(){

    $('#menu .code_source ~ li').hide();
    $('#menu .code_source').click(function(){

        $('#menu .code_source ~ li').toggle('slow');
    });
    $('#menu .code_source ~ li, .links > a').mouseover(function () {
        $(this).addClass('addClass a');
    });
    $('#menu .code_source ~ li, .links > a').mouseout(function () {
        $(this).removeClass('addClass a');
    });
});