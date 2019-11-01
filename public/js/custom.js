// $(document).ready(function(){
//   if($('.prop_mark').hasClass('make_it_disabled')){
//       $('.make_it_disabled').attr('disabled', 'disabled');
//   }
//   else{
//       $('.make_it_disabled').removeAttr('disabled', 'disabled');
//   }
// });







$(window).scroll(function() {    
var scroll = $(window).scrollTop();
if (scroll > 50) {
	$("nav.navbar").addClass("fixedheader");
    $(".headerPayment").addClass("fixedheader");
}else{
	$("nav.navbar").removeClass("fixedheader");
    $(".headerPayment").removeClass("fixedheader");      
}
});
$(function() {
  // contact form animations
  $('.phone_icon').click(function() {
    $('#contactForm').toggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
});

$('body').on('click', '.my_question li label', function() {
  $(this).parent().parent().addClass('click-color-change');
});
$('body').on('click', '.chat-buttons a', function() {
  $(this).parent().addClass('click-color-change');
});

$('.chat-buttons a').click(function(){
  $(this).addClass('active').siblings().removeClass('active');
});

$(document).click(function (e) {
      $('.navbar-collapse').removeClass('in');
    if($(e.target).attr('class') === 'fa fa-bars') {
      $('.nav-main').toggleClass('show');
      $('.advisor-nav.t').toggleClass('show');
      $("#exTab2").toggleClass('show');
    } else {
      $('.nav-main').removeClass('show');
      $('.advisor-nav.t').removeClass('show');
      $("#exTab2").removeClass('show');
    }    
    
});

$('.owl-testimonials').owlCarousel({
    loop:true,
    autoplay: true,
    margin:0,
    nav:true,
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
    nav:true,
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
$('.tenQues').owlCarousel({
    margin:0,
    loop:false,
	nav: true,
    rtl:true,
    responsive:{
        0:{
            items:1
        },
        601:{
            items:1
        },
        992:{
            items:1
        }
    }
})
$('.owl-logos').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    rtl:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        601:{
            items:1,
            nav:true
        },
        992:{
            items:1
        }
    }
})
$('.bank-steps').owlCarousel({
    loop:false,
    margin:35,
    nav:false,
	dots: true,
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
/*POP UP FORMS FOR CALL AND MENU*/
$(function() {  
  // contact form animations
  $('.button-call-global-payment').click(function() {
    $('#contactForm').toggle();
  })
  $('.close_btnP').click(function() {
    $('#contactForm').hide();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");
    if (!container.is(e.target) // if the target of the click isn't the container...
      && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
      container.fadeOut();
    }
  });
});
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
    $('.tenQues').addClass('yesTenQues');
    $('.phone_icon').attr('href','javascript:void(0);');
    $('.button-call-global-payment').attr('href','javascript:void(0);');
}
else {
    $('.owl-logos').removeClass('owl-logos-desktop');
    $('.bank-steps').removeClass('owl-bank-desktop');
    $('.why-us-owl').removeClass('why-us-owl-desktop');
    $('.tenQues').removeClass('yesTenQues');
    $('.phone_icon').attr('href','tel:073-2112687');
    $('.button-call-global-payment').attr('href', 'tel:073-2112687');
}
}).trigger('resize');
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
            maxlength:5,
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
    }
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
function addCommasDirect(nStr){
  return nStr.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


/*ADD COMMAS*/
function abc_comma_pao(){

    var one = $('#property-market-value').val();
    var hhh = $('#property-market-value').val(addCommasDirect(one));
}
abc_comma_pao();




function twelve_change_eleven_a(xyz){
   // alert(xyz);
    $('.twelveth_value').html('');
    $('.twelveth_value').html('<p>אם כך, גובה המשכתא שאותו אתה מבקש מהבנק הוא: <br>'+xyz+' ש”ח.</p>');
}