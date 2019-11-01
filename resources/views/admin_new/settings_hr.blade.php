@include('layouts.admin_top_header_hr')
@php
$dd = array();
foreach($checks as $check){
$dd[] = $check->meta_key;    
}
@endphp
    <!-- search-bar starts here -->

    <div class="search-wrap">
        <div class="container-fluid">
            <form class="d-f a-i-c j-c-s-b">
                <div class="form-group">
                    <label>שפת מערכת / Language Support</label>
                   <select class="selectpicker" id="langsel">
                     <option>Admin Hebrew</option>
                     <option>Admin English</option>  
                   </select>
                </div>
                <button type="submit" class="main-button button-large"  style="display: none;" /> שמור הגדרות שהשתנו
                </button>
            </form>
        </div>
    </div>

    <!-- search-bar ends here -->

    <!-- main content starts here -->

    <div class="main-content">
        <div class="container-fluid">
            <div class="online-settings-wrap d-f j-c-s-b">
                <div class="report-pricing-container">
                    <div class="table-container table-auto table-nowrap report-pricing-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>תמחור דוח משכנתא</th>
                                    <th>מחיר</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reports as $report)

                                <tr>
                                   <td>{{$report->report}}</td>
                                    <td>
                                        <form action="save_report-hr" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="text" readonly name="rp" id="rp{{$report->id}}" class="edr_hr" value="{{$report->price}}" > 
                                                    <input type="hidden"  name="rid" id="rid" value="{{$report->id}}">

                                                    <div class="edit_report_entry_hr">
                                                        <button type="button" class="staff_on_site_hr" id="staff_edit"><i class="fa fa-edit"></i></button>
                                                    </div>
                                                    <div class="submit_report_entry_hr">
                                                         <button type="submit" name="submit" class="staff_done" ><i class="fa fa-check"></i></button>
                                                        <button type="button" class="staff_cancel_hr"><i class="fa fa-close"></i></button>
                                                    </div>
                                                    
                                                </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="controls-container">
                        <h4>Question Control (Red Skip):</h4>
                        <ul>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                    <input type="checkbox" name="ques_control_Q10" id="ques_control_Q10"
                                    <?php if (in_array("Ques-Control-Q10", $dd)) {
                                       echo "checked";
                                    }?> >
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use Q10 Grace (if white: set to 0 for all customers)</div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                    <input type="checkbox"  name="ques_control_Q13" id="ques_control_Q13" <?php if(in_array("Ques-Control-Q13", $dd)){ echo"checked='checked'"; } ?>>
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use Q13 Future Income (if white: disable for all customers)</div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                    <input type="checkbox"  name="ques_control_Q14" id="ques_control_Q14" <?php if(in_array("Ques-Control-Q14", $dd)){ echo"checked='checked'"; } ?>>
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use Q14 Current Loans (if white: disable for all customers) </div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                    <input type="checkbox"  name="ques_control_Q15" id="ques_control_Q15" <?php if(in_array("Ques-Control-Q15", $dd)){ echo"checked='checked'"; } ?>>
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use Q15 Future Loans (if white: disable for all customers)</div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                     <input type="checkbox"  name="ques_control_Q16" id="ques_control_Q16" <?php if(in_array("Ques-Control-Q16", $dd)){ echo"checked='checked'"; } ?>>
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use Q16 H-Elegebility (if white: disable for all customers)</div>
                            </li>
                        </ul>
                    </div>
                    <div class="controls-container">
                        <h4>Algo Control (Red Skip):</h4>
                        <ul>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                    <input type="checkbox" name="algo_control_F_Euro" id="algo_control_F_Euro" <?php if(in_array("Algo-Control-F-Euro", $dd)){ echo"checked='checked'"; } ?> >
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use F- Euro loan type(do 10% split from prime)</div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                                    <input type="checkbox" name="algo_control_G_Dollar" id="algo_control_G_Dollar" <?php if(in_array("Algo-Control-G-Dollar", $dd)){ echo"checked='checked'"; } ?> >
                                    <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text">Use G- Dollar loan type(do 10% split from prime)</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="coupon-code">
                    <div class="table-container table-auto table-nowrap coupon-code-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>קוד קופון</th>
                                    <th>מחיר שימוש בקוד קופון</th>
                                    <th>מחק</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->coupon_code}}</td>
                                    <td>{{$coupon->amount}}</td>
                                     <td><a href="/admin/delete-coupon-hr/{{$coupon->id}}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <form method="POST" action="/admin/save_coupon-hr" class="coupon-cc">
                     {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="cc" id="cc_hr" placeholder="coupon Code"> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="cp" id="cp_hr" placeholder="coupon Price"> 
                    </div>
                    <div class="form-group">
                        <input type="submit" name="sb" value="Submit"> 
                    </div>
                   
                </form>
                </div>
                <div class="constant-bank-loans constantAbankLoan">
                    <h2>הלוואות בנק קבועות במערכת:</h2>
                     <div class="table-container table-auto table-nowrap constant-bank-loans-table d-flix">
                        <table>
                            <thead>
                                <tr>
                                    <th>הלוואות בנק קבועות</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td>גובה הלוואה</td>
                                    
                                </tr>
                                <tr>
                                    <td>תקופת הלוואה</td>
                                    
                                </tr>
                                <tr>

                                    <td>ריבית(%)</td>
                                    
                                </tr>
                                <tr>
                                    <td>החזר חודשי</td>
                                    
                                </tr>
                           
                            </tbody>
                        </table>
                       
                            <table>
                                <thead>
                                  <form method="POST" action="save_constant-hr">
                                    <tr>
                                        <th >AA - Mizrachi<button type="button" name="edit" class="cedit_hr edit-btn" ><i class="fa fa-edit"></i></button>

                                            <div class="btn-abs">
                                        <button type="submit" name="submit" class="csub_hr edit-btn" style="display: none;"><i class="fa fa-check"></i></button>
                                        <button type="button" name="can" class="ccan_hr edit-btn" style="display: none;" ><i class="fa fa-close"></i></button>
                                        </div>
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($constant_banks_AA as $cb_AA)    
                                
                                     {{ csrf_field() }}
                                    <tr>
                                        <input type="hidden" name="bank_" id="bank_aa" value="AA">
                                        <td><input readonly type="text" name="loanfee_" id="loanfee_aa" class="_b" value="{{$cb_AA->loan_fee}}"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input readonly type="text" class="_b" name="loantime_" id="loantime_aa" value="{{$cb_AA->loan_time}}"></td>
                                        
                                    </tr>
                                    <tr>

                                        <td><input readonly type="text" name="interest_" id="interest_aa" class="_b" value="{{$cb_AA->loan_interest}}"></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <td id="mr_one_hr"></td>
                                        
                                    </tr>
                                     
                                    
                                </form>
                                @endforeach
                                </tbody>
                            </table>
                    
                        <table>
                            <thead>
                                <form action="save_constant-hr" method="POST">
                                <tr>
                                    <th >DD - Hpoalim<button type="button" name="edit" class="cedit_hr2 edit-btn" ><i class="fa fa-edit"></i></button>
                                        <div class="btn-abs">
                                          <button type="submit" name="submit" class="csub_hr1 edit-btn" style="display: none;"><i class="fa fa-check"></i></button>
                                        <button type="button" name="can" class="ccan_hr1 edit-btn" style="display: none;" ><i class="fa fa-close"></i></button>
                                    </div>
                                    </th>
                                    
                                </tr>
                            </thead>
                           <tbody>
                                @foreach($constant_banks_DD as $cb_DD)
                                
                                      {{ csrf_field() }}
                                    <tr>
                                        <input type="hidden" name="bank_" id="bank_DD" value="DD">
                                        <td><input readonly type="text" name="loanfee_" id="loanfee_dd" class="_dd" value="{{$cb_DD->loan_fee}}"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input readonly type="text" name="loantime_" class="_dd"  id="loantime_dd" value="{{$cb_DD->loan_time}}"></td>
                                        
                                    </tr>
                                    <tr>

                                        <td><input readonly type="text" name="interest_" class="_dd"  id="interest_dd" value="{{$cb_DD->loan_interest}}"></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <td id="mr_two_hr"></td>
                                        
                                    </tr>
                                     
                                     
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                        <table>
                            <thead>
                               <form action="save_constant-hr" method="POST">
                                <tr>
                                    <th>EE - Leumi<button type="button" name="edit" class="cedit_hr3 edit-btn" ><i class="fa fa-edit"></i></button>
                                       <div class="btn-abs">
                                          <button type="submit" name="submit" class="csub_hr2 edit-btn" style="display: none;"><i class="fa fa-check"></i></button>
                                        <button type="button" name="can" class="ccan_hr2 edit-btn" style="display: none;" ><i class="fa fa-close"></i></button>
                                    </div>      
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($constant_banks_EE as $cb_EE)
                                
                                     {{ csrf_field() }}
                                    <tr>
                                        <input type="hidden" name="bank_" id="bank_" value="EE">
                                        <td><input readonly type="text" name="loanfee_" class="ee_" id="loanfee_ee" value="{{$cb_EE->loan_fee}}"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input readonly type="text" name="loantime_" class="ee_" id="loantime_ee" value="{{$cb_EE->loan_time}}"></td>
                                        
                                    </tr>
                                    <tr>

                                        <td><input readonly type="text" name="interest_" class="ee_" id="interest_ee" value="{{$cb_EE->loan_interest}}"></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                         <td id="mr_three_hr"></td>
                                        
                                    </tr>
                                     
                                    
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="table-container table-auto table-nowrap constant-bank-loans-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>הלוואות בנק קבועות</th>
                                    
                                    <th>AA - Mizrachi</th>
                                    <th>DD - Hpoalim</th>
                                    <th>EE - Leumi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>גובה הלוואה</td>
                                    <td>1k-10m</td>
                                    <td>1k-10m</td>
                                    <td>1k-10m</td>
                                </tr>
                                <tr>
                                    <td>תקופת הלוואה</td>
                                    <td>1-30 years</td>
                                    <td>1-30 years</td>
                                    <td>1-30 years</td>
                                </tr>
                                <tr>
                                    <td>ריבית</td>
                                    <td>0-100%</td>
                                    <td>0-100%</td>
                                    <td>0-100%</td>
                                </tr>
                                <tr>
                                    <td>החזר חודשי</td>
                                    <td>PMT calc</td>
                                    <td>PMT calc</td>
                                    <td>PMT calc</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <div class="controls-container vertical">
                        <ul class="d-f a-i-c j-c-s-e">
                            <h4>איפשור ובדיקה של הלוואות קבועות במערכת:</h4>
                            <li>
                                <div class="toggle-switch">
                                    <label class="switch">
                  <input type="checkbox"  name="const_bank_AA" id="const_bank_AA" <?php if(in_array("AA-bank", $dd)){ echo"checked='checked'"; } ?> >
                  <span class="slider round"></span> </label>
                                </div>
                            </li>
                            <li>
                                <div class="toggle-switch">
                                    <label class="switch">
                    <input type="checkbox"  name="const_bank_DD" id="const_bank_DD" <?php if(in_array("DD-bank", $dd)){ echo"checked='checked'"; } ?> >
                    <span class="slider round"></span> </label>
                                </div>
                            </li>
                            <li>
                                <div class="toggle-switch">
                                    <label class="switch">
                    <input type="checkbox"  name="const_bank_EE" id="const_bank_EE" <?php if(in_array("EE-bank", $dd)){ echo"checked='checked'"; } ?> >
                    <span class="slider round"></span> </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="controls-container">
                        <h4>Test control:</h4>
                        <ul>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                  <input type="checkbox"   name="test_control_testmode" id="test_control_testmode" <?php if(in_array("Test-Control-TestMode", $dd)){ echo"checked='checked'"; } ?> >
                  <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text"><span>Green: </span>TEST MODE ONLY</div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                 <input type="checkbox"   name="test_control_skippayment" id="test_control_skippayment" <?php if(in_array("Test-Control-SkipPayment", $dd)){ echo"checked='checked'"; } ?> >
                  <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text"><span>Green: </span>skip payment stage for fast registration complete and testing of site and go directly from registration to final report</div>
                            </li>
                            <li class="d-f">
                                <div class="toggle-switch">
                                    <label class="switch">
                  <input type="checkbox"  name="test_control_allowmultireg" id="test_control_allowmultireg" <?php if(in_array("Test-Control-AllowMultiReg", $dd)){ echo"checked='checked'"; } ?> >
                  <span class="slider round"></span> </label>
                                </div>
                                <div class="controls-text"><span>Green: </span>Allow multiple times of registration edit for testing in production mode allow users only one time to edit registration after payment</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style type="text/css">
    
.constantAbankLoan .suggested-offers-table, 
.constantAbankLoan .database-offers-table, 
.constantAbankLoan .online-clerk-table, 
.constantAbankLoan  .online-customers-table, 
.constantAbankLoan .table-auto {
    overflow-x: auto;
    overflow-y: hidden;
}
.constant-bank-loans.constantAbankLoan table tr th:last-child {
    border-right: none;
    width: calc(100% + 1px);
}
.d-flix{
    display: flex;
}

.d-flix input{
border: 1px solid #ddd;
    -webkit-border-radius: 100px;
    border-radius: 100px;
    padding: 14px!important;
    width: 91%!important;
    height: 30px!important;
    -webkit-box-shadow: 0 2px 3px #cbe2ff!important;
    box-shadow: 0 2px 3px #cbe2ff!important;
    }

     .d-flix  td {
    padding: 10px;
    border-left: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    font-weight: 300;
    color: #666;
    font-size: 14px;
    text-transform: capitalize;
    line-height: 35px;
    vertical-align: middle;


}
.d-flix th {
    background-color: #343434;
    padding: 10px;
    color: #fff;
    text-transform: capitalize;
    position: relative;
    line-height: 18px;
    font-size: 14px;
    padding-right: 15px;
    display: inline-flex;
    height: 40px;
}
.fa-check {
    color: green;
}

.edit-btn {
    background: transparent;
    border: navajowhite;
    margin-left: 2px;
}
.fa-close {
    color: red;
    margin-top: 12px;
}

.coupon-code-table i.fa.fa-times {
    color: red;
}

</style>
    @include('layouts.footer_admin_hr')

<script type="text/javascript">
  $(document).ready(function(){
    $('.submit_report_entry_hr').hide();
       $(".staff_on_site_hr").on("click", function(){
           $(this).parent().next(".submit_report_entry_hr").show();
           $(this).parent().siblings(".edr_hr").prop('readonly', false);
           $(this).parent().hide();
       });

    $('.staff_cancel_hr').on('click', function(){

        $(this).parent().siblings(".edit_report_entry_hr").show();
        $(this).parent().siblings(".edr_hr").prop('readonly', true);
        $(this).parent().hide();

    });


    $(".cedit_hr").on("click", function(){
        $("._b").prop('readonly', false);
        $(".csub_hr").show();
        $(".ccan_hr").show();
        $(".cedit_hr").hide();
    });

    $(".ccan_hr").on("click", function(){
        $("._b").prop('readonly', true);
        $(".cedit_hr").show();
        $(".csub_hr").hide();
        $(".ccan_hr").hide();
    });

    $(".cedit_hr2").on("click", function(){
        $("._dd").prop('readonly', false);
        $(".csub_hr1").show();
        $(".ccan_hr1").show();
        $(".cedit_hr2").hide();
    });

    $(".ccan_hr1").on("click", function(){
        $("._dd").prop('readonly', true);
        $(".cedit_hr2").show();
        $(".csub_hr1").hide();
        $(".ccan_hr1").hide();
    });

    $(".cedit_hr3").on("click", function(){
        $(".ee_").prop('readonly', false);
        $(".csub_hr2").show();
        $(".ccan_hr2").show();
        $(".cedit_hr3").hide();
    });

    $(".ccan_hr2").on("click", function(){
        $(".ee_").prop('readonly', true);
        $(".cedit_hr3").show();
        $(".csub_hr2").hide();
        $(".ccan_hr2").hide();
    });

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


    url = 'check_box_value_hr';
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

 $(document).ready(function(){
           
        var loan = $("#loanfee_aa").val();  
        var apr = $("#interest_aa").val();
        var term = $("#loantime_aa").val();
      
        apr = apr/1200;
        term = term*12;

        var amount = apr * -loan * Math.pow((1 + apr), term) / (1 - Math.pow((1 + apr), term));
        $("#mr_one_hr").html(amount.toFixed(2));

        var loan1 = $("#loanfee_dd").val();  
        var apr1 = $("#interest_dd").val();
        var term1 = $("#loantime_dd").val();
      
        apr1 = apr1/1200;
        term1 = term1*12;

        var amount1 = apr1 * -loan1 * Math.pow((1 + apr1), term1) / (1 - Math.pow((1 + apr1), term1));
        $("#mr_two_hr").html(amount1.toFixed(2));


        var loan2 = $("#loanfee_ee").val(); 
        var apr2 = $("#interest_ee").val();
        var term2 = $("#loantime_ee").val();
      
        apr2 = apr2/1200;
        term2 = term2*12;

        var amount2 = apr2 * -loan2 * Math.pow((1 + apr2), term2) / (1 - Math.pow((1 + apr2), term2));
        $("#mr_three_hr").html(amount2.toFixed(2));

  
    $("#langsel").on("change", function(){
    if($(this).val() == "Admin Hebrew"){
      window.location.replace("/admin/settings-hr");

    }
    else{
      window.location.replace("/admin/settings");
    }
    
  });
  });



</script>