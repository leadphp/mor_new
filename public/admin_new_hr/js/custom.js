// registrations tabs

setInterval(function() {
    if ($('.general_info_button> a').attr('aria-expanded') == 'true') {
        $('.all-questions-wrap>div').css("display", "none");
        $('.all-questions-wrap>div').removeClass("show-div");
        $('.all-questions-wrap>div:first-child').addClass("show-div");
    } else if ($('.define_needs_button>a').attr('aria-expanded') == 'true') {
        $('.all-questions-wrap>div').css("display", "none");
        $('.all-questions-wrap>div').removeClass("show-div");
        $('.all-questions-wrap>div:nth-child(2)').addClass("show-div");
    } else if ($('.finance_info_button>a').attr('aria-expanded') == 'true') {
        $('.all-questions-wrap>div').css("display", "none");
        $('.all-questions-wrap>div').removeClass("show-div");
        $('.all-questions-wrap>div:last-child').addClass("show-div");
    } else {
        $('.all-questions-wrap>div').css("display", "flex");
        $('.all-questions-wrap>div').removeClass("show-div");
    }
}, 100);

// registrations tabs

// number spinner js

var numberSpinner = (function() {
    $('.number-spinner>.ns-btn>a').click(function() {
        var btn = $(this),
            oldValue = btn.closest('.number-spinner').find('input').val().trim(),
            newVal = 0;

        if (btn.attr('data-dir') === 'up') {
            newVal = parseInt(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                newVal = parseInt(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        btn.closest('.number-spinner').find('input').val(newVal);
    });
    $('.number-spinner>input').keypress(function(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    });
})();

// number spinner js

// datepicker js

//$('.datepicker').datepicker()

// datepicker js

// cst-customer-status show/hide

$(document).ready(function() {
    if ($(".offer-tabs .nav-tabs li:first-child").hasClass("active")) {
        $(".cst-customer-status").addClass("show");
    }
});

// cst-customer-status show/hide

// thead fixed

// var $table = $('.wid-scroll table');
// $table.floatThead({
//     scrollContainer: function($table) {
//         return $table.closest('.wid-scroll');
//     }
// });
// $table.trigger('reflow');

// thead fixed


/*ADMIN CLERKS TABLE EXCEL UPLOAD BUTTON CLICK*/

$(document).ready(function(){
    excel('clerk_file','ajax/clerk_tabel_excel_upload_hr');
    excel('bank_interest_file','ajax/bank_interest_tabel_excel_upload_hr');
    excel('bank_prime_file','ajax/bank_prime_excel_upload_hr');
    excel('bank_madad_file','ajax/bank_madad_excel_upload_hr');
});

function excel(button,url){
    $('#'+button).on('change', function(){
        //alert('okay');
        var name = document.getElementById(button).files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['xlsx']) == -1) 
        {
         alert("Invalid File Formatt Upload Excel file with .xlsx extention only");
     }else{
        form_data.append("file", document.getElementById(button).files[0]);
            //url = '<?= url("/ajax/clerk_tabel_excel_upload") ?>';
            //alert(url);
            $.ajax({
                type: "POST",
                url: url,
                data: form_data,
                contentType: false,
                cache: false,
                processData: false, 
                beforeSend: function(){
                 $('#loader-global').show();
             },
             complete: function(){
                 $('#loader-global').hide();
             }, 
             success: function(data)
             {
                if(data.status == 1){
                        //alert('data uploaded');
                        location.reload();
                        alert_fancy_data_saved();   
                    }
                }
            });
        }
    });
}

function alert_fancy_data_saved(){
    Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
  })

}


