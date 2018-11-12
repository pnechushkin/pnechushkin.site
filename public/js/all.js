require( '../../../node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.ru.js');
$.fn.datepicker.defaults.format = "mm.dd.yyyy";
$.fn.datepicker.defaults.language = "ru";
// $.fn.datepicker.defaults.startDate = '-3d';


$(document).ready(function () {
    console.log("ready!");

    console.log(moment().format('MMMM Do YYYY, h:mm:ss a'));
    // var $j = jQuery.noConflict();
    $('.data').datepicker();

});
//# sourceMappingURL=all.js.map
