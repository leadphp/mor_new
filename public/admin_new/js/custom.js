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
  // var date = new Date();
  

  //     var normalized =  ("0" + date.getDate()).slice(-2)+ '/' +(("0" + (date.getMonth() + 1)).slice(-2))+ '' +date.getFullYear();
              // alert(normalized);
              
          
  // alert(normalized);
    $('#from-register-time').datepicker({format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate','01/01/2019');;
    $('#to-register-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate', 'now');;
    $('#from-payment-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate','01/01/2019');;
    $('#to-payment-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate', 'now');;
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




$('#bank_discount_avail').on('change', function(){

var bank = $('input[name=bank_name]:checked').val();

 var check_box = $('#bank_discount_avail').val();
 if(check_box == '0'){
  $('#bank_discount_avail').val('1');
 } else{
  $('#bank_discount_avail').val('0');
 }
 var f_check = $('#bank_discount_avail').val();
 // alert(f_check);

save_discount(bank, f_check);

});


  var check_box = $('#bank_discount_avail').val();
  var bank_ = $('input[name=bank_name]:checked').val();
  save_discount(bank_, check_box);




function save_discount(bank,status){

    var url = '/admin/bank_table_discounts';
    $.ajax({  
        type: "POST",
        url: url,
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        data: {'bank': bank, 'status': status} ,
     
         success: function(data)
         {
            if(data.status == 1){
              $('#bank_discount_avail').attr('checked', true);
            } else{
              $('#bank_discount_avail').attr('checked', false);

            }
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
                //alert(discount_status);
                $('#bank_discount').val(yy+'%');

                if(discount_status == 1){
                    $('#bank_discount_avail').attr('checked','checked');
                }else{
                    $('#bank_discount_avail').removeAttr('checked','checked');   
                }


                $('#bank_interest_table').remove();

                $('.custom-data-table-render').append('<table id="bank_interest_table"><tbody class="table_body"><tr class="bmb"><td>Prime</td><td class="a-purple" style="text-align: center;">Const Prime <br/>1.75%</td>');
                

                $.each(tt, function() { 
                    $('.bmb').append('<td>'+this.prime_delta+'%</td>'); 
                });

                $('.table_body').append('<tr class="bmb2"><th>Loan Type</th><th>Loan Years</th>');

                $.each(tt, function() {
                    var j = this.years;
                    if( j > 0){
                        $('.bmb2').append('<th>'+this.years+'</th>');
                    }else{
                     $('.bmb2').append('<th class="red-make-it">'+this.years+'</th>'); 
                 }
             });

                $('.table_body').append('<tr class="bmb3"><td>Prime</td><td>A</td>');

                $.each(tt, function() {
                    var k = this.prime;
                    if( k > 0){
                        $('.bmb3').append('<td>'+this.prime+'%</td>');
                    }else{
                     $('.bmb3').append('<td class="red-make-it">'+this.prime+'%</td>'); 
                 }
             });

                $('.table_body').append('<tr class="bmb4"><td>Const_Inter_Linked</td><td>B</td>');

                $.each(tt, function() {
                    var l = this.const_inter_linked;
                    if( l > 0){
                        $('.bmb4').append('<td>'+this.const_inter_linked+'%</td>');
                    }else{
                     $('.bmb4').append('<td class="red-make-it">'+this.const_inter_linked+'%</td>'); 
                 }
             });

                $('.table_body').append('<tr class="bmb5"><td>Const_Inter_Unlinked</td><td>C</td>');

                $.each(tt, function() {
                    var m = this.const_inter_unlinked;
                    if( m > 0){
                        $('.bmb5').append('<td>'+this.const_inter_unlinked+'%</td>');
                    }else{
                     $('.bmb5').append('<td class="red-make-it">'+this.const_inter_unlinked+'%</td>'); 
                 }
             });


                $('.table_body').append('<tr class="bmb6"><td>var_inter_5year_linked</td><td>D</td>');

                $.each(tt, function() {
                    var n = this.var_inter_5year_linked;
                    if( n > 0){
                        $('.bmb6').append('<td>'+this.var_inter_5year_linked+'%</td>');
                    }else{
                     $('.bmb6').append('<td class="red-make-it">'+this.var_inter_5year_linked+'%</td>'); 
                 }   
             });

                $('.table_body').append('<tr class="bmb7"><td>var_inter_5year_Unlinked</td><td>E</td>');

                $.each(tt, function() {
                    var o = this.var_inter_5year_unlinked;
                    if( o > 0){
                        $('.bmb7').append('<td>'+this.var_inter_5year_unlinked+'%</td>');
                    }else{
                     $('.bmb7').append('<td class="red-make-it">'+this.var_inter_5year_unlinked+'%</td>'); 
                 }
             });


                $('.table_body').append('<tr class="bmb8"><td>Euro_Inter</td><td>F</td>');

                $.each(tt, function() {
                    var p = this.euro_inter;
                    if( p > 0){
                        $('.bmb8').append('<td>'+this.euro_inter+'%</td>');
                    }else{
                     $('.bmb8').append('<td class="red-make-it">'+this.euro_inter+'%</td>'); 
                 }
             });


                $('.table_body').append('<tr class="bmb9"><td>Dollar_inter</td><td>G</td>');

                $.each(tt, function() {
                    var q = this.dollar_inter;
                    if( q > 0){
                        $('.bmb9').append('<td>'+this.dollar_inter+'%</td>');
                    }else{
                     $('.bmb9').append('<td class="red-make-it">'+this.dollar_inter+'%</td>'); 
                 }
             });

                $('.table_body').append('<tr class="bmb10"><td>Elegibility_Inter</td><td>H</td>');

                $.each(tt, function() {
                    var r = this.eligibility_inter;
                    if( r > 0){
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
    Bank_interest_madad_data(senstive_madad);

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
           //alert(tt);
           console.log(tt);
           var prime_delta = data.data.prime_delta;

            // console.log(prime_delta);



           $('#prime_bank_intrest').remove();
           $('.prime_years_table').append('<table class="table table-striped" id="prime_bank_intrest"><thead><tr><th scope="col">Years</th><th scope="col">Prime Table</th><th scope="col">Prime Year (+0)</th></tr></thead><tbody class="bnb">');

           $('#prime_months_table').remove();
           $('.prime_months_table').append('<table class="table table-striped" id="prime_months_table"><thead><tr><th scope="col">Month</th><th scope="col">Prime Month</th></tr></thead><tbody class="test_prime_table dnd">');

           counter = 1;     
           $.each(tt, function() { 
            var prime_hh = this.prime;
            // console.log(prime_hh);

            var prime = parseFloat(prime_hh) + parseFloat(data4);
            if(prime < 0){
              var prime = 0;  
          }
          var year = this.years;

          var prime_delta_years = parseFloat(prime_delta) + parseFloat(prime);         
          var final_prime_delta_years = Number((prime_delta_years).toFixed(3));

          $('.bnb').append('<tr><td>'+year+'</td><td>'+prime+'%</td><td>'+final_prime_delta_years+'%</td></tr>'); 


          for( i=1; i<=12; i++){

            var value = parseFloat(final_prime_delta_years) / 12;
            var value = Number((value).toFixed(3));

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



function Bank_interest_madad_data(data4){


    url = 'bank_interest_madad_data';
    $.ajax({
        type: "POST",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: url,
      data: {'bank':data4},
      dataTYPE: 'json',
      success: function(data)
      {
        if(data.status == 1){


           var tt=data.data;
           console.log(tt);

           $('#madad_years_table').remove();
           $('.madad_years_div').append('<table class="table table-striped" id="madad_years_table"><thead><tr><th scope="col">Years</th><th scope="col">Madad Years(+0)</th></tr></thead><tbody class="madad_years">');

           $('#madad_months_table').remove();
           $('.madad_months_div').append('<table class="table table-striped" id="madad_months_table"><thead><tr><th scope="col">Years</th> <th scope="col">Madad Mult</th><th scope="col">Madad Month</th></tr></thead><tbody class="madad_months">');

           counter = 1;     
           $.each(tt, function() { 
            var prime_hh = this.madad;
            var prime = parseFloat(prime_hh) + parseFloat(data4);
            if(prime < 0){
              var prime = 0;  
          }
          var year = this.years;

                    //var prime_delta_years = parseFloat(prime_delta) + parseFloat(prime);         
                    //var final_prime_delta_years = Number((prime_delta_years).toFixed(2));
                    
                    $('.madad_years').append('<tr><td>'+year+'</td><td>'+prime+'%</td></tr>'); 

                    var final_prime_value = prime / 12;
                    var final_prime_val = Number((final_prime_value).toFixed(2));
                    var madad_month = 0;
                    for( i=1; i<=12; i++){

                        // var value = parseFloat(final_prime_delta_years) / 12;
                        // var value = Number((value).toFixed(2));

                        // // $('.dnd').append( '<tr class="select_prime_all select_prime_'+year+'" ><td>'+counter+'</td><td>'+value+'%</td></tr>');

                        


                        if(counter == 1){
                            madad_month = final_prime_val;
                        }else{
                            madad_val1 = 1 + final_prime_val / 100;

                            madad_val2 = 1 + madad_month / 100;

                            madad_val3 = madad_val1 * madad_val2;

                            madad_month1 = madad_val3 - 1;

                            madad_month = madad_month1 * 100;
                            madad_month = Number((madad_month).toFixed(3));
                        }


                        if(counter > 12){
                            $('.madad_months').append( '<tr class="select_madad_all select_madad_'+year+'" style="display:none;"><td>'+counter+'</td><td>'+final_prime_val+'%</td><td>'+madad_month+'%</td></tr>');

                        }else{

                            $('.madad_months').append( '<tr class="select_madad_all select_madad_'+year+'"><td>'+counter+'</td><td>'+final_prime_val+'%</td><td>'+madad_month+'%</td></tr>');
                        }



                        counter++;
                    }



                });

           $('.madad_years_div').append('</tbody></table>');
           $('.madad_months_div').append('</tbody></table>');  


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





/*Date Filter + Data Table starts here*/

$(document).ready(function(){

   $('#customerTable').DataTable({
    language: {
        paginate: {
            next: '>>',
            previous: '<<'
        }
    },
    "bPaginate": true,
        //pagingType: "numbers",
       // searching: false,
       bInfo: false,
       // "dom": 't<"pagination"p>',
   });

   var table = $('#customerTable').DataTable(); 
   $('#searchuser').on( 'keyup', function () {
    table.search( this.value, true, false ).draw();
} );


   $('#customerTable_filter').hide();

   $(".main-button-date").on("click", function(){
      table.draw();
   });
   $(".main-button-date").on("click", function(e){
    e.preventDefault();

    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
           var sd = $('#from-register-time').val(),
           endDate = $('#to-register-time').val();

           var dateAr = sd.split('/');
           var min = dateAr[2] + '' + dateAr[1] + '' + dateAr[0];

           var dateAr2 = endDate.split('/');
           var max = dateAr2[2] + '' +dateAr2[1] + '' + dateAr2[0];

           var startDate1 = new Date(data[1]);
                 //alert(startDate1);
                 // var startDate1 = $('#demo').val();
                 // var dateAr3 = startDate1.split('/');

                 // var startDate = dateAr3[2] + '' +dateAr3[1] + '' + dateAr3[0];
                 // if(startDate<=max && startDate>=min){
                 //     alert(1);
                 // }
                 var startDate = normalizeDate(startDate1);
                 // alert(min +'*********'+startDate+'************'+max);
                 if (min == "undefinedundefined" && max == "undefinedundefined") { return true; }
                 if (min == "undefinedundefined" && startDate <= max) { return true;}
                 if(max == "undefinedundefined" && startDate >= min) {return true;}
                 if (startDate <= max && startDate >= min) { return true; }
                 return false;

             }
             );


    var normalizeDate = function(dateString) {
      var date = new Date(dateString);

      var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
               //var normalized = ("0" + date.getDate()).slice(-2)+ '' +(("0" + (date.getMonth() + 1)).slice(-2))+ '' +date.getFullYear();
              // alert(normalized);
              return normalized;
          }



          var table = $('#customerTable').DataTable();
        //   $('#to-register-time').change(function () {
        //     table.draw();
        // });
        //   $('#from-register-time').change(function () {
        //     table.draw();
        // });
          table.draw();
      });




   /*Date filter for payment column*/
   $(".main-button-pay").on("click", function(e){
    e.preventDefault();

    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
           var sd = $('#from-payment-time').val(),
           endDate = $('#to-payment-time').val();

           var dateAr = sd.split('/');
           var min = dateAr[2] + '' + dateAr[1] + '' + dateAr[0];

           var dateAr2 = endDate.split('/');
           var max = dateAr2[2] + '' +dateAr2[1] + '' + dateAr2[0];

           var startDate1 = new Date(data[7]);

                 // var startDate1 = $('#demo').val();
                 // var dateAr3 = startDate1.split('/');

                 // var startDate = dateAr3[2] + '' +dateAr3[1] + '' + dateAr3[0];
                 // if(startDate<=max && startDate>=min){
                 //     alert(1);
                 // }
                 var startDate = normalizeDate(startDate1);
                 // alert(min +'*********'+startDate+'************'+max);
                 if (min == "undefinedundefined" && max == "undefinedundefined") { return true; }
                 if (min == "undefinedundefined" && startDate <= max) { return true;}
                 if(max == "undefinedundefined" && startDate >= min) {return true;}
                 if (startDate <= max && startDate >= min) { return true; }
                 return false;

             }
             );


    var normalizeDate = function(dateString) {
      var date = new Date(dateString);

      var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
               //var normalized = ("0" + date.getDate()).slice(-2)+ '' +(("0" + (date.getMonth() + 1)).slice(-2))+ '' +date.getFullYear();
              // alert(normalized);
              return normalized;
          }



          var table = $('#customerTable').DataTable();
        //   $('#to-payment-time').change(function () {
        //     table.draw();
        // });
        //   $('#from-payment-time').change(function () {
        //     table.draw();
        // });
           table.draw();
      });

   /*Payment date filter ends here*/


});

/*Data Table and Date Filter ends here*/













    //---------------------------------------------------------------//
    //
    //                 REGISTRATION PAGE QUESTION ANSWERS
    //
    //--------------------------------------------------------------//

    $(document).ready(function(){

        /*------------Question-1---------------*/

        var value = $('input[name=living_location]:checked').val();
            if(value == "rental_aprt"){
                $('.monthly_pay_ques_one').attr('readonly', false);
            }else{
                
                $('.monthly_pay_ques_one').val('0');
                $('.monthly_pay_ques_one').attr('readonly', true);
            } 

        $("body").on('change','input[name=living_location]',function(){
            var value = $(this).val();
            if(value == "rental_aprt"){
                $('.monthly_pay_ques_one').attr('readonly', false);
            }else{
                $('.monthly_pay_ques_one').val('0');
                $('.monthly_pay_ques_one').attr('readonly', true);
            }
            formQuestionOne('form#formQuestionOne','/admin/question1','#ques_3','spinner-ques-1');
        });

         $("body").on('keyup','.monthly_pay_ques_one',function(){
            formQuestionOne('form#formQuestionOne','/admin/question1','#ques_3','spinner-ques-1');
            thirty_nine_wala_fun();
        });

         $("body").on('change','input[name=living_location]',function(){
           two_extra_fields_data_flow(); 
           $('.question-2').removeClass('hide_for_now');
        });


        /*------------Question-2---------------*/

        $("body").on('submit','form#formQuestionTwo',function(){
          formQuestionOne('form#formQuestionTwo','/admin/question2','#ques_4','spinner-ques-2');
          elegibilty_admin_sixteen();
          alert_fancy_data_saved();
          thirty_nine_wala_fun();
          $('.ques_three').removeClass('hide_for_now');
          $('.ques_4').removeClass('hide_for_now');
          return false;
        });

        // function second_fields_game(){
        //   /*first*/  
        //     var status = $('.first_sel').val();
        //     if(status == "Apartment_with_mortgage"){
        //       $(".monthly_one").val('').attr('readonly',false);
        //       $(".balance_one").val('').attr('readonly',false);
        //       $("#second_sel_one option:first").removeAttr('selected','selected');
        //       $("#second_sel_one option:eq(1)").attr('selected','selected');
        //     }
        //     else{
        //       $(".monthly_one").val(0).attr('readonly',true);
        //       $(".balance_one").val(0).attr('readonly',true);
        //       $("#second_sel_one option:eq(1)").removeAttr('selected','selected');
        //       $("#second_sel_one option:first").attr('selected','selected');
        //     }
        //    /*second*/
        //     var status = $('.sec_sel').val();
        //     if(status == "Apartment_with_mortgage"){
        //       $(".monthly_two").val('').attr('readonly',false);
        //       $(".balance_two").val('').attr('readonly',false);
        //       $("#second_sel_second option:first").removeAttr('selected','selected');
        //       $("#second_sel_second option:eq(1)").attr('selected','selected');
        //     }
        //     else{
        //       $(".monthly_two").val(0).attr('readonly',true);
        //       $(".balance_two").val(0).attr('readonly',true);
        //       $("#second_sel_second option:eq(1)").removeAttr('selected','selected');
        //       $("#second_sel_second option:first").attr('selected','selected');
        //     }
        //   /*third*/
        //     var status = $('.thr_sel').val();
        //     if(status == "Apartment_with_mortgage"){
        //       $(".monthly_three").val('').attr('readonly',false);
        //       $(".balance_three").val('').attr('readonly',false);
        //       $("#second_sel_third option:first").removeAttr('selected','selected');
        //       $("#second_sel_third option:eq(1)").attr('selected','selected');
        //     }
        //     else{
        //       $(".monthly_three").val(0).attr('readonly',true);
        //       $(".balance_three").val(0).attr('readonly',true);
        //       $("#second_sel_third option:eq(1)").removeAttr('selected','selected');
        //       $("#second_sel_third option:first").attr('selected','selected');
        //     }
          
        // }
        // second_fields_game();


          $('body').find('.first_sel').on('change', function(){

            var status = $('.first_sel').val();
            if(status == "Apartment_with_mortgage"){
              $(".monthly_one").val('').attr('readonly',false);
              $(".balance_one").val('').attr('readonly',false);
              $("#second_sel_one option:first").removeAttr('selected','selected');
              $("#second_sel_one option:eq(1)").attr('selected','selected');
            }
            else{
              $(".monthly_one").val('').attr('readonly',true);
              $(".balance_one").val('').attr('readonly',true);
              $("#second_sel_one option:eq(1)").removeAttr('selected','selected');
              $("#second_sel_one option:first").attr('selected','selected');
            }

          });



          $('body').find('.sec_sel').on('change', function(){

            var status = $('.sec_sel').val();
            if(status == "Apartment_with_mortgage"){
              $(".monthly_two").val('').attr('readonly',false);
              $(".balance_two").val('').attr('readonly',false);
              $("#second_sel_second option:first").removeAttr('selected','selected');
              $("#second_sel_second option:eq(1)").attr('selected','selected');
            }
            else{
              $(".monthly_two").val('').attr('readonly',true);
              $(".balance_two").val('').attr('readonly',true);
              $("#second_sel_second option:eq(1)").removeAttr('selected','selected');
              $("#second_sel_second option:first").attr('selected','selected');
            }

          });


          $('body').find('.thr_sel').on('change', function(){

            var status = $('.thr_sel').val();
            if(status == "Apartment_with_mortgage"){
              $(".monthly_three").val('').attr('readonly',false);
              $(".balance_three").val('').attr('readonly',false);
              $("#second_sel_third option:first").removeAttr('selected','selected');
              $("#second_sel_third option:eq(1)").attr('selected','selected');
            }
            else{
              $(".monthly_three").val('').attr('readonly',true);
              $(".balance_three").val('').attr('readonly',true);
              $("#second_sel_third option:eq(1)").removeAttr('selected','selected');
              $("#second_sel_third option:first").attr('selected','selected');
            }

          });



          function second_owner_field(){

            var owner_val1  = $('.owner_common1').val();
            if(owner_val1 == 0){
              owner_val1 = "";
            }else{
              owner_val1 = owner_val1;
            }
            var owner_val2  = $('.owner_common2').val();
            if(owner_val2 == 0){
              owner_val2 = "";
            }else{
              owner_val2 = owner_val2;
            }
            var owner_val3  = $('.owner_common3').val();
            if(owner_val3 == 0){
              owner_val3 = "";
            }else{
              owner_val3 = owner_val3;
            }

              //alert(owner_val3);


            if(owner_val1 != ""){
              $('.owner_common1').val(addCommasDirect(owner_val1));
            }else{
              $('.owner_common1').val('');
            }
            if(owner_val2 != ""){
              $('.owner_common2').val(addCommasDirect(owner_val2));
            }else{
              $('.owner_common2').val('');
            }
            if(owner_val3 != ""){
              $('.owner_common3').val(addCommasDirect(owner_val3));
            }else{
              $('.owner_common3').val('');
            }

          }
          second_owner_field();






         $(".first_sel").on("change", function(){
            var status = $('.first_sel').val();
            if(status == "Apartment_with_mortgage"){
              $(".monthly_one").val('').attr('readonly',false);
              $(".balance_one").val('').attr('readonly',false);
              $("#second_sel_one option:first").removeAttr('selected','selected');
              $("#second_sel_one option:eq(1)").attr('selected','selected');
            }
            else{
              $(".monthly_one").val('').attr('readonly',true);
              $(".balance_one").val('').attr('readonly',true);
              $("#second_sel_one option:eq(1)").removeAttr('selected','selected');
              $("#second_sel_one option:first").attr('selected','selected');
            }
          });

           $(".sec_sel").on("change", function(){
            var status = $('.sec_sel').val();
            if(status == "Apartment_with_mortgage"){
              $(".monthly_two").val('').attr('readonly',false);
              $(".balance_two").val('').attr('readonly',false);
              $("#second_sel_second option:first").removeAttr('selected','selected');
              $("#second_sel_second option:eq(1)").attr('selected','selected');
            }
            else{
              $(".monthly_two").val('').attr('readonly',true);
              $(".balance_two").val('').attr('readonly',true);
              $("#second_sel_second option:eq(1)").removeAttr('selected','selected');
              $("#second_sel_second option:first").attr('selected','selected');
            }
          });


          $(".thr_sel").on("change", function(){
            var status = $('.thr_sel').val();
            if(status == "Apartment_with_mortgage"){
              $(".monthly_three").val('').attr('readonly',false);
              $(".balance_three").val('').attr('readonly',false);
              $("#second_sel_third option:first").removeAttr('selected','selected');
              $("#second_sel_third option:eq(1)").attr('selected','selected');
            }
            else{
              $(".monthly_three").val('').attr('readonly',true);
              $(".balance_three").val('').attr('readonly',true);
              $("#second_sel_third option:eq(1)").removeAttr('selected','selected');
              $("#second_sel_third option:first").attr('selected','selected');
            }
          });






        $('.monthly_one').on('keyup',function(){
         var mon = $(this).val(); 
         
         if(mon == ""){
            mon = 0;
         }else{
            mon  = mon;
            var mon = mon.split(',').join('');
         }

         var pro = $('.property_one').val();
         var pro = pro.split(',').join('');
          var totals = pro - mon ;

         var total = addCommasDirect(totals);
         $('.owner_one').attr('id',totals);
         //alert(total);
         $('.owner_one').val(total);
            two_extra_fields_data();
        });

        $('.monthly_two').on('keyup',function(){
         var mon = $(this).val(); 
         
         if(mon == ""){
            mon = 0;
         }else{
            mon  = mon;
            var mon = mon.split(',').join('');
         }

         //var mon = mon.split(',').join('');  
         var pro = $('.property_two').val();
         var pro = pro.split(',').join('');
         var totals = pro - mon ;
         var total = addCommasDirect(totals);
         $('.owner_two').attr('id',totals);
         $('.owner_two').val(total);
            two_extra_fields_data();
        });

        $('.monthly_three').on('keyup',function(){
         var mon = $(this).val(); 
        
         if(mon == ""){
            mon = 0;
         }else{
            mon  = mon;
            var mon = mon.split(',').join('');
         }

         //var mon = mon.split(',').join('');  
         var pro = $('.property_three').val();
         var pro = pro.split(',').join('');
           var totals = pro - mon ;
         var total = addCommasDirect(totals);
         $('.owner_three').attr('id',totals);
         $('.owner_three').val(total);
            two_extra_fields_data();
        });


        $('.property_one').on('keyup',function(){
         var pro = $(this).val();
         var pro = pro.split(',').join('');  
         var mon = $('.monthly_one').val();

         if(mon == ""){
            mon = 0;
         }else{
            mon  = mon;
            var mon = mon.split(',').join('');
         }

         //var mon = mon.split(',').join('');
         var totals = pro - mon ;
         var total = addCommasDirect(totals);
         $('.owner_one').attr('id',totals);
         $('.owner_one').val(total);
            two_extra_fields_data();
        });

        $('.property_two').on('keyup',function(){
         var pro = $(this).val(); 
         var pro = pro.split(',').join('');  
         var mon = $('.monthly_two').val();

         if(mon == ""){
            mon = 0;
         }else{
            mon  = mon;
            var mon = mon.split(',').join('');
         }

         //var mon = mon.split(',').join('');
          var totals = pro - mon ;
         var total = addCommasDirect(totals);
         $('.owner_two').attr('id',totals);
         $('.owner_two').val(total);
            two_extra_fields_data();
        });

        $('.property_three').on('keyup',function(){
         var pro = $(this).val(); 
         var pro = pro.split(',').join('');  
         var mon = $('.monthly_three').val();

         if(mon == ""){
            mon = 0;
         }else{
            mon  = mon;
            var mon = mon.split(',').join('');
         }

         //var mon = mon.split(',').join('');
         var totals = pro - mon ;
         var total = addCommasDirect(totals);
         $('.owner_three').attr('id',totals);
         $('.owner_three').val(total);
            two_extra_fields_data();
        });


        function two_extra_fields_data(){

            var own_one = $('.owner_one').val();
            if(own_one != null){
              
              var own_one = own_one.split(',').join('');
            }else{
              var own_one = '0';
            }
            var own_one = parseInt(own_one);
           

            var own_two = $('.owner_two').val();
            if(own_two != null){
              var own_two = own_two.split(',').join('');
            }else{
              var own_two = '0';
            }
            var own_two = parseInt(own_two);
            if(isNaN(own_two)){
              own_two = 0;
            }else{
              own_two = own_two;
            }



            var own_three = $('.owner_three').val();
            if(own_three != null){
              var own_three = own_three.split(',').join('');
            }else{
              var own_three = '0';
            }
            var own_three = parseInt(own_three);
            if(isNaN(own_three)){
              own_three = 0;
            }else{
              own_three = own_three;
            }


              var myArray = [
                  [own_one],
                  [own_two],
                  [own_three]
              ];

              var yyy = Math.max.apply(Math,myArray);
              var yy = addCommasDirect(yyy);
             
              if(yy != "NaN"){
                $('#max_owner_value').val(yy);
              }else{
                $('#max_owner_value').val('');
              }
        }
        two_extra_fields_data();



        function emptyFieldsOnClick(){
          $("body").on('change','input[name=que2]',function(){

            cc = $(this).val();
            //alert(cc);
            if(cc == 'No'){
              $('.common_extra_cls_sel').val("No Info");
              $('.common_extra_cls').val("");
              $('.owner_one').val("");
              $('.owner_two').val("");
              $('.owner_three').val("");
            }

          });


        }
        emptyFieldsOnClick();



        function two_extra_fields_data_flow(){

          var value = $('input[name=living_location]:checked').val();
            if(value == "rental_aprt"){
                var ques_one_val = $('.monthly_pay_ques_one').val();
                if(ques_one_val != ""){
                var ques_one_val = ques_one_val.split(',').join('');
                var ques_one_val = parseInt(ques_one_val);
                }else{
                  var ques_one_val = "0";
                }
            }else{
                var ques_one_val = "0";
                
            } 


            if(ques_one_val != ""){

                var ques_one_val = parseInt(ques_one_val);
               
                var balance_one = $('.balance_one').val();
                if (balance_one == null){
                  var balance_one = 0;
                }else{
                  var balance_one = balance_one.split(',').join("");
                }
                //var balance_one = balance_one.split(',').join('');
                var balance_one = parseInt(balance_one);
                if(isNaN(balance_one)){
                  balance_one = 0;
                }else{
                  balance_one = balance_one;
                }
                var balance_two = $('.balance_two').val();

                if (balance_two == null){
                  var balance_two = 0;
                }else{
                  var balance_two = balance_two.split(',').join("");
                }



                //var balance_two = balance_two.split(',').join('');
                var balance_two = parseInt(balance_two);
                if(isNaN(balance_two)){
                  balance_two = 0;
                }else{
                  balance_two = balance_two;
                }
                var balance_three = $('.balance_three').val();

                if (balance_three == null){
                  var balance_three = 0;
                }else{
                  var balance_three = balance_three.split(',').join("");
                }




                //var balance_three = balance_three.split(',').join('');
                var balance_three = parseInt(balance_three); 
                if(isNaN(balance_three)){
                  balance_three = 0;
                }else{
                  balance_three = balance_three;
                }


                var balance_total = balance_one + balance_two + balance_three;
               

                var prop_one = $('.prop_one').val();

                if (prop_one == null){
                  var prop_one = 0;
                }else{
                  var prop_one = prop_one.split(',').join("");
                }

                //var prop_one = prop_one.split(',').join('');
                var prop_one = parseInt(prop_one);
                if(isNaN(prop_one)){
                  prop_one = 0;
                }else{
                  prop_one = prop_one;
                }
                var prop_two = $('.prop_two').val();
                if (prop_two == null){
                  var prop_two = 0;
                }else{
                  var prop_two = prop_two.split(',').join("");
                }

                //var prop_two = prop_two.split(',').join('');
                var prop_two = parseInt(prop_two);
                if(isNaN(prop_two)){
                  prop_two = 0;
                }else{
                  prop_two = prop_two;
                }
                var prop_three = $('.prop_three').val();

                if (prop_three == null){
                  var prop_three = 0;
                }else{
                  var prop_three = prop_three.split(',').join("");
                }

                //var prop_three = prop_three.split(',').join('');
                var prop_three = parseInt(prop_three);
                if(isNaN(prop_three)){
                  prop_three = 0;
                }else{
                  prop_three = prop_three;
                }

                var prop_total = prop_one + prop_two + prop_three;
              
                var final = ques_one_val + balance_total - prop_total;

                final = isNaN(final) ? '0' : final;
                var final = addCommasDirect(final);
               
                $('#total_monthly_pay').val(final);

            }else{
                $('#total_monthly_pay').val();
            }
        }
        two_extra_fields_data_flow();


        $('.balance_one, .balance_two, .balance_three, .prop_one, .prop_two, .prop_three, .monthly_pay_ques_one').on('keyup',function(){

            two_extra_fields_data_flow();
        });

        


        /*------------Question-3---------------*/
        $("body").on('change','.gender',function(){
          formQuestionOne('form#formQuestionThree','/admin/question3','#ques_5','spinner-ques-3');
          $('.ques_4').removeClass('hide_for_now');
        });


        /*------------Question-4---------------*/
        $("body").on('keyup','.reg-four-question',function(){    
          formQuestionOne('form#formQuestionFour','/admin/question4','#ques_6','spinner-ques-4');
            thirty_nine_wala_fun();
        $('.ques_5').removeClass('hide_for_now');
        });

         /*------------Question-5---------------*/

         value = $('.stable_statuss').val();
            
            if(value == "no"){
                $('#average-savings').attr('readonly', false);
            }else{
                $('#average-savings').val('0');
                $('#average-savings').attr('readonly', true);
            }

        $("body").on('keyup','#average-savings',function(){
            formQuestionOne('form#formQuestionFive','/admin/question5','#ques_7','spinner-ques-5');
            req_grace_tenth();
        });

        $("body").on('change','.stable_statuss',function(){
            var tt =   $(this).val();
            if(tt == "no"){

                $('#average-savings').attr('readonly', false);
            }else{
                
                $('#average-savings').val('0');
                $('#average-savings').attr('readonly', true);
            }
            formQuestionOne('form#formQuestionFivePointOne','/admin/question5','#ques_7','spinner-ques-5');
            req_grace_tenth();
            $('.ques_6').removeClass('hide_for_now');
            //$('.ques_6_1').removeClass('hide_for_now');
        });

        /*------------------Question-6---------------*/

        $("body").on('click','.bank_account',function(){
          var yyyy = $(this).data('id');
            formQuestionOne('form#formQuestionSix','/admin/question6','#ques_8','spinner-ques-6');
            change_bank_interest(yyyy);
            $('.ques_7').removeClass('hide_for_now');
            $('.ques_7_1').removeClass('hide_for_now');
           
        });


        function change_bank_interest(yyyy) { 
            var url = '/admin/admin_ques_six_ajax'
                $.ajax({
                      type: "POST",
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: {'bank_name':yyyy},
                    dataTYPE: 'json',
                    success: function(data)
                    {

                      //alert(data.status);
                        if(data.status == 1){

                          $('#bank_customer_discount').html('<h3>Discount (For The Bank Customers)%</h3><div class="form-group"><input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" value="'+data.discount+'" /><span class="indicator i-green">1</span></div><ul><li><span class="text-green">Green</span> - Enabled & have bank match ( Bank By Algo = Q6 )</li><li><span class="text-grey">Grey</span> - Enabled & don’t have bank match.</li><li><span class="text-red">Red</span> - Disabled on bank interest tables.</li></ul>');

                        }else if(data.status == 0){

                           $('#bank_customer_discount').html('<h3>Discount (For The Bank Customers)%</h3><div class="form-group"><input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" /><span class="indicator i-red">1</span></div><ul><li><span class="text-green">Green</span> - Enabled & have bank match ( Bank By Algo = Q6 )</li><li><span class="text-grey">Grey</span> - Enabled & don’t have bank match.</li><li><span class="text-red">Red</span> - Disabled on bank interest tables.</li></ul>');


                        }else{

                          $('#bank_customer_discount').html('<h3>Discount (For The Bank Customers)%</h3><div class="form-group"><input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" /><span class="indicator i-grey">1</span></div><ul><li><span class="text-green">Green</span> - Enabled & have bank match ( Bank By Algo = Q6 )</li><li><span class="text-grey">Grey</span> - Enabled & don’t have bank match.</li><li><span class="text-red">Red</span> - Disabled on bank interest tables.</li></ul>');

                        }
                    }
                });
            return false;
        }







        /*------------------Question-7---------------*/

        $("body").on('change','.move_bank',function(){
            formQuestionOne('form#formQuestionSeven','/admin/question7','#ques_9','spinner-ques-7');
            $('.ques_7').removeClass('hide_for_now');
        });
    
        $("body").on('keyup','.age_loan_holder',function(){
            formQuestionOne('form#formQuestionSeven','/admin/question7','#ques_9','spinner-ques-7');
        });

        /*------------------Question-8---------------*/

        $("body").on('change','input[name=why_mortgage]',function(){
          var tt = $(this).val();
          formQuestionOne('form#formQuestionEight','/admin/question8','#ques_11','spinner-ques-8');
          eight_ka_funda();  
          return false;
        });

        function eight_ka_funda(){
          var tt = $('input[name=why_mortgage]:checked').val();

          if(tt == 'any_cause'){
              console.log($("#grace").val($("#grace option:first").attr('selected',true)));

              $('body').find('.first_aprt').attr('checked',false);
              //$('body').find('#req-grace').val("");
              $('body').find('.read_only_ten').attr('readonly',true);
              $('body').find('.read_only_nine').attr('disabled',true);
              $('body').find('.eleven_one').attr('readonly',true);
              $('body').find('.eleven_one').val('');
              $('body').find('.eleven_two').attr('readonly',true);
              $('body').find('.eleven_two').val('');
              $('body').find('.eleven_three').attr('readonly',false);

              twelve_left_options_c();


            }else if(tt == 'mistaken_program'){
              $('body').find('.first_aprt').attr('checked',true);
              $('body').find('.read_only_nine').attr('disabled',true);
              $('body').find('.read_only_ten').attr('readonly',false);
              $('body').find('.eleven_one').attr('readonly',true);
              $('body').find('.eleven_one').val('');
              $('body').find('.eleven_two').attr('readonly',false);
              $('body').find('.eleven_three').attr('readonly',true);
              $('body').find('.eleven_three').val('');
              twelve_left_options_b();


            }else{
              $('body').find('.first_aprt').attr('checked',false);
              $('body').find('.read_only_nine').attr('disabled',false);
              $('body').find('.read_only_ten').attr('readonly',false);
              $('body').find('.eleven_one').attr('readonly',false);
              $('body').find('.eleven_two').attr('readonly',true);
              $('body').find('.eleven_two').val('');
              $('body').find('.eleven_three').attr('readonly',true);
              $('body').find('.eleven_three').val('');
              twelve_left_options();


            }

        }
        eight_ka_funda();
        /*------------------Question-9---------------*/

        $("body").on('change','.status_of_mortgage',function(){
            formQuestionOne('form#formQuestionNine','/admin/question9','#ques_9','spinner-ques-7');
            elegibilty_admin_sixteen();
            enslavement_values();
        });


        /*------------------Question-10---------------*/
        $("body").on('keyup','.req_grace',function(){
            formQuestionOne('form#formQuestionTen_option1','/admin/question10','#ques_12_2','spinner-ques-10');
        });

        $("body").on('change','.graces',function(){
          //alert('786');
            formQuestionOne('form#formQuestionTen_option1','/admin/question10','#ques_12_2','spinner-ques-10');
        });

        /*------------------Question-11---------------*/

        $("body").on('keyup','.property_value',function(){
            twelve_left_options();
        });

        $("body").on('keyup','.self_funding',function(){
            twelve_left_options();
        });

        $("body").on('submit','form#formQuestionEleven_One',function(){

          var gg = $('.eleven_user_id').val();
          formQuestionOne('form#formQuestionEleven_One','/admin/question11_1','#ques_13','spinner-ques-11_1');
           ajax_question_twelve(gg);
           pmt_slider_ajax();
          return false;
        });


        function twelve_left_options(){
          
          var pro = $('.property_value').val();
          if (pro == null){
             var pro = '0';
          }else{
            var pro = pro.split(',').join("");
          }

          
          var funding = $('.self_funding').val();
          if (funding == null){
             var funding = '0';
          }else{
            var funding = funding.split(',').join("");
          }
          
          var mortgage = parseFloat(pro) - parseFloat(funding);
          var mortgage_ratio = (parseFloat(mortgage) / parseFloat(pro)) * 100;
            mortgage_ratio = isNaN(mortgage_ratio) ? 0 : mortgage_ratio;
          var mortgage_comma = addCommasDirect(mortgage);

            mortgage_comma = isNaN(mortgage) ? 0 : mortgage_comma;


          $('#mortgage-fee-1').val(mortgage_comma);
          $('#morg-ratio').val(mortgage_ratio.toFixed(2));
        }
        //twelve_left_options();





        /*------------------Question-11-2---------------*/

        $("body").on('keyup','.property_value_1',function(){
            twelve_left_options_b();
        });

        $("body").on('keyup','.self_funding_1',function(){
            twelve_left_options_b();
        });

        $("body").on('keyup','.market_value',function(){

          var markets = $('.market_value').val();
          var market = markets.split(',').join("");
         
          if(market > 1800000){
           
            $('.market_value').val('1,800,000');
          }else{
             
            $('.market_value').val(markets);
          }
            twelve_left_options_b();
        });

        $("body").on('submit','form#formQuestionEleven_Two',function(){
          var gg = $('.eleven_user_id').val();
         formQuestionOne('form#formQuestionEleven_Two','/admin/question11_2','#ques_13','spinner-ques-11_2');
          ajax_question_twelve(gg);
          pmt_slider_ajax();
          return false;
        });



        function twelve_left_options_b(){
          
          var pro = $('.property_value_1').val();
          if (pro == null){
            var pro = 0;
          }else{
            var pro = pro.split(',').join("");
          }
          //var pro = pro.split(',').join("");
          var funding = $('.self_funding_1').val();
          if (funding == null){
            var funding = 0;
          }else{
            var funding = funding.split(',').join("");
          }
          //var funding = funding.split(',').join("");
          var market = $('.market_value').val();
          if (market == null){
            var market = 0;
          }else{
            var market = market.split(',').join("");
          }
          //var market = market.split(',').join("");

          var mortgage = parseFloat(pro) - parseFloat(funding);
          var mortgage_ratio = (parseFloat(mortgage) / parseFloat(market)) * 100;
          var mortgage_comma = addCommasDirect(mortgage);
          
          $('#mortgage-fee-1').val(mortgage_comma);
          $('#morg-ratio').val(mortgage_ratio.toFixed(2));
        }
        //twelve_left_options_b();

          var markets = $('.market_value').val();

          if (markets == null){
             var market = '0';
          }else{
            var market = markets.split(',').join("");
          }

          
          if(market > 1800000){
            $('.market_value').val('1,800,000');
          }else{
            $('.market_value').val(markets);
          }

        /*------------------Question-11-3---------------*/
        $("body").on('keyup','.property_value_2',function(){
            twelve_left_options_c();
        });

        $("body").on('keyup','.mortgage_fee',function(){
            twelve_left_options_c();
        });

         $("body").on('submit','form#formQuestionThirteen',function(){
          var gg = $('.eleven_user_id').val();
         formQuestionOne('form#formQuestionThirteen','/admin/question11_3','#ques_13','spinner-ques-11_3');
          ajax_question_twelve(gg);
          pmt_slider_ajax();
          return false;
        });


         function twelve_left_options_c(){
          
          var pro = $('.property_value_2').val();

            if (pro == null){
              var pro = 0;
            }else{
              var pro = pro.split(',').join("");
            }


          //var pro = pro.split(',').join("");
          var mortgagec = $('.mortgage_fee').val();

            if (mortgagec == null){
              var mortgage = 0;
            }else{
              var mortgage = mortgagec.split(',').join("");
            }


          //var mortgage = mortgagec.split(',').join("");
          
          // var mortgage = parseFloat(pro) - parseFloat(funding);
          var mortgage_ratio = (parseFloat(mortgage) / parseFloat(pro)) * 100;
          // var mortgage_comma = addCommasDirect(mortgage);
          
          $('#mortgage-fee-1').val(mortgagec);
          $('#morg-ratio').val(mortgage_ratio.toFixed(2));
        }
        //twelve_left_options_c();





         function ajax_question_twelve(gg){

            var url = '/admin/ajax_question_twelve'
                $.ajax({
                      type: "POST",
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: {'user_id':gg},
                    dataTYPE: 'json',
                    success: function(data)
                    {

                      //alert(data.status);
                        
                    }
                });
            return false;
          }



        /*------------------Question-12---------------*/


          /*pmt slider */


            function pmt_slider_ajax(){

            var url = '/admin/pmt_slider_ajax'
                $.ajax({
                    type: "POST",
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: {'user_id':1},
                    dataTYPE: 'json',
                    success: function(data)
                    {

                      console.log(data.data);
                      var tt = data.data;
                        $('.required_pmt_table_data_tr_one').html("");
                        $('.required_pmt_table_data_tr_one').append('<td>12.2 Req_NPER (Slider)</td>');
                        
                        $('.required_pmt_table_data_tr_two').html("");
                        $('.required_pmt_table_data_tr_two').append('<td>Mean Interest Bank: (A+B+E) / 3 at bank AA</td>');

                        $('.required_pmt_table_data_tr_three').html("");
                        $('.required_pmt_table_data_tr_three').append('<td>12.1 Req_PMT (Slider)</td>');


                        $.each(tt, function() {
                              var one = this.prime;
                              var two = this.const_inter_linked;
                              var three = this.var_inter_5year_unlinked;
                              var total = (parseFloat(one) + parseFloat(two) + parseFloat(three)) / 3;
                              var fixed_total = total.toFixed(2);
                              var time = this.years;
                              $('.required_pmt_table_data_tr_one').append('<td>'+time+'</td>');
                              $('.required_pmt_table_data_tr_two').append('<td>'+fixed_total+'</td>');
                              $('.required_pmt_table_data_tr_three').append('<td>'+pmtcalc_for_slider(twelve_ka_funda(),fixed_total,time)+'</td>');
                        });

                        
                    }
                });
            return false;
          }

          pmt_slider_ajax();


        function twelve_ka_funda(){
          var tt = $('input[name=why_mortgage]:checked').val();

          if(tt == 'any_cause'){
              var cc = $('#mortgage-fee').val();
              if (cc == null){
                  var mortgage = 0;
                }else{
                  var mortgage = cc.split(',').join("");
                }
              //var mortgage = cc.split(',').join('');  


            }else if(tt == 'mistaken_program'){
              
              var cc2 = $('#self-funding-1').val();
              if (cc2 == null){
                  var cc2 = 0;
                }else{
                  var cc2 = cc2.split(',').join("");
                }
              //var cc2 = cc2.split(',').join('');
              var cc1 = $('#property-value-1').val();
              if (cc1 == null){
                  var cc1 = 0;
                }else{
                  var cc1 = cc1.split(',').join("");
                }
              //var cc1 = cc1.split(',').join('');

              var mortgage = parseInt(cc1) - parseInt(cc2);

            }else{
              var cc2 = $('#self-funding').val();
              if (cc2 == null){
                  var cc2 = 0;
                }else{
                  var cc2 = cc2.split(',').join("");
                }
             // var cc2 = cc2.split(',').join('');
              var cc1 = $('#property-value').val();
              if (cc1 == null){
                  var cc1 = 0;
                }else{
                  var cc1 = cc1.split(',').join("");
                }
              //var cc1 = cc1.split(',').join('');

              var mortgage = parseInt(cc1) - parseInt(cc2);
            }

            return mortgage;
        }
        


        //formQuestionOne('form#formQuestionfourteen','<?= url("/question14") ?>','#ques_18','spinner-ques-13');
        $("body").on('keyup','.monthly_refund_input_slide',function(){
          formQuestionOne('form#formQuestionfourteen','/admin/question14','#ques_18','spinner-ques-13');
          thirty_nine_wala_fun();
          req_grace_tenth();
        });

        $("body").on('keyup','.monthly_refund_input',function(){
          formQuestionOne('form#formQuestionfourteen','/admin/question14','#ques_18','spinner-ques-13');
          thirty_nine_wala_fun();
        });




        var val_mortgage_fee = $('#mortgage-fee-1').val();
        var val_mortgage_fee = addCommasDirect(val_mortgage_fee);
        $('#mortgage-fee-1').val(val_mortgage_fee);


        /*______________________Question-13___________________*/

        $("body").on('submit','form#formQuestionfifteen',function(){
          formQuestionOne('form#formQuestionfifteen','/admin/question15','#ques_18','spinner-ques-14');
          alert_fancy_data_saved();
          return false;
        });

        $("body").on('change','.repay_another',function(){
          sortthirteen();
        });

        // $("body").on('change','#val13_1_1',function(){
        //   sortthirteen();
        // });

        // $("body").on('change','#val13_1_2',function(){
        //   sortthirteen();
        // });
        


        /*----------------------------Question 14-----------------------------------*/


        $("body").on('submit','form#formQuestionsixteen',function(){
          formQuestionOne('form#formQuestionsixteen','/admin/question16','#ques_18','spinner-ques-14');
          alert_fancy_data_saved();
          return false;
        });


        $(document).ready(function(){
          //pmtcalc('loan_balance_1','loan_time1','loan_interest1','pmt1');
          //pmtcalc('loan_balance_2','loan_time2','loan_interest2','pmt2');
          //pmtcalc('loan_balance_3','loan_time3','loan_interest3','pmt3');


        });



        $("body").on('keyup','.loan_balance_1',function(){
          //pmtcalc('loan_balance_1','loan_time1','loan_interest1','pmt1');
          extra_fourteen_fields();
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_time1',function(){
          //pmtcalc('loan_balance_1','loan_time1','loan_interest1','pmt1');
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_interest1',function(){
          //pmtcalc('loan_balance_1','loan_time1','loan_interest1','pmt1');
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_balance_2',function(){
         // pmtcalc('loan_balance_2','loan_time2','loan_interest2','pmt2');
          extra_fourteen_fields();
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_time2',function(){
          //pmtcalc('loan_balance_2','loan_time2','loan_interest2','pmt2');
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_interest2',function(){
         // pmtcalc('loan_balance_2','loan_time2','loan_interest2','pmt2');
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_balance_3',function(){
          //pmtcalc('loan_balance_3','loan_time3','loan_interest3','pmt3');
          extra_fourteen_fields();
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_time3',function(){
         // pmtcalc('loan_balance_3','loan_time3','loan_interest3','pmt3');
           extra_fourteen_fields_pmt();
          return false;
        });

        $("body").on('keyup','.loan_interest3',function(){
         // pmtcalc('loan_balance_3','loan_time3','loan_interest3','pmt3');
           extra_fourteen_fields_pmt();
          return false;
        });
        


        function extra_fourteen_fields(){
          var first = $('.loan_balance_1').val();

          if (first == null){
            var first = 0;
          }else{
            var first = first.split(',').join("");
          }

          //var first = first.split(',').join('');
          if(first == ""){
            first = 0;
          }
          //alert(first);

          var second = $('.loan_balance_2').val();

          if (second == null){
            var second = 0;
          }else{
            var second = second.split(',').join("");
          }

          //var second = second.split(',').join('');
          if(second == ""){
            second = 0;
          }
          //alert(second);

          var third = $('.loan_balance_3').val();

          if (third == null){
            var third = 0;
          }else{
            var third = third.split(',').join("");
          }

          //var third = third.split(',').join('');
          if(third == ""){
            third = 0;
          }
          //alert(third);

          var array_find = [first, second, third];
          var sum = parseInt(first) + parseInt(second) + parseInt(third) ;
          
          //var greatest = Math.max.apply(Math, array_find);
          //var total = parseInt(sum) - parseInt(greatest);

          var total = parseInt(sum);
          //alert(total);

          $('.loan_fee_sum_fourteen').val(addCommasDirect(total));



         // loan_fee_sum_fourteen
        //monthly_return_sum_fourteen

        }
        extra_fourteen_fields();

        function extra_fourteen_fields_pmt(){


          setTimeout(function(){ 

          var first = $('.pmt1').val();
          //var first = first.split(',').join('');
          if (first == null){
            var first = 0;
          }else{
            var first = first.split(',').join("");
          }

          if(first == ""){
            first = 0;
          }
          //alert(first);

          var second = $('.pmt2').val();
          if (second == null){
            var second = 0;
          }else{
            var second = second.split(',').join("");
          }

          //var second = second.split(',').join('');
          if(second == ""){
            second = 0;
          }
          //alert(second);

          var third = $('.pmt3').val();
          if (third == null){
            var third = 0;
          }else{
            var third = third.split(',').join("");
          }
          //var third = third.split(',').join('');
          if(third == ""){
            third = 0;
          }
          //alert(third);

          var array_find = [first, second, third];
          var sum = parseFloat(first) + parseFloat(second) + parseFloat(third) ;
        
          //var greatest = Math.max.apply(Math, array_find);
          //var total = parseFloat(sum) - parseFloat(greatest);
          var total = parseInt(sum);
          $('.monthly_return_sum_fourteen').val(addCommasDirect(total));

           }, 100);

        }
        extra_fourteen_fields_pmt();





         /*----------------------------Question 15-----------------------------------*/

        $("body").on('submit','form#formQuestionSeventeenDIV',function(){
          formQuestionOne('form#formQuestionSeventeenDIV','/admin/question17','#ques_18','spinner-ques-14');
          alert_fancy_data_saved();
          return false;
        });

        $(document).ready(function(){
         
          pmtcalc('loanfee_aa','interest_aa','loantime_aa','mr_one');
          pmtcalc('loanfee_dd','interest_dd','loantime_dd','mr_two');
          pmtcalc('loanfee_ee','interest_ee','loantime_ee','mr_three');
        
          pmtcalc('loan_fee_15_1','interest_15_1','loan_time_15_1','pmt_15_1');
          pmtcalc('loan_fee_15_2','interest_15_2','loan_time_15_2','pmt_15_2');
          pmtcalc('loan_fee_15_3','interest_15_3','loan_time_15_3','pmt_15_3');

          
        });


        $("body").on('keyup','.loan_fee_15_1',function(){
          pmtcalc('loan_fee_15_1','interest_15_1','loan_time__15_1','pmt_15_1');
          run_fifteen_extra_fields();
          return false;
        });

        $("body").on('keyup','.loan_time_15_1',function(){
          pmtcalc('loan_fee_15_1','interest_15_1','loan_time_15_1','pmt_15_1');
          run_fifteen_extra_fields();
          return false;
        });

        $("body").on('keyup','.interest_15_1',function(){
          pmtcalc('loan_fee_15_1','interest_15_1','loan_time_15_1','pmt_15_1');
          run_fifteen_extra_fields();
          return false;
        });

        $("body").on('keyup','.loan_fee_15_2',function(){
          pmtcalc('loan_fee_15_2','interest_15_2','loan_time_15_2','pmt_15_2');
          run_fifteen_extra_fields();
          return false;
        });

        $("body").on('keyup','.loan_time_15_2',function(){
          pmtcalc('loan_fee_15_2','interest_15_2','loan_time_15_2','pmt_15_2');
          run_fifteen_extra_fields();
          return false;
        });

        $("body").on('keyup','.interest_15_2',function(){
          pmtcalc('loan_fee_15_2','interest_15_2','loan_time_15_2','pmt_15_2');
          run_fifteen_extra_fields();
          return false;
        });




        $("body").on('keyup','.loan_fee_15_3',function(){
          pmtcalc('loan_fee_15_3','interest_15_3','loan_time_15_3','pmt_15_3');
          return false;
        });

        $("body").on('keyup','.loan_time_15_3',function(){
          pmtcalc('loan_fee_15_3','interest_15_3','loan_time_15_3','pmt_15_3');
          return false;
        });

        $("body").on('keyup','.interest_15_3',function(){
          pmtcalc('loan_fee_15_3','interest_15_3','loan_time_15_3','pmt_15_3');
          return false;
        });



        var val_mortgage_fee = $('.loanfee_aa').val();
        var val_mortgage_fee = addCommasDirect(val_mortgage_fee);
        $('.loanfee_aa').val(val_mortgage_fee);

        var val_mortgage_fee = $('.loanfee_dd').val();
        var val_mortgage_fee = addCommasDirect(val_mortgage_fee);
        $('.loanfee_dd').val(val_mortgage_fee);

        var val_mortgage_fee = $('.loanfee_ee').val();
        var val_mortgage_fee = addCommasDirect(val_mortgage_fee);
        $('.loanfee_ee').val(val_mortgage_fee);









        /*----------------------------Question 16-----------------------------------*/

        $("body").on('submit','form#formQuestionEighteen',function(){
          formQuestionOne('form#formQuestionEighteen','/admin/question18','#ques_18','spinner-ques-14');
          return false;
        });


        var one = $('body').find('.current_marriage').val();
          if (one == null){
             var one = '0';
          }else{
            var one = one.split('/');
          }

        var two = $('body').find('.children').val();
          if (two == null){
             var two = '0';
          }else{
            var two = two.split('/');
          }

        var three = $('body').find('.siblings').val();
          if (three == null){
             var three = '0';
          }else{
            var three = three.split('/');
          }

        var four = $('body').find('.national_service_time').val();
          if (four == null){
             var four = '0';
          }else{
            var four = four.split('/');
          }

        var five = $('body').find('.military_service_time_women').val();
          if (five == null){
             var five = '0';
          }else{
            var five = five.split('/');
          }






        var total = parseInt(four[0]) + parseInt(five[0]);
        
        $('.one').val(one[0]);
        $('.two').val(two[0]);
        $('.three').val(three[0]);
        $('.four').val(total);

        /*Showed values with on chnage function*/
        $('body').find('.current_marriage').on('change',function(){
            var one = $(this).val().split('/');
           $('.one').val(one[0]);
            finalcalcSixteen();

        });

        $('body').find('.children').on('change',function(){
            var two = $(this).val().split('/');
           $('.two').val(two[0]);
            finalcalcSixteen();

        });

        $('body').find('.siblings').on('change',function(){
            var three = $(this).val().split('/');
           $('.three').val(three[0]);
            finalcalcSixteen();

        });

        $('body').find('.national_service_time').on('change',function(){
            var four = $(this).val().split('/');
            var five = $('body').find('.military_service_time_women').val().split('/');
            var total = parseInt(four[0]) + parseInt(five[0]);
            $('.four').val(total);
             finalcalcSixteen();


        });

        $('body').find('.military_service_time_women').on('change',function(){
            var five = $(this).val().split('/');
            var four = $('body').find('.national_service_time').val().split('/');
            var total = parseInt(four[0]) + parseInt(five[0]);
            $('.four').val(total);
             finalcalcSixteen();


        });



        function finalcalcSixteen(){

            // var one = $('body').find('.current_marriage').val().split('/');
            // var two = $('body').find('.children').val().split('/');
            // var three = $('body').find('.siblings').val().split('/');
            // var four = $('body').find('.national_service_time').val().split('/');
            // var five = $('body').find('.military_service_time_women').val().split('/');

            var one = $('body').find('.current_marriage').val();
              if (one == null){
                 var one = '0';
              }else{
                var one = one.split('/');
              }

            var two = $('body').find('.children').val();
              if (two == null){
                 var two = '0';
              }else{
                var two = two.split('/');
              }

            var three = $('body').find('.siblings').val();
              if (three == null){
                 var three = '0';
              }else{
                var three = three.split('/');
              }

            var four = $('body').find('.national_service_time').val();
              if (four == null){
                 var four = '0';
              }else{
                var four = four.split('/');
              }

            var five = $('body').find('.military_service_time_women').val();
              if (five == null){
                 var five = '0';
              }else{
                var five = five.split('/');
              }








            var suntotalFourFive = parseInt(four[0]) + parseInt(five[0]);
            var total_points = parseInt(one[0]) + parseInt(two[0]) + parseInt(three[0]);
            var elegibility_score = ""; 

              if(total_points >= 599 && total_points <= 999 ){
                elegibility_score = 54240;
              }else if(total_points >= 1000 && total_points <= 1399){
                elegibility_score = 62400;
              }else if(total_points >= 1400 && total_points <= 1499){
                elegibility_score = 74350;
              }else if(total_points >= 1500 && total_points <= 1599){
                elegibility_score = 85250;
              }else if(total_points >= 1600 && total_points <= 1699){
                elegibility_score = 96190;
              }else if(total_points >= 1700 && total_points <= 1799){
                elegibility_score = 107090;
              }else if(total_points >= 1800 && total_points <= 1899){
                elegibility_score = 117985;
              }else if(total_points >= 1900 && total_points <= 1999){
                elegibility_score = 128930;
              }else if(total_points >= 2000 && total_points <= 2099){
                elegibility_score = 139825;
              }else if(total_points >= 2100 && total_points <= 2199){
                elegibility_score = 150720;
              }else if(total_points >= 2200){
                  elegibility_score = 161665;
              }else{
                  elegibility_score = 0;
              }

            //alert(elegibility_score);
            var army_score = parseInt( elegibility_score) * parseInt(suntotalFourFive)/100;
            //alert(army_score);
            var final_score = parseInt(army_score) + parseInt(elegibility_score);
            //alert(final_score);
            $('#total-points').val(addCommasDirect(total_points));
            $('#basic-score').val(addCommasDirect(elegibility_score));
            $('#army-score').val(addCommasDirect(army_score));
            $('#eligibility-score').val(addCommasDirect(final_score));


        }
       finalcalcSixteen();


        /*sixteen elegibility button*/

        function elegibilty_admin_sixteen(){

          var nine = $("input[name='status_of_mortgage']:checked"). val();
          //alert(nine);
          var two = $("input[name=que2]:checked"). val();
          //alert(two);

          if(nine == "first_aprt" && two == "No"){

            $('.button-green').addClass('bnb-jatt-green-kr');
             $('.button-red').removeClass('bnb-jatt-red-kr');

          }else{
            $('.button-red').addClass('bnb-jatt-red-kr');
             $('.button-green').removeClass('bnb-jatt-green-kr');
          }

        }
        elegibilty_admin_sixteen();





          function sortthirteen(){

            var val13_1 = $('#val13_0').val();
            var val13_2 = $('#val13_1').val();
            var val13_3 = $('#val13_2').val();
            var val13_1_1 = $('#val13_1_0').val();
            var val13_1_2 = $('#val13_1_1').val();
            var val13_1_3 = $('#val13_1_2').val();


            var myArray = [
                  [val13_1, val13_1_1],
                  [val13_2, val13_1_2],
                  [val13_3, val13_1_3]
              ];

              myArray.sort(function(a, b) {
                  return a[1] - b[1];
              });

              var index, entry;
              for (index = 0; index < myArray.length; ++index) {
                  entry = myArray[index];
                  console.log(index + ": " + entry[0] + " - " + entry[1]);


                  $('#val13_'+index).val(entry[0]);
                  $('#val13_1_'+index).val(entry[1]);

              }
          }

          sortthirteen();







        /*__________________________________________________________________________
        |
        | AJAX FOR SUBMITTING THE FORMS
        |___________________________________________________________________________
        */

        function formQuestionOne(formID,url,LoadDiv='#ques_1',spinner='spinner-get-started') { 
            var formData = $( formID ).serialize();
                $.ajax({
                   type: "POST",
                   url: url,
                   data: formData, 
                   success: function(data)
                    {
                        if(data.status == 1){
                          $(formID).find('.eleven_errMsg').html('');
                        }

                        else if(data.status == 0){
                            $(formID).find('.errMsg').html(errors(data.errors));
                        }else if(data.status == 1121){
                          $(formID).find('.eleven_errMsg').html('שווי שוק של הנכס צריך להיות גדול מעלות הנכס‎');
                        }else if(data.status == 1122){
                          $(formID).find('.eleven_errMsg').html('עלות הנכס צריכה להיות גדולה מגובה ההון העצמי שלך‎');
                        }

                    }
                });
            return false;
        }

        function errors(errors) {

            text ='<ol>';
            $.each(errors,function(k,v){
               text +='<li>'+v+'</li>';
            });
            text +='</ol>';
            return text;
        }
    });
$(document).ready(function(){
  $("#langsel").on("change", function(){
    
   
    if($(this).val() == "Admin Hebrew"){
      window.location.replace("/admin/settings-hr");

    }
    else{
      window.location.replace("/admin/settings");
    }
    
  });

  $(".main-button-reset").on("click", function(){
    window.location.replace("/admin/dashboard");
  })
});



function pmtcalc(val1,val2,val3,val4){

        var loan = $("."+val1).val(); 
        var loan = loan.split(',').join(''); 
        var apr = $("."+val2).val();
        var apr = apr.split(',').join(''); 
        var term = $("."+val3).val();
        var term = term.split(',').join(''); 
        apr = apr/1200;
        term = term*12;

        var amount = apr * -loan * Math.pow((1 + apr), term) / (1 - Math.pow((1 + apr), term));
        amount = isNaN(amount) ? 0 : amount;
        amount = addCommasDirect(amount.toFixed(2));
        $("."+val4).val(amount);
}




function pmtcalc_for_slider(val1,val2,val3){

        var loan = val1; 
        var apr = val2; 
        var term = val3; 
        apr = apr/1200;
        term = term*12;

        var amount = apr * -loan * Math.pow((1 + apr), term) / (1 - Math.pow((1 + apr), term));

        amount = isNaN(amount) ? 0 : amount;
        amount = parseInt(amount);
        amount = addCommasDirect(amount);

        return amount;

}

/*-------------------------------------------------------*/
   //AJAX for customer status filter
/*-------------------------------------------------------*/

    // $('#loader-global').show();
   
        $('select[name="status_check"]').on('change', function() {
            var sts = $(this).val();
           // alert(sts);
            if(sts == "show all"){
            //  alert(sts);
                window.location.href =  "/admin/dashboard";  
            }
            else if(sts == "in progress"){
               url = '/admin/status_filter/8';
            if(sts) {
                $.ajax({
                    url: url,
                    type: "GET",
                    dataTYPE: 'json',
                  
                    success:function(response) {
                        tt = response.data; 
                  $("#customerTable").remove();
                       

                        $("#customer-table-append").append('<table id="customerTable" style="text-align: center;"><thead><tr><th>Customer # <i class="fa fa-sort" aria-hidden="true"></i></th><th style="display: none;">Register Time <i class="fa fa-sort" aria-hidden="true"></i></th><th>Register Time <i class="fa fa-sort" aria-hidden="true"></i></th><th>First Name <i class="fa fa-sort" aria-hidden="true"></i></th><th>Last name <i class="fa fa-sort" aria-hidden="true"></i></th><th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th><th>Phone <i class="fa fa-sort" aria-hidden="true"></i></th><th style="display: none;">Payment time <i class="fa fa-sort" aria-hidden="true"></i></th><th>Payment time <i class="fa fa-sort" aria-hidden="true"></i></th><th>Price (NIS) <i class="fa fa-sort" aria-hidden="true"></i></th><th>Download invoice <i class="fa fa-sort" aria-hidden="true"></i></th><th>Registration</th><th>Payed</th><th>My Offers</th><th>Bank Info</th><th>Compare Offer</th><th>Download Offer <i class="fa fa-sort" aria-hidden="true"></i></th><th>Bank name <i class="fa fa-sort" aria-hidden="true"></i></th> <th>Delete</th></tr></thead><tbody class="data-app">');

                        $.each(tt, function() {
                            $('.data-app').append('<tr><td>'+this.user_id+'</td><td>'+this.id+'</td><td>'+this.created_at+'</td><td>'+this.first_name+'</td><td>'+this.last_name+'</td><td>'+this.email+'</td><td>'+this.phone_number+'</td><td>'+'22/04/2019'+'</td><td>'+'700'+'</td><td>'+'<a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a>'+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-yellow></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-green></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-green></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-grey></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-grey></span></a>"+'</td></tr>');
                        });
                        $("#customerTable").append('</tbody></table>');                  
                    }
                });
            }

            }
            else{
                 url = '/admin/status_filter/15';
            if(sts) {
                $.ajax({
                    url: url,
                    type: "GET",
                    dataTYPE: 'json',
                  
                    success:function(response) {
                        tt = response.data; 
                  $("#customerTable").remove();
                       

                        $("#customer-table-append").append('<table id="customerTable" style="text-align: center;"><thead><tr><th>Customer # <i class="fa fa-sort" aria-hidden="true"></i></th><th style="display: none;">Register Time <i class="fa fa-sort" aria-hidden="true"></i></th><th>Register Time <i class="fa fa-sort" aria-hidden="true"></i></th><th>First Name <i class="fa fa-sort" aria-hidden="true"></i></th><th>Last name <i class="fa fa-sort" aria-hidden="true"></i></th><th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th><th>Phone <i class="fa fa-sort" aria-hidden="true"></i></th><th style="display: none;">Payment time <i class="fa fa-sort" aria-hidden="true"></i></th><th>Payment time <i class="fa fa-sort" aria-hidden="true"></i></th><th>Price (NIS) <i class="fa fa-sort" aria-hidden="true"></i></th><th>Download invoice <i class="fa fa-sort" aria-hidden="true"></i></th><th>Registration</th><th>Payed</th><th>My Offers</th><th>Bank Info</th><th>Compare Offer</th><th>Download Offer <i class="fa fa-sort" aria-hidden="true"></i></th><th>Bank name <i class="fa fa-sort" aria-hidden="true"></i></th> <th>Delete</th></tr></thead><tbody class="data-app">');

                        $.each(tt, function() {
                            $('.data-app').append('<tr><td>'+this.id+'</td><td>'+this.id+'</td><td>'+this.created_at+'</td><td>'+this.first_name+'</td><td>'+this.last_name+'</td><td>'+this.email+'</td><td>'+this.phone_number+'</td><td>'+'22/04/2019'+'</td><td>'+'700'+'</td><td>'+'<a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a>'+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-yellow></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-green></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-green></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-grey></span></a>"+'</td><td>'+"<a href=/admin/registration/{{$user->id}}><span class=indicator i-grey></span></a>"+'</td></tr>');
                        });
                        $("#customerTable").append('</tbody></table>');                  
                    }
                });
            }
            }

           
    });

  

 

  function thirty_nine_wala_fun(){
    var twelve_one = $('.monthly_refund_input_slide').val();
    if (twelve_one == null){
      var twelve_one = 0;
    }else{
      var twelve_one = twelve_one.split(',').join("");
    }
    var second = $('#total_monthly_pay').val();
     if (second == null){
      var second = 0;
    }else{
      var second = second.split(',').join("");
    }
    var four = $('#net_income').val();
    if (four == null){
      var four = 0;
    }else{
      var four = four.split(',').join("");
    }
    var sum = parseFloat(twelve_one) + parseFloat(second);
    //alert(sum);
    var tt = parseFloat(sum) / parseFloat(four);
    //alert(tt);
    var final = parseFloat(tt) * 100;
   // alert(final);
    var final = final.toFixed(2);
    //alert(final);
    final = isNaN(final) ? 0 : final;

    if(final > 39){
      $('body').find('#income-ratio').addClass("make_it_red_12_3");
      $('body').find('#income-ratio').val(final);
   }else{
      $('body').find('#income-ratio').removeClass("make_it_red_12_3");
      $('body').find('#income-ratio').val(final);
   }
  }
  thirty_nine_wala_fun();



  function req_grace_tenth(){
    var five_val = $('.stable_statuss').find(":selected").text();


      if(five_val == "Yes"){
        var twelth_pmt_slider = $('.monthly_refund_input_slide').val();
        
        if(twelth_pmt_slider == ""){
          $('.req_grace').val('0');
        }else{
          $('.req_grace').val(twelth_pmt_slider);
        }
      }else{
        var twelth_pmt_slider = $('.monthly_refund_input_slide').val();
        if (twelth_pmt_slider == null){
          var twelth_pmt_slider = 0;
        }else{
          var twelth_pmt_slider = twelth_pmt_slider.split(',').join("");
        }
        var average = $('#average-savings').val();
        if (average == null){
          var average = 0;
        }else{
          var average = average.split(',').join("");
        }
        if(average == ""){
          average = 0;
        }
        var total = parseInt(twelth_pmt_slider) - parseInt(average);
        //alert(total);
        $('.req_grace').val(addCommasDirect(total));
      }  
  }
  req_grace_tenth();


 

  function enslavement_values(){

    var nine = $('input[name=status_of_mortgage]:checked').val();

    var eight = $('input[name=why_mortgage]:checked').val();

    var first = $('input[name=living_location]:checked').val();

          if(eight == 'any_cause'){
              
            $('#regulation-table-percent, #regulation_table_value').val('50');

          }else if(eight == 'mistaken_program'){
              
            $('#regulation-table-percent, #regulation_table_value').val('75');

          }else{

        //     if (twelth_pmt_slider == null){
        //   var twelth_pmt_slider = 0;
        // }else{
        //   var twelth_pmt_slider = twelth_pmt_slider.split(',').join("");
        // }
             
              if(first == "rental_aprt" || first == "free_aprt"){

                $('#regulation-table-percent, #regulation_table_value').val('75');

              }else{

                if(nine == 'investor'){

                  $('#regulation-table-percent, #regulation_table_value').val('50');

                }else if(nine == 'asset_improver'){

                  $('#regulation-table-percent, #regulation_table_value').val('70');

                }else{

                  $('#regulation-table-percent, #regulation_table_value').val('75');

                }


              }

          }
  }
  enslavement_values();




function extra_fields_fifteen(){


    var loan_fee1 = $(".loan_fee_15_1").val();
    if(loan_fee1 == ""){
      loan_fee1 = 0;
    }else{
      loan_fee1 = loan_fee1.split(',').join("");
    } 

    var loan_fee2 = $(".loan_fee_15_2").val();
    if(loan_fee2 == ""){
      loan_fee2 = 0;if (twelth_pmt_slider == null){
          var twelth_pmt_slider = 0;
        }else{
          var twelth_pmt_slider = twelth_pmt_slider.split(',').join("");
        }
    }else{
      loan_fee2 = loan_fee2.split(',').join("");
    } 

    var loan_fee3 = $(".loan_fee_15_3").val();
    if(loan_fee3 == ""){
      loan_fee3 = 0;
    }else{
      loan_fee3 = loan_fee3.split(',').join("");
    } 

    var loan_fee4 = $(".loanfee_aa").val();
    if(loan_fee4 == "" || $(".loanfee_aa").hasClass('red')){
      loan_fee4 = 0;
    }else{
      loan_fee4 = loan_fee4.split(',').join("");
    } 

    var loan_fee5 = $(".loanfee_dd").val();
    if(loan_fee5 == "" || $(".loanfee_dd").hasClass('red')){
      loan_fee5 = 0;
    }else{
      loan_fee5 = loan_fee5.split(',').join("");
    } 

    var loan_fee6 = $(".loanfee_ee").val();
    if(loan_fee6 == "" || $(".loanfee_ee").hasClass('red')){
      loan_fee6 = 0;
    }else{
      loan_fee6 = loan_fee6.split(',').join("");
    } 


    var total_loan_fee = parseInt(loan_fee1) + parseInt(loan_fee2) + parseInt(loan_fee3) + parseInt(loan_fee4) + parseInt(loan_fee5) + parseInt(loan_fee6);

    $('#fifteen_total_sum_loan').val(addCommasDirect(total_loan_fee));


    /******************PMT*********************/


    var pmt_15_1 = $(".pmt_15_1").val();
    if(pmt_15_1 == ""){
      pmt_15_1 = 0;
    }else{
      pmt_15_1 = pmt_15_1.split(',').join("");
    } 

    //alert(pmt_15_1);

    var pmt_15_2 = $(".pmt_15_2").val();
    if(pmt_15_2 == ""){
      pmt_15_2 = 0;
    }else{
      pmt_15_2 = pmt_15_2.split(',').join("");
    } 

    var pmt_15_3 = $(".pmt_15_3").val();
    if(pmt_15_3 == ""){
      pmt_15_3 = 0;
    }else{
      pmt_15_3 = pmt_15_3.split(',').join("");
    } 

    var mr_one = $(".mr_one").val();

    if(mr_one == "" || $(".mr_one").hasClass('red')){
      //alert('1');
      mr_one = 0;
    }else{
      mr_one = mr_one.split(',').join("");
    } 

    var mr_two = $(".mr_two").val();
    if(mr_two == "" || $(".mr_two").hasClass('red')){
     // alert('2');
      mr_two = 0;
    }else{
      mr_two = mr_two.split(',').join("");
    } 

    var mr_three = $(".mr_three").val();
    if(mr_three == "" || $(".mr_three").hasClass('red')){
      //alert('3');
      mr_three = 0;
    }else{
      mr_three = mr_three.split(',').join("");
    } 
// alert(pmt_15_1);

    var total_pmt = parseFloat(pmt_15_1) + parseFloat(pmt_15_2) + parseFloat(pmt_15_3) + parseFloat(mr_one) + parseFloat(mr_two) + parseFloat(mr_three);
    //alert(total_pmt);
    $('#fifteen_monthly_return').val(addCommasDirect(total_pmt.toFixed(2)));

}

function run_fifteen_extra_fields(){

  setTimeout (function(){
    extra_fields_fifteen();
  },'350');

}

run_fifteen_extra_fields();









        



/*CUSTOM COMMA FOR INPUT FIELDS REGISTARTION FORM*/

function addCommas(nStr) {
      return nStr.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



function addCommasDirect(nStr){
  

  if (nStr == null){
     return false;
  }else{
    return nStr.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }


  

}



// /*******************************************REPOT PAGE JS*******************************************************/


// /*for 20.1*/
// function twenty_first(){

//   setTimeout (function(){
//     var one = $('#mortgage-fee-1-report').val();
//     if (one == null){
//       var one = 0;
//     }else{
//       var one = one.split(',').join("");
//     }

//     var two = $('#loan_fee_sum_fourteen').val();
//     if (two == null){
//       var two = 0;
//     }else{
//       var two = two.split(',').join("");
//       }

//     var three = $('#fifteen_total_sum_loan').val();
//     if (three == null){
//       var three = 0;
//     }else{
//       var three = three.split(',').join("");
//     }


//     var four = $('input[name=other_loan_14]:checked').val();
//     var five = $('input[name=additional_loans]:checked').val();


//         if(four == 'yes'){

//           two = two

//         }else{

//           two = 0;
//         }

//         if(five == 'yes'){

//           three = three

//         }else{

//           three = 0;
//         }




//     var total = parseInt(one) + parseInt(two) + parseInt(three);

//    // alert(total);


//     $('#new_mortgage_algo_value').val(addCommasDirect(total));
//   },'370');

// }
// twenty_first();








// /*for 20.2*/
// function twenty_second(){

//   setTimeout (function(){
//     var one = $('#wanted-mr').val();
//     if (one == null){
//       var one = 0;
//     }else{
//       var one = one.split(',').join("");
//     }
// //alert(one);
//     var two = $('#monthly_return_sum_fourteen').val();
//     if (two == null){
//       var two = 0;
//     }else{
//       var two = two.split(',').join("");
//       }
// //alert(two);
//     var three = $('#fifteen_monthly_return').val();
//     if (three == null){
//       var three = 0;
//     }else{
//       var three = three.split(',').join("");
//     }
// //alert(three);

//     var four = $('input[name=other_loan_14]:checked').val();
//     var five = $('input[name=additional_loans]:checked').val();


//         if(four == 'yes'){

//           two = two

//         }else{

//           two = 0;
//         }

//         if(five == 'yes'){

//           three = three

//         }else{

//           three = 0;
//         }


//     var total = parseInt(one) + parseInt(two) + parseFloat(three);
// //alert(total);

//     $('#new_pmt_algo_value').val(addCommasDirect(parseInt(total)));
//   },'500');

// }
// twenty_second();

// function twenty_three(){

//   setTimeout (function(){
//     var one = $('#market-value-').val();
//       if (one == null){
//         var one = 0;
//       }else{
//         var one = one.split(',').join("");
//       }
//     var two = $('#property-value-1-').val();
//       if (two == null){
//         var two = 0;
//       }else{
//         var two = two.split(',').join("");
//       }

//     var three = $('#new_mortgage_algo_value').val();
//       if (three == null){
//         var three = 0;
//       }else{
//         var three = three.split(',').join("");
//       }
  
//     if(parseInt(one) == 0){
//       var total = (parseFloat(three) / parseFloat(two)) * 100;
//     }else{
//       var total = (parseFloat(three) / parseFloat(one)) * 100;
//     }

//     $('#morg_ratio_value').val(addCommasDirect(parseInt(total)));

//   },'600');

// }
// twenty_three();


// function twenty_five_six(){

//   setTimeout (function(){
//     var one = $('#morg_ratio_value').val();
//       if (one == null){
//         var one = 0;
//       }else{
//         var one = one.split(',').join("");
//       }
//     var two = $('#regulation_table_value').val();
//       if (two == null){
//         var two = 0;
//       }else{
//         var two = two.split(',').join("");
//       }

//     if(parseInt(one) > parseInt(two) ){
//       $('#need_enslavement_yes').attr('checked',true);
//       var total = parseFloat(one) - parseFloat(two);
//       $('#min_ens').val(addCommasDirect(parseInt(total)));

//     }else{
//       $('#need_enslavement_no').attr('checked',true);
//       var total = 0;
//       $('#min_ens').val(addCommasDirect(parseInt(total)));
//     }

//   },'610');

// }
// twenty_five_six();


// // function customer_banks_report(){

// //   var val = $('input[name=bank_account]:checked').val();

// //   change_bank_interest(val);

// // }


// function customer_banks_report() {
//   var val = ""; 

//   var favorite = [];

//   $(".bank_account1:checked").each(function(){
//       favorite.push($(this).data("id"));
//   });

//   val = favorite[favorite.length-1];

//   var url = '/admin/admin_ques_six_ajax'
//   $.ajax({
//         type: "POST",
//         headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       },
//       url: url,
//       data: {'bank_name':val},
//       dataTYPE: 'json',
//       success: function(data)
//       {

//         //alert(data.discount);
//           if(data.status == 1){

//             $('#bank_customer_discount').html('<h3 class="blue-color">Discount (For The Bank Customers)</h3><div class="form-group"><input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" value="'+data.discount+'" /><span class="indicator i-green">1</span></div>');

//           }else if(data.status == 0){

//              $('#bank_customer_discount').html('<h3 class="blue-color">Discount (For The Bank Customers)</h3><div class="form-group"><input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" value="'+data.discount+'" /><span class="indicator i-red">1</span></div>');


//           }else{

//             $('#bank_customer_discount').html('<h3 class="blue-color">Discount (For The Bank Customers)</h3><div class="form-group"><input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" value="'+data.discount+'" /><span class="indicator i-grey">1</span></div>');

//           }
//       }
//   });
// }
// customer_banks_report();

//  function funding_tree(){
//       setTimeout (function(){
//         var prop_val = $("#property-value-1-").val();

//          if (prop_val == null){
//             var prop_val = 0;
//          }else{
//             var prop_val = prop_val.split(',').join("");
//          }


//          var mor_algo_val = $("#new_mortgage_algo_value").val();

//          if (mor_algo_val == null){
//             var mor_algo_val = 0;
//          }else{
//             var mor_algo_val = mor_algo_val.split(',').join("");
//          }


//          //alert(prop_val);

//         var prop_mark_value = $("#market-value-").val();

//          if (prop_mark_value == null){
//             var prop_mark_value = 0;
//          }else{
//             var prop_mark_value = prop_mark_value.split(',').join("");
//          }

//         // alert(prop_mark_value);


//         var morg_ratio = $("#morg_ratio_value").val();

//          if (morg_ratio == null){
//             var morg_ratio = 0;
//          }else{
//             var morg_ratio = morg_ratio.split(',').join("");
//          }

//          //alert(morg_ratio);

//         var regulation = $("#regulation_table_value").val();
//          if (regulation == null){
//             var regulation = 0;
//          }else{
//             var regulation = regulation.split(',').join("");
//          }

//          //alert(regulation);

//         var min = Math.min(morg_ratio, regulation);



//         if(prop_mark_value == 0){
//             var fund_value = (prop_val*min)/100;
//             var fund_ratio = (fund_value / prop_val)*100;

//             $('#funding_morg_tree').val(addCommasDirect(fund_value));
//             $('#funding_ratio_tree').val(addCommasDirect(fund_ratio.toFixed(2)));
//         }
//         else{
//             var fund_value = prop_mark_value*min;
//             var fund_ratio = (fund_value / prop_mark_value)*100;
//             $('#funding_morg_tree').val(addCommasDirect(fund_value));
//             $('#funding_ratio_tree').val(addCommasDirect(fund_ratio.toFixed(2)));
//         }
//       },'620');
//     }
//     funding_tree();


//     function enslevment_tree(){
//       setTimeout (function(){
//         var prop_val = $("#property-value-1-").val();

//          if (prop_val == null){
//             var prop_val = 0;
//          }else{
//             var prop_val = prop_val.split(',').join("");
//          }

//         var prop_mark_value = $("#market-value-").val();

//          if (prop_mark_value == null){
//             var prop_mark_value = 0;
//          }else{
//             var prop_mark_value = prop_mark_value.split(',').join("");
//          }

//         var min_ens = $("#min_ens").val();

//          if (min_ens == null){
//             var min_ens = 0;
//          }else{
//             var min_ens = min_ens.split(',').join("");
//          }

//         var mor_algo_val = $("#new_mortgage_algo_value").val();

//          if (mor_algo_val == null){
//             var mor_algo_val = 0;
//          }else{
//             var mor_algo_val = mor_algo_val.split(',').join("");
//          }
       
//         if(prop_mark_value == 0){
//             var ens_value = (prop_val*min_ens)/100;
//             var ens_ratio = (ens_value / prop_val)*100;
//             $('#enslavement_morg_tree').val(addCommasDirect(ens_value));
//             $('#enslavement_ratio_tree').val(addCommasDirect(ens_ratio.toFixed(2)));
//         }
//         else{
//             var ens_value = prop_mark_value*min_ens;
//             var ens_ratio = (ens_value / prop_mark_value)*100;
//             $('#enslavement_morg_tree').val(addCommasDirect(ens_value));
//             $('#enslavement_ratio_tree').val(addCommasDirect(ens_ratio.toFixed(2)));
//         }
//       },'630');
//     }
//     enslevment_tree();


// function check_ens(){
//   setTimeout (function(){
//     var morg_ratio = $("#morg_ratio_value").val();

//      if (morg_ratio == null){
//         var morg_ratio = 0;
//      }else{
//         var morg_ratio = morg_ratio.split(',').join("");
//      }

//      var regulation = $("#regulation_table_value").val();
//      if (regulation == null){
//         var regulation = 0;
//      }else{
//         var regulation = regulation.split(',').join("");
//      }
     
//      var max_owner_value = $("#max_owner_value").val();
//      if (max_owner_value == null){
//         var max_owner_value = 0;
//      }else{
//         var max_owner_value = max_owner_value.split(',').join("");
//      }

//      var enslavement_morg_tree = $("#enslavement_morg_tree").val();
//      if (enslavement_morg_tree == null){
//         var enslavement_morg_tree = 0;
//      }else{
//         var enslavement_morg_tree = enslavement_morg_tree.split(',').join("");
//      }

//      var need_ens =  $('input[name=algo]:checked').val();
//      //alert(need_ens);

//      var has_apt =  $('input[name=algo2]:checked').val();
      
//      if(parseInt(morg_ratio) <= parseInt(regulation)){
//         $('#checkEnslavement_no').attr('checked',true);
//         $('#checkEnslavement_yes').attr('checked',false);
//         $('#checkEnslavement_error').attr('checked',false);

//         $('.error_log_happens').html('');
//      } else if(parseInt(max_owner_value) >= parseInt(enslavement_morg_tree) && need_ens == "yes" && has_apt == "yes" ){
//         //alert(2);
//         $('#checkEnslavement_no').attr('checked',false);
//         $('#checkEnslavement_yes').attr('checked',true);
//         $('#checkEnslavement_error').attr('checked',false);

//         $('.error_log_happens').html('');
//      } else{
//         //alert("Error");
//         $('#checkEnslavement_no').attr('checked',false);
//         $('#checkEnslavement_yes').attr('checked',false);
//         $('#checkEnslavement_error').attr('checked',true);

//         $('.error_log_happens').html('');

//         var email = $('.user-name a').data('email');

//         $('.error_log_happens').html('<li>1. '+email+' | Error#1: Algo Error happens</li>');

//      }
//    },'650');

// }
// check_ens();


// /**************************TABLE WORKS**************************************/

// //calculate_interest
// function calculate_interest(uu,years,field,bund=""){
// setTimeout (function(){
//   var bank_name = $('input[name=select_bank]:checked').val();


//   var six_ques_banks = [];

//   $(".bank_account1:checked").each(function(){
//       six_ques_banks.push($(this).data("id"));
//   });


//   if(bund == '0'){
//     var funding = $('#funding_type').val();
//   }else{
//     var funding = 'Enslavement' 
//   }



//   var six_ques_banks = six_ques_banks.toString();
//   var bank = bank_name;
//   var funding = funding;
//   var year = '';
//   var fourth = uu;


//   if($("#"+years).is('select')){
//     var year = $("#"+years).val();
//     if (year == null){
//       var year = 0;
//     }else{
//       var year = year.split(',').join("");
//     }
//   }else{
//     var year = $("#"+years).html();
//     if (year == null){
//       var year = 0;
//     }else{
//       var year = year.split(',').join("");
//     }
//   }

//   var url = '/admin/admin_ques_report_inte_ajax';
//   $.ajax({
//         type: "POST",
//         headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       },
//       url: url,
//       data: {'bank_name':bank,
//               'funding_type':funding,
//               'year':year,
//               'fourth':fourth,
//               'six_ques_banks':six_ques_banks },
//       dataTYPE: 'json',
//       success: function(data)
//       {
//        //alert(data.interest);
//        $('#'+field).html(data.interest);
//       }
//   });

//  },'700');

// }
// //1
// calculate_interest('prime','t1_year1','t1_interest1','0');
// calculate_interest('const_inter_linked','t1_year2','t1_interest2','0');
// //2
// calculate_interest('prime','t2_year1','t2_interest1');
// calculate_interest('const_inter_linked','t2_year2','t2_interest2');
// //3
// calculate_interest('prime','t3_year1','t3_interest1','0');
// calculate_interest('const_inter_linked','t3_year2','t3_interest2','0');
// calculate_interest('var_inter_5year_unlinked','t3_year3','t3_interest3','0');
// //4
// calculate_interest('prime','t4_year1','t4_interest1');
// calculate_interest('const_inter_linked','t4_year2','t4_interest2');
// calculate_interest('var_inter_5year_unlinked','t4_year3','t4_interest3');
// //5
// calculate_interest('prime','t5_year1','t5_interest1','0');
// calculate_interest('var_inter_5year_unlinked','t5_year2','t5_interest2','0');
// calculate_interest('const_inter_unlinked','t5_year3','t5_interest3','0');
// //6
// calculate_interest('prime','t6_year1','t6_interest1');
// calculate_interest('var_inter_5year_unlinked','t6_year2','t6_interest2');
// calculate_interest('const_inter_unlinked','t6_year3','t6_interest3');
// //7
// calculate_interest('prime','t7_year1','t7_interest1','0');
// calculate_interest('var_inter_5year_linked','t7_year2','t7_interest2','0');
// calculate_interest('const_inter_unlinked','t7_year3','t7_interest3','0');
// //8
// calculate_interest('prime','t8_year1','t8_interest1');
// calculate_interest('var_inter_5year_linked','t8_year2','t8_interest2');
// calculate_interest('const_inter_unlinked','t8_year3','t8_interest3');
// //9
// calculate_interest('prime','t9_year1','t9_interest1','0');
// calculate_interest('var_inter_5year_linked','t9_year2','t9_interest2','0');
// calculate_interest('const_inter_linked','t9_year3','t9_interest3','0');
// //10
// calculate_interest('prime','t10_year1','t10_interest1');
// calculate_interest('var_inter_5year_linked','t10_year2','t10_interest2');
// calculate_interest('const_inter_linked','t10_year3','t10_interest3');
// //11
// calculate_interest('const_inter_linked','t11_year1','t11_interest1','0');
// calculate_interest('prime','t11_year2','t11_interest2','0');
// //12
// calculate_interest('const_inter_linked','t12_year1','t12_interest1');
// calculate_interest('prime','t12_year2','t12_interest2');
// //13
// calculate_interest('prime','t13_year1','t13_interest1','0');
// calculate_interest('const_inter_linked','t13_year2','t13_interest2','0');
// //14
// calculate_interest('prime','t14_year1','t14_interest1');
// calculate_interest('const_inter_linked','t14_year2','t14_interest2');
// //15
// calculate_interest('const_inter_linked','t15_year1','t15_interest1','0');
// calculate_interest('prime','t15_year2','t15_interest2','0');
// //16
// calculate_interest('const_inter_linked','t16_year1','t16_interest1');
// calculate_interest('prime','t16_year2','t16_interest2');
// //17
// calculate_interest('prime','t17_year1','t17_interest1','0');
// calculate_interest('const_inter_linked','t17_year2','t17_interest2','0');
// //18
// calculate_interest('prime','t18_year1','t18_interest1');
// calculate_interest('const_inter_linked','t18_year2','t18_interest2');
// //19
// calculate_interest('const_inter_linked','t19_year1','t19_interest1','0');
// calculate_interest('prime','t19_year2','t19_interest2','0');
// //20
// calculate_interest('const_inter_linked','t20_year1','t20_interest1');
// calculate_interest('prime','t20_year2','t20_interest2');


// //Change on upper Row bank report -1 
// $('input[name=select_bank]').on('change',function(){
//   //1
// calculate_interest('prime','t1_year1','t1_interest1');
// calculate_interest('const_inter_linked','t1_year2','t1_interest2');
// //2
// calculate_interest('prime','t2_year1','t2_interest1');
// calculate_interest('const_inter_linked','t2_year2','t2_interest2');
// //3
// calculate_interest('prime','t3_year1','t3_interest1');
// calculate_interest('const_inter_linked','t3_year2','t3_interest2');
// calculate_interest('var_inter_5year_unlinked','t3_year3','t3_interest3');
// //4
// calculate_interest('prime','t4_year1','t4_interest1');
// calculate_interest('const_inter_linked','t4_year2','t4_interest2');
// calculate_interest('var_inter_5year_unlinked','t4_year3','t4_interest3');
// //5
// calculate_interest('prime','t5_year1','t5_interest1');
// calculate_interest('var_inter_5year_unlinked','t5_year2','t5_interest2');
// calculate_interest('const_inter_unlinked','t5_year3','t5_interest3');
// //6
// calculate_interest('prime','t6_year1','t6_interest1');
// calculate_interest('var_inter_5year_unlinked','t6_year2','t6_interest2');
// calculate_interest('const_inter_unlinked','t6_year3','t6_interest3');
// //7
// calculate_interest('prime','t7_year1','t7_interest1');
// calculate_interest('var_inter_5year_linked','t7_year2','t7_interest2');
// calculate_interest('const_inter_unlinked','t7_year3','t7_interest3');
// //8
// calculate_interest('prime','t8_year1','t8_interest1');
// calculate_interest('var_inter_5year_linked','t8_year2','t8_interest2');
// calculate_interest('const_inter_unlinked','t8_year3','t8_interest3');
// //9
// calculate_interest('prime','t9_year1','t9_interest1');
// calculate_interest('var_inter_5year_linked','t9_year2','t9_interest2');
// calculate_interest('const_inter_linked','t9_year3','t9_interest3');
// //10
// calculate_interest('prime','t10_year1','t10_interest1');
// calculate_interest('var_inter_5year_linked','t10_year2','t10_interest2');
// calculate_interest('const_inter_linked','t10_year3','t10_interest3');
// //11
// calculate_interest('const_inter_linked','t11_year1','t11_interest1');
// calculate_interest('prime','t11_year2','t11_interest2');
// //12
// calculate_interest('const_inter_linked','t12_year1','t12_interest1');
// calculate_interest('prime','t12_year2','t12_interest2');
// //13
// calculate_interest('prime','t13_year1','t13_interest1');
// calculate_interest('const_inter_linked','t13_year2','t13_interest2');
// //14
// calculate_interest('prime','t14_year1','t14_interest1');
// calculate_interest('const_inter_linked','t14_year2','t14_interest2');
// //15
// calculate_interest('const_inter_linked','t15_year1','t15_interest1');
// calculate_interest('prime','t15_year2','t15_interest2');
// //16
// calculate_interest('const_inter_linked','t16_year1','t16_interest1');
// calculate_interest('prime','t16_year2','t16_interest2');
// //17
// calculate_interest('prime','t17_year1','t17_interest1');
// calculate_interest('const_inter_linked','t17_year2','t17_interest2');
// //18
// calculate_interest('prime','t18_year1','t18_interest1');
// calculate_interest('const_inter_linked','t18_year2','t18_interest2');
// //19
// calculate_interest('const_inter_linked','t19_year1','t19_interest1');
// calculate_interest('prime','t19_year2','t19_interest2');
// //20
// calculate_interest('const_inter_linked','t20_year1','t20_interest1');
// calculate_interest('prime','t20_year2','t20_interest2');

// });

// //Change on upper Row bank report -1 
// $('#funding_type').on('change',function(){
//   //1
// calculate_interest('prime','t1_year1','t1_interest1');
// calculate_interest('const_inter_linked','t1_year2','t1_interest2');
// //2
// calculate_interest('prime','t2_year1','t2_interest1');
// calculate_interest('const_inter_linked','t2_year2','t2_interest2');
// //3
// calculate_interest('prime','t3_year1','t3_interest1');
// calculate_interest('const_inter_linked','t3_year2','t3_interest2');
// calculate_interest('var_inter_5year_unlinked','t3_year3','t3_interest3');
// //4
// calculate_interest('prime','t4_year1','t4_interest1');
// calculate_interest('const_inter_linked','t4_year2','t4_interest2');
// calculate_interest('var_inter_5year_unlinked','t4_year3','t4_interest3');
// //5
// calculate_interest('prime','t5_year1','t5_interest1');
// calculate_interest('var_inter_5year_unlinked','t5_year2','t5_interest2');
// calculate_interest('const_inter_unlinked','t5_year3','t5_interest3');
// //6
// calculate_interest('prime','t6_year1','t6_interest1');
// calculate_interest('var_inter_5year_unlinked','t6_year2','t6_interest2');
// calculate_interest('const_inter_unlinked','t6_year3','t6_interest3');
// //7
// calculate_interest('prime','t7_year1','t7_interest1');
// calculate_interest('var_inter_5year_linked','t7_year2','t7_interest2');
// calculate_interest('const_inter_unlinked','t7_year3','t7_interest3');
// //8
// calculate_interest('prime','t8_year1','t8_interest1');
// calculate_interest('var_inter_5year_linked','t8_year2','t8_interest2');
// calculate_interest('const_inter_unlinked','t8_year3','t8_interest3');
// //9
// calculate_interest('prime','t9_year1','t9_interest1');
// calculate_interest('var_inter_5year_linked','t9_year2','t9_interest2');
// calculate_interest('const_inter_linked','t9_year3','t9_interest3');
// //10
// calculate_interest('prime','t10_year1','t10_interest1');
// calculate_interest('var_inter_5year_linked','t10_year2','t10_interest2');
// calculate_interest('const_inter_linked','t10_year3','t10_interest3');
// //11
// calculate_interest('const_inter_linked','t11_year1','t11_interest1');
// calculate_interest('prime','t11_year2','t11_interest2');
// //12
// calculate_interest('const_inter_linked','t12_year1','t12_interest1');
// calculate_interest('prime','t12_year2','t12_interest2');
// //13
// calculate_interest('prime','t13_year1','t13_interest1');
// calculate_interest('const_inter_linked','t13_year2','t13_interest2');
// //14
// calculate_interest('prime','t14_year1','t14_interest1');
// calculate_interest('const_inter_linked','t14_year2','t14_interest2');
// //15
// calculate_interest('const_inter_linked','t15_year1','t15_interest1');
// calculate_interest('prime','t15_year2','t15_interest2');
// //16
// calculate_interest('const_inter_linked','t16_year1','t16_interest1');
// calculate_interest('prime','t16_year2','t16_interest2');
// //17
// calculate_interest('prime','t17_year1','t17_interest1');
// calculate_interest('const_inter_linked','t17_year2','t17_interest2');
// //18
// calculate_interest('prime','t18_year1','t18_interest1');
// calculate_interest('const_inter_linked','t18_year2','t18_interest2');
// //19
// calculate_interest('const_inter_linked','t19_year1','t19_interest1');
// calculate_interest('prime','t19_year2','t19_interest2');
// //20
// calculate_interest('const_inter_linked','t20_year1','t20_interest1');
// calculate_interest('prime','t20_year2','t20_interest2');

// });








//   function on_change_year_interest(a,b,c,d,e,f,g,h,i=""){

//     /*************************************************************************

//     Here 
//     a stands for table
//     b stands for table_column
//     c stabds for funding type
//     d stands for table having 3 rows or not if having value should be 1 else 0
//     e stands for second table which chnage on selection
//     f stands for part (means by which value mortgage divide i.e 1 or 2)
//     g stands for GREEN(Mortgage) or RED(enslavement) CASE 
//     h stands for GREEN(Mortgage) or RED(enslavement) CASE for 2nd table
//     ***************************************************************************/

//     if(i != '') {
    
//       var val1 = i;
      
//     } else {
    
//       var val1 = $('#t'+a+'_year'+b).val();
      
//     }
//     //alert(val1);




//     var val2 = $('#t'+e+'_year'+b).val(val1).attr('selected',true);

//     calculate_interest(c,'t'+a+'_year'+b,'t'+a+'_interest'+b);
//     table_mortgage(f,'t'+a+'_mortgage'+b,'t'+a+'_year'+b,'t'+a+'_interest'+b,'t'+a+'_monthly'+b,g);

//     if(d == 0){
//       table_mortgage_total('t'+a+'_monthly1','t'+a+'_monthly2',0,'t'+a+'_total1');
//     }else{
//       table_mortgage_total('t'+a+'_monthly1','t'+a+'_monthly2','t'+a+'_monthly3','t'+a+'_total1');
//     }

//     calculate_interest(c,'t'+e+'_year'+b,'t'+e+'_interest'+b);

//     table_mortgage(f,'t'+e+'_mortgage'+b,'t'+e+'_year'+b,'t'+e+'_interest'+b,'t'+e+'_monthly'+b,h);
//     if(d == 0){
//       table_mortgage_total('t'+e+'_monthly1','t'+e+'_monthly2',0,'t'+e+'_total1');
//     }else{
//       table_mortgage_total('t'+e+'_monthly1','t'+e+'_monthly2','t'+e+'_monthly3','t'+e+'_total1');
//     }

//     total_table_value(a,e);

//   }

// //calculate mortgage
// function table_mortgage(divi,mortg,year,interest,monthly,type){
//   //alert('786');

//   setTimeout (function(){


//       if(type == 'green'){

//         var final_mortgage = $('#funding_morg_tree').val();

//       }else{

//         var final_mortgage = $('#enslavement_morg_tree').val();

//       }

    

//     if(final_mortgage == null){
//       var final_mortgage = 0;
//     }else{
//       var final_mortgage = final_mortgage.split(',').join("");
//     }
//     //alert(final_mortgage);

//     if(divi == 1){

//       var  final = (parseInt(final_mortgage) * 1) / 3;
//       final = parseInt(final);

//     }else{

//       var  final = (parseInt(final_mortgage) * 2) / 3;
//       final = parseInt(final);

//     }

//       //alert(final);

//         $('#'+mortg).html("");
//         $('#'+mortg).html(addCommasDirect(final));

//         //var loan = $("."+val1).val(); 
//         //var loan = loan.split(',').join('');

//         if($("#"+year).is('select')){
//           var apr = $("#"+year).val();
//          // alert(apr);
//           if (apr == null){
//             var apr = 0;
//           }else{
//             var apr = apr.split(',').join("");
//           }
//         }else{
//           var apr = $("#"+year).html();
//           if (apr == null){
//             var apr = 0;
//           }else{
//             var apr = apr.split(',').join("");
//           }

//         }

//         //var apr = apr.split(',').join(''); 
//         var term = $("#"+interest).html();

//         //alert(term);

//           if (term == null){
//             var term = 0;
//           }else{
//             var term = term.split(',').join("");
//           }

//         //var term = term.split(',').join(''); 
//         apr = apr/1200;
//         term = term*12;

//         var amount = apr * -final * Math.pow((1 + apr), term) / (1 - Math.pow((1 + apr), term));
//         amount = isNaN(amount) ? 0 : amount;

//         //amount = addCommasDirect(amount.toFixed(2));

//         amount = addCommasDirect(parseInt(amount));

//         $("#"+monthly).html(amount);
    
//     return final;

//   },'750');
// }



// //1
// table_mortgage(1,'t1_mortgage1','t1_year1','t1_interest1','t1_monthly1','green');
// table_mortgage(2,'t1_mortgage2','t1_year2','t1_interest2','t1_monthly2','green');
// //2
// table_mortgage(1,'t2_mortgage1','t2_year1','t2_interest1','t2_monthly1','red');
// table_mortgage(2,'t2_mortgage2','t2_year2','t2_interest2','t2_monthly2','red');
// //3
// table_mortgage(1,'t3_mortgage1','t3_year1','t3_interest1','t3_monthly1','green');
// table_mortgage(1,'t3_mortgage2','t3_year2','t3_interest2','t3_monthly2','green');
// table_mortgage(1,'t3_mortgage3','t3_year3','t3_interest3','t3_monthly3','green');
// //4
// table_mortgage(1,'t4_mortgage1','t4_year1','t4_interest1','t4_monthly1','red');
// table_mortgage(1,'t4_mortgage2','t4_year2','t4_interest2','t4_monthly2','red');
// table_mortgage(1,'t4_mortgage3','t4_year3','t4_interest3','t4_monthly3','red');
// //5
// table_mortgage(1,'t5_mortgage1','t5_year1','t5_interest1','t5_monthly1','green');
// table_mortgage(1,'t5_mortgage2','t5_year2','t5_interest2','t5_monthly2','green');
// table_mortgage(1,'t5_mortgage3','t5_year3','t5_interest3','t5_monthly3','green');
// //6
// table_mortgage(1,'t6_mortgage1','t6_year1','t6_interest1','t6_monthly1','red');
// table_mortgage(1,'t6_mortgage2','t6_year2','t6_interest2','t6_monthly2','red');
// table_mortgage(1,'t6_mortgage3','t6_year3','t6_interest3','t6_monthly3','red');
// //7
// table_mortgage(1,'t7_mortgage1','t7_year1','t7_interest1','t7_monthly1','green');
// table_mortgage(1,'t7_mortgage2','t7_year2','t7_interest2','t7_monthly2','green');
// table_mortgage(1,'t7_mortgage3','t7_year3','t7_interest3','t7_monthly3','green');
// //8
// table_mortgage(1,'t8_mortgage1','t8_year1','t8_interest1','t8_monthly1','red');
// table_mortgage(1,'t8_mortgage2','t8_year2','t8_interest2','t8_monthly2','red');
// table_mortgage(1,'t8_mortgage3','t8_year3','t8_interest3','t8_monthly3','red');
// //9
// table_mortgage(1,'t9_mortgage1','t9_year1','t9_interest1','t9_monthly1','green');
// table_mortgage(1,'t9_mortgage2','t9_year2','t9_interest2','t9_monthly2','green');
// table_mortgage(1,'t9_mortgage3','t9_year3','t9_interest3','t9_monthly3','green');
// //10
// table_mortgage(1,'t10_mortgage1','t10_year1','t10_interest1','t10_monthly1','red');
// table_mortgage(1,'t10_mortgage2','t10_year2','t10_interest2','t10_monthly2','red');
// table_mortgage(1,'t10_mortgage3','t10_year3','t10_interest3','t10_monthly3','red');
// //11
// table_mortgage(2,'t11_mortgage1','t11_year1','t11_interest1','t11_monthly1','green');
// table_mortgage(1,'t11_mortgage2','t11_year2','t11_interest2','t11_monthly2','green');
// //table_mortgage(1,'t11_mortgage3','t11_year3','t11_interest3','t11_monthly3');
// //12
// table_mortgage(2,'t12_mortgage1','t12_year1','t12_interest1','t12_monthly1','red');
// table_mortgage(1,'t12_mortgage2','t12_year2','t12_interest2','t12_monthly2','red');
// //table_mortgage(1,'t12_mortgage3','t12_year3','t12_interest3','t12_monthly3');
// //13
// table_mortgage(1,'t13_mortgage1','t13_year1','t13_interest1','t13_monthly1','green');
// table_mortgage(2,'t13_mortgage2','t13_year2','t13_interest2','t13_monthly2','green');
// //table_mortgage(1,'t13_mortgage3','t13_year3','t13_interest3','t13_monthly3');
// //14
// table_mortgage(1,'t14_mortgage1','t14_year1','t14_interest1','t14_monthly1','red');
// table_mortgage(2,'t14_mortgage2','t14_year2','t14_interest2','t14_monthly2','red');
// //table_mortgage(1,'t14_mortgage3','t14_year3','t14_interest3','t14_monthly3');
// //15
// table_mortgage(2,'t15_mortgage1','t15_year1','t15_interest1','t15_monthly1','green');
// table_mortgage(1,'t15_mortgage2','t15_year2','t15_interest2','t15_monthly2','green');
// //table_mortgage(1,'t15_mortgage3','t15_year3','t15_interest3','t15_monthly3');
// //16
// table_mortgage(2,'t16_mortgage1','t16_year1','t16_interest1','t16_monthly1','red');
// table_mortgage(1,'t16_mortgage2','t16_year2','t16_interest2','t16_monthly2','red');
// //table_mortgage(1,'t16_mortgage3','t16_year3','t16_interest3','t16_monthly3');
// //17
// table_mortgage(1,'t17_mortgage1','t17_year1','t17_interest1','t17_monthly1','green');
// table_mortgage(2,'t17_mortgage2','t17_year2','t17_interest2','t17_monthly2','green');
// //table_mortgage(1,'t17_mortgage3','t17_year3','t17_interest3','t17_monthly3');
// //18
// table_mortgage(1,'t18_mortgage1','t18_year1','t18_interest1','t18_monthly1','red');
// table_mortgage(2,'t18_mortgage2','t18_year2','t18_interest2','t18_monthly2','red');
// //table_mortgage(1,'t18_mortgage3','t18_year3','t18_interest3','t18_monthly3');
// //19
// table_mortgage(2,'t19_mortgage1','t19_year1','t19_interest1','t19_monthly1','green');
// table_mortgage(1,'t19_mortgage2','t19_year2','t19_interest2','t19_monthly2','green');
// //table_mortgage(1,'t19_mortgage3','t19_year3','t19_interest3','t19_monthly3');
// //20
// table_mortgage(2,'t20_mortgage1','t20_year1','t20_interest1','t20_monthly1','red');
// table_mortgage(1,'t20_mortgage2','t20_year2','t20_interest2','t20_monthly2','red');
// //table_mortgage(1,'t20_mortgage3','t20_year3','t20_interest3','t20_monthly3');





// function table_mortgage_total(q1, q2, q3, q4){

//   setTimeout (function(){
//      //alert(q1);
//     var val1 = $("#"+q1).html();
//         //alert(val1);
//     if (val1 == null){
//       var val1 = 0;
//     }else{
//       var val1 = val1.split(',').join("");
//     }

//     var val2 = $("#"+q2).html();
//     if (val2 == null){
//       var val2 = 0;
//     }else{
//       var val2 = val2.split(',').join("");
//     }
//     //alert(val2);
//     if(q3 != 0){
//       val3 = $("#"+q3).html();
//       if (val3 == null){
//         var val3 = 0;
//       }else{
//         var val3 = val3.split(',').join("");
//       }
//     }else{
//       val3= 0;
//     }
//     var total = parseInt(val1) + parseInt(val2) + parseInt(val3);
//     total = addCommasDirect(parseInt(total));
//     $('#'+q4).html(total);
//   },'850');


// }
// //slide-1
// table_mortgage_total('t1_monthly1','t1_monthly2',0,'t1_total1');
// table_mortgage_total('t2_monthly1','t2_monthly2',0,'t2_total1');
// //slide-2
// table_mortgage_total('t3_monthly1','t3_monthly2','t3_monthly2','t3_total1');
// table_mortgage_total('t4_monthly1','t4_monthly2','t4_monthly2','t4_total1');
// table_mortgage_total('t5_monthly1','t5_monthly2','t5_monthly2','t5_total1');
// table_mortgage_total('t6_monthly1','t6_monthly2','t6_monthly2','t6_total1');
// table_mortgage_total('t7_monthly1','t7_monthly2','t7_monthly2','t7_total1');
// table_mortgage_total('t8_monthly1','t8_monthly2','t8_monthly2','t8_total1');
// table_mortgage_total('t9_monthly1','t9_monthly2','t9_monthly2','t9_total1');
// table_mortgage_total('t10_monthly1','t10_monthly2','t10_monthly2','t10_total1');
// //slide-3
// table_mortgage_total('t11_monthly1','t11_monthly2',0,'t11_total1');
// table_mortgage_total('t12_monthly1','t12_monthly2',0,'t12_total1');
// table_mortgage_total('t13_monthly1','t13_monthly2',0,'t13_total1');
// table_mortgage_total('t14_monthly1','t14_monthly2',0,'t14_total1');
// table_mortgage_total('t15_monthly1','t15_monthly2',0,'t15_total1');
// table_mortgage_total('t16_monthly1','t16_monthly2',0,'t16_total1');
// table_mortgage_total('t17_monthly1','t17_monthly2',0,'t17_total1');
// table_mortgage_total('t18_monthly1','t18_monthly2',0,'t18_total1');
// table_mortgage_total('t19_monthly1','t19_monthly2',0,'t19_total1');
// table_mortgage_total('t20_monthly1','t20_monthly2',0,'t20_total1');






// function total_table_value(one,two){

//   //alert('786');
//   setTimeout (function(){

//     var val = $('input[name=algo2]:checked').val();
    


//     var val1 = $('#t'+one+'_total1').html();
//     if (val1 == null){
//         var val1 = 0;
//       }else{
//         var val1 = val1.split(',').join("");
//       }
//   //console.log(val1);

//   if(two == 0){

//     var val2 = 0;

//   }else{
//      var val2 = $('#t'+two+'_total1').html();
//     if (val2 == null){
//         var val2 = 0;
//       }else{
//         var val2 = val2.split(',').join("");
//       }
//   }
   
//   //console.log(val2);
     
//     var total = parseInt(val1) + parseInt(val2);
//     $('#t'+one+'_finalmr1').html(addCommasDirect(total));
//     $('#t'+two+'_finalmr1').html(addCommasDirect(total));
//    },'900');

// }
// total_table_value(1,2);
// total_table_value(3,4);
// total_table_value(5,6);
// total_table_value(7,8);
// total_table_value(9,10);
// total_table_value(11,12);
// total_table_value(13,14);
// total_table_value(15,16);
// total_table_value(17,18);
// total_table_value(19,20);


// $('.cal-full-algo').on('click', function(){
// twenty_first();
// twenty_second();
// });

// $(document).ready(function(){
//   var val = $('input[name=algo2]:checked').val();
//   if(val == "yes"){
//     $('.if_algo_error').show();
//     $('.if_no_option').show();
//     table_structure();

//   }else if(val == "no"){
//     $('.if_no_option .hide_for_no').val("");
//     $('.if_algo_error').show();
//     table_structure();

//   }else{

//     $('.if_algo_error').show();
//     $('.zero-show').html('0');
//   }
// });


// $('input[name=algo2]').on('change',function(){
//   var val = $(this).val();
//   if(val == "yes"){
//       $('.if_algo_error').show();
      
//       //2
//       calculate_interest('prime','t2_year1','t2_interest1');
//       calculate_interest('const_inter_linked','t2_year2','t2_interest2');
//       //4
//       calculate_interest('prime','t4_year1','t4_interest1');
//       calculate_interest('const_inter_linked','t4_year2','t4_interest2');
//       calculate_interest('const_inter_unlinked','t4_year3','t4_interest3');
//       //6
//       calculate_interest('prime','t6_year1','t6_interest1');
//       calculate_interest('var_inter_5year_unlinked','t6_year2','t6_interest2');
//       calculate_interest('const_inter_unlinked','t6_year3','t6_interest3');
//       //8
//       calculate_interest('prime','t8_year1','t8_interest1');
//       calculate_interest('var_inter_5year_linked','t8_year2','t8_interest2');
//       calculate_interest('const_inter_unlinked','t8_year3','t8_interest3');
//       //10
//       calculate_interest('prime','t10_year1','t10_interest1');
//       calculate_interest('var_inter_5year_linked','t10_year2','t10_interest2');
//       calculate_interest('const_inter_linked','t10_year3','t10_interest3');
//       //12
//       calculate_interest('const_inter_linked','t12_year1','t12_interest1');
//       calculate_interest('prime','t12_year2','t12_interest2');
//       //14
//       calculate_interest('prime','t14_year1','t14_interest1');
//       calculate_interest('const_inter_linked','t14_year2','t14_interest2');
//       //16
//       calculate_interest('const_inter_linked','t16_year1','t16_interest1');
//       calculate_interest('prime','t16_year2','t16_interest2');
//       //18
//       calculate_interest('prime','t18_year1','t18_interest1');
//       calculate_interest('const_inter_linked','t18_year2','t18_interest2');
//       //20
//       calculate_interest('const_inter_linked','t20_year1','t20_interest1');
//       calculate_interest('prime','t20_year2','t20_interest2');


//       setTimeout(function(){
//       //2
//       table_mortgage(1,'t2_mortgage1','t2_year1','t2_interest1','t2_monthly1','red');
//       table_mortgage(2,'t2_mortgage2','t2_year2','t2_interest2','t2_monthly2','red');
//       //4
//       table_mortgage(1,'t4_mortgage1','t4_year1','t4_interest1','t4_monthly1','red');
//       table_mortgage(1,'t4_mortgage2','t4_year2','t4_interest2','t4_monthly2','red');
//       table_mortgage(1,'t4_mortgage3','t4_year3','t4_interest3','t4_monthly3','red');
//       //6
//       table_mortgage(1,'t6_mortgage1','t6_year1','t6_interest1','t6_monthly1','red');
//       table_mortgage(1,'t6_mortgage2','t6_year2','t6_interest2','t6_monthly2','red');
//       table_mortgage(1,'t6_mortgage3','t6_year3','t6_interest3','t6_monthly3','red');
//       //8
//       table_mortgage(1,'t8_mortgage1','t8_year1','t8_interest1','t8_monthly1','red');
//       table_mortgage(1,'t8_mortgage2','t8_year2','t8_interest2','t8_monthly2','red');
//       table_mortgage(1,'t8_mortgage3','t8_year3','t8_interest3','t8_monthly3','red');
//       //10
//       table_mortgage(1,'t10_mortgage1','t10_year1','t10_interest1','t10_monthly1','red');
//       table_mortgage(1,'t10_mortgage2','t10_year2','t10_interest2','t10_monthly2','red');
//       table_mortgage(1,'t10_mortgage3','t10_year3','t10_interest3','t10_monthly3','red');
//       //12
//       table_mortgage(2,'t12_mortgage1','t12_year1','t12_interest1','t12_monthly1','red');
//       table_mortgage(1,'t12_mortgage2','t12_year2','t12_interest2','t12_monthly2','red');
//       //14
//       table_mortgage(1,'t14_mortgage1','t14_year1','t14_interest1','t14_monthly1','red');
//       table_mortgage(2,'t14_mortgage2','t14_year2','t14_interest2','t14_monthly2','red');
//       //16
//       table_mortgage(2,'t16_mortgage1','t16_year1','t16_interest1','t16_monthly1','red');
//       table_mortgage(1,'t16_mortgage2','t16_year2','t16_interest2','t16_monthly2','red');
//       //18
//       table_mortgage(1,'t18_mortgage1','t18_year1','t18_interest1','t18_monthly1','red');
//       table_mortgage(2,'t18_mortgage2','t18_year2','t18_interest2','t18_monthly2','red');
//       //20
//       table_mortgage(2,'t20_mortgage1','t20_year1','t20_interest1','t20_monthly1','red');
//       table_mortgage(1,'t20_mortgage2','t20_year2','t20_interest2','t20_monthly2','red');

//       },'100');


//       setTimeout(function(){
//       //slide-1
//       //table_mortgage_total('t1_monthly1','t1_monthly2',0,'t1_total1');
//       table_mortgage_total('t2_monthly1','t2_monthly2',0,'t2_total1');
//       //slide-2
//       //table_mortgage_total('t3_monthly1','t3_monthly2','t3_monthly2','t3_total1');
//       table_mortgage_total('t4_monthly1','t4_monthly2','t4_monthly2','t4_total1');
//       //table_mortgage_total('t5_monthly1','t5_monthly2','t5_monthly2','t5_total1');
//       table_mortgage_total('t6_monthly1','t6_monthly2','t6_monthly2','t6_total1');
//       //table_mortgage_total('t7_monthly1','t7_monthly2','t7_monthly2','t7_total1');
//       table_mortgage_total('t8_monthly1','t8_monthly2','t8_monthly2','t8_total1');
//       //table_mortgage_total('t9_monthly1','t9_monthly2','t9_monthly2','t9_total1');
//       table_mortgage_total('t10_monthly1','t10_monthly2','t10_monthly2','t10_total1');
//       //slide-3
//       //table_mortgage_total('t11_monthly1','t11_monthly2',0,'t11_total1');
//       table_mortgage_total('t12_monthly1','t12_monthly2',0,'t12_total1');
//       //table_mortgage_total('t13_monthly1','t13_monthly2',0,'t13_total1');
//       table_mortgage_total('t14_monthly1','t14_monthly2',0,'t14_total1');
//       //table_mortgage_total('t15_monthly1','t15_monthly2',0,'t15_total1');
//       table_mortgage_total('t16_monthly1','t16_monthly2',0,'t16_total1');
//       //table_mortgage_total('t17_monthly1','t17_monthly2',0,'t17_total1');
//       table_mortgage_total('t18_monthly1','t18_monthly2',0,'t18_total1');
//       //table_mortgage_total('t19_monthly1','t19_monthly2',0,'t19_total1');
//       table_mortgage_total('t20_monthly1','t20_monthly2',0,'t20_total1');

//       },'200');

//     setTimeout(function(){
//       total_table_value(1,2);
//       total_table_value(3,4);
//       total_table_value(5,6);
//       total_table_value(7,8);
//       total_table_value(9,10);
//       total_table_value(11,12);
//       total_table_value(13,14);
//       total_table_value(15,16);
//       total_table_value(17,18);
//       total_table_value(19,20);
//     },'210');

//   }else if(val == "no"){
//     $('.hide_for_no').html("");
//     $('.if_algo_error').show();
//     setTimeout(function(){
//       total_table_value(1,0);
//       total_table_value(3,0);
//       total_table_value(5,0);
//       total_table_value(7,0);
//       total_table_value(9,0);
//       total_table_value(11,0);
//       total_table_value(13,0);
//       total_table_value(15,0);
//       total_table_value(17,0);
//       total_table_value(19,0);
//     },'210');

//   }else{

//     $('.if_algo_error').show();
//     $('.zero-show').html('0');
//   }
// });on_change_year_interest(3,3,'var_inter_5year_unlinked',1,4,1,'green','red');



// function table_structure(){
//   setTimeout(function(){
//     var new_pmt_algo_value = $('#new_pmt_algo_value').val();
//     if (new_pmt_algo_value == null){
//       var new_pmt_algo_value = 0;
//     }else{
//       var new_pmt_algo_value = new_pmt_algo_value.split(',').join("");
//     }

//     var final_mr_start = $('#t1_finalmr1').html();
//     if (final_mr_start == null){
//       var final_mr_start = 0;
//     }else{
//       var final_mr_start = final_mr_start.split(',').join("");
//     }

//     //comparison started
//     if(parseInt(final_mr_start) == parseInt(new_pmt_algo_value)){
//       //alert('matched');
//         $('#tab_A1').addClass('active');
//         $('#tab_A2').removeClass('active');
//         $('#tab_A3').removeClass('active');

//         $('.tab_A1').addClass('active');
//         $('.tab_A2').removeClass('active');
//         $('.tab_A3').removeClass('active');

//     }else if(parseInt(final_mr_start) > parseInt(new_pmt_algo_value)){
//       //alert('bigger');
//         $('#tab_A2').addClass('active');
//         $('#tab_A1').removeClass('active');
//         $('#tab_A3').removeClass('active');

//         $('.tab_A2').addClass('active');
//         $('.tab_A1').removeClass('active');
//         $('.tab_A3').removeClass('active');

//         get_final();

//         // $('#tab_A3').addClass('active');
//         // $('#tab_A2').removeClass('active');
//         // $('#tab_A1').removeClass('active');

//         // $('.tab_A3').addClass('active');
//         // $('.tab_A2').removeClass('active');
//         // $('.tab_A1').removeClass('active');
//         // get_for_low();


//     }else{
//       //alert('smaller');
//       $('#tab_A3').addClass('active');
//       $('#tab_A2').removeClass('active');
//       $('#tab_A1').removeClass('active');

//       $('.tab_A3').addClass('active');
//       $('.tab_A2').removeClass('active');
//       $('.tab_A1').removeClass('active');
//       get_for_low();
//     }

//   },'1150');
// }








// function get_final(){

//   loader_global();

//   if ($('#hidden_path').val() == 0)
//   {
//     step_two(3,'var_inter_5year_unlinked');
//   }
//   else if ($('#hidden_path').val() == 5)
//   {
//      step_two(5,'const_inter_unlinked');
//   }
//   else if ($('#hidden_path').val() == 7)
//   {
//      step_two(7,'const_inter_unlinked');
//   }
//   else if ($('#hidden_path').val() == 9)
//   {
//      step_two(9,'const_inter_linked');
//   }
//   else if ($('#hidden_path').val() == 10)
//   {
//      alert('nothing found best here');
//       $('#loader-global').hide();

//   }
//   else 
//   {
//     var yy = $('#hidden_path').val();
//     var parts = yy.split('/');
//     var code =parts[0];
//     var code2 = parseInt(code) + 1;
//     $('#t'+code+'_year3').val(parts[1]).attr('selected',true);
//     $('#t'+code2+'_year3').val(parts[1]).attr('selected',true);
//     //$('#t'+code+'_year3').parent('td').addClass('best_bank_found');
//     $('#t'+code+'_finalmr1').addClass('best_bank_found_td');
//     $('#t'+code2+'_finalmr1').addClass('best_bank_found_td');
//     $('.best_OF_loan_tree').val('H'+code+'-'+parts[1]);
//     return 2;
//   }

// }

// function step_two(i,k){
//   for (var j = 9; j<=30; j++) {
//     step_three(i,j,k);   

//   } 
// }

// function step_three(i,j,k){

//   var time1 = setTimeout(function(){
//     $('#t'+i+'_year3').val(j).attr('selected',true);
//     var hh = parseInt(i) + 1;

//     on_change_year_interest(i,3,k,1,hh,1,'green','red');

//   var time2 = setTimeout(function(){

//   var final =$('#t'+i+'_finalmr1').html();
//     if (final == null){
//       var final = 0;
//     }else{
//       var final = final.split(',').join("");
//     }
                 
//   var new_pmt_algo_value = $('#new_pmt_algo_value').val();

//   console.log(i+'-------'+j+'--------'+final);
  
//     if (new_pmt_algo_value == null){
//       var new_pmt_algo_value = 0;
//     }else{
//       var new_pmt_algo_value = new_pmt_algo_value.split(',').join("");
//     }

//     if(parseInt(final) != parseInt(new_pmt_algo_value)){
//       gg = $('#hidden_path').val();

//       if(j == 30 && i == 3 && gg == 0){
//         $('#hidden_path').val(5);
//          get_final();
//       }else if(j == 30 && i == 5 && gg == 5){
//         $('#hidden_path').val(7);
//          get_final();
//       }else if(j == 30 && i == 7 && gg == 7){
//         $('#hidden_path').val(9);
//          get_final();
//       }else if(j == 30 && i == 9 && gg == 9){
//         $('#hidden_path').val(10);
//          get_final();
//       }else{
//         if(j == 30 && gg != 0 && gg != 5 && gg != 7 && gg != 9 ){
//           get_final();
//           $('#loader-global').hide();
//         }
//       }
//     }else{
//       $('#hidden_path').val(i+'/'+j);
//     }
//   }, 600);
//   }, 500 + j * 750);

// }






// /**FOR LOW RATE**/

// function get_for_low(){

//   loader_global();

//   if ($('#hidden_path').val() == 0)
//   {
//     step_two_for_low(11,'prime',25,30);
//   }
//   else if ($('#hidden_path').val() == 13)
//   {
//      step_two_for_low(13,'const_inter_linked',8,10);
//   }
//   else if ($('#hidden_path').val() == 15)
//   {
//      step_two_for_low(15,'prime',20,25);
//   }
//   else if ($('#hidden_path').val() == 17)
//   {
//      step_two_for_low(17,'const_inter_linked',4,8);
//   }
//   else if ($('#hidden_path').val() == 19)
//   {
//      step_two_for_low(19,'prime',4,20);
//   }
//   else if ($('#hidden_path').val() == 20)
//   {
//      alert('nothing found best here');
//       $('#loader-global').hide();
//   }
//   else 
//   {
//     var yy = $('#hidden_path').val();
//     var parts = yy.split('/');
//     var code =parts[0];
//     var code2 = parseInt(code) + 1;
//     $('#t'+code+'_year2').val(parts[1]).attr('selected',true);
//     $('#t'+code2+'_year2').val(parts[1]).attr('selected',true);
//     $('#t'+code+'_finalmr1').addClass('best_bank_found_td');
//     $('#t'+code2+'_finalmr1').addClass('best_bank_found_td');


//     $('.best_OF_loan_tree').val('L'+code+'-'+parts[1]);


//     return 2;
//   }

// }

// function step_two_for_low(i,k,l,m){
//   //console.log(l+'/'+m);
//   for (var j = l; j<=m; j++) {
//     step_three_for_low(i,j,k,l,m);   
//   } 
// }

// function step_three_for_low(i,j,k,l,m){

//   var time1 = setTimeout(function(){

//     $('#t'+i+'_year2').val(j).attr('selected',true);
//     var hh = parseInt(i) + 1;

//     on_change_year_interest(i,2,k,1,hh,1,'green','red');

//   var time2 = setTimeout(function(){

//   var final =$('#t'+i+'_finalmr1').html();
//     if (final == null){
//       var final = 0;
//     }else{
//       var final = final.split(',').join("");
//     }
                 
//   var new_pmt_algo_value = $('#new_pmt_algo_value').val();

//   console.log(i+'-------'+j+'--------'+final);
  
//     if (new_pmt_algo_value == null){
//       var new_pmt_algo_value = 0;
//     }else{
//       var new_pmt_algo_value = new_pmt_algo_value.split(',').join("");
//     }

//     if(parseInt(final) != parseInt(new_pmt_algo_value)){
//       gg = $('#hidden_path').val();

//       if(j == m && i == 11 && gg == 0){
//         $('#hidden_path').val(13);
//          get_for_low();
//       }else if(j == m && i == 13 && gg == 13){
//         $('#hidden_path').val(15);
//          get_for_low();
//       }else if(j == m && i == 15 && gg == 15){
//         $('#hidden_path').val(17);
//          get_for_low();
//       }else if(j == m && i == 17 && gg == 17){
//         $('#hidden_path').val(19);
//          get_for_low();
//       }else if(j == m && i == 19 && gg == 19){
//         $('#hidden_path').val(20);
//          get_for_low();
//       }else{
//         if(j == m && gg != 0 && gg != 13 && gg != 15 && gg != 17 && gg != 19 ){
//           get_for_low();
//           $('#loader-global').hide();
//         }
//       }
//     }else{
//       $('#hidden_path').val(i+'/'+j);

//     }
//   }, 500);
//   }, 500 + j * 750);

// }














$('#funding_type').addClass('select_ratio');


function loader_global(){
  $('#loader-global').show();
}

function for_ajax_only_final(clicks, one="", two=""){

    var bank = $('input[name=select_bank]:checked').val();
    var funding_field = $('.fund_field').val();
    // alert(funding_field);
    if(funding_field == 'any_cause'){
      var funding = 'any_cause';
      $('#funding_type').val('Any_Cause');  
    } else{
      var funding = $('#funding_type').val();
    }

    var h1 = $('#t3_year3').val();
    var h2 = $('#t5_year3').val();
    var h3 = $('#t7_year3').val();
    var h4 = $('#t9_year3').val();
    var l1 = $('#t11_year2').val();
    var l2 = $('#t13_year2').val();
    var l3 = $('#t15_year2').val();
    var l4 = $('#t17_year2').val();
    var l5 = $('#t19_year2').val();
    

   
    var user_id =  $("#user_id").val();

       $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://49.249.236.30:3355/api/bestfittree',
                data: {
                        'user_id':user_id,
                        'bank' : bank, 
                        'funding' : funding, 
                        'h1' : h1, 
                        'h2' : h2, 
                        'h3' : h3, 
                        'h4' : h4, 
                        'l1' : l1, 
                        'l2' : l2, 
                        'l3' : l3, 
                        'l4' : l4, 
                        'l5' : l5,
                        'clickable' : clicks,
                        'fourteen': one,
                        'fifteen':two, 
                      },
                  beforeSend: function(){
                      $('#loader-global').show();
                  },
                 complete: function(){
                  //alert('in');
                     $('#loader-global').hide();
                 }, 
                 success: function(data)
                 {
                console.log(data.success.data);


                // $("#loan_fee_sum_fourteen").val('');
                $("#loan_fee_sum_fourteen_").val(addCommasDirect(data.success.data.fourteen_loan));
               // alert(1);
                $("#monthly_return_sum_fourteen_").val(addCommasDirect(data.success.data.fourteen_return));
                $(".pmt_15_1_").val(addCommasDirect(data.success.data.fifteen_pmt[0].toFixed(2)));
                $(".pmt_15_2_").val(addCommasDirect(data.success.data.fifteen_pmt[1].toFixed(2)));
                $(".pmt_15_3_").val(addCommasDirect(data.success.data.fifteen_pmt[2].toFixed(2)));
                $("#mr_one_").val(addCommasDirect(data.success.data.fifteen_settings_pmt[0].toFixed(2)));
                $("#mr_two_").val(addCommasDirect(data.success.data.fifteen_settings_pmt[1].toFixed(2)));
                $("#mr_three_").val(addCommasDirect(data.success.data.fifteen_settings_pmt[2].toFixed(2)));
                $("#fifteen_total_sum_loan_").val(addCommasDirect(data.success.data.fifteen_total_loan_amount));
                $("#fifteen_monthly_return").val(addCommasDirect(data.success.data.fifteen_total_pmt_amount.toFixed(2)));
                $("#new_pmt_algo_value").val(addCommasDirect(data.success.data.total_twenty_point_two.toFixed(2)));
                $("#new_mortgage_algo_value").val(addCommasDirect(data.success.data.total_twenty_point_one));
                $("#morg_ratio_value").val(addCommasDirect(data.success.data.total_twenty_point_three.toFixed(2)));
                $("#min_ens").val(addCommasDirect(data.success.data.total_twenty_point_six.toFixed(2)));
                $("#funding_morg_tree").val(addCommasDirect(data.success.data.total_twenty_point_eight.toFixed(2)));
                $("#funding_ratio_tree").val(addCommasDirect(data.success.data.total_twenty_point_eight_ratio.toFixed(2)));
                $("#enslavement_morg_tree").val(addCommasDirect(data.success.data.total_twenty_point_nine.toFixed(2)));
                $("#enslavement_ratio_tree").val(addCommasDirect(data.success.data.total_twenty_point_nine_ratio.toFixed(2)));
                $("#max_owner_value_").val(addCommasDirect(data.success.data.total_two_point_eight));


                var two_five = data.success.data.total_twenty_point_five;
                var two_sev = data.success.data.twenty_point_seven_;
                // alert(two_sev)
                if( two_five == 'no'){
                  $("#need_enslavement_no").prop("checked", true);
                  $("#need_enslavement_yes").prop("checked", false);
                } else{
                  $("#need_enslavement_yes").prop("checked", true);
                  $("#need_enslavement_no").prop("checked", false);
                }

                

                /*Table 1 - Start*/

                $("#t1_monthly1").html(addCommasDirect(data.success.data.table_1.row1.toFixed(2)));
                $("#t1_monthly2").html(addCommasDirect(data.success.data.table_1.row2.toFixed(2)));
                $("#t1_total1").html(addCommasDirect(data.success.data.table_1.total_mr_funding.toFixed(2)));
                $("#t1_finalmr1").html(addCommasDirect(data.success.data.table_1.final_mr_funding.toFixed(2)));
                $("#t1_interest1").html(addCommasDirect(data.success.data.table_1.interest[0]));
                $("#t1_interest2").html(addCommasDirect(data.success.data.table_1.interest[1]));
                $("#t1_mortgage1").html(addCommasDirect(data.success.data.table_1.mortgage_amount[0].toFixed(2)));
                $("#t1_mortgage2").html(addCommasDirect(data.success.data.table_1.mortgage_amount[1].toFixed(2))); 


                /*Table 1 - Start Ends*/
                

                /*Table 2 - Start */

                $("#t2_monthly1").html(addCommasDirect(data.success.data.table_1.e_row1.toFixed(2)));
                $("#t2_monthly2").html(addCommasDirect(data.success.data.table_1.e_row2.toFixed(2)));
                $("#t2_total1").html(addCommasDirect(data.success.data.table_1.total_mr_enslavement.toFixed(2)));
                $("#t2_finalmr1").html(addCommasDirect(data.success.data.table_1.final_mr_enslavement.toFixed(2)));
                $("#t2_interest1").html(addCommasDirect(data.success.data.table_1.e_interest[0]));
                $("#t2_interest1").html(addCommasDirect(data.success.data.table_1.e_interest[1]));
                $("#t2_mortgage1").html(addCommasDirect(data.success.data.table_1.e_mortgage_amount[0].toFixed(2)));
                $("#t2_mortgage2").html(addCommasDirect(data.success.data.table_1.e_mortgage_amount[1].toFixed(2)));

                /*Table 2 - Start Ends*/

                // if(data.success.data.table_1.final_mr_funding < data.success.data.total_twenty_point_two){
                //   $('#tab_A2, .tab_A2').addClass('active');
                // } else{
                //   $('#tab_A3, .tab_A3 ').addClass('active');                  
                // }

                /*Table H1-Funding */

                $("#t3_monthly1").html(addCommasDirect(data.success.data.table_2.row1.toFixed(2)));
                $("#t3_monthly2").html(addCommasDirect(data.success.data.table_2.row2.toFixed(2)));
                $("#t3_monthly3").html(addCommasDirect(data.success.data.table_2.row3.toFixed(2)));
                $("#t3_total1").html(addCommasDirect(data.success.data.table_2.total_mr_funding.toFixed(2)));
                $("#t3_finalmr1").html(addCommasDirect(data.success.data.table_2.final_mr_funding.toFixed(2)));
                $("#t3_interest1").html(addCommasDirect(data.success.data.table_2.interest[0]));
                $("#t3_interest2").html(addCommasDirect(data.success.data.table_2.interest[1]));
                $("#t3_interest3").html(addCommasDirect(data.success.data.table_2.interest[2]));
                $("#t3_mortgage1").html(addCommasDirect(data.success.data.table_2.mortgage_amount[0].toFixed(2)));
                $("#t3_mortgage2").html(addCommasDirect(data.success.data.table_2.mortgage_amount[1].toFixed(2)));
                $("#t3_mortgage3").html(addCommasDirect(data.success.data.table_2.mortgage_amount[2].toFixed(2)));

                /*Table H1-Funding Ends Here*/

                /*Table H1-Enslavement */

                $("#t4_monthly1").html(addCommasDirect(data.success.data.table_2.e_row1.toFixed(2)));
                $("#t4_monthly2").html(addCommasDirect(data.success.data.table_2.e_row2.toFixed(2)));
                $("#t4_monthly3").html(addCommasDirect(data.success.data.table_2.e_row3.toFixed(2)));
                $("#t4_total1").html(addCommasDirect(data.success.data.table_2.total_mr_enslavement.toFixed(2)));
                $("#t4_finalmr1").html(addCommasDirect(data.success.data.table_2.final_mr_enslavement.toFixed(2)));
                $("#t4_interest1").html(addCommasDirect(data.success.data.table_2.e_interest[0]));
                $("#t4_interest2").html(addCommasDirect(data.success.data.table_2.e_interest[1]));
                $("#t4_interest3").html(addCommasDirect(data.success.data.table_2.e_interest[2]));
                $("#t4_mortgage1").html(addCommasDirect(data.success.data.table_2.e_mortgage_amount[0].toFixed(2)));
                $("#t4_mortgage2").html(addCommasDirect(data.success.data.table_2.e_mortgage_amount[1].toFixed(2)));
                $("#t4_mortgage3").html(addCommasDirect(data.success.data.table_2.e_mortgage_amount[2].toFixed(2)));

                /*Table H1-Enslavement Ends Here*/


                /*Table H2-Funding */

                $("#t5_monthly1").html(addCommasDirect(data.success.data.table_3.row1.toFixed(2)));
                $("#t5_monthly2").html(addCommasDirect(data.success.data.table_3.row2.toFixed(2)));
                $("#t5_monthly3").html(addCommasDirect(data.success.data.table_3.row3.toFixed(2)));
                $("#t5_total1").html(addCommasDirect(data.success.data.table_3.total_mr_funding.toFixed(2)));
                $("#t5_finalmr1").html(addCommasDirect(data.success.data.table_3.final_mr_funding.toFixed(2)));
                $("#t5_interest1").html(addCommasDirect(data.success.data.table_3.interest[0]));
                $("#t5_interest2").html(addCommasDirect(data.success.data.table_3.interest[1]));
                $("#t5_interest3").html(addCommasDirect(data.success.data.table_3.interest[2]));
                $("#t5_mortgage1").html(addCommasDirect(data.success.data.table_3.mortgage_amount[0].toFixed(2)));
                $("#t5_mortgage2").html(addCommasDirect(data.success.data.table_3.mortgage_amount[1].toFixed(2)));
                $("#t5_mortgage3").html(addCommasDirect(data.success.data.table_3.mortgage_amount[2].toFixed(2)));

                /*Table H2-Funding Ends Here*/

                /*Table H2-Enslavement */

                $("#t6_monthly1").html(addCommasDirect(data.success.data.table_3.e_row1.toFixed(2)));
                $("#t6_monthly2").html(addCommasDirect(data.success.data.table_3.e_row2.toFixed(2)));
                $("#t6_monthly3").html(addCommasDirect(data.success.data.table_3.e_row3.toFixed(2)));
                $("#t6_total1").html(addCommasDirect(data.success.data.table_3.total_mr_enslavement.toFixed(2)));
                $("#t6_finalmr1").html(addCommasDirect(data.success.data.table_3.final_mr_enslavement.toFixed(2)));
                $("#t6_interest1").html(addCommasDirect(data.success.data.table_3.e_interest[0]));
                $("#t6_interest2").html(addCommasDirect(data.success.data.table_3.e_interest[1]));
                $("#t6_interest3").html(addCommasDirect(data.success.data.table_3.e_interest[2]));
                $("#t6_mortgage1").html(addCommasDirect(data.success.data.table_3.e_mortgage_amount[0].toFixed(2)));
                $("#t6_mortgage2").html(addCommasDirect(data.success.data.table_3.e_mortgage_amount[1].toFixed(2)));
                $("#t6_mortgage3").html(addCommasDirect(data.success.data.table_3.e_mortgage_amount[2].toFixed(2)));

                /*Table H2-Enslavement Ends Here*/

                /*Table H3-Funding */

                $("#t7_monthly1").html(addCommasDirect(data.success.data.table_4.row1.toFixed(2)));
                $("#t7_monthly2").html(addCommasDirect(data.success.data.table_4.row2.toFixed(2)));
                $("#t7_monthly3").html(addCommasDirect(data.success.data.table_4.row3.toFixed(2)));
                $("#t7_total1").html(addCommasDirect(data.success.data.table_4.total_mr_funding.toFixed(2)));
                $("#t7_finalmr1").html(addCommasDirect(data.success.data.table_4.final_mr_funding.toFixed(2)));
                $("#t7_interest1").html(addCommasDirect(data.success.data.table_4.interest[0]));
                $("#t7_interest2").html(addCommasDirect(data.success.data.table_4.interest[1]));
                $("#t7_interest3").html(addCommasDirect(data.success.data.table_4.interest[2]));
                $("#t7_mortgage1").html(addCommasDirect(data.success.data.table_4.mortgage_amount[0].toFixed(2)));
                $("#t7_mortgage2").html(addCommasDirect(data.success.data.table_4.mortgage_amount[1].toFixed(2)));
                $("#t7_mortgage3").html(addCommasDirect(data.success.data.table_4.mortgage_amount[2].toFixed(2)));

                /*Table H3-Funding Ends Here*/

                /*Table H3-Enslavement */

                $("#t8_monthly1").html(addCommasDirect(data.success.data.table_4.e_row1.toFixed(2)));
                $("#t8_monthly2").html(addCommasDirect(data.success.data.table_4.e_row2.toFixed(2)));
                $("#t8_monthly3").html(addCommasDirect(data.success.data.table_4.e_row3.toFixed(2)));
                $("#t8_total1").html(addCommasDirect(data.success.data.table_4.total_mr_enslavement.toFixed(2)));
                $("#t8_finalmr1").html(addCommasDirect(data.success.data.table_4.final_mr_enslavement.toFixed(2)));
                $("#t8_interest1").html(addCommasDirect(data.success.data.table_4.e_interest[0]));
                $("#t8_interest2").html(addCommasDirect(data.success.data.table_4.e_interest[1]));
                $("#t8_interest3").html(addCommasDirect(data.success.data.table_4.e_interest[2]));
                $("#t8_mortgage1").html(addCommasDirect(data.success.data.table_4.e_mortgage_amount[0].toFixed(2)));
                $("#t8_mortgage2").html(addCommasDirect(data.success.data.table_4.e_mortgage_amount[1].toFixed(2)));
                $("#t8_mortgage3").html(addCommasDirect(data.success.data.table_4.e_mortgage_amount[2].toFixed(2)));

                /*Table H3-Enslavement Ends Here*/

                /*Table H4-Funding */

                $("#t9_monthly1").html(addCommasDirect(data.success.data.table_5.row1.toFixed(2)));
                $("#t9_monthly2").html(addCommasDirect(data.success.data.table_5.row2.toFixed(2)));
                $("#t9_monthly3").html(addCommasDirect(data.success.data.table_5.row3.toFixed(2)));
                $("#t9_total1").html(addCommasDirect(data.success.data.table_5.total_mr_funding.toFixed(2)));
                $("#t9_finalmr1").html(addCommasDirect(data.success.data.table_5.final_mr_funding.toFixed(2)));
                $("#t9_interest1").html(addCommasDirect(data.success.data.table_5.interest[0]));
                $("#t9_interest2").html(addCommasDirect(data.success.data.table_5.interest[1]));
                $("#t9_interest3").html(addCommasDirect(data.success.data.table_5.interest[2]));
                $("#t9_mortgage1").html(addCommasDirect(data.success.data.table_5.mortgage_amount[0].toFixed(2)));
                $("#t9_mortgage2").html(addCommasDirect(data.success.data.table_5.mortgage_amount[1].toFixed(2)));
                $("#t9_mortgage3").html(addCommasDirect(data.success.data.table_5.mortgage_amount[2].toFixed(2)));

                /*Table H4-Funding Ends Here*/

                /*Table H4-Enslavement */

                $("#t10_monthly1").html(addCommasDirect(data.success.data.table_5.e_row1.toFixed(2)));
                $("#t10_monthly2").html(addCommasDirect(data.success.data.table_5.e_row2.toFixed(2)));
                $("#t10_monthly3").html(addCommasDirect(data.success.data.table_5.e_row3.toFixed(2)));
                $("#t10_total1").html(addCommasDirect(data.success.data.table_5.total_mr_enslavement.toFixed(2)));
                $("#t10_finalmr1").html(addCommasDirect(data.success.data.table_5.final_mr_enslavement.toFixed(2)));
                $("#t10_interest1").html(addCommasDirect(data.success.data.table_5.e_interest[0]));
                $("#t10_interest2").html(addCommasDirect(data.success.data.table_5.e_interest[1]));
                $("#t10_interest3").html(addCommasDirect(data.success.data.table_5.e_interest[2]));
                $("#t10_mortgage1").html(addCommasDirect(data.success.data.table_5.e_mortgage_amount[0].toFixed(2)));
                $("#t10_mortgage2").html(addCommasDirect(data.success.data.table_5.e_mortgage_amount[1].toFixed(2)));
                $("#t10_mortgage3").html(addCommasDirect(data.success.data.table_5.e_mortgage_amount[2].toFixed(2)));

                /*Table H4-Enslavement Ends Here*/

                /*Table L1-Funding */

                $("#t11_monthly1").html(addCommasDirect(data.success.data.table_6.row1.toFixed(2)));
                $("#t11_monthly2").html(addCommasDirect(data.success.data.table_6.row2.toFixed(2)));
                $("#t11_total1").html(addCommasDirect(data.success.data.table_6.total_mr_funding.toFixed(2)));
                $("#t11_finalmr1").html(addCommasDirect(data.success.data.table_6.final_mr_funding.toFixed(2)));
                $("#t11_interest1").html(addCommasDirect(data.success.data.table_6.interest[0]));
                $("#t11_interest2").html(addCommasDirect(data.success.data.table_6.interest[1]));
                $("#t11_mortgage1").html(addCommasDirect(data.success.data.table_6.mortgage_amount[0].toFixed(2)));
                $("#t11_mortgage2").html(addCommasDirect(data.success.data.table_6.mortgage_amount[1].toFixed(2)));
             

                /*Table L1-Funding Ends Here*/

                /*Table L1-Enslavement */

                $("#t12_monthly1").html(addCommasDirect(data.success.data.table_6.e_row1.toFixed(2)));
                $("#t12_monthly2").html(addCommasDirect(data.success.data.table_6.e_row2.toFixed(2)));      
                $("#t12_total1").html(addCommasDirect(data.success.data.table_6.total_mr_enslavement.toFixed(2)));
                $("#t12_finalmr1").html(addCommasDirect(data.success.data.table_6.final_mr_enslavement.toFixed(2)));
                $("#t12_interest1").html(addCommasDirect(data.success.data.table_6.e_interest[0]));
                $("#t12_interest2").html(addCommasDirect(data.success.data.table_6.e_interest[1]));               
                $("#t12_mortgage1").html(addCommasDirect(data.success.data.table_6.e_mortgage_amount[0].toFixed(2)));
                $("#t12_mortgage2").html(addCommasDirect(data.success.data.table_6.e_mortgage_amount[1].toFixed(2)));
             

                /*Table L1-Enslavement Ends Here*/

                /*Table L2-Funding */

                $("#t13_monthly1").html(addCommasDirect(data.success.data.table_7.row1.toFixed(2)));
                $("#t13_monthly2").html(addCommasDirect(data.success.data.table_7.row2.toFixed(2)));
                $("#t13_total1").html(addCommasDirect(data.success.data.table_7.total_mr_funding.toFixed(2)));
                $("#t13_finalmr1").html(addCommasDirect(data.success.data.table_7.final_mr_funding.toFixed(2)));
                $("#t13_interest1").html(addCommasDirect(data.success.data.table_7.interest[0]));
                $("#t13_interest2").html(addCommasDirect(data.success.data.table_7.interest[1]));
                $("#t13_mortgage1").html(addCommasDirect(data.success.data.table_7.mortgage_amount[0].toFixed(2)));
                $("#t13_mortgage2").html(addCommasDirect(data.success.data.table_7.mortgage_amount[1].toFixed(2)));
             

                /*Table L2-Funding Ends Here*/

                /*Table L2-Enslavement */

                $("#t14_monthly1").html(addCommasDirect(data.success.data.table_7.e_row1.toFixed(2)));
                $("#t14_monthly2").html(addCommasDirect(data.success.data.table_7.e_row2.toFixed(2)));      
                $("#t14_total1").html(addCommasDirect(data.success.data.table_7.total_mr_enslavement.toFixed(2)));
                $("#t14_finalmr1").html(addCommasDirect(data.success.data.table_7.final_mr_enslavement.toFixed(2)));
                $("#t14_interest1").html(addCommasDirect(data.success.data.table_7.e_interest[0]));
                $("#t14_interest2").html(addCommasDirect(data.success.data.table_7.e_interest[1]));               
                $("#t14_mortgage1").html(addCommasDirect(data.success.data.table_7.e_mortgage_amount[0].toFixed(2)));
                $("#t14_mortgage2").html(addCommasDirect(data.success.data.table_7.e_mortgage_amount[1].toFixed(2)));
             

                /*Table L2-Enslavement Ends Here*/

                /*Table L3-Funding */

                $("#t15_monthly1").html(addCommasDirect(data.success.data.table_8.row1.toFixed(2)));
                $("#t15_monthly2").html(addCommasDirect(data.success.data.table_8.row2.toFixed(2)));
                $("#t15_total1").html(addCommasDirect(data.success.data.table_8.total_mr_funding.toFixed(2)));
                $("#t15_finalmr1").html(addCommasDirect(data.success.data.table_8.final_mr_funding.toFixed(2)));
                $("#t15_interest1").html(addCommasDirect(data.success.data.table_8.interest[0]));
                $("#t15_interest2").html(addCommasDirect(data.success.data.table_8.interest[1]));
                $("#t15_mortgage1").html(addCommasDirect(data.success.data.table_8.mortgage_amount[0].toFixed(2)));
                $("#t15_mortgage2").html(addCommasDirect(data.success.data.table_8.mortgage_amount[1].toFixed(2)));
             

                /*Table L3-Funding Ends Here*/

                /*Table L3-Enslavement */

                $("#t16_monthly1").html(addCommasDirect(data.success.data.table_8.e_row1.toFixed(2)));
                $("#t16_monthly2").html(addCommasDirect(data.success.data.table_8.e_row2.toFixed(2)));      
                $("#t16_total1").html(addCommasDirect(data.success.data.table_8.total_mr_enslavement.toFixed(2)));
                $("#t16_finalmr1").html(addCommasDirect(data.success.data.table_8.final_mr_enslavement.toFixed(2)));
                $("#t16_interest1").html(addCommasDirect(data.success.data.table_8.e_interest[0]));
                $("#t16_interest2").html(addCommasDirect(data.success.data.table_8.e_interest[1]));               
                $("#t16_mortgage1").html(addCommasDirect(data.success.data.table_8.e_mortgage_amount[0].toFixed(2)));
                $("#t16_mortgage2").html(addCommasDirect(data.success.data.table_8.e_mortgage_amount[1].toFixed(2)));
             

                /*Table L3-Enslavement Ends Here*/

                /*Table L4-Funding */

                $("#t17_monthly1").html(addCommasDirect(data.success.data.table_9.row1.toFixed(2)));
                $("#t17_monthly2").html(addCommasDirect(data.success.data.table_9.row2.toFixed(2)));
                $("#t17_total1").html(addCommasDirect(data.success.data.table_9.total_mr_funding.toFixed(2)));
                $("#t17_finalmr1").html(addCommasDirect(data.success.data.table_9.final_mr_funding.toFixed(2)));
                $("#t17_interest1").html(addCommasDirect(data.success.data.table_9.interest[0]));
                $("#t17_interest2").html(addCommasDirect(data.success.data.table_9.interest[1]));
                $("#t17_mortgage1").html(addCommasDirect(data.success.data.table_9.mortgage_amount[0].toFixed(2)));
                $("#t17_mortgage2").html(addCommasDirect(data.success.data.table_9.mortgage_amount[1].toFixed(2)));
             

                /*Table L4-Funding Ends Here*/

                /*Table L4-Enslavement */

                $("#t18_monthly1").html(addCommasDirect(data.success.data.table_9.e_row1.toFixed(2)));
                $("#t18_monthly2").html(addCommasDirect(data.success.data.table_9.e_row2.toFixed(2)));      
                $("#t18_total1").html(addCommasDirect(data.success.data.table_9.total_mr_enslavement.toFixed(2)));
                $("#t18_finalmr1").html(addCommasDirect(data.success.data.table_9.final_mr_enslavement.toFixed(2)));
                $("#t18_interest1").html(addCommasDirect(data.success.data.table_9.e_interest[0]));
                $("#t18_interest2").html(addCommasDirect(data.success.data.table_9.e_interest[1]));               
                $("#t18_mortgage1").html(addCommasDirect(data.success.data.table_9.e_mortgage_amount[0].toFixed(2)));
                $("#t18_mortgage2").html(addCommasDirect(data.success.data.table_9.e_mortgage_amount[1].toFixed(2)));
             

                /*Table L4-Enslavement Ends Here*/
                

                /*Table L5-Funding */

                $("#t19_monthly1").html(addCommasDirect(data.success.data.table_10.row1.toFixed(2)));
                $("#t19_monthly2").html(addCommasDirect(data.success.data.table_10.row2.toFixed(2)));
                $("#t19_total1").html(addCommasDirect(data.success.data.table_10.total_mr_funding.toFixed(2)));
                $("#t19_finalmr1").html(addCommasDirect(data.success.data.table_10.final_mr_funding.toFixed(2)));
                $("#t19_interest1").html(addCommasDirect(data.success.data.table_10.interest[0]));
                $("#t19_interest2").html(addCommasDirect(data.success.data.table_10.interest[1]));
                $("#t19_mortgage1").html(addCommasDirect(data.success.data.table_10.mortgage_amount[0].toFixed(2)));
                $("#t19_mortgage2").html(addCommasDirect(data.success.data.table_10.mortgage_amount[1].toFixed(2)));
             

                /*Table L5-Funding Ends Here*/

                /*Table L5-Enslavement */

                $("#t20_monthly1").html(addCommasDirect(data.success.data.table_10.e_row1.toFixed(2)));
                $("#t20_monthly2").html(addCommasDirect(data.success.data.table_10.e_row2.toFixed(2)));      
                $("#t20_total1").html(addCommasDirect(data.success.data.table_10.total_mr_enslavement.toFixed(2)));
                $("#t20_finalmr1").html(addCommasDirect(data.success.data.table_10.final_mr_enslavement.toFixed(2)));
                $("#t20_interest1").html(addCommasDirect(data.success.data.table_10.e_interest[0]));
                $("#t20_interest2").html(addCommasDirect(data.success.data.table_10.e_interest[1]));               
                $("#t20_mortgage1").html(addCommasDirect(data.success.data.table_10.e_mortgage_amount[0].toFixed(2)));
                $("#t20_mortgage2").html(addCommasDirect(data.success.data.table_10.e_mortgage_amount[1].toFixed(2)));
             

                /*Table L5-Enslavement Ends Here*/
                if(two_sev == 'Yes'){

                  $("#checkEnslavement_yes").prop("checked", true);
                  $("#checkEnslavement_no").prop("checked", false);
                  $("#checkEnslavement_error").prop("checked", false);
                  $('.hide_for_no').show();
                  $('.zero-show').show();
                  $('.A_future_loan').show();
                  $('.error_log_happens').html('');
                } else if(two_sev == 'No'){

                  $("#checkEnslavement_no").prop("checked", true);
                  $("#checkEnslavement_yes").prop("checked", false);
                  $("#checkEnslavement_error").prop("checked", false);
                  $('.A_future_loan').show();
                  $('.hide_for_no').html('');
                  $('.error_log_happens').html('');

                } else{
                 
                  $("#checkEnslavement_error").prop("checked", true);
                  $("#checkEnslavement_yes").prop("checked", false);
                  $("#checkEnslavement_no").prop("checked", false);
                  $('.hide_for_no').html();
                  $('.zero-show').html();
                  $('.error_log_happens').html('');
                  var email = $('.user-name a').data('email');
                  $('.error_log_happens').html('<li>1. '+email+' | Error#1: Algo Error happens</li>');
                  
                }

                /*Best Tree Value*/

                $('.best_OF_loan_tree').val(data.success.data.best_tree_findings.details);
                 var email = $('.user-name a').data('email');
                if(data.success.data.best_tree_findings.details == 'H4-Nothing Found Best' || data.success.data.best_tree_findings.details == 'L5-Nothing Found Best'){
                  $('.error_log_happens').html('');
                  $('.error_log_happens').html('<li>1. '+email+' |  ALERT: tree fit problem on <H5 or L4> tree</li>');
                }

                /*Best Tree Value Ends Here*/

                again_click_selection();

              }

            });

}
for_ajax_only_final(0);




function again_click_selection(){

  // var ratio = $('.new_ratio_class').val();
  // var ration_val = parseInt(ratio);
  // if(ration_val <= 45){
  //   $('.select_ratio').val('FundingA');
  //   $('.funding_ratio_tree').removeClass('new_ratio_class');
  //   for_ajax_only_final(0);
  // }else if(ratio <= 60){
  //   $('.select_ratio').val('FundingB');
  //   $('.funding_ratio_tree').removeClass('new_ratio_class');
  //   for_ajax_only_final(0);

  // }else{
  //   $('.select_ratio').val('FundingC');
  //   $('.funding_ratio_tree').removeClass('new_ratio_class');
  //   for_ajax_only_final(0);

  // }
  

}




 $('input[name=name11').on('click', function(){
  // $('.class="head_new"').html($(this).val());
       // alert(tab);
       for_ajax_best_tree();
       
 });

 var comma_issue = addCommasDirect($('#mortgage-fee-1-report').val());
 $('#mortgage-fee-1-report').val(comma_issue);


function change_discount_colour(){

var six_ques_banks = [];

$(".bank_account1:checked").each(function(){
      six_ques_banks.push($(this).data("id"));
  });

console.log(six_ques_banks);

var value = $('input[name=select_bank]:checked').val();
  // alert(value);

if(jQuery.inArray(value, six_ques_banks) !== -1){

  $('.report-form .indicator').removeClass('i-red');
  $('.report-form .indicator').addClass('i-green');

}else{

  $('.report-form .indicator').removeClass('i-green');
  $('.report-form .indicator').addClass('i-red');

}


}
change_discount_colour();

function demoajax(){
  var id = $('.user_id').val();
  $.ajax({
     type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://49.249.236.30:3355/api/best_tree',
                data: {
                        'user_id':id,
                         'tab':'B',     
                    },

                success: function(data)
                 {
                    console.log(data);

                    // var head = array(data.best_tree_findings.link_type[0], data.best_tree_findings.link_type[1], data.best_tree_findings.link_type[2] );
                  }
  });
}


function for_ajax_best_tree(){

   
    var user_id =  $("#user_id").val();

   
       var tab = $('input[name=name11]:checked').val();
       $('.head_new').html(tab);
       $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://49.249.236.30:3355/api/best_tree',
                data: {
                        'user_id':user_id,
                         'tab':tab,     
                      },
                beforeSend: function(){
                 //$('#loader-global').show();
             },
             complete: function(){
                 //$('#loader-global').hide();
             }, 
             success: function(data)
             {
                console.log(data);

               
                $('#funding_morg_tree').val(addCommasDirect(data.data.total_twenty_point_eight.toFixed(2)));
                $('#enslavement_morg_tree').val(addCommasDirect(data.data.total_twenty_point_nine.toFixed(2)));

                $('#funding_ratio_tree').val(addCommasDirect(data.data.total_twenty_point_eight_ratio.toFixed(2)));
                $('#enslavement_ratio_tree').val(addCommasDirect(data.data.total_twenty_point_nine_ratio.toFixed(2)));
                $('.best_OF_loan_tree').val(data.data.best_tree_findings.details);

                var tree = data.data.best_tree_findings.details;
                var fund = data.data.best_tree_findings.funding;
                // alert(fund);
                // $('#funding_type').val(fund).find('option[value=');
                $("#funding_type_").val(fund) .find("option[value=" + fund +"]").attr('selected', true);
               
                 var best_ = tree.split("-");

                 $('.head').html(best_[0]);

                 var dum= best_[0];
                      switch (dum) {
                        case 'H1':
                        
                            $('.span_test_one').text('*After 10 years [min B]: recycle A+E, if B=E=10 years recycle only A');
                            $('.span_test_two').text('Y go from 10 to 30');
                            $('.span_test_three').text('** First do elegebility process for B>E>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After 10 years [min B]: recycle A+E, if B=E=10 years recycle only A');
                            $('.e_span_test_two').text('Y go from 10 to 30');
                            $('.e_span_test_three').text('** No elegebility');


                            break;
                        case 'H2':
                            $('.span_test_one').text('*After Y years [min C]: recycle A+E. if C=E=A=30 years dont do recycle.');
                            $('.span_test_two').text('Y go from 10 to 30');
                            $('.span_test_three').text('** No elegebility');
                            $('.e_span_test_one').text('*After Y years [min C]: recycle A+E. if C=E=A=30 years dont do recycle.');
                            $('.e_span_test_two').text('Y go from 10 to 30');
                            $('.e_span_test_three').text('** No elegebility');
                            break;
                        case 'H3':
                            $('.span_test_one').text('*After Y years [min C]: recycle A+E. if C=E=A=30 years dont do recycle.');
                            $('.span_test_two').text('Y go from 10 to 30');
                            $('.span_test_three').text('** No elegebility');
                            $('.e_span_test_one').text('*After Y years [min C]: recycle A+E. if C=E=A=30 years dont do recycle.');
                            $('.e_span_test_two').text('Y go from 10 to 30');
                            $('.e_span_test_three').text('** No elegebility');
                            break;
                        case 'H4':
                            $('.span_test_one').text('*After Y years [min C]: recycle A+D. if A=D=C=30 years dont do recycle.');
                            $('.span_test_two').text('Y go from 10 to 30');
                            $('.span_test_three').text('** First do elegebility process for B>D>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After Y years [min B]: recycle A+D. if A=D=B=30 years dont do recycle.');
                            $('.e_span_test_two').text('Y go from 10 to 30');
                            $('.e_span_test_three').text('** No elegebility');
                            break;
                        case 'L1':
                            $('.span_test_one').text('*After 10 years [min B]: recycle A');
                            $('.span_test_two').text('Y go from 30 to 25');
                            $('.span_test_three').text('** First do elegebility process for B>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After 10 years [min B]: recycle A');
                            $('.e_span_test_two').text('Y go from 30 to 25');
                            $('.e_span_test_three').text('** No elegebility');
                            break; 
                        case 'L2':
                            $('.span_test_one').text('*After Y years [min B]: recycle A');
                            $('.span_test_two').text('Y go from 10 to 8');
                            $('.span_test_three').text('** First do elegebility process for B>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After Y years [min B]: recycle A');
                            $('.e_span_test_two').text('Y go from 10 to 8');
                            $('.e_span_test_three').text('** No elegebility');
                            break; 

                        case 'L3':
                            $('.span_test_one').text('*After 8 years [min B]: recycle A');
                            $('.span_test_two').text('Y go from 25 to 20');
                            $('.span_test_three').text('** First do elegebility process for B>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After 8 years [min B]: recycle A');
                            $('.e_span_test_two').text('Y go from 25 to 20');
                            $('.e_span_test_three').text('** No elegebility');
                            break; 
                        case 'L4':
                            $('.span_test_one').text('*After 8 years [min B]: recycle A');
                            $('.span_test_two').text('Y go from 8 to 4');
                            $('.span_test_three').text('** First do elegebility process for B>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After 8 years [min B]: recycle A');
                            $('.e_span_test_two').text('Y go from 8 to 4');
                            $('.e_span_test_three').text('** No elegebility');
                            break; 
                        case 'L5':
                            $('.span_test_one').text('*After 4 years [min B]: recycle A. if A=B=4 don’t do recycle.');
                            $('.span_test_two').text('Y go from 20 to 4');
                            $('.span_test_three').text('** First do elegebility process for B>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After 4 years [min B]: recycle A. if A=B=4 don’t do recycle.');
                            $('.e_span_test_two').text('Y go from 20 to 4');
                            $('.e_span_test_three').text('** No elegebility');
                            break; 
                        default:
                            $('.span_test_one').text('*After 10 years [min B]: recycle A');
                            $('.span_test_two').text('');
                            $('.span_test_three').text('** First do elegebility process for B>A according of elegebility TABLE.');
                            $('.e_span_test_one').text('*After 10 years [min B]: recycle A');
                            $('.e_span_test_two').text('');
                            $('.e_span_test_three').text('** No elegebility');
                            break;
                    }

                var a= data.data.total_twenty_point_seven;
                if(a == 'Yes'){
                  $("#checkEnslavement_yes").prop("checked", true);
                  $("#checkEnslavement_no").prop("checked", false);
                  $("#checkEnslavement_error").prop("checked", false);
                } else if( a == 'No'){
                   $("#checkEnslavement_no").prop("checked", true);
                  $("#checkEnslavement_yes").prop("checked", false);
                  $("#checkEnslavement_error").prop("checked", false);
                } else{
                  $("#checkEnslavement_error").prop("checked", true);
                  $("#checkEnslavement_yes").prop("checked", false);
                  $("#checkEnslavement_no").prop("checked", false);
                }
                // alert(best_[0]);

                /*Best Tree Values*/
                if(best_[0] == 'H1' || best_[0] == 'H2'  || best_[0] == 'H3'  || best_[0] == 'H4'  ){
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                var part3= data.data.best_tree_findings.divide[2];
                if(part1 == 1){
                  $('#partvalue1').html(0.333);
                  $('#partvalue1_e').html(0.333);
                } else{
                  $('#partvalue1').html(0.666);
                  $('#partvalue1_e').html(0.666);
                }

                if(part2 == 1){
                  $('#partvalue2').html(0.333);
                  $('#partvalue2_e').html(0.333);
                } else{
                  $('#partvalue2').html(0.666);
                  $('#partvalue2_e').html(0.666);
                }

                if(part3 == 1){
                  $('#partvalue3').html(0.333);
                  $('#partvalue3_e').html(0.333);
                } else{
                  $('#partvalue3').html(0.666);
                  $('#partvalue3_e').html(0.666);
                }

                $('#intrest1').html(data.data.best_tree_findings.full.interest[0]);
                $('#intrest2').html(data.data.best_tree_findings.full.interest[1]);
                $('#intrest3').html(data.data.best_tree_findings.full.interest[2]);

                $('#intrest1_e').html(data.data.best_tree_findings.full.e_interest[0]);
                $('#intrest2_e').html(data.data.best_tree_findings.full.e_interest[1]);
                $('#intrest3_e').html(data.data.best_tree_findings.full.e_interest[2]);

                $('#morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('#morg2').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('#morg3').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[2].toFixed(2)));

                $('#morg1_e').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('#morg2_e').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('#morg3_e').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[2].toFixed(2)));


                $('#totalpmt1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_funding.toFixed(2)));
                $('#totalpmt1_e').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_enslavement.toFixed(2)));

                $('#finalpmt1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('#finalpmt1_e').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('#pmt1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('#pmt2').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('#pmt3').html(addCommasDirect(data.data.best_tree_findings.full.row3.toFixed(2)));

                $('#pmt1_e').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('#pmt2_e').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('#pmt3_e').html(addCommasDirect(data.data.best_tree_findings.full.e_row3.toFixed(2)));

                $('#year1').html(data.data.best_tree_findings.years[0]);
                $('#year2').html(data.data.best_tree_findings.years[1]);
                $('#year3').html(data.data.best_tree_findings.years[2]);

                $('#year1_e').html(data.data.best_tree_findings.years[0]);
                $('#year2_e').html(data.data.best_tree_findings.years[1]);
                $('#year3_e').html(data.data.best_tree_findings.years[2]);

                $('#part1').html(data.data.best_tree_findings.link_type[0]);
                $('#part2').html(data.data.best_tree_findings.link_type[1]);
                $('#part3').html(data.data.best_tree_findings.link_type[2]); 

                $('#part1_e').html(data.data.best_tree_findings.link_type[0]);
                $('#part2_e').html(data.data.best_tree_findings.link_type[1]);
                $('#part3_e').html(data.data.best_tree_findings.link_type[2]);

                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('#head1').html('Prime');
                  $('#head1_e').html('Prime');
                } else if(data.data.best_tree_findings.link_type[0] == 'B' || data.data.best_tree_findings.link_type[0] == 'D'){
                  $('#head1').html('Linked');
                  $('#head1_e').html('Linked');
                } else {
                  $('#head1').html('Not Linked');
                  $('#head1_e').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('#head2').html('Prime');
                  $('#head2_e').html('Prime');
                } else if(data.data.best_tree_findings.link_type[1] == 'B' || data.data.best_tree_findings.link_type[1] == 'D'){
                  $('#head2').html('Linked');
                  $('#head2_e').html('Linked');
                } else {
                  $('#head2').html('Not Linked');
                  $('#head2_e').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[2] == 'A'){
                  $('#head3').html('Prime');
                  $('#head3_e').html('Prime');
                } else if(data.data.best_tree_findings.link_type[2] == 'B' || data.data.best_tree_findings.link_type[2] == 'D'){
                  $('#head3').html('Linked');
                  $('#head3_e').html('Linked');
                } else {
                  $('#head3').html('Not Linked');
                  $('#head3_e').html('Not Linked ');
                } 
                 
              } else{
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                
                if(part1 == 1){
                  $('#partvalue1').html(0.333);
                  $('#partvalue1_e').html(0.333);
                } else{
                  $('#partvalue1').html(0.666);
                  $('#partvalue1_e').html(0.666);
                }

                if(part2 == 1){
                  $('#partvalue2').html(0.333);
                  $('#partvalue2_e').html(0.333);
                } else{
                  $('#partvalue2').html(0.666);
                  $('#partvalue2_e').html(0.666);
                }

               
                  $('#partvalue3').hide();
                  $('#partvalue3_e').hide();
               

                $('#intrest1').html(data.data.best_tree_findings.full.interest[0]);
                $('#intrest2').html(data.data.best_tree_findings.full.interest[1]);
                $('#intrest3').hide();

                $('#intrest1_e').html(data.data.best_tree_findings.full.e_interest[0]);
                $('#intrest2_e').html(data.data.best_tree_findings.full.e_interest[1]);
                $('#intrest3_e').hide();

                $('#morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('#morg2').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('#morg3').hide();

                $('#morg1_e').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('#morg2_e').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('#morg3_e').hide();


                $('#totalpmt1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_funding.toFixed(2)));
                $('#totalpmt1_e').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_enslavement.toFixed(2)));

                $('#finalpmt1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('#finalpmt1_e').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('#pmt1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('#pmt2').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('#pmt3').hide();

                $('#pmt1_e').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('#pmt2_e').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('#pmt3_e').hide();

                $('#year1').html(data.data.best_tree_findings.years[0]);
                $('#year2').html(data.data.best_tree_findings.years[1]);
                $('#year3').hide();

                $('#year1_e').html(data.data.best_tree_findings.years[0]);
                $('#year2_e').html(data.data.best_tree_findings.years[1]);
                $('#year3_e').hide();

                $('#part1').html(data.data.best_tree_findings.link_type[0]);
                $('#part2').html(data.data.best_tree_findings.link_type[1]);
                $('#part3').hide(); 

                $('#part1_e').html(data.data.best_tree_findings.link_type[0]);
                $('#part2_e').html(data.data.best_tree_findings.link_type[1]);
                $('#part3_e').hide();

                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  
                  $('#head1').html('Prime');
                  $('#head1_e').html('Prime');
                  $('#head2').html('Linked');
                  $('#head2_e').html('Linked');
                }
                else {

                  $('#head1').html('Linked');
                  $('#head1_e').html('Linked');
                  $('#head2').html('Prime');
                  $('#head2_e').html('Prime');
                } 

               

                $('#head3').hide();
                $('#head3_e').hide();
                 
              }



              /*Step 2*/


              if(data.second.part_f_funding == '' && data.second.part_g_funding == ''){
               
                if(best_[0] == 'H1' || best_[0] == 'H2'  || best_[0] == 'H3'  || best_[0] == 'H4'  ){

                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                var part3= data.data.best_tree_findings.divide[2];
                if(part1 == 1){
                  $('.step2_part1').html(0.333);
                  $('.e_step2_part1').html(0.333);
                } else{
                  $('.step2_part1').html(0.666);
                  $('.e_step2_part1').html(0.666);
                }

                if(part2 == 1){
                  $('.step2_part4').html(0.333);
                  $(' .e_step2_part4').html(0.333);
                } else{
                  $(' .step2_part4').html(0.666);
                  $(' .e_step2_part4').html(0.666);
                }

                if(part3 == 1){
                  $(' .step2_part5').html(0.333);
                  $(' .e_step2_part5').html(0.333);
                } else{
                  $('.step2_part5').html(0.666);
                  $('.e_step2_part5').html(0.666);
                }

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').html(data.data.best_tree_findings.full.interest[2]);

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').html(data.data.best_tree_findings.full.e_interest[2]);

                $('.step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[2].toFixed(2)));

                $('.e_step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[2].toFixed(2)));


                $('.step2_totalmr1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_funding.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_enslavement.toFixed(2)));

                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.row3.toFixed(2)));

                $('.e_step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.e_row3.toFixed(2)));

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').html(data.data.best_tree_findings.link_type[2]); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').html(data.data.best_tree_findings.link_type[2]);

                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else if(data.data.best_tree_findings.link_type[0] == 'B'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else if(data.data.best_tree_findings.link_type[0] == 'D'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else {
                  $('.step2_head1').html('Not Linked');
                  $('.e_step2_head1').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else if(data.data.best_tree_findings.link_type[1] == 'B'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else if(data.data.best_tree_findings.link_type[1] == 'D'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else {
                  $('.step2_head4').html('Not Linked');
                  $('.e_step2_head4').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[2] == 'A'){
                  $('.step2_head5').html('Prime');
                  $('.e_step2_head5').html('Prime');
                } else if(data.data.best_tree_findings.link_type[2] == 'B'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                }  else if(data.data.best_tree_findings.link_type[2] == 'D'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                } else {
                  $('.step2_head5').html('Not Linked');
                  $('.e_step2_head5').html('Not Linked ');
                } 

                $('.step2_head2, .step2_part2, .step2_int2, .step2_morg2, .step2_final2, .step2_totalmr2, .step2_mr2, .step2_year2, .step2_type2').hide();
                $('.step2_head3, .step2_part3, .step2_int3, .step2_morg3, .step2_final3, .step2_totalmr3, .step2_mr3, .step2_year3, .step2_type3').hide();
                $('.e_step2_head2, .e_step2_part2, .e_step2_int2, .e_step2_morg2, .e_step2_final2, .e_step2_totalmr2, .e_step2_mr2, .e_step2_year2, .e_step2_type2').hide();
                $('.e_step2_head3, .e_step2_part3, .e_step2_int3, .e_step2_morg3, .e_step2_final3, .e_step2_totalmr3, .e_step2_mr3, .e_step2_year3, .e_step2_type3').hide();

                
                 
              } else{  
                $('.step2_head2, .step2_part2, .step2_int2, .step2_morg2, .step2_final2, .step2_totalmr2, .step2_mr2, .step2_year2, .step2_type2').hide();
                $('.e_step2_head2, .e_step2_part2, .e_step2_int2, .e_step2_morg2, .e_step2_final2, .e_step2_totalmr2, .e_step2_mr2, .e_step2_year2, .e_step2_type2').hide();
                $('.step2_head3, .step2_part3, .step2_int3, .step2_morg3, .step2_final3, .step2_totalmr3, .step2_mr3, .step2_year3, .step2_type3').hide();
                $('.e_step2_head3, .e_step2_part3, .e_step2_int3, .e_step2_morg3, .e_step2_final3, .e_step2_totalmr3, .e_step2_mr3, .e_step2_year3, .e_step2_type3').hide();
                $('.step2_head5, .step2_part5, .step2_int5, .step2_morg5, .step2_final5, .step2_totalmr5, .step2_mr5, .step2_year5, .step2_type5').hide();
                $('.e_step2_head5, .e_step2_part5, .e_step2_int5, .e_step2_morg5, .e_step2_final5, .e_step2_totalmr5, .e_step2_mr5, .e_step2_year5, .e_step2_type5').hide();
                $('.step2_final4, .step2_totalmr4').html('');
                $('.e_step2_final4, .e_step2_totalmr4').html('');
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
               
                if(part1 == 1){
                  $('.step2_part1').html(0.333);
                  $('.e_step2_part1').html(0.333);
                } else{
                  $('.step2_part1').html(0.666);
                  $('.e_step2_part1').html(0.666);
                }

                if(part2 == 1){
                  $('.step2_part4').html(0.333);
                  $(' .e_step2_part4').html(0.333);
                } else{
                  $(' .step2_part4').html(0.666);
                  $(' .e_step2_part4').html(0.666);
                }

                

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').hide();

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').hide();

                $('.step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_totalmr1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_funding.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_enslavement.toFixed(2)));

                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').hide();

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').hide();

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').hide(); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').hide();

                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else {
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } 

                
              } else if(data.second.part_f_funding != '' && data.second.part_g_funding == ''){

               
                if(best_[0] == 'H1' || best_[0] == 'H2'  || best_[0] == 'H3'  || best_[0] == 'H4'  ){
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                var part3= data.data.best_tree_findings.divide[2];

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));
                

                if(part2 == 1){
                  $('.step2_part4').html(0.333);
                  $(' .e_step2_part4').html(0.333);
                } else{
                  $(' .step2_part4').html(0.666);
                  $(' .e_step2_part4').html(0.666);
                }

                if(part3 == 1){
                  $(' .step2_part5').html(0.333);
                  $(' .e_step2_part5').html(0.333);
                } else{
                  $('.step2_part5').html(0.666);
                  $('.e_step2_part5').html(0.666);
                }

                $('.step2_head2').html('Euro');
                $('.e_step2_head2').html('Euro');
                $('.step2_type2').html('F');
                $('.e_step2_type2').html('F');
                $('.step2_part2').show();
                $('.step2_totalmr2').html('');
                $('.step2_final2').html('');
                $('.step2_totalmr4').html('');
                $('.step2_final4').html('');
                $('.step2_totalmr5').html('');
                $('.step2_final5').html('');

                $('.e_step2_totalmr2').html('');
                $('.e_step2_final2').html('');
                $('.e_step2_totalmr4').html('');
                $('.e_step2_final4').html('');
                $('.e_step2_totalmr5').html('');
                $('.e_step2_final5').html('');
                $('.step2_morg2').html(data.second.morg_f_funding.toFixed(2));
                $('.e_step2_morg2').html(data.second.morg_f_enslavement.toFixed(2));
                $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
                $('.step2_int2').html(data.second.intrest_f_funding);
                $('.e_step2_int2').html(data.second.intrest_f_enslavement);
                $('.step2_mr2').html(data.second.pmt_f_funding.toFixed(2));
                $('.e_step2_mr2').html(data.second.pmt_f_enslavement.toFixed(2));


                var new_total =data.second.total_fund + data.data.best_tree_findings.full.row2 + data.data.best_tree_findings.full.row3 ;
                var new_total_ens =data.second.total_ensl + data.data.best_tree_findings.full.e_row2 + data.data.best_tree_findings.full.e_row3 ;
                 var final_both = new_total + new_total_ens;

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').html(data.data.best_tree_findings.full.interest[2]);

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').html(data.data.best_tree_findings.full.e_interest[2]);

                $('.step2_morg1').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[2].toFixed(2)));

                $('.e_step2_morg1').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[2].toFixed(2)));


                $('.step2_totalmr1').html(addCommasDirect(new_total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(new_total_ens.toFixed(2)));

                $('.step2_final1').html(addCommasDirect(final_both.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(final_both.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.row3.toFixed(2)));

                $('.e_step2_mr1').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.e_row3.toFixed(2)));

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').html(data.data.best_tree_findings.link_type[2]); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').html(data.data.best_tree_findings.link_type[2]);

               if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else if(data.data.best_tree_findings.link_type[0] == 'B'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else if(data.data.best_tree_findings.link_type[0] == 'D'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else {
                  $('.step2_head1').html('Not Linked');
                  $('.e_step2_head1').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else if(data.data.best_tree_findings.link_type[1] == 'B'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else if(data.data.best_tree_findings.link_type[1] == 'D'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else {
                  $('.step2_head4').html('Not Linked');
                  $('.e_step2_head4').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[2] == 'A'){
                  $('.step2_head5').html('Prime');
                  $('.e_step2_head5').html('Prime');
                } else if(data.data.best_tree_findings.link_type[2] == 'B'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                }  else if(data.data.best_tree_findings.link_type[2] == 'D'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                } else {
                  $('.step2_head5').html('Not Linked');
                  $('.e_step2_head5').html('Not Linked ');
                } 
                  $('.step2_head3, .step2_part3, .step2_int3, .step2_morg3, .step2_final3, .step2_totalmr3, .step2_mr3, .step2_year3, .step2_type3').hide();
                $('.e_step2_head3, .e_step2_part3, .e_step2_int3, .e_step2_morg3, .e_step2_final3, .e_step2_totalmr3, .e_step2_mr3, .e_step2_year3, .e_step2_type3').hide();

                
                 
              } 

               else{  
                   $('.step2_head3, .step2_part3, .step2_int3, .step2_morg3, .step2_final3, .step2_totalmr3, .step2_mr3, .step2_year3, .step2_type3').hide();
                   $('.e_step2_head3, .e_step2_part3, .e_step2_int3, .e_step2_morg3, .e_step2_final3, .e_step2_totalmr3, .e_step2_mr3, .e_step2_year3, .e_step2_type3').hide();
                   $('.step2_head5, .step2_part5, .step2_int5, .step2_morg5, .step2_final5, .step2_totalmr5, .step2_mr5, .step2_year5, .step2_type5').hide();
                   $('.e_step2_head5, .e_step2_part5, .e_step2_int5, .e_step2_morg5, .e_step2_final5, .e_step2_totalmr5, .e_step2_mr5, .e_step2_year5, .e_step2_type5').hide();
                
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                

                if(data.data.best_tree_findings.link_type[1] == 'A'){


                  $('.step2_head2').html('Euro');
                  $('.e_step2_head2').html('Euro');
                  $('.step2_type2').html('F');
                  $('.e_step2_type2').html('F');

                  $('.step2_totalmr2').html('');
                  $('.step2_final2').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr2').html('');
                  $('.e_step2_final2').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');

                    if(part1 == 1){
                      $('.step2_part1').html(0.333);
                      $('.e_step2_part1').html(0.333);
                    } else{
                      $('.step2_part1').html(0.666);
                      $('.e_step2_part1').html(0.666);
                    }

                
                  $('.step2_part4').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part4').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int2').html(data.second.intrest_f_funding.toFixed(2));
                  $('.e_step2_int2').html(data.second.intrest_f_enslavement.toFixed(2));
                  $('.step2_year2').html(data.data.best_tree_findings.years[1]);
                  $('.step2_mr2').html(data.second.pmt_f_funding.toFixed(2));
                  $('.e_step2_mr2').html(data.second.pmt_f_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[1]);
             
                 
             
                  
                

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').hide();

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').hide();

                $('.step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg2').html(addCommasDirect(data.second.morg_f_funding.toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg2').html(addCommasDirect(data.second.morg_f_enslavement.toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').hide();

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').hide();

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').hide(); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').hide();
                var total =data.data.best_tree_findings.full.row1 + data.second.total_fund;
                var total_ens =data.data.best_tree_findings.full.e_row1 + data.second.total_ensl;
                var gt = total+total_ens;
                $('.step2_totalmr1').html(addCommasDirect(total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(total_ens.toFixed(2)));
                $('.step2_final1, .e_step2_final1').html(gt.toFixed(2));
               


                }  else{                                      //Step1 Else Check



                  $('.step2_head2').html('Euro');
                  $('.e_step2_head2').html('Euro');
                  $('.step2_type2').html('F');
                  $('.e_step2_type2').html('F');

                  $('.step2_totalmr2').html('');
                  $('.step2_final2').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr2').html('');
                  $('.e_step2_final2').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');
                  var part2= data.data.best_tree_findings.divide[1];
                    if(part2 == 1){
                      $('.step2_part4').html(0.333);
                      $('.e_step2_part4').html(0.333);
                    }else{
                      $('.step2_part4').html(0.666);
                      $('.e_step2_part4').html(0.666);
                    }

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int2').html(data.second.intrest_f_funding);
                  $('.e_step2_int2').html(data.second.intrest_f_enslavement);
                  $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                  $('.step2_mr2').html(data.second.pmt_f_funding.toFixed(2));
                  $('.e_step2_mr2').html(data.second.pmt_f_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
             
                 
             
                  
                

                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int5').hide();

                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int5').hide();

                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg1').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg2').html(addCommasDirect(data.second.morg_f_funding.toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg1').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg2').html(addCommasDirect(data.second.morg_f_enslavement.toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr1').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr1').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year5').hide();

                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year5').hide();

                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type5').hide(); 

                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type5').hide();

                var total =data.data.best_tree_findings.full.row2 + data.second.total_fund;
                var total_ens =data.data.best_tree_findings.full.e_row2 + data.second.total_ensl;
                var gt = total+total_ens;
                $('.step2_totalmr1').html(addCommasDirect(total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(total_ens.toFixed(2)));
                $('.step2_final1, .e_step2_final1').html(gt.toFixed(2));
            
                }


                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else {
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } 

                
              
              }  else if(data.second.part_f_funding == '' && data.second.part_g_funding != ''){

                if(best_[0] == 'H1' || best_[0] == 'H2'  || best_[0] == 'H3'  || best_[0] == 'H4'  ){
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                var part3= data.data.best_tree_findings.divide[2];

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));
                

                if(part2 == 1){
                  $('.step2_part4').html(0.333);
                  $(' .e_step2_part4').html(0.333);
                } else{
                  $(' .step2_part4').html(0.666);
                  $(' .e_step2_part4').html(0.666);
                }

                if(part3 == 1){
                  $(' .step2_part5').html(0.333);
                  $(' .e_step2_part5').html(0.333);
                } else{
                  $('.step2_part5').html(0.666);
                  $('.e_step2_part5').html(0.666);
                }

                $('.step2_head2').html('Dollar');
                $('.e_step2_head2').html('Dollar');
                $('.step2_type2').html('G');
                $('.e_step2_type2').html('G');
                $('.step2_part2').show();
                $('.step2_totalmr2').html('');
                $('.step2_final2').html('');
                $('.step2_totalmr4').html('');
                $('.step2_final4').html('');
                $('.step2_totalmr5').html('');
                $('.step2_final5').html('');

                $('.e_step2_totalmr2').html('');
                $('.e_step2_final2').html('');
                $('.e_step2_totalmr4').html('');
                $('.e_step2_final4').html('');
                $('.e_step2_totalmr5').html('');
                $('.e_step2_final5').html('');
                $('.step2_morg2').html(data.second.morg_g_funding.toFixed(2));
                $('.e_step2_morg2').html(data.second.morg_g_enslavement.toFixed(2));
                $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
                $('.step2_int2').html(data.second.intrest_g_funding);
                $('.e_step2_int2').html(data.second.intrest_g_enslavement);
                $('.step2_mr2').html(data.second.pmt_g_funding.toFixed(2));
                $('.e_step2_mr2').html(data.second.pmt_g_enslavement.toFixed(2));

                var new_total =data.second.total_fund + data.data.best_tree_findings.full.row2 + data.data.best_tree_findings.full.row3 ;
                var new_total_ens =data.second.total_ensl + data.data.best_tree_findings.full.e_row2 + data.data.best_tree_findings.full.e_row3 ;
                 var final_both = new_total + new_total_ens;

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').html(data.data.best_tree_findings.full.interest[2]);

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').html(data.data.best_tree_findings.full.e_interest[2]);

                $('.step2_morg1').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[2].toFixed(2)));

                $('.e_step2_morg1').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[2].toFixed(2)));


                $('.step2_totalmr1').html(addCommasDirect(new_total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(new_total_ens.toFixed(2)));

                $('.step2_final1').html(addCommasDirect(final_both.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(final_both.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.row3.toFixed(2)));

                $('.e_step2_mr1').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.e_row3.toFixed(2)));

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').html(data.data.best_tree_findings.link_type[2]); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').html(data.data.best_tree_findings.link_type[2]);

                 if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else if(data.data.best_tree_findings.link_type[0] == 'B'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else if(data.data.best_tree_findings.link_type[0] == 'D'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else {
                  $('.step2_head1').html('Not Linked');
                  $('.e_step2_head1').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else if(data.data.best_tree_findings.link_type[1] == 'B'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else if(data.data.best_tree_findings.link_type[1] == 'D'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else {
                  $('.step2_head4').html('Not Linked');
                  $('.e_step2_head4').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[2] == 'A'){
                  $('.step2_head5').html('Prime');
                  $('.e_step2_head5').html('Prime');
                } else if(data.data.best_tree_findings.link_type[2] == 'B'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                }  else if(data.data.best_tree_findings.link_type[2] == 'D'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                } else {
                  $('.step2_head5').html('Not Linked');
                  $('.e_step2_head5').html('Not Linked ');
                } 
        
                 $('.step2_head3, .step2_part3, .step2_int3, .step2_morg3, .step2_final3, .step2_totalmr3, .step2_mr3, .step2_year3, .step2_type3').hide();
                
                $('.e_step2_head3, .e_step2_part3, .e_step2_int3, .e_step2_morg3, .e_step2_final3, .e_step2_totalmr3, .e_step2_mr3, .e_step2_year3, .e_step2_type3').hide();

                
                 
              } 

               else{  
                 
                 $('.step2_head3, .step2_part3, .step2_int3, .step2_morg3, .step2_final3, .step2_totalmr3, .step2_mr3, .step2_year3, .step2_type3').hide();
                 $('.e_step2_head3, .e_step2_part3, .e_step2_int3, .e_step2_morg3, .e_step2_final3, .e_step2_totalmr3, .e_step2_mr3, .e_step2_year3, .e_step2_type3').hide();
                 $('.step2_head5, .step2_part5, .step2_int5, .step2_morg5, .step2_final5, .step2_totalmr5, .step2_mr5, .step2_year5, .step2_type5').hide();
                 $('.e_step2_head5, .e_step2_part5, .e_step2_int5, .e_step2_morg5, .e_step2_final5, .e_step2_totalmr5, .e_step2_mr5, .e_step2_year5, .e_step2_type5').hide();
               
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];

                if(data.data.best_tree_findings.link_type[1] == 'A'){


                  $('.step2_head2').html('Dollar');
                  $('.e_step2_head2').html('Dollar');
                  $('.step2_type2').html('G');
                  $('.e_step2_type2').html('G');

                  $('.step2_totalmr2').html('');
                  $('.step2_final2').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr2').html('');
                  $('.e_step2_final2').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');

                    if(part1 == 1){
                      $('.step2_part1').html(0.333);
                      $('.e_step2_part1').html(0.333);
                    } else{
                      $('.step2_part1').html(0.666);
                      $('.e_step2_part1').html(0.666);
                    }

                
                  $('.step2_part4').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part4').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int2').html(data.second.intrest_g_funding);
                  $('.e_step2_int2').html(data.second.intrest_g_enslavement);
                  $('.step2_year2').html(data.data.best_tree_findings.years[1]);
                  $('.step2_mr2').html(data.second.pmt_g_funding.toFixed(2));
                  $('.e_step2_mr2').html(data.second.pmt_g_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[1]);
             
                 
             
                  
                

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').hide();

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').hide();

                $('.step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg2').html(addCommasDirect(data.second.morg_g_funding.toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg2').html(addCommasDirect(data.second.morg_g_enslavement.toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').hide();

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').hide();

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').hide(); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').hide();
               


                }   else{                                      //Step1 Else Check



                  $('.step2_head2').html('Dollar');
                  $('.e_step2_head2').html('Dollar');
                  $('.step2_type2').html('G');
                  $('.e_step2_type2').html('G');

                  $('.step2_totalmr2').html('');
                  $('.step2_final2').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr2').html('');
                  $('.e_step2_final2').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');
                  var part2= data.data.best_tree_findings.divide[1];
                    if(part2 == 1){
                      $('.step2_part4').html(0.333);
                      $('.e_step2_part4').html(0.333);
                    }else{
                      $('.step2_part4').html(0.666);
                      $('.e_step2_part4').html(0.666);
                    }

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int2').html(data.second.intrest_g_funding);
                  $('.e_step2_int2').html(data.second.intrest_g_enslavement);
                  $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                  $('.step2_mr2').html(data.second.pmt_g_funding.toFixed(2));
                  $('.e_step2_mr2').html(data.second.pmt_g_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
             
                 
             
                  
                

                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int5').hide();

                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int5').hide();

                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg1').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg2').html(addCommasDirect(data.second.morg_g_funding.toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg1').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg2').html(addCommasDirect(data.second.morg_g_enslavement.toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr1').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr1').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year5').hide();

                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year5').hide();

                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type5').hide(); 

                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type5').hide();

                var total =data.data.best_tree_findings.full.row2 + data.second.total_fund;
                var total_ens =data.data.best_tree_findings.full.e_row2 + data.second.total_ensl;
                var gt = total+total_ens;
                $('.step2_totalmr1').html(addCommasDirect(total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(total_ens.toFixed(2)));
                $('.step2_final1, .e_step2_final1').html(gt.toFixed(2));
            
                }

               
               

                
                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else {
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } 

                
              
              

              } else{

                if(best_[0] == 'H1' || best_[0] == 'H2'  || best_[0] == 'H3'  || best_[0] == 'H4'  ){
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];
                var part3= data.data.best_tree_findings.divide[2];

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));
                

                if(part2 == 1){
                  $('.step2_part4').html(0.333);
                  $(' .e_step2_part4').html(0.333);
                } else{
                  $(' .step2_part4').html(0.666);
                  $(' .e_step2_part4').html(0.666);
                }

                if(part3 == 1){
                  $(' .step2_part5').html(0.333);
                  $(' .e_step2_part5').html(0.333);
                } else{
                  $('.step2_part5').html(0.666);
                  $('.e_step2_part5').html(0.666);
                }

                $('.step2_head3').html('Euro');
                $('.e_step2_head3').html('Euro');
                $('.step2_type3').html('F');
                $('.e_step2_type3').html('F');
                $('.step2_part3').show();
                $('.step2_totalmr3').html('');
                $('.step2_final3').html('');
                $('.step2_totalmr3').html('');
                $('.step2_final3').html('');
                $('.step2_totalmr3').html('');
                $('.step2_final3').html('');

                $('.e_step2_totalmr3').html('');
                $('.e_step2_final3').html('');
                $('.e_step2_totalmr4').html('');
                $('.e_step2_final4').html('');
                $('.e_step2_totalmr5').html('');
                $('.e_step2_final5').html('');
                $('.step2_morg3').html(data.second.morg_f_funding.toFixed(2));
                $('.e_step2_morg3').html(data.second.morg_f_enslavement.toFixed(2));
                $('.step2_year3').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year3').html(data.data.best_tree_findings.years[0]);
                $('.step2_int3').html(data.second.intrest_f_funding);
                $('.e_step2_int3').html(data.second.intrest_f_enslavement);
                $('.step2_mr3').html(data.second.pmt_f_funding.toFixed(2));
                $('.e_step2_mr3').html(data.second.pmt_f_enslavement.toFixed(2));



                $('.step2_head2').html('Dollar');
                $('.e_step2_head2').html('Dollar');
                $('.step2_type2').html('G');
                $('.e_step2_type2').html('G');
                $('.step2_part2').show();
                $('.step2_totalmr2').html('');
                $('.step2_final2').html('');
                $('.step2_totalmr4').html('');
                $('.step2_final4').html('');
                $('.step2_totalmr5').html('');
                $('.step2_final5').html('');

                $('.e_step2_totalmr2').html('');
                $('.e_step2_final2').html('');
                $('.e_step2_totalmr4').html('');
                $('.e_step2_final4').html('');
                $('.e_step2_totalmr5').html('');
                $('.e_step2_final5').html('');
                $('.step2_morg2').html(data.second.morg_g_funding.toFixed(2));
                $('.e_step2_morg2').html(data.second.morg_g_enslavement.toFixed(2));
                $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
                $('.step2_int2').html(data.second.intrest_g_funding);
                $('.e_step2_int2').html(data.second.intrest_g_enslavement);
                $('.step2_mr2').html(data.second.pmt_g_funding.toFixed(2));
                $('.e_step2_mr2').html(data.second.pmt_g_enslavement.toFixed(2));

                var new_total =data.second.total_fund + data.data.best_tree_findings.full.row2 + data.data.best_tree_findings.full.row3 ;
                var new_total_ens =data.second.total_ensl + data.data.best_tree_findings.full.e_row2 + data.data.best_tree_findings.full.e_row3 ;
                 var final_both = new_total + new_total_ens;

                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').html(data.data.best_tree_findings.full.interest[2]);

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').html(data.data.best_tree_findings.full.e_interest[2]);

                $('.step2_morg1').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[2].toFixed(2)));

                $('.e_step2_morg1').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg5').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[2].toFixed(2)));


                $('.step2_totalmr1').html(addCommasDirect(new_total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(new_total_ens.toFixed(2)));

                $('.step2_final1').html(addCommasDirect(final_both.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(final_both.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.row3.toFixed(2)));

                $('.e_step2_mr1').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr5').html(addCommasDirect(data.data.best_tree_findings.full.e_row3.toFixed(2)));

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').html(data.data.best_tree_findings.years[2]);

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').html(data.data.best_tree_findings.link_type[2]); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').html(data.data.best_tree_findings.link_type[2]);

                 if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else if(data.data.best_tree_findings.link_type[0] == 'B'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else if(data.data.best_tree_findings.link_type[0] == 'D'){ 
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } else {
                  $('.step2_head1').html('Not Linked');
                  $('.e_step2_head1').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else if(data.data.best_tree_findings.link_type[1] == 'B'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else if(data.data.best_tree_findings.link_type[1] == 'D'){
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                } else {
                  $('.step2_head4').html('Not Linked');
                  $('.e_step2_head4').html('Not Linked');
                } 

                if(data.data.best_tree_findings.link_type[2] == 'A'){
                  $('.step2_head5').html('Prime');
                  $('.e_step2_head5').html('Prime');
                } else if(data.data.best_tree_findings.link_type[2] == 'B'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                }  else if(data.data.best_tree_findings.link_type[2] == 'D'){
                  $('.step2_head5').html('Linked');
                  $('.e_step2_head5').html('Linked');
                } else {
                  $('.step2_head5').html('Not Linked');
                  $('.e_step2_head5').html('Not Linked ');
                } 
               
                
                 
              } 

               else{  
                
                var part1= data.data.best_tree_findings.divide[0];
                var part2= data.data.best_tree_findings.divide[1];

                 if(data.data.best_tree_findings.link_type[1] == 'A'){


                  $('.step2_head2').html('Dollar');
                  $('.e_step2_head2').html('Dollar');
                  $('.step2_type2').html('G');
                  $('.e_step2_type2').html('G');

                  $('.step2_totalmr2').html('');
                  $('.step2_final2').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr2').html('');
                  $('.e_step2_final2').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');

                    if(part1 == 1){
                      $('.step2_part1').html(0.333);
                      $('.e_step2_part1').html(0.333);
                    } else{
                      $('.step2_part1').html(0.666);
                      $('.e_step2_part1').html(0.666);
                    }

                
                  $('.step2_part4').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part4').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int2').html(data.second.intrest_g_funding);
                  $('.e_step2_int2').html(data.second.intrest_g_enslavement);
                  $('.step2_year2').html(data.data.best_tree_findings.years[1]);
                  $('.step2_mr2').html(data.second.pmt_g_funding.toFixed(2));
                  $('.e_step2_mr2').html(data.second.pmt_g_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[1]);

                  $('.step2_head3').html('Euro');
                  $('.e_step2_head3').html('Euro');
                  $('.step2_type3').html('F');
                  $('.e_step2_type3').html('F');

                  $('.step2_totalmr3').html('');
                  $('.step2_final3').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr3').html('');
                  $('.e_step2_final3').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');

                    if(part1 == 1){
                      $('.step2_part1').html(0.333);
                      $('.e_step2_part1').html(0.333);
                    } else{
                      $('.step2_part1').html(0.666);
                      $('.e_step2_part1').html(0.666);
                    }

            
                  $('.step2_int3').html(data.second.intrest_f_funding);
                  $('.e_step2_int3').html(data.second.intrest_f_enslavement);
                  $('.step2_year3').html(data.data.best_tree_findings.years[1]);
                  $('.step2_mr3').html(data.second.pmt_f_funding.toFixed(2));
                  $('.e_step2_mr3').html(data.second.pmt_f_enslavement.toFixed(2));
                  $('.e_step2_year3').html(data.data.best_tree_findings.years[1]);
             
              
                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int5').hide();

                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int5').hide();

                $('.step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                $('.step2_morg4').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));

                $('.step2_morg2').html(addCommasDirect(data.second.morg_g_funding.toFixed(2)));
                $('.step2_morg3').html(addCommasDirect(data.second.morg_f_funding.toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                $('.e_step2_morg4').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));

                // var final_case = data.second.total_ensl + data.second.total_fund + 
                // alert(111111);
                $('.e_step2_morg2').html(addCommasDirect(data.second.morg_g_enslavement.toFixed(2)));
                $('.e_step2_morg3').html(addCommasDirect(data.second.morg_f_enslavement.toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_final1').html(addCommasDirect(data.second_final_mr.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.second_final_mr.toFixed(2)));

                $('.step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                $('.step2_mr4').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                $('.e_step2_mr4').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year5').hide();

                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year5').hide();

                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type5').hide(); 

                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type5').hide();
                $('.step2_part4').html(data.second.a_primePart.toFixed(2));
                $('.e_step2_part4').html(data.second.a_primePart.toFixed(2));

                var total_fund = data.second.total_fund + data.data.best_tree_findings.full.row1;
                var total_ens = data.second.total_ensl + data.data.best_tree_findings.full.e_row1;
                $('.step2_totalmr1').html(addCommasDirect(total_fund.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(total_ens.toFixed(2)));

                $('.step2_head5, .step2_part5, .step2_final5, .step2_totalmr5').hide();
                $('.e_step2_head5, .e_step2_part5, .e_step2_final5, .e_step2_totalmr5').hide();
                


                } else{

                                                       //Step1 Else Check



                  $('.step2_head3').html('Dollar');
                  $('.e_step2_head3').html('Dollar');
                  $('.step2_type3').html('G');
                  $('.e_step2_type3').html('G');

                  $('.step2_totalmr3').html('');
                  $('.step2_final3').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr3').html('');
                  $('.e_step2_final3').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');
                  var part2= data.data.best_tree_findings.divide[1];
                    if(part2 == 1){
                      $('.step2_part4').html(0.333);
                      $('.e_step2_part4').html(0.333);
                    }else{
                      $('.step2_part4').html(0.666);
                      $('.e_step2_part4').html(0.666);
                    }

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int3').html(data.second.intrest_g_funding);
                  $('.e_step2_int3').html(data.second.intrest_g_enslavement);
                  $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                  $('.step2_mr3').html(data.second.pmt_g_funding.toFixed(2));
                  $('.e_step2_mr3').html(data.second.pmt_g_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
             
                 
                  $('.step2_head2').html('Euro');
                  $('.e_step2_head2').html('Euro');
                  $('.step2_type2').html('F');
                  $('.e_step2_type2').html('F');

                  $('.step2_totalmr2').html('');
                  $('.step2_final2').html('');
                  $('.step2_totalmr4').html('');
                  $('.step2_final4').html('');

                  $('.e_step2_totalmr2').html('');
                  $('.e_step2_final2').html('');
                  $('.e_step2_totalmr4').html('');
                  $('.e_step2_final4').html('');
                  var part2= data.data.best_tree_findings.divide[1];
                    if(part2 == 1){
                      $('.step2_part4').html(0.333);
                      $('.e_step2_part4').html(0.333);
                    }else{
                      $('.step2_part4').html(0.666);
                      $('.e_step2_part4').html(0.666);
                    }

                
                  $('.step2_part1').html(data.second.a_primePart.toFixed(2));
                  $('.e_step2_part1').html(data.second.a_primePart.toFixed(2));


                  $('.step2_int2').html(data.second.intrest_f_funding);
                  $('.e_step2_int2').html(data.second.intrest_f_enslavement);
                  $('.step2_year2').html(data.data.best_tree_findings.years[0]);
                  $('.step2_year3').html(data.data.best_tree_findings.years[0]);
                  $('.step2_mr2').html(data.second.pmt_f_funding.toFixed(2));
                  $('.e_step2_mr2').html(data.second.pmt_f_enslavement.toFixed(2));
                  $('.e_step2_year2').html(data.data.best_tree_findings.years[0]);
                  $('.e_step2_year3').html(data.data.best_tree_findings.years[0]);
             
                 
             
                  $('.step2_morg2').html(addCommasDirect(data.second.morg_f_funding.toFixed(2)));
                  $('.e_step2_morg2').html(addCommasDirect(data.second.morg_f_enslavement.toFixed(2)));
                  
                

                $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                $('.step2_int5').hide();

                $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                $('.e_step2_int5').hide();

                $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                $('.step2_morg1').html(addCommasDirect(data.second.a_morg_funding.toFixed(2)));
                $('.step2_morg2').html(addCommasDirect(data.second.morg_g_funding.toFixed(2)));
                $('.step2_morg3').html(addCommasDirect(data.second.morg_f_funding.toFixed(2)));
                $('.step2_morg5').hide();

                $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                $('.e_step2_morg1').html(addCommasDirect(data.second.a_e_morg_funding.toFixed(2)));
                $('.e_step2_morg2').html(addCommasDirect(data.second.morg_g_enslavement.toFixed(2)));
                $('.e_step2_morg3').html(addCommasDirect(data.second.morg_f_enslavement.toFixed(2)));
                $('.e_step2_morg5').hide();


                $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                $('.step2_mr1').html(addCommasDirect(data.second.a_PMT.toFixed(2)));
                $('.step2_mr5').hide();

                $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                $('.e_step2_mr1').html(addCommasDirect(data.second.a_e_PMT.toFixed(2)));
                $('.e_step2_mr5').hide();

                $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.step2_year5').hide();

                $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                $('.e_step2_year5').hide();

                $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.step2_type5').hide(); 

                $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                $('.e_step2_type5').hide();

                var total =data.data.best_tree_findings.full.row2 + data.second.total_fund;
                var total_ens =data.data.best_tree_findings.full.e_row2 + data.second.total_ensl;
                var gt = total+total_ens;

                $('.step2_totalmr1').html(addCommasDirect(total.toFixed(2)));
                $('.e_step2_totalmr1').html(addCommasDirect(total_ens.toFixed(2)));
                $('.step2_final1, .e_step2_final1').html(gt.toFixed(2));
                // alert(1)

                $('.step2_head5').hide();
                $('.step2_part5').hide();
                $('.step2_totalmr5').hide();
                $('.step2_final5').hide();

                $('.e_step2_head5').hide();
                $('.e_step2_part5').hide();
                $('.e_step2_totalmr5').hide();
                $('.e_step2_final5').hide();

                }

               
                if(part1 == 1){
                  $('.step2_part1').html(0.333);
                  $('.e_step2_part1').html(0.333);
                } else{
                  $('.step2_part1').html(0.666);
                  $('.e_step2_part1').html(0.666);
                }

               

                

                // $('.step2_int1').html(data.data.best_tree_findings.full.interest[0]);
                // $('.step2_int4').html(data.data.best_tree_findings.full.interest[1]);
                // $('.step2_int5').hide();

                // $('.e_step2_int1').html(data.data.best_tree_findings.full.e_interest[0]);
                // $('.e_step2_int4').html(data.data.best_tree_findings.full.e_interest[1]);
                // $('.e_step2_int5').hide();

                // $('.step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[0].toFixed(2)));
                // $('.step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.mortgage_amount[1].toFixed(2)));
                // $('.step2_morg5').hide();

                // $('.e_step2_morg1').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[0].toFixed(2)));
                // $('.e_step2_morg4').html(addCommasDirect(data.data.best_tree_findings.full.e_mortgage_amount[1].toFixed(2)));
                // $('.e_step2_morg5').hide();


                // $('.step2_totalmr1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_funding.toFixed(2)));
                // $('.e_step2_totalmr1').html(addCommasDirect(data.data.best_tree_findings.full.total_mr_enslavement.toFixed(2)));

                // $('.step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_funding.toFixed(2)));
                // $('.e_step2_final1').html(addCommasDirect(data.data.best_tree_findings.full.final_mr_enslavement.toFixed(2)));

                // $('.step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.row1.toFixed(2)));
                // $('.step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.row2.toFixed(2)));
                // $('.step2_mr5').hide();

                // $('.e_step2_mr1').html(addCommasDirect(data.data.best_tree_findings.full.e_row1.toFixed(2)));
                // $('.e_step2_mr4').html(addCommasDirect(data.data.best_tree_findings.full.e_row2.toFixed(2)));
                // $('.e_step2_mr5').hide();

                // $('.step2_year1').html(data.data.best_tree_findings.years[0]);
                // $('.step2_year4').html(data.data.best_tree_findings.years[1]);
                // $('.step2_year5').hide();

                // $('.e_step2_year1').html(data.data.best_tree_findings.years[0]);
                // $('.e_step2_year4').html(data.data.best_tree_findings.years[1]);
                // $('.e_step2_year5').hide();

                // $('.step2_type1').html(data.data.best_tree_findings.link_type[0]);
                // $('.step2_type4').html(data.data.best_tree_findings.link_type[1]);
                // $('.step2_type5').hide(); 

                // $('.e_step2_type1').html(data.data.best_tree_findings.link_type[0]);
                // $('.e_step2_type4').html(data.data.best_tree_findings.link_type[1]);
                // $('.e_step2_type5').hide();

                if(data.data.best_tree_findings.link_type[0] == 'A'){
                  $('.step2_head1').html('Prime');
                  $('.e_step2_head1').html('Prime');
                } else
                  $('.step2_head1').html('Linked');
                  $('.e_step2_head1').html('Linked');
                } 

                if(data.data.best_tree_findings.link_type[1] == 'A'){
                  $('.step2_head4').html('Prime');
                  $('.e_step2_head4').html('Prime');
                } else {
                  $('.step2_head4').html('Linked');
                  $('.e_step2_head4').html('Linked');
                }
              

              }

              /*Step 2 Ends*/

              /*Step 3*/

              if(best_[0] != 'H2' || best_[0] != 'H3'){

             
                  

                var elg_radio = data.eligibility_score.question_elibility;
                // alert(elg_radio);
                if(elg_radio == 'No_eligible'){
                  $('#A_radio6').parent().hide();
                     $('.elg_no').css({"backgroundColor":"red","color":"white"});
                     $('.elegebility_score').val(addCommasDirect(data.eligibility_score.eligibility));
                     $('.elegebility_ratio').val(data.eligibility_score.eligibility_ratio.toFixed(2));
                     $('.elg_head6').hide();
                     $('.elg_type6').hide();
                     $('.elg_part6').hide();
                     $('.elg_morg6').hide();
                     $('.elg_year6').hide();
                     $('.elg_int6').hide();
                     $('.elg_totalmr6').hide();
                     $('.elg_final6').hide();
                     $('.elg_mr6').hide();




                } else{
                     $('.elg_yes').css({"backgroundColor":"green","color":"white"});

                $('.elegebility_score').val(addCommasDirect(data.eligibility_score.eligibility));
                $('.elegebility_ratio').val(data.eligibility_score.eligibility_ratio.toFixed(2));
                $('.step2_part6').html(data.eligibility_score.eligibility_ratio.toFixed(2));
                $('.step2_morg6').html(addCommasDirect(data.eligibility_score.mortgage_h.toFixed(2)));
                $('.step2_year6').html(data.eligibility_score.e_year);
                $('.step2_int6').html(data.eligibility_score.e_interest);
                $('.step2_mr6').html(addCommasDirect(data.eligibility_score.eligi_pmt.toFixed(2)));
                $('.step2_totalmr1_').html(addCommasDirect(data.eligibility_score.eligi_total_fund.toFixed(2)));
                $('.step2_final1_, .e_step2_final1_').html(addCommasDirect(data.eligibility_score.eligi_final_mr.toFixed(2)));
                var table = $('.step2_type1').html();

                var table2 = $('.step2_type4').html();

                if(table == 'B'){
                  $('.elg_morg1').html(addCommasDirect(data.eligibility_score.mortgage_b.toFixed(2)));
                  if(data.eligibility_score.mortgage_a != ''){
                    $('.elg_morg4').html(addCommasDirect(data.eligibility_score.mortgage_a.toFixed(2)));
                  } 
                  $('.elg_morg6').html(addCommasDirect(data.eligibility_score.mortgage_h.toFixed(2)));
                }  
                if(table == 'A'){
                  $('.elg_morg4').html(addCommasDirect(data.eligibility_score.mortgage_b.toFixed(2)));
                  if(data.eligibility_score.mortgage_a != ''){
                    $('.elg_morg1').html(addCommasDirect(data.eligibility_score.mortgage_a.toFixed(2)));
                  } 
                  $('.elg_morg6').html(addCommasDirect(data.eligibility_score.mortgage_h.toFixed(2)));
                }  
                if(table == 'A' && table2 == 'D'){
                  $('.elg_morg5').html(addCommasDirect(data.eligibility_score.mortgage_b.toFixed(2)));
                  $('.elg_morg6').html(addCommasDirect(data.eligibility_score.mortgage_h.toFixed(2)));
                  if(data.eligibility_score.mortgage_a != ''){
                      $('.elg_morg1').html(addCommasDirect(data.eligibility_score.mortgage_a.toFixed(2))); 
                  } 
                  if(data.eligibility_score.mortgage_c != ''){
                    $('.elg_type4').html(addCommasDirect(data.eligibility_score.mortgage_c.toFixed(2))); 
                  } 


                }

                 if(table == 'A' && table2 == 'B'){
                  $('.elg_morg4').html(addCommasDirect(data.eligibility_score.mortgage_b.toFixed(2)));
                  $('.elg_mr4').html(addCommasDirect(data.eligibility_score.pmt_mr_b.toFixed(2)));
                  $('.elg_morg6').html(addCommasDirect(data.eligibility_score.mortgage_h.toFixed(2)));
                  if(data.eligibility_score.mortgage_a != ''){
                      $('.elg_morg1').html(addCommasDirect(data.eligibility_score.mortgage_a.toFixed(2))); 
                      $('.elg_mr1').html(addCommasDirect(data.eligibility_score.pmt_mr_a.toFixed(2)));
                  } 
                  if(data.eligibility_score.mortgage_c != ''){
                    $('.elg_type5').html(addCommasDirect(data.eligibility_score.mortgage_c.toFixed(2))); 
                    $('.elg_mr5').html(addCommasDirect(data.eligibility_score.pmt_mr_c.toFixed(2)));
                  } 


                } 

              }


              /*Frontend Report Step2 from left*/
                var part1 =data.data.best_tree_findings.link_type[0];
                var part2 =data.data.best_tree_findings.link_type[1];
                if(typeof(data.data.best_tree_findings.link_type[2]) != "undefined" && data.data.best_tree_findings.link_type[2] !== null) {
                    var part3 =data.data.best_tree_findings.link_type[2];
                }
              
              var elg_radio = data.eligibility_score.question_elibility;
                // alert(elg_radio);
                if(elg_radio != 'No_eligible'){
                   if(data.second.part_f_funding != '' && data.second.part_g_funding != ''){
                 var  part_gf = ['G', 'F', 'H'];
                } else if(data.second.part_f_funding != '' && data.second.part_g_funding == ''){
                  var  part_gf = ['F', 'H'];
                } else if(data.second.part_f_funding == '' && data.second.part_g_funding != ''){
                  var  part_gf = ['G','H'];
                } else{
                  var part_gf=['H'];
                }

                var full_part = [part1, part2, part3, part_gf];

                } else{
                   if(data.second.part_f_funding != '' && data.second.part_g_funding != ''){
                 var  part_gf = ['G', 'F'];
                } else if(data.second.part_f_funding != '' && data.second.part_g_funding == ''){
                  var  part_gf = ['F'];
                } else if(data.second.part_f_funding == '' && data.second.part_g_funding != ''){
                  var  part_gf = ['G'];
                } else{
                  var part_gf=[];
                }

                var full_part = [part1, part2, part3];

                }

             

              } else{
                 if(data.second.part_f_funding != '' && data.second.part_g_funding != ''){
                 var  part_gf = ['G', 'F'];
                } else if(data.second.part_f_funding != '' && data.second.part_g_funding == ''){
                  var  part_gf = ['F'];
                } else if(data.second.part_f_funding == '' && data.second.part_g_funding != ''){
                  var  part_gf = ['G'];
                } else{
                  var part_gf=[];
                }

                var full_part = [part1, part2, part3];

              }
              console.log(full_part);
              if(jQuery.inArray("A", full_part) !== -1){
                $('.head_of_A').show();
                $('#A_radio1').parent().show();
              } 
              if(jQuery.inArray("B", full_part) !== -1){
                $('.head_of_B').show();
                $('#A_radio5').parent().show();
                
              } 
              if(jQuery.inArray("C", full_part) !== -1){
                $('.head_of_C').show();
                $('#A_radio8').parent().show();
              } 
              if(jQuery.inArray("D", full_part) !== -1){
                $('.head_of_D').show();
                $('#A_radio4').parent().show();
              } 
              if(jQuery.inArray("E", full_part) !== -1){
                $('.head_of_E').show();
                $('#A_radio7').parent().show();
                
              } 
              if(jQuery.inArray("F", part_gf) !== -1){
                $('.head_of_F').show();
                $('#A_radio2').parent().show();
              } 
              if(jQuery.inArray("G", part_gf) !== -1){
                $('.head_of_G').show();
                $('#A_radio3').parent().show();
              } 
              if(jQuery.inArray("H", part_gf) !== -1){
                $('.head_of_H').show();
                $('#A_radio6').parent().show();
              } 

              /*Frontend Report Step2 from left*/

              /*Step 3 Ends*/



              /*Step 4 Starts*/
              $('.sel-years').on('change', function(){
               var def = $(this).val();

               var i_start = (def*12)-12;
               var i_finish = (def*12)-1;
                $('.step_4_table').html('');

                  $('.step_4_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new">A</th></tr></thead><tbody class="table_body">');

                  for (i = i_start; i <= i_finish; i++) { 
                    $('body').find('.table_body').append('<tr><td>'+data.step4.linked_mr[i]+'</td><td>'+data.step4.mr[i]+'</td><td>'+data.step4.left_pay_linked[i]+'</td><td>'+data.step4.left_pay[i]+'</td><td>'+data.step4.interest_pay_linked[i]+'</td><td>'+data.step4.interest_pay[i]+'</td><td>'+data.step4.net_pay_linked[i]+'</td><td>'+data.step4.net_pay[i]+'</td><td>'+data.step4.prime[i]+'</td><td>'+data.step4.a_field[i]+'</td></tr>');
                  }

                  $('.step_4_table').append('</tbody>');

                  $('.step_4_table').append('</tbody>'); 


                  $('.step_4_e_table').html('');

                  $('.step_4_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new">A</th></tr></thead><tbody class="e_table_body">');

                  for (i = i_start; i <= i_finish; i++) { 
                    $('body').find('.e_table_body').append('<tr><td>'+data.step4.e_linked_mr[i]+'</td><td>'+data.step4.e_mr[i]+'</td><td>'+data.step4.e_left_pay_linked[i]+'</td><td>'+data.step4.e_left_pay[i]+'</td><td>'+data.step4.e_interest_pay_linked[i]+'</td><td>'+data.step4.e_interest_pay[i]+'</td><td>'+data.step4.e_net_pay_linked[i]+'</td><td>'+data.step4.e_net_pay[i]+'</td><td>'+data.step4.e_prime[i]+'</td><td>'+data.step4.e_a_field[i]+'</td></tr>');
                  }

                  $('.step_4_e_table').append('</tbody>');


              });

                  $('.ten_one').val(data.step4.ten_point_one);
                  $('.ten_two').val(data.step4.ten_point_two);
                  

                  $('.step_4_table').html('');

                  $('.step_4_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new">A</th></tr></thead><tbody class="table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body').append('<tr><td>'+data.step4.linked_mr[i]+'</td><td>'+data.step4.mr[i]+'</td><td>'+data.step4.left_pay_linked[i]+'</td><td>'+data.step4.left_pay[i]+'</td><td>'+data.step4.interest_pay_linked[i]+'</td><td>'+data.step4.interest_pay[i]+'</td><td>'+data.step4.net_pay_linked[i]+'</td><td>'+data.step4.net_pay[i]+'</td><td>'+data.step4.prime[i]+'</td><td>'+data.step4.a_field[i]+'</td></tr>');
                  }

                  $('.step_4_table').append('</tbody>'); 


                  $('.step_4_e_table').html('');

                  $('.step_4_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new">A</th></tr></thead><tbody class="e_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_table_body').append('<tr><td>'+data.step4.e_linked_mr[i]+'</td><td>'+data.step4.e_mr[i]+'</td><td>'+data.step4.e_left_pay_linked[i]+'</td><td>'+data.step4.e_left_pay[i]+'</td><td>'+data.step4.e_interest_pay_linked[i]+'</td><td>'+data.step4.e_interest_pay[i]+'</td><td>'+data.step4.e_net_pay_linked[i]+'</td><td>'+data.step4.e_net_pay[i]+'</td><td>'+data.step4.e_prime[i]+'</td><td>'+data.step4.e_a_field[i]+'</td></tr>');
                  }

                  $('.step_4_e_table').append('</tbody>');

                  $('.head_new').html(tab);

                  var f1=$('.elg_mr1').html();
                  // alert(f1);

                  f1 = f1.split(',').join('');

                  var f2=$('.elg_mr2').html();
                  f2 = f2.split(',').join('');
                  var f3=$('.elg_mr3').html();
                  f3 = f3.split(',').join('');
                  var f4=$('.elg_mr4').html();
                  f4 = f4.split(',').join('');
                  var f5=$('.elg_mr5').html();
                  f5 = f5.split(',').join('');
                  var f6=$('.elg_mr6').html();
                  f6 = f6.split(',').join('');

                  if(f6 == ''){
                    f6 = 0;
                  }
                 
                  

                  $dd = $('body').hasClass('.e_step2_mr1');
                  if($dd == false){
                     var e1 = 0;
                  } else {
                     var e1 = $('.e_step2_mr1').html();
                     e1= e1.split(',').join('');
                  }
                  $dd = $('body').hasClass('.e_step2_mr2');
                  if($dd == false){
                     var e2 = 0;
                  } else {
                     var e2 = $('.e_step2_mr2').html();
                     e2 = e2.split(',').join('');
                  }
                  $dd = $('body').hasClass('.e_step2_mr3');
                  if($dd == false){
                     var e3 = 0;
                  } else {
                     var e3 = $('.e_step2_mr3').html();
                     e3 = e3.split(',').join('');
                  }
                  $dd = $('body').hasClass('.e_step2_mr4');
                  if($dd == false){
                     var e4 = 0;
                  } else {
                     var e4 = $('.e_step2_mr4').html();
                     e4 = e4.split(',').join('');
                  }
                  $dd = $('body').hasClass('.e_step2_mr5');
                  if($dd == false){
                     var e5 = 0;
                  } else {
                     var e5 = $('.e_step2_mr5').html();
                     e5 = e5.split(',').join('');
                  }
                  $dd = $('body').hasClass('.e_step2_mr6');
                  if($dd == false){
                     var e6 = 0;
                  } else {
                     var e6 = $('.e_step2_mr6').html();
                     e6 = e6.split(',').join('');
                  }

                  if(f2 == ''){
                    f2=0;
                  }
                  if(f3 == ''){
                    f3=0;
                  }

                 
                
                  var total_mr_elg_fund = parseInt(f1)+parseInt(f2)+parseInt(f3)+parseInt(f4)+parseInt(f5)+parseInt(f6);
                  var total_mr_elg_ens = parseInt(e1)+parseInt(e2)+parseInt(e3)+parseInt(e4)+parseInt(e5)+parseInt(e6);

                  $('.elg_totalmr1').html(addCommasDirect(total_mr_elg_fund));
                  $('.e_step2_totalmr1').html(addCommasDirect(total_mr_elg_ens));

                  $('.elg_final1, .e_step2_final1_').html(addCommasDirect(total_mr_elg_ens + total_mr_elg_fund));

                  $('.grace_value').val(data.step4.grace);

                  // var duck = Math.log10(1447/ (1447- 347141 * 0.0025)) / Math.log10(1 +0.0025);
                  // alert(duck);

              


              /*Step 4 Ends*/



                  
            }




                /*Best Tree Values*/

             // }

            });
}
for_ajax_best_tree();

setTimeout(function(){

 demoajax_();
},'1500');



$('#funding_type').on('change', function(){
  for_ajax_only_final(0);
});
 
$('#t3_year3, #t5_year3, #t7_year3, #t9_year3, #t11_year2, #t13_year2, #t15_year2, #t17_year2, #t19_year2, #t4_year3, #t6_year3, #t8_year3, #t10_year3, #t12_year2, #t14_year2, #t16_year2, #t18_year2, #t20_year2').on('change', function(){
  var best__ = $('.best_OF_loan_tree').val();
  for_ajax_only_final(best__);
});



$('input[name=select_bank]').on('change',function(){
  for_ajax_only_final(0);
  change_discount_colour();
});


// $('input[name=algo2]').on('change',function(){
//   var val = $(this).val();
  
//   // alert(val);
//   if(val == "yes"){
//     $('.hide_for_no').show();
//     $('.zero-show').show();
//     $('.A_future_loan').show();
//     $('.error_log_happens').hide();

//   }else if(val == "no"){
//     $('.A_future_loan').show();
//     $('.hide_for_no').hide();
//     $('.error_log_happens').hide();
//     // $('.if_algo_error').show();
    

//   }else{

//   $('.hide_for_no').hide();
//     $('.zero-show').hide();
//     // $('.A_future_loan').show();
//     // $('.error_log_happens').hide();
//      $('.error_log_happens').html('');

//         var email = $('.user-name a').data('email');

//         $('.error_log_happens').html('<li>1. '+email+' | Error#1: Algo Error happens</li>');
   
//   }
// });






  function sel(one, two){
    var one = $('#t'+one+'_year3').val();
    $('#t'+two+'_year3').val(one);
    
  }

  function sel_(one, two){
    var one = $('#t'+one+'_year2').val();
    $('#t'+two+'_year2').val(one);
    
  }


  $('input[name=other_loan_14]').on('change', function(){
   var forteen = $(this).val();

  });

  $('.cal-full-algo').on('click', function(){
    var one = $('input[name=other_loan_14]:checked').val();
    var two = $('input[name=additional_loans]:checked').val();
    for_ajax_only_final(0, one, two);
    
  });

  // var new_check = $('input[name=additional_loans]:checked').val();
  // alert(new_check);
   $('input[name=name11_').on('click', function(){
  
       demoajax_();
       
 });
     $('input[name=_name11_').on('click', function(){
  
       demoajax_();
       
 });


  function demoajax_(){

  var tab_ = $('input[name=name11_]:checked').val();
  $('.head_new_').html(tab_);

  var _tab_ = $('input[name=_name11_]:checked').val();
  $('._head_new_').html(_tab_);

  var id =  $("#user_id").val();

  var l_t_1 = $('.step2_type1').html();
 
  var l_t_2 = $('.step2_type2').html();
 
  var l_t_3 = $('.step2_type3').html();
 
  var l_t_4 = $('.step2_type4').html();
 
  var l_t_5 = $('.step2_type5').html();
 
  var l_t_6 = $('.step2_type6').html();


  var e_l_t_1 = $('.e_step2_type1').html();
 
  var e_l_t_2 = $('.e_step2_type2').html();

  var e_l_t_3 = $('.e_step2_type3').html();
 
  var e_l_t_4 = $('.e_step2_type4').html();

  var e_l_t_5 = $('.e_step2_type5').html();
 
  var e_l_t_6 = $('.e_step2_type6').html();
  

  
  var p_t_1 = $('.step2_part1').html();
  
  var p_t_2 = $('.step2_part2').html();

  var p_t_3 = $('.step2_part3').html();
  
  var p_t_4 = $('.step2_part4').html();
 
  var p_t_5 = $('.step2_part5').html();
  
  var p_t_6 = $('.step2_part6').html();


  var e_p_t_1 = $('.e_step2_part1').html();
  
  var e_p_t_2 = $('.e_step2_part2').html();

  var e_p_t_3 = $('.e_step2_part3').html();
  
  var e_p_t_4 = $('.e_step2_part4').html();
 
  var e_p_t_5 = $('.e_step2_part5').html();
  
  var e_p_t_6 = $('.e_step2_part6').html();
 


  var y_t_1 = $('.step2_year1').html();
  // alert(y_t_1);

  var y_t_2 = $('.step2_year2').html();
  
  var y_t_3 = $('.step2_year3').html();
 
  var y_t_4 = $('.step2_year4').html();
 
  var y_t_5 = $('.step2_year5').html();

  var y_t_6 = $('.step2_year6').html();


  var e_y_t_1 = $('.e_step2_year1').html();
 
  var e_y_t_2 = $('.e_step2_year2').html();  

  var e_y_t_3 = $('.e_step2_year3').html(); 

  var e_y_t_4 = $('.e_step2_year4').html();

  var e_y_t_5 = $('.e_step2_year5').html();
 
  var e_y_t_6 = $('.e_step2_year6').html();


  var i_t_1 = $('.step2_int1').html();
 
  var i_t_2 = $('.step2_int2').html();
  
  var i_t_3 = $('.step2_int3').html();

  var i_t_4 = $('.step2_int4').html();
 
  var i_t_5 = $('.step2_int5').html();

  var i_t_6 = $('.step2_int6').html();


  var m_t_1 = $('.step2_morg1').html();
 
  var m_t_2 = $('.step2_morg2').html();
  
  var m_t_3 = $('.step2_morg3').html();

  var m_t_4 = $('.step2_morg4').html();
 
  var m_t_5 = $('.step2_morg5').html();

  var m_t_6 = $('.step2_morg6').html();

  var e_m_t_1 = $('.e_step2_morg1').html();
 
  var e_m_t_2 = $('.e_step2_morg2').html();
  
  var e_m_t_3 = $('.e_step2_morg3').html();

  var e_m_t_4 = $('.e_step2_morg4').html();
 
  var e_m_t_5 = $('.e_step2_morg5').html();

  var e_m_t_6 = $('.e_step2_morg6').html(); 



  var mr_t_1 = $('.step2_mr1').html();
 
  var mr_t_2 = $('.step2_mr2').html();
  
  var mr_t_3 = $('.step2_mr3').html();

  var mr_t_4 = $('.step2_mr4').html();
 
  var mr_t_5 = $('.step2_mr5').html();

  var mr_t_6 = $('.step2_mr6').html();

  var e_mr_t_1 = $('.e_step2_mr1').html();
 
  var e_mr_t_2 = $('.e_step2_mr2').html();
  
  var e_mr_t_3 = $('.e_step2_mr3').html();

  var e_mr_t_4 = $('.e_step2_mr4').html();
 
  var e_mr_t_5 = $('.e_step2_mr5').html();

  var e_mr_t_6 = $('.e_step2_mr6').html();


 



  var e_i_t_1 = $('.e_step2_int1').html();
 
  var e_i_t_2 = $('.e_step2_int2').html();
  
  var e_i_t_3 = $('.e_step2_int3').html();

  var e_i_t_4 = $('.e_step2_int4').html();
 
  var e_i_t_5 = $('.e_step2_int5').html();
 
  var e_i_t_6 = $('.e_step2_int6').html();



 
  var final_elg_mr = $('.elg_totalmr1').html();


  var type =[l_t_1,l_t_2,l_t_3,l_t_4,l_t_5,l_t_6];
  var part =[p_t_1,p_t_2,p_t_3,p_t_4,p_t_5,p_t_6];
  var years =[y_t_1,y_t_2,y_t_3,y_t_4,y_t_5,y_t_6];
  var morg= [m_t_1,m_t_2,m_t_3,m_t_4,m_t_5,m_t_6];
  var e_morg= [e_m_t_1,e_m_t_2,e_m_t_3,e_m_t_4,e_m_t_5,e_m_t_6];
  var pmt= [mr_t_1,mr_t_2,mr_t_3,mr_t_4,mr_t_5,mr_t_6];
  var e_pmt= [e_mr_t_1,e_mr_t_2,e_mr_t_3,e_mr_t_4,e_mr_t_5,e_mr_t_6];
  var intrest =[i_t_1,i_t_2,i_t_3,i_t_4,i_t_5,i_t_6];
  var e_type =[e_l_t_1,e_l_t_2,e_l_t_3,e_l_t_4,e_l_t_5,e_l_t_6];
  var e_part =[e_p_t_1,e_p_t_2,e_p_t_3,e_p_t_4,e_p_t_5,e_p_t_6];
  var e_years =[e_y_t_1,e_y_t_2,e_y_t_3,e_y_t_4,e_y_t_5,e_y_t_6];
  var e_intrest =[e_i_t_1,e_i_t_2,e_i_t_3,e_i_t_4,e_i_t_5,e_i_t_6];

  $('.year_val').val(years);
  var year_ = $('.year_val').val(); 

  $('.type_val').val(type);
  var type_ = $('.type_val').val(); 

  $('.part_val').val(part);
  var part_ = $('.part_val').val();

  $('.morg_val').val(morg);
  var morg_ = $('.morg_val').val();

  $('.pmtr_val').val(pmt);
  var pmt_ = $('.pmtr_val').val();

  $('.intrest_val').val(intrest);
  var intrest_ = $('.intrest_val').val();
  // alert(intrest);
  $('.e_year_val').val(e_years);
  var e_year_ = $('.e_year_val').val(); 

  $('.e_type_val').val(e_type);
  var e_type_ = $('.e_type_val').val(); 

  $('.e_part_val').val(e_part);
  var e_part_ = $('.e_part_val').val();

  $('.e_morg_val').val(e_morg);
  var e_morg_ = $('.e_morg_val').val();

  $('.e_pmtr_val').val(e_pmt);
  var e_pmt_ = $('.e_pmtr_val').val();

  $('.e_intrest_val').val(e_intrest);
  var e_intrest_ = $('.e_intrest_val').val();

  console.log(type);

  $.ajax({
  

     type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://49.249.236.30:3355/api/step_6',
                data: {
                        'user_id':id,
                        'part':part_,
                        'morg':morg_,
                        'pmt':pmt_,
                        'e_morg':e_morg_,
                        'e_pmt':e_pmt_,
                        'type':type_,
                        'years':year_,
                        'interest':intrest_,
                        'final_elg_mr':final_elg_mr,

                        'e_part':e_part_,
                        'e_type':e_type_,
                        'e_years':e_year_,
                        'e_interest':e_intrest_,

                        'tab_':tab_,
                              
                    },  
                    beforeSend: function(){
                        $('#loader-global1').show();
                    },
                   complete: function(){
                        $('#loader-global1').hide();
                    }, 
                    success: function(data)
                    {
                    console.log(data);
               //       alert(1);
               // alert(data.step4.linked_mr[2]);
                    var final_index = 30 - data.year;
                    // alert(final_index);
                    $('#best-fit-years').val(data.year);
                    $('#after-min-years').val(data.min_value);
                    $('#before-years').val(30);
                    $('#after-years').val(parseInt(data.min_value)+ parseInt(data.year));
                    
                    // if(data.seven_table1.nper != ''){
                    //   $('.inst_month_1').html(data.seven_table1.nper);
                    // } else if(data.seven_table2.nper != ''){
                    //   $('.inst_month_1').html(data.seven_table2.nper);
                    // }else if(data.seven_table3.nper != ''){
                    //   $('.inst_month_1').html(data.seven_table3.nper);
                    // }else if(data.seven_table4.nper != ''){
                    //   $('.inst_month_1').html(data.seven_table4.nper);
                    // }else{
                    //   $('.inst_month_1').html(data.seven_table5.nper);
                    // }
                    if(typeof(data.seven_table1.que_thirteen_amount[0]) != "undefined" && data.seven_table1.que_thirteen_amount[0] !== null){
                      $('.inst_fee_1').html(data.seven_table1.que_thirteen_amount[0]);
                      $('.inst_year_1').html(data.seven_table1.que_thirteen_year[0]);
                      if(data.seven_table1.que_thirteen_one == 'Yes'){
                        $('.sel_7_r').attr('checked', 'checked');
                      } else{
                        $('.sel_7_l').attr('checked', 'checked');

                      }
                      
                    }
                    if(typeof(data.seven_table1.que_thirteen_amount[1]) != "undefined" && data.seven_table1.que_thirteen_amount[1] !== null){
                      $('.inst_fee_2').html(data.seven_table1.que_thirteen_amount[1]);
                      $('.inst_year_2').html(data.seven_table1.que_thirteen_year[1]);
                      
                    }
                    if(typeof(data.seven_table1.que_thirteen_amount[2]) != "undefined" && data.seven_table1.que_thirteen_amount[2] !== null){
                      $('.inst_fee_3').html(data.seven_table1.que_thirteen_amount[2]);
                      $('.inst_year_3').html(data.seven_table1.que_thirteen_year[2]);
                      
                    }
                    if(typeof(data.loan_type1) != "undefined" && data.loan_type1 !== null) {

                        if(data.loan_type1 == 'A'){
                          $('#A_radio1_').parent().show();
                          $('#_A_radio1_').parent().show();
                          $('.rec_head1').html('Prime');
                          $('.e_rec_head1').html('Prime');
                        } else if(data.loan_type1 == 'B'){ 
                          $('#A_radio5_').parent().show();
                          $('#_A_radio5_').parent().show();
                          $('.rec_head1').html('Linked');
                          $('.e_rec_head1').html('Linked');
                        } else if(data.loan_type1 == 'D'){
                        $('#A_radio4_').parent().show(); 
                        $('#_A_radio4_').parent().show(); 
                          $('.rec_head1').html('Linked');
                          $('.e_rec_head1').html('Linked');
                        } else if(data.loan_type1 == 'H'){ 
                          $('#A_radio6_').parent().show();
                          $('#_A_radio6_').parent().show();
                          $('.rec_head1').html('Elegebility');
                          $('.e_rec_head1').html('Elegebility');
                        }else if(data.loan_type1 == 'F'){ 
                          $('#A_radio2_').parent().show();
                          $('#_A_radio2_').parent().show();
                          $('.rec_head1').html('Dollar');
                          $('.e_rec_head1').html('Dollar');
                        } else if(data.loan_type1 == 'G'){
                        $('#A_radio3_').parent().show(); 
                        $('#_A_radio3_').parent().show(); 
                          $('.rec_head1').html('Euro');
                          $('.e_rec_head1').html('Euro');
                        } else {
                          $('.rec_head1').html('Not Linked');
                          $('.e_rec_head1').html('Not Linked');
                        } 



                      $('.rec_type1, .e_rec_type1').html(data.loan_type1);
                      $('.rec_part1, .e_rec_part1').html(data.part1);
                      // alert(data.part1);
                      $('.rec_morg1').html(addCommasDirect(data.left_mortgage1[final_index]));
                      $('.e_rec_morg1').html(addCommasDirect(data.e_left_mortgage1[final_index]));
                      $('.rec_int1').html(data.prime_deltas1[final_index]);
                      $('.e_rec_int1').html(data.e_prime_deltas1[final_index]);
                      $('.rec_pmt1').html(addCommasDirect(data.pmt1[final_index].toFixed(2)));
                      $('.e_rec_pmt1').html(addCommasDirect(data.epmt1[final_index].toFixed(2)));
                      $('.rec_year1, .e_rec_year1').html(data.year);
                      $('.rec_totalpmt1').html(addCommasDirect(data.final_PMT[0].toFixed(2)));
                      $('.e_rec_totalpmt1').html(addCommasDirect(data.e_final_PMT[0].toFixed(2)));
                      $('.rec_finalpmt1').html(addCommasDirect(data.final_val.toFixed(2)));
                      $('.e_rec_finalpmt1').html(addCommasDirect(data.final_val.toFixed(2)));
                    } else{
                      $('.tab1_rec').hide();
                      $('.e_tab1_rec').hide();
                    }


                    if(typeof(data.loan_type2) != "undefined" && data.loan_type2 !== null) {


                        if(data.loan_type2 == 'A'){
                          $('#A_radio1_').parent().show();
                          $('#_A_radio1_').parent().show();
                          $('.rec_head2').html('Prime');
                          $('.e_rec_head2').html('Prime');
                        } else if(data.loan_type2 == 'B'){ 
                          $('#A_radio5_').parent().show();
                          $('#_A_radio5_').parent().show();
                          $('.rec_head2').html('Linked');
                          $('.e_rec_head2').html('Linked');
                        } else if(data.loan_type2 == 'D'){ 
                          $('#A_radio4_').parent().show(); 
                          $('#_A_radio4_').parent().show(); 
                          $('.rec_head2').html('Linked');
                          $('.e_rec_head2').html('Linked');
                        } else if(data.loan_type2 == 'H'){ 
                          $('#A_radio6_').parent().show();
                          $('#_A_radio6_').parent().show();
                          $('.rec_head2').html('Elegebility');
                          $('.e_rec_head2').html('Elegebility');
                        }else if(data.loan_type2 == 'F'){ 
                           $('#A_radio2_').parent().show();
                           $('#_A_radio2_').parent().show();
                          $('.rec_head2').html('Dollar');
                          $('.e_rec_head2').html('Dollar');
                        } else if(data.loan_type2 == 'G'){
                        $('#A_radio3_').parent().show();  
                        $('#_A_radio3_').parent().show();  
                          $('.rec_head2').html('Euro');
                          $('.e_rec_head2').html('Euro');
                        } else {
                          $('.rec_head2').html('Not Linked');
                          $('.e_rec_head2').html('Not Linked');
                        } 
                      $('.rec_type2, .e_rec_type2').html(data.loan_type2);
                      $('.rec_part2, .e_rec_part2').html(data.part2);
                      $('.rec_morg2').html(addCommasDirect(data.left_mortgage2[final_index]));
                      $('.e_rec_pmt2').html(addCommasDirect(data.epmt2[final_index].toFixed(2)));
                       $('.e_rec_morg2').html(addCommasDirect(data.e_left_mortgage2[final_index]));
                      $('.e_rec_int2').html(data.e_prime_deltas2[final_index]);
                      $('.rec_year2, .e_rec_year2').html(data.year);
                      $('.rec_int2').html(data.prime_deltas2[final_index]);
                      $('.rec_pmt2').html(addCommasDirect(data.pmt2[final_index].toFixed(2)));

                    } else{

                      $('.tab2_rec').hide();
                      $('.e_tab2_rec').hide();
 
                    }
                    if(typeof(data.loan_type3) != "undefined" && data.loan_type3 !== null) {
                       if(data.loan_type3 == 'A'){
                         $('#A_radio1_').parent().show();
                         $('#_A_radio1_').parent().show();
                          $('.rec_head3').html('Prime');
                          $('.e_rec_head3').html('Prime');
                        } else if(data.loan_type3 == 'B'){ 
                          $('#A_radio5_').parent().show();
                          $('#_A_radio5_').parent().show();
                          $('.rec_head3').html('Linked');
                          $('.e_rec_head3').html('Linked');
                        } else if(data.loan_type3 == 'D'){ 
                          $('#A_radio4_').parent().show(); 
                          $('#_A_radio4_').parent().show(); 
                          $('.rec_head3').html('Linked');
                          $('.e_rec_head3').html('Linked');
                        } else if(data.loan_type3 == 'H'){ 
                          $('#A_radio6_').parent().show();
                          $('#_A_radio6_').parent().show();
                          $('.rec_head3').html('Elegebility');
                          $('.e_rec_head3').html('Elegebility');
                        } else if(data.loan_type3 == 'F'){ 
                          $('#A_radio2_').parent().show();
                          $('#_A_radio2_').parent().show();
                          $('.rec_head3').html('Dollar');
                          $('.e_rec_head3').html('Dollar');
                        } else if(data.loan_type3 == 'G'){ 
                          $('#A_radio3_').parent().show();  
                          $('#_A_radio3_').parent().show();  
                          $('.rec_head3').html('Euro');
                          $('.e_rec_head3').html('Euro');
                        }else {
                          $('.rec_head3').html('Not Linked');
                          $('.e_rec_head3').html('Not Linked');
                        } 
                      $('.rec_type3, .e_rec_type3').html(data.loan_type3);
                      $('.rec_part3, .e_rec_part3').html(data.part3);
                       $('.e_rec_morg3').html(addCommasDirect(data.e_left_mortgage3[final_index]));
                       $('.e_rec_pmt3').html(addCommasDirect(data.epmt3[final_index].toFixed(2)));
                      $('.rec_morg3').html(addCommasDirect(data.left_mortgage3[final_index]));
                      $('.e_rec_int3').html(data.e_prime_deltas3[final_index]);
                      $('.rec_year3, .e_rec_year3').html(data.year);
                      $('.rec_int3').html(data.prime_deltas3[final_index]);
                      $('.rec_pmt3').html(addCommasDirect(data.pmt3[final_index].toFixed(2)));
                    } else{
                      $('.tab3_rec').hide();
                      $('.e_tab3_rec').hide();
                    }

                    if(typeof(data.loan_type4) != "undefined" && data.loan_type4 !== null) {
                       if(data.loan_type4 == 'A'){
                        $('#A_radio1_').parent().show();
                        $('#_A_radio1_').parent().show();
                          $('.rec_head4').html('Prime');
                          $('.e_rec_head4').html('Prime');
                        } else if(data.loan_type4 == 'B'){ 
                          $('#A_radio5_').parent().show();
                          $('#_A_radio5_').parent().show();
                          $('.rec_head4').html('Linked');
                          $('.e_rec_head4').html('Linked');
                        } else if(data.loan_type4 == 'D'){ 
                          $('#A_radio4_').parent().show(); 
                          $('#_A_radio4_').parent().show(); 
                          $('.rec_head4').html('Linked');
                          $('.e_rec_head4').html('Linked');
                        } else if(data.loan_type4 == 'H'){ 
                          $('#A_radio6_').parent().show();
                          $('#_A_radio6_').parent().show();
                          $('.rec_head4').html('Elegebility');
                          $('.e_rec_head4').html('Elegebility');
                        } else if(data.loan_type4 == 'F'){ 
                          $('#A_radio2_').parent().show();
                          $('#_A_radio2_').parent().show();
                          $('.rec_head4').html('Dollar');
                          $('.e_rec_head4').html('Dollar');
                        } else if(data.loan_type4 == 'G'){ 
                          $('#A_radio3_').parent().show(); 
                          $('#_A_radio3_').parent().show(); 
                          $('.rec_head4').html('Euro');
                          $('.e_rec_head4').html('Euro');
                        }else {
                          $('.rec_head4').html('Not Linked');
                          $('.e_rec_head4').html('Not Linked');
                        } 
                      $('.rec_type4, .e_rec_type4').html(data.loan_type4);
                      $('.rec_part4, .e_rec_part4').html(data.part4);
                       $('.e_rec_morg4').html(addCommasDirect(data.e_left_mortgage4[final_index]));
                       $('.e_rec_pmt4').html(addCommasDirect(data.epmt4[final_index].toFixed(2)));
                      $('.rec_morg4').html(addCommasDirect(data.left_mortgage4[final_index]));
                      $('.e_rec_int4').html(data.e_prime_deltas4[final_index]);
                      $('.rec_year4, .e_rec_year4').html(data.year);
                      $('.rec_int4').html(data.prime_deltas4[final_index]);
                      $('.rec_pmt4').html(addCommasDirect(data.pmt4[final_index].toFixed(2)));
                    } else{
                      $('.tab4_rec').hide();
                      $('.e_tab4_rec').hide();

                    }
                    if(typeof(data.loan_type5) != "undefined" && data.loan_type5 !== null) {
                       if(data.loan_type5 == 'A'){
                         $('#A_radio1_').parent().show();
                         $('#_A_radio1_').parent().show();
                          $('.rec_head5').html('Prime');
                          $('.e_rec_head5').html('Prime');
                        } else if(data.loan_type5 == 'B'){ 
                           $('#A_radio5_').parent().show();
                           $('#_A_radio5_').parent().show();
                          $('.rec_head5').html('Linked');
                          $('.e_rec_head5').html('Linked');
                        } else if(data.loan_type5 == 'D'){ 
                          $('#A_radio4_').parent().show(); 
                          $('#_A_radio4_').parent().show(); 
                          $('.rec_head5').html('Linked');
                          $('.e_rec_head5').html('Linked');
                        } else if(data.loan_type5 == 'H'){ 
                          $('#A_radio6_').parent().show();
                          $('#_A_radio6_').parent().show();
                          $('.rec_head5').html('Elegebility');
                          $('.e_rec_head5').html('Elegebility');
                        } else if(data.loan_type5 == 'F'){
                        $('#A_radio2_').parent().show(); 
                        $('#_A_radio2_').parent().show(); 
                          $('.rec_head5').html('Dollar');
                          $('.e_rec_head5').html('Dollar');
                        } else if(data.loan_type5 == 'G'){
                        $('#A_radio3_').parent().show(); 
                        $('#_A_radio3_').parent().show(); 
                          $('.rec_head5').html('Euro');
                          $('.e_rec_head5').html('Euro');
                        }else {
                          $('.rec_head5').html('Not Linked');
                          $('.e_rec_head5').html('Not Linked');
                        } 
                      $('.rec_type5, .e_rec_type5').html(data.loan_type5);
                      $('.rec_part5, .e_rec_part5').html(data.part5);
                       $('.e_rec_morg5').html(addCommasDirect(data.e_left_mortgage5[final_index]));
                       $('.e_rec_pmt5').html(addCommasDirect(data.epmt5[final_index].toFixed(2)));
                      $('.e_rec_int5').html(data.e_prime_deltas5[final_index]);
                      $('.rec_morg5').html(addCommasDirect(data.left_mortgage5[final_index]));
                      $('.rec_year5, .e_rec_year5').html(data.year);
                      $('.rec_int5').html(data.prime_deltas5[final_index]);
                      $('.rec_pmt5').html(addCommasDirect(data.pmt5[final_index].toFixed(2)));
                    } else{
                      $('.tab5_rec').hide();
                      $('.e_tab5_rec').hide();
                    }

                    if(typeof(data.loan_type6) != "undefined" && data.loan_type6 !== null) {
                       if(data.loan_type6 == 'A'){
                        $('#A_radio1_').parent().show();
                        $('#_A_radio1_').parent().show();
                          $('.rec_head6').html('Prime');
                          $('.e_rec_head6').html('Prime');
                        } else if(data.loan_type6 == 'B'){ 
                           $('#A_radio5_').parent().show();
                           $('#_A_radio5_').parent().show();
                          $('.rec_head6').html('Linked');
                          $('.e_rec_head6').html('Linked');
                        } else if(data.loan_type6 == 'D'){ 
                          $('#A_radio4_').parent().show(); 
                          $('#_A_radio4_').parent().show(); 
                          $('.rec_head6').html('Linked');
                          $('.e_rec_head6').html('Linked');
                        } else if(data.loan_type6 == 'H'){ 
                          $('#A_radio6_').parent().show();
                          $('#_A_radio6_').parent().show();
                          $('.rec_head6').html('Elegebility');
                          $('.e_rec_head6').html('Elegebility');
                        }else if(data.loan_type6 == 'F'){ 
                          $('#A_radio2_').parent().show();
                          $('#_A_radio2_').parent().show();
                          $('.rec_head6').html('Dollar');
                          $('.e_rec_head6').html('Dollar');
                        } else if(data.loan_type6 == 'G'){
                        $('#A_radio3_').parent().show();  
                        $('#_A_radio3_').parent().show();  
                          $('.rec_head6').html('Euro');
                          $('.e_rec_head6').html('Euro');
                        } else {
                          $('.rec_head6').html('Not Linked');
                          $('.e_rec_head6').html('Not Linked');
                        } 
                      $('.rec_type6, .e_rec_type6').html(data.loan_type6);
                      $('.e_rec_int6').html(data.e_prime_deltas6[final_index]);
                       $('.e_rec_morg6').html(addCommasDirect(data.e_left_mortgage6[final_index]));
                      $('.rec_part6, .e_rec_part6').html(data.part6);
                      $('.e_rec_pmt6').html(data.epmt6[final_index].toFixed(2));
                      $('.rec_morg6').html(addCommasDirect(data.left_mortgage6[final_index]));
                      $('.rec_year6, .e_rec_year6').html(data.year);
                      $('.rec_int6').html(data.prime_deltas6[final_index]);
                      $('.rec_pmt6').html(addCommasDirect(data.pmt6[final_index].toFixed(2)));
                    } else{
                      $('.tab6_rec').hide();
                      $('.e_tab6_rec').hide();
                    }

                $('.sel-years-6').on('change', function(){
               var def = $(this).val();
               var i_start = (def*12)-12;
               var i_finish = (def*12)-1;
               $('.step_6_table').html('');

                  $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                  for (i = i_start; i <= i_finish; i++) { 
                    $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_6_table').append('</tbody>'); 


                  $('.step_6_e_table').html('');

                  $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                  for (i = i_start; i <= i_finish; i++) { 
                    $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.step_6_e_table').append('</tbody>');
                    


              });



                  $('.step_6_table').html('');

                  $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_6_table').append('</tbody>'); 


                  $('.step_6_e_table').html('');

                  $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.step_6_e_table').append('</tbody>');
                  $('.head_new_').html(tab_);

                switch(tab_){
                  case 'A':
                     if(data.loan_type1 == 'A'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'A'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);

                           
                        } else if(data.loan_type3 == 'A'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'A'){ 


                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        
                          
                        }else if(data.loan_type5 == 'A'){ 



                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'A'){




                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 
                  break;
                  case 'F':
             
                          if(data.loan_type1 == 'F'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'F'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);

                           
                        } else if(data.loan_type3 == 'F'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'F'){ 


                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        
                          
                        }else if(data.loan_type5 == 'F'){ 



                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
             
                          
                        } else if(data.loan_type6 == 'F'){

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 

                  break;
                  case 'G':
                          if(data.loan_type1 == 'G'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'G'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);

                           
                        } else if(data.loan_type3 == 'G'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'G'){ 


                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                   
                        }else if(data.loan_type5 == 'G'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);    
                          
                        } else if(data.loan_type6 == 'G'){

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 

                  break;

                  case 'D':
                          if(data.loan_type1 == 'D'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'D'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);

                           
                        } else if(data.loan_type3 == 'D'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'D'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
          
                        }else if(data.loan_type5 == 'D'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type6 == 'D'){

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 

                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 

                  break;

                  case 'B':
                          if(data.loan_type1 == 'B'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'B'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 

                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                           
                        } else if(data.loan_type3 == 'B'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'B'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                        }else if(data.loan_type5 == 'B'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                         
                        } else if(data.loan_type6 == 'B'){

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 

                  break;

                  case 'H':
                          if(data.loan_type1 == 'H'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'H'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);

                           
                        } else if(data.loan_type3 == 'H'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'H'){ 


                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_); 
                          
                        }else if(data.loan_type5 == 'H'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);    
                          
                        } else if(data.loan_type6 == 'H'){

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 

                  
                  break;

                  default:
                          if(data.loan_type1 == 'A'){
                       $('.step_6_table').html('');

                        $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.mr[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.prime[i])+'</td><td>'+addCommasDirect(data.result_table1.a_field[i])+'</td></tr>');
                        }

                        $('.step_6_table').append('</tbody>'); 


                        $('.step_6_e_table').html('');

                        $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                        for (i = 0; i <= 11; i++) { 
                          $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table1.e_a_field[i])+'</td></tr>');
                        }

                        $('.step_6_e_table').append('</tbody>');
                        $('.head_new_').html(tab_);
                       
                        } else if(data.loan_type2 == 'A'){ 
                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.mr[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.prime[i])+'</td><td>'+addCommasDirect(data.result_table2.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table2.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);

                           
                        } else if(data.loan_type3 == 'A'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.mr[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.prime[i])+'</td><td>'+addCommasDirect(data.result_table3.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table3.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                          
                        } else if(data.loan_type4 == 'A'){ 


                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.mr[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.prime[i])+'</td><td>'+addCommasDirect(data.result_table4.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table4.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);      
                          
                        }else if(data.loan_type5 == 'A'){ 

                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.mr[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.prime[i])+'</td><td>'+addCommasDirect(data.result_table5.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table5.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                     
                        } else if(data.loan_type6 == 'A'){


                           $('.step_6_table').html('');

                          $('.step_6_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.table_body_6').append('<tr><td>'+addCommasDirect(data.result_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.mr[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.prime[i])+'</td><td>'+addCommasDirect(data.result_table6.a_field[i])+'</td></tr>');
                          }

                          $('.step_6_table').append('</tbody>'); 


                          $('.step_6_e_table').html('');

                          $('.step_6_e_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="e_table_body_6">');

                          for (i = 0; i <= 11; i++) { 
                            $('body').find('.e_table_body_6').append('<tr><td>'+addCommasDirect(data.result_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.result_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.result_table6.e_a_field[i])+'</td></tr>');
                          }

                          $('.step_6_e_table').append('</tbody>');
                          $('.head_new_').html(tab_);
                 
                        } 

                  break;
                }


                /*Step 7*/



                  $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.result_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);

                switch(_tab_){
                  case 'A':
                     if(data.loan_type1 == 'A'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'A'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'A'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'A'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'A'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'A'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        } 
                  break;
                  case 'F':
             
                         
                     if(data.loan_type1 == 'F'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'F'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'F'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'F'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'F'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'F'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        }
                  break;
                  case 'G':
                          if(data.loan_type1 == 'G'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'G'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'G'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'G'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'G'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'G'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        }

                  break;

                  case 'D':
                         if(data.loan_type1 == 'D'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'D'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'D'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'D'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'D'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'D'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        }
                  break;

                  case 'B':
                           if(data.loan_type1 == 'B'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'B'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'B'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'B'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'B'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'B'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        }
                  break;

                  case 'H':
                           if(data.loan_type1 == 'H'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'H'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'H'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'H'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'H'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'H'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        }

                  
                  break;

                  default:
                          if(data.loan_type1 == 'A'){
                         $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table1.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table1.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table1.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                       
                        } else if(data.loan_type2 == 'A'){ 
                             $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table2.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table2.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table2.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                           
                        } else if(data.loan_type3 == 'A'){ 

                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table3.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table3.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table3.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        } else if(data.loan_type4 == 'A'){ 


                           $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table4.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table4.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table4.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                        
                          
                        }else if(data.loan_type5 == 'A'){ 



                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table5.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table5.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table5.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                          
                        
                          
                        
                          
                        } else if(data.loan_type6 == 'A'){




                         
                          $('.step_7_table').html('');

                  $('.step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="head_new_">A</th></tr></thead><tbody class="table_body_7">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_7').append('<tr><td>'+addCommasDirect(data.seven_table6.linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.a_field[i])+'</td></tr>');
                  }

                  $('.step_7_table').append('</tbody>'); 


                  $('.e_step_7_table').html('');

                  $('.e_step_7_table').append('<thead><tr><th>MR Linked</th><th>MR (PMT)</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>Prime/Madad Month</th><th class="_head_new_">A</th></tr></thead><tbody class="e_step_7_table_body">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.e_step_7_table_body').append('<tr><td>'+addCommasDirect(data.seven_table6.e_linked_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_mr[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_left_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_interest_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_net_pay[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_prime[i])+'</td><td>'+addCommasDirect(data.seven_table6.e_a_field[i])+'</td></tr>');
                  }

                  $('.e_step_7_table').append('</tbody>');
                  $('._head_new_').html(_tab_);
                 
                        }

                  break;
                }




                /*Step 7*/

                /*Step 8*/

                $('.final_step_8').html('');

                  $('.final_step_8').append('<thead><th>MR Linked</th><th>MR</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>&nbsp;</th></thead><tbody class="table_body_8">');

                  for (i = 0; i <= 11; i++) { 
                    $('body').find('.table_body_8').append('<tr><td>'+addCommasDirect(data.step_8.total_linked_mr[i])+'</td><td>'+addCommasDirect(data.step_8.total_mr[i])+'</td><td>'+addCommasDirect(data.step_8.total_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.step_8.total_left_pay[i])+'</td><td>'+addCommasDirect(data.step_8.total_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.step_8.total_interest_pay[i])+'</td><td>'+addCommasDirect(data.step_8.total_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.step_8.total_net_pay[i])+'</td><td>'+(i+1)+'</td></tr>');
                  }

                  $('.final_step_8').append('</tbody>'); 

                  $('.sel_8_final').on('change', function(){
                    var def = $(this).val();
                    var i_start = (def*12)-12;
                    var i_finish = (def*12)-1;
                     $('.final_step_8').html('');

                  $('.final_step_8').append('<thead><th>MR Linked</th><th>MR</th><th>Left Pay Linked</th><th>Left Pay</th><th>Intrest Pay Linked</th><th>Intrest Pay</th><th>Net Pay Linked</th><th>Net Pay</th><th>&nbsp;</th></thead><tbody class="table_body_8">');

                  for (i = i_start; i <= i_finish; i++) { 
                    $('body').find('.table_body_8').append('<tr><td>'+addCommasDirect(data.step_8.total_linked_mr[i])+'</td><td>'+addCommasDirect(data.step_8.total_mr[i])+'</td><td>'+addCommasDirect(data.step_8.total_left_pay_linked[i])+'</td><td>'+addCommasDirect(data.step_8.total_left_pay[i])+'</td><td>'+addCommasDirect(data.step_8.total_interest_pay_linked[i])+'</td><td>'+addCommasDirect(data.step_8.total_interest_pay[i])+'</td><td>'+addCommasDirect(data.step_8.total_net_pay_linked[i])+'</td><td>'+addCommasDirect(data.step_8.total_net_pay[i])+'</td><td>'+(i+1)+'</td></tr>');
                  }

                  $('.final_step_8').append('</tbody>'); 
                  });

                /*Step 8*/



                    
                 }
        });
  } 
 
