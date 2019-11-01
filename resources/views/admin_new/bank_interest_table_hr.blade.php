@include('layouts.admin_top_header_hr')
    <div class="main-content a-main">
        <div class="container-fluid">
            <div class="col-md-12 text-right top-a-botton">
            	<div class="upload-excel-btn">
                    <input type="file" name="bank_interest_file" id="bank_interest_file">
                    <label class="a-time-selection" for="bank_interest_file">העלאה טבלת ריביות קובץ אקסל: Bank Table.xlsx <i class="fa fa-file-excel-o" aria-hidden="true"></i></label>
                </div>
                <!-- <button class="a-time-selection">העלאה טבלת ריביות קובץ אקסל<i class="fa fa-file-excel-o" aria-hidden="true"></i></button> -->
            </div>
            <div class="offer-tabs A_future_loan">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">טבלאות ריבית בנקאיות</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="customer-offers">
                        <div class="col-md-8">
                            <form class="redio-design" id="top-1">
                                <span class="radio-heading">Bank Table:</span>
                                <div class="form-group">
                                    <input id="radio1" type="radio" name="bank_name_hr" value="AA"  checked>
                                    <label for="radio1">AA - Mizrahi</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio2" type="radio" name="bank_name_hr" value="BB">
                                    <label for="radio2">BB-Discount</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio3" type="radio" name="bank_name_hr" value="CC">
                                    <label for="radio3">CC - Igud</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio4" type="radio" name="bank_name_hr" value="DD">
                                    <label for="radio4">DD- Hapolaim</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio5" type="radio" name="bank_name_hr" value="EE">
                                    <label for="radio5">EE - Leumi</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio6" type="radio" name="bank_name_hr" value="FF">
                                    <label for="radio6">FF - Otsar Hahayal</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio7" type="radio" name="bank_name_hr" value="GG">
                                    <label for="radio7">GG- Jerusalem</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio8" type="radio" name="bank_name_hr" value="HH">
                                    <label for="radio8">HH - Habenleumi</label>
                                </div>
                            </form>

                            <form class="redio-design loan-radio" id="top-2">
                                <span class="radio-heading">Loan Table:</span>
                                <div class="form-group">
                                    <input id="radio9" type="radio" name="funding_hr" value = "FundingA" checked>
                                    <label for="radio9">Funding A _1-45</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio10" type="radio" name="funding_hr" value="FundingB">
                                    <label for="radio10">Funding B_45-60</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio11" type="radio" name="funding_hr" value="FundingC">
                                    <label for="radio11">Funding C_60-75</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio12" type="radio" name="funding_hr" value="Any_Cause">
                                    <label for="radio12">Any Cause_1-50</label>
                                </div>
                                <div class="form-group">
                                    <input id="radio13" type="radio" name="funding_hr" value="Enslavement">
                                    <label for="radio13">Enslavement_1-50</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <p>הנחה פעילה ללקוח של בנק זה בלבד (על בסיס רישום Q6)</p>
                            <ul class="upper-right-a">
                                <li>
                                    <div class="controls-container">
                                        <div class="toggle-switch">
                                            <label class="switch">
                                            	@php
                                                if(!empty($discount_status) && $discount_status == 1){
                                                echo'<input type="checkbox" checked name="bank_discount_avail_hr" id="bank_discount_avail_hr">';
                                                }else{
                                                    echo'<input type="checkbox" checked name="bank_discount_avail_hr" id="bank_discount_avail_hr">';
                                                }
                                                @endphp
                                   
                                    <span class="slider round"></span> </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    הנחה (עבור לקוחות הבנק)
                                </li>
                                <li>
                                    <div class="form-group">
                                        @php
                                        if(!empty($discount)){
                                            echo'<input type="text" name="bank_discount_hr" id="bank_discount_hr" value="'.$discount.'%">';
                                        
                                        }else{
                                            echo'<input type="text" name="bank_discount_hr" id="bank_discount_hr" value="0%">';
                                        }
                                        @endphp
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="table-container database-offers-table prime-delta table-c custom-data-table-render-hr">
                            <table id="bank_interest_table_hr">
                                <tbody>
                                    <tr>
                                        <td>פריים דלתא</td>
                                        <td class="a-purple" style="text-align: center;">ריבית פריים קבועה<br/>1.75%</td>
                                        @foreach($details as $data1)
                                        <td>@php echo $data1->prime_delta; @endphp%</td>
                                         @endforeach
                                    </tr>
                                    <tr>
                                        <th>סוג הלוואה</th>
                                        <th>שנות ההלוואה</th>
                                         @foreach($details as $data2)

                                        <th @php if( $data2->years < 0){ echo'class="red-make-it"'; } @endphp>@php echo $data2->years; @endphp</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>מסלול פריים</td>
                                        <td>A</td>
                                         @foreach($details as $data3)
                                        <td @php if( $data3->prime <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data3->prime; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>ריבית קבועה צמודה למדד</td>
                                        <td>B</td>
                                        @foreach($details as $data4)
                                        <td @php if( $data4->const_inter_linked <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data4->const_inter_linked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>ריבית קבועה לא צמודה</td>
                                        <td>C</td>
                                        @foreach($details as $data5)
                                        <td @php if( $data5->const_inter_unlinked <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data5->const_inter_unlinked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>ריבית משתנה כל 5 שנים צמודה</td>
                                        <td>D</td>
                                        @foreach($details as $data5)
                                        <td @php if( $data5->var_inter_5year_linked <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data5->var_inter_5year_linked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>ריבית משתנה כל 5 שנים לא צמודה</td>
                                        <td>E</td>
                                        @foreach($details as $data5)
                                        <td @php if( $data5->var_inter_5year_unlinked <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data5->var_inter_5year_unlinked; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>מסלול יורו</td>
                                        <td>F</td>
                                         @foreach($details as $data6)
                                        <td @php if( $data6->euro_inter <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data6->euro_inter; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>מסלול דולר</td>
                                        <td>G</td>
                                        @foreach($details as $data7)
                                        <td @php if( $data7->dollar_inter <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data7->dollar_inter; @endphp%</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>מסלול זכאות</td>
                                        <td>H</td>
                                        @foreach($details as $data8)
                                        <td @php if( $data8->eligibility_inter <= 0){ echo'class="red-make-it"'; } @endphp>@php echo $data8->eligibility_inter; @endphp%</td>
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
                        <h2>שליטה טבלת פריים</h2>
                        <p>פריים חודשי מושפע מהאופציות</p>
                    </div>
                    <div class="prime-table-form-p">
                        <div class="d-b-select-container d-f f-d-c">
                            <label>שם הבנק</label>
                            <select class="selectpicker bank_picker_all">
                               <option value="AA">AA - Mizrahi</option>
                               <option value="BB">BB - Discount</option>
                               <option value="CC">CC - Igud</option>
                               <option value="DD">DD - Hapolaim</option>
                               <option value="EE">EE - Leumi</option>
                               <option value="FF">FF - Otsar Hahayal</option>
                               <option value="GG">GG - Jerusalem</option>
                               <option value="HH">HH - Habenleumi</option> 
                        </select>
                        </div>
                        <div class="d-b-select-container d-f f-d-c">
                            <label>סוג מימון</label>
                            <select class="selectpicker fund_picker_all">
                               <option value="FundingA">Funding A _1-45</option>
                               <option value="FundingB">Funding B_45-60</option>
                               <option value="FundingC">Funding C_60-75</option>
                               <option value="Any_Cause">Any Cause_1-50</option>
                               <option value="Enslavement">Enslavement_1-50</option>
                        </select>
                        </div>
                        <div class="d-b-select-container d-f f-d-c">
                            <label>שנים</label>
                            <select class="selectpicker year_picker_all">
                            @php
                                    for($i=4;$i<=30;$i++){
                                        echo '<option>'.$i.'</option>';
                                    }
                               @endphp
                        </select>
                        </div>
                    </div>
                    <div class="prime-by-years-heading-p">
                        <h2>טבלה פרייםית פריים מושפעת</h2>
                        <ul>
                            <li>1. שם הבנק</li>
                            <li>2. סוג הלוואה
                            </li>
                            <li>3. שנים 4-30</li>
                        </ul>
                        <h3>בקרת רגישות:</h3>
                    </div>
                    <div class="prime-table-form-p  sensetivity-prime">
                        <div class="d-b-select-container d-f f-d-c">
                            <label>רגישות פריים</label>
                            <select class="selectpicker senstivity_prime_all">
                               <option value="-2">-2</option>
                               <option value="-1">-1</option>
                               <option value="0" selected="selected">0</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                        </select>
                        </div>
                        <div class="d-b-select-container d-f f-d-c">
                            <label class="Sensitivity-Madad-p ">רגישות מדד</label>
                            <select class="selectpicker senstivity_madad_all">
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
                        <h2>טבלת פריים שנים</h2>
                    </div>
                     <div class="upload-excel-btn">
                        <input type="file" name="bank_prime_file" id="bank_prime_file">
                        <label class="a-time-selection" for="bank_prime_file">Upload Excel: Bank Prime.xlsx <i class="fa fa-file-excel-o" aria-hidden="true"></i></label>
                    </div>
                    <div class="prime_years_table_hr">
                    <table class="table table-striped" id="prime_bank_intrest_hr">
                        <thead>
                            <tr>
                                <th scope="col">שנים</th>
                                <th scope="col">ערך מטבלת פריים</th>
                                <th scope="col">פריים שנתי לסילוק
                                </th>
                            </tr>
                        </thead>
                       	<tbody class="bnb">
                                @php  $ss = array();   @endphp
                                @foreach($bank_prime as $prime)

                                    @php 

                                        $prime_value = $prime->prime;
                                        $total = $prime_value + $prime_delta;
                                        $total = number_format((float)$total, 3, '.', '');
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
                                <h2>פריים חודשי</h2>
                                <!-- <p>הצג שנים</p> -->
                            </li>
                            <li>
                                הצג שנים
                                <div class="d-b-select-container d-f f-d-c">
                                    <select class="selectpicker selectpicker_prime_bank_table" name="selectpicker_prime_bank_table">
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
                    <div class="prime_months_table_hr">
                    <table class="table table-striped" id="prime_months_table_hr">
                        <thead>
                            <tr>
                                <th scope="col">חודש</th>
                                <th scope="col">פריים חודשי לסילוק</th>
                            </tr>
                        </thead>
                        <tbody class="test_prime_table dnd">

                                @php
                                $dd = 1;
                                $bb = 0;
                                    for($i=1;$i<=360;$i++){
                                        if(count($ss) != 0){
                                            $value = $ss[$bb] / 12;
                                            $value = number_format((float)$value, 3, '.', '');

                                            echo '<tr class="select_prime_hr_all select_prime_hr_'.$dd.'" ><td>'.$i.'</td><td>'.$value.'%</td></tr>';
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
                        <p>כדי ליצור עמודה מקושרת בטבלה הסופית השתמש באפשרות זו עבור ראש (א בלבד)</p>
                    </div>
                </div>
                <!--			maded-table-years-p-->
                <div class="maded-table-years-p">
                    <div class="table-content-heading-p">
                        <h2>טבלת מדד שנים</h2>
                    </div>
                     <div class="upload-excel-btn">
                        <input type="file" name="bank_madad_file" id="bank_madad_file">
                        <label class="a-time-selection" for="bank_madad_file">Upload Excel: Bank Madad.xlsx <i class="fa fa-file-excel-o" aria-hidden="true"></i></label>
                    </div>
                    <div class="madad_years_div_hr">
                    <table class="table table-striped" id="madad_years_table_hr">
                        <thead>
                            <tr>
                                <th scope="col">שנים</th>
                                <th scope="col">מדד שנתי</th>
                            </tr>
                        </thead>
                       <tbody class="madad_years">
                            @foreach($bank_madad as $bank_m)
                                <tr>
                                    <td>@php echo $bank_m->years; @endphp</td>
                                    <td>@php echo $bank_m->madad; @endphp%</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                </div>
                <!--			maded-table-month-p-->
                <div class="maded-table-month-p">
                    <div class="table-content-heading-p">
                        <ul>
                            <li>
                                <h2>מדד חודשי</h2>
                                <!-- <p>הצג שנים</p> -->
                            </li>
                            <li>
                                הצג שנים
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
                    <div class="madad_months_div_hr">
                    <table class="table table-striped" id="madad_months_table_hr">
                        <thead>
                            <tr>
                                <th scope="col">חודש</th>
                                <th scope="col">מדד ראשוני</th>
                                <th scope="col">מדד חודשי לסילוק</th>
                            </tr>
                        </thead>
                         <tbody class="madad_months">
                                
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
                    </div>
                    <div class="to-create-link-p">
                        <a><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                        <p>כדי ליצור עמודה מקושרת בטבלה הסופית, השתמש באפשרות זו עבור מדד (ב + ד + ח)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">

    section.prime-table-p .upload-excel-btn label.a-time-selection {
    max-width: 390px;
    min-height: 40px;
    background: #00a133;
    color: #fff;
    border: 1px solid #5067aa;
    width: 100%;
    padding: 10px 0;
    border-radius: 45px;
    text-align: center;
    margin-left: 0;
    margin-right: 0px;
}

input[type=file] {
    display: block;
}
section.prime-table-p .upload-excel-btn input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}
.upload-excel-btn label.a-time-selection {
    max-width: 390px;
    min-height: 60px;
    background: #00a133;
    color: #fff;
    border: 1px solid #5067aa;
    width: 100%;
    padding: 21px 0;
    border-radius: 45px;
    text-align: center;
}

input#bank_interest_file {
    position: absolute;
    width: 0px;
    height: 0px;
    right: 0;
    opacity: 0;
}

</style>
@include('layouts.footer_admin_hr')
<script type="text/javascript">
// $(document).ready(function(){

    $("body").on('click','input[name=bank_name_hr]',function(){
	var val = $('input[name = bank_name_hr]:checked').val();
	var val_funding = $('input[name=funding_hr]:checked').val();
	Bank_interest_table_data(val, val_funding);
 	});

   $("body").on('click','input[name=funding_hr]',function(){
	var val = $('input[name=bank_name_hr]:checked').val();
	var val_funding = $('input[name=funding_hr]:checked').val();
	Bank_interest_table_data(val, val_funding);
	});


function Bank_interest_table_data(data1, data2){


    url = 'bank_interest_table_data_hr';
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
                $('#bank_discount_hr').val(yy+'%');

                if(discount_status == 1){
                $('#bank_discount_avail_hr').attr('checked','checked');
                }else{
                $('#bank_discount_avail_hr').removeAttr('checked','checked');   
                }


                $('#bank_interest_table_hr').remove();

                $('.custom-data-table-render-hr').append('<table id="bank_interest_table_hr"><tbody class="table_body"><tr class="bmb"><td>Prime</td><td class="a-purple" style="text-align: center;">Const Prime <br/>1.75%</td>');
                

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
                      
                $('.custom-data-table-render-hr').append('</tbody></table>');       
            }
        }
    });
}

$("body").on('change','.bank_picker_all',function(){
    var val = $(this).val();
    var val_funding = $('.fund_picker_all').val();
    var val_year = $('.year_picker_all').val();
    var senstive_prime = $('.senstivity_prime_all').val();
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});

$("body").on('change','.fund_picker_all',function(){
    var val_funding = $(this).val();
    var val = $('.bank_picker_all').val();
    var val_year = $('.year_picker_all').val();
    var senstive_prime = $('.senstivity_prime_all').val();
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});

$("body").on('change','.year_picker_all',function(){
    var val_year = $(this).val();
    var val = $('.bank_picker_all').val();
    var val_funding = $('.fund_picker_all').val();
    var senstive_prime = $('.senstivity_prime_all').val();
    Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});


$("body").on('change','.senstivity_prime_all',function(){
    var senstive_prime = $(this).val();
	var val_year = $('.year_picker_all').val();
	var val = $('.bank_picker_all').val();
 	var val_funding = $('.fund_picker_all').val();
	Bank_interest_prime_data(val, val_funding, val_year, senstive_prime);

});

$("body").on('change','.senstivity_madad_all',function(){
    var senstive_madad = $(this).val();
    Bank_interest_madad_data(senstive_madad);

});

function Bank_interest_prime_data(data1, data2, data3, data4){


    url = 'bank_interest_prime_data_hr';
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



                $('#prime_bank_intrest_hr').remove();
                $('.prime_years_table_hr').append('<table class="table table-striped" id="prime_bank_intrest_hr"><thead><tr><th scope="col">Years</th><th scope="col">Prime Table</th><th scope="col">Prime Year (+0)</th></tr></thead><tbody class="bnb">');

                $('#prime_months_table_hr').remove();
                $('.prime_months_table_hr').append('<table class="table table-striped" id="prime_months_table_hr"><thead><tr><th scope="col">Month</th><th scope="col">Prime Month</th></tr></thead><tbody class="test_prime_table dnd">');

                counter = 1;     
                $.each(tt, function() { 
                    var prime_hh = this.prime;
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

                        if(counter > 12){
                            $('.dnd').append( '<tr class="select_prime_hr_all select_prime_hr_'+year+'" style="display:none;" ><td>'+counter+'</td><td>'+value+'%</td></tr>');

                        }else{

                            $('.dnd').append( '<tr class="select_prime_hr_all select_prime_hr_'+year+'" ><td>'+counter+'</td><td>'+value+'%</td></tr>');
                        }

                        counter++;
                    }



                });

                $('.prime_years_table_hr').append('</tbody></table>');
                $('.prime_months_table_hr').append('</tbody></table>');  


            }
        }
    });
}

function Bank_interest_madad_data(data4){


    url = 'bank_interest_madad_data_hr';
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

                $('#madad_years_table_hr').remove();
                $('.madad_years_div_hr').append('<table class="table table-striped" id="madad_years_table_hr"><thead><tr><th scope="col">Years</th><th scope="col">Madad Years(+0)</th></tr></thead><tbody class="madad_years">');

                $('#madad_months_table_hr').remove();
                $('.madad_months_div_hr').append('<table class="table table-striped" id="madad_months_table_hr"><thead><tr><th scope="col">Years</th> <th scope="col">Madad Mult</th><th scope="col">Madad Month</th></tr></thead><tbody class="madad_months">');

                 counter = 1;     
                $.each(tt, function() { 
                    var prime_hh = this.madad;
                    var prime = parseFloat(prime_hh) + parseFloat(data4);
                    if(prime < 0){
                      var prime = 0;  
                    }
                    var year = this.years;
					$('.madad_years').append('<tr><td>'+year+'</td><td>'+prime+'%</td></tr>'); 

                     var final_prime_value = prime / 12;
                     var final_prime_val = Number((final_prime_value).toFixed(2));
                     var madad_month = 0;
                    for( i=1; i<=12; i++){
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

                $('.madad_years_div_hr').append('</tbody></table>');
                $('.madad_months_div_hr').append('</tbody></table>');  


            }
        }
    });
}


/*year changer bank prime and madad*/

$(document).ready(function(){
    $('.select_prime_hr_all').hide();
    $('.select_prime_hr_all.select_prime_hr_1').show();   
    var gg = $("body").find('.selectpicker_prime_bank_table');
    $("body").on('change','.selectpicker_prime_bank_table',function(){
        var val = $(this).val();
        //alert(val);
        $('.select_prime_hr_all').hide();
        $('.select_prime_hr_all.select_prime_hr_'+val).show();
    });
});

$(document).ready(function(){
$('.select_madad_all').hide();
$('.select_madad_all.select_madad_1').show();
var gg = $("body").find('.selectpicker_madad_bank_table');
$("body").on('change','.selectpicker_madad_bank_table',function(){
var val = $(this).val();
$('.select_madad_all').hide();
$('.select_madad_all.select_madad_'+val).show();
});
});

</script>