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

//$('.datepicker').datepicker();

$(document).ready(function(){
    $('#from-register-time').datepicker();
    $('#to-register-time').datepicker();
    $('#from-payment-time').datepicker();
    $('#to-payment-time').datepicker();
});

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









/**************************************************************************
EXCEL UPLOADING FUNCTION
**************************************************************************/
function excel(button,url){

    $('#'+button).on('change', function(){
        //alert('786');
      var name = document.getElementById(button).files[0].name;
      var form_data = new FormData();
      var ext = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(ext, ['xlsx']) == -1) 
        {
           alert("Invalid File Formatt Upload Excel file with .xlsx extention only");
        }else{
            form_data.append("file", document.getElementById(button).files[0]);
            //url = '<?= url("/ajax/clerk_tabel_excel_upload") ?>';
            alert(url);
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
        excel('clerk_file','ajax/clerk_tabel_excel_upload');
        excel('bank_interest_file','ajax/bank_interest_tabel_excel_upload');
        excel('bank_prime_file','ajax/bank_prime_excel_upload');
        excel('bank_madad_file','ajax/bank_madad_excel_upload');
        


    });



/*BANK INTEREST TABLE AJAX FUNCTIONS*/


$("body").on('click','input[name=bank_name]',function(){
var val = $('input[name=bank_name]:checked').val();
var val_funding = $('input[name=fundings]:checked').val();
Bank_interest_table_data(val, val_funding);
});

$("body").on('click','input[name=fundings]',function(){
var val = $('input[name=bank_name]:checked').val();
var val_funding = $('input[name=fundings]:checked').val();
Bank_interest_table_data(val, val_funding);
});


function Bank_interest_table_data(data1, data2){


    url = 'bank_interest_table_data';
    $.ajax({
        type: "POST",
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: url,
        data: {'bank':data1, 'fundings':data2},
        dataTYPE: 'json',
       success: function(data)
       {
            if(data.status == 1){
                console.log(data.discount);  
                var tt=data.data;
                var yy = data.discount;
                var discount_status = data.discount_status; 
                alert(discount_status);
                $('#bank_discount').val(yy+'%');

                if(discount_status == 1){
                $('#bank_discount_avail').attr('checked','checked');
                }else{
                $('#bank_discount_avail').removeAttr('checked','checked');   
                }


                $('#bank_interest_table').remove();

                $('.custom-data-table-render').append('<table id="bank_interest_table"><tbody class="table_body"><tr class="bnb"><td>Prime</td><td class="a-purple" style="text-align: center;">Const Prime <br/>1.75%</td>');
                

                $.each(tt, function() { 
                    $('.bnb').append('<td>'+this.prime_delta+'%</td>'); 
                });

                $('.table_body').append('<tr class="bmb2"><th>Loan Type</th><th>Loan Years</th>');

                $.each(tt, function() {
                    var j = this.years;
                    if( j >= 1){
                        $('.bmb2').append('<th>'+this.years+'</th>');
                    }else{
                       $('.bmb2').append('<th class="red-make-it">'+this.years+'</th>'); 
                    }
                });

                $('.table_body').append('<tr class="bmb3"><td>Prime</td><td>A</td>');

                $.each(tt, function() {
                    var k = this.prime;
                    if( k >= 1){
                        $('.bmb3').append('<td>'+this.prime+'%</td>');
                    }else{
                       $('.bmb3').append('<td class="red-make-it">'+this.prime+'%</td>'); 
                    }
                });

                $('.table_body').append('<tr class="bmb4"><td>Const_Inter_Linked</td><td>B</td>');

                $.each(tt, function() {
                    var l = this.const_inter_linked;
                    if( l >= 1){
                        $('.bmb4').append('<td>'+this.const_inter_linked+'%</td>');
                    }else{
                       $('.bmb4').append('<td class="red-make-it">'+this.const_inter_linked+'%</td>'); 
                    }
                });

                $('.table_body').append('<tr class="bmb5"><td>Const_Inter_Unlinked</td><td>C</td>');

                $.each(tt, function() {
                    var m = this.const_inter_unlinked;
                    if( m >= 1){
                        $('.bmb5').append('<td>'+this.const_inter_unlinked+'%</td>');
                    }else{
                       $('.bmb5').append('<td class="red-make-it">'+this.const_inter_unlinked+'%</td>'); 
                    }
                });


                $('.table_body').append('<tr class="bmb6"><td>var_inter_5year_linked</td><td>D</td>');

                $.each(tt, function() {
                    var n = this.var_inter_5year_linked;
                    if( n >= 1){
                        $('.bmb6').append('<td>'+this.var_inter_5year_linked+'%</td>');
                    }else{
                       $('.bmb6').append('<td class="red-make-it">'+this.var_inter_5year_linked+'%</td>'); 
                    }   
                });

                $('.table_body').append('<tr class="bmb7"><td>var_inter_5year_Unlinked</td><td>E</td>');

                $.each(tt, function() {
                    var o = this.var_inter_5year_unlinked;
                    if( o >= 1){
                        $('.bmb7').append('<td>'+this.var_inter_5year_unlinked+'%</td>');
                    }else{
                       $('.bmb7').append('<td class="red-make-it">'+this.var_inter_5year_unlinked+'%</td>'); 
                    }
                });


                $('.table_body').append('<tr class="bmb8"><td>Euro_Inter</td><td>F</td>');

                $.each(tt, function() {
                    var p = this.euro_inter;
                    if( p >= 1){
                        $('.bmb8').append('<td>'+this.euro_inter+'%</td>');
                    }else{
                       $('.bmb8').append('<td class="red-make-it">'+this.euro_inter+'%</td>'); 
                    }
                });


                $('.table_body').append('<tr class="bmb9"><td>Dollar_inter</td><td>G</td>');

                $.each(tt, function() {
                    var q = this.dollar_inter;
                    if( q >= 1){
                        $('.bmb9').append('<td>'+this.dollar_inter+'%</td>');
                    }else{
                       $('.bmb9').append('<td class="red-make-it">'+this.dollar_inter+'%</td>'); 
                    }
                });

                $('.table_body').append('<tr class="bmb10"><td>Elegibility_Inter</td><td>H</td>');

                $.each(tt, function() {
                    var r = this.eligibility_inter;
                    if( r >= 1){
                        $('.bmb10').append('<td>'+this.eligibility_inter+'%</td>');
                    }else{
                       $('.bmb10').append('<td class="red-make-it">'+this.eligibility_inter+'%</td>'); 
                    }
                });
                      
                $('.custom-data-table-render').append('</tbody></table>');       
            }
        }
    });
}

$("body").on('change','.bank_picker',function(){
    var val = $(this).val();
    var val_funding = $('.fund_picker').val();
    var  val_year = $('.year_picker').val();
    var senstive_prime = $('.senstivity_prime').val();
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});

$("body").on('change','.fund_picker',function(){
    var val_funding = $(this).val();
    var  val = $('.bank_picker').val();
    var  val_year = $('.year_picker').val();
    var senstive_prime = $('.senstivity_prime').val();
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});

$("body").on('change','.year_picker',function(){
    var val_year = $(this).val();
    var  val = $('.bank_picker').val();
    var val_funding = $('.fund_picker').val();
    var senstive_prime = $('.senstivity_prime').val();
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});


$("body").on('change','.senstivity_prime',function(){
    var senstive_prime = $(this).val();
//  alert(senstive_prime);
    var val_year = $('.year_picker').val();
//  alert(val_year);
    var  val = $('.bank_picker').val();
//  alert(val);
    var val_funding = $('.fund_picker').val();
//  alert(val_funding);
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});

$("body").on('change','.senstivity_madad',function(){
    var senstive_madad = $(this).val();
    alert(senstive_madad);

    var val_year = $('.year_picker').val();
    var  val = $('.bank_picker').val();
    var val_funding = $('.fund_picker').val();
    //Bank_interest_prime_data(val, val_funding, val_year);

});


function Bank_interest_prime_data(data1, data2, data3, data4){


    url = 'bank_interest_prime_data';
    $.ajax({
        type: "POST",
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: url,
        data: {'bank':data1, 'fundings':data2, 'years':data3},
        dataTYPE: 'json',
       success: function(data)
       {
            if(data.status == 1){
                

                 var tt=data.prime;
                 var prime_delta = data.data.prime_delta;

                 console.log(prime_delta);



                $('#prime_bank_intrest').remove();
                $('.prime_years_table').append('<table class="table table-striped" id="prime_bank_intrest"><thead><tr><th scope="col">Years</th><th scope="col">Prime Table</th><th scope="col">Prime Year (+0)</th></tr></thead><tbody class="bnb">');

                $('#prime_months_table').remove();
                $('.prime_months_table').append('<table class="table table-striped" id="prime_months_table"><thead><tr><th scope="col">Month</th><th scope="col">Prime Month</th></tr></thead><tbody class="test_prime_table dnd">');

                counter = 1;     
                $.each(tt, function() { 
                    var prime_hh = this.prime;
                    var prime = parseFloat(prime_hh) + parseFloat(data4);
                    if(prime < 0){
                      var prime = 0;  
                    }
                    var year = this.years;

                    var prime_delta_years = parseFloat(prime_delta) + parseFloat(prime);         
                    var final_prime_delta_years = Number((prime_delta_years).toFixed(2));
                    
                     $('.bnb').append('<tr><td>'+year+'</td><td>'+prime+'%</td><td>'+final_prime_delta_years+'%</td></tr>'); 

                     
                    for( i=1; i<=12; i++){

                        var value = parseFloat(final_prime_delta_years) / 12;
                        var value = Number((value).toFixed(2));

                        // $('.dnd').append( '<tr class="select_prime_all select_prime_'+year+'" ><td>'+counter+'</td><td>'+value+'%</td></tr>');

                        if(counter > 12){
                            $('.dnd').append( '<tr class="select_prime_all select_prime_'+year+'" style="display:none;" ><td>'+counter+'</td><td>'+value+'%</td></tr>');

                        }else{

                            $('.dnd').append( '<tr class="select_prime_all select_prime_'+year+'" ><td>'+counter+'</td><td>'+value+'%</td></tr>');
                        }

                        counter++;
                    }



                });

                $('.prime_years_table').append('</tbody></table>');
                $('.prime_months_table').append('</tbody></table>');  


            }
        }
    });
}


/*year changer bank prime and madad*/

$(document).ready(function(){
    $('.select_prime_all').hide();
    $('.select_prime_all.select_prime_1').show();   
    var gg = $("body").find('.selectpicker_prime_bank_table');
    $("body").on('change','.selectpicker_prime_bank_table',function(){
        var val = $(this).val();
        //alert(val);
        $('.select_prime_all').hide();
        $('.select_prime_all.select_prime_'+val).show();
    });
});


$(document).ready(function(){
    $('.select_madad_all').hide();
    $('.select_madad_all.select_madad_1').show();   
    var gg = $("body").find('.selectpicker_madad_bank_table');
    $("body").on('change','.selectpicker_madad_bank_table',function(){
        var val = $(this).val();
        //alert(val);
        $('.select_madad_all').hide();
        $('.select_madad_all.select_madad_'+val).show();
    });
});





/*settings page js */
$(document).ready(function(){
    $('.submit_report_entry').hide();
       $(".staff_on_site").on("click", function(){
           $(this).parent().next(".submit_report_entry").show();
           $(this).parent().siblings(".edr").prop('readonly', false);
           $(this).parent().hide();
       });

    $('.staff_cancel').on('click', function(){

        $(this).parent().siblings(".edit_report_entry").show();
        $(this).parent().siblings(".edr").prop('readonly', true);
        $(this).parent().hide();

    });

});

$(document).ready(function(){
    $(".cedit").on("click", function(){
        $("._b").prop('readonly', false);
        $(".csub").show();
        $(".ccan").show();
        $(".cedit").hide();
    });

    $(".ccan").on("click", function(){
        $("._b").prop('readonly', true);
        $(".cedit").show();
        $(".csub").hide();
        $(".ccan").hide();
    });

    $(".cedit2").on("click", function(){
        $("._dd").prop('readonly', false);
        $(".csub1").show();
        $(".ccan1").show();
        $(".cedit2").hide();
    });

    $(".ccan1").on("click", function(){
        $("._dd").prop('readonly', true);
        $(".cedit2").show();
        $(".csub1").hide();
        $(".ccan1").hide();
    });

    $(".cedit3").on("click", function(){
        $(".ee_").prop('readonly', false);
        $(".csub2").show();
        $(".ccan2").show();
        $(".cedit3").hide();
    });

    $(".ccan2").on("click", function(){
        $(".ee_").prop('readonly', true);
        $(".cedit3").show();
        $(".csub2").hide();
        $(".ccan2").hide();
    });

});



/*checkbox buttons  values */



$(document).ready(function(){

    /*AA-BANK on off button*/
    $('input[name=const_bank_AA]').click(function(){
        if($(this).prop("checked") == true){
           alert_fancy_data_saved();

            $dd = 1;
            checkbox_button_values('AA-bank', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('AA-bank', $dd, 'settings');
        }
    });


    /*DD-BANK on off button*/
    $('input[name=const_bank_DD]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('DD-bank', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('DD-bank', $dd, 'settings');
        }
    });

    /*EE-BANK on off button*/
    $('input[name=const_bank_EE]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('EE-bank', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('EE-bank', $dd, 'settings');
        }
    });

    /*Test-Control-TestMode on off button*/
    $('input[name=test_control_testmode]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Test-Control-TestMode', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Test-Control-TestMode', $dd, 'settings');
        }
    });

    /*Test-Control-SkipPayment on off button*/
    $('input[name=test_control_skippayment]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Test-Control-SkipPayment', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Test-Control-SkipPayment', $dd, 'settings');
        }
    });

    /*Test-Control-AllowMultiReg on off button*/
    $('input[name=test_control_allowmultireg]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Test-Control-AllowMultiReg', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Test-Control-AllowMultiReg', $dd, 'settings');
        }
    });


    /*Ques-Control-Q10 on off button*/
    $('input[name=ques_control_Q10]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Ques-Control-Q10', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Ques-Control-Q10', $dd, 'settings');
        }
    });

    /*Ques-Control-Q13 on off button*/
    $('input[name=ques_control_Q13]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Ques-Control-Q13', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Ques-Control-Q13', $dd, 'settings');
        }
    });

   /*Ques-Control-Q14 on off button*/
    $('input[name=ques_control_Q14]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Ques-Control-Q14', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Ques-Control-Q14', $dd, 'settings');
        }
    });

   /*Ques-Control-Q15 on off button*/
    $('input[name=ques_control_Q15]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Ques-Control-Q15', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Ques-Control-Q15', $dd, 'settings');
        }
    });

    /*Ques-Control-Q16 on off button*/
    $('input[name=ques_control_Q16]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            $dd = 1;
            checkbox_button_values('Ques-Control-Q16', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            $dd = 0;
            checkbox_button_values('Ques-Control-Q16', $dd, 'settings');
        }
    });


    /*Algo-Control-F-Euro on off button*/
    $('input[name=algo_control_F_Euro]').click(function(){
        if($(this).prop("checked") == true){
            alert_fancy_data_saved();
            
            $dd = 1;
            checkbox_button_values('Algo-Control-F-Euro', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            
            $dd = 0;
            checkbox_button_values('Algo-Control-F-Euro', $dd, 'settings');
        }
    }); 

    /*Algo-Control-G-Dollar on off button*/
    $('input[name=algo_control_G_Dollar]').click(function(){
        if($(this).prop("checked") == true){
                alert_fancy_data_saved();
                            
            $dd = 1;
            checkbox_button_values('Algo-Control-G-Dollar', $dd, 'settings');
        }
        else if($(this).prop("checked") == false){
            alert_fancy_data_saved();
            
            $dd = 0;
            checkbox_button_values('Algo-Control-G-Dollar', $dd, 'settings');
        }
    });





});


function checkbox_button_values(data1, data2, data3){


    url = 'check_box_value';
    $.ajax({
        type: "POST",
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: url,
        data: {'field_name':data1, 'field_value':data2, 'page_name':data3},
        dataTYPE: 'json',
       success: function(data)
       {
            if(data.status == 1){
                console.log(data);
            }
        }
    });
}
/*FANCY ALERT BOX */
function alert_fancy_data_saved(){
    Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
    })

}






