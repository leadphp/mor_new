  @include('layouts.admin_top_header')
 
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
   <div class="main-content a-main bank-interest-admin">
        <div class="container-fluid">
            <div class="col-md-12 text-right top-a-botton">

                <div class="upload-excel-btn">
                    <input type="file" name="bank_interest_file" id="bank_interest_file">
                    <label class="a-time-selection" for="bank_interest_file">Upload Excel For All Banks: Bank Table.xlsx <i class="fa fa-file-excel-o" aria-hidden="true"></i></label>
                </div>
                
               <!--  <button class="a-time-selection">Upload Excel For All Banks: Bank Table.xlsx    <i class="fa fa-file-excel-o" aria-hidden="true"></i></button> -->

            </div>
            <div class="offer-tabs A_future_loan">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Bank interest tables</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="customer-offers">
                        <div class="col-md-8">
                            <form class="redio-design" id="top-1">
                                <span class="radio-heading">Bank Table:</span>
                                <div class="form-group">
                                    <input id="radio1" type="radio" name="bank_name" value="AA" checked>
                                    <label for="radio1">AA - Mizrahi</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio2" type="radio" name="bank_name" value="BB">
                                    <label for="radio2">BB-Discount</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio3" type="radio" name="bank_name" value="CC">
                                    <label for="radio3">CC - Igud</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio4" type="radio" name="bank_name" value="DD">
                                    <label for="radio4">DD- Hapolaim</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio5" type="radio" name="bank_name" value="EE">
                                    <label for="radio5">EE - Leumi</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio6" type="radio" name="bank_name" value="FF">
                                    <label for="radio6">FF - Otsar Hahayal</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio7" type="radio" name="bank_name" value="GG">
                                    <label for="radio7">GG- Jerusalem</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio8" type="radio" name="bank_name" value="HH">
                                    <label for="radio8">HH - Habenleumi</label>
                                </div>
                            </form>


                            <form class="redio-design loan-radio" id="top-2">
                                <span class="radio-heading">Loan Table:</span>
                                <div class="form-group">
                                    <input id="radio9" type="radio" name="fundings" value="FundingA" checked>
                                    <label for="radio9">Funding A _1-45</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio10" type="radio" name="fundings" value="FundingB">
                                    <label for="radio10">Funding B_45-60</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio11" type="radio" name="fundings" value="FundingC">
                                    <label for="radio11">Funding C_60-75</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio12" type="radio" name="fundings" value="Any_Cause">
                                    <label for="radio12">Any Cause_1-50</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio13" type="radio" name="fundings" value="Enslavement">
                                    <label for="radio13">Enslavement_1-50</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <p>Active discount for customer of this bank only (based on Q6 registration)</p>
                            <ul class="upper-right-a">
                                <li>
                                    <div class="controls-container">
                                        <div class="toggle-switch">
                                            <label class="switch">



                                    <input type="checkbox" name="bank_discount_avail" id="bank_discount_avail">




                                    <span class="slider round"></span> </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    Discount (For the bank Customers)
                                </li>
                                <li>
                                    <div class="form-group">
                                        <input type="text" name="bank_discount" id="bank_discount" value="" placeholder="-0.5%">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="table-container database-offers-table prime-delta table-c custom-data-table-render">


                            <table id="bank_interest_table">
                                <tbody>
                                    <tr>
                                        <td>Prime</td>
                                        <td class="a-purple" style="text-align: center;">Const Prime <br/>1.75%</td>
                                        @foreach($details as $data1)
                                        <td>@php echo $data1->prime_delta; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th>Loan Type</th>
                                        <th>Loan Years</th>
                                        @foreach($details as $data2)
                                        <th @php if( $data2->years < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data2->years; @endphp</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Prime</td>
                                        <td>A</td>
                                        @foreach($details as $data3)
                                        <td @php if( $data3->prime < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data3->prime; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Const_Inter_Linked</td>
                                        <td>B</td>
                                        @foreach($details as $data4)
                                        <td @php if( $data4->const_inter_linked < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data4->const_inter_linked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Const_Inter_Unlinked</td>
                                        <td>C</td>
                                        @foreach($details as $data5)
                                        <td @php if( $data5->const_inter_unlinked < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data5->const_inter_unlinked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                     <tr>
                                        <td>Var_inter_5year_linked</td>
                                        <td>D</td>
                                        @foreach($details as $data5)
                                        <td @php if( $data5->var_inter_5year_linked < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data5->var_inter_5year_linked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                     <tr>
                                        <td>Var_inter_5year_Unlinked</td>
                                        <td>E</td>
                                        @foreach($details as $data5)
                                        <td @php if( $data5->var_inter_5year_unlinked < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data5->var_inter_5year_unlinked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Euro_Inter</td>
                                        <td>F</td>
                                        @foreach($details as $data6)
                                        <td @php if( $data6->euro_inter < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data6->euro_inter; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Dollar_inter</td>
                                        <td>G</td>
                                        @foreach($details as $data7)
                                        <td @php if( $data7->dollar_inter < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data7->dollar_inter; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Elegibility_Inter</td>
                                        <td>H</td>
                                        @foreach($details as $data8)
                                        <td @php if( $data8->eligibility_inter < 1){ echo'class="red-make-it"'; } @endphp>@php echo $data8->eligibility_inter; @endphp%</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="prime-table-p">
        <div class="container-fluid">
            <div class="prime-table-outer-p">
                <div class="prime-by-years-p">
                    <div class="prime-by-years-heading-p">
                        <h2>1st year on PrimeTable></h2>
                        <p>Prime by years effected by:</p>
                    </div>
                    <div class="prime-table-form-p">
                        <div class="d-b-select-container d-f f-d-c">
                            <label>Bank Table</label>
                            <select class="selectpicker bank_picker">
                               <option value="AA">AA - Mizrahi</option>
                               <option value="BB">BB-Discount</option>
                               <option value="CC">CC - Igud</option>
                               <option value="DD">DD- Hapolaim</option>
                               <option value="EE">EE - Leu</option>
                               <option value="FF">FF - Otsar Hahayal</option>
                               <option value="GG">GG- Jerusalem</option>
                               <option value="HH">HH - Habenleumi</option> 
                            </select>
                        </div>
                        <div class="d-b-select-container d-f f-d-c">
                            <label>Loan Table</label>
                            <select class="selectpicker fund_picker">
                               <option value="FundingA">Funding A _1-45</option>
                               <option value="FundingB">Funding B_45-60</option>
                               <option value="FundingC">Funding C_60-75</option>
                               <option value="Any_Cause">Any Cause_1-50</option>
                               <option value="Enslavement">Enslavement_1-50</option>
                            </select>
                        </div>
                        <div class="d-b-select-container d-f f-d-c">
                            <label>Years</label>
                            <select class="selectpicker year_picker">
                               @php
                                    for($i=4;$i<=30;$i++){
                                        echo '<option>'.$i.'</option>';
                                    }
                               @endphp
                            </select>
                        </div>
                    </div>
                    <div class="prime-by-years-heading-p">
                        <h2>Years At Prime Table - Based On:</h2>
                            <ul>
                                <li>1. Bank Table</li>
                                <li>2. Loan type (Funding A/B/C/ Any_Cause/Enslavement)</li>
                                <li>3. Years (4-30)</li>
                            </ul>                       
                        <h3>Sensetivity Control:</h3>
                    </div>
                    <div class="prime-table-form-p  sensetivity-prime">
                        <div class="d-b-select-container d-f f-d-c">
                            <label>Sensitivity Prime</label>
                            <select class="selectpicker senstivity_prime">
                               <option value="-2">-2</option>
                               <option value="-1">-1</option>
                               <option value="0" selected="selected">0</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                            </select>
                        </div>
                        <div class="d-b-select-container d-f f-d-c">
                            <label class="Sensitivity-Madad-p ">Sensitivity Madad</label>
                            <select class="selectpicker senstivity_madad">
                               <option value="-2">-2</option>
                               <option value="-1">-1</option>
                               <option value="0" selected="selected">0</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--			prime-table-years-p-->
                <div class="prime-table-years-p">
                    <div class="table-content-heading-p">
                        <h2>Prime Table Years</h2>
                    </div>
                    <div class="upload-excel-btn">
                        <input type="file" name="bank_prime_file" id="bank_prime_file">
                        <label class="a-time-selection" for="bank_prime_file">Upload Excel: Bank Prime.xlsx <i class="fa fa-file-excel-o" aria-hidden="true"></i></label>
                    </div>
                    <div class="prime_years_table">
                        <table class="table table-striped" id="prime_bank_intrest">
                            <thead>
                                <tr>
                                    <th scope="col">Years</th>
                                    <th scope="col">Prime Table</th>
                                    <th scope="col">Prime Year (+0)
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bnb">
                                @php  $ss = array();   @endphp
                                @foreach($bank_prime as $prime)

                                    @php 

                                        $prime_value = $prime->prime;
                                        $total = $prime_value + $prime_delta;
                                        $ss[] = $prime_value + $prime_delta;

                                    @endphp
                                    <tr>
                                        <td>@php echo $prime->years; @endphp</td>
                                        <td>@php echo $prime->prime; @endphp%</td>
                                        <td>@php echo $total; @endphp%</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--			prime-table-years-p prime-month-p-->
                <div class="prime-table-years-p prime-month-p">
                    <div class="table-content-heading-p">
                        <ul>
                            <li>
                                <h2><span>(A Only)</span><br>Prime Years</h2>
                                <p>Linked Table</p>
                            </li>
                            <li>
                                Show Years
                                <div class="d-b-select-container d-f f-d-c">
                                    <select class="selectpicker selectpicker_prime_bank_table" name="selectpicker_prime_bank_table">
                                        <!--  <option>1-30</option> -->
                                        @php
                                            for($i=1;$i<=30;$i++){
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                        @endphp
                                      </select>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="prime_months_table">
                        <table class="table table-striped" id="prime_months_table">
                            <thead>
                                <tr>
                                    <th scope="col">Month</th>
                                    <th scope="col">Prime Month</th>
                                </tr>
                            </thead>
                            <tbody class="test_prime_table dnd">

                                @php
                                $dd = 1;
                                $bb = 0;
                                    for($i=1;$i<=360;$i++){
                                        if(count($ss) != 0){
                                            $value = $ss[$bb] / 12;
                                            $value = number_format((float)$value, 2, '.', '');

                                            echo '<tr class="select_prime_all select_prime_'.$dd.'" ><td>'.$i.'</td><td>'.$value.'</td></tr>';
                                            if($i % 12 == 0){
                                            $dd++;
                                            $bb++;
                                            }
                                        }
                                    }
                                @endphp
                               
                            </tbody>
                        </table>
                    </div>

                    <div class="to-create-link-p">
                        <a><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                        <p>To create linked column at final table use this for Prime (A Only)</p>
                    </div>
                </div>
                <!--			maded-table-years-p-->
                <div class="maded-table-years-p">
                    <div class="table-content-heading-p">
                        <h2>Maded Table Years</h2>
                    </div>
                    <div class="upload-excel-btn">
                        <input type="file" name="bank_madad_file" id="bank_madad_file">
                        <label class="a-time-selection" for="bank_madad_file">Upload Excel: Bank Madad.xlsx <i class="fa fa-file-excel-o" aria-hidden="true"></i></label>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Years</th>
                                <th scope="col">Madad Years(+0)</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($bank_madad as $bank_m)
                            <tr>
                                <td>@php echo $bank_m->years; @endphp</td>
                                <td>@php echo $bank_m->madad; @endphp%</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!--maded-table-month-p-->
                <div class="maded-table-month-p">
                    <div class="table-content-heading-p">
                        <ul>
                            <li>
                                <h2><span>(B+D+H)</span><br>Madad Month</h2>
                                <p>Linked Table</p>
                            </li>
                            <li>
                                Show Years
                                <div class="d-b-select-container d-f f-d-c">
                                    <select class="selectpicker selectpicker_madad_bank_table" name="selectpicker_madad_bank_table">
                                        <!-- <option>1-30</option> -->
                                        @php
                                            for($i=1;$i<=30;$i++){
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                        @endphp
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Month</th>
                                <th scope="col">Madad Mult</th>
                                <th scope="col">Madad Month</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php
                            $dd = 1;
                            $ff = 1;
                            $madad_month = 0; 
                                for($i=1;$i<=360;$i++){

                                    $bank_prime = \App\Bank_madad::where('years',$ff)->get();

                                    if(count($bank_prime) != 0){
                                    $final_prime_val = $bank_prime[0]->madad / 12;
                                    $final_prime_val = number_format((float)$final_prime_val, 3, '.', '');

                                    if($i == 1){
                                    $madad_month = $final_prime_val;
                                    }else{
                                    $madad_val1 = 1 + $final_prime_val / 100;

                                    $madad_val2 = 1 + $madad_month / 100;

                                    $madad_val3 = $madad_val1 * $madad_val2;

                                    $madad_month1 = $madad_val3 - 1;

                                    $madad_month = $madad_month1 * 100;
                                    $madad_month = number_format((float)$madad_month, 3, '.', '');
                                    }

                                    echo '<tr class="select_madad_all select_madad_'.$dd.'"><td>'.$i.'</td><td>'.$final_prime_val.'%</td><td>'.$madad_month.'%</td></tr>';

                                    if($i % 12 == 0){
                                    $dd++;
                                    $ff++;
                                    }
                                }
                                }
                            @endphp

                        </tbody>
                    </table>
                    <div class="to-create-link-p">
                        <a><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                        <p>To create linked column at final table use this for Madad (B+D+H)</p>
                    </div>
                </div>
                <div class="show-only-tbale-outer-p">
                    <div class="loan-show-only-p">
                        <div class="table-content-heading-p">
                            <h2>Loan Table (Show Only)</h2>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Status of Loan</th>
                                    <th scope="col">Loan Name</th>
                                    <th scope="col">Loan Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banks_loans as $data_banks_loans)
                                <tr>
                                    <td>@php echo $data_banks_loans->loan_status; @endphp</td>
                                    <td>@php echo $data_banks_loans->loan_name_eng; @endphp</td>
                                    <td>@php echo $data_banks_loans->loan_type; @endphp</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="bank-show-only-p">
                        <div class="table-content-heading-p">
                            <h2>Bank Table (Show Only)</h2>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Bank Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bank as $data_bank)
                                <tr>
                                    <td>@php echo $data_bank->bank_code; @endphp</td>
                                    <td>@php echo $data_bank->bank_name_eng; @endphp</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>

</html>


@include('layouts.footer_admin')