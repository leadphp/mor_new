@include('layouts.admin_top_header')
@php
$dd = array();
foreach($checks as $check){
$dd[] = $check->meta_key;    
}
@endphp


    <div class="search-wrap">
        <div class="container-fluid">
            <form class="d-f a-i-c j-c-s-b">
                <div class="form-group">
                    <label>Language support</label>
                    <select class="selectpicker">
                      <option>Admin English</option>
                      <option>Admin English-1</option>
                      <option>Admin English-2</option>
                    </select>
                </div>
                <!-- <button type="submit" class="main-button button-large" /> Save Settings
                </button> -->
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
                                    <th>Report pricing</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($reports as $report)
                                        <tr>
                                            <td>{{$report->report}}</td>
                                            <td>
                                                <form action="save_report" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="text" readonly name="rp" id="rp{{$report->id}}" class="edr" value="{{$report->price}}" > 
                                                    <input type="hidden"  name="rid" id="rid" value="{{$report->id}}">

                                                    <div class="edit_report_entry">
                                                        <button type="button" class="staff_on_site" id="staff_edit"><i class="fa fa-edit"></i></button>
                                                    </div>
                                                    <div class="submit_report_entry">
                                                         <button type="submit" name="submit" class="staff_done" ><i class="fa fa-check"></i></button>
                                                        <button type="button" class="staff_cancel"><i class="fa fa-close"></i></button>
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
                                        <input type="checkbox" name="ques_control_Q10" id="ques_control_Q10" <?php if(in_array("Ques-Control-Q10", $dd)){ echo"checked='checked'"; } ?> >
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
                                    <th>Coupon code</th>
                                    <th>Coupon Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->coupon_code}}</td>
                                    <td>{{$coupon->amount}}</td>
                                </tr>
                                @endforeach
                               
                                
                            </tbody>
                        </table>

                    </div>
                     <form method="POST" action="/admin/save_coupon" class="coupon-cc">
                     {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="cc" id="cc" placeholder="coupon Code"> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="cp" id="cp" placeholder="coupon Price"> 
                    </div>
                    <div class="form-group">
                        <input type="submit" name="sb" value="Submit"> 
                    </div>
                   
                </form>
                </div>
               
                <div class="constant-bank-loans constantAbankLoan">
                    <h2>Constant Bank Loans:</h2>
                    <div class="table-container table-auto table-nowrap constant-bank-loans-table d-flix">
                        <table>
                            <thead>
                                <tr>
                                    <th >Q15 Constant Bank Loans</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td>15.7 loan_fee</td>
                                    
                                </tr>
                                <tr>
                                    <td>15.8 loan_time</td>
                                    
                                </tr>
                                <tr>

                                    <td>15.9 interest</td>
                                    
                                </tr>
                                <tr>
                                    <td>15.10 Monthly Return (MR)</td>
                                    
                                </tr>
                           
                            </tbody>
                        </table>
                       
                            <table>
                                <thead>
                                  <form method="POST" action="save_constant">
                                    <tr>
                                        <th >AA - Mizrachi <button type="button" name="edit" class="cedit edit-btn" ><i class="fa fa-edit"></i></button>

                                            <div class="btn-abs">
                                        <button type="submit" name="submit" class="csub edit-btn" style="display: none;"><i class="fa fa-check"></i></button>
                                        <button type="button" name="can" class="ccan edit-btn" style="display: none;" ><i class="fa fa-close"></i></button>
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
                                        <td>ANS: 100000</td>
                                        
                                    </tr>
                                     
                                    
                                </form>
                                @endforeach
                                </tbody>
                            </table>
                    
                        <table>
                            <thead>
                                <form action="save_constant" method="POST">
                                <tr>
                                    <th >DD - Hpoalim <button type="button" name="edit" class="cedit2 edit-btn" ><i class="fa fa-edit"></i></button>
                                        <div class="btn-abs">
                                          <button type="submit" name="submit" class="csub1 edit-btn" style="display: none;"><i class="fa fa-check"></i></button>
                                        <button type="button" name="can" class="ccan1 edit-btn" style="display: none;" ><i class="fa fa-close"></i></button>
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
                                        <td>ANS: 100000</td>
                                        
                                    </tr>
                                     
                                     
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                        <table>
                            <thead>
                               <form action="save_constant" method="POST">
                                <tr>
                                    <th> EE - Leumi <button type="button" name="edit" class="cedit3 edit-btn" ><i class="fa fa-edit"></i></button>
                                       <div class="btn-abs">
                                          <button type="submit" name="submit" class="csub2 edit-btn" style="display: none;"><i class="fa fa-check"></i></button>
                                        <button type="button" name="can" class="ccan2 edit-btn" style="display: none;" ><i class="fa fa-close"></i></button>
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
                                        <td>ANS: 100000</td>
                                        
                                    </tr>
                                     
                                    
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="controls-container vertical">
                        <ul class="d-f a-i-c j-c-s-e">
                            <h4>Use this option state:</h4>
                            <li>
                                <!-- <form method="POST" action="check_box_value"> --> 
                                    <div class="toggle-switch">
                                        <label class="switch">
                                            <input type="checkbox"  name="const_bank_AA" id="const_bank_AA" <?php if(in_array("AA-bank", $dd)){ echo"checked='checked'"; } ?> >
                                            <span class="slider round"></span> 
                                        </label>
                                    </div>
                               <!--  </form> -->
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
                        <form method="POST" action="">
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
                                <div class="controls-text"><span>Green: </span>Skip payment stage for fast registration complete and testing of site and go directly from registration to final report</div>
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
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content ends here -->

</body>

</html>


@include('layouts.footer_admin')