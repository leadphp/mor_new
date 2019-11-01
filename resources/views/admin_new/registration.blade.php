@include('layouts.admin_top_header')
@include('layouts.admin_header_subheader')






@php

use App\Bank_interest;
    if(isset($maindata_ques_6) && isset($maindata_ques_6[0])){
        $bank_account = $maindata_ques_6[0]->meta_value;
        $bank_account = json_decode($bank_account);
        $bank_account = end($bank_account);


        switch ($bank_account) {
          case 'East':
            $bank_account = 'AA';
          break;
          case 'Discount':
            $bank_account = 'BB';
          break;
          case 'Association':
            $bank_account = 'CC';
          break;
          case 'Workers':
            $bank_account = 'DD';
          break;
          case 'National':
            $bank_account = 'EE';
          break;
          case 'Treasure':
            $bank_account = 'FF';
          break;
          case 'Jeruselam':
            $bank_account = 'GG';
          break;
          case 'International':
            $bank_account = 'HH';
          break;
          case 'Other':
            $bank_account = 'OO';
          break;
          default:
            $bank_account = 'AA';
          break;
        }



        //dd($bank_account);
        $class_colour = ""; 

        $prime_deltas = Bank_interest::where('bank_name',$bank_account)->where('funding_type','FundingA')->first();
        if(!empty($prime_deltas)){
            $prime_delta = $prime_deltas->prime_delta;
            $discount_status = $prime_deltas->discount_status;
            $discount_fun = $prime_deltas->discount;
            $class_colour ="green";
        }elseif(!empty($prime_deltas) && $prime_deltas->discount_status == 1){
            $prime_delta = "";
            $discount_status = "1";
            $discount_fun = "";
            $class_colour ="red"; 
        }else{
            $prime_delta = "";
            $discount_status = "2";
            $discount_fun = "";
            $class_colour ="grey";   
        }

    }else{
        $prime_delta = "";
        $discount_status = "2";
        $discount_fun = "";
        $class_colour ="grey"; 
    }
@endphp







 <div class="main-content registration-admin aMorTable">
        <div class="container-fluid d-f">
            <div class="questions-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#all-questions" aria-controls="customer-offers" role="tab" data-toggle="tab">Show all questions</a></li>
                    <li role="presentation" class="general_info_button"><a href="#general-info" aria-controls="general-info" role="tab" data-toggle="tab">Q1-7 General Info</a></li>
                    <li role="presentation" class="define_needs_button"><a href="#define-needs" aria-controls="define-needs" role="tab" data-toggle="tab">Q8-11 Define needs</a></li>
                    <li role="presentation" class="finance_info_button"><a href="#finance-info" aria-controls="finance-info" role="tab" data-toggle="tab">Q12-16 Finance Info</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all-questions">
                        <div class="tab-inner d-f">
                            <ul>
                                <li>
                                    <h2>Q1-7 General Info</h2>
                                    <ul class="questions d-f">
                                        <li><span>Q1.</span> Leaving Location</li>
                                        <li><span>Q2.</span> More Aprt </li>
                                        <li><span>Q3.</span> Geneder</li>
                                        <li><span>Q4.</span> Family Income</li>
                                        <li><span>Q5.</span> Family Savings </li>
                                        <li><span>Q6.</span> Bank Account</li>
                                        <li><span>Q7.</span> Move Bank</li>
                                        <li><span>Q7.1</span> Oldest Age</li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Q8-11 Define Needs</h2>
                                    <ul class="questions d-f">
                                        <li>Q8. Mortgage Cause</li>
                                        <li>Q9. Personal Type</li>
                                        <li>Q10. Enter Date</li>
                                        <li>Q11. Property Evaluation</li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Q12-16 Finance Info</h2>
                                    <ul class="questions d-f">
                                        <li>Q12. Monthly Return</li>
                                        <li>Q13. Future Income</li>
                                        <li>Q14. Current Loans</li>
                                        <li>Q15. Future Loans</li>
                                        <li>Q16. Elegebility</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="general-info">
                        <div class="tab-inner d-f">
                            <div class="tab-inner d-f">
                                <ul>
                                    <li>
                                        <h2>Q1-7 General Info</h2>
                                        <ul class="questions d-f">
                                            <li><span>Q1.</span> Leaving Location</li>
                                            <li><span>Q2.</span> More Aprt </li>
                                            <li><span>Q3.</span> Geneder</li>
                                            <li><span>Q4.</span> Family Income</li>
                                            <li><span>Q5.</span> Family Savings </li>
                                            <li><span>Q6.</span> Bank Account</li>
                                            <li><span>Q7.</span> Move Bank</li>
                                            <li><span>Q7.1</span> Oldest Age</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="define-needs">
                        <div class="tab-inner d-f">
                            <div class="tab-inner d-f">
                                <ul>
                                    <li>
                                        <h2>Q8-11 Define Needs</h2>
                                        <ul class="questions d-f">
                                            <li>Q8. Mortgage Cause</li>
                                            <li>Q9. Personal Type</li>
                                            <li>Q10. Enter Date</li>
                                            <li>Q11. Property Evaluation</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="finance-info">
                        <div class="tab-inner d-f">
                            <div class="tab-inner d-f">
                                <ul>
                                    <li>
                                        <h2>Q12-16 Finance Info</h2>
                                        <ul class="questions d-f">
                                            <li>Q12. Monthly Return</li>
                                            <li>Q13. Future Income</li>
                                            <li>Q14. Current Loans</li>
                                            <li>Q15. Future Loans</li>
                                            <li>Q16. Elegebility</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="best-bank-form">
                <form>
                    <div class="form-group">
                        <label>Best Bank By Algo</label>
                        <input type="text" class="form-control" id="best-bank-algo" name="best-bank-algo" data-placeholder="AA - Mizrahi " />
                    </div>
                    <div class="form-group">
                        <label>20.1 Req_Morg_Algo (11.3 + 14.7 + 15.11)</label>
                        <input type="text" class="form-control" id="mortgage-recommended" name="best-bank-algo" data-placeholder="1,00,000" />
                    </div>
                    <div class="form-group">
                        <label>20.2 Req_PMT_Algo (12.1 + 14.8 + 15.12)</label>
                        <input type="text" class="form-control" id="req-pmt-recommended" name="req-pmt-recommended" data-placeholder="1,00,000" />
                    </div>
                </form>
            </div>



            <!-- ************************************************************************************** -->

                                            <!-- SECTION FIRST STARTED-->
            
            <!--  *************************************************************************************-->


            <div class="all-questions-wrap d-f j-c-s-b a-i-f-e">
                <div class="question-container question-1-7 d-f j-c-s-b">


                    <!--QUESTION NUMBER ONE -->

                    <div class="question-container question-1">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Q1-7 General Info</a>
                        <div class="table-container table-auto table-nowrap leaving-location-table">
                            @php
                            if(count($maindata_ques_1)){
                                $class2="";
                            }else{
                                $class2="hide_for_now";
                            }
                            @endphp



                            <form method="post" id="formQuestionOne" class="formQuestionOne">
                                <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="4">Q1 Leaving Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.1 Aprt_No_Morg</td>
                                            <td>
    										  <div class="inputYesNo">
    										     <input type="radio" id="fieldOne" name="living_location" value="aprt_no_mortgage" <?php if(count($maindata_ques_1)){ if($maindata_ques_1[0]->meta_value == "aprt_no_mortgage"){ echo "checked=checked"; } else{ } }?>>

    											 <label for="fieldOne">

    											   <div class="selectedNo">--</div>
    											   <div class="selectedYes">Yes</div>

    											 </label>
    										  </div>
    										</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>1.2 Aprt_With_Morg</td>
                                            <td>
    										  <div class="inputYesNo">
    										     <input type="radio" id="fieldTwo" name="living_location" value="aprt_with_mortgage" <?php if(count($maindata_ques_1)){ if($maindata_ques_1[0]->meta_value == "aprt_with_mortgage"){ echo "checked=checked"; } else{ } }?>>
    											 <label for="fieldTwo">
    											   <div class="selectedNo">--</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>1.3 Rental_Aprt</td>
                                            <td>
    										  <div class="inputYesNo">
    										     <input type="radio" id="fieldThree" name="living_location" value="rental_aprt" <?php if(count($maindata_ques_1)){ if($maindata_ques_1[0]->meta_value == "rental_aprt"){ echo "checked=checked"; } else{ } }?>>
    											 <label for="fieldThree">
    											   <div class="selectedNo">--</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</td>
                                            <td>1.5 Monthly_Pay</td>
    										<td>
    										   <input type="text" name="monthly_pay" data-placeholder="Value" value="<?php if(count($maindata_ques_1) && count($maindata_ques_1) > 1){ echo $maindata_ques_1[1]->meta_value; } ?>" class="monthly_pay_ques_one" onkeyup="this.value=addCommas(this.value);">
    										</td>
                                        </tr>
                                        <tr>
                                            <td>1.4 Free_Aprt</td>
                                            <td>
    										  <div class="inputYesNo">
    										     <input type="radio" id="fieldFour" name="living_location" value="free_aprt" <?php if(count($maindata_ques_1)){ if($maindata_ques_1[0]->meta_value == "free_aprt"){ echo "checked=checked"; } else{ } }?>>
    											 <label for="fieldFour">
    											   <div class="selectedNo">--</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>





                    <!--QUESTION NUMBER TWO -->

                    @php
                    
                    if(isset($maindata_ques_2) &&count($maindata_ques_2) > 0){

                    $class3="";


                    if( isset($maindata_ques_2[1]) && $maindata_ques_2[1]->meta_value != ""){
                    $property_type = $maindata_ques_2[1]->meta_value;
                    $property_type = json_decode($property_type);
                    }else{
                    $property_type=[];
                    }




                    if( isset($maindata_ques_2[2]) && $maindata_ques_2[2]->meta_value != ""){
                    $property_value = $maindata_ques_2[2]->meta_value;
                    $property_value = json_decode($property_value);
                    }else{
                    $property_value=[];
                    }
                    
                    if(isset($maindata_ques_2[3]) && $maindata_ques_2[3]->meta_value != ""){
                    $monthly_income = $maindata_ques_2[3]->meta_value;
                    $monthly_income = json_decode($monthly_income);
                    }else{
                    $monthly_income=[];
                    }


                    if(isset($maindata_ques_2[4]) && $maindata_ques_2[4]->meta_value != ""){
                        $mortgage_balance = $maindata_ques_2[4]->meta_value;
                        $mortgage_balance = json_decode($mortgage_balance);
                    }else{
                        $mortgage_balance = [];
                    }

                    if(isset($maindata_ques_2[5]) && $maindata_ques_2[5]->meta_value != ""){
                        $property_value_2 = $maindata_ques_2[5]->meta_value;
                        $property_value_2 = json_decode($property_value_2);
                    }else{
                        $property_value_2 = [];
                    }

                    if(isset($maindata_ques_2[6]) && $maindata_ques_2[6]->meta_value != ""){
                        $bank = $maindata_ques_2[6]->meta_value;
                        $bank = json_decode($bank);
                    }else{
                        $bank = [];
                    }

                    }
                    else{
                    $property_type = [];
                    $property_value = [];
                    $monthly_income = [];
                    $mortgage_balance = [];
                    $property_value_2 = array();
                    $bank=[];

                    $class3="hide_for_now";
                    }

                    @endphp




                        <div class="question-container question-2 @php echo $class2; @endphp ">
                            <form method="POST" id="formQuestionTwo">
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                <div class="table-container table-auto table-nowrap aprt-ownership-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>2.1 Aprt_Status</th>
                                                <th>
                                                    <select name= property_1[] class="selectpicker three_ one_color first_sel" id="selectpicker">
                                                      <option value="Apartment_without_mortgage" <?php if(count($property_type) > 0){ if($property_type[0] == 'Apartment_without_mortgage' ){ echo 'selected="selected"'; } } ?> >No Morg</option>
                                                      <option value="Apartment_with_mortgage" <?php if(count($property_type) > 0){ if($property_type[0] == 'Apartment_with_mortgage' ){ echo 'selected="selected"'; } } ?>>With Morg</option>
                                                    </select>
                                                </th>

                                                <th>
                                                    <select name= property_1[] class="selectpicker three_ one_color sec_sel" id="selectpicker">
                                                      <option value="Apartment_without_mortgage" <?php if(count($property_type) > 1){ if($property_type[1] == 'Apartment_without_mortgage' ){ echo 'selected="selected"'; } } ?> >No Morg</option>
                                                      <option value="Apartment_with_mortgage" <?php if(count($property_type) > 1){ if($property_type[1] == 'Apartment_with_mortgage' ){ echo 'selected="selected"'; } } ?>>With Morg</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select name= property_1[] class="selectpicker three_ one_color thr_sel" id="selectpicker">
                                                      <option value="Apartment_without_mortgage" <?php if(count($property_type) > 2){ if($property_type[2] == 'Apartment_without_mortgage' ){ echo 'selected="selected"'; } } ?> >No Morg</option>
                                                      <option value="Apartment_with_mortgage" <?php if(count($property_type) > 2){ if($property_type[2] == 'Apartment_with_mortgage' ){ echo 'selected="selected"'; } } ?>>With Morg</option>
                                                    </select>
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2.2 Value_Prop</td>
                                                <td>
        										   <input type="text" id="property-value1" class="form-control property_one common_extra_cls" name="property_value[]" value="<?php

                                                    if(count($property_value) > 0){ echo $property_value[0];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
        										</td>
                                                <td>
        										  <input type="text" id="property-value1" class="form-control property_two common_extra_cls" name="property_value[]" value="<?php if(count($property_value) > 1){ echo $property_value[1];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
        										</td>
                                                <td>
        										  <input type="text" id="property-value1" class="form-control property_three common_extra_cls" name="property_value[]" value="<?php if(count($property_value) > 2){ echo $property_value[2];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
        										</td>
                                            </tr>
        									<tr>
                                                <td>2.3 Morg_Left</td>
                                                <td>
        										  <input type="text" id="monthly-income1" class="form-control monthly_one common_extra_cls" name="monthly_income[]" value="<?php if(count($monthly_income) > 0){ echo $monthly_income[0];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"  <?php if(count($property_type) > 0){ if($property_type[0] == 'Apartment_with_mortgage' ){ echo ''; }else{ echo 'readonly="readonly"'; } }else{ echo 'readonly="readonly"'; } ?>/>
        										</td>
                                                <td>
        										<input type="text" id="monthly-income1" class="form-control monthly_two common_extra_cls" name="monthly_income[]" value="<?php if(count($monthly_income) > 1){ echo $monthly_income[1];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"  <?php if(count($property_type) > 1){ if($property_type[1] == 'Apartment_with_mortgage' ){ echo ''; }else{ echo 'readonly="readonly"'; } }else{ echo 'readonly="readonly"'; } ?>/>
        										</td>
                                                <td>
        										<input type="text" id="monthly-income1" class="form-control monthly_three common_extra_cls" name="monthly_income[]" value="<?php if(count($monthly_income) > 2){ echo $monthly_income[2];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"  <?php if(count($property_type) > 2){ if($property_type[2] == 'Apartment_with_mortgage' ){ echo ''; }else{ echo 'readonly="readonly"'; } }else{ echo 'readonly="readonly"'; } ?>/>
        										</td>
                                            </tr>
        									<tr>
                                                <td>2.4 Owner_Value (2.2 - 2.3)</td>
                                                <td>
                                                    @php
                                                    if(count($monthly_income) > 0 && count($property_value) > 0 ){
                                                   
                                                    $prop = $property_value[0];
                                                     $prop = str_replace(",","",$prop);
                                                    $month = $monthly_income[0];
                                                     $month = str_replace(",","",$month);
                                                    $final1 = (int)$prop - (int)$month;
                                                    }else{
                                                    $final1 = "";
                                                    }
                                                    @endphp
        										  <input type="text" class="form-control owner_one owner_common1" value="@php echo$final1; @endphp"  readonly="readonly"/>
        										</td>
                                                <td>
        										@php
                                                    if(count($monthly_income) > 1 && count($property_value) > 1 ){
                                                    $prop = $property_value[1];
                                                     $prop = str_replace(",","",$prop);
                                                    $month = $monthly_income[1];
                                                     $month = str_replace(",","",$month);
                                                    $final1 = (int)$prop - (int)$month;
                                                    }else{
                                                    $final1 = "";
                                                    }
                                                    @endphp
                                                  <input type="text" class="form-control owner_two owner_common2" value="@php echo$final1; @endphp" readonly="readonly" />
        										</td>
                                                <td>
        										@php
                                                    if(count($monthly_income) > 2 && count($property_value) > 2 ){
                                                    $prop = $property_value[2];
                                                     $prop = str_replace(",","",$prop);
                                                    $month = $monthly_income[2];
                                                     $month = str_replace(",","",$month);
                                                    $final1 = (int)$prop - (int)$month;
                                                    }else{
                                                    $final1 = "";
                                                    }
                                                    @endphp
                                                  <input type="text" class="form-control owner_three owner_common3" value="@php echo$final1; @endphp"  readonly="readonly"/>
        										</td>
                                            </tr>
        									<tr>
                                                <td>2.5 Monthly _Morg</td>
                                                <td>
        										  <input type="text" id="mortgage-balance1" class="form-control balance_one common_extra_cls" name="property_val[]" value="<?php if(count($property_value_2) > 0){ echo $property_value_2[0];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);" <?php if(count($property_type) > 0){ if($property_type[0] == 'Apartment_with_mortgage' ){ echo ''; }else{ echo 'readonly="readonly"'; } } else{ echo 'readonly="readonly"'; }?>/>
        										</td>
                                                <td>
        										  <input type="text" id="mortgage-balance1" class="form-control balance_two common_extra_cls" name="property_val[]" value="<?php if(count($property_value_2) > 1){ echo $property_value_2[1];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);" <?php if(count($property_type) > 1){ if($property_type[1] == 'Apartment_with_mortgage' ){ echo ''; }else{ echo 'readonly="readonly"'; } }else{ echo 'readonly="readonly"'; } ?>/>
        										</td>
                                                <td>
        										  <input type="text" id="mortgage-balance1" class="form-control balance_three common_extra_cls" name="property_val[]" value="<?php if(count($property_value_2) > 2){ echo $property_value_2[2];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);" <?php if(count($property_type) > 2){ if($property_type[2] == 'Apartment_with_mortgage' ){ echo ''; }else{ echo 'readonly="readonly"'; } }else{ echo 'readonly="readonly"'; } ?>



                                                  />
        										</td>
                                            </tr>
        									<tr>
                                                <td>2.6 Monthly_Rental_Profit</td>
                                                <td>
        										  <input type="text" id="property-value-2" class="form-control prop_one common_extra_cls" name="mortgage_balance[]" value="<?php if(count($mortgage_balance) > 0){ echo $mortgage_balance[0];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
        										</td>
                                                <td>
        										  <input type="text" id="property-value-2" class="form-control prop_two common_extra_cls" name="mortgage_balance[]" value="<?php if(count($mortgage_balance) > 1){ echo $mortgage_balance[1];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
        										</td>
                                                <td>
        										  <input type="text" id="property-value-2" class="form-control prop_three common_extra_cls" name="mortgage_balance[]" value="<?php if(count($mortgage_balance) > 2){ echo $mortgage_balance[2];  }else{ echo""; } ?>" onkeyup="this.value=addCommas(this.value);"/>
        										</td>
                                            </tr>
        									<tr>
                                                <td>2.7 Which_Bank</td>
                                                <td>
            										 <select name="bank[]" class="aMorTable common_extra_cls_sel" id="second_sel_one">

                                                        <option data-att="Mizrahi-Tefahot Bank" >No Info</option>


                                                        <option data-att="Mizrahi-Tefahot Bank" value="Mizrahi_Tefahot_Bank" <?php if(count($bank) > 0){ if($bank[0] == 'Mizrahi_Tefahot_Bank' ){ echo 'selected="selected"'; } } ?> >בנק מזרחי-טפחות
                                                        </option>

                                                        <option data-att="Discount Bank" value="discount_bank" <?php if(count($bank) > 0){ if($bank[0] == 'discount_bank' ){ echo 'selected="selected"'; } } ?>>בנק דיסקונט</option>

                                                        <option data-att="Union Bank" value="union_bank" <?php if(count($bank) > 0){ if($bank[0] == 'union_bank' ){ echo 'selected="selected"'; } } ?>>בנק איגוד
                                                        </option>

                                                        <option data-att="Bank Hapoalim" value="bank_hapoalim" <?php if(count($bank) > 0){ if($bank[0] == 'bank_hapoalim' ){ echo 'selected="selected"'; } } ?>>בנק הפועלים</option>

                                                        <option data-att="National Bank" value="national_bank" <?php if(count($bank) > 0){ if($bank[0] == 'national_bank' ){ echo 'selected="selected"'; } } ?>>בנק לאומי
                                                        </option>

                                                        <option data-att="Bank Ozar hahial" value="bank_ozar_hahial" <?php if(count($bank) > 0){ if($bank[0] == 'bank_ozar_hahial' ){ echo 'selected="selected"'; } } ?>>בנק אוצר החייל
                                                        </option>

                                                        <option data-att="Bank of Jerusalem" value="bank_of_jerusalem" <?php if(count($bank) > 0){ if($bank[0] == 'bank_of_jerusalem' ){ echo 'selected="selected"'; } } ?>>בנק ירושלים
                                                        </option>

                                                        <option data-att="The international Bank" value="the_international_bank" <?php if(count($bank) > 0){ if($bank[0] == 'the_international_bank' ){ echo 'selected="selected"'; } } ?>>הבנק הבינלאומי
                                                        </option>

                                                        <option data-att="Another bank" value="another_bank" <?php if(count($bank) > 0){ if($bank[0] == 'another_bank' ){ echo 'selected="selected"'; } } ?>>בנק אחר
                                                        </option>
                                                    </select>
        										</td>
                                                <td>
            										 <select name="bank[]" class="aMorTable common_extra_cls_sel" id="second_sel_second">

                                                        <option data-att="Mizrahi-Tefahot Bank" >No Info</option>

                                                         <option data-att="Mizrahi-Tefahot Bank" value="Mizrahi_Tefahot_Bank" <?php if(count($bank) > 1){ if($bank[1] == 'Mizrahi_Tefahot_Bank' ){ echo 'selected="selected"'; } } ?> >בנק מזרחי-טפחות
                                                        </option>

                                                        <option data-att="Discount Bank" value="discount_bank" <?php if(count($bank) > 1){ if($bank[1] == 'discount_bank' ){ echo 'selected="selected"'; } } ?>>בנק דיסקונט</option>

                                                        <option data-att="Union Bank" value="union_bank" <?php if(count($bank) > 1){ if($bank[1] == 'union_bank' ){ echo 'selected="selected"'; } } ?>>בנק איגוד
                                                        </option>

                                                        <option data-att="Bank Hapoalim" value="bank_hapoalim" <?php if(count($bank) > 1){ if($bank[1] == 'bank_hapoalim' ){ echo 'selected="selected"'; } } ?>>בנק הפועלים</option>

                                                        <option data-att="National Bank" value="national_bank" <?php if(count($bank) > 1){ if($bank[1] == 'national_bank' ){ echo 'selected="selected"'; } } ?>>בנק לאומי
                                                        </option>

                                                        <option data-att="Bank Ozar hahial" value="bank_ozar_hahial" <?php if(count($bank) > 1){ if($bank[1] == 'bank_ozar_hahial' ){ echo 'selected="selected"'; } } ?>>בנק אוצר החייל
                                                        </option>

                                                        <option data-att="Bank of Jerusalem" value="bank_of_jerusalem" <?php if(count($bank) > 1){ if($bank[1] == 'bank_of_jerusalem' ){ echo 'selected="selected"'; } } ?>>בנק ירושלים
                                                        </option>

                                                        <option data-att="The international Bank" value="the_international_bank" <?php if(count($bank) > 1){ if($bank[1] == 'the_international_bank' ){ echo 'selected="selected"'; } } ?>>הבנק הבינלאומי
                                                        </option>

                                                        <option data-att="Another bank" value="another_bank" <?php if(count($bank) > 1){ if($bank[1] == 'another_bank' ){ echo 'selected="selected"'; } } ?>>בנק אחר
                                                        </option>
                                                    </select>
        										</td>
        										
        										<td>
            										<select name="bank[]" class="aMorTable common_extra_cls_sel" id="second_sel_third">
                                                        
                                                        <option data-att="Mizrahi-Tefahot Bank" >No Info</option>

                                                        <option data-att="Mizrahi-Tefahot Bank" value="Mizrahi_Tefahot_Bank" <?php if(count($bank) > 2){ if($bank[2] == 'Mizrahi_Tefahot_Bank' ){ echo 'selected="selected"'; } } ?> >בנק מזרחי-טפחות
                                                        </option>

                                                        <option data-att="Discount Bank" value="discount_bank" <?php if(count($bank) > 2){ if($bank[2] == 'discount_bank' ){ echo 'selected="selected"'; } } ?>>בנק דיסקונט</option>

                                                        <option data-att="Union Bank" value="union_bank" <?php if(count($bank) > 2){ if($bank[2] == 'union_bank' ){ echo 'selected="selected"'; } } ?>>בנק איגוד
                                                        </option>

                                                        <option data-att="Bank Hapoalim" value="bank_hapoalim" <?php if(count($bank) > 2){ if($bank[2] == 'bank_hapoalim' ){ echo 'selected="selected"'; } } ?>>בנק הפועלים</option>

                                                        <option data-att="National Bank" value="national_bank" <?php if(count($bank) > 2){ if($bank[2] == 'national_bank' ){ echo 'selected="selected"'; } } ?>>בנק לאומי
                                                        </option>

                                                        <option data-att="Bank Ozar hahial" value="bank_ozar_hahial" <?php if(count($bank) > 2){ if($bank[2] == 'bank_ozar_hahial' ){ echo 'selected="selected"'; } } ?>>בנק אוצר החייל
                                                        </option>

                                                        <option data-att="Bank of Jerusalem" value="bank_of_jerusalem" <?php if(count($bank) > 2){ if($bank[2] == 'bank_of_jerusalem' ){ echo 'selected="selected"'; } } ?>>בנק ירושלים
                                                        </option>

                                                        <option data-att="The international Bank" value="the_international_bank" <?php if(count($bank) > 2){ if($bank[2] == 'the_international_bank' ){ echo 'selected="selected"'; } } ?>>הבנק הבינלאומי
                                                        </option>

                                                        <option data-att="Another bank" value="another_bank" <?php if(count($bank) > 2){ if($bank[2] == 'another_bank' ){ echo 'selected="selected"'; } } ?>>בנק אחר
                                                        </option>
                                                    </select>
        										</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-heading d-f tBoxDesign">
        						    <input type="radio" id="boxOne" class="admin-btn-green" name="que2" value="Yes" <?php if(count($maindata_ques_2)){ if($maindata_ques_2[0]->meta_value == "Yes"){ echo "checked=checked"; } else{ } } ?> >
                                    <label for="boxOne"  class="success-div d-f f-d-c j-c-c">
                                        <span>2 Has_Aprt</span>
                                        <span>2A: No_Morg, 2B: With_Morg</span>
                                    </label>
        							<input type="radio" id="boxTwo" class="admin-btn-red" name="que2" value="No" <?php if(count($maindata_ques_2)){ if($maindata_ques_2[0]->meta_value == "No"){ echo "checked=checked"; } else{ } } ?> >
                                    <label for="boxTwo" class="alert-div d-f a-i-c">
                                        <span>2C Don’t_Has_Aprt</span>
                                    </label>
                                </div>
                                {{ csrf_field() }}

                                <div class="form-submittion"><input type="submit" name="twoForm" value="Save" class="twoForm"></div>
                            </form>
                        </div>
                    

                    <div class="owner-monthly-container question-3">
                        <ul>
                            <li>
                                <div class="form-group d-f f-d-c a-i-c">
                                    <span>2.8 Max Owner_Value</span>
                                    <label>Max (2.4)</label>
                                    <div class="ques_two_1 hide_for_now">
                                        <input type="text" class="form-control" id="max_owner_value" name="max_owner_value" value="0" readonly="readonly"/>
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group d-f f-d-c a-i-c">
                                    <span>2.9 Total Monthly_Pay</span>
                                    <label>(Sum 1.5 + Sum 2.5 - Sum 2.6)</label>
                                    <div class="ques_two_2 hide_for_now">
                                        <input type="text" class="form-control" id="total_monthly_pay" name="total_monthly_pay"  value="0" readonly="readonly"/>
                                        <i class="fa fa-arrow-right"></i>
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <!--QUESTION NUMBER THREE  -->



                    <div class="question-container question-3-7">
                        <div class="table-container table-auto table-nowrap aprt-ownership-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">General Info <i class="fa fa-question-circle" style="float: right;"></i></th>
                                    </tr>
                                </thead>
                                <tbody>

                                @php
                                if(isset($maindata_ques_3) && isset($maindata_ques_3[0])){
                                    $gender = $maindata_ques_3[0]->meta_value;
                                    $class4="";
                                }else{
                                    $gender = "";
                                    $class4="hide_for_now";  
                                }

                                @endphp


                                <form method="post" id="formQuestionThree">
                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                    <tr>
                                        <td>3. Geneder</td>
                                        <td>
                                            <div class="ques_three @php echo $class3; @endphp">
        										<select name="gender" class="gender">
        										  <option value="Male" @if($gender == 'Male') selected='selected' @else @endif>Male</option>
        										  <option value="Female" @if($gender == 'Female') selected='selected' @else @endif>Female</option>
        										</select>
                                           </div>
										</td>
                                    </tr>
                                    {{ csrf_field() }}
                                </form>

                                    
                                @php
                                    if(isset($maindata_ques_4)  && isset($maindata_ques_4[0])){
                                        $family_income = $maindata_ques_4[0]->meta_value;
                                        $class5="";
                                    }else{
                                        $family_income = "";
                                        $class5="hide_for_now";
                                    }
                                @endphp
                                <form method="post" id="formQuestionFour">
                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                    <tr>
                                        <td>4. Family_Income</td>
                                        <td>
                                            <div class="ques_4 @php echo $class4; @endphp">
                                                <input type="text" id="net_income" class="form-control reg-four-question" name="net_income" value="@if(!empty($family_income)) @php echo $family_income; @endphp @else @endif"  onkeyup="this.value=addCommas(this.value);">
                                            </div>
                                        </td>
                                    </tr>
                                     {{ csrf_field() }}
                                </form>



                                @php
                                    if(isset($maindata_ques_5)  && isset($maindata_ques_5[1])){
                                        $stable_statuss = $maindata_ques_5[1]->meta_value;
                                        $fee = $maindata_ques_5[0]->meta_value;
                                        $class6 = "";
                                    }else{
                                        $stable_statuss = "";
                                        $fee = "";
                                        $class6 = "hide_for_now";
                                    }
                                @endphp
                                <form method="post" class="form-inline average-savings" id="formQuestionFivePointOne">   
                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                    <input type="hidden" name="stable_status_fee" value="0">
                                    <tr>
                                        <td>5.1 Stable</td>
    									<td>
                                            <div class="ques_5 @php echo $class5; @endphp">
                                                <select name="stable_statuss" class="stable_statuss">
            									  <option value="yes" @if(!empty($stable_statuss) && $stable_statuss == "yes" ) selected="selected"  @else @endif>Yes</option>
            									  <option value="no" @if(!empty($stable_statuss) && $stable_statuss == "no" ) selected="selected"  @else @endif>No</option>
            									</select>
                                            </div>
    									</td>
                                    </tr>
                                    {{ csrf_field() }}
                                </form>

                                <form method="post" id="formQuestionFive" class="form-inline average-savings"> 
                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                    <input type="hidden" name="stable_statuss" value="no">
                                    <tr>
                                        <td>
                                            <span class="data-multiple">5.2 Can_Save_Money</span>
                                            <span class="data-multiple">If 5.1 Yes:0, If No:value above 1000</span>
                                        </td>
                                        <td>
    									  <input type="text" id="average-savings" class="form-control" data-att="Our economic situation is not stable" name="stable_status_fee" value="@if(!empty($fee)) @php echo $fee; @endphp @endif" data-placeholder="value" onkeyup="this.value=addCommas(this.value);"/>
    									</td>
                                    </tr>
                                    {{ csrf_field() }}
                                </form>





                                @php
                                    if(isset($maindata_ques_6) && isset($maindata_ques_6[0])){
                                        $bank_account = $maindata_ques_6[0]->meta_value;
                                        $bank_account = json_decode($bank_account);
                                        $class7 = ""; 
                                    }else{
                                        $bank_account = ['asdrrr'];
                                        $class7 ="hide_for_now";
                                    }
                                @endphp

                                <form method="post" id="formQuestionSix">
                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                    <tr>
                                        <td>6. Bank_Account</td>
                                        <td class="anoop-kre-ga-kaam">
									
                                        <div class="ques_6 @php echo $class6; @endphp">
                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="East" id="sixone" @php if (in_array("East", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="AA">
                                                <label for="sixone">AA</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="Discount" id="six1" @php if (in_array("Discount", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="BB">
                                                <label for="six1">BB</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="Association" id="six2" @php if (in_array("Association", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="CC">
                                                <label for="six2">CC</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="Workers" id="six3" @php if (in_array("Workers", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="DD">
                                                <label for="six3">DD</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="National" id="six4" @php if (in_array("National", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id=EE>
                                                <label for="six4">EE</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="Treasure" id="six5" @php if (in_array("Treasure", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="FF">
                                                <label for="six5">FF</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="Jeruselam" id="six6" @php if (in_array("Jeruselam", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="GG">
                                                <label for="six6">GG</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="International" id="six7" @php if (in_array("International", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id=HH>
                                                <label for="six7">HH</label>
                                            </div>

                                            <div class="bank-name-six">
                                                <input type="checkbox" name="bank_account[]" class="bank_account" value="Other" id="six8" @php if (in_array("Other", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="Other">
                                                <label for="six8">Other</label>
                                            </div>
                                        </div>



										</td>
                                    </tr>
                                    {{ csrf_field() }}
                                </form>

                                @php
                                    if(isset($maindata_ques_7) && isset($maindata_ques_7[0])){
                                        $bank_account_val = $maindata_ques_7[0]->meta_value;
                                        $age_val = $maindata_ques_7[1]->meta_value;
                                         
                                    }else{
                                        $bank_account_val = "";
                                        $age_val = "";
                                    }
                                @endphp


                                <form method="post" id="formQuestionSeven">
                                     <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                    <tr>
                                        <td>7. Move_Bank</td>
										<td>
                                            <div class="ques_7 @php echo $class7; @endphp">
                                                <select name="move_bank" class="move_bank">
        										  <option value="Yes" @if($bank_account_val == "Yes") selected="selected" @else @endif>Yes</option>
        										  <option value="No" @if($bank_account_val == "No") selected="selected" @else @endif>No</option>
        										</select>
                                            </div>
        								</td>
                                    </tr>
                                    <tr>
                                        <td>7.1 Oldest age of loan holder? </td>
										<td>
                                            <div class="ques_7_1 @php echo $class7; @endphp">
                                                <input type="text" data-placeholder="18 - 120" name="age_loan_holder" class="age_loan_holder" value="@if(!empty($bank_account_val)) @php echo $age_val; @endphp @else @endif"> 
                                            </div>
                                            </td>
                                    </tr>
                                    {{ csrf_field() }}
                                </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





            <!-- ************************************************************************************ -->

                                            <!-- SECTION SECOND STARTED-->
            
            <!--  ***********************************************************************************-->

                <div class="question-container question-8-11 d-f">
                    <div class="question-8-11-left">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Q8-11 Define Needs</a>
                        <h2>Q8 Mortgage Cause</h2>

                        <!--- ********************** QUESTION - 8 *********************-->



                        <div class="mortgage-cause d-f j-c-s-b">
                            <div class="m-c-heading">
                                Q8 Mortgage Cause
                            </div>

                            @php

                                if(isset($maindata_ques_8) && isset($maindata_ques_8[0])){
                                    $ques8 = $maindata_ques_8[0]->meta_value;
                                }else{
                                    $ques8 = "";
                                }

                            @endphp



                            <form method="post" class="d-f j-c-s-b" id="formQuestionEight">
                                <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                <div class="m-c-1">
                                    <ul>
                                        <li>
                                            <span>8.1 New_Aprt</span>
                                            <span>
    										 <div class="inputYesNo">
    										     <input type="radio" id="fieldFive" name="why_mortgage" value="new_aprt" <?php if($ques8 == "new_aprt"){ echo "checked"; } else{ } ?> >
    											 <label for="fieldFive">
    											   <div class="selectedNo">X</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</span>
                                        </li>
                                        <li>
                                            <span>8.2 Second_Hand_Aprt</span>
                                            <span>
    										 <div class="inputYesNo">
    										     <input type="radio" id="fieldSix" name="why_mortgage" value="second_hand_aprt"  <?php if($ques8 == "second_hand_aprt"){ echo "checked"; } else{ } ?>>
    											 <label for="fieldSix">
    											   <div class="selectedNo">X</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</span>
                                        </li>
                                        <li>
                                            <span>8.3 Construction</span>
                                            <span>
    										 <div class="inputYesNo">
    										     <input type="radio" id="fieldSeven" name="why_mortgage" value="construction"  <?php if($ques8 == "construction"){ echo "checked"; } else{ } ?>>
    											 <label for="fieldSeven">
    											   <div class="selectedNo">X</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="m-c-2">
                                    <ul>
                                        <li>
                                            <span>8.4 Mishtaken_Program</span>
                                            <span>
    										 <div class="inputYesNo">
    										     <input type="radio" id="fieldEight" name="why_mortgage" value="mistaken_program"  <?php if($ques8 == "mistaken_program"){ echo "checked"; } else{ } ?>>
    											 <label for="fieldEight">
    											   <div class="selectedNo">X</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</span>
                                        </li>
                                    </ul>
                                    <div class="condition-div d-f f-d-c">
                                        <span>If chose 8.4 Mishtaken_Program</span>
                                        <span>Skip Q9: </span>
                                        <span>Q9.3 first_aprt -> YES</span>
                                    </div>
                                </div>
                                <div class="m-c-3">
                                    <ul>
                                        <li>
                                            <span>8.5 Any_Cause</span>
                                            <span>
    										 <div class="inputYesNo">
    										     <input type="radio" id="fieldNine" name="why_mortgage" value="any_cause"  <?php if($ques8 == "any_cause"){ echo "checked"; } else{ } ?>>
    											 <label for="fieldNine">
    											   <div class="selectedNo">X</div>
    											   <div class="selectedYes">Yes</div>
    											 </label>
    										  </div>
    										</span>
                                        </li>
                                    </ul>
                                    <div class="condition-div c-d-2 d-f f-d-c">
                                        <span>If chose 8.5 Any_Cause</span>
                                        <span>Skip Q9 + Q10:</span>
                                        <span>Q9 -  All Should be X</span>
                                        <span>Q10.1 Enter_month = 0</span>
                                        <span>Q10.2 Req_Grace = 0</span>
                                    </div>
                                </div>
                                 {{ csrf_field() }}
                            </form>



                            <!--- ********************** QUESTION - 9 *********************-->

                            <div class="question-9-11 d-f f-d-c">
                                <div class="m-c-4 no-margin">
                                    <h2>Q9 Person Type</h2>
                                    <div class="m-c-heading">
                                        Q9 Person Type
                                    </div>
                                    @php

                                        if(isset($maindata_ques_9) && isset($maindata_ques_9[0])){
                                            $ques9 = $maindata_ques_9[0]->meta_value;
                                        }else{
                                            $ques9 = "";
                                        }

                                    @endphp
                                    <form method="post" id="formQuestionNine">
                                        <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                        <ul>
                                            <li>
                                                <span>9.1 Investor</span>
                                                <span>
    											  <div class="inputYesNo">
    												 <input type="radio" id="fieldTen" name="status_of_mortgage" class="status_of_mortgage read_only_nine" value="investor" <?php if($ques9 == "investor"){ echo "checked"; } else{ } ?>>
    												 <label for="fieldTen">
    												   <div class="selectedNo">X</div>
    												   <div class="selectedYes">Yes</div>
    												 </label>
    											   </div>
    										    </span>
                                            </li>
                                            <li>
                                                <span>9.2 Asset_Improver</span>
                                                <span>
    											  <div class="inputYesNo">
    												 <input type="radio" id="fieldEleven" name="status_of_mortgage" class="status_of_mortgage read_only_nine" value="asset_improver" <?php if($ques9 == "asset_improver"){ echo "checked"; } else{ } ?>>
    												 <label for="fieldEleven">
    												   <div class="selectedNo">X</div>
    												   <div class="selectedYes">Yes</div>
    												 </label>
    											   </div>
    										    </span>
                                            </li>
                                            <li>
                                                <span>9.3 First_Aprt</span>
                                                <span>
    											  <div class="inputYesNo">
    												 <input type="radio" id="fieldTwelve" name="status_of_mortgage" class="status_of_mortgage read_only_nine first_aprt" value="first_aprt" <?php if($ques9 == "first_aprt"){ echo "checked"; } else{ } ?>>
    												 <label for="fieldTwelve">
    												   <div class="selectedNo">X</div>
    												   <div class="selectedYes">Yes</div>
    												 </label>
    											   </div>
    										    </span>
                                            </li>
                                        </ul>
                                        {{ csrf_field() }}
                                    </form>
                                </div>

                                 <!--- ********************** QUESTION - 10 *********************-->

                                <div class="offer-tabs grace ">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#grace" aria-controls="customer-offers" role="tab" data-toggle="tab">Q10 Grace</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="grace">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q10 Grace - </h2>
                                                        <span>For Q8.1, Q8.2, Q8.3, Q8.4 - Month to enter Apartment</span>
                                                    </div>
                                                </div>
                                                @php
                                                if(isset($maindata_ques_10) && isset($maindata_ques_10[0]) && isset($maindata_ques_10[1])){
                                                    $ques10 = $maindata_ques_10[0]->meta_value;
                                                    $ques10_1 = $maindata_ques_10[1]->meta_value;
                                                    }elseif(isset($maindata_ques_10) && isset($maindata_ques_10[0])){
                                                        $ques10 = $maindata_ques_10[0]->meta_value;
                                                        $ques10_1 ="";
                                                    }else{
                                                        $ques10 = "";
                                                        $ques10_1 ="";
                                                    }

                                                @endphp
                                                <form method="post" id="formQuestionTen_option1">
                                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                                    <div class="col-md-6">
                                                        <div class="a-month-return">
                                                            <div class="col-2">
                                                                <span>10.1 Enter_Month <br>(0 or 3-36)</span> Grace Period
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                   <!--  <input type="text" class="form-control grace read_only_ten" id="month" name="grace" value="<?php if($ques10 != ""){ echo $ques10 ; } else{ } ?>" />  -->


                                                                    <select name="grace" class="form-control graces read_only_ten" id="grace">

                                                                        <?php
                                                                            $u = 0;
                                                                            $varu = (($ques10==$u) && ($ques10 !=''))?'selected':'';
                                                                            echo '<option value="'.$u.'"'.' '.$varu.'>'.$u.'</option>';

                                                                            for($i=3; $i<=36; $i++){
                                                                                $var = (($ques10==$i) && ($ques10 !=''))?'selected':'';
                                                                                echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="a-month-return">
                                                            <div class="col-2">
                                                                <span>10.2 Req_Grace</span> If Chose 5.1-YES: [12.1 req_PMT]
                                                                <br/><div class="item-1-1">If Chose 5.1-NO: [12.1 req_PMT - 5.2 Can_Save_Money]</div>
                                                            </div>
                                                            <div class="col-2">
                                                                <input type="text" class="form-control req_grace read_only_ten" id="req-grace" name="req_grace" value="<?php if($ques10_1 != ""){ echo $ques10_1 ; } else{ } ?>" /> </div>
                                                        </div>
                                                    </div>

                                                    {{ csrf_field() }}
                                                </form>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offer-tabs property-evaluation">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#property-evaluation" aria-controls="customer-offers" role="tab" data-toggle="tab">Q11 property Evaluation</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="property-evaluation">
                                            <div class="row">


                                                 <!--- ********************** QUESTION - 11-a *********************-->
                                                 
                                                @php
                                                if(isset($maindata_ques_11) && isset($maindata_ques_11[1])){
                                                    $ques11_1 = $maindata_ques_11[1]->meta_value;
                                                    }else{
                                                        $ques11_1 = "";
                                                        
                                                    }

                                                    if(isset($maindata_ques_11) && isset($maindata_ques_11[0])){
                                                    $ques11 = $maindata_ques_11[0]->meta_value;
                                                    }else{
                                                        $ques11 = "";
                                                        
                                                    }

                                                    if(isset($maindata_ques_11) && isset($maindata_ques_11[2])){
                                                    $mortgage_fee = $maindata_ques_11[2]->meta_value;
                                                    }else{
                                                        $mortgage_fee = "";
                                                        
                                                    }

                                                    if(isset($maindata_ques_11) && isset($maindata_ques_11[3])){
                                                    $mortgage_ratio = $maindata_ques_11[3]->meta_value;
                                                    }else{
                                                        $mortgage_ratio = "";
                                                        
                                                    }

                                                @endphp


                                                <div class="col-md-4">
                                                    <form class="" method="post" id="formQuestionEleven_One">
                                                        <input type="hidden" name="user_id" class="eleven_user_id" value="<?php echo$user_id; ?>">
                                                        <div class="tab-inner-heading">
                                                            <h2>Q11A - </h2>
                                                            <span>For Q8.1, Q8.2, Q8.3</span>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.1 Property_Value</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control property_value eleven_one" id="property-value" name="property_value" onkeyup="this.value=addCommas(this.value);" value="<?php if($ques11 != ""){ echo $ques11 ; } else{ } ?>" /> </div>
                                                            </div>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.2 Self_funding</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control self_funding eleven_one" id="self-funding" name="self_funding" onkeyup="this.value=addCommas(this.value);" value="<?php if($ques11_1 != ""){ echo $ques11_1 ; } else{ } ?>" />  </div>
                                                            </div>
                                                        </div>
                                                        {{ csrf_field() }}
                                                        <div class="form-submittion"><input type="submit" name="elevenForm" value="Save" class="elevenForm"></div>
                                                    </form>
                                                </div>
                                               

                                             <!--- ********************** QUESTION - 11-b *********************-->
                                                @php

                                                    if(isset($maindata_ques_11_2) && isset($maindata_ques_11_2[1])){
                                                        $ques11_2_1 = $maindata_ques_11_2[1]->meta_value;
                                                    }else{
                                                        $ques11_2_1 = "";   
                                                    }

                                                    if(isset($maindata_ques_11_2) && isset($maindata_ques_11_2[0])){
                                                        $ques11_2 = $maindata_ques_11_2[0]->meta_value;
                                                    }else{
                                                        $ques11_2 = "";
                                                    }

                                                    if(isset($maindata_ques_11_2) && isset($maindata_ques_11_2[2])){
                                                        $mortgage_fee = $maindata_ques_11_2[2]->meta_value;
                                                    }else{
                                                        $mortgage_fee = "";
                                                    }


                                                    if(isset($maindata_ques_11) && isset($maindata_ques_11[3])){
                                                    $mortgage_ratio = $maindata_ques_11[3]->meta_value;
                                                    }else{
                                                        $mortgage_ratio = "";
                                                        
                                                    }



                                                @endphp
                                            
                                                <div class="col-md-4">
                                                     <form class="" method="post" id="formQuestionEleven_Two">
                                                        <input type="hidden" name="user_id" class="eleven_user_id" value="<?php echo$user_id; ?>">
                                                        <div class="tab-inner-heading">
                                                            <h2>Q11B - </h2>
                                                            <span>For Q8.4 Mishtaken_program</span>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.1 Property_Value</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control property_value_1 eleven_two" id="property-value-1" name="property_value_1" value="<?php if($ques11_2 != ""){ echo $ques11_2 ; } else{ } ?>" onkeyup="this.value=addCommas(this.value);"   /> </div>
                                                            </div>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.4 Property_Market_Value</span> If above 1.8 M set to 1.8M
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control market_value eleven_two" id="market-value" name="market_value" onkeyup="this.value=addCommas(this.value);"   value="<?php if($ques11_2_1 != ""){ echo $ques11_2_1 ; } else{ } ?>"/> </div>
                                                            </div>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.2 Self_Funding</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control self_funding_1 eleven_two" id="self-funding-1" name="self_funding_1" onkeyup="this.value=addCommas(this.value);"  value="<?php if($mortgage_fee != ""){ echo $mortgage_fee ; } else{ } ?>" /> </div>
                                                            </div>
                                                        </div>
                                                        {{ csrf_field() }}
                                                        <div class="form-submittion"><input type="submit" name="elevenForm" value="Save" class="elevenForm"></div>
                                                        <div class="eleven_errMsg" style="color: red;"></div>
                                                    </form>
                                                </div>
                                                


                                             <!--- ********************** QUESTION -11-c *********************-->
                                                @php

                                                    if(isset($maindata_ques_11_3) && isset($maindata_ques_11_3[1])){
                                                        $ques11_3_1 = $maindata_ques_11_3[1]->meta_value;
                                                    }else{
                                                        $ques11_3_1 = "";   
                                                    }

                                                    if(isset($maindata_ques_11_3) && isset($maindata_ques_11_3[0])){
                                                        $ques11_3 = $maindata_ques_11_3[0]->meta_value;
                                                    }else{
                                                        $ques11_3 = "";
                                                    }



                                                    if(isset($maindata_ques_11_3) && isset($maindata_ques_11_3[2])){
                                                        $mortgage_fee = $maindata_ques_11_3[2]->meta_value;
                                                    }else{
                                                        $mortgage_fee = "";
                                                    }


                                                    if(isset($maindata_ques_11_3) && isset($maindata_ques_11_3[3])){
                                                    $mortgage_ratio = $maindata_ques_11_3[3]->meta_value;
                                                    }else{
                                                        $mortgage_ratio = "";
                                                        
                                                    }

                                                @endphp
                                                <div class="col-md-4">
                                                    <form class="form-inline multiple-dropdown chat-equity-cost d-f " method="post" id="formQuestionThirteen">
                                                        <input type="hidden" name="user_id" class="eleven_user_id" value="<?php echo$user_id; ?>">
                                                        <div class="tab-inner-heading">
                                                            <h2>Q11C - </h2>
                                                            <span>For Q8.5 Any_cause</span>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.1 Property_Value</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control property_value_2 eleven_three" id="property-value-2" name="property_value_2" onkeyup="this.value=addCommas(this.value);" value="<?php if($ques11_3 != ""){ echo $ques11_3 ; } else{ } ?>" /> </div>
                                                            </div>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>11.3 Mortgage_Fee</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control mortgage_fee eleven_three" id="mortgage-fee" name="mortgage_fee" onkeyup="this.value=addCommas(this.value);" value="<?php if($ques11_3_1 != ""){ echo $ques11_3_1 ; } else{ } ?>" /> </div>
                                                            </div>
                                                        </div>
                                                        {{ csrf_field() }}
                                                         <div class="form-submittion"><input type="submit" name="elevenForm" value="Save" class="elevenForm"></div>
                                                    </form>
                                                </div>
                                                




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-8-11-right">


                        <div class="bank-customer-discount" id="bank_customer_discount">

                            <h3>Discount (For The Bank Customers) %</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" value="@php echo $discount_fun; @endphp" />
                                <span class="indicator i-@php echo $class_colour; @endphp">1</span>
                            </div>
                            <ul>
                                
                                   <li><span class="text-green">Green</span> - Enabled & have bank match ( Bank By Algo = Q6 )</li>
                                    <li><span class="text-grey">Grey</span> - Enabled & don’t have bank match.</li><li><span class="text-red">Red</span> - Disabled on bank interest tables.</li>
                            </ul>

                        </div>



                    </div>
                </div>




            <!-- ************************************************************************************-->

                                            <!-- SECTION THIRD STARTED-->
            
            <!--  ***********************************************************************************-->


                <div class="question-container">
                    <div class="question-12-16 d-f f-d-c ">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered" style="margin-top: 20px;">Q12-Q16 Finance Info</a>
                        <div class="table-container table-auto finance-info-table">
                            <table class="ques12-class">
                                <thead>
                                    <tr>
                                        <th colspan="28">Nper-Pmt Table <i style="float:right;" class="fa fa-question-circle"></i></th>
                                    </tr>
                                </thead>
                                <tbody class="required_pmt_table_data">
                                    <tr class="required_pmt_table_data_tr_one">

                                    </tr>
                                    <tr class="required_pmt_table_data_tr_two">
                                        
                                    </tr>
                                    <tr class="required_pmt_table_data_tr_three">
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="offer-tabs monthly-return ">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#monthly-return" aria-controls="monthly-return" role="tab" data-toggle="tab">Monthly Return (MR)</a></li>
                                    </ul>

                                    <!-- ****************************QUESTION 12*************************** -->
                                     @php

                                        if(isset($maindata_ques_12) && isset($maindata_ques_12[1])){
                                            $ques12_1 = $maindata_ques_12[1]->meta_value;
                                        }else{
                                            $ques12_1 = "";   
                                        }

                                        if(isset($maindata_ques_12) && isset($maindata_ques_12[0])){
                                            $ques12 = $maindata_ques_12[0]->meta_value;
                                        }else{
                                            $ques12 = "";
                                        }

                                    @endphp

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="monthly-return">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q12 Monthly Return</h2>
                                                    </div>
                                                </div>
                                                
                                                <form class="form-inline range-form " method="post" id="formQuestionfourteen" >
                                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                                    <div class="col-md-6">
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>12.1 Req_PMT (Wanted MR)</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-group">
                                                                    <input type="text" id="wanted-mr" name="monthly_refund_input_slide" class="monthly_refund_input_slide form-control" onkeyup="this.value=addCommas(this.value);" value="<?php if($ques12 != ""){ echo $ques12 ; } else{ } ?>"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>12.3 Expenses to Income Ratio</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <input type="text" class="form-control" id="income-ratio" name="income-ratio" readonly="readonly" data-placeholder="0-39%"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="a-month-return d-f a-i-c">
                                                            <div class="col-2">
                                                                <span>12.2 Req_NPER (Wanted Years)</span> If ( 80 age - 12.2 &#60; 7.1) <br/>Give blue message
                                                            </div>
                                                            <div class="col-2">
                                                                <input type="text" id="wanted-years" name="monthly_refund_input" class="monthly_refund_input form-control" data-placeholder="4-30" onkeyup="this.value=addCommas(this.value);"   value="<?php if($ques12_1 != ""){ echo $ques12_1 ; } else{ } ?>"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{ csrf_field() }}
                                                </form>

                                                <div class="col-md-6">
                                                    <div class="monthly-return-question">
                                                        <i class="fa fa-question-circle"></i>If chose Yes: continue to next question
                                                        <br/> If Chose No: slider years must be [12.2 + 7.1] &#60;= 80 years </div>
                                                </div>
                                                <div class="col-md-12" style="margin-top: 10px;">
                                                    12.3 Income Ratio: If above 39% this is red, Below or equal green. Calc: [ ( 12.1 Req_PMT + 2.9 )/4 Family_Income ]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                @php
                                 if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[2])){
                                    $mortgage_fee = $maindata_ques_11_extra[2]->meta_value;
                                    }else{
                                        $mortgage_fee = "";
                                    }


                                    if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[3])){
                                    $mortgage_ratio = $maindata_ques_11_extra[3]->meta_value;
                                    }else{
                                        $mortgage_ratio = "";
                                        
                                    }
                                @endphp


                                <div class="offer-tabs mortgage-morg">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#mortgage-morg" aria-controls="mortgage-morg" role="tab" data-toggle="tab">Mortgage (Morg)</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="mortgage-morg">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Req_Mortgage</h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="req-mortgage-text">
                                                        <p><span>Q11A + Q11B:</span> Calc Mortgage by 11.1 -11.2</p>
                                                        <p><span>Q11C:</span> Value From registration 11.3</p>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.3 Mortgage_Fee</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="mortgage-fee-1" name="mortgage-fee-1" readonly="readonly"  value="<?php if($mortgage_fee != ""){ echo $mortgage_fee ; } else{ } ?>"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="req-table-ratio">
                                                        <div class="form-group">
                                                            <label><span>11.5:</span> Regulation Table (%)</label>
                                                            <div class="r-t-r-input-container d-f a-i-c">
                                                                <input type="text" readonly="readonly" class="form-control" id="regulation-table-percent" name="regulation-table-percent" data-placeholder="50 / 70 / 75%">
                                                                <span>See Regulation_Table for Calc</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><span>11.4:</span> Morg_Ratio (%)</label>
                                                            <div class="r-t-r-input-container d-f a-i-c">
                                                                <input type="text" readonly="readonly" class="form-control" id="morg-ratio" name="morg-ratio" data-placeholder="1-100%" value="<?php if($mortgage_ratio != ""){ echo $mortgage_ratio ; } else{ } ?>">
                                                                <span>Q11A + Q11C: Calc 11.3/11.1 <br/>
                                                                            Q11B: 11.3/11.4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="offer-tabs investments">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#investments" aria-controls="investments" role="tab" data-toggle="tab">Invest</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="investments">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q13 Investments</h2>
                                                    </div>
                                                </div>
                                                



                            <!-- ****************************QUESTION 13********************************** -->

                                        @php

                                            if(isset($maindata_ques_13) && isset($maindata_ques_13[0])){
                                                $ques13 = $maindata_ques_13[0]->meta_value;

                                            }else{
                                                $ques13 = "";
                                            }

                                            if(isset($maindata_ques_13) && isset($maindata_ques_13[1])){
                                                $ques13_1 = $maindata_ques_13[1]->meta_value;
                                                $ques13_1 = json_decode($ques13_1);
                                                
                                                if(isset($ques13_1[0])){
                                                    $ques13_1_1 = $ques13_1[0];
                                                }else{
                                                    $ques13_1_1 ="";
                                                }

                                                if(isset($ques13_1[1])){
                                                    $ques13_1_2 = $ques13_1[1];
                                                }else{
                                                    $ques13_1_2 ="";
                                                }

                                                if(isset($ques13_1[2])){
                                                    $ques13_1_3 = $ques13_1[2];
                                                }else{
                                                    $ques13_1_3 ="";
                                                }

                                            }else{
                                                $ques13_1 = "";
                                                $ques13_1_1 ="";
                                                $ques13_1_2 ="";
                                                $ques13_1_3 ="";
                                            }

                                            if(isset($maindata_ques_13) && isset($maindata_ques_13[3])){
                                                $ques13_2 = $maindata_ques_13[3]->meta_value;
                                                $ques13_2 = json_decode($ques13_2);


                                                if(isset($ques13_2[0])){
                                                    $ques13_2_1 = $ques13_2[0];
                                                }else{
                                                    $ques13_2_1 ="";
                                                }

                                                if(isset($ques13_2[1])){
                                                    $ques13_2_2 = $ques13_2[1];
                                                }else{
                                                    $ques13_2_2 ="";
                                                }

                                                if(isset($ques13_2[2])){
                                                    $ques13_2_3 = $ques13_2[2];
                                                }else{
                                                    $ques13_2_3 ="";
                                                }

                                            }else{
                                                $ques13_2 = "";
                                                $ques13_2_1 ="";

                                                $ques13_2_2 ="";

                                                $ques13_2_3 ="";

                                                
                                            }
                                        @endphp





                                                <form class="A_loan_qa" method="post" id="formQuestionfifteen">
                                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">

                                                    <div class="col-md-8">
                                                        <div class="table-container table-auto table-nowrap investments-table">

                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Q13 Investments</th>
                                                                        <th>Invest 1</th>
                                                                        <th>Invest 2</th>
                                                                        <th>Invest 3 </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>13.3 Invest_Fee</td>
                                                                        <td><input type="text" name="investment_amount[]" data-placeholder="1k - 10m" value="<?php if($ques13_1_1 != ""){ echo $ques13_1_1 ; } else{ } ?>" id="val13_0" onkeyup="this.value=addCommas(this.value);"></td>
                                                                        <td><input type="text" name="investment_amount[]" data-placeholder="1k - 10m" value="<?php if($ques13_1_2 != ""){ echo $ques13_1_2 ; } else{ } ?>" id="val13_1" onkeyup="this.value=addCommas(this.value);"></td>
                                                                        <td><input type="text" name="investment_amount[]" data-placeholder="1k - 10m" value="<?php if($ques13_1_3 != ""){ echo $ques13_1_3 ; } else{ } ?>" id="val13_2" onkeyup="this.value=addCommas(this.value);"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>13.4 Invest_Time</td>
                                                                        <td>



                                                                            <!-- <input type="text" name="repay_another[]" data-placeholder="1-20" value="<?php if($ques13_2_1 != ""){ echo $ques13_2_1 ; } else{ } ?>"> -->

                                                                            <select name="repay_another[]" class="repay_another" id="val13_1_0">
                                                                                <?php
                                                                                    for($i=1; $i<=20; $i++){
                                                                                        $var = (($ques13_2_1==$i) && ($ques13_2_1 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
                                                                        </td>
                                                                        <td>
                                                                            <!-- <input type="text" name="repay_another[]" data-placeholder="1-20" value="<?php if($ques13_2_2 != ""){ echo $ques13_2_2 ; } else{ } ?>"> -->

                                                                             <select name="repay_another[]" class="repay_another" id="val13_1_1">
                                                                                <?php
                                                                                    for($i=1; $i<=20; $i++){
                                                                                        $var = (($ques13_2_2==$i) && ($ques13_2_2 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>

                                                                        </td>
    																	<td>
                                                                       <!--      <input type="text" name="repay_another[]" data-placeholder="1k - 10m" value="<?php if($ques13_2_3 != ""){ echo $ques13_2_3 ; } else{ } ?>">-->

                                                                             <select name="repay_another[]" class="repay_another" id="val13_1_2">
                                                                                <?php
                                                                                    for($i=1; $i<=20; $i++){
                                                                                        $var = (($ques13_2_3==$i) && ($ques13_2_3 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                       
                                                            <div class="form-group">
                                                                
                                                                <input id="has_loan" type="radio" name="ques13" value="Yes" <?php if($ques13 != "" && $ques13 =='Yes'){ echo 'checked=checked'; } else{ } ?> >
                                                                <label for="has_loan"><h1>13.1 Has_Invest</h1><span>Yes</span></label>

                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <input id="no_loan" type="radio" name="ques13" class="admin-btn-red" value="No" <?php if($ques13 != "" && $ques13 =='No'){ echo 'checked=checked'; } else{ } ?>>
                                                                <label for="no_loan"><h1>13.2 No_Invest</h1><span>No</span></label>

                                                            </div>
                                                        
                                                    </div>
                                                    {{ csrf_field() }}
                                                    <div class="form-submittion"><input type="submit" name="twoForm" value="Save" class="thirteenForm"></div>
                                                </form>





                                                <div class="col-md-12">
                                                    <span class="alert">*Sort Invest 1-3 from low to high by years and give investments from low to high </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="offer-tabs A_current_loan current-loans">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#current-loans" aria-controls="current-loans" role="tab" data-toggle="tab">Current Loans</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="current-loans">
                                            <div class="row clearfix">




                 <!-- **********************************QUESTION 14************************************* -->
                   






                                                @php

                                                    if(isset($maindata_ques_14) && isset($maindata_ques_14[0])){
                                                        $ques14 = $maindata_ques_14[0]->meta_value;

                                                    }else{
                                                        $ques14 = "";
                                                    }




                                                    if(isset($maindata_ques_14) && isset($maindata_ques_14[1])){
                                                        $ques14_1 = $maindata_ques_14[1]->meta_value;
                                                        $ques14_1 = json_decode($ques14_1);
                                                        
                                                        if(isset($ques14_1[0])){
                                                            $ques14_1_1 = $ques14_1[0];
                                                        }else{
                                                            $ques14_1_1 ="";
                                                        }

                                                        if(isset($ques14_1[1])){
                                                            $ques14_1_2 = $ques14_1[1];
                                                        }else{
                                                            $ques14_1_2 ="";
                                                        }

                                                        if(isset($ques14_1[2])){
                                                            $ques14_1_3 = $ques14_1[2];
                                                        }else{
                                                            $ques14_1_3 ="";
                                                        }

                                                    }else{
                                                        $ques14_1 = "";
                                                        $ques14_1_1 ="";
                                                        $ques14_1_2 ="";
                                                        $ques14_1_3 ="";
                                                    }

                                                    if(isset($maindata_ques_14) && isset($maindata_ques_14[2])){
                                                        $ques14_2 = $maindata_ques_14[2]->meta_value;
                                                        $ques14_2 = json_decode($ques14_2);


                                                        if(isset($ques14_2[0])){
                                                            $ques14_2_1 = $ques14_2[0];
                                                        }else{
                                                            $ques14_2_1 ="";
                                                        }

                                                        if(isset($ques14_2[1])){
                                                            $ques14_2_2 = $ques14_2[1];
                                                        }else{
                                                            $ques14_2_2 ="";
                                                        }

                                                        if(isset($ques14_2[2])){
                                                            $ques14_2_3 = $ques14_2[2];
                                                        }else{
                                                            $ques14_2_3 ="";
                                                        }

                                                    }else{
                                                        $ques14_2 = "";
                                                        $ques14_2_1 ="";

                                                        $ques14_2_2 ="";

                                                        $ques14_2_3 ="";

                                                        
                                                    }


                                                    if(isset($maindata_ques_14) && isset($maindata_ques_14[3])){
                                                        $ques14_3 = $maindata_ques_14[3]->meta_value;
                                                        $ques14_3 = json_decode($ques14_3);


                                                        if(isset($ques14_2[0])){
                                                            $ques14_3_1 = $ques14_3[0];
                                                        }else{
                                                            $ques14_3_1 ="";
                                                        }

                                                        if(isset($ques14_3[1])){
                                                            $ques14_3_2 = $ques14_3[1];
                                                        }else{
                                                            $ques14_3_2 ="";
                                                        }

                                                        if(isset($ques14_3[2])){
                                                            $ques14_3_3 = $ques14_3[2];
                                                        }else{
                                                            $ques14_3_3 ="";
                                                        }

                                                    }else{
                                                        $ques14_3 = "";
                                                        $ques14_3_1 ="";

                                                        $ques14_3_2 ="";

                                                        $ques14_3_3 ="";    
                                                    }

                                                @endphp


                                                <form  method="post" id="formQuestionsixteen">
                                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                                    <div class="col-md-4">
                                                        <div class="online-clerk-wrap left-table">
                                                            <div class="table-container online-customers-table">
                                                                <table style="text-align: center;">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>
                                                                                <h2>Q14 Current Loans</h2>
                                                                            </td>

                                                                            <?php if($ques14 != "" && $ques14 =='I have no loans'){ echo '<td><span class="indicator i-red">1</span></td>
                                                                            <td><span class="indicator i-red">1</span></td>
                                                                            <td><span class="indicator i-red">1</span></td>'; } else{ echo'<td><span class="indicator i-green">1</span></td>
                                                                            <td><span class="indicator i-green">1</span></td>
                                                                            <td><span class="indicator i-green">1</span></td>'; } ?>



                                                                            

                                                                        </tr>
                                                                        <tr>
                                                                            <th>Q14 Current Loans</th>
                                                                            <th>Loan 1</th>
                                                                            <th>Loan 2</th>
                                                                            <th>Loan 3</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>14.3 Loan_fee</td>
                                                                            <td>
    																		  <input type="text" data-placeholder="1k - 10m" name="loan_balance_1[]" class="loan_balance_1" value='<?php if($ques14_1_1 != ""){ echo $ques14_1_1 ; } else{ } ?>'  onkeyup="this.value=addCommas(this.value);">
    																		</td>
    																		<td>
    																		  <input type="text" data-placeholder="1k - 10m" name="loan_balance_1[]" class="loan_balance_2" value='<?php if($ques14_1_2 != ""){ echo $ques14_1_2 ; } else{ } ?>' onkeyup="this.value=addCommas(this.value);">
    																		</td>
    																		<td>
    																		  <input type="text" data-placeholder="1k - 10m" name="loan_balance_1[]" class="loan_balance_3" value='<?php if($ques14_1_3 != ""){ echo $ques14_1_3 ; } else{ } ?>' onkeyup="this.value=addCommas(this.value);">
    																		</td>
                                                                        </tr>
                                                                        <tr>
    																	    <td>14.4 Loan_Time</td>
    																		<td>
    																		  <!-- <input type="text" data-placeholder="1-30 years" name="redemmed[]" class="loan_time1" value='<?php if($ques14_2_1 != ""){ echo $ques14_2_1 ; } else{ } ?>'> -->



                                                                              <select name="redemmed[]" class="loan_time1">
                                                                                <?php
                                                                                    for($i=1; $i<=30; $i++){
                                                                                        $var = (($ques14_3_1==$i) && ($ques14_3_1 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
    																		</td>
                                                                            <td>
    																		  <!-- <input type="text" data-placeholder="1-30 years" name="redemmed[]" class="loan_time2" value='<?php if($ques14_2_2 != ""){ echo $ques14_2_2 ; } else{ } ?>'> -->

                                                                              <select name="redemmed[]" class="loan_time2">
                                                                                <?php
                                                                                    for($i=1; $i<=30; $i++){
                                                                                        $var = (($ques14_3_2==$i) && ($ques14_3_2 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
    																		</td>
    																		<td>
    																		  <!-- <input type="text" data-placeholder="1-30 years" name="redemmed[]" class="loan_time3" value='<?php if($ques14_2_3 != ""){ echo $ques14_2_3 ; } else{ } ?>'> -->

                                                                              <select name="redemmed[]" class="loan_time3">
                                                                                <?php
                                                                                    for($i=1; $i<=30; $i++){
                                                                                        $var = (($ques14_3_3==$i) && ($ques14_3_3 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
    																		</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>-</td>
                                                                            <td>
                                                                              <!-- <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest1" value='<?php if($ques14_2_1 != ""){ echo $ques14_2_1 ; } else{ } ?>'> -->
                                                                            </td>
                                                                            <td>
                                                                              <!-- <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest2" value='<?php if($ques14_2_2 != ""){ echo $ques14_2_2 ; } else{ } ?>'> -->
                                                                            </td>
                                                                            <td>
                                                                              <!-- <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest3" value='<?php if($ques14_2_3 != ""){ echo $ques14_2_3 ; } else{ } ?>'> -->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>14.6 Monthly Return (MR)</td>
                                                                            <!-- <td>
    																		  <input typeclass="ques_fourteen"="text" data-placeholder="PMT" readonly="readonly" name="pmt1"  value='<?php if($ques14_2_1 != ""){ echo $ques14_2_1 ; } else{ } ?>' class="pmt1">
    																		</td>
    																		<td>
    																		  <input type="text" readonly="readonly" data-placeholder="PMT" class="pmt2" value='<?php if($ques14_2_2 != ""){ echo $ques14_2_2 ; } else{ } ?>'>
    																		</td>
    																		<td>
    																		  <input type="text" readonly="readonly" data-placeholder="PMT" class="pmt3" value='<?php if($ques14_2_3 != ""){ echo $ques14_2_3 ; } else{ } ?>'>
    																		</td> -->

                                                                            <td>
                                                                              <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest11 pmt1" value='<?php if($ques14_2_1 != ""){ echo $ques14_2_1 ; } else{ } ?>'>
                                                                            </td>
                                                                            <td>
                                                                              <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest21 pmt2" value='<?php if($ques14_2_2 != ""){ echo $ques14_2_2 ; } else{ } ?>'>
                                                                            </td>
                                                                            <td>
                                                                              <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest31 pmt3" value='<?php if($ques14_2_3 != ""){ echo $ques14_2_3 ; } else{ } ?>'>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="A_loan_qa">
                                                        <div class="form-group">
                                                            
                                                            <input id="has_loanA1" type="radio" name="other_loan" value="Yes_I_have_loan" <?php if($ques14 != "" && $ques14 =='Yes_I_have_loan'){ echo 'checked=checked'; } else{ } ?> >
                                                            <label for="has_loanA1"><h1>14.1 Has_Loans</h1> <span>Yes</span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            
                                                            <input id="no_loanA2" type="radio" name="other_loan" class="admin-btn-red" value="I have no loans" <?php if($ques14 != "" && $ques14 =='I have no loans'){ echo 'checked=checked'; } else{ } ?>>
                                                            <label for="no_loanA2"><h1>14.2 No_Loans</h1><span>No</span></label>
                                                        </div>
                                                        </div>
                                                        <div class="A_table-input">

                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>14.7: Loan_Fee (increase mortgage fee 11.3)</p>
                                                            <input type="text" class="loan_fee_sum_fourteen" data-placeholder="Loan_Fee_Sum">
                                                            <p>Sum green 14.3 (0-3 green max)</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>14.8: Monthly_Return (increase Req_PMT 12.1)</p>
                                                            <input type="text" class="monthly_return_sum_fourteen"  data-placeholder="Loan_Fee_Sum">
                                                            <p>Sum green 14.6 (0-3 green max)</p>
                                                        </div>
                                                        </div>
                                                    </div>

                                                    {{ csrf_field() }}
                                                    <div class="form-submittion"><input type="submit" name="fourteenForm" value="Save" class="fourteenForm"></div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="offer-tabs A_current_loan current-loans future-loans">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#future-loans" aria-controls="future-loans" role="tab" data-toggle="tab">Future loans</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="future-loans">
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <h2>Q15 Future Loans</h2>
                                                </div>
                                                
                                                



                                                <!-- ***************QUESTION 15**************** -->
                                                

                                                @php

                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[0])){
                                                        $ques15 = $maindata_ques_15[0]->meta_value;

                                                    }else{
                                                        $ques15 = "";
                                                    }


                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[1])){
                                                        $ques15_1 = $maindata_ques_15[1]->meta_value;
                                                        $ques15_1 = json_decode($ques15_1);
                                                        
                                                        if(isset($ques15_1[0])){
                                                            $ques15_1_1 = $ques15_1[0];
                                                        }else{
                                                            $ques15_1_1 ="";
                                                        }

                                                        if(isset($ques15_1[1])){
                                                            $ques15_1_2 = $ques15_1[1];
                                                        }else{
                                                            $ques15_1_2 ="";
                                                        }

                                                        if(isset($ques15_1[2])){
                                                            $ques15_1_3 = $ques15_1[2];
                                                        }else{
                                                            $ques15_1_3 ="";
                                                        }

                                                    }else{
                                                        $ques15_1 = "";
                                                        $ques15_1_1 ="";
                                                        $ques15_1_2 ="";
                                                        $ques15_1_3 ="";
                                                    }

                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[3])){
                                                        $ques15_2 = $maindata_ques_15[3]->meta_value;
                                                        $ques15_2 = json_decode($ques15_2);


                                                        if(isset($ques15_2[0])){
                                                            $ques15_2_1 = $ques15_2[0];
                                                        }else{
                                                            $ques15_2_1 ="";
                                                        }

                                                        if(isset($ques15_2[1])){
                                                            $ques15_2_2 = $ques15_2[1];
                                                        }else{
                                                            $ques15_2_2 ="";
                                                        }

                                                        if(isset($ques15_2[2])){
                                                            $ques15_2_3 = $ques15_2[2];
                                                        }else{
                                                            $ques15_2_3 ="";
                                                        }

                                                    }else{
                                                        $ques15_2 = "";
                                                        $ques15_2_1 ="";

                                                        $ques15_2_2 ="";

                                                        $ques15_2_3 ="";

                                                        
                                                    }


                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[5])){
                                                        $ques15_3 = $maindata_ques_15[5]->meta_value;
                                                        $ques15_3 = json_decode($ques15_3);


                                                        if(isset($ques15_2[0])){
                                                            $ques15_3_1 = $ques15_3[0];
                                                        }else{
                                                            $ques15_3_1 ="";
                                                        }

                                                        if(isset($ques15_3[1])){
                                                            $ques15_3_2 = $ques15_3[1];
                                                        }else{
                                                            $ques15_3_2 ="";
                                                        }

                                                        if(isset($ques15_3[2])){
                                                            $ques15_3_3 = $ques15_3[2];
                                                        }else{
                                                            $ques15_3_3 ="";
                                                        }

                                                    }else{
                                                        $ques15_3 = "";
                                                        $ques15_3_1 ="";

                                                        $ques15_3_2 ="";

                                                        $ques15_3_3 ="";

                                                        
                                                    }






                                                     if(isset($maindata_ques_6) && isset($maindata_ques_6[0])){
                                                        $bank_account = $maindata_ques_6[0]->meta_value;
                                                        $bank_account = json_decode($bank_account);
                                                        $banks=[];
                                                        foreach($bank_account as $bank){

                                                            switch ($bank) {
                                                              case 'East':
                                                                $bank_account = 'AA';
                                                              break;
                                                              case 'Discount':
                                                                $bank_account = 'BB';
                                                              break;
                                                              case 'Association':
                                                                $bank_account = 'CC';
                                                              break;
                                                              case 'Workers':
                                                                $bank_account = 'DD';
                                                              break;
                                                              case 'National':
                                                                $bank_account = 'EE';
                                                              break;
                                                              case 'Treasure':
                                                                $bank_account = 'FF';
                                                              break;
                                                              case 'Jeruselam':
                                                                $bank_account = 'GG';
                                                              break;
                                                              case 'International':
                                                                $bank_account = 'HH';
                                                              break;
                                                              case 'Other':
                                                                $bank_account = 'OO';
                                                              break;
                                                              default:
                                                                $bank_account = 'AA';
                                                              break;
                                                            }

                                                            $banks[] = $bank_account;

                                                        }

                                                    }else{
                                                        
                                                        $banks =['BB']; 
                                                    }





                                                    $settings = array();
                                                    foreach($checks as $check){
                                                    $settings[] = $check->meta_key;    
                                                    }














                                                @endphp


                                                <form method="post" id="formQuestionSeventeenDIV">
                                                    <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">

                                                <div class="col-md-4">
                                                    <div class="table-container online-customers-table left-table">
                                                        <table style="text-align: center;">
                                                            <thead class="">
                                                                <tr>
                                                                    <td>Future Loans</td>

                                                                    <?php if($ques15 != "" && $ques15 =='Yes'){ echo '<td><span class="indicator i-green">1</span></td>
                                                                    <td><span class="indicator i-green">1</span></td>
                                                                    <td><span class="indicator i-green">1</span></td>'; } else{ echo'<td><span class="indicator i-red">1</span></td>
                                                                    <td><span class="indicator i-red">1</span></td>
                                                                    <td><span class="indicator i-red">1</span></td>'; } ?>
                                                                    

                                                                </tr>
                                                                <tr>
                                                                    <th><span>Q15A</span> Future Loans</th>
                                                                    <th>Future_Loan 1</th>
                                                                    <th>Future_Loan 2</th>
                                                                    <th>Future_Loan 3</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> 15.3 Loan_fee</td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="1k - 10m" name="loan_balance_1_1[]" class="loan_fee_15_1" value='<?php if($ques15_1_1 != ""){ echo $ques15_1_1 ; } else{ } ?>'  onkeyup="this.value=addCommas(this.value);">
                                                                    </td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="1k - 10m" name="loan_balance_1_1[]" class="loan_fee_15_2" value='<?php if($ques15_1_2 != ""){ echo $ques15_1_2 ; } else{ } ?>'  onkeyup="this.value=addCommas(this.value);">
                                                                    </td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="1k - 10m" name="loan_balance_1_1[]" class="loan_fee_15_3" value='<?php if($ques15_1_3 != ""){ echo $ques15_1_3 ; } else{ } ?>'  onkeyup="this.value=addCommas(this.value);">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.4 Loan_Time</td>
                                                                    <td>
                                                                      <!-- <input type="text" data-placeholder="1-30 years" name="termination_of_the_loan_1_1[]" class="loan_time_15_1"  value='<?php if($ques15_2_1 != ""){ echo $ques15_2_1 ; } else{ } ?>'> -->


                                                                      <select name="termination_of_the_loan_1_1[]" class="loan_time_15_1">
                                                                                <?php
                                                                                    for($i=1; $i<=30; $i++){
                                                                                        $var = (($ques15_2_1==$i) && ($ques15_2_1 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>



                                                                    </td>
                                                                    <td>
                                                                     <!--  <input type="text" data-placeholder="1-30 years" name="termination_of_the_loan_1_1[]" class="loan_time_15_2" value='<?php if($ques15_2_2 != ""){ echo $ques15_2_2 ; } else{ } ?>'> -->



                                                                      <select name="termination_of_the_loan_1_1[]" class="loan_time_15_2">
                                                                                <?php
                                                                                    for($i=1; $i<=30; $i++){
                                                                                        $var = (($ques15_2_2==$i) && ($ques15_2_2 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
                                                                    </td>
                                                                    <td>
                                                                      <!-- <input type="text" data-placeholder="1-30 years" name="termination_of_the_loan_1_1[]" class="loan_time_15_3" value='<?php if($ques15_2_3 != ""){ echo $ques15_2_3 ; } else{ } ?>'> -->




                                                                      <select name="termination_of_the_loan_1_1[]" class="loan_time_15_3">
                                                                                <?php
                                                                                    for($i=1; $i<=30; $i++){
                                                                                        $var = (($ques15_2_3==$i) && ($ques15_2_3 !=''))?'selected':'';
                                                                                        echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                    }
                                                                                ?>
                                                                             </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.5 Interest(%)</td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="0-100%" name="Month_refund_1[]" class="interest_15_1" value='<?php if($ques15_3_1 != ""){ echo $ques15_3_1 ; } else{ } ?>'>
                                                                    </td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="0-100%" name="Month_refund_1[]" class="interest_15_2" value='<?php if($ques15_3_2 != ""){ echo $ques15_3_2 ; } else{ } ?>'>
                                                                    </td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="0-100%" name="Month_refund_1[]" class="interest_15_3" value='<?php if($ques15_3_3 != ""){ echo $ques15_3_3 ; } else{ } ?>'>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.6 Monthly Return (MR)</td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="PMT Calc" class="pmt_15_1" readonly="readonly">
                                                                    </td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="PMT Calc" class="pmt_15_2" readonly="readonly">
                                                                    </td>
                                                                    <td>
                                                                      <input type="text" data-placeholder="PMT Calc" class="pmt_15_3" readonly="readonly">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="constant-future-loans-wrap">
                                                        <p class="A-title_center"><b>Consider if you move to above banks only (from Other bank)</b> Take into account only if Q7: Yes &amp; Q6 different from <a href="javascript:void(0);">Bank By Algo</a> &amp;
                                                            <a href="javascript:void(0);">Bank By Algo</a> is in Constant future loan table.
                                                        </p>
                                                        <div class="online-clerk-wrap left-table">
                                                            <div class="table-container online-customers-table d-flix clerk-t">
                                                          

                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                           
                                                                        <td></td>
                                                                           
                                                                    </tr>
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

                                                                        <td>15.9 interest(%)</td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15.10 Monthly Return (MR)</td>
                                                                        
                                                                    </tr>
                                                               
                                                                </tbody>
                                                            </table>
                                                           
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        @php

                                                                            if(in_array("AA", $banks) && in_array("AA-bank", $settings)){
                                                                                echo'<td><span class="indicator i-green">1</span></td>';
                                                                                $class="green";
                                                                            }else{
                                                                                echo'<td><span class="indicator i-red">1</span></td>';
                                                                                $class="red";

                                                                            }


                                                                        @endphp  
                                                                        
                                                                          

                                                                    </tr>
                                                                        <tr>
                                                                            <th >AA - Mizrachi 
                                                                            </th>
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($constant_banks_AA as $cb_AA)    
                                                                            {{ csrf_field() }}
                                                                            <tr>
                                                                                <input type="hidden" name="bank_" id="bank_aa"  value="AA">
                                                                                <td><input readonly type="text" name="loanfee_" id="loanfee_aa" class="_b loanfee_aa {{$class}}" value="{{$cb_AA->loan_fee}}" data-id="{{$class}}"></td> 
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input readonly type="text" class="_b loantime_aa" name="loantime_" id="loantime_aa" value=" {{$cb_AA->loan_time}}"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input readonly type="text" name="interest_" id="interest_aa" class="_b interest_aa" value="{{$cb_AA->loan_interest}}"></td>
                                                                            </tr>
                                                                           
                                                                            <tr>
                                                                                <td class="mr_onee"><input type="text" class="mr_one {{$class}}" readonly="readonly"></td>
                                                                                
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                        
                                                                <table>
                                                                    <thead>
                                                                       <tr>  
                                                                            @php
                                                                                if(in_array("DD", $banks) && in_array("DD-bank", $settings)){
                                                                                    echo'<td><span class="indicator i-green">1</span></td>';
                                                                                    $class="green";
                                                                                }else{
                                                                                    echo'<td><span class="indicator i-red">1</span></td>';
                                                                                    $class="red";

                                                                                }
                                                                            @endphp
                                                                            </tr>
                                                                        <tr>
                                                                            <th >DD - Hpoalim  </th>
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                   <tbody>
                                                                        @foreach($constant_banks_DD as $cb_DD)
                                                                        
                                                                              {{ csrf_field() }}
                                                                            <tr>
                                                                                <input type="hidden" name="bank_" id="bank_DD" value="DD">
                                                                                <td><input readonly type="text" name="loanfee_" id="loanfee_dd" class="_dd loanfee_dd {{$class}}" value="{{$cb_DD->loan_fee}}" data-id="{{$class}}"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input readonly type="text" name="loantime_" class="_dd loantime_dd"  id="loantime_dd" value="{{$cb_DD->loan_time}}"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>

                                                                                <td><input readonly type="text" name="interest_" class="_dd interest_dd"  id="interest_dd" value="{{$cb_DD->loan_interest}}"></td>
                                                                                
                                                                            </tr>
                                                                           
                                                                            <tr>
                                                                                <td class="mr_twoo"><input type="text" class="mr_two {{$class}}" readonly="readonly"></td>
                                                                                
                                                                            </tr>
                                                                             
                                                                             
                                                                      
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            @php
                                                                                if(in_array("EE", $banks) && in_array("EE-bank", $settings)){
                                                                                    echo'<td><span class="indicator i-green">1</span></td>';
                                                                                    $class="green";
                                                                                }else{
                                                                                    echo'<td><span class="indicator i-red">1</span></td>';
                                                                                    $class="red";

                                                                                }
                                                                            @endphp
                                                                        </tr>
                                                                        <tr>
                                                                            <th> EE - Leumi </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($constant_banks_EE as $cb_EE)
                                                                        
                                                                             {{ csrf_field() }}
                                                                            <tr>
                                                                                <input type="hidden" name="bank_" id="bank_" value="EE">

                                                                                <td><input readonly type="text" name="loanfee_" class="ee_ loanfee_ee {{$class}}" id="loanfee_ee" value="{{$cb_EE->loan_fee}}" data-id="{{$class}}"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input readonly type="text" name="loantime_" class="ee_ loantime_ee" id="loantime_ee" value="{{$cb_EE->loan_time}}"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>

                                                                                <td><input readonly type="text" name="interest_" class="ee_ interest_ee" id="interest_ee" value="{{$cb_EE->loan_interest}}"></td>
                                                                                
                                                                            </tr>
                                                                           
                                                                            <tr>
                                                                                <td class="mr_threee"> <input type="text" class="mr_three {{$class}}" readonly="readonly"></td>
                                                                                
                                                                            </tr>
                                                                             
                                                                    
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                   
                                                   <div class="A_loan_qa">
                                                    <div class="form-group">
                                                        
                                                        <input id="has_loanA11" type="radio" name="additional_loans" value="Yes" <?php if($ques15 != "" && $ques15 =='Yes'){ echo 'checked=checked'; } else{ } ?>>
                                                        <label for="has_loanA11"><h1>15.1 Has_Loans</h1><span>Yes</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        
                                                        <input id="no_loanA12" type="radio" name="additional_loans" value="I do not know of any additional loans" class="admin-btn-red" <?php if($ques15 != "" && $ques15 =='I do not know of any additional loans'){ echo 'checked=checked'; } else{ } ?>>
                                                        <label for="no_loanA12"><h1>15.2 No_Loans</h1><span>No</span></label>
                                                    </div>
                                                    </div>
                                               
                                                   <div class="A_table-input">
                                                    <div class="form-group">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <p>15.11: Loan_Fee (decrease mortgage fee 11.3)</p>
                                                        <input type="text" name="fifteen_total_sum_loan" class="fifteen_total_sum_loan" id="fifteen_total_sum_loan"  data-placeholder="Loan_Fee_Sum">
                                                        <p>Sum green 15.3 (3 max) + green 15.7 (1 max)</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <p>15.12: Monthly_Return (decrease Req_PMT 12.1)</p>
                                                        <input type="text" name="fifteen_monthly_return" class="fifteen_monthly_return" id="fifteen_monthly_return" data-placeholder="Loan_Fee_Sum">
                                                        <p>Sum green 15.6 (3 max) + green 15.10 (1 max)</p>
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                <div class="form-submittion"><input type="submit" name="fifteenForm" value="Save" class="fifteenForm"></div>
                                                  {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="question-16-container">
                                    <div class="question-16-header d-f a-i-c">
                                        <h2>Q16 Elegebility</h2>
                                         <div class="selectBoxes">
                                            <input type="radio" id="aTag1">
                                            <label for="aTag1">

                                                @php



                                                @endphp





                                                 <a href="javascript:void(0);" class="main-button button-large button-green">Elegeble</a>
                                            </label>
                                        </div>
                                        <div class="selectBoxes">
                                            <input type="radio" id="aTag2">
                                            <label for="aTag2">
                                                 <a href="javascript:void(0);" class="main-button button-large button-red">Not Elegeble</a>
                                            </label>
                                        </div>
                                       
                                       

                                        <div class="elegebility-question d-f a-i-c">
                                            <i class="fa fa-question-circle"></i>
                                            <span>
                                                            <ul>
                                                                <li>1. Ask Elegebility question Q8 only if you don't have any apartment only! (2.1c and chose 1.3/1.4 only)</li>
                                                                <li>2. Calc Elegebility only if has loan type C in loan type table.</li>
                                                            </ul>
                                                        </span>
                                        </div>
                                    </div>
                                    <div class="table-container table-auto table-nowrap eligibility-table">
                                        <!-- <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Q16 Elegebility</th>
                                                                <th>Points</th>
                                                                <th>Value</th>
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Total Points</span> <input type="text" class="form-control" id="total-points" name="total-points" data-placeholder="30-5050" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="points-1" name="points-1" data-placeholder="30-5050" /></td>
                                                                <td><input type="text" class="form-control" id="value-1" name="value-1" data-placeholder="0-30" /></td>
                                                                <td>Q16.1 Number of married years</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Basic Score</span> <input type="text" class="form-control" id="basic-score" name="basic-score" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="value-2" name="value-2" data-placeholder="0-20" /></td>
                                                                <td><input type="text" class="form-control" id="value-3" name="value-3" data-placeholder="0-36" /></td>
                                                                <td>Q16.2 Number of kids until age 21</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Army score</span><input type="text" class="form-control" id="army-score" name="army-score" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="points-3" name="points-3" data-placeholder="0-1350" /></td>
                                                                <td><input type="text" class="form-control" id="value-3" name="value-3" data-placeholder="0-36" /></td>
                                                                <td>Q16.3 Number of brothers and sisters from both sides that are residents of Israel</td>
                                                            </tr>
                                                            <tr class="input-green">
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Eligibility score </span><input type="text" class="form-control" id="eligibility-score" name="eligibility-score" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="points-4" name="points-4" data-placeholder="0-1350" /></td>
                                                                <td><input type="text" class="form-control" id="value-4" name="value-4" data-placeholder="0-30" /></td>
                                                                <td>Q16.4 Number of month for army services for men (0-36 month)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table> -->


                                         <!-- ********************QUESTION 16******************* -->

                                         @php

                                            $aa = ['30','250','300','350','400','450','500','550','600','650','700','750','800','850','900','950','1000','1050','1100','1150','1200','1250','1300','1350','1400','1450','1500','1550','1600','1650','1700'];

                                            $bb = ['0','350','500','650','800','900','1000','1100','1200','1300','1400','1500','1600','1700','1800','1900'];

                                            $cc = ['0','50','100','150','400','600','650','700','750','800','850','900','950','1000','1050','1100','1150','1200','1250','1300','1350',];

                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[0])){
                                                $ques16 = $maindata_ques_16[0]->meta_value;

                                            }else{
                                                $ques16 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[1])){
                                                $ques16_1 = $maindata_ques_16[1]->meta_value;

                                            }else{
                                                $ques16_1 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[2])){
                                                $ques16_2 = $maindata_ques_16[2]->meta_value;

                                            }else{
                                                $ques16_2 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[3])){
                                                $ques16_3 = $maindata_ques_16[3]->meta_value;

                                            }else{
                                                $ques16_3 = "";
                                            } 



                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[4])){
                                                $ques16_4 = $maindata_ques_16[4]->meta_value;

                                            }else{
                                                $ques16_4 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[5])){
                                                $ques16_5 = $maindata_ques_16[5]->meta_value;

                                            }else{
                                                $ques16_5 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[6])){
                                                $ques16_6 = $maindata_ques_16[6]->meta_value;

                                            }else{
                                                $ques16_6 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[7])){
                                                $ques16_7 = $maindata_ques_16[7]->meta_value;

                                            }else{
                                                $ques16_7 = "";
                                            } 


                                            if(isset($maindata_ques_16) && isset($maindata_ques_16[8])){
                                                $ques16_8 = $maindata_ques_16[8]->meta_value;

                                            }else{
                                                $ques16_8 = "";
                                            } 



                                         @endphp

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Q16 Elegebility</th>
                                                    <th>Points</th>
                                                    <th>Value</th>
                                                    <th style="background-color: #fff">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Total Points</span> <input type="text" class="form-control" id="total-points" name="total-points" data-placeholder="30-5050" value="<?php if($ques16_5 != ""){ echo $ques16_5 ; } else{ } ?>" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Basic Score</span> <input type="text" class="form-control" id="basic-score" name="basic-score" value="<?php if($ques16_6 != ""){ echo $ques16_6 ; } else{ } ?>" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Army score</span><input type="text" class="form-control" id="army-score" name="army-score" value="<?php if($ques16_7 != ""){ echo $ques16_7 ; } else{ } ?>" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr class="input-green">
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Eligibility score </span><input type="text" class="form-control" id="eligibility-score" name="eligibility-score" value="<?php if($ques16_8 != ""){ echo $ques16_8 ; } else{ } ?>" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td><input type="text" class="form-control one" id="points-1" name="points-1" data-placeholder="30-5050" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control two" id="value-2" name="value-2" data-placeholder="0-2000"  /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control three" id="points-3" name="points-3" data-placeholder="0-1350" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control four" id="points-3" name="points-3" data-placeholder="Service Points (Q16.4 + Q16.5)" /></td>
                                                            </tr>
                                                           <!--  <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" id="points-4" name="points-4" data-placeholder="0-1350" /></td>
                                                            </tr> -->
                                                        </table>
                                                    </td>

                                                    <td>
                                                        <form method="post" id="formQuestionEighteen">
                                                           <input type="hidden" name="user_id" value="<?php echo$user_id; ?>">
                                                            <table>
                                                                <tr>
                                                                    <td><!-- <input type="text" class="form-control" id="value-1" name="value-1" data-placeholder="0-30" /> -->
                                                                        <select name="current_marriage" class="current_marriage">
                                                                            <?php
                                                                                for($i=0; $i<=30; $i++){
                                                                                    $var = (($ques16==$i) && ($ques16 !=''))?'selected':'';
                                                                                    echo '<option value="'.$aa[$i].'/'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                }
                                                                            ?>
                                                                        </select>   
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><!-- <input type="text" class="form-control" id="value-3" name="value-3" data-placeholder="0-15" /> -->
                                                                        <select name="children" class="children">
                                                                            <?php
                                                                                for($i=0; $i<=15; $i++){
                                                                                    $var = (($ques16_1==$i) && ($ques16_1 !=''))?'selected':'';
                                                                                    echo '<option value="'.$bb[$i].'/'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><!-- <input type="text" class="form-control" id="value-3" name="value-3" data-placeholder="0-20" /> --> 
                                                                        <select name="siblings" class="siblings">
                                                                            <?php
                                                                                for($i=0; $i<=20; $i++){
                                                                                    $var = (($ques16_2==$i) && ($ques16_2 !=''))?'selected':'';
                                                                                    echo '<option value="'.$cc[$i].'/'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><!-- <input type="text" class="form-control" id="value-4" name="value-4" data-placeholder="0-36" /> -->
                                                                        <select name="national_service_time" class="national_service_time">
                                                                            <?php
                                                                                for($i=0; $i<=36; $i++){
                                                                                    $var = (($ques16_3==$i) && ($ques16_3 !=''))?'selected':'';
                                                                                    echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>      
                                                                        <select name="military_service_time_women" class="military_service_time_women">

                                                                            <?php
                                                                                for($i=0; $i<=24; $i++){
                                                                                    $var = (($ques16_4==$i) && ($ques16_4 !=''))?'selected':'';
                                                                                    echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                                }

                                                                            ?>
                                
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <div class="form-submittion">
                                                                <input type="submit" name="sixteenForm" value="Save" class="sixteenForm">
                                                            </div>

                                                            {{ csrf_field() }}
                                                        </form>
                                                    </td>


                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>Q16.1 Number of married years</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.2 Number of kids until age 21</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.3 Number of brothers and sisters from both sides that are residents of Israel</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.4 Number of month for army services for men (0-36 month)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.5 Number of month for for services for women (0-24 month)</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p style="margin-top: 10px;">** All data above should be sent to admin while customers fill form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- admin content ends here -->

    <!-- new offer modal -->

</body>



</html>
@include('layouts.footer_admin')