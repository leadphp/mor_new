@include('layouts.admin_top_header')
@include('layouts.admin_header_subheader')

@php
if(isset($maindata_ques_8) && isset($maindata_ques_8[0])){
    $ques8 = $maindata_ques_8[0]->meta_value;
}else{
    $ques8 = "no_data";   
}

@endphp


<div class="main-content report1-admin report-1-c">
<input type="hidden" value="0" id="hidden_path">
<input type="hidden" name="fund_field" class="fund_field" value="@php echo $ques8; @endphp">
<div class="container-fluid">
<div class="row report-online">
    <div class="col-md-8">
        <form class="redio-design" id="top-1">
            <div class="form-group">
                <input value="AA" id="radio1" type="radio" checked name="select_bank">
                <label for="radio1">AA - Mizrahi</label>
            </div>
            <div class="form-group">
                <input value="BB"  id="radio2" type="radio" name="select_bank">
                <label for="radio2">BB-Discount</label>
            </div>
            <div class="form-group">
                <input value="CC" id="radio3" type="radio" name="select_bank">
                <label for="radio3">CC - Igud</label>
            </div>
            <div class="form-group">
                <input value="DD" id="radio4" type="radio" name="select_bank">
                <label for="radio4">DD- Hapolaim</label>
            </div>
            <div class="form-group">
                <input value="EE" id="radio5" type="radio" name="select_bank">
                <label for="radio5">EE - Leumi</label>
            </div>
            <div class="form-group">
                <input value="FF"  id="radio6" type="radio" name="select_bank">
                <label for="radio6">FF - Otsar Hahayal</label>
            </div>
            <div class="form-group">
                <input value="GG" id="radio7" type="radio" name="select_bank">
                <label for="radio7">GG- Jerusalem</label>
            </div>
            <div class="form-group">
                <input value="HH" id="radio8" type="radio" name="select_bank">
                <label for="radio8">HH - Habenleumi</label>
            </div>
        </form>
        <form class="redio-design" id="top-2">
            <div class="form-group">
                <input id="radio9" type="radio" name="select1">
                <label for="radio9">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio10" type="radio" name="select1">
                <label for="radio10">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio11" type="radio" name="select1">
                <label for="radio11">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio12" type="radio" checked name="select1">
                <label for="radio12">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio13" type="radio" name="select1">
                <label for="radio13">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio14" type="radio" name="select1">
                <label for="radio14">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio15" type="radio" name="select1">
                <label for="radio15">100,000</label>
            </div>
            <div class="form-group">
                <input id="radio16" type="radio" name="select1">
                <label for="radio16">100,000</label>
            </div>
        </form>
        <div class="row starting-row">
            <div class="col-md-6">
                <div class="main-content a-main a-full-w">
                    <div class="container-fluid">
                        <div class="offer-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Q12 Monthly Return</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="a-month-return">
                                                <div class="col-2">
                                                    <span>12.1 Req_PMT</span> (Wanted MR)
                                                </div>
                                                <div class="col-2">
                                                     <input type="text" id="wanted-mr" readonly="readonly" name="monthly_refund_input_slide" class="monthly_refund_input_slide form-control"   value="<?php if($ques12 != ""){ echo $ques12 ; } else{ } ?>"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="a-month-return">
                                                <div class="col-2">
                                                    <span>12.2 Req_NPER</span> (Wanted MR)
                                                </div>
                                                <div class="col-2">
                                                     <input type="text" readonly="readonly" id="wanted-years" name="monthly_refund_input" class="monthly_refund_input form-control" data-placeholder="4-30" onkeyup="this.value=addCommas(this.value);"   value="<?php if($ques12_1 != ""){ echo $ques12_1 ; } else{ } ?>"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-content a-main">
                    <div class="container-fluid">
                        <div class="offer-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Req_Mortgage</a></li>
                            </ul>
                            @php

                                if(isset($maindata_ques_8) && isset($maindata_ques_8[0])){

                                    $value = $maindata_ques_8[0]->meta_value;

                                    if($value == 'any_cause'){
                                        
                                        if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[2])){
                                            $mortgage_fee = $maindata_ques_11_extra[1]->meta_value;
                                        }else{
                                            $mortgage_fee = "";
                                        }


                                        if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[3])){
                                        $mortgage_ratio = $maindata_ques_11_extra[2]->meta_value;
                                        $mortgage_ratio = number_format($mortgage_ratio, 2);
                                        }else{
                                            $mortgage_ratio = "";
                                            
                                        }


                                    }else if($value == 'mistaken_program'){
                                      
                                        if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[2])){
                                            $mortgage_fee = $maindata_ques_11_extra[3]->meta_value;
                                        }else{
                                            $mortgage_fee = "";
                                        }


                                        if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[3])){
                                        $mortgage_ratio = $maindata_ques_11_extra[4]->meta_value;
                                        $mortgage_ratio = number_format($mortgage_ratio, 2);
                                        }else{
                                            $mortgage_ratio = "";
                                            
                                        }
                                      
                                    }else{
                                      
                                        if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[2])){
                                            $mortgage_fee = $maindata_ques_11_extra[2]->meta_value;
                                        }else{
                                            $mortgage_fee = "";
                                        }


                                        if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[3])){
                                        $mortgage_ratio = $maindata_ques_11_extra[3]->meta_value;
                                        $mortgage_ratio = number_format($mortgage_ratio, 2);
                                        }else{
                                            $mortgage_ratio = "";
                                            
                                        }

                                    }

                                }else{

                                        $mortgage_fee = "";
                                        $mortgage_ratio = "";
                                }

                                if(isset($maindata_ques_9) && isset($maindata_ques_9[0])){
                                    $maindata_ques_9 = $maindata_ques_9[0]->meta_value;
                                }else{
                                    $maindata_ques_9 = "";
                                }

                                if(isset($maindata_ques_8) && isset($maindata_ques_8[0])){
                                    $ques8 = $maindata_ques_8[0]->meta_value;
                                }else{
                                    $ques8 = "";
                                }

                            @endphp
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active req-mortgage" id="customer-offers">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="a-month-return">
                                                <div class="col-2">
                                                    <span>11.3 Mortgage_Fee</span>
                                                </div>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="mortgage-fee-1-report" name="mortgage-fee-1" readonly="readonly"  value=" <?php if($mortgage_fee != ""){ echo
                                                    $mortgage_fee; } else{ } ?>">



                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="A_table-full">
                                                <div class="form-group">
                                                    <p>11.4: Morg_Ratio (%)
                                                    </p>
                                                    <input type="text" readonly="readonly" class="form-control" id="morg-ratio-report" name="morg-ratio" data-placeholder="1-100%" value="<?php if($mortgage_ratio != ""){ echo $mortgage_ratio ; } else{ } ?>">
                                                </div>
                                                <div class="form-group">
                                                    <p>11.5: Regulation Table (%)</p>

                                                    <!--/******BKWAS DATA*********/-->
                                                    <!-- QUESTION NUMBER (1) -->

                                                      <table style="display: none;" class="hide_for_global">
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



                                                     <!-- QUESTION NUMBER (2) -->   


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




                                                            <div style="display:none;" class="hide_for_global">
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
                                                                                      <input type="text" id="monthly-income1" class="form-control monthly_one common_extra_cls" name="monthly_income[]" value="<?php if(count($monthly_income) > 0){ echo $monthly_income[0];  }else{ echo"0"; } ?>" onkeyup="this.value=addCommas(this.value);"  readonly="readonly"/>
                                                                                    </td>
                                                                                    <td>
                                                                                    <input type="text" id="monthly-income1" class="form-control monthly_two common_extra_cls" name="monthly_income[]" value="<?php if(count($monthly_income) > 1){ echo $monthly_income[1];  }else{ echo"0"; } ?>" onkeyup="this.value=addCommas(this.value);"  readonly="readonly"/>
                                                                                    </td>
                                                                                    <td>
                                                                                    <input type="text" id="monthly-income1" class="form-control monthly_three common_extra_cls" name="monthly_income[]" value="<?php if(count($monthly_income) > 2){ echo $monthly_income[2];  }else{ echo"0"; } ?>" onkeyup="this.value=addCommas(this.value);"  readonly="readonly"/>
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
                                                                                      <input type="text" id="mortgage-balance1" class="form-control balance_one common_extra_cls" name="property_val[]" value="<?php if(count($property_value_2) > 0){ echo $property_value_2[0];  }else{ echo"0"; } ?>" onkeyup="this.value=addCommas(this.value);" readonly="readonly"/>
                                                                                    </td>
                                                                                    <td>
                                                                                      <input type="text" id="mortgage-balance1" class="form-control balance_two common_extra_cls" name="property_val[]" value="<?php if(count($property_value_2) > 1){ echo $property_value_2[1];  }else{ echo"0"; } ?>" onkeyup="this.value=addCommas(this.value);" readonly="readonly"/>
                                                                                    </td>
                                                                                    <td>
                                                                                      <input type="text" id="mortgage-balance1" class="form-control balance_three common_extra_cls" name="property_val[]" value="<?php if(count($property_value_2) > 2){ echo $property_value_2[2];  }else{ echo"0"; } ?>" onkeyup="this.value=addCommas(this.value);" readonly="readonly"/>
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
                                                                    </div>




                                                    <!-- QUESTION NUMBER (8) -->

                                                        <ul style="display:none;" class="hide_for_global">
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
                                                        
                                                          
                                                    <!-- QUESTION NUMBER (9) -->

                                                    <ul style="display:none;" class="hide_for_global">
                                                        <li>
                                                            <span>9.1 Investor</span>
                                                            <span>
                                                              <div class="inputYesNo">
                                                                 <input type="radio" id="fieldTen" name="status_of_mortgage" class="status_of_mortgage read_only_nine" value="investor" <?php if($maindata_ques_9 == "investor"){ echo "checked"; } else{ } ?>>
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
                                                                 <input type="radio" id="fieldEleven" name="status_of_mortgage" class="status_of_mortgage read_only_nine" value="asset_improver" <?php if($maindata_ques_9 == "asset_improver"){ echo "checked"; } else{ } ?>>
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
                                                                 <input type="radio" id="fieldTwelve" name="status_of_mortgage" class="status_of_mortgage read_only_nine first_aprt" value="first_aprt" <?php if($maindata_ques_9 == "first_aprt"){ echo "checked"; } else{ } ?>>
                                                                 <label for="fieldTwelve">
                                                                   <div class="selectedNo">X</div>
                                                                   <div class="selectedYes">Yes</div>
                                                                 </label>
                                                               </div>
                                                            </span>
                                                        </li>
                                                    </ul>


                                                      <input type="text" readonly="readonly" class="form-control" id="regulation-table-percent" name="regulation-table-percent" data-placeholder="50 / 70 / 75%">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--******************************************QUESTION 14*************************************** -->


        <div class="row">
            <div class="col-md-12">
                <div class="main-content a-main">
                    <div class="container-fluid">
                        <div class="offer-tabs A_current_loan">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">customer offers</a></li>
                            </ul>
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

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <a class="A_title_table" href="javascript:void(0)">Q14 Current Loans</a>
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead class="ques_fourteen">
                                                            <tr>
                                                                <td></td>
                                                                <?php 
                                                                if($ques14 != "" && $ques14 =='Yes_I_have_loan'){
                                                                    $ff = "indicator i-green";

                                                                }else{
                                                                   $ff = "indicator i-red";
                                                                }

                                                                ?>


                                                                <td><span class='<?php echo $ff; ?>'>1</span></td>
                                                                <td><span class='<?php echo $ff; ?>'>1</span></td>
                                                                <td><span class='<?php echo $ff; ?>'>1</span></td>
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
                                                                <td> <select name="redemmed[]" class="loan_time1">
                                                                    <?php
                                                                        for($i=1; $i<=30; $i++){
                                                                            $var = (($ques14_3_1==$i) && ($ques14_3_1 !=''))?'selected':'';
                                                                            echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                 </select></td>
                                                                <td> <select name="redemmed[]" class="loan_time2">
                                                                    <?php
                                                                        for($i=1; $i<=30; $i++){
                                                                            $var = (($ques14_3_2==$i) && ($ques14_3_2 !=''))?'selected':'';
                                                                            echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                 </select></td>
                                                                <td>  <select name="redemmed[]" class="loan_time3">
                                                                    <?php
                                                                        for($i=1; $i<=30; $i++){
                                                                            $var = (($ques14_3_3==$i) && ($ques14_3_3 !=''))?'selected':'';
                                                                            echo '<option value="'.$i.'"'.' '.$var.'>'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                 </select></td>
                                                            </tr>
                                                            <tr>
                                                               <td>-</td>
                                                                <td>
                                                                 <!--  <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest1" value='<?php if($ques14_2_1 != ""){ echo $ques14_2_1 ; } else{ } ?>'>
                                                                </td>
                                                                <td>
                                                                  <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest2" value='<?php if($ques14_2_2 != ""){ echo $ques14_2_2 ; } else{ } ?>'>
                                                                </td>
                                                                <td>
                                                                  <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest3" value='<?php if($ques14_2_3 != ""){ echo $ques14_2_3 ; } else{ } ?>'>
                                                                </td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>14.6 Monthly Return (MR)</td>
                                                                 <!-- <td>
                                                                  <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest1" value='<?php if($ques14_2_1 != ""){ echo $ques14_2_1 ; } else{ } ?>'>
                                                                </td>
                                                                <td>
                                                                  <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest2" value='<?php if($ques14_2_2 != ""){ echo $ques14_2_2 ; } else{ } ?>'>
                                                                </td>
                                                                <td>
                                                                  <input type="text" data-placeholder="Numeric only" name="Month_refund[]" class="loan_interest3" value='<?php if($ques14_2_3 != ""){ echo $ques14_2_3 ; } else{ } ?>'>
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
                                        <div class="col-md-5">
                                            <div class="A_loan_qa">
                                            <div class="form-group">
                                                
                                                 <input id="has_loanA11" type="radio" name="other_loan_14" class="other_loan_14" value="yes" <?php if($ques14 != "" && $ques14 =='Yes_I_have_loan'){ echo 'checked=checked'; } else{ } ?> >
                                                <label for="has_loanA11"><h1>14.1 Has_Loans</h1> <span>Yes</span></label>
                                            </div>
                                            <div class="form-group">
                                                
                                                <input id="no_loanA12" type="radio" name="other_loan_14" class="admin-btn-red other_loan_14" value="no" <?php if($ques14 != "" && $ques14 =='I have no loans'){ echo 'checked=checked'; } else{ } ?>>
                                                <label for="no_loanA12"><h1>14.2 No_Loans</h1><span>No</span></label>
                                            </div>
                                        </div>
                                            <form class="A_table-input">
                                                <div class="form-group">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <p>14.7: Loan_Fee</p>
                                                     <input type="text" id="loan_fee_sum_fourteen_" class="loan_fee_sum_fourteen_" data-placeholder="Loan_Fee_Sum">
                                                    <p>Sum green 14.3</p>
                                                </div>
                                                <div class="form-group">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <p>14.8: PMT Sum</p>
                                                  <input type="text" class="monthly_return_sum_fourteen_"  id="monthly_return_sum_fourteen_" data-placeholder="Loan_Fee_Sum">
                                                    <p>Sum green 14.6</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="a-rightside">
            <h3>Show Bank On Final Report</h3>
            <form>
                <div class="form-group">
                    <h2>Show Bank By Algo</h2>
                    <div class="d-b-select-container d-f f-d-c">
                        <select class="selectpicker" style="display: none;">
                  <option>AA</option>
                  <option>BB</option>
                  <option>CC</option>
                  <option>DD</option>
                  <option>EE</option>
                  <option>FF</option>
                  <option>GG</option>
                  <option>HH</option>
                  
               </select>
                    </div>
                </div>
                <div class="form-group">
                    <h2>Final Mortgage Linked</h2>
                    <input type="" placeholder="DD-Hapoalim">
                    <div class="green">Lowest Mortgage</div>
                </div>
            </form>
            <div class="main-content a-main">
                <div class="container-fluid">
                    <div class="offer-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Log And Error by algo</a></li>
                            <li role="presentation " class=""><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Show log sys file</a></li>
                            <li><a href="javascript:void(0);">Open Full Screen</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                <div class="a-month-return">
                                    <ul class="error_log_happens">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="main-content a-main">
            <div class="container-fluid">
                <div class="offer-tabs A_future_loan">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Future Loans</a></li>
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


                                        if(isset($maindata_ques_7) && isset($maindata_ques_7[0])){
                                            $bank_account_val = $maindata_ques_7[0]->meta_value;
                                          
                                             
                                        }else{
                                            $bank_account_val = "No";
                                            
                                        }


                                        if(isset($maindata_ques_6) && isset($maindata_ques_6[0])){
                                          $bank_account = $maindata_ques_6[0]->meta_value;
                                           $bank_account = json_decode($bank_account); 
                                        }else{
                                           $bank_account = ['asdrrr'];
                                        }


                                       
                                        $settings = array();
                                        foreach($checks as $check){
                                        $settings[] = $check->meta_key;    
                                        }
                                      
                                    @endphp



                                    <form method="post" id="formQuestionSeventeenDIV">
                                        <input type="hidden" name="user_id" id="user_id" value="<?php echo$user_id; ?>">

                                    <div class="col-md-4">
                                        <div class="table-container online-customers-table left-table">
                                            <table style="text-align: center;">
                                                <thead class="ques_fifteen">

                                                    <?php if($ques15 != "" && $ques15 =='Yes'){ $gggg =  'indicator i-green'; } else{ $gggg =  'indicator i-red'; } ?>
                                                    <tr>
                                                        <td>Future Loans</td>
                                                        <td><span class="<?php echo $gggg; ?>">1</span></td>
                                                        <td><span class="<?php echo $gggg; ?>">1</span></td>
                                                        <td><span class="<?php echo $gggg; ?>">1</span></td>

                                                    </tr>
                                                    <tr>
                                                        <th>Q15A<br> Future Loans</th>
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
                                                          <input type="text" data-placeholder="PMT Calc" class="pmt_15_1_" readonly="readonly">
                                                        </td>
                                                        <td>
                                                          <input type="text" data-placeholder="PMT Calc" class="pmt_15_2_" readonly="readonly">
                                                        </td>
                                                        <td>
                                                          <input type="text" data-placeholder="PMT Calc" class="pmt_15_3_" readonly="readonly">
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
                                                          
                                                            



                                                        <td><span class='indicator i-@php if (in_array("East", $bank_account) && in_array("AA-bank", $settings))
                                                            {
                                                                echo "green";
                                                            }else{
                                                                echo "red";
                                                            } @endphp'>1</span></td>
                                                              

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
                                                                    <input type="hidden" name="bank_" id="bank_aa" value="AA">
                                                                    <td><input readonly type="text" name="loanfee_" id="loanfee_aa" class='_b loanfee_aa @php if (in_array("East", $bank_account) && in_array("AA-bank", $settings))
                                                                    { echo "green"; }else{ echo "red"; } @endphp' value="{{$cb_AA->loan_fee}}"></td> 
                                                                </tr>
                                                                <tr>
                                                                    <td><input readonly type="text" class="_b loantime_aa" name="loantime_" id="loantime_aa" value=" {{$cb_AA->loan_time}}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input readonly type="text" name="interest_" id="interest_aa" class="_b interest_aa" value="{{$cb_AA->loan_interest}}"></td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td class="mr_onee"><input type="text" id="mr_one_" class='mr_one_ @php if (in_array("East", $bank_account) && in_array("AA-bank", $settings))
                                                                    { echo "green"; }else{ echo "red"; } @endphp' readonly="readonly"></td>
                                                                    
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                            
                                                    <table>
                                                        <thead>
                                                           <tr>  
                                                                

                                                                <td><span class='indicator i-@php if (in_array("Workers", $bank_account) && in_array("DD-bank", $settings))
                                                                {
                                                                    echo "green";
                                                                }else{
                                                                    echo "red";
                                                                } @endphp'>1</span></td>

                                                                
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
                                                                    <td><input readonly type="text" name="loanfee_" id="loanfee_dd" class='_dd loanfee_dd @php if (in_array("Workers", $bank_account) && in_array("DD-bank", $settings))
                                                                    { echo "green"; }else{ echo "red"; } @endphp' value="{{$cb_DD->loan_fee}}"></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td><input readonly type="text" name="loantime_" class="_dd loantime_dd"  id="loantime_dd" value="{{$cb_DD->loan_time}}"></td>
                                                                    
                                                                </tr>
                                                                <tr>

                                                                    <td><input readonly type="text" name="interest_" class="_dd interest_dd"  id="interest_dd" value="{{$cb_DD->loan_interest}}"></td>
                                                                    
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td class="mr_twoo"><input type="text" id="mr_two_" class='mr_two_ @php if (in_array("Workers", $bank_account) && in_array("DD-bank", $settings))
                                                                    { echo "green"; }else{ echo "red"; } @endphp' readonly="readonly"></td>
                                                                    
                                                                </tr>
                                                                 
                                                                 
                                                          
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td><span class='indicator i-@php if (in_array("National", $bank_account) && in_array("EE-bank", $settings))
                                                                {
                                                                    echo "green";
                                                                }else{
                                                                    echo "red";
                                                                } @endphp'>1</span></td>
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
                                                                    <td><input readonly type="text" name="loanfee_" class='ee_ loanfee_ee @php if (in_array("National", $bank_account) && in_array("EE-bank", $settings))
                                                                    { echo "green"; }else{ echo "red"; } @endphp' id="loanfee_ee" value="{{$cb_EE->loan_fee}}"></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td><input readonly type="text" name="loantime_" class="ee_ loantime_ee" id="loantime_ee" value="{{$cb_EE->loan_time}}"></td>
                                                                    
                                                                </tr>
                                                                <tr>

                                                                    <td><input readonly type="text" name="interest_" class="ee_ interest_ee" id="interest_ee" value="{{$cb_EE->loan_interest}}"></td>
                                                                    
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td class="mr_threee"> <input type="text" id="mr_three_" class='mr_three @php if (in_array("National", $bank_account) && in_array("EE-bank", $settings))
                                                                    { echo "green"; }else{ echo "red"; } @endphp' readonly="readonly"></td>
                                                                    
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
                                            
                                            <input id="has_loanA111" type="radio" name="additional_loans" value="yes" class="additional_loans_15" <?php if($ques15 != "" && $ques15 =='Yes'){ echo 'checked=checked'; } else{ } ?>>
                                            <label for="has_loanA111"><h1>15.1 Has_Loans</h1><span>Yes</span></label>
                                        </div>
                                        <div class="form-group">
                                            
                                            <input id="no_loanA121" type="radio" name="additional_loans" value="no" class="admin-btn-red" class="additional_loans_15" <?php if($ques15 != "" && $ques15 =='I do not know of any additional loans'){ echo 'checked=checked'; } else{ } ?>>
                                            <label for="no_loanA121"><h1>15.2 No_Loans</h1><span>No</span></label>
                                        </div>
                                        </div>
                                   
                                       <div class="A_table-input">
                                        <div class="form-group">
                                            <i class="fa fa-arrow-right"></i>
                                            <p>15.11: Loan_Fee (decrease mortgage fee 11.3)</p>
                                              <input type="text" name="fifteen_total_sum_loan" class="fifteen_total_sum_loan_" id="fifteen_total_sum_loan_"  data-placeholder="Loan_Fee_Sum">
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
                                    <div class="form-submittion">
                                        <!-- <input type="submit" name="fifteenForm" value="Save" class="fifteenForm"></div> -->
                                      {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="main-content a-main">
                    <div class="container-fluid">
                        <div class="offer-tabs A_return_algo ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Monthly Return Algo</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="a-month-return">
                                                <div class="col-2">
                                                    <span>20.2 New_PMT_Algo</span> (Wanted MR)
                                                </div>
                                                <div class="col-2">
                                                    <input  type="text" readonly="readonly" name="new_pmt_algo_value" id="new_pmt_algo_value" class="new_pmt_algo_value">
                                                   <!--  <button class="a-time-selection">1 - 10m</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="a-month-return">
                                                <div class="col-2">
                                                    <span>12.2 Req_NPER</span> (Wanted Years)
                                                </div>
                                                <div class="col-2">
                                                    <input type="text" id="wanted-years" name="monthly_refund_input" class="monthly_refund_input form-control" data-placeholder="4-30" onkeyup="this.value=addCommas(this.value);"   value="<?php if($ques12_1 != ""){ echo $ques12_1 ; } else{ } ?>"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                                    @php


                                    if(isset($maindata_ques_11_extra) && isset($maindata_ques_11_extra[0])){
                                        $property_value = $maindata_ques_11_extra[0]->meta_value;
                                    }else{
                                        $property_value = "";
                                    }


                                    if(isset($maindata_ques_11_2) && isset($maindata_ques_11_2[1])){
                                        $property_market_value = $maindata_ques_11_2[1]->meta_value;
                                    }else{
                                        $property_market_value = "";
                                    }


                                    @endphp


                        <div class="row first-tab">
                            <div class="A_table-div">
                                <div class="col-md-6">
                                    <div class="A_table-input">
                                        <div class="form-group">
                                            <p>11.1 Property_Value</p>
                                            <input type="text" class="form-control property_value_1_ eleven_two_" id="property-value-1-" name="property_value_1"  onkeyup="this.value=addCommas(this.value);"  value="<?php if($property_value != ""){ echo $property_value ; } else{ echo"0"; } ?>" />
                                        </div>
                                    </div>
                                    <div class="main-content a-main">
                                        <div class="container-flui">
                                            <div class="offer-tabs A_return_algo">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Give Discount If Match to Q6</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="a-month-return">
                                                                    <div class="col-2">
                                                                             @php
                                                                               if(isset($maindata_ques_6) && isset($maindata_ques_6[0])){
                                                                                  $bank_account = $maindata_ques_6[0]->meta_value;
                                                                                   $bank_account = json_decode($bank_account); 
                                                                               }else{
                                                                                   $bank_account = ['asdrrr'];
                                                                                }
                                                                             @endphp
                                                                        <span>Q6 Customer Bank_Account</span>
                                                                    </div>
                                                                    <div class="col-2">
                                                                       <tr>
                                                                            <td class="anoop-kre-ga-kaam">
                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="East" id="sixone" @php if (in_array("East", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="AA">
                                                                                <label for="sixone">AA</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="Discount" id="six1" @php if (in_array("Discount", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="BB">
                                                                                <label for="six1">BB</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="Association" id="six2" @php if (in_array("Association", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="CC">
                                                                                <label for="six2">CC</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="Workers" id="six3" @php if (in_array("Workers", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="DD">
                                                                                <label for="six3">DD</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="National" id="six4" @php if (in_array("National", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id=EE>
                                                                                <label for="six4">EE</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="Treasure" id="six5" @php if (in_array("Treasure", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="FF">
                                                                                <label for="six5">FF</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="Jeruselam" id="six6" @php if (in_array("Jeruselam", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="GG">
                                                                                <label for="six6">GG</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="International" id="six7" @php if (in_array("International", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id=HH>
                                                                                <label for="six7">HH</label>
                                                                            </div>

                                                                            <div class="bank-name-six">
                                                                                <input type="checkbox" name="bank_account[]" class="bank_account1" value="Other" id="six8" @php if (in_array("Other", $bank_account)){ echo"checked='checked'"; }else{ } @endphp data-id="Other">
                                                                                <label for="six8">Other</label>
                                                                            </div>
                                                                            </td>
                                                                        </tr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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





                                <div class="col-md-6">
                                    <div class="A_table-input">
                                        <div class="form-group">
                                            <p>11.4 Property_Market_Value for 11B</p>
                                            <input type="text" class="form-control market_value_ eleven_two_" id="market-value-" name="market_value" onkeyup="this.value=addCommas(this.value);"   value="<?php if($property_market_value != ""){ echo $property_market_value ; } else{ echo"0";} ?>"/> 
                                        </div>
                                        <div class="form-group bank_customer_discount" id="bank_customer_discount">


                                            <h3 class="blue-color">Discount (For The Bank Customers)</h3>


                                            <div class="report-form">
                                                <input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" data-placeholder="-0.5" value="@php echo $discount_fun; @endphp" />
                                                <span class="indicator i-@php echo $class_colour; @endphp">1</span>
                                            </div>





                                        </div>
                                        <div class="form-group">
                                            <p><span class="green">Green </span>- Enabled & have bank match (Bank By Algo = Q6)
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <p><span class="gray">Gray </span>- Enabled & don’t have bank match.</p>
                                        </div>
                                        <div class="form-group">
                                            <p><span class="red">Red </span>- Enabled & don’t have bank match.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-content a-main">
                    <div class="container-fluid">
                        <div class="offer-tabs A_return_algo Req_morg">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Req_Mortgage Algo</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="a-month-return">
                                                <div class="col-2">
                                                    <span>20.1 NEW_Morg_Algo</span>
                                                </div>
                                                <div class="col-2">
                                                    <input type="text" readonly="readonly" class="new_mortgage_algo_value" id="new_mortgage_algo_value">
                                                    <!-- <button class="a-time-selection">1k - 10m</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="A_table-full">
                                                <div class="form-group">
                                                    <p>20.3: Morg_Ratio (%)
                                                        <span>if 11A/C: Calc 20.1/11.1, if 11B:20.1/11.4 </span>
                                                    </p>
                                                     <input type="text" readonly="readonly" name="morg_ratio_value" class="morg_ratio_value" id="morg_ratio_value">
                                                </div>
                                                <div class="form-group">
                                                    <p>20.4: Regulation Table (%)</p>
                                                    <input type="text" readonly="readonly" name="regulation_table_value" class="regulation_table_value" id="regulation_table_value">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content a-main">
                    <div class="container-fluid">
                        <div class="offer-tabs A_return_algo no-height">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Algo</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="A_loan_algo">
                                                <div class="form-group">
                                                    <h1>20.5: Needs Enslavement?
                                                        <span>Yes 20.3>20.4 </span>
                                                    </h1>
                                                    <div class="selection">
                                                        <input id="need_enslavement_no" type="radio" name="algo" value="no">
                                                        <label for="need_enslavement_no">No</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input id="need_enslavement_yes" type="radio" checked name="algo" value="yes">
                                                        <label for="need_enslavement_yes">Yes</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <h1>20.7 Has aprt. for enslavement?</h1>
                                                   
                                                    <div class="selection">
                                                        <input id="algo2NO" type="radio" name="algo2" <?php if(count($maindata_ques_2)){ if($maindata_ques_2[0]->meta_value == "No"){ echo "checked=checked"; } else{ } } ?> value="no">
                                                        <label for="algo2NO">No</label>
                                                    </div>
                                                     <div class="selection">
                                                        <input id="algo2" type="radio"  name="algo2" <?php if(count($maindata_ques_2)){ if($maindata_ques_2[0]->meta_value == "Yes"){ echo "checked=checked"; } else{ } } ?> value="yes">
                                                        <label for="algo2">Yes</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="A_table-full">
                                                <div class="form-group">
                                                    <p>20.6: Minimum Ens (%) </p>
                                                    <input type="text" readonly="readonly" class="min_ens" id="min_ens" name="min_ens">
                                                    <p><span>If Yes: Calc 20.3-20.4, If No: 0%</span></p>
                                                </div>
                                                <div class="form-group">
                                                    <p>2.8 Max Owner_Value</p>
                                                    <input type="text" class="form-control" id="max_owner_value_" name="max_owner_value" value="0" readonly="readonly"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-content a-main">
                    <div class="container-fluid">
                        <div class="offer-tabs A_return_algo regulation">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Regulation table</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <B>20.4 Regulation_table maximum funding:</b> If 20.3 morg_Ratio (%) above regulation table values we need to do enslavment process:
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap small-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>Program B</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>9.1 Investor</td>
                                                                <td>50%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9.2 asset_improver</td>
                                                                <td>70%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9.3 First_aprt</td>
                                                                <td>75%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>Regulation Table</th>
                                                                <th>1.1 Aprt No Morg </th>
                                                                <th>1.2 Aprt With Morg </th>
                                                                <th>1.3 Rental Aprt </th>
                                                                <th>1.4 Free Aprt </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>8.1 New_Aprt</td>
                                                                <td>Program B</td>
                                                                <td>Program B</td>
                                                                <td>75%</td>
                                                                <td>75%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8.2 Second_Hand_Aprt</td>
                                                                <td>Program B</td>
                                                                <td>Program B</td>
                                                                <td>75%</td>
                                                                <td>75%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8.3 Construction</td>
                                                                <td>Program B</td>
                                                                <td>Program B</td>
                                                                <td>75%</td>
                                                                <td>75%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8.4 Mishtaken_Program</td>
                                                                <td>75%</td>
                                                                <td>75%</td>
                                                                <td>75%</td>
                                                                <td>75%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8.5 Any_Causes</td>
                                                                <td>50%</td>
                                                                <td>50%</td>
                                                                <td>50%</td>
                                                                <td>50%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6 normal-full">
            <div class="A_top_head">
                <h3 class="blue-color">Step 1 - Best tree fit</h3>
                <p>Find the best Final_MR with the best fit for<a href="javascript:void(0);"> 20.2 Req_PMT Algo</a> the actual MR. *If Loan type interest is ZERO you must skip. Table should never has 0 intrest value!
                </p>
            </div>
            <div class="funding-tree">
                <div class="col-2 a1">
                    <button class="a-time-selection">Funding Tree</button>
                    <p><span>20.8: Funding Morg</span> Calc: 11.1 *minimum (20.4 or 20.3)<br>[For Q8.4 only: 11.4*minimum (20.4 or 20.3)]
                    </p>
                </div>
                <div class="col-2 a2">
                    <input type="text" name="funding_morg_tree" class="funding_morg_tree" id="funding_morg_tree" placeholder="1k-10m">
                    <span>Ratio:</span>
                    <input type="text" name="funding_ratio_tree" class="funding_ratio_tree new_ratio_class" id="funding_ratio_tree" placeholder="0-75%">
                </div>
                <div class="col-2 a3">
                    <span>20.11 Funding Type Table</span>
                    <select id="funding_type" name="funding_type">
                         <option value="FundingA"> Funding A _1-45 </option>
                         <option value="FundingB">Funding B_45-60 </option>
                         <option value="FundingC">Funding C_60-75 </option>
                         <option value="Any_Cause"> Any Cause_1-50 </option>
                         <!-- <option value="Enslavement">Enslavement_1-50 </option> -->
                    </select>
                </div>
                <div class="col-2 a4">
                    <h3>Best On Loan Tree</h3>
                    <input type="text" placeholder="Start, H1-4, L1-5" class="best_OF_loan_tree" value="">
                </div>
            </div>
        </div>
        <div class="col-md-6 normal-full">
            <div class="funding-tree tree_right">
                <div class="col-2 a1">
                    <button class="a-time-selection">Enslevment Tree</button>
                    <p><span>20.9: Enslevment Morg</span> Calc 11.1*20.6 <br>[For Q8.4 only: 11.4*20.6 >0 set Algo-Error]
                    </p>
                </div>
                <div class="col-2 a2">
                    <input type="text" name="enslavement_morg_tree" class="enslavement_morg_tree" id="enslavement_morg_tree" placeholder="1k-10m">
                    <span>Ratio:</span>
                    <input type="text" name="enslavement_ratio_tree" class="enslavement_ratio_tree" id="enslavement_ratio_tree" placeholder="1%-75%">
                </div>
                <div class="col-2 a4 last">
                    <div class="form-group">
                        <h3>20.7 To check Ens. with algo?</h3>
                       
                        <div class="selection">
                            <input id="checkEnslavement_no" type="radio" name="algo2" value="no">
                            <label for="checkEnslavement_no">No</label>
                        </div>
                         <div class="selection">
                            <input id="checkEnslavement_yes" type="radio"  name="algo2" value="yes">
                            <label for="checkEnslavement_yes">Yes</label>
                        </div>
                        <div class="selection">
                            <input id="checkEnslavement_error" type="radio" name="algo2" value="error">
                            <label for="checkEnslavement_error">Algo Error</label>
                        </div>
                    </div>

                    <div class="A_right_p">
                      
                       <p><b>NO:</b>if [20.3 Morg_ratio <= 20.4 Regulation table].</p>
                        <p><b>YES:</b> if: [Aprt max owner_value 2.8>=20.9] && [20.7 is yes] && [20.5 is yes only].</p>
                       <p><b>Otherwise:</b>Algo Error: "We have a problem please contact support".</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12 if_algo_error">
            <div class="main-content a-main A_final_mr">
                <div class="container-fluid">
                    <div class="offer-tabs A_future_loan">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation " class="tab_A1 active"><a href="#tab_A1" aria-controls="tab_A1" role="tab" data-toggle="tab">Start</a></li>
                            <li role="presentation " class="blue tab_A2"><a href="#tab_A2" aria-controls="tab_A2" role="tab" data-toggle="tab">H1, h2, h3, h4</a></li>
                            <li role="presentation " class=" tab_A3 "><a href="#tab_A3" aria-controls="tab_A" role="tab" data-toggle="tab">l1, l2, l3, l4, l5</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane tab_1 active " id="tab_A1" >
                                <div class="col-md-12">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>Start</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td class="zero-show" id="t1_mortgage1"></td>
                                                                <td id="t1_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t1_interest1" class="zero-show"></td>
                                                                <td id="t1_monthly1" class="zero-show"></td>
                                                                <td id="t1_total1" class="zero-show"></td>
                                                                <td id="t1_finalmr1" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right">2/3</td>
                                                                <td class="zero-show" id="t1_mortgage2"></td>
                                                                <td id="t1_year2" class="b-o-top-right-left" class="zero-show">10</td>
                                                                <td id="t1_interest2" class="zero-show"></td>
                                                                <td id="t1_monthly2" class="zero-show"></td>
                                                                <td id="t1_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 10 years [min B]: recycle A</span> <span class="alert"></span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>Start</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t2_mortgage1" class="hide_for_no "></td>
                                                                <td  id="t2_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t2_interest1" class="hide_for_no"></td>
                                                                <td id="t2_monthly1" class="hide_for_no"></td>
                                                                <td id="t2_total1" class="hide_for_no"></td>
                                                                <td id="t2_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right">2/3</td>
                                                                 <td id="t2_mortgage2" class="hide_for_no"></td>
                                                                <td id="t2_year2" class="b-o-top-right-left">10</td>
                                                                <td id="t2_interest2" class="hide_for_no"></td>
                                                                <td id="t2_monthly2" class="hide_for_no"></td>
                                                                <td id="t2_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 10 years [min B]: recycle A</span> <span class="alert"></span><span class="t-b-c-full red success">** No elegebility</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane tab_2" id="tab_A2">
                                <div class="col-md-12">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <p class="A_final_Mr">
                                                <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-right"></i></a> Need lower <a href="javascript:void(0);">Final_MR</a>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H1</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3
                                                                </td>
                                                                <td id="t3_mortgage1" class="zero-show"></td>
                                                                <td id="t3_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t3_interest1" class="zero-show"></td>
                                                                <td id="t3_monthly1" class="zero-show"></td>
                                                                <td id="t3_total1" class="zero-show"></td>
                                                                <td id="t3_finalmr1" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">Linked</td>
                                                                <td>B</td>
                                                                <td class="b-o-right">1/3</td>
                                                                <td id="t3_mortgage2" class="zero-show"></td>
                                                                <td id="t3_year2"  class="b-o-bottom-right-left">10</td>
                                                                <td id="t3_interest2" class="zero-show"></td>
                                                                <td id="t3_monthly2" class="zero-show"></td>
                                                                <td id="t3_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Not Linked</td>
                                                                <td class="b-o-bottom">E</td>
                                                                <td class="b-o-bottom-right">1/3</td>
                                                                <td id="t3_mortgage3" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t3_year3" name="t3_year3" onchange="sel(3,4)">
                                                                        <option id="t3_year3_o10">10</option>
                                                                        <option id="t3_year3_o11">11</option>
                                                                        <option id="t3_year3_o12">12</option>
                                                                        <option id="t3_year3_o13">13</option>
                                                                        <option id="t3_year3_o14">14</option>
                                                                        <option id="t3_year3_o15">15</option>
                                                                        <option id="t3_year3_o16">16</option>
                                                                        <option id="t3_year3_o17">17</option>
                                                                        <option id="t3_year3_o18">18</option>
                                                                        <option id="t3_year3_o19">19</option>
                                                                        <option id="t3_year3_o20">20</option>
                                                                        <option id="t3_year3_o21">21</option>
                                                                        <option id="t3_year3_o22">22</option>
                                                                        <option id="t3_year3_o23">23</option>
                                                                        <option id="t3_year3_o24">24</option>
                                                                        <option id="t3_year3_o25">25</option>
                                                                        <option id="t3_year3_o26">26</option>
                                                                        <option id="t3_year3_o27">27</option>
                                                                        <option id="t3_year3_o28">28</option>
                                                                        <option id="t3_year3_o29">29</option>
                                                                        <option id="t3_year3_o30">30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t3_interest3" class="zero-show"></td>
                                                                <td id="t3_monthly3" class="zero-show"></td>
                                                                <td id="t3_total3" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 10 years [min B]: recycle A+E, if B=E=10 years recycle only A</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full success">** First do elegebility process for B&gt;E&gt;A according of elegebility TABLE.</span>
                                                    <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H1</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3
                                                                </td>
                                                                <td id="t4_mortgage1" class="hide_for_no"></td>
                                                                <td class="b-o-top-right-left" id="t4_year1">30</td>
                                                                <td id="t4_interest1" class="hide_for_no"></td>
                                                                <td id="t4_monthly1" class="hide_for_no"></td>
                                                                <td id="t4_total1" class="hide_for_no"></td>
                                                                <td id="t4_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">Linked</td>
                                                                <td>B</td>
                                                                <td class="b-o-right">1/3</td>
                                                                <td id="t4_mortgage2" class="hide_for_no"></td>
                                                                <td class="b-o-bottom-right-left" id="t4_year2">10</td>
                                                                <td id="t4_interest2" class="hide_for_no" ></td>
                                                                <td id="t4_monthly2" class="hide_for_no"></td>
                                                                <td id="t4_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Not Linked</td>
                                                                <td class="b-o-bottom">E</td>
                                                                <td class="b-o-bottom-right">1/3</td>
                                                                <td id="t4_mortgage3" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t4_year3" name="t4_year3" onchange="sel(4,3)" >
                                                                        <option id="t4_year3_o10">10</option>
                                                                        <option id="t4_year3_o11">11</option>
                                                                        <option id="t4_year3_o12">12</option>
                                                                        <option id="t4_year3_o13">13</option>
                                                                        <option id="t4_year3_o14">14</option>
                                                                        <option id="t4_year3_o15">15</option>
                                                                        <option id="t4_year3_o16">16</option>
                                                                        <option id="t4_year3_o17">17</option>
                                                                        <option id="t4_year3_o18">18</option>
                                                                        <option id="t4_year3_o19">19</option>
                                                                        <option id="t4_year3_o20">20</option>
                                                                        <option id="t4_year3_o21">21</option>
                                                                        <option id="t4_year3_o22">22</option>
                                                                        <option id="t4_year3_o23">23</option>
                                                                        <option id="t4_year3_o24">24</option>
                                                                        <option id="t4_year3_o25">25</option>
                                                                        <option id="t4_year3_o26">26</option>
                                                                        <option id="t4_year3_o27">27</option>
                                                                        <option id="t4_year3_o28">28</option>
                                                                        <option id="t4_year3_o29">29</option>
                                                                        <option id="t4_year3_o30">30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t4_interest3" class="hide_for_no"></td>
                                                                <td id="t4_monthly3" class="hide_for_no"></td>
                                                                <td id="t4_total3" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 10 years [min B]: recycle A+E, if B=E=10 years recycle only A</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H2</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t5_mortgage1" class="zero-show"></td>
                                                                <td id="t5_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t5_interest1" class="zero-show"></td>
                                                                <td id="t5_monthly1" class="zero-show"></td>
                                                                <td id="t5_total1" class="zero-show"></td>
                                                                <td id="t5_finalmr1" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">not Linked</td>
                                                                <td>E</td>
                                                                <td class="b-o-right">1/3</td>
                                                                <td id="t5_mortgage2" class="zero-show"></td>
                                                                <td id="t5_year2" class="b-o-bottom-right-left">30</td>
                                                                <td id="t5_interest2" class="zero-show"></td>
                                                                <td id="t5_monthly2" class="zero-show"></td>
                                                                <td id="t5_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Not Linked</td>
                                                                <td class="b-o-bottom">C</td>
                                                                <td class="b-o-bottom-right">1/3</td>
                                                                <td id="t5_mortgage3" class="zero-show"></td>
                                                                <td  class="b-r">
                                                                    <select id="t5_year3" name="t5_year3" onchange="sel(5,6)">
                                                                        <option id="t5_year3_o10">10</option>
                                                                        <option id="t5_year3_o11">11</option>
                                                                        <option id="t5_year3_o12">12</option>
                                                                        <option id="t5_year3_o13">13</option>
                                                                        <option id="t5_year3_o14">14</option>
                                                                        <option id="t5_year3_o15">15</option>
                                                                        <option id="t5_year3_o16">16</option>
                                                                        <option id="t5_year3_o17">17</option>
                                                                        <option id="t5_year3_o18">18</option>
                                                                        <option id="t5_year3_o19">19</option>
                                                                        <option id="t5_year3_o20">20</option>
                                                                        <option id="t5_year3_o21">21</option>
                                                                        <option id="t5_year3_o22">22</option>
                                                                        <option id="t5_year3_o23">23</option>
                                                                        <option id="t5_year3_o24">24</option>
                                                                        <option id="t5_year3_o25">25</option>
                                                                        <option id="t5_year3_o26">26</option>
                                                                        <option id="t5_year3_o27">27</option>
                                                                        <option id="t5_year3_o28">28</option>
                                                                        <option id="t5_year3_o29">29</option>
                                                                        <option id="t5_year3_o30">30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t5_interest3" class="zero-show" class="zero-show"></td>
                                                                <td id="t5_monthly3" class="zero-show" class="zero-show"></td>
                                                                <td id="t5_total3" class="zero-show" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min C]: recycle A+E. if C=E=A=30 years don't do recycle.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H2</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t6_mortgage1" class="hide_for_no"></td>
                                                                <td  id="t6_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t6_interest1" class="hide_for_no"></td>
                                                                <td id="t6_monthly1" class="hide_for_no"></td>
                                                                <td id="t6_total1" class="hide_for_no"></td>
                                                                <td id="t6_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">not Linked</td>
                                                                <td>E</td>
                                                                <td class="b-o-right">1/3</td>
                                                                <td id="t6_mortgage2" class="hide_for_no"></td>
                                                                <td id="t6_year2" class="b-o-bottom-right-left">30</td>
                                                                <td id="t6_interest2" class="hide_for_no"></td>
                                                                <td id="t6_monthly2" class="hide_for_no"></td>
                                                                <td id="t6_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Not Linked</td>
                                                                <td class="b-o-bottom">C</td>
                                                                <td class="b-o-bottom-right">1/3</td>
                                                                <td id="t6_mortgage3" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t6_year3" name="t6_year3" onchange="sel(6,5)">
                                                                        <option id="t6_year3_o10">10</option>
                                                                        <option id="t6_year3_o11">11</option>
                                                                        <option id="t6_year3_o12">12</option>
                                                                        <option id="t6_year3_o13">13</option>
                                                                        <option id="t6_year3_o14">14</option>
                                                                        <option id="t6_year3_o15">15</option>
                                                                        <option id="t6_year3_o16">16</option>
                                                                        <option id="t6_year3_o17">17</option>
                                                                        <option id="t6_year3_o18">18</option>
                                                                        <option id="t6_year3_o19">19</option>
                                                                        <option id="t6_year3_o20">20</option>
                                                                        <option id="t6_year3_o21">21</option>
                                                                        <option id="t6_year3_o22">22</option>
                                                                        <option id="t6_year3_o23">23</option>
                                                                        <option id="t6_year3_o24">24</option>
                                                                        <option id="t6_year3_o25">25</option>
                                                                        <option id="t6_year3_o26">26</option>
                                                                        <option id="t6_year3_o27">27</option>
                                                                        <option id="t6_year3_o28">28</option>
                                                                        <option id="t6_year3_o29">29</option>
                                                                        <option id="t6_year3_o30">30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t6_interest3" class="hide_for_no"></td>
                                                                <td id="t6_monthly3" class="hide_for_no"></td>
                                                                <td id="t6_total3" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min C]: recycle A+E. if C=E=A=30 years don't do recycle.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H3</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t7_mortgage1" class="zero-show"></td>
                                                                <td id="t7_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t7_interest1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t7_monthly1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t7_total1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t7_finalmr1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">Linked</td>
                                                                <td>D</td>
                                                                <td  class="b-o-right">0.333</td>
                                                                <td id="t7_mortgage2" class="zero-show"></td>
                                                                <td id="t7_year2" class="b-o-bottom-right-left" class="zero-show">30</td>
                                                                <td id="t7_interest2" class="zero-show"></td>
                                                                <td id="t7_monthly2" class="zero-show"></td>
                                                                <td id="t7_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Not Linked</td>
                                                                <td class="b-o-bottom">C</td>
                                                                <td class="b-o-bottom-right">0.333</td>
                                                                <td id="t7_mortgage3" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t7_year3" name="t7_year3" onchange="sel(7,8)">
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t7_interest3" class="zero-show"></td>
                                                                <td id="t7_monthly3" class="zero-show"></td>
                                                                <td id="t7_total3" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min C]: recycle A+E. if C=E=A=30 years don't do recycle.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H3</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t8_mortgage1" class="hide_for_no"></td>
                                                                <td id="t8_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t8_interest1" class="hide_for_no"></td>
                                                                <td id="t8_monthly1" class="hide_for_no"></td>
                                                                <td id="t8_total1" class="hide_for_no"></td>
                                                                <td id="t8_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">Linked</td>
                                                                <td>D</td>
                                                                <td class="b-o-right">0.333</td>
                                                                <td id="t8_mortgage2" class="hide_for_no"></td>
                                                                <td id="t8_year2" class="b-o-bottom-right-left">30</td>
                                                                <td id="t8_interest2" class="hide_for_no"></td>
                                                                <td id="t8_monthly2" class="hide_for_no"></td>
                                                                <td id="t8_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Not Linked</td>
                                                                <td class="b-o-bottom">C</td>
                                                                <td class="b-o-bottom-right">0.333</td>
                                                                <td id="t8_mortgage3" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t8_year3" name="t8_year3" onchange="sel(8,7)" >
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t8_interest3" class="hide_for_no"></td>
                                                                <td id="t8_monthly3" class="hide_for_no"></td>
                                                                <td id="t8_total3" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min C]: recycle A+D. if A=D=C=30 years don't do recycle.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H4</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t9_mortgage1" class="zero-show"></td>
                                                                <td id="t9_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t9_interest1" class="zero-show"></td>
                                                                <td id="t9_monthly1" class="zero-show"></td>
                                                                <td id="t9_total1" class="zero-show"></td>
                                                                <td id="t9_finalmr1" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">Linked</td>
                                                                <td>D</td>
                                                                <td class="b-o-right">1/3</td>
                                                                <td id="t9_mortgage2" class="zero-show"></td>
                                                                <td id="t9_year2" class="b-o-bottom-right-left" class="zero-show">30</td>
                                                                <td id="t9_interest2" class="zero-show"></td>
                                                                <td id="t9_monthly2" class="zero-show"></td>
                                                                <td id="t9_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right">1/3</td>
                                                                <td id="t9_mortgage3" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t9_year3" name="t9_year3" onchange="sel(9,10)" >
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t9_interest3" class="zero-show" class="zero-show"></td>
                                                                <td id="t9_monthly3" class="zero-show" class="zero-show"></td>
                                                                <td id="t9_total3" class="zero-show" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min C]: recycle A+D. if A=D=C=30 years don't do recycle.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full success">** First do elegebility process for B>D>A according of elegebility TABLE.</span>
                                                    <!-- <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>H4</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right">1/3</td>
                                                                <td id="t10_mortgage1" class="hide_for_no"></td>
                                                                <td id="t10_year1" class="b-o-top-right-left">30</td>
                                                                <td id="t10_interest1" class="hide_for_no"></td>
                                                                <td id="t10_monthly1" class="hide_for_no"></td>
                                                                <td id="t10_total1" class="hide_for_no"></td>
                                                                <td id="t10_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-left">Linked</td>
                                                                <td>D</td>
                                                                <td class="b-o-right">1/3</td>
                                                                <td id="t10_mortgage2" class="hide_for_no" ></td>
                                                                <td id="t10_year2" class="b-o-bottom-right-left">30</td>
                                                                <td id="t10_interest2" class="hide_for_no"></td>
                                                                <td id="t10_monthly2" class="hide_for_no"></td>
                                                                <td id="t10_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right">1/3</td>
                                                                <td id="t10_mortgage3" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t10_year3" name="t10_year3" onchange="sel(10,9)" >
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t10_interest3" class="hide_for_no"></td>
                                                                <td id="t10_monthly3" class="hide_for_no"></td>
                                                                <td id="t10_total3" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min B]: recycle A+D. if A=D=B=30 years don't do recycle.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <!-- <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane tab_3 " id="tab_A3">
                                <div class="col-md-12">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <p class="A_final_Mr">
                                                <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-right"></i></a> Need lower <a href="javascript:void(0);">Final_MR</a>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L1</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">linked</td>
                                                                <td class="b-o-top">B</td>
                                                                <td class="b-o-top-right-left">2/3</td>
                                                                <td id="t11_mortgage1" class="zero-show"></td>
                                                                <td id="t11_year1" class="b-o">10</td>
                                                                <td id="t11_interest1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t11_monthly1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t11_total1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t11_finalmr1" class="zero-show" class="zero-show" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">prime</td>
                                                                <td class="b-o-bottom">A</td>
                                                                <td class="b-o-bottom-right-left">1/3</td>
                                                                <td id="t11_mortgage2" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t11_year2" name="t11_year2" onchange="sel_(11,12)">
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t11_interest2" class="zero-show" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t11_monthly2" class="zero-show" class="zero-show" class="zero-show" class="zero-show"></td>
                                                                <td id="t11_total2" class="zero-show" class="zero-show" class="zero-show" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 10 years [min B]: recycle A</span> <span class="alert">Y go from 30 to 25</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L1</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">linked</td>
                                                                <td class="b-o-top">B</td>
                                                                <td class="b-o-top-right-left">2/3</td>
                                                                <td id="t12_mortgage1" class="hide_for_no"></td>
                                                                <td id="t12_year1" class="b-o">10</td>
                                                                <td id="t12_interest1" class="hide_for_no"></td>
                                                                <td id="t12_monthly1" class="hide_for_no"></td>
                                                                <td id="t12_total1" class="hide_for_no"></td>
                                                                <td id="t12_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">prime</td>
                                                                <td class="b-o-bottom">A</td>
                                                                <td class="b-o-bottom-right-left">1/3</td>
                                                                <td id="t12_mortgage2" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t12_year2" name="t12_year2" onchange="sel_(12,11)">
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t12_interest2" class="hide_for_no"></td>
                                                                <td id="t12_monthly2" class="hide_for_no"></td>
                                                                <td id="t12_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 10 years [min B]: recycle A</span> <span class="alert">Y go from 30 to 25</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L2</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right-left">1/3</td>
                                                                <td id="t13_mortgage1" class="zero-show"></td>
                                                                <td id="t13_year1" class="b-o">25</td>
                                                                <td id="t13_interest1" class="zero-show"></td>
                                                                <td id="t13_monthly1" class="zero-show"></td>
                                                                <td id="t13_total1" class="zero-show"></td>
                                                                <td id="t13_finalmr1" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right-left">2/3</td>
                                                                <td id="t13_mortgage2" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t13_year2" name="t13_year2" onchange="sel_(13,14)" >
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t13_interest2" class="zero-show"></td>
                                                                <td id="t13_monthly2" class="zero-show"></td>
                                                                <td id="t13_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min B]: recycle A</span> <span class="alert">Y go from 10 to 8</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L2</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right-left">1/3</td>
                                                                <td id="t14_mortgage1" class="hide_for_no"></td>
                                                                <td id="t14_year1" class="b-o">25</td>
                                                                <td id="t14_interest1" class="hide_for_no"></td>
                                                                <td id="t14_monthly1" class="hide_for_no"></td>
                                                                <td id="t14_total1" class="hide_for_no"></td>
                                                                <td id="t14_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right-left">2/3</td>
                                                                <td id="t14_mortgage2" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t14_year2" name="t14_year2" onchange="sel_(14,13)">
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t14_interest2" class="hide_for_no"></td>
                                                                <td id="t14_monthly2" class="hide_for_no"></td>
                                                                <td id="t14_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min B]: recycle A</span> <span class="alert">Y go from 10 to 8</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L3</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">linked</td>
                                                                <td class="b-o-top">B</td>
                                                                <td class="b-o-top-right-left">2/3</td>
                                                                <td id="t15_mortgage1" class="zero-show"></td>
                                                                <td id="t15_year1" class="b-o">8</td>
                                                                <td id="t15_interest1" class="zero-show" class="zero-show">0.31</td>
                                                                <td id="t15_monthly1" class="zero-show" class="zero-show"></td>
                                                                <td id="t15_total1" class="zero-show" class="zero-show"></td>
                                                                <td id="t15_finalmr1" class="zero-show" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">prime</td>
                                                                <td class="b-o-bottom">A</td>
                                                                <td class="b-o-bottom-right-left">1/3</td>
                                                                <td id="t15_mortgage2" class="zero-show">443333</td>
                                                                <td class="b-r">
                                                                    <select id="t15_year2" name="t15_year2" onchange="sel_(15,16)">
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                    </select>
                                                                </td>
                                                                <td class="zero-show" id="t15_interest2" class="zero-show">0.2</td>
                                                                <td id="t15_monthly2" class="zero-show">7531</td>
                                                                <td id="t15_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 8 years [min B]: recycle A</span> <span class="alert">Y go from 25 to 20</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L3</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">linked</td>
                                                                <td class="b-o-top">B</td>
                                                                <td class="b-o-top-right-left">2/3</td>
                                                                <td id="t16_mortgage1" class="hide_for_no"></td>
                                                                <td id="t16_year1" class="b-o">8</td>
                                                                <td id="t16_interest1" class="hide_for_no"></td>
                                                                <td id="t16_monthly1" class="hide_for_no"></td>
                                                                <td id="t16_total1" class="hide_for_no"></td>
                                                                <td id="t16_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">prime</td>
                                                                <td class="b-o-bottom">A</td>
                                                                <td class="b-o-bottom-right-left">1/3</td>
                                                                <td id="t16_mortgage2" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t16_year2" name="t16_year2" onchange="sel_(16,15)">
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t16_interest2" class="hide_for_no"></td>
                                                                <td id="t16_monthly2" class="hide_for_no"></td>
                                                                <td id="t16_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 8 years [min B]: recycle A</span> <span class="alert">Y go from 25 to 20</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L4</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right-left">1/3</td>
                                                                <td id="t17_mortgage1" class="zero-show"></td>
                                                                <td id="t17_year1" class="b-o">20</td>
                                                                <td id="t17_interest1" class="zero-show" class="zero-show"></td>
                                                                <td id="t17_monthly1" class="zero-show" class="zero-show"></td>
                                                                <td id="t17_total1" class="zero-show" class="zero-show"></td>
                                                                <td id="t17_finalmr1" class="zero-show" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right-left">2/3</td>
                                                                <td id="t17_mortgage2" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t17_year2" name="t17_year2" onchange="sel_(17,18)" >
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t17_interest2" class="zero-show"></td>
                                                                <td id="t17_monthly2" class="zero-show"></td>
                                                                <td id="t17_total2" class="zero-show">&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min B]: recycle A</span> <span class="alert">Y go from 8 to 4</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 if_no_option">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L4</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">Prime</td>
                                                                <td class="b-o-top">A</td>
                                                                <td class="b-o-top-right-left">1/3</td>
                                                                <td id="t18_mortgage1" class="hide_for_no"></td>
                                                                <td id="t18_year1" class="b-o">20</td>
                                                                <td id="t18_interest1" class="hide_for_no"></td>
                                                                <td id="t18_monthly1" class="hide_for_no"></td>
                                                                <td id="t18_total1" class="hide_for_no"></td>
                                                                <td id="t18_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">Linked</td>
                                                                <td class="b-o-bottom">B</td>
                                                                <td class="b-o-bottom-right-left">2/3</td>
                                                                <td id="t18_mortgage2" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t18_year2" name="t18_year2" onchange="sel_(18,17)">
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                    </select>
                                                                </td>
                                                                <td id="t18_interest2" class="hide_for_no"></td>
                                                                <td id="t18_monthly2" class="hide_for_no"></td>
                                                                <td id="t18_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After Y years [min B]: recycle A</span> <span class="alert">Y go from 8 to 4</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L5</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">linked</td>
                                                                <td class="b-o-top">B</td>
                                                                <td class="b-o-top-right-left">2/3</td>
                                                                <td id="t19_mortgage1" class="zero-show"></td>
                                                                <td id="t19_year1" class="b-o">4</td>
                                                                <td id="t19_interest1" class="zero-show" ></td>
                                                                <td id="t19_monthly1" class="zero-show"></td>
                                                                <td id="t19_total1" class="zero-show"></td>
                                                                <td id="t19_finalmr1" class="zero-show"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">prime</td>
                                                                <td class="b-o-bottom">A</td>
                                                                <td class="b-o-bottom-right-left">1/3</td>
                                                                <td id="t19_mortgage2" class="zero-show"></td>
                                                                <td class="b-r">
                                                                    <select id="t19_year2" name="t19_year2" onchange="sel_(19,20)">
                                                                         <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                    </select></td>
                                                                <td id="t19_interest2" class="zero-show"></td>
                                                                <td id="t19_monthly2" class="zero-show"></td>
                                                                <td id="t19_total2" class="zero-show">&nbsp;</td>
                                                                <td class="zero-show">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 4 years [min B]: recycle A. if A=B=4 don’t do recycle.</span> <span class="alert">Y go from 20 to 4</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    <!-- <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6  class="hide_for_no"">
                                            <div class="online-clerk-wrap left-table">
                                                <div class="table-container online-customers-table">
                                                    <table style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th>L5</th>
                                                                <th>Loan Type (T)</th>
                                                                <th>Part (P)</th>
                                                                <th>Mortgage (M)</th>
                                                                <th>Years (Y)</th>
                                                                <th>Intrest (I)</th>
                                                                <th>Monthly Return (MR)</th>
                                                                <th>Total_MR</th>
                                                                <th>Final_MR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-o-top-left">linked</td>
                                                                <td class="b-o-top">B</td>
                                                                <td class="b-o-top-right-left">2/3</td>
                                                                <td id="t20_mortgage1" class="hide_for_no"></td>
                                                                <td id="t20_year1" class="b-o">4</td>
                                                                <td id="t20_interest1" class="hide_for_no"></td>
                                                                <td id="t20_monthly1" class="hide_for_no"></td>
                                                                <td id="t20_total1" class="hide_for_no"></td>
                                                                <td id="t20_finalmr1" class="hide_for_no"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-o-bottom-left">prime</td>
                                                                <td class="b-o-bottom">A</td>
                                                                <td class="b-o-bottom-right-left">1/3</td>
                                                                <td id="t20_mortgage2" class="hide_for_no"></td>
                                                                <td class="b-r">
                                                                    <select id="t20_year2" name="t20_year2" onchange="sel_(20,19)" >
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                    </select></td>
                                                                <td id="t20_interest2" class="hide_for_no"></td>
                                                                <td id="t20_monthly2" class="hide_for_no"></td>
                                                                <td id="t20_total2" class="hide_for_no">&nbsp;</td>
                                                                <td class="hide_for_no">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*After 4 years [min B]: recycle A. if A=B=4 don’t do recycle.</span> <span class="alert">Y go from 20 to 4</span><span class="t-b-c-full red success">** No elegebility</span>
                                                    <!-- <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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