$.fn.datepicker.defaults.format = "mm.dd.yyyy";
$.fn.datepicker.defaults.language = "ru";
$.fn.datepicker.defaults.startDate = '-3d';


$(document).ready(function () {
    console.log("ready!");

    console.log(moment().format('MMMM Do YYYY, h:mm:ss a'));
    // var $j = jQuery.noConflict();
    $('.data').datepicker();
    $('.summernote').summernote({
        lang: 'ru-RU',
        height: 200,
    });

});