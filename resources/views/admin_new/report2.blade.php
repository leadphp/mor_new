@include('layouts.admin_top_header')
@include('layouts.admin_header_subheader')
  <input type="hidden" name="user_id" id="user_id" value="<?php echo$user_id; ?>">
  <input type="hidden" name="fund_field" class="fund_field">
 <div class="main-content report2-admin">
        <div class="container-fluid">
            <div class="row report-online report-online2">
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
                <label for="radio9">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio10" type="radio" name="select1">
                <label for="radio10">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio11" type="radio" name="select1">
                <label for="radio11">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio12" type="radio" checked name="select1">
                <label for="radio12">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio13" type="radio" name="select1">
                <label for="radio13">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio14" type="radio" name="select1">
                <label for="radio14">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio15" type="radio" name="select1">
                <label for="radio15">1,00,000</label>
            </div>
            <div class="form-group">
                <input id="radio16" type="radio" name="select1">
                <label for="radio16">1,00,000</label>
            </div>
        </form>
                </div>
                <div class="col-md-4">
                    <div class="a-rightside">
                        <h3>Show Bank On Final Report</h3>
                        <form>
                            <div class="form-group">
                                <h2>Show Bank By Algo</h2>
                                <div class="d-b-select-container d-f f-d-c">
                                    <select class="selectpicker" style="display: none;">
                                  <option>AA - Mizrahi </option>
                                  <option>Show All-1</option>
                                  <option>Show All-2</option>
                               </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Final Mortgage Linked</h2>
                                <input type="" placeholder="DD-Hapoalim">
                                <div class="green">Lowest Mortgage</div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                   <!--  <div class="col-md-6 normal-full">
                        <div class="funding-tree">
                            <div class="col-2">
                                <button class="a-time-selection">Funding Tree</button>
                                <h3>Best On Loan Tree</h3>
                                <input type="text" placeholder="Start, H1-4, L1-5">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 normal-full">
                        <div class="funding-tree tree_right">
                            <div class="col-2 a1">
                                <button class="a-time-selection">Enslevment Tree</button>
                            </div>
                        </div>
                    </div> -->
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
                    <input type="text" name="funding_ratio_tree" class="funding_ratio_tree" id="funding_ratio_tree" placeholder="0-75%">
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
                </div>
                <div class="col-md-12">

                    <div class="main-content a-main">
                        <div class="container-fluid">
                            <div class="offer-tabs A_future_loan">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation " class="active"><a href="#top-tab1" aria-controls="top-tab1" role="tab" data-toggle="tab">Step 1 - The best tree fit</a></li>
                                    <li role="presentation " class=""><a href="#top-tab2" aria-controls="top-tab2" role="tab" data-toggle="tab">Step 2 - Prime Split</a></li>
                                    <li role="presentation " class=""><a href="#top-tab3" aria-controls="top-tab3" role="tab" data-toggle="tab">Step 3- Elegebility Split</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="top-tab1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="online-clerk-wrap left-table">
                                                    <div class="table-container online-customers-table">
                                                        <table style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="head">H4</th>
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
                                                                    <td id="head1">Prime</td>
                                                                    <td id="part1">A</td>
                                                                    <td id="partvalue1">0.333</td>
                                                                    <td id="morg1">443333</td>
                                                                    <td id="year1">30</td>
                                                                    <td id="intrest1">0.1</td>
                                                                    <td id="pmt1">3891</td>
                                                                    <td id="totalpmt1">14025</td>
                                                                    <td id="finalpmt1">17092</td>
                                                                </tr>
                                                                <tr>
                                                                    <td id="head2">Linked</td>
                                                                    <td id="part2">D</td>
                                                                    <td id="partvalue2">0.333</td>
                                                                    <td id="morg2">443333</td>
                                                                    <td id="year2">30</td>
                                                                    <td id="intrest2">0.7</td>
                                                                    <td id="pmt2">2950</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td id="head3">Linked</td>
                                                                    <td id="part3">B</td>
                                                                    <td id="partvalue3">0.333</td>
                                                                    <td id="morg3">443333</td>
                                                                    <td id="year3">20</td>
                                                                    <td id="intrest3">0.7</td>
                                                                    <td id="pmt3">2950</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span class="span_test_one">*Recycle B after 10 years.</span> <span class="alert span_test_two">Y go from 10 to 30</span><span class="t-b-c-full success span_test_three">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="online-clerk-wrap left-table">
                                                    <div class="table-container online-customers-table">
                                                        <table style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="head">H4</th>
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
                                                                    <td id="head1_e">Prime</td>
                                                                    <td id="part1_e">A</td>
                                                                    <td id="partvalue1_e">0.333</td>
                                                                    <td id="morg1_e">443333</td>
                                                                    <td id="year1_e">30</td>
                                                                    <td id="intrest1_e">0.1</td>
                                                                    <td id="pmt1_e">3891</td>
                                                                    <td id="totalpmt1_e">14025</td>
                                                                    <td id="finalpmt1_e">17092</td>
                                                                </tr>
                                                                <tr>
                                                                     <td id="head2_e">Linked</td>
                                                                    <td id="part2_e">D</td>
                                                                    <td id="partvalue2_e">0.333</td>
                                                                    <td id="morg2_e">443333</td>
                                                                    <td id="year2_e">30</td>
                                                                    <td id="intrest2_e">0.7</td>
                                                                    <td id="pmt2_e">2950</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                     <td id="head3_e">Linked</td>
                                                                    <td id="part3_e">B</td>
                                                                    <td id="partvalue3_e">0.333</td>
                                                                    <td id="morg3_e">443333</td>
                                                                    <td id="year3_e">20</td>
                                                                    <td id="intrest3_e">0.7</td>
                                                                    <td id="pmt3_e">2950</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span class="e_span_test_one">*Recycle B after 10 years.</span> <span class="alert e_span_test_two">Y go from 10 to 30</span><span class="t-b-c-full red success e_span_test_three">** No elegebility</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="top-tab2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <P class="title-line"><b>Prime split:</b> To euro then to dollar by admin settings (Can split until 10% of mortgage max).</p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="online-clerk-wrap left-table">
                                                    <div class="table-container online-customers-table">
                                                        <table style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="head">H4</th>
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
                                                                    <td class="step2_head1">Prime</td>
                                                                    <td class="step2_type1" ></td>
                                                                    <td class="step2_part1"></td>
                                                                    <td class="step2_morg1"></td>
                                                                    <td class="step2_year1"></td>
                                                                    <td class="step2_int1"></td>
                                                                    <td class="step2_mr1"></td>
                                                                    <td class="step2_totalmr1"></td>
                                                                    <td class="step2_final1"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="step2_head2">Dollar</td>
                                                                    <td class="step2_type2" ></td>
                                                                    <td class="step2_part2">0.1</td>
                                                                    <td class="step2_morg2"></td>
                                                                    <td class="step2_year2"></td>
                                                                    <td class="step2_int2"></td>
                                                                    <td class="step2_mr2"></td>
                                                                    <td class="step2_totalmr2"></td>
                                                                    <td class="step2_final2"></td>
                                                                   
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td class="step2_head3">Euro</td>
                                                                    <td class="step2_type3" ></td>
                                                                    <td class="step2_part3">0.1</td>
                                                                    <td class="step2_morg3"></td>
                                                                    <td class="step2_year3"></td>
                                                                    <td class="step2_int3"></td>
                                                                    <td class="step2_mr3"></td>
                                                                    <td class="step2_totalmr3"></td>
                                                                    <td class="step2_final3"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="step2_head4">Euro</td>
                                                                    <td class="step2_type4" ></td>
                                                                    <td class="step2_part4"></td>
                                                                    <td class="step2_morg4"></td>
                                                                    <td class="step2_year4"></td>
                                                                    <td class="step2_int4"></td>
                                                                    <td class="step2_mr4"></td>
                                                                    <td class="step2_totalmr4"></td>
                                                                    <td class="step2_final4"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="step2_head5">Euro</td>
                                                                    <td class="step2_type5" ></td>
                                                                    <td class="step2_part5"></td>
                                                                    <td class="step2_morg5"></td>
                                                                    <td class="step2_year5"></td>
                                                                    <td class="step2_int5"></td>
                                                                    <td class="step2_mr5"></td>
                                                                    <td class="step2_totalmr5"></td>
                                                                    <td class="step2_final5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="year_val" class="year_val">
                                            <input type="hidden" name="type_val" class="type_val">
                                            <input type="hidden" name="part_val" class="part_val">
                                            <input type="hidden" name="morg_val" class="morg_val">
                                            <input type="hidden" name="pmtr_val" class="pmtr_val">
                                            <input type="hidden" name="intrest_val" class="intrest_val">

                                             <input type="hidden" name="e_year_val" class="e_year_val">
                                            <input type="hidden" name="e_type_val" class="e_type_val">
                                            <input type="hidden" name="e_part_val" class="e_part_val">
                                            <input type="hidden" name="e_morg_val" class="e_morg_val">
                                            <input type="hidden" name="e_pmtr_val" class="e_pmtr_val">
                                            <input type="hidden" name="e_intrest_val" class="e_intrest_val">
                                           
                                            <div class="col-md-6">
                                                <div class="online-clerk-wrap left-table">
                                                    <div class="table-container online-customers-table">
                                                        <table style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="head">H4</th>
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
                                                                    <td class="e_step2_head1">Prime</td>
                                                                    <td class="e_step2_type1" ></td>
                                                                    <td class="e_step2_part1"></td>
                                                                    <td class="e_step2_morg1"></td>
                                                                    <td class="e_step2_year1"></td>
                                                                    <td class="e_step2_int1"></td>
                                                                    <td class="e_step2_mr1"></td>
                                                                    <td class="e_step2_totalmr1"></td>
                                                                    <td class="e_step2_final1"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="e_step2_head2">Dollar</td>
                                                                    <td class="e_step2_type2" ></td>
                                                                    <td class="e_step2_part2">0.1</td>
                                                                    <td class="e_step2_morg2"></td>
                                                                    <td class="e_step2_year2"></td>
                                                                    <td class="e_step2_int2"></td>
                                                                    <td class="e_step2_mr2"></td>
                                                                    <td class="e_step2_totalmr2"></td>
                                                                    <td class="e_step2_final2"></td>
                                                                   
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td class="e_step2_head3">Euro</td>
                                                                    <td class="e_step2_type3" ></td>
                                                                    <td class="e_step2_part3">0.1</td>
                                                                    <td class="e_step2_morg3"></td>
                                                                    <td class="e_step2_year3"></td>
                                                                    <td class="e_step2_int3"></td>
                                                                    <td class="e_step2_mr3"></td>
                                                                    <td class="e_step2_totalmr3"></td>
                                                                    <td class="e_step2_final3"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="e_step2_head4">Euro</td>
                                                                    <td class="e_step2_type4" ></td>
                                                                    <td class="e_step2_part4"></td>
                                                                    <td class="e_step2_morg4"></td>
                                                                    <td class="e_step2_year4"></td>
                                                                    <td class="e_step2_int4"></td>
                                                                    <td class="e_step2_mr4"></td>
                                                                    <td class="e_step2_totalmr4"></td>
                                                                    <td class="e_step2_final4"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="e_step2_head5">Euro</td>
                                                                    <td class="e_step2_type5" ></td>
                                                                    <td class="e_step2_part5"></td>
                                                                    <td class="e_step2_morg5"></td>
                                                                    <td class="e_step2_year5"></td>
                                                                    <td class="e_step2_int5"></td>
                                                                    <td class="e_step2_mr5"></td>
                                                                    <td class="e_step2_totalmr5"></td>
                                                                    <td class="e_step2_final5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="top-tab3">
                                        <div class="">
                                            <div class="row step-3-design">
                                                <div class="col-md-6">
                                                    <ul class="disc-items">
                                                        <li>Elegebility: Give elegebility by score of table we calculated. For B loan type only, by defined order of elegebility loan type</li>
                                                        <li>Do elegebility process if: 1. Elegible (has Aprt), 2. Has loan type B in table only.</li>
                                                    </ul>
                                                    <ul class="d-f a-i-f-e">
                                                        <li><a href="javascript:void(0);" class="main-button button-green button-large elg_yes">Elegeble</a></li>
                                                        <li><a href="javascript:void(0);" class="main-button button-red button-large elg_no">Not Elegeble</a></li>
                                                    </ul>
                                                    <div class="funding-tree">
                                                        <div class="col-2 a1">
                                                            <button class="a-time-selection">Final Loans Table</button>
                                                            <p><span>Elegebility</span>Score</p>
                                                        </div>
                                                        <div class="col-2 a1 input-green">
                                                            <input type="text" class="elegebility_score">
                                                            <p><span>Elegebility</span> Ratio</p>
                                                        </div>
                                                        <div class="col-2 a1">
                                                            <input type="text" placeholder="0.07507" class="elegebility_ratio">
                                                            <p><span>Ratio H: defined </span> (Elegebilty score/20.8 Funding_morg)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 a-f-d">
                                                    <P>Sensetivity Table - Change Prime/ Maded by -2/-1/+0/+1/+2(%)</p>
                                                    <ul class="d-f a-i-f-e">
                                                        <li>
                                                            <p class="green">Sensetivity Prime (A Only)</p>
                                                            <select class="selectpicker" style="display: none;">
                                                    <option>0%</option>
                                                    <option>-2%</option>
                                                    <option>-1%</option>
                                                    <option>+1%</option>
                                                    <option>+2%</option>
                                                 </select>
                                                        </li>
                                                        <li>
                                                            <p class="blue">Sensetivity Madad (B+D+H)</p>
                                                            <select class="selectpicker" style="display: none;">
                                                    <option>0% </option>
                                                    <option>-2%</option>
                                                    <option>-1%</option>
                                                    <option>+1%</option>
                                                    <option>+2%</option>
                                                 </select>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="online-clerk-wrap left-table">
                                                        <div class="table-container online-customers-table">
                                                            <table>
                                                                 <thead>
                                                                <tr>
                                                                    <th class="head">H4</th>
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
                                                            <tbody class="step3_elg">
                                                                <tr>
                                                                    <td class="step2_head1 elg_head1">Prime</td>
                                                                    <td class="step2_type1 elg_type1" ></td>
                                                                    <td class="step2_part1 elg_part1"></td>
                                                                    <td class="step2_morg1 elg_morg1"></td>
                                                                    <td class="step2_year1 elg_year1"></td>
                                                                    <td class="step2_int1 elg_int1"></td>
                                                                    <td class="step2_mr1 elg_mr1"></td>
                                                                    <td class="step2_totalmr1_ elg_totalmr1"></td>
                                                                    <td class="step2_final1_ elg_final1"></td>
                                                                </tr>
                                                                <tr>

                                                                    <td class="step2_head2 elg_head2">Dollar</td>
                                                                    <td class="step2_type2 elg_type2" ></td>
                                                                    <td class="step2_part2 elg_part2">0.1</td>
                                                                    <td class="step2_morg2 elg_morg2"></td>
                                                                    <td class="step2_year2 elg_year2"></td>
                                                                    <td class="step2_int2 elg_int2"></td>
                                                                    <td class="step2_mr2 elg_mr2"></td>
                                                                    <td class="step2_totalmr2 elg_totalmr2"></td>
                                                                    <td class="step2_final2 elg_final2"></td>
                                                                   
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td class="step2_head3 elg_head3">Euro</td>
                                                                    <td class="step2_type3 elg_type3" ></td>
                                                                    <td class="step2_part3 elg_part3">0.1</td>
                                                                    <td class="step2_morg3 elg_morg3"></td>
                                                                    <td class="step2_year3 elg_year3"></td>
                                                                    <td class="step2_int3 elg_int3"></td>
                                                                    <td class="step2_mr3 elg_mr3"></td>
                                                                    <td class="step2_totalmr3 elg_totalmr3"></td>
                                                                    <td class="step2_final3 elg_final3"></td>
                                                                </tr>
                                                                <tr>

                                                                    <td class="step2_head4 elg_head4">Euro</td>
                                                                    <td class="step2_type4 elg_type4" ></td>
                                                                    <td class="step2_part4 elg_part4"></td>
                                                                    <td class="step2_morg4 elg_morg4"></td>
                                                                    <td class="step2_year4 elg_year4"></td>
                                                                    <td class="step2_int4 elg_int4"></td>
                                                                    <td class="step2_mr4 elg_mr4"></td>
                                                                    <td class="step2_totalmr4 elg_totalmr4"></td>
                                                                    <td class="step2_final4 elg_final4"></td>
                                                                </tr>
                                                                <tr>

                                                                    <td class="step2_head5 elg_head5">Euro</td>
                                                                    <td class="step2_type5 elg_type5" ></td>
                                                                    <td class="step2_part5 elg_part5"></td>
                                                                    <td class="step2_morg5 elg_morg5"></td>
                                                                    <td class="step2_year5 elg_year5"></td>
                                                                    <td class="step2_int5 elg_int5"></td>
                                                                    <td class="step2_mr5 elg_mr5"></td>
                                                                    <td class="step2_totalmr5 elg_totalmr5"></td>
                                                                    <td class="step2_final5 elg_final5"></td>
                                                                </tr>
                                                                 <tr>

                                                                    <td class="step2_head6 elg_head6">Elegebility</td>
                                                                    <td class="step2_type6 elg_type6" >H</td>
                                                                    <td class="step2_part6 elg_part6"></td>
                                                                    <td class="step2_morg6 elg_morg6"></td>
                                                                    <td class="step2_year6 elg_year6"></td>
                                                                    <td class="step2_int6 elg_int6"></td>
                                                                    <td class="step2_mr6 elg_mr6"></td>
                                                                    <td class="step2_totalmr6 elg_totalmr6"></td>
                                                                    <td class="step2_final6 elg_final6"></td>
                                                                </tr>
                                                            </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="table-bottom-content d-f j-c-s-b a-i-c">
                                                        <span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="red asda">Never do elegebility split in enslevment red tree!!!</p>
                                                    <div class="online-clerk-wrap left-table">
                                                        <div class="table-container online-customers-table">
                                                            <table>
                                                               <thead>
                                                                <tr>
                                                                    <th class="head">H4</th>
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
                                                                    <td class="e_step2_head1">Prime</td>
                                                                    <td class="e_step2_type1" ></td>
                                                                    <td class="e_step2_part1"></td>
                                                                    <td class="e_step2_morg1"></td>
                                                                    <td class="e_step2_year1"></td>
                                                                    <td class="e_step2_int1"></td>
                                                                    <td class="e_step2_mr1"></td>
                                                                    <td class="e_step2_totalmr1"></td>
                                                                    <td class="e_step2_final1_"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="e_step2_head2">Dollar</td>
                                                                    <td class="e_step2_type2" ></td>
                                                                    <td class="e_step2_part2">0.1</td>
                                                                    <td class="e_step2_morg2"></td>
                                                                    <td class="e_step2_year2"></td>
                                                                    <td class="e_step2_int2"></td>
                                                                    <td class="e_step2_mr2"></td>
                                                                    <td class="e_step2_totalmr2"></td>
                                                                    <td class="e_step2_final2"></td>
                                                                   
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td class="e_step2_head3">Euro</td>
                                                                    <td class="e_step2_type3" ></td>
                                                                    <td class="e_step2_part3">0.1</td>
                                                                    <td class="e_step2_morg3"></td>
                                                                    <td class="e_step2_year3"></td>
                                                                    <td class="e_step2_int3"></td>
                                                                    <td class="e_step2_mr3"></td>
                                                                    <td class="e_step2_totalmr3"></td>
                                                                    <td class="e_step2_final3"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="e_step2_head4">Euro</td>
                                                                    <td class="e_step2_type4" ></td>
                                                                    <td class="e_step2_part4"></td>
                                                                    <td class="e_step2_morg4"></td>
                                                                    <td class="e_step2_year4"></td>
                                                                    <td class="e_step2_int4"></td>
                                                                    <td class="e_step2_mr4"></td>
                                                                    <td class="e_step2_totalmr4"></td>
                                                                    <td class="e_step2_final4"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="e_step2_head5">Euro</td>
                                                                    <td class="e_step2_type5" ></td>
                                                                    <td class="e_step2_part5"></td>
                                                                    <td class="e_step2_morg5"></td>
                                                                    <td class="e_step2_year5"></td>
                                                                    <td class="e_step2_int5"></td>
                                                                    <td class="e_step2_mr5"></td>
                                                                    <td class="e_step2_totalmr5"></td>
                                                                    <td class="e_step2_final5"></td>
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
                <div class="col-md-12">
                    <div class="main-content a-main">
                        <div class="container-fluid">
                            <div class="offer-tabs A_future_loan">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation "><a href="#bottom-tab1" aria-controls="top-tab1" role="tab" data-toggle="tab">Step 4+5 - Create Silukin Tables & Grace</a></li>
                                    <li role="presentation " class=""><a href="#bottom-tab2" aria-controls="bottom-tab2" role="tab" data-toggle="tab">Step 6 - Recycle</a></li>
                                    <li role="presentation " class=""><a href="#bottom-tab3" aria-controls="bottom-tab3" role="tab" data-toggle="tab">Step 7- Investments</a></li>
                                    <li role="presentation " class="active"><a href="#bottom-tab4" aria-controls="bottom-tab4" role="tab" data-toggle="tab">Step 8- Final Silukin Table</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane" id="bottom-tab1">
                                        <div class="col-md-4">
                                            <ul class="disc-items">
                                                <li>Create loan table (Silukin table) by loan types:</li>
                                                <li>Grace implemented on loan types below:<a href="javascript:void(0);"> A>E>D>B>C</a></li>
                                                <li><a href="javascript:void(0);">Give Grace to funding + enslevment tables in this order </a></li>
                                                <li>Based on 10.2 Req_Grace on Total_MR for loan types mentioned above.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="main-content a-main">
                                                <div class="container-fluid">
                                                    <div class="funding-tree report-tree">
                                                        <div class="col-2 a4">
                                                            <h3>Grace implemented on loan types below:</h3>
                                                            <input type="text" placeholder="A>E>D>B>C" class="grace_value">
                                                        </div>
                                                    </div>
                                                    <div class="offer-tabs A_return_algo grace-cl ">
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Grace</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="a-month-return">
                                                                            <div class="col-2">
                                                                                <span>10.1 Enter_Month (0 or 3-36)</span> Grace Period
                                                                            </div>
                                                                            <div class="col-2">
                                                                               <input type="text" name="ten_one" class="ten_one">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="a-month-return">
                                                                            <div class="col-2">
                                                                                <span>10.2 Req_Grace</span> If Chose 5.1 Val 12.1<br> If Chose 5.2 Val 12.1 - 5.2
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <input type="text" name="ten_two" class="ten_two">
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
                                            <form class="redio-design" id="top-3">
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio1" type="radio" checked="" name="name11" value="A">
                                                    <label for="A_radio1">A</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio2" type="radio" name="name11" value="F">
                                                    <label for="A_radio2">F</label>
                                                </div>
                                                <div class="form-group" style="display: none;" >
                                                    <input id="A_radio3" type="radio" name="name11" value="G">
                                                    <label for="A_radio3">G</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio4" type="radio" name="name11" value="D">
                                                    <label for="A_radio4">D</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio5" type="radio" name="name11" value="B">
                                                    <label for="A_radio5">B</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio6" type="radio" name="name11" value="H">
                                                    <label for="A_radio6">H</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio7" type="radio" name="name11" value="E">
                                                    <label for="A_radio7">E</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio8" type="radio" name="name11" value="C">
                                                    <label for="A_radio8">C</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row-margin">
                                            <div class="col-md-6">
                                                <div class="funding-tree-container">
                                                    <ul class="d-f a-i-f-e">
                                                        <li><a href="javascript:void(0);" class="main-button button-green button-large">Funding tree</a></li>
                                                        <li>
                                                            <div class="form-group">
                                                                <label>Show years</label>
                                                                <select class="selectpicker sel-years" style="display: none;">
                                                       <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
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
                                                            </div>
                                                        </li>
                                                        <li class="input-max-years">
                                                            <div class="form-group d-f a-i-c">
                                                                <label>Max years:</label>
                                                                <input type="text" class="form-control" id="max-years" name="max-years" placeholder="30" value="30" readonly="readonly">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mortgage-linked-wrap">
                                                    <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                        <table class="step_4_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>MR Linked</th>
                                                                    <th>MR (PMT)</th>
                                                                    <th>Left Pay Linked</th>
                                                                    <th>Left Pay</th>
                                                                    <th>Intrest Pay Linked</th>
                                                                    <th>Intrest Pay</th>
                                                                    <th>Net Pay Linked</th>
                                                                    <th>Net Pay</th>
                                                                    <th>Prime/Madad Month</th>
                                                                    <th>A</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td >1557.70</td>
                                                                    <td>1556.23</td>
                                                                    <td>177510.66</td>
                                                                    <td>177333.33</td>
                                                                    <td>1479.78</td>
                                                                    <td>1477.78</td>
                                                                    <td>78.53</td>
                                                                    <td>78.45</td>
                                                                    <td>0.10%</td>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1559.34</td>
                                                                    <td>1556.23</td>
                                                                    <td>177609.39</td>
                                                                    <td>177254.88</td>
                                                                    <td>1477312</td>
                                                                    <td>1477.12</td>
                                                                    <td>79.26</td>
                                                                    <td>79.10</td>
                                                                    <td>0.20%</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1560.90</td>
                                                                    <td>1556.23</td>
                                                                    <td>177707.31</td>
                                                                    <td>177175.78</td>
                                                                    <td>1476.46</td>
                                                                    <td>1476.46</td>
                                                                    <td>80.00</td>
                                                                    <td>79.76</td>
                                                                    <td>0.30%</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1562.47</td>
                                                                    <td>1556.23</td>
                                                                    <td>177806.18</td>
                                                                    <td>177096.02</td>
                                                                    <td>1450.80</td>
                                                                    <td>1450.80</td>
                                                                    <td>81.51</td>
                                                                    <td>80.43</td>
                                                                    <td>0.40%</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1564.03</td>
                                                                    <td>1556.23</td>
                                                                    <td>177902.44</td>
                                                                    <td>177015.59</td>
                                                                    <td>1474.77</td>
                                                                    <td>1475.13</td>
                                                                    <td>82.26</td>
                                                                    <td>81.10</td>
                                                                    <td>0.50%</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1565.60</td>
                                                                    <td>1556.23</td>
                                                                    <td>177999.65</td>
                                                                    <td>177934.50</td>
                                                                    <td>1473.77</td>
                                                                    <td>1474.45</td>
                                                                    <td>83.03</td>
                                                                    <td>81.77</td>
                                                                    <td>0.60%</td>
                                                                    <td>6</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1567.15</td>
                                                                    <td>1556.23</td>
                                                                    <td>178094.23</td>
                                                                    <td>176852.72</td>
                                                                    <td>1473.09</td>
                                                                    <td>1473.77</td>
                                                                    <td>83.81</td>
                                                                    <td>82.45</td>
                                                                    <td>0.70%</td>
                                                                    <td>7</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1568.73</td>
                                                                    <td>1556.23</td>
                                                                    <td>178189.74</td>
                                                                    <td>176770.27</td>
                                                                    <td>1472.39</td>
                                                                    <td>1473.09</td>
                                                                    <td>84.59</td>
                                                                    <td>83.14</td>
                                                                    <td>0.80%</td>
                                                                    <td>8</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1570.30</td>
                                                                    <td>1556.23</td>
                                                                    <td>178284.38</td>
                                                                    <td>176687.13</td>
                                                                    <td>1471.69</td>
                                                                    <td>1472.39</td>
                                                                    <td>85.38</td>
                                                                    <td>83.83</td>
                                                                    <td>0.90%</td>
                                                                    <td>9</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1571.87</td>
                                                                    <td>1556.23</td>
                                                                    <td>178378.15</td>
                                                                    <td>176603.29</td>
                                                                    <td>1470.99</td>
                                                                    <td>1471.69</td>
                                                                    <td>86.18</td>
                                                                    <td>84.53</td>
                                                                    <td>1.01%</td>
                                                                    <td>10</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1573.44</td>
                                                                    <td>1556.23</td>
                                                                    <td>178471.06</td>
                                                                    <td>176518.76</td>
                                                                    <td>1470.28</td>
                                                                    <td>1470.99</td>
                                                                    <td>86.99</td>
                                                                    <td>85.24</td>
                                                                    <td>1.11%</td>
                                                                    <td>11</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1575.14</td>
                                                                    <td>1556.23</td>
                                                                    <td>178577.19</td>
                                                                    <td>176433.52</td>
                                                                    <td>1470.99</td>
                                                                    <td>1470.28</td>
                                                                    <td>86.37</td>
                                                                    <td>85.95</td>
                                                                    <td>1.22%</td>
                                                                    <td>12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1576.85</td>
                                                                    <td>1556.23</td>
                                                                    <td>178857.63</td>
                                                                    <td>176518.76</td>
                                                                    <td>1470.28</td>
                                                                    <td>1470.99</td>
                                                                    <td>87.18</td>
                                                                    <td>85.24</td>
                                                                    <td>1.33%</td>
                                                                    <td>13</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1578.55</td>
                                                                    <td>1556.23</td>
                                                                    <td>178963.58</td>
                                                                    <td>176433.52</td>
                                                                    <td>1470.99</td>
                                                                    <td>1470.28</td>
                                                                    <td>86.37</td>
                                                                    <td>85.95</td>
                                                                    <td>1.43%</td>
                                                                    <td style="">14</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1578.55</td>
                                                                    <td>1556.23</td>
                                                                    <td>178963.58</td>
                                                                    <td>176433.52</td>
                                                                    <td>1470.28</td>
                                                                    <td>1470.28</td>
                                                                    <td>87.18</td>
                                                                    <td>85.95</td>
                                                                    <td>1.43%</td>
                                                                    <td>Sum</td>
                                                                </tr>
                                                                <tr class="last-data">
                                                                    <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                    </td>
                                                                    <td></td>
                                                                    <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                    </td>
                                                                    <td colspan="5" style="text-align: right;">Total Sum On Funding + Ens Tables </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="mortgage-linked-wrap">
                                                    <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                        <table >
                                                            <thead>
                                                                <tr>
                                                                    <th>MR Linked</th>
                                                                    <th>MR (PMT)</th>
                                                                    <th>Left Pay Linked</th>
                                                                    <th>Left Pay</th>
                                                                    <th>Intrest Pay Linked</th>
                                                                    <th>Intrest Pay</th>
                                                                    <th>Net Pay Linked</th>
                                                                    <th>Net Pay</th>
                                                                    <th>Prime/Madad Month</th>
                                                                    <th>A</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1557.70</td>
                                                                    <td>1556.23</td>
                                                                    <td>177510.66</td>
                                                                    <td>177333.33</td>
                                                                    <td>1479.78</td>
                                                                    <td>1477.78</td>
                                                                    <td>78.53</td>
                                                                    <td>78.45</td>
                                                                    <td>0.10%</td>
                                                                    <td>1</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="funding-tree-container">
                                                    <ul class="d-f a-i-f-e">
                                                        <li><a href="javascript:void(0);" class="main-button button-red button-large">Funding tree</a></li>
                                                        <li>
                                                        </li>
                                                        <li class="input-max-years">
                                                            <div class="form-group d-f a-i-c">
                                                                <label>Max years:</label>
                                                                <input type="text" class="form-control" id="max-years" name="max-years" placeholder="30" value="30" readonly="readonly">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mortgage-linked-wrap">
                                                    <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                        <table class="step_4_e_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>MR Linked</th>
                                                                    <th>MR (PMT)</th>
                                                                    <th>Left Pay Linked</th>
                                                                    <th>Left Pay</th>
                                                                    <th>Intrest Pay Linked</th>
                                                                    <th>Intrest Pay</th>
                                                                    <th>Net Pay Linked</th>
                                                                    <th>Net Pay</th>
                                                                    <th>Prime/Madad Month</th>
                                                                    <th>A</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1557.70</td>
                                                                    <td>1556.23</td>
                                                                    <td>177510.66</td>
                                                                    <td>177333.33</td>
                                                                    <td>1479.78</td>
                                                                    <td>1477.78</td>
                                                                    <td>78.53</td>
                                                                    <td>78.45</td>
                                                                    <td>0.10%</td>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1559.34</td>
                                                                    <td>1556.23</td>
                                                                    <td>177609.39</td>
                                                                    <td>177254.88</td>
                                                                    <td>1477312</td>
                                                                    <td>1477.12</td>
                                                                    <td>79.26</td>
                                                                    <td>79.10</td>
                                                                    <td>0.20%</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1560.90</td>
                                                                    <td>1556.23</td>
                                                                    <td>177707.31</td>
                                                                    <td>177175.78</td>
                                                                    <td>1476.46</td>
                                                                    <td>1476.46</td>
                                                                    <td>80.00</td>
                                                                    <td>79.76</td>
                                                                    <td>0.30%</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1562.47</td>
                                                                    <td>1556.23</td>
                                                                    <td>177806.18</td>
                                                                    <td>177096.02</td>
                                                                    <td>1450.80</td>
                                                                    <td>1450.80</td>
                                                                    <td>81.51</td>
                                                                    <td>80.43</td>
                                                                    <td>0.40%</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1564.03</td>
                                                                    <td>1556.23</td>
                                                                    <td>177902.44</td>
                                                                    <td>177015.59</td>
                                                                    <td>1474.77</td>
                                                                    <td>1475.13</td>
                                                                    <td>82.26</td>
                                                                    <td>81.10</td>
                                                                    <td>0.50%</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1565.60</td>
                                                                    <td>1556.23</td>
                                                                    <td>177999.65</td>
                                                                    <td>177934.50</td>
                                                                    <td>1473.77</td>
                                                                    <td>1474.45</td>
                                                                    <td>83.03</td>
                                                                    <td>81.77</td>
                                                                    <td>0.60%</td>
                                                                    <td>6</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1567.15</td>
                                                                    <td>1556.23</td>
                                                                    <td>178094.23</td>
                                                                    <td>176852.72</td>
                                                                    <td>1473.09</td>
                                                                    <td>1473.77</td>
                                                                    <td>83.81</td>
                                                                    <td>82.45</td>
                                                                    <td>0.70%</td>
                                                                    <td>7</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1568.73</td>
                                                                    <td>1556.23</td>
                                                                    <td>178189.74</td>
                                                                    <td>176770.27</td>
                                                                    <td>1472.39</td>
                                                                    <td>1473.09</td>
                                                                    <td>84.59</td>
                                                                    <td>83.14</td>
                                                                    <td>0.80%</td>
                                                                    <td>8</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1570.30</td>
                                                                    <td>1556.23</td>
                                                                    <td>178284.38</td>
                                                                    <td>176687.13</td>
                                                                    <td>1471.69</td>
                                                                    <td>1472.39</td>
                                                                    <td>85.38</td>
                                                                    <td>83.83</td>
                                                                    <td>0.90%</td>
                                                                    <td>9</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1571.87</td>
                                                                    <td>1556.23</td>
                                                                    <td>178378.15</td>
                                                                    <td>176603.29</td>
                                                                    <td>1470.99</td>
                                                                    <td>1471.69</td>
                                                                    <td>86.18</td>
                                                                    <td>84.53</td>
                                                                    <td>1.01%</td>
                                                                    <td>10</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1573.44</td>
                                                                    <td>1556.23</td>
                                                                    <td>178471.06</td>
                                                                    <td>176518.76</td>
                                                                    <td>1470.28</td>
                                                                    <td>1470.99</td>
                                                                    <td>86.99</td>
                                                                    <td>85.24</td>
                                                                    <td>1.11%</td>
                                                                    <td>11</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1575.14</td>
                                                                    <td>1556.23</td>
                                                                    <td>178577.19</td>
                                                                    <td>176433.52</td>
                                                                    <td>1470.99</td>
                                                                    <td>1470.28</td>
                                                                    <td>86.37</td>
                                                                    <td>85.95</td>
                                                                    <td>1.22%</td>
                                                                    <td>12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1576.85</td>
                                                                    <td>1556.23</td>
                                                                    <td>178857.63</td>
                                                                    <td>176518.76</td>
                                                                    <td>1470.28</td>
                                                                    <td>1470.99</td>
                                                                    <td>87.18</td>
                                                                    <td>85.24</td>
                                                                    <td>1.33%</td>
                                                                    <td>13</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1578.55</td>
                                                                    <td>1556.23</td>
                                                                    <td>178963.58</td>
                                                                    <td>176433.52</td>
                                                                    <td>1470.99</td>
                                                                    <td>1470.28</td>
                                                                    <td>86.37</td>
                                                                    <td>85.95</td>
                                                                    <td>1.43%</td>
                                                                    <td style="">14</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1578.55</td>
                                                                    <td>1556.23</td>
                                                                    <td>178963.58</td>
                                                                    <td>176433.52</td>
                                                                    <td>1470.28</td>
                                                                    <td>1470.28</td>
                                                                    <td>87.18</td>
                                                                    <td>85.95</td>
                                                                    <td>1.43%</td>
                                                                    <td>Sum</td>
                                                                </tr>
                                                                <tr class="last-data">
                                                                    <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                    </td>
                                                                    <td></td>
                                                                    <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                    </td>
                                                                    <td colspan="5" style="text-align: right;">Total Sum On Funding + Ens Tables </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="bottom-tab2">
                                        <div class="">
                                            <div class="row-margin">
                                                <div class="col-md-6">
                                                    <div class="funding-tree-container clearfix">
                                                        <ul class="d-f a-i-f-e">
                                                            <li><a href="javascript:void(0);" class="main-button button-green button-large">Recycle Funding tree</a></li>
                                                            <li class="best-fit-years">
                                                                <div class="form-group df a-i-c">
                                                                    <label>Best fit years:</label>
                                                                    <input type="text" class="form-control" id="best-fit-years" name="Best-fit-years" placeholder="7">
                                                                </div>
                                                            </li>
                                                            <li class="input-max-years">
                                                                <div class="form-group d-f a-i-c">
                                                                    <label>After min years:</label>
                                                                    <input type="text" class="form-control" id="after-min-years" name="after-min-years" placeholder="20">
                                                                </div>
                                                            </li>
                                                            <!-- <li class="input-max-years b-a-years d-f">
                                                                <div class="form-group d-f a-i-c">
                                                                    <label>Before years:</label>
                                                                    <input type="text" class="form-control" id="before-years" name="after-min-years" placeholder="30">
                                                                </div>
                                                                <div class="form-group d-f a-i-c">
                                                                    <label>After years:</label>
                                                                    <input type="text" class="form-control" id="after-years" name="after-min-years" placeholder="27">
                                                                </div>
                                                            </li> -->
                                                        </ul>
                                                        <ul class="dsa">
                                                            <li>Recycle the large year loan types below:</li>
                                                            <li>Go from 30 to 4 and search best fit New <a href="javascript:void(0);">Final_MR to Final_MR</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mortgage-linked-wrap space-a">
                                                        <div class="table-container online-customers-table">
                                                            <table style="text-align: center;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="head">H4</th>
                                                                        <th>Loan Type (T)</th>
                                                                        <th>Part (P)</th>
                                                                        <th>Left Morg (M)</th>
                                                                        <th>New Years (Y)</th>
                                                                        <th>Intrest (I)</th>
                                                                        <th>New MR (PMT)</th>
                                                                        <th>New Total_MR</th>
                                                                        <th>New Final_MR</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="tab1_rec">
                                                                        <td class="rec_head1">prime</td>
                                                                        <td class="rec_type1">A</td>
                                                                        <td class="rec_part1">0.25</td>
                                                                        <td class="rec_morg1">118331.63</td>
                                                                        <td class="b-r-top-right-left rec_year1">7</td>
                                                                        <td class="rec_int1">0.1</td>
                                                                        <td class="rec_pmt1">1964</td>
                                                                        <td class="rec_totalpmt1">7641</td>
                                                                        <td class="rec_finalpmt1">16044</td>
                                                                    </tr>
                                                                    <tr class="tab2_rec">
                                                                        <td class="rec_head2">prime</td>
                                                                        <td class="rec_type2">A</td>
                                                                        <td class="rec_part2">0.25</td>
                                                                        <td class="rec_morg2">118331.63</td>
                                                                        <td class="b-r-top-right-left rec_year2">7</td>
                                                                        <td class="rec_int2">0.1</td>
                                                                        <td class="rec_pmt2">1964</td>
                                                                        <td class="rec_totalpmt2"></td>
                                                                        <td class="rec_finalpmt2"></td>
                                                                    </tr>
                                                                    <tr class="tab3_rec">
                                                                        <td class="rec_head3">prime</td>
                                                                        <td class="rec_type3">A</td>
                                                                        <td class="rec_part3">0.25</td>
                                                                        <td class="rec_morg3">118331.63</td>
                                                                        <td class="b-r-top-right-left rec_year3">7</td>
                                                                        <td class="rec_int3">0.1</td>
                                                                        <td class="rec_pmt3">1964</td>
                                                                        <td class="rec_totalpmt3"></td>
                                                                        <td class="rec_finalpmt3"></td>
                                                                    </tr>
                                                                    <tr class="tab4_rec">
                                                                        <td class="rec_head4">prime</td>
                                                                        <td class="rec_type4">A</td>
                                                                        <td class="rec_part4">0.25</td>
                                                                        <td class="rec_morg4">118331.63</td>
                                                                        <td class="b-r-top-right-left rec_year4">7</td>
                                                                        <td class="rec_int4">0.1</td>
                                                                        <td class="rec_pmt4">1964</td>
                                                                        <td class="rec_totalpmt4"></td>
                                                                        <td class="rec_finalpmt4"></td>
                                                                    </tr>
                                                                     <tr class="tab5_rec">
                                                                        <td class="rec_head5">prime</td>
                                                                        <td class="rec_type5">A</td>
                                                                        <td class="rec_part5">0.25</td>
                                                                        <td class="rec_morg5">118331.63</td>
                                                                        <td class="b-r-top-right-left rec_year5">7</td>
                                                                        <td class="rec_int5">0.1</td>
                                                                        <td class="rec_pmt5">1964</td>
                                                                        <td class="rec_totalpmt5"></td>
                                                                        <td class="rec_finalpmt5"></td>
                                                                    </tr>
                                                                     <tr class="tab6_rec">
                                                                        <td class="rec_head6">prime</td>
                                                                        <td class="rec_type6">A</td>
                                                                        <td class="rec_part6">0.25</td>
                                                                        <td class="rec_morg6">118331.63</td>
                                                                        <td class="b-r-top-right-left rec_year6">7</td>
                                                                        <td class="rec_int6">0.1</td>
                                                                        <td class="rec_pmt6">1964</td>
                                                                        <td class="rec_totalpmt6"></td>
                                                                        <td class="rec_finalpmt6"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>MR Linked</th>
                                                                        <th>MR (PMT)</th>
                                                                        <th>Left Pay Linked</th>
                                                                        <th>Left Pay</th>
                                                                        <th>Intrest Pay Linked</th>
                                                                        <th>Intrest Pay</th>
                                                                        <th>Net Pay Linked</th>
                                                                        <th>Net Pay</th>
                                                                        <th>Prime/Madad Month</th>
                                                                        <th>A</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1557.70</td>
                                                                        <td>1556.23</td>
                                                                        <td>177510.66</td>
                                                                        <td>177333.33</td>
                                                                        <td>1479.78</td>
                                                                        <td>1477.78</td>
                                                                        <td>78.53</td>
                                                                        <td>78.45</td>
                                                                        <td>0.10%</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1559.34</td>
                                                                        <td>1556.23</td>
                                                                        <td>177609.39</td>
                                                                        <td>177254.88</td>
                                                                        <td>1477312</td>
                                                                        <td>1477.12</td>
                                                                        <td>79.26</td>
                                                                        <td>79.10</td>
                                                                        <td>0.20%</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1560.90</td>
                                                                        <td>1556.23</td>
                                                                        <td>177707.31</td>
                                                                        <td>177175.78</td>
                                                                        <td>1476.46</td>
                                                                        <td>1476.46</td>
                                                                        <td>80.00</td>
                                                                        <td>79.76</td>
                                                                        <td>0.30%</td>
                                                                        <td>3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1562.47</td>
                                                                        <td>1556.23</td>
                                                                        <td>177806.18</td>
                                                                        <td>177096.02</td>
                                                                        <td>1450.80</td>
                                                                        <td>1450.80</td>
                                                                        <td>81.51</td>
                                                                        <td>80.43</td>
                                                                        <td>0.40%</td>
                                                                        <td>4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1564.03</td>
                                                                        <td>1556.23</td>
                                                                        <td>177902.44</td>
                                                                        <td>177015.59</td>
                                                                        <td>1474.77</td>
                                                                        <td>1475.13</td>
                                                                        <td>82.26</td>
                                                                        <td>81.10</td>
                                                                        <td>0.50%</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1565.60</td>
                                                                        <td>1556.23</td>
                                                                        <td>177999.65</td>
                                                                        <td>177934.50</td>
                                                                        <td>1473.77</td>
                                                                        <td>1474.45</td>
                                                                        <td>83.03</td>
                                                                        <td>81.77</td>
                                                                        <td>0.60%</td>
                                                                        <td>6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1567.15</td>
                                                                        <td>1556.23</td>
                                                                        <td>178094.23</td>
                                                                        <td>176852.72</td>
                                                                        <td>1473.09</td>
                                                                        <td>1473.77</td>
                                                                        <td>83.81</td>
                                                                        <td>82.45</td>
                                                                        <td>0.70%</td>
                                                                        <td>7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1568.73</td>
                                                                        <td>1556.23</td>
                                                                        <td>178189.74</td>
                                                                        <td>176770.27</td>
                                                                        <td>1472.39</td>
                                                                        <td>1473.09</td>
                                                                        <td>84.59</td>
                                                                        <td>83.14</td>
                                                                        <td>0.80%</td>
                                                                        <td>8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1570.30</td>
                                                                        <td>1556.23</td>
                                                                        <td>178284.38</td>
                                                                        <td>176687.13</td>
                                                                        <td>1471.69</td>
                                                                        <td>1472.39</td>
                                                                        <td>85.38</td>
                                                                        <td>83.83</td>
                                                                        <td>0.90%</td>
                                                                        <td>9</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1571.87</td>
                                                                        <td>1556.23</td>
                                                                        <td>178378.15</td>
                                                                        <td>176603.29</td>
                                                                        <td>1470.99</td>
                                                                        <td>1471.69</td>
                                                                        <td>86.18</td>
                                                                        <td>84.53</td>
                                                                        <td>1.01%</td>
                                                                        <td>10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1573.44</td>
                                                                        <td>1556.23</td>
                                                                        <td>178471.06</td>
                                                                        <td>176518.76</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.99</td>
                                                                        <td>86.99</td>
                                                                        <td>85.24</td>
                                                                        <td>1.11%</td>
                                                                        <td>11</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1575.14</td>
                                                                        <td>1556.23</td>
                                                                        <td>178577.19</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.99</td>
                                                                        <td>1470.28</td>
                                                                        <td>86.37</td>
                                                                        <td>85.95</td>
                                                                        <td>1.22%</td>
                                                                        <td>12</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1576.85</td>
                                                                        <td>1556.23</td>
                                                                        <td>178857.63</td>
                                                                        <td>176518.76</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.99</td>
                                                                        <td>87.18</td>
                                                                        <td>85.24</td>
                                                                        <td>1.33%</td>
                                                                        <td>13</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1578.55</td>
                                                                        <td>1556.23</td>
                                                                        <td>178963.58</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.99</td>
                                                                        <td>1470.28</td>
                                                                        <td>86.37</td>
                                                                        <td>85.95</td>
                                                                        <td>1.43%</td>
                                                                        <td style="">14</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1578.55</td>
                                                                        <td>1556.23</td>
                                                                        <td>178963.58</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.28</td>
                                                                        <td>87.18</td>
                                                                        <td>85.95</td>
                                                                        <td>1.43%</td>
                                                                        <td>Sum</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="funding-tree-container">
                                                        <ul class="d-f a-i-f-e">
                                                            <li><a href="javascript:void(0);" class="main-button button-red button-large">Enslevment Tree</a></li>
                                                            <li>
                                                                <li>
                                                                    <div class="form-group df a-i-c">
                                                                        <label>Before years:</label>
                                                                        <input type="text" class="form-control" id="before-years" name="before-years" placeholder="30">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-group df a-i-c">
                                                                        <label>After years:</label>
                                                                        <input type="text" class="form-control" id="after-years" name="after-years" placeholder="27">
                                                                    </div>
                                                                </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="mortgage-linked-wrap  space-a">
                                                        <div class="table-container online-customers-table">
                                                            <table style="text-align: center; margin-top: 20px;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="head">H4</th>
                                                                        <th>Loan Type (T)</th>
                                                                        <th>Part (P)</th>
                                                                        <th>Left Morg (M)</th>
                                                                        <th>New Years (Y)</th>
                                                                        <th>Intrest (I)</th>
                                                                        <th>New MR (PMT)</th>
                                                                        <th>New Total_MR</th>
                                                                        <th>New Final_MR</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   <tr class="e_tab1_rec">
                                                                        <td class="e_rec_head1">prime</td>
                                                                        <td class="e_rec_type1">A</td>
                                                                        <td class="e_rec_part1">0.25</td>
                                                                        <td class="e_rec_morg1">118331.63</td>
                                                                        <td class="b-r-top-right-left e_rec_year1">7</td>
                                                                        <td class="e_rec_int1">0.1</td>
                                                                        <td class="e_rec_pmt1">1964</td>
                                                                        <td class="e_rec_totalpmt1">7641</td>
                                                                        <td class="e_rec_finalpmt1">16044</td>
                                                                    </tr>
                                                                    <tr class="e_tab2_rec">
                                                                        <td class="e_rec_head2">prime</td>
                                                                        <td class="e_rec_type2">A</td>
                                                                        <td class="e_rec_part2">0.25</td>
                                                                        <td class="e_rec_morg2">118331.63</td>
                                                                        <td class="b-r-top-right-left e_rec_year2">7</td>
                                                                        <td class="e_rec_int2">0.1</td>
                                                                        <td class="e_rec_pmt2">1964</td>
                                                                        <td class="e_rec_totalpmt2"></td>
                                                                        <td class="e_rec_finalpmt2"></td>
                                                                    </tr>
                                                                    <tr class="e_tab3_rec">
                                                                        <td class="e_rec_head3">prime</td>
                                                                        <td class="e_rec_type3">A</td>
                                                                        <td class="e_rec_part3">0.25</td>
                                                                        <td class="e_rec_morg3">118331.63</td>
                                                                        <td class="b-r-top-right-left e_rec_year3">7</td>
                                                                        <td class="e_rec_int3">0.1</td>
                                                                        <td class="e_rec_pmt3">1964</td>
                                                                        <td class="e_rec_totalpmt3"></td>
                                                                        <td class="e_rec_finalpmt3"></td>
                                                                    </tr>
                                                                    <tr class="e_tab4_rec">
                                                                        <td class="e_rec_head4">prime</td>
                                                                        <td class="e_rec_type4">A</td>
                                                                        <td class="e_rec_part4">0.25</td>
                                                                        <td class="e_rec_morg4">118331.63</td>
                                                                        <td class="b-r-top-right-left e_rec_year4">7</td>
                                                                        <td class="e_rec_int4">0.1</td>
                                                                        <td class="e_rec_pmt4">1964</td>
                                                                        <td class="e_rec_totalpmt4"></td>
                                                                        <td class="e_rec_finalpmt4"></td>
                                                                    </tr>
                                                                     <tr class="e_tab5_rec">
                                                                        <td class="e_rec_head5">prime</td>
                                                                        <td class="e_rec_type5">A</td>
                                                                        <td class="e_rec_part5">0.25</td>
                                                                        <td class="e_rec_morg5">118331.63</td>
                                                                        <td class="b-r-top-right-left e_rec_year5">7</td>
                                                                        <td class="e_rec_int5">0.1</td>
                                                                        <td class="e_rec_pmt5">1964</td>
                                                                        <td class="e_rec_totalpmt5"></td>
                                                                        <td class="e_rec_finalpmt5"></td>
                                                                    </tr>
                                                                     <tr class="e_tab6_rec">
                                                                        <td class="e_rec_head6">prime</td>
                                                                        <td class="e_rec_type6">A</td>
                                                                        <td class="e_rec_part6">0.25</td>
                                                                        <td class="e_rec_morg6">118331.63</td>
                                                                        <td class="b-r-top-right-left e_rec_year6">7</td>
                                                                        <td class="e_rec_int6">0.1</td>
                                                                        <td class="e_rec_pmt6">1964</td>
                                                                        <td class="e_rec_totalpmt6"></td>
                                                                        <td class="e_rec_finalpmt6"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>MR Linked</th>
                                                                                <th>MR (PMT)</th>
                                                                                <th>Left Pay Linked</th>
                                                                                <th>Left Pay</th>
                                                                                <th>Intrest Pay Linked</th>
                                                                                <th>Intrest Pay</th>
                                                                                <th>Net Pay Linked</th>
                                                                                <th>Net Pay</th>
                                                                                <th>Prime/Madad Month</th>
                                                                                <th>A</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1557.70</td>
                                                                                <td>1556.23</td>
                                                                                <td>177510.66</td>
                                                                                <td>177333.33</td>
                                                                                <td>1479.78</td>
                                                                                <td>1477.78</td>
                                                                                <td>78.53</td>
                                                                                <td>78.45</td>
                                                                                <td>0.10%</td>
                                                                                <td>1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1559.34</td>
                                                                                <td>1556.23</td>
                                                                                <td>177609.39</td>
                                                                                <td>177254.88</td>
                                                                                <td>1477312</td>
                                                                                <td>1477.12</td>
                                                                                <td>79.26</td>
                                                                                <td>79.10</td>
                                                                                <td>0.20%</td>
                                                                                <td>2</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1560.90</td>
                                                                                <td>1556.23</td>
                                                                                <td>177707.31</td>
                                                                                <td>177175.78</td>
                                                                                <td>1476.46</td>
                                                                                <td>1476.46</td>
                                                                                <td>80.00</td>
                                                                                <td>79.76</td>
                                                                                <td>0.30%</td>
                                                                                <td>3</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1562.47</td>
                                                                                <td>1556.23</td>
                                                                                <td>177806.18</td>
                                                                                <td>177096.02</td>
                                                                                <td>1450.80</td>
                                                                                <td>1450.80</td>
                                                                                <td>81.51</td>
                                                                                <td>80.43</td>
                                                                                <td>0.40%</td>
                                                                                <td>4</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1564.03</td>
                                                                                <td>1556.23</td>
                                                                                <td>177902.44</td>
                                                                                <td>177015.59</td>
                                                                                <td>1474.77</td>
                                                                                <td>1475.13</td>
                                                                                <td>82.26</td>
                                                                                <td>81.10</td>
                                                                                <td>0.50%</td>
                                                                                <td>5</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1565.60</td>
                                                                                <td>1556.23</td>
                                                                                <td>177999.65</td>
                                                                                <td>177934.50</td>
                                                                                <td>1473.77</td>
                                                                                <td>1474.45</td>
                                                                                <td>83.03</td>
                                                                                <td>81.77</td>
                                                                                <td>0.60%</td>
                                                                                <td>6</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1567.15</td>
                                                                                <td>1556.23</td>
                                                                                <td>178094.23</td>
                                                                                <td>176852.72</td>
                                                                                <td>1473.09</td>
                                                                                <td>1473.77</td>
                                                                                <td>83.81</td>
                                                                                <td>82.45</td>
                                                                                <td>0.70%</td>
                                                                                <td>7</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1568.73</td>
                                                                                <td>1556.23</td>
                                                                                <td>178189.74</td>
                                                                                <td>176770.27</td>
                                                                                <td>1472.39</td>
                                                                                <td>1473.09</td>
                                                                                <td>84.59</td>
                                                                                <td>83.14</td>
                                                                                <td>0.80%</td>
                                                                                <td>8</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1570.30</td>
                                                                                <td>1556.23</td>
                                                                                <td>178284.38</td>
                                                                                <td>176687.13</td>
                                                                                <td>1471.69</td>
                                                                                <td>1472.39</td>
                                                                                <td>85.38</td>
                                                                                <td>83.83</td>
                                                                                <td>0.90%</td>
                                                                                <td>9</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1571.87</td>
                                                                                <td>1556.23</td>
                                                                                <td>178378.15</td>
                                                                                <td>176603.29</td>
                                                                                <td>1470.99</td>
                                                                                <td>1471.69</td>
                                                                                <td>86.18</td>
                                                                                <td>84.53</td>
                                                                                <td>1.01%</td>
                                                                                <td>10</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1573.44</td>
                                                                                <td>1556.23</td>
                                                                                <td>178471.06</td>
                                                                                <td>176518.76</td>
                                                                                <td>1470.28</td>
                                                                                <td>1470.99</td>
                                                                                <td>86.99</td>
                                                                                <td>85.24</td>
                                                                                <td>1.11%</td>
                                                                                <td>11</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1575.14</td>
                                                                                <td>1556.23</td>
                                                                                <td>178577.19</td>
                                                                                <td>176433.52</td>
                                                                                <td>1470.99</td>
                                                                                <td>1470.28</td>
                                                                                <td>86.37</td>
                                                                                <td>85.95</td>
                                                                                <td>1.22%</td>
                                                                                <td>12</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1576.85</td>
                                                                                <td>1556.23</td>
                                                                                <td>178857.63</td>
                                                                                <td>176518.76</td>
                                                                                <td>1470.28</td>
                                                                                <td>1470.99</td>
                                                                                <td>87.18</td>
                                                                                <td>85.24</td>
                                                                                <td>1.33%</td>
                                                                                <td>13</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1578.55</td>
                                                                                <td>1556.23</td>
                                                                                <td>178963.58</td>
                                                                                <td>176433.52</td>
                                                                                <td>1470.99</td>
                                                                                <td>1470.28</td>
                                                                                <td>86.37</td>
                                                                                <td>85.95</td>
                                                                                <td>1.43%</td>
                                                                                <td style="">14</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1578.55</td>
                                                                                <td>1556.23</td>
                                                                                <td>178963.58</td>
                                                                                <td>176433.52</td>
                                                                                <td>1470.28</td>
                                                                                <td>1470.28</td>
                                                                                <td>87.18</td>
                                                                                <td>85.95</td>
                                                                                <td>1.43%</td>
                                                                                <td>Sum</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <form class="redio-design" id="top-3">
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio1_" type="radio" checked="" name="name11_" value="A">
                                                    <label for="A_radio1_">A</label>
                                                </div>
                                               
                                                <div class="form-group" style="display: none;" >
                                                    <input id="A_radio3_" type="radio" name="name11_" value="G">
                                                    <label for="A_radio3_">G</label>
                                                </div>
                                                 <div class="form-group" style="display: none;">
                                                    <input id="A_radio2_" type="radio" name="name11_" value="F">
                                                    <label for="A_radio2_">F</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio4_" type="radio" name="name11_" value="D">
                                                    <label for="A_radio4_">D</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio5_" type="radio" name="name11_" value="B">
                                                    <label for="A_radio5_">B</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio6_" type="radio" name="name11_" value="H">
                                                    <label for="A_radio6_">H</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio7_" type="radio" name="name11_" value="E">
                                                    <label for="A_radio7_">E</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="A_radio8_" type="radio" name="name11_" value="C">
                                                    <label for="A_radio8_">C</label>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="row-margin">
                                                <div class="col-md-6">
                                                    <div class="funding-tree-container">
                                                        <ul class="d-f a-i-f-e">
                                                            <li><a href="javascript:void(0);" class="main-button button-green button-large">Recycle Funding tree</a></li>
                                                            <li>
                                                                <div class="form-group">
                                                                    <label>Show years</label>
                                                                    <select class="selectpicker sel-years-6" style="display: none;">
                                                        <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
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
                                                                </div>
                                                            </li>
                                                            <li class="input-max-years">
                                                                <div class="form-group d-f a-i-c">
                                                                    <label>Max years:</label>
                                                                    <input type="text" class="form-control" id="max-years" name="max-years" placeholder="30">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="mortgage-linked-wrap">
                                                        <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                            <table class="step_6_table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>MR Linked</th>
                                                                        <th>MR (PMT)</th>
                                                                        <th>Left Pay Linked</th>
                                                                        <th>Left Pay</th>
                                                                        <th>Intrest Pay Linked</th>
                                                                        <th>Intrest Pay</th>
                                                                        <th>Net Pay Linked</th>
                                                                        <th>Net Pay</th>
                                                                        <th>Prime/Madad Month</th>
                                                                        <th>A</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1557.70</td>
                                                                        <td>1556.23</td>
                                                                        <td>177510.66</td>
                                                                        <td>177333.33</td>
                                                                        <td>1479.78</td>
                                                                        <td>1477.78</td>
                                                                        <td>78.53</td>
                                                                        <td>78.45</td>
                                                                        <td>0.10%</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1559.34</td>
                                                                        <td>1556.23</td>
                                                                        <td>177609.39</td>
                                                                        <td>177254.88</td>
                                                                        <td>1477312</td>
                                                                        <td>1477.12</td>
                                                                        <td>79.26</td>
                                                                        <td>79.10</td>
                                                                        <td>0.20%</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1560.90</td>
                                                                        <td>1556.23</td>
                                                                        <td>177707.31</td>
                                                                        <td>177175.78</td>
                                                                        <td>1476.46</td>
                                                                        <td>1476.46</td>
                                                                        <td>80.00</td>
                                                                        <td>79.76</td>
                                                                        <td>0.30%</td>
                                                                        <td>3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1562.47</td>
                                                                        <td>1556.23</td>
                                                                        <td>177806.18</td>
                                                                        <td>177096.02</td>
                                                                        <td>1450.80</td>
                                                                        <td>1450.80</td>
                                                                        <td>81.51</td>
                                                                        <td>80.43</td>
                                                                        <td>0.40%</td>
                                                                        <td>4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1564.03</td>
                                                                        <td>1556.23</td>
                                                                        <td>177902.44</td>
                                                                        <td>177015.59</td>
                                                                        <td>1474.77</td>
                                                                        <td>1475.13</td>
                                                                        <td>82.26</td>
                                                                        <td>81.10</td>
                                                                        <td>0.50%</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1565.60</td>
                                                                        <td>1556.23</td>
                                                                        <td>177999.65</td>
                                                                        <td>177934.50</td>
                                                                        <td>1473.77</td>
                                                                        <td>1474.45</td>
                                                                        <td>83.03</td>
                                                                        <td>81.77</td>
                                                                        <td>0.60%</td>
                                                                        <td>6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1567.15</td>
                                                                        <td>1556.23</td>
                                                                        <td>178094.23</td>
                                                                        <td>176852.72</td>
                                                                        <td>1473.09</td>
                                                                        <td>1473.77</td>
                                                                        <td>83.81</td>
                                                                        <td>82.45</td>
                                                                        <td>0.70%</td>
                                                                        <td>7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1568.73</td>
                                                                        <td>1556.23</td>
                                                                        <td>178189.74</td>
                                                                        <td>176770.27</td>
                                                                        <td>1472.39</td>
                                                                        <td>1473.09</td>
                                                                        <td>84.59</td>
                                                                        <td>83.14</td>
                                                                        <td>0.80%</td>
                                                                        <td>8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1570.30</td>
                                                                        <td>1556.23</td>
                                                                        <td>178284.38</td>
                                                                        <td>176687.13</td>
                                                                        <td>1471.69</td>
                                                                        <td>1472.39</td>
                                                                        <td>85.38</td>
                                                                        <td>83.83</td>
                                                                        <td>0.90%</td>
                                                                        <td>9</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1571.87</td>
                                                                        <td>1556.23</td>
                                                                        <td>178378.15</td>
                                                                        <td>176603.29</td>
                                                                        <td>1470.99</td>
                                                                        <td>1471.69</td>
                                                                        <td>86.18</td>
                                                                        <td>84.53</td>
                                                                        <td>1.01%</td>
                                                                        <td>10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1573.44</td>
                                                                        <td>1556.23</td>
                                                                        <td>178471.06</td>
                                                                        <td>176518.76</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.99</td>
                                                                        <td>86.99</td>
                                                                        <td>85.24</td>
                                                                        <td>1.11%</td>
                                                                        <td>11</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1575.14</td>
                                                                        <td>1556.23</td>
                                                                        <td>178577.19</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.99</td>
                                                                        <td>1470.28</td>
                                                                        <td>86.37</td>
                                                                        <td>85.95</td>
                                                                        <td>1.22%</td>
                                                                        <td>12</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1576.85</td>
                                                                        <td>1556.23</td>
                                                                        <td>178857.63</td>
                                                                        <td>176518.76</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.99</td>
                                                                        <td>87.18</td>
                                                                        <td>85.24</td>
                                                                        <td>1.33%</td>
                                                                        <td>13</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1578.55</td>
                                                                        <td>1556.23</td>
                                                                        <td>178963.58</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.99</td>
                                                                        <td>1470.28</td>
                                                                        <td>86.37</td>
                                                                        <td>85.95</td>
                                                                        <td>1.43%</td>
                                                                        <td style="">14</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1578.55</td>
                                                                        <td>1556.23</td>
                                                                        <td>178963.58</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.28</td>
                                                                        <td>87.18</td>
                                                                        <td>85.95</td>
                                                                        <td>1.43%</td>
                                                                        <td>Sum</td>
                                                                    </tr>
                                                                    <tr class="last-data">
                                                                        <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                            <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                            <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        </td>
                                                                        <td colspan="5" style="text-align: right;">Total Sum On Funding + Ens Tables </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="mortgage-linked-wrap">
                                                        <div class="table-container table-auto mortgage-linked-table wid-scroll" style="margin-top: 20px;">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>MR Linked</th>
                                                                        <th>MR (PMT)</th>
                                                                        <th>Left Pay Linked</th>
                                                                        <th>Left Pay</th>
                                                                        <th>Intrest Pay Linked</th>
                                                                        <th>Intrest Pay</th>
                                                                        <th>Net Pay Linked</th>
                                                                        <th>Net Pay</th>
                                                                        <th>Prime/Madad Month</th>
                                                                        <th>A</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1557.70</td>
                                                                        <td>1556.23</td>
                                                                        <td>177510.66</td>
                                                                        <td>177333.33</td>
                                                                        <td>1479.78</td>
                                                                        <td>1477.78</td>
                                                                        <td>78.53</td>
                                                                        <td>78.45</td>
                                                                        <td>0.10%</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr class="last-data">
                                                                        <td colspan="8" class="red">Total MR Linked: is final Mortgage Linked (!)<br> Algo search for minimum will be here (!)
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="funding-tree-container">
                                                        <ul class="d-f a-i-f-e">
                                                            <li><a href="javascript:void(0);" class="main-button button-red button-large">Enslevment tree</a></li>
                                                            <li>
                                                            </li>
                                                            <li class="input-max-years">
                                                                <div class="form-group d-f a-i-c">
                                                                    <label>Max years:</label>
                                                                    <input type="text" class="form-control" id="max-years" name="max-years" placeholder="27">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="mortgage-linked-wrap">
                                                        <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                            <table class="step_6_e_table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>MR Linked</th>
                                                                        <th>MR (PMT)</th>
                                                                        <th>Left Pay Linked</th>
                                                                        <th>Left Pay</th>
                                                                        <th>Intrest Pay Linked</th>
                                                                        <th>Intrest Pay</th>
                                                                        <th>Net Pay Linked</th>
                                                                        <th>Net Pay</th>
                                                                        <th>Prime/Madad Month</th>
                                                                        <th>A</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1557.70</td>
                                                                        <td>1556.23</td>
                                                                        <td>177510.66</td>
                                                                        <td>177333.33</td>
                                                                        <td>1479.78</td>
                                                                        <td>1477.78</td>
                                                                        <td>78.53</td>
                                                                        <td>78.45</td>
                                                                        <td>0.10%</td>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1559.34</td>
                                                                        <td>1556.23</td>
                                                                        <td>177609.39</td>
                                                                        <td>177254.88</td>
                                                                        <td>1477312</td>
                                                                        <td>1477.12</td>
                                                                        <td>79.26</td>
                                                                        <td>79.10</td>
                                                                        <td>0.20%</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1560.90</td>
                                                                        <td>1556.23</td>
                                                                        <td>177707.31</td>
                                                                        <td>177175.78</td>
                                                                        <td>1476.46</td>
                                                                        <td>1476.46</td>
                                                                        <td>80.00</td>
                                                                        <td>79.76</td>
                                                                        <td>0.30%</td>
                                                                        <td>3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1562.47</td>
                                                                        <td>1556.23</td>
                                                                        <td>177806.18</td>
                                                                        <td>177096.02</td>
                                                                        <td>1450.80</td>
                                                                        <td>1450.80</td>
                                                                        <td>81.51</td>
                                                                        <td>80.43</td>
                                                                        <td>0.40%</td>
                                                                        <td>4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1564.03</td>
                                                                        <td>1556.23</td>
                                                                        <td>177902.44</td>
                                                                        <td>177015.59</td>
                                                                        <td>1474.77</td>
                                                                        <td>1475.13</td>
                                                                        <td>82.26</td>
                                                                        <td>81.10</td>
                                                                        <td>0.50%</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1565.60</td>
                                                                        <td>1556.23</td>
                                                                        <td>177999.65</td>
                                                                        <td>177934.50</td>
                                                                        <td>1473.77</td>
                                                                        <td>1474.45</td>
                                                                        <td>83.03</td>
                                                                        <td>81.77</td>
                                                                        <td>0.60%</td>
                                                                        <td>6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1567.15</td>
                                                                        <td>1556.23</td>
                                                                        <td>178094.23</td>
                                                                        <td>176852.72</td>
                                                                        <td>1473.09</td>
                                                                        <td>1473.77</td>
                                                                        <td>83.81</td>
                                                                        <td>82.45</td>
                                                                        <td>0.70%</td>
                                                                        <td>7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1568.73</td>
                                                                        <td>1556.23</td>
                                                                        <td>178189.74</td>
                                                                        <td>176770.27</td>
                                                                        <td>1472.39</td>
                                                                        <td>1473.09</td>
                                                                        <td>84.59</td>
                                                                        <td>83.14</td>
                                                                        <td>0.80%</td>
                                                                        <td>8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1570.30</td>
                                                                        <td>1556.23</td>
                                                                        <td>178284.38</td>
                                                                        <td>176687.13</td>
                                                                        <td>1471.69</td>
                                                                        <td>1472.39</td>
                                                                        <td>85.38</td>
                                                                        <td>83.83</td>
                                                                        <td>0.90%</td>
                                                                        <td>9</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1571.87</td>
                                                                        <td>1556.23</td>
                                                                        <td>178378.15</td>
                                                                        <td>176603.29</td>
                                                                        <td>1470.99</td>
                                                                        <td>1471.69</td>
                                                                        <td>86.18</td>
                                                                        <td>84.53</td>
                                                                        <td>1.01%</td>
                                                                        <td>10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1573.44</td>
                                                                        <td>1556.23</td>
                                                                        <td>178471.06</td>
                                                                        <td>176518.76</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.99</td>
                                                                        <td>86.99</td>
                                                                        <td>85.24</td>
                                                                        <td>1.11%</td>
                                                                        <td>11</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1575.14</td>
                                                                        <td>1556.23</td>
                                                                        <td>178577.19</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.99</td>
                                                                        <td>1470.28</td>
                                                                        <td>86.37</td>
                                                                        <td>85.95</td>
                                                                        <td>1.22%</td>
                                                                        <td>12</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1576.85</td>
                                                                        <td>1556.23</td>
                                                                        <td>178857.63</td>
                                                                        <td>176518.76</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.99</td>
                                                                        <td>87.18</td>
                                                                        <td>85.24</td>
                                                                        <td>1.33%</td>
                                                                        <td>13</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1578.55</td>
                                                                        <td>1556.23</td>
                                                                        <td>178963.58</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.99</td>
                                                                        <td>1470.28</td>
                                                                        <td>86.37</td>
                                                                        <td>85.95</td>
                                                                        <td>1.43%</td>
                                                                        <td style="">14</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1578.55</td>
                                                                        <td>1556.23</td>
                                                                        <td>178963.58</td>
                                                                        <td>176433.52</td>
                                                                        <td>1470.28</td>
                                                                        <td>1470.28</td>
                                                                        <td>87.18</td>
                                                                        <td>85.95</td>
                                                                        <td>1.43%</td>
                                                                        <td>Sum</td>
                                                                    </tr>
                                                                    <tr class="last-data">
                                                                        <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                            <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td><a href="javascript:void(0);" class="a-arrow arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                            <a href="javascript:void(0);" class="a-arrow arrow a-green"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                                        </td>
                                                                        <td colspan="5" style="text-align: right;">Total Sum On Funding + Ens Tables </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="bottom-tab3">
                                        <div class="row">
                                            <div class="">

                                                <div class="main-content a-main a-full-w white-bg">
                                                    <div class="container-fluid">
                                                        <div class="offer-tabs">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">Q13 Investments</a></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                                                    <div class="col-md-7">
                                                                        <div class="row">
                                                                            <div class="col-md-7">
                                                                                <div class="online-clerk-wrap left-table">
                                                                                    <div class="table-container online-customers-table">
                                                                                        <table style="text-align: center;">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Q13 Investments</th>
                                                                                                    <th>Invest 1</th>
                                                                                                    <th>Invest 2</th>
                                                                                                    <th>Invest 3</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>13.3 Invest_Fee</td>
                                                                                                    <td class="inst_fee_1"></td>
                                                                                                    <td class="inst_fee_2"></td>
                                                                                                    <td class="inst_fee_3"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>13.4 Invest_Time</td>
                                                                                                    <td class="inst_year_1">Years</td>
                                                                                                    <td class="inst_year_2">Years</td>
                                                                                                    <td class="inst_year_3">Years</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Calc Month Again</td>
                                                                                                    <td class="inst_month_1">297</td>
                                                                                                    <td class="inst_month_2">280</td>
                                                                                                    <td class="inst_month_3"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div class="table-bottom-content d-f j-c-s-b a-i-c">
                                                                                        <span class="alert">*Sort invest 1-3 from low to high by years and give investments from low to high</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-5">
                                                                                <form class="A_loan_qa">
                                                                                    <div class="form-group">
                                                                                        <h1>13.1 Has_Invest</h1>
                                                                                        <input id="has_loan" type="radio" name="select1_inst" class="sel_7_r">
                                                                                        <label for="has_loan">Yes</label>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <h1>13.2 No_Invest</h1>
                                                                                        <input id="no_loan" type="radio" name="select1_inst" class="sel_7_l">
                                                                                        <label for="no_loan">No</label>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <ul class="d-f a-i-f-e">
                                                                            <li>
                                                                                <p class="green">Before Years:</p>
                                                                                <input type="text" value="30">
                                                                            </li>
                                                                            <li>
                                                                                <p class="blue">After Years:</p>
                                                                                <input type="text" value="27">
                                                                            </li>
                                                                        </ul>

                                                                        <ul class="sadasd">
                                                                            <li>Investments Process: <a href="#"> B>C>D>E>A>Done</a></li>
                                                                            <li>Invest 1 Implement on Loan Types:<a href="javascript:void(0);" class="main-button button- button-large">B>C</a></li>
                                                                            <li>Invest 2 Implement on Loan Types:<a href="javascript:void(0);" class="main-button button- button-large">C>D</a></li>
                                                                            <li>Invest 3 Implement on Loan Types:<a href="javascript:void(0);" class="main-button button- button-large">D>E>A</a></li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="col-md-12">
                                                    <form class="redio-design" id="top-3">
                                                <div class="form-group" style="display: none;">
                                                    <input id="_A_radio1_" type="radio" checked="" name="_name11_" value="A">
                                                    <label for="_A_radio1_">A</label>
                                                </div>
                                               
                                                <div class="form-group" style="display: none;" >
                                                    <input id="_A_radio3_" type="radio" name="_name11_" value="G">
                                                    <label for="_A_radio3_">G</label>
                                                </div>
                                                 <div class="form-group" style="display: none;">
                                                    <input id="_A_radio2_" type="radio" name="_name11_" value="F">
                                                    <label for="_A_radio2_">F</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="_A_radio4_" type="radio" name="_name11_" value="D">
                                                    <label for="_A_radio4_">D</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="_A_radio5_" type="radio" name="_name11_" value="B">
                                                    <label for="_A_radio5_">B</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="_A_radio6_" type="radio" name="_name11_" value="H">
                                                    <label for="_A_radio6_">H</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="_A_radio7_" type="radio" name="_name11_" value="E">
                                                    <label for="_A_radio7_">E</label>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <input id="_A_radio8_" type="radio" name="_name11_" value="C">
                                                    <label for="_A_radio8_">C</label>
                                                </div>
                                                    </form>
                                                </div>
                                                <div class="row-margin">
                                                    <div class="col-md-6">
                                                        <div class="funding-tree-container">
                                                            <ul class="d-f a-i-f-e">
                                                                <li><a href="javascript:void(0);" class="main-button button-green button-large">Funding tree</a></li>
                                                                <li>
                                                                    <div class="form-group">
                                                                        <label>Show years</label>
                                                                        <select class="selectpicker" style="display: none;">
                                                       <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
                                                    </select>
                                                                    </div>
                                                                </li>
                                                                <li class="input-max-years">
                                                                    <div class="form-group d-f a-i-c">
                                                                        <label>Max years:</label>
                                                                        <input type="text" class="form-control" id="max-years" name="max-years" placeholder="30">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="mortgage-linked-wrap">
                                                            <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                                <table >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>MR Linked</th>
                                                                            <th>MR (PMT)</th>
                                                                            <th>Left Pay Linked</th>
                                                                            <th>Left Pay</th>
                                                                            <th>Intrest Pay Linked</th>
                                                                            <th>Intrest Pay</th>
                                                                            <th>Net Pay Linked</th>
                                                                            <th>Net Pay</th>
                                                                            <th>Prime/Madad Month</th>
                                                                            <th>A</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1557.70</td>
                                                                            <td>1556.23</td>
                                                                            <td>177510.66</td>
                                                                            <td>177333.33</td>
                                                                            <td>1479.78</td>
                                                                            <td>1477.78</td>
                                                                            <td>78.53</td>
                                                                            <td>78.45</td>
                                                                            <td>0.10%</td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1559.34</td>
                                                                            <td>1556.23</td>
                                                                            <td>177609.39</td>
                                                                            <td>177254.88</td>
                                                                            <td>1477312</td>
                                                                            <td>1477.12</td>
                                                                            <td>79.26</td>
                                                                            <td>79.10</td>
                                                                            <td>0.20%</td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1560.90</td>
                                                                            <td>1556.23</td>
                                                                            <td>177707.31</td>
                                                                            <td>177175.78</td>
                                                                            <td>1476.46</td>
                                                                            <td>1476.46</td>
                                                                            <td>80.00</td>
                                                                            <td>79.76</td>
                                                                            <td>0.30%</td>
                                                                            <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1562.47</td>
                                                                            <td>1556.23</td>
                                                                            <td>177806.18</td>
                                                                            <td>177096.02</td>
                                                                            <td>1450.80</td>
                                                                            <td>1450.80</td>
                                                                            <td>81.51</td>
                                                                            <td>80.43</td>
                                                                            <td>0.40%</td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1564.03</td>
                                                                            <td>1556.23</td>
                                                                            <td>177902.44</td>
                                                                            <td>177015.59</td>
                                                                            <td>1474.77</td>
                                                                            <td>1475.13</td>
                                                                            <td>82.26</td>
                                                                            <td>81.10</td>
                                                                            <td>0.50%</td>
                                                                            <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1565.60</td>
                                                                            <td>1556.23</td>
                                                                            <td>177999.65</td>
                                                                            <td>177934.50</td>
                                                                            <td>1473.77</td>
                                                                            <td>1474.45</td>
                                                                            <td>83.03</td>
                                                                            <td>81.77</td>
                                                                            <td>0.60%</td>
                                                                            <td>6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1567.15</td>
                                                                            <td>1556.23</td>
                                                                            <td>178094.23</td>
                                                                            <td>176852.72</td>
                                                                            <td>1473.09</td>
                                                                            <td>1473.77</td>
                                                                            <td>83.81</td>
                                                                            <td>82.45</td>
                                                                            <td>0.70%</td>
                                                                            <td>7</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1568.73</td>
                                                                            <td>1556.23</td>
                                                                            <td>178189.74</td>
                                                                            <td>176770.27</td>
                                                                            <td>1472.39</td>
                                                                            <td>1473.09</td>
                                                                            <td>84.59</td>
                                                                            <td>83.14</td>
                                                                            <td>0.80%</td>
                                                                            <td>8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1570.30</td>
                                                                            <td>1556.23</td>
                                                                            <td>178284.38</td>
                                                                            <td>176687.13</td>
                                                                            <td>1471.69</td>
                                                                            <td>1472.39</td>
                                                                            <td>85.38</td>
                                                                            <td>83.83</td>
                                                                            <td>0.90%</td>
                                                                            <td>9</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1571.87</td>
                                                                            <td>1556.23</td>
                                                                            <td>178378.15</td>
                                                                            <td>176603.29</td>
                                                                            <td>1470.99</td>
                                                                            <td>1471.69</td>
                                                                            <td>86.18</td>
                                                                            <td>84.53</td>
                                                                            <td>1.01%</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1573.44</td>
                                                                            <td>1556.23</td>
                                                                            <td>178471.06</td>
                                                                            <td>176518.76</td>
                                                                            <td>1470.28</td>
                                                                            <td>1470.99</td>
                                                                            <td>86.99</td>
                                                                            <td>85.24</td>
                                                                            <td>1.11%</td>
                                                                            <td>11</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1575.14</td>
                                                                            <td>1556.23</td>
                                                                            <td>178577.19</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.99</td>
                                                                            <td>1470.28</td>
                                                                            <td>86.37</td>
                                                                            <td>85.95</td>
                                                                            <td>1.22%</td>
                                                                            <td>12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1576.85</td>
                                                                            <td>1556.23</td>
                                                                            <td>178857.63</td>
                                                                            <td>176518.76</td>
                                                                            <td>1470.28</td>
                                                                            <td>1470.99</td>
                                                                            <td>87.18</td>
                                                                            <td>85.24</td>
                                                                            <td>1.33%</td>
                                                                            <td>13</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1578.55</td>
                                                                            <td>1556.23</td>
                                                                            <td>178963.58</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.99</td>
                                                                            <td>1470.28</td>
                                                                            <td>86.37</td>
                                                                            <td>85.95</td>
                                                                            <td>1.43%</td>
                                                                            <td style="">14</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1578.55</td>
                                                                            <td>1556.23</td>
                                                                            <td>178963.58</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.28</td>
                                                                            <td>1470.28</td>
                                                                            <td>87.18</td>
                                                                            <td>85.95</td>
                                                                            <td>1.43%</td>
                                                                            <td>Sum</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="mortgage-linked-wrap">
                                                            <div class="table-container table-auto mortgage-linked-table">
                                                                <table >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>MR Linked</th>
                                                                            <th>MR (PMT)</th>
                                                                            <th>Left Pay Linked</th>
                                                                            <th>Left Pay</th>
                                                                            <th>Intrest Pay Linked</th>
                                                                            <th>Intrest Pay</th>
                                                                            <th>Net Pay Linked</th>
                                                                            <th>Net Pay</th>
                                                                            <th>Prime/Madad Month</th>
                                                                            <th>A</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1557.70</td>
                                                                            <td>1556.23</td>
                                                                            <td>177510.66</td>
                                                                            <td>177333.33</td>
                                                                            <td>1479.78</td>
                                                                            <td>1477.78</td>
                                                                            <td>78.53</td>
                                                                            <td>78.45</td>
                                                                            <td>0.10%</td>
                                                                            <td>1</td>
                                                                        </tr>

                                                                        <tr class="last-data">
                                                                            <td colspan="8" align="right" class="green">Total Sum on Funding + Ens Tables </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="funding-tree-container">
                                                            <ul class="d-f a-i-f-e">
                                                                <li><a href="javascript:void(0);" class="main-button button-red button-large">Funding tree</a></li>
                                                                <li>
                                                                </li>
                                                                <li class="input-max-years">
                                                                    <div class="form-group d-f a-i-c">
                                                                        <label>Max years:</label>
                                                                        <input type="text" class="form-control" id="max-years" name="max-years" placeholder="30">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="mortgage-linked-wrap">
                                                            <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                                <table class="e_step_7_table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>MR Linked</th>
                                                                            <th>MR (PMT)</th>
                                                                            <th>Left Pay Linked</th>
                                                                            <th>Left Pay</th>
                                                                            <th>Intrest Pay Linked</th>
                                                                            <th>Intrest Pay</th>
                                                                            <th>Net Pay Linked</th>
                                                                            <th>Net Pay</th>
                                                                            <th>Prime/Madad Month</th>
                                                                            <th>A</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1557.70</td>
                                                                            <td>1556.23</td>
                                                                            <td>177510.66</td>
                                                                            <td>177333.33</td>
                                                                            <td>1479.78</td>
                                                                            <td>1477.78</td>
                                                                            <td>78.53</td>
                                                                            <td>78.45</td>
                                                                            <td>0.10%</td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1559.34</td>
                                                                            <td>1556.23</td>
                                                                            <td>177609.39</td>
                                                                            <td>177254.88</td>
                                                                            <td>1477312</td>
                                                                            <td>1477.12</td>
                                                                            <td>79.26</td>
                                                                            <td>79.10</td>
                                                                            <td>0.20%</td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1560.90</td>
                                                                            <td>1556.23</td>
                                                                            <td>177707.31</td>
                                                                            <td>177175.78</td>
                                                                            <td>1476.46</td>
                                                                            <td>1476.46</td>
                                                                            <td>80.00</td>
                                                                            <td>79.76</td>
                                                                            <td>0.30%</td>
                                                                            <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1562.47</td>
                                                                            <td>1556.23</td>
                                                                            <td>177806.18</td>
                                                                            <td>177096.02</td>
                                                                            <td>1450.80</td>
                                                                            <td>1450.80</td>
                                                                            <td>81.51</td>
                                                                            <td>80.43</td>
                                                                            <td>0.40%</td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1564.03</td>
                                                                            <td>1556.23</td>
                                                                            <td>177902.44</td>
                                                                            <td>177015.59</td>
                                                                            <td>1474.77</td>
                                                                            <td>1475.13</td>
                                                                            <td>82.26</td>
                                                                            <td>81.10</td>
                                                                            <td>0.50%</td>
                                                                            <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1565.60</td>
                                                                            <td>1556.23</td>
                                                                            <td>177999.65</td>
                                                                            <td>177934.50</td>
                                                                            <td>1473.77</td>
                                                                            <td>1474.45</td>
                                                                            <td>83.03</td>
                                                                            <td>81.77</td>
                                                                            <td>0.60%</td>
                                                                            <td>6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1567.15</td>
                                                                            <td>1556.23</td>
                                                                            <td>178094.23</td>
                                                                            <td>176852.72</td>
                                                                            <td>1473.09</td>
                                                                            <td>1473.77</td>
                                                                            <td>83.81</td>
                                                                            <td>82.45</td>
                                                                            <td>0.70%</td>
                                                                            <td>7</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1568.73</td>
                                                                            <td>1556.23</td>
                                                                            <td>178189.74</td>
                                                                            <td>176770.27</td>
                                                                            <td>1472.39</td>
                                                                            <td>1473.09</td>
                                                                            <td>84.59</td>
                                                                            <td>83.14</td>
                                                                            <td>0.80%</td>
                                                                            <td>8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1570.30</td>
                                                                            <td>1556.23</td>
                                                                            <td>178284.38</td>
                                                                            <td>176687.13</td>
                                                                            <td>1471.69</td>
                                                                            <td>1472.39</td>
                                                                            <td>85.38</td>
                                                                            <td>83.83</td>
                                                                            <td>0.90%</td>
                                                                            <td>9</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1571.87</td>
                                                                            <td>1556.23</td>
                                                                            <td>178378.15</td>
                                                                            <td>176603.29</td>
                                                                            <td>1470.99</td>
                                                                            <td>1471.69</td>
                                                                            <td>86.18</td>
                                                                            <td>84.53</td>
                                                                            <td>1.01%</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1573.44</td>
                                                                            <td>1556.23</td>
                                                                            <td>178471.06</td>
                                                                            <td>176518.76</td>
                                                                            <td>1470.28</td>
                                                                            <td>1470.99</td>
                                                                            <td>86.99</td>
                                                                            <td>85.24</td>
                                                                            <td>1.11%</td>
                                                                            <td>11</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1575.14</td>
                                                                            <td>1556.23</td>
                                                                            <td>178577.19</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.99</td>
                                                                            <td>1470.28</td>
                                                                            <td>86.37</td>
                                                                            <td>85.95</td>
                                                                            <td>1.22%</td>
                                                                            <td>12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1576.85</td>
                                                                            <td>1556.23</td>
                                                                            <td>178857.63</td>
                                                                            <td>176518.76</td>
                                                                            <td>1470.28</td>
                                                                            <td>1470.99</td>
                                                                            <td>87.18</td>
                                                                            <td>85.24</td>
                                                                            <td>1.33%</td>
                                                                            <td>13</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1578.55</td>
                                                                            <td>1556.23</td>
                                                                            <td>178963.58</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.99</td>
                                                                            <td>1470.28</td>
                                                                            <td>86.37</td>
                                                                            <td>85.95</td>
                                                                            <td>1.43%</td>
                                                                            <td style="">14</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1578.55</td>
                                                                            <td>1556.23</td>
                                                                            <td>178963.58</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.28</td>
                                                                            <td>1470.28</td>
                                                                            <td>87.18</td>
                                                                            <td>85.95</td>
                                                                            <td>1.43%</td>
                                                                            <td>Sum</td>
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
                                    <div role="tabpanel" class="tab-pane active" id="bottom-tab4">
                                        <div class="row">
                                            <div class="">
                                                <div class="row-margin">
                                                    <div class="col-md-6">

                                                        <div class="mortgage-linked-wrap">
                                                            <div class="table-container table-auto mortgage-linked-table wid-scroll">
                                                                <table class="final_step_8">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>MR Linked</th>
                                                                            <th>MR</th>
                                                                            <th>Left Pay Linked</th>
                                                                            <th>Left Pay</th>
                                                                            <th>Intrest Pay Linked</th>
                                                                            <th>Intrest Pay</th>
                                                                            <th>Net Pay Linked</th>
                                                                            <th>Net Pay</th>
                                                                            <th>&nbsp;</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1557.70</td>
                                                                            <td>1556.23</td>
                                                                            <td>177510.66</td>
                                                                            <td>177333.33</td>
                                                                            <td>1477.78</td>
                                                                            <td>78.45</td>
                                                                            <td>78.45</td>
                                                                            <td>0.10%</td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1559.34</td>
                                                                            <td>1556.23</td>
                                                                            <td>177609.39</td>
                                                                            <td>177254.88</td>
                                                                            <td>1477.12</td>
                                                                            <td>79.10</td>
                                                                            <td>79.10</td>
                                                                            <td>0.20%</td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1560.90</td>
                                                                            <td>1556.23</td>
                                                                            <td>177707.31</td>
                                                                            <td>177175.78</td>
                                                                            <td>1476.46</td>
                                                                            <td>79.76</td>
                                                                            <td>79.76</td>
                                                                            <td>0.30%</td>
                                                                            <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1562.47</td>
                                                                            <td>1556.23</td>
                                                                            <td>177806.18</td>
                                                                            <td>177096.02</td>
                                                                            <td>1475.80</td>
                                                                            <td>80.43</td>
                                                                            <td>80.43</td>
                                                                            <td>0.40%</td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1564.03</td>
                                                                            <td>1556.23</td>
                                                                            <td>177902.44</td>
                                                                            <td>177015.59</td>
                                                                            <td>1475.13</td>
                                                                            <td>82.10</td>
                                                                            <td>81.10</td>
                                                                            <td>0.50%</td>
                                                                            <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1565.60</td>
                                                                            <td>1556.23</td>
                                                                            <td>177999.65</td>
                                                                            <td>177934.50</td>
                                                                            <td>1474.45</td>
                                                                            <td>81.77</td>
                                                                            <td>81.77</td>
                                                                            <td>0.60%</td>
                                                                            <td>6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1567.15</td>
                                                                            <td>1556.23</td>
                                                                            <td>178094.23</td>
                                                                            <td>176852.72</td>
                                                                            <td>1473.77</td>
                                                                            <td>82.45</td>
                                                                            <td>82.45</td>
                                                                            <td>0.70%</td>
                                                                            <td>7</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1568.73</td>
                                                                            <td>1556.23</td>
                                                                            <td>178189.74</td>
                                                                            <td>176770.27</td>
                                                                            <td>1473.09</td>
                                                                            <td>84.14</td>
                                                                            <td>83.14</td>
                                                                            <td>0.80%</td>
                                                                            <td>8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1570.30</td>
                                                                            <td>1556.23</td>
                                                                            <td>178284.38</td>
                                                                            <td>176687.13</td>
                                                                            <td>1471.69</td>
                                                                            <td>85.38</td>
                                                                            <td>83.83</td>
                                                                            <td>0.90%</td>
                                                                            <td>9</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1571.87</td>
                                                                            <td>1556.23</td>
                                                                            <td>178378.15</td>
                                                                            <td>176603.29</td>
                                                                            <td>1470.99</td>
                                                                            <td>86.18</td>
                                                                            <td>84.53</td>
                                                                            <td>1.01%</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1573.44</td>
                                                                            <td>1556.23</td>
                                                                            <td>178471.06</td>
                                                                            <td>176518.76</td>
                                                                            <td>1470.28</td>
                                                                            <td>86.99</td>
                                                                            <td>85.24</td>
                                                                            <td>1.11%</td>
                                                                            <td>11</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1575.14</td>
                                                                            <td>1556.23</td>
                                                                            <td>178577.19</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.99</td>
                                                                            <td>86.37</td>
                                                                            <td>85.95</td>
                                                                            <td>1.22%</td>
                                                                            <td>12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1576.85</td>
                                                                            <td>1556.23</td>
                                                                            <td>178857.63</td>
                                                                            <td>176518.76</td>
                                                                            <td>1470.28</td>
                                                                            <td>87.18</td>
                                                                            <td>85.24</td>
                                                                            <td>1.33%</td>
                                                                            <td>13</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1578.55</td>
                                                                            <td>1556.23</td>
                                                                            <td>178963.58</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.99</td>
                                                                            <td>86.37</td>
                                                                            <td>85.95</td>
                                                                            <td>1.43%</td>
                                                                            <td style="">14</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1578.55</td>
                                                                            <td>1556.23</td>
                                                                            <td>178963.58</td>
                                                                            <td>176433.52</td>
                                                                            <td>1470.28</td>
                                                                            <td>87.18</td>
                                                                            <td>85.95</td>
                                                                            <td>1.43%</td>
                                                                            <td>Sum</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="mortgage-linked-wrap">
                                                            <div class="table-container table-auto mortgage-linked-table">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>MR Linked</th>
                                                                            <th>MR (PMT)</th>
                                                                            <th>Left Pay Linked</th>
                                                                            <th>Left Pay</th>
                                                                            <th>Intrest Pay Linked</th>
                                                                            <th>Intrest Pay</th>
                                                                            <th>Net Pay Linked</th>
                                                                            <th>Net Pay</th>
                                                                            <th>&nbsp;</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1557.70</td>
                                                                            <td>1556.23</td>
                                                                            <td>177510.66</td>
                                                                            <td>177333.33</td>
                                                                            <td>1479.78</td>
                                                                            <td>78.53</td>
                                                                            <td>78.45</td>
                                                                            <td>0.10%</td>
                                                                            <td>1</td>
                                                                        </tr>

                                                                        <tr class="last-data">
                                                                            <td colspan="10" align="right" class="green">Total Sum on Funding + Ens Tables </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1 dsds">
                                                        <div class="form-group">
                                                            <label>Show years</label>
                                                            <select class="selectpicker sel_8_final">
                                                       <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
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
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 sdffdf">
                                                        <div class="funding-tree">
                                                            <div class="col-2 a1 not-green">
                                                                <p><span>Sensetivity Table</span>Month: 1-360</p>
                                                            </div>
                                                            <div class="col-2 a1">
                                                                <select class="selectpicker">
                                                      <option>Sensetivity First Month</option>
                                                      <option>Show All-1</option>
                                                      <option>Show All-2</option>
                                                </select>
                                                            </div>
                                                            <div class="col-2 a1">
                                                                <p><span>Month<p/>
                                                 <input type="text" placeholder="1">
                                              </div>
                                           </div>
                                        <div class="mortgage-linked-wrap">
                                           <div class="table-container table-auto sensetivity-table">
                                              <table>
                                                 <thead>
                                                    <tr>
                                                       <th>Prime +2</th>
                                                       <th>Prime +1</th>
                                                       <th>Prime 0</th>
                                                       <th>Prime -1</th>
                                                       <th>Prime -2</th>
                                                       <th>Month</th>
                                                    </tr>
                                                 </thead>
                                                 <tbody>
                                                    <tr>
                                                       <td>5000</td>
                                                       <td>4000</td>
                                                       <td>3000</td>
                                                       <td>2000</td>
                                                       <td>1000</td>
                                                       <td>Madad - 2</td>
                                                    </tr>
                                                    <tr>
                                                       <td>2000</td>
                                                       <td>2000</td>
                                                       <td>2000</td>
                                                       <td>2000</td>
                                                       <td>2000</td>
                                                       <td>Madad - 1</td>
                                                    </tr>
                                                    <tr>
                                                       <td>3000</td>
                                                       <td>3000</td>
                                                       <td>3000</td>
                                                       <td>3000</td>
                                                       <td>3000</td>
                                                       <td>Madad +0</td>
                                                    </tr>
                                                    <tr>
                                                       <td>4000</td>
                                                       <td>4000</td>
                                                       <td>4000</td>
                                                       <td>4000</td>
                                                       <td>4000</td>
                                                       <td>Madad +1</td>
                                                    </tr>
                                                    <tr>
                                                       <td>5000</td>
                                                       <td>5000</td>
                                                       <td>5000</td>
                                                       <td>5000</td>
                                                       <td>5000</td>
                                                       <td>Madad +2</td>
                                                    </tr>
                                                    
                                                 </tbody>
                                              </table>
                                           </div>
                                        </div>
                                        <P class="a-t-m">Change of Total MR Linked with the change of Prime/Madad Years by +2 to -2(%)</p>
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
