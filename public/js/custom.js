$('body').on('click', '.my_question li label', function() {
  $(this).parent().parent().addClass('click-color-change');
});

$('.chat-buttons a').click(function(){
   $(this).addClass('active').siblings().removeClass('active');
});
$(".toggle_bar").click(function(){
  $(".nav-main").toggle();
});
$(".report-toggle_bar").click(function(){
  $("#exTab2").toggle();
});
$(".reg-header .toggle_bar").click(function(){
  $(".reg-header .nav-main").toggle();
});
$('.advisor-toggle_bar').click(function(){
    $('.advisor-nav.t').toggle();
    $('.level.step-2').toggle();
});
$('.owl-testimonials').owlCarousel({
    loop:true,
    autoplay: true,
    margin:0,
    nav:false,
    rtl:true,
    responsive:{
        0:{
            items:1
        },
        601:{
            items:2
        },
        992:{
            items:3,
        }
    }
})
$('.owl-choose-us').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    rtl:true,
    responsive:{
        0:{
            items:2
        },
        601:{
            items:4
        },
        992:{
            items:7
        }
    }
})
$('.owl-logos').owlCarousel({
     loop:true,
    margin:0,
    nav:false,
    rtl:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        601:{
            items:2,
            nav:true
        },
        992:{
            items:8
        }
    }
})

$('.bank-steps').owlCarousel({
     loop:false,
    margin:35,
    nav:false,
    rtl:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true,
        },
        480:{
            items:1,
            nav:true,
            loop:true,
        },
        767:{
            items:1,
            loop:false
        }
    }
})

$('.why-us-owl').owlCarousel({
     loop:false,
    nav:false,
    rtl:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true,
        },
        480:{
            items:1,
            nav:true,
            loop:true,
        },
        767:{
            items:5,
            loop:false
        }
    }
})



$(".qna-question-left").click(function(){
    $(this).parents(".qna-container").addClass("show");
});
$(".qna-answer-right").click(function(){
    $(this).parents(".qna-container").removeClass("show");
});


//Our patner slider for how it works page
$(window).bind("resize", function () {
    console.log($(this).width())
    if ($(this).width() > 767) {
        $('.owl-logos').addClass('owl-logos-desktop');
        $('.bank-steps').addClass('owl-bank-desktop');
        $('.why-us-owl').addClass('why-us-owl-desktop');
    } else {
        $('.owl-logos').removeClass('owl-logos-desktop');
        $('.bank-steps').removeClass('owl-bank-desktop');
        $('.why-us-owl').removeClass('why-us-owl-desktop');
    }
}).trigger('resize');
//Our patner slider for how it works page End


// range slider


function showValue(event, ui) {
	var value = $(this).slider('option', 'range') === true ? $(this).slider('values') : $(this).slider('value');
	value = $.isArray(value) ? value[0] + ' to ' + value[1] : value;
	if ($(this).slider('option', 'orientation') == 'vertical') {
		$(this).prev().children('.sliderValue').text(value);
	}
	else {
		$('.slider .sliderValue').text(value);
	}
}

function highlightLines(code, start, end) {
	var lines = code.html().split(/<br>|\n/i);
	var newLines = '';
	for (var i = 0; i < lines.length; i++) {
		newLines += (i == 0 ? '' : '<br>') + (i >= start && i <= end ? '<' + 'span class="highlight">' : '') +
			lines[i] + (i >= start && i <= end ? '<' + '/span>' : '');
	}
	code.html(newLines);
}
$(".sliderValue").appendTo(".ui-slider-handle");


/*
|--------------------------------------------------------------------------
| Register form validation
|--------------------------------------------------------------------------
*/
    jQuery('#register_form_validation').validate({ // initialize the plugin
        rules: {
            first_name: {
                required: true,
                minlength: 1,
                maxlength:50,
            },
            last_name: {
                required: true,
                minlength: 1,
                maxlength:50,
            },
            email: {
                required: true,
                email:true,
            },
            phone_number: {
                required: true,
                number:true,
                maxlength:14,
                minlength:8,
            },
            password: {
                required: true,
                minlength: 6,
            },
            password_confirmation: {
                required: true,
                minlength: 6,
                equalTo: "#password",
            },
        },
        
    });

/*
|--------------------------------------------------------------------------
| Login form validation
|--------------------------------------------------------------------------
*/
    // jQuery(".login_form").validate({ 
    //     rules: {
    //         email: {
    //            required: true,
    //            email:true,
    //         },
    //     }
    // });








/**************************************************************************
EXCEL UPLOADING FUNCTION
**************************************************************************/
function excel(button,url){

    $('#'+button).on('change', function(){
        //alert('786');
      var name = document.getElementById("file").files[0].name;
      var form_data = new FormData();
      var ext = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(ext, ['xlsx']) == -1) 
      {
       alert("Invalid File Formatt Upload Excel file with .xlsx extention only");
      }else{
        form_data.append("file", document.getElementById('file').files[0]);
        //url = '<?= url("/ajax/clerk_tabel_excel_upload") ?>';

        $.ajax({
            type: "POST",
            url: url,
            data: form_data,
            contentType: false,
            cache: false,
            processData: false, 
           success: function(data)
           {
            if(data.status == 1){
                    alert('data uploaded');   
                }
            }
        });

      }
    });
}


/*ADMIN CLERKS TABLE EXCEL UPLOAD BUTTON CLICK*/
    $(document).ready(function(){
        excel('clerk_file','<?= url("/ajax/clerk_tabel_excel_upload") ?>');
    });











/*CUSTOM COMMA FOR INPUT FIELDS REGISTARTION FORM*/

function addCommas(nStr) {
      return nStr.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


