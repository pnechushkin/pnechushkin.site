$.fn.datepicker.defaults.format = "mm.dd.yyyy";
$.fn.datepicker.defaults.language = "ru";
$.fn.datepicker.defaults.startDate = '-3d';


$(document).ready(function () {
    // console.log("ready!");

    // console.log(moment().format('MMMM Do YYYY, h:mm:ss a'));
    // var $j = jQuery.noConflict();
    $('.data').datepicker();
    $('.summernote').summernote({
        lang: 'ru-RU',
        height: 200,
    });

    //Contact
    $('form.contactForm').submit(function() {

        return false;
    });


    // sendmessage
    // $('.contact-btn').click(function () {
    $('form.contactForm').submit(function() {
        var f = $(this).find('.form-group'),

            ferror = false,
            emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        f.children('input').each(function() { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;

                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'email':
                        if (!emailExp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'checked':
                        if (! i.is(':checked')) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'regexp':
                        exp = new RegExp(exp);
                        if (!exp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;
                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });
        f.children('textarea').each(function() { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;

                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;
                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });
        if (ferror) return false;
        else

            var data = $('.contactForm').serialize();
        $.ajax({
            type:'POST',
            url:'/sendmessage',
            dataType : 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:data,
            beforeSend: function (){
                $("#sendmessage").removeClass("show");
                $("#errormessage").removeClass("show");
                $("#errormessage").empty();
                $("#sendmessage").empty();
            },
            success:function(data){
                if(data.success){
                    $('.contactForm').find("input, textarea").val("");
                    $("#sendmessage").html(data.html);
                    $("#sendmessage").addClass("show");
                } else {
                    $("#errormessage").html(data.error);
                    $("#errormessage").addClass("show");
                    $("#errormessage").addClass("show");
                }
            },
            complete:function () {
                setTimeout(function () {
                    $("#sendmessage").removeClass("show");
                    $("#errormessage").removeClass("show");
                    $("#errormessage").empty();
                    $("#sendmessage").empty();
                },3000)
            }


        });


        return false;
    });

});