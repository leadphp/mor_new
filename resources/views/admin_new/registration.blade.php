@include('layouts.admin_top_header')
@include('layouts.admin_header_subheader')
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
                        <input type="text" class="form-control" id="best-bank-algo" name="best-bank-algo" placeholder="AA - Mizrahi " />
                    </div>
                    <div class="form-group">
                        <label>Mortgage Recommended (11.3 + 14.7 + 15.11)</label>
                        <input type="text" class="form-control" id="mortgage-recommended" name="best-bank-algo" placeholder="1,00,000" />
                    </div>
                    <div class="form-group">
                        <label>Req_PMT Recommended (12.1 + 14.8 + 15.12)</label>
                        <input type="text" class="form-control" id="req-pmt-recommended" name="req-pmt-recommended" placeholder="1,00,000" />
                    </div>
                </form>
            </div>
            <div class="all-questions-wrap d-f j-c-s-b a-i-f-e">
                <div class="question-container question-1-7 d-f j-c-s-b">
                    <div class="question-container question-1">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Q1-7 General Info</a>
                        <div class="table-container table-auto table-nowrap leaving-location-table">
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
										     <input type="radio" id="fieldOne" name="fieldSelected1">
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
										     <input type="radio" id="fieldTwo" name="fieldSelected1">
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
										     <input type="radio" id="fieldThree" checked name="fieldSelected1">
											 <label for="fieldThree">
											   <div class="selectedNo">--</div>
											   <div class="selectedYes">Yes</div>
											 </label>
										  </div>
										</td>
                                        <td>1.5 Monthly_Pay</td>
										<td>
										   <input type="text" placeholder="Value">
										</td>
                                    </tr>
                                    <tr>
                                        <td>1.4 Free_Aprt</td>
                                        <td>
										  <div class="inputYesNo">
										     <input type="radio" id="fieldFour" name="fieldSelected1">
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
                        </div>
                    </div>
                    <div class="question-container question-2 ">
                        <div class="table-container table-auto table-nowrap aprt-ownership-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>2.1 Aprt_Status</th>
                                        <th>With_Morg [1]</th>
                                        <th>With_Morg [2]</th>
                                        <th>No_Morg [3]</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2.2 Value_Prop</td>
                                        <td>
										  <input type="" placeholder="1k - 10m" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 10m" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 10m" />
										</td>
                                    </tr>
									<tr>
                                        <td>2.3 Morg_Left</td>
                                        <td>
										  <input type="" placeholder="1k - 10m" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 10m" />
										</td>
                                        <td>
										<input type="" placeholder="" />
										</td>
                                    </tr>
									<tr>
                                        <td>2.4 Owner_Value (2.2 - 2.3)</td>
                                        <td>
										  <input type="" placeholder="1k - 10m" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 10m" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 10m" />
										</td>
                                    </tr>
									<tr>
                                        <td>2.5 Monthly _Morg</td>
                                        <td>
										  <input type="" placeholder="1k - 100m" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 100m" />
										</td>
                                        <td>
										<input type="" placeholder="" />
										</td>
                                    </tr>
									<tr>
                                        <td>2.6 Monthly_Rental_Profit</td>
                                        <td>
										  <input type="" placeholder="1k - 100k" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 100k" />
										</td>
                                        <td>
										<input type="" placeholder="1k - 100k" />
										</td>
                                    </tr>
									<tr>
                                        <td>2.7 Which_Bank</td>
                                        <td>
										 <select class="aMorTable">
										   <option>AA Mizrahi</option>
										   <option>AA Mizrahi</option>
										   <option>AA Mizrahi</option>
										 </select>
										</td>
                                        <td>
										 <select class="aMorTable">
										   <option>BB Discount</option>
										   <option>BB Discount</option>
										   <option>BB Discount</option>
										 </select>
										</td>
										
										<td>
										<input type="" placeholder="" />
										</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-heading d-f tBoxDesign">
						    <input type="radio" checked id="boxOne" name="twoBox">
                            <label for="boxOne"  class="success-div d-f f-d-c j-c-c">
                                <span>2 Has_Aprt</span>
                                <span>2A: No_Morg, 2B: With_Morg</span>
                            </label>
							<input type="radio" id="boxTwo" name="twoBox">
                            <label for="boxTwo" class="alert-div d-f a-i-c">
                                <span>2C Don’t_Has_Aprt</span>
                            </label>
                        </div>
                    </div>
                    <div class="owner-monthly-container question-3">
                        <ul>
                            <li>
                                <div class="form-group d-f f-d-c a-i-c">
                                    <span>2.8 Max Owner_Value</span>
                                    <label>Max (2.4)</label>
                                    <input type="text" class="form-control" id="max_owner_value" name="max_owner_value" />
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </li>
                            <li>
                                <div class="form-group d-f f-d-c a-i-c">
                                    <span>2.9 Total Monthly_Pay</span>
                                    <label>(Sum 1.5 + Sum 2.5 - Sum 2.6)</label>
                                    <input type="text" class="form-control" id="total_monthly_pay" name="total_monthly_pay" />
                                    <i class="fa fa-arrow-right"></i>
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="question-container question-3-7">
                        <div class="table-container table-auto table-nowrap aprt-ownership-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">General Info <i class="fa fa-question-circle" style="float: right;"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3. Geneder</td>
                                        <td>
										<select>
										  <option>Male</option>
										  <option>Female</option>
										</select>
										</td>
                                    </tr>
                                    <tr>
                                        <td>4. Family_Income</td>
                                        <td><input type="taxt" placeholder="value"></td>
                                    </tr>
                                    <tr>
                                        <td>5.1 Stable</td>
										<td>
                                        <select>
										  <option>Yes</option>
										  <option>No</option>
										</select>
										</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data-multiple">5.2 Can_Save_Money</span>
                                            <span class="data-multiple">If 5.1 Yes:0, If No:value above 1000</span>
                                        </td>
                                        <td>
										  <input type="taxt" placeholder="value">
										</td>

                                    </tr>
                                    <tr>
                                        <td>6. Bank_Account</td>
                                        <td>
										<select>
										  <option>AA- II Banks</option>
										  <option>AA- II Banks</option>
										  <option>AA- II Banks</option>
										  <option>AA- II Banks</option>
										</select>
										</td>
                                    </tr>
                                    <tr>
                                        <td>7. Move_Bank</td>
										<td>
                                        <select>
										  <option>Yes</option>
										  <option>No</option>
										</select>
										</td>
                                    </tr>
                                    <tr>
                                        <td>7.1 Oldest age of loan holder? </td>
										<td><input type="taxt" placeholder="18 - 120"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="question-container question-8-11 d-f">
                    <div class="question-8-11-left">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Q8-11 Define Needs</a>
                        <h2>Q8 Mortgage Cause</h2>
                        <div class="mortgage-cause d-f j-c-s-b">
                            <div class="m-c-heading">
                                Q8 Mortgage Cause
                            </div>
                            <div class="m-c-1">
                                <ul>
                                    <li>
                                        <span>8.1 New_Aprt</span>
                                        <span>
										 <div class="inputYesNo">
										     <input type="radio" id="fieldFive" name="fieldSelected2">
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
										     <input type="radio" checked id="fieldSix" name="fieldSelected2">
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
										     <input type="radio" id="fieldSeven" name="fieldSelected2">
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
										     <input type="radio" id="fieldEight" name="fieldSelected2">
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
										     <input type="radio" id="fieldNine" name="fieldSelected2">
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
                            <div class="question-9-11 d-f f-d-c">
                                <div class="m-c-4 no-margin">
                                    <h2>Q9 Person Type</h2>
                                    <div class="m-c-heading">
                                        Q9 Person Type
                                    </div>
                                    <ul>
                                        <li>
                                            <span>9.1 Investor</span>
                                            <span>
											  <div class="inputYesNo">
												 <input type="radio" id="fieldTen" checked name="fieldSelected5">
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
												 <input type="radio" id="fieldEleven" name="fieldSelected5">
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
												 <input type="radio" id="fieldTwelve" name="fieldSelected5">
												 <label for="fieldTwelve">
												   <div class="selectedNo">X</div>
												   <div class="selectedYes">Yes</div>
												 </label>
											   </div>
										    </span>
                                        </li>
                                    </ul>
                                </div>
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
                                                <div class="col-md-6">
                                                    <div class="a-month-return">
                                                        <div class="col-2">
                                                            <span>10.1 Enter_Month (0 or 3-36)</span> Grace Period
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="month" name="month" /> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="a-month-return">
                                                        <div class="col-2">
                                                            <span>10.2 Req_Grace</span> If Chose 5.1 Val 12.1
                                                            <br/> If Chose 5.1 Val 12.1
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="req-grace" name="req-grace" /> </div>
                                                    </div>
                                                </div>
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
                                                <div class="col-md-4">
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
                                                                <input type="text" class="form-control" id="property-value" name="property-value" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.2 Self_funding</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="self-funding" name="self-funding" /> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
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
                                                                <input type="text" class="form-control" id="property-value-1" name="property-value-1" placeholder="1k-10m" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.4 Property_Market_Value</span> If above 1.8 M set to 1.8M
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="market-value" name="market-value" placeholder="1,800,000 (Max)" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.2 Self_Funding</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="self-funding-1" name="self-funding-1" placeholder="1k-10m" /> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
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
                                                                <input type="text" class="form-control" id="property-value-2" name="property-value-2" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.3 Mortgage_Fee</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="mortgage-fee" name="mortgage-fee" /> </div>
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
                    <div class="question-8-11-right">
                        <div class="bank-customer-discount">
                            <h3>Discount (For The Bank Customers)</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" placeholder="-0.5%" />
                                <span class="indicator i-green">1</span>
                            </div>
                            <ul>
                                <li><span class="text-green">Green</span> - Enabled & have bank match ( Bank By Algo = Q6 )</li>
                                <li><span class="text-grey">Grey</span> - Enabled & don’t have bank match.</li>
                                <li><span class="text-red">Red</span> - Disabled on bank interest tables.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="question-container">
                    <div class="question-12-16 d-f f-d-c">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered" style="margin-top: 20px;">Q12-Q16 Finance Info</a>
                        <div class="table-container table-auto finance-info-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="28">Nper-Pmt Table <i style="float:right;" class="fa fa-question-circle"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12.2 Req_NPER (Slider)</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Mean Interest Bank: (A+D+H) / 3 at bank AA</td>
                                        <td>0.33</td>
                                        <td>0.32</td>
                                        <td>0.31</td>
                                        <td>0.30</td>
                                        <td>0.29</td>
                                        <td>0.28</td>
                                        <td>0.27</td>
                                        <td>0.26</td>
                                        <td>0.25</td>
                                        <td>0.24</td>
                                        <td>0.23</td>
                                        <td>0.22</td>
                                        <td>0.21</td>
                                        <td>0.20</td>
                                        <td>0.19</td>
                                        <td>0.18</td>
                                        <td>0.17</td>
                                        <td>0.16</td>
                                        <td>0.15</td>
                                        <td>0.14</td>
                                        <td>0.13</td>
                                        <td>0.12</td>
                                        <td>0.11</td>
                                        <td>0.10</td>
                                        <td>0.09</td>
                                        <td>0.08</td>
                                        <td>0.07</td>
                                    </tr>
                                    <tr>
                                        <td>12.1 Req_PMT (Slider)</td>
                                        <td>11272</td>
                                        <td>10015</td>
                                        <td>9155</td>
                                        <td>8511</td>
                                        <td>7996</td>
                                        <td>7562</td>
                                        <td>7180</td>
                                        <td>6835</td>
                                        <td>6515</td>
                                        <td>6212</td>
                                        <td>5922</td>
                                        <td>5642</td>
                                        <td>5369</td>
                                        <td>5102</td>
                                        <td>4839</td>
                                        <td>4580</td>
                                        <td>4325</td>
                                        <td>4072</td>
                                        <td>3821</td>
                                        <td>3574</td>
                                        <td>3328</td>
                                        <td>3086</td>
                                        <td>2847</td>
                                        <td>2611</td>
                                        <td>2379</td>
                                        <td>2151</td>
                                        <td>1929</td>
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
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="monthly-return">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q12 Monthly Return</h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>12.1 Req_PMT (Wanted MR)</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="wanted-mr" name="wanted-mr"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>12.3 Expenses to Income Ratio</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="income-ratio" name="income-ratio" placeholder="0-39%"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>12.2 Req_NPER (Wanted Years)</span> If ( 80 age - 12.2 &#60; 7.1) <br/>Give blue message
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="wanted-years" name="wanted-years" placeholder="4-30"> </div>
                                                    </div>
                                                </div>
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
                                                            <input type="text" class="form-control" id="mortgage-fee-1" name="mortgage-fee-1"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="req-table-ratio">
                                                        <div class="form-group">
                                                            <label><span>20.4:</span> Regulation Table (%)</label>
                                                            <div class="r-t-r-input-container d-f a-i-c">
                                                                <input type="text" class="form-control" id="regulation-table-percent" name="regulation-table-percent" placeholder="50 / 70 / 75%">
                                                                <span>See Regulation_Table for Calc</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><span>11.4:</span> Morg_Ratio (%)</label>
                                                            <div class="r-t-r-input-container d-f a-i-c">
                                                                <input type="text" class="form-control" id="morg-ratio" name="morg-ratio" placeholder="1-100%">
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
                                                <div class="col-md-8">
                                                    <div class="table-container table-auto table-nowrap investments-table">
                                                        <table>
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
                                                                    <td><input type="text" placeholder="1k - 10m"></td>
                                                                    <td><input type="text" placeholder="1k - 10m"></td>
                                                                    <td><input type="text" placeholder="1k - 10m"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13.4 Invest_Time</td>
                                                                    <td><input type="text" placeholder="1-20"></td>
                                                                    <td><input type="text" placeholder="1-20"></td>
																	<td><input type="text" placeholder="1k - 10m"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <form class="A_loan_qa">
                                                        <div class="form-group">
                                                            <h1>13.1 Has_Invest</h1>
                                                            <input id="has_loan" type="radio" name="select1">
                                                            <label for="has_loan">Yes</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <h1>13.2 No_Invest</h1>
                                                            <input id="no_loan" type="radio" name="select1">
                                                            <label for="no_loan">No</label>
                                                        </div>
                                                    </form>
                                                </div>
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
                                                <div class="col-md-4">
                                                    <div class="online-clerk-wrap left-table">
                                                        <div class="table-container online-customers-table">
                                                            <table style="text-align: center;">
                                                                <thead>
                                                                    <tr>
                                                                        <td>
                                                                            <h2>Q14 Current Loans</h2>
                                                                        </td>
                                                                        <td><span class="indicator i-green">1</span></td>
                                                                        <td><span class="indicator i-red">1</span></td>
                                                                        <td><span class="indicator i-green">1</span></td>

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
																		  <input type="text" placeholder="1k - 10m">
																		</td>
																		<td>
																		  <input type="text" placeholder="1k - 10m">
																		</td>
																		<td>
																		  <input type="text" placeholder="1k - 10m">
																		</td>
                                                                    </tr>
                                                                    <tr>
																	    <td>14.4 Loan_Time</td>
																		<td>
																		  <input type="text" placeholder="1-30 years">
																		</td>
                                                                        <td>
																		  <input type="text" placeholder="1-30 years">
																		</td>
																		<td>
																		  <input type="text" placeholder="1-30 years">
																		</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>--</td>
                                                                        <td>--</td>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>14.6 Monthly Return (MR)</td>
                                                                        <td>
																		  <input type="text" placeholder="PMT">
																		</td>
																		<td>
																		  <input type="text" placeholder="PMT">
																		</td>
																		<td>
																		  <input type="text" placeholder="PMT">
																		</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <form class="A_loan_qa">
                                                        <div class="form-group">
                                                            <h1>14.1 Has_Loans</h1>
                                                            <input id="has_loanA1" type="radio" name="selectA1">
                                                            <label for="has_loanA1">Yes</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <h1>14.2 No_Loans</h1>
                                                            <input id="no_loanA2" type="radio" name="selectA1">
                                                            <label for="no_loanA2">No</label>
                                                        </div>
                                                    </form>

                                                    <form class="A_table-input">
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>14.7: Loan_Fee (increase mortgage fee 11.3)</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p>Sum green 14.3 (0-3 green max)</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>14.8: Monthly_Return (increase Req_PMT 12.1)</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p>Sum green 14.6 (0-3 green max)</p>
                                                        </div>
                                                    </form>


                                                </div>
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
                                                <div class="col-md-4">
                                                    <div class="table-container online-customers-table left-table">
                                                        <table style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <td>Future Loans</td>
                                                                    <td><span class="indicator i-green">1</span></td>
                                                                    <td><span class="indicator i-red">1</span></td>
                                                                    <td><span class="indicator i-green">1</span></td>

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
																	  <input type="text" placeholder="1k - 10m">
																	</td>
                                                                    <td>
																	  <input type="text" placeholder="1k - 10m">
																	</td>
																	<td>
																	  <input type="text" placeholder="1k - 10m">
																	</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.4 Loan_Time</td>
																	<td>
																	  <input type="text" placeholder="1-30 years">
																	</td>
                                                                    <td>
																	  <input type="text" placeholder="1-30 years">
																	</td>
																	<td>
																	  <input type="text" placeholder="1-30 years">
																	</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.5 Interest</td>
																	<td>
																	  <input type="text" placeholder="0-100%">
																	</td>
                                                                    <td>
																	  <input type="text" placeholder="0-100%">
																	</td>
																	<td>
																	  <input type="text" placeholder="0-100%">
																	</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.6 Monthly Return (MR)</td>
																	<td>
																	  <input type="text" placeholder="PMT Calc">
																	</td>
																	<td>
																	  <input type="text" placeholder="PMT Calc">
																	</td>
																	<td>
																	  <input type="text" placeholder="PMT Calc">
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
                                                            <div class="table-container online-customers-table">
                                                                <table style="text-align: center;">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>Constant Bank Loans</td>
                                                                            <td><span class="indicator i-green">1</span></td>
                                                                            <td><span class="indicator i-red">1</span></td>
                                                                            <td><span class="indicator i-red">1</span></td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th><span>Q15B</span> Constant Future Loans </th>
                                                                            <th>AA-Mizrachi </th>
                                                                            <th>DD-Hpoalim</th>
                                                                            <th>EE-Leumi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> 15.7 Loan_fee</td>
																			<td>
																			  <input type="text" placeholder="1k - 10m">
																			</td>
                                                                            <td>
																			  <input type="text" placeholder="1k - 10m">
																			</td>
																			<td>
																			  <input type="text" placeholder="1k - 10m">
																			</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15.8 Loan_Time</td>
																			<td>
																			  <input type="text" placeholder="1-30 years">
																			</td>
                                                                            <td>
																			  <input type="text" placeholder="1-30 years">
																			</td>
																			<td>
																			  <input type="text" placeholder="1-30 years">
																			</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15.9 Interest</td>
																			<td>
																			  <input type="text" placeholder="0-100%">
																			</td>
                                                                            <td>
																			  <input type="text" placeholder="0-100%">
																			</td>
																			<td>
																			  <input type="text" placeholder="0-100%">
																			</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15.10 Monthly Return (MR)</td>
																			<td>
																			  <input type="text" placeholder="PMT Calc">
																			</td>
                                                                            <td>
																			  <input type="text" placeholder="PMT Calc">
																			</td>
																			<td>
																			  <input type="text" placeholder="PMT Calc">
																			</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <form class="A_loan_qa">
                                                        <div class="form-group">
                                                            <h1>15.1 Has_Loans</h1>
                                                            <input id="has_loanA11" type="radio" name="selectA2">
                                                            <label for="has_loanA11">Yes</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <h1>15.2 No_Loans</h1>
                                                            <input id="no_loanA12" type="radio" name="selectA2">
                                                            <label for="no_loanA12">No</label>
                                                        </div>
                                                    </form>

                                                    <form class="A_table-input">
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>15.11: Loan_Fee (decrease mortgage fee 11.3)</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p>Sum green 15.3 (3 max) + green 15.7 (1 max)</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>15.12: Monthly_Return (decrease Req_PMT 12.1)</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p>Sum green 15.6 (3 max) + green 15.10 (1 max)</p>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="question-16-container">
                                    <div class="question-16-header d-f a-i-c">
                                        <h2>Q16 Elegebility</h2>
                                        <a href="javascript:void(0);" class="main-button button-large button-green">Elegeble</a>
                                        <a href="javascript:void(0);" class="main-button button-large button-red">Not Elegeble</a>
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
                                                                    <div class="td-input d-f a-i-c"><span>Total Points</span> <input type="text" class="form-control" id="total-points" name="total-points" placeholder="30-5050" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="points-1" name="points-1" placeholder="30-5050" /></td>
                                                                <td><input type="text" class="form-control" id="value-1" name="value-1" placeholder="0-30" /></td>
                                                                <td>Q16.1 Number of married years</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Basic Score</span> <input type="text" class="form-control" id="basic-score" name="basic-score" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="value-2" name="value-2" placeholder="0-20" /></td>
                                                                <td><input type="text" class="form-control" id="value-3" name="value-3" placeholder="0-36" /></td>
                                                                <td>Q16.2 Number of kids until age 21</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Army score</span><input type="text" class="form-control" id="army-score" name="army-score" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="points-3" name="points-3" placeholder="0-1350" /></td>
                                                                <td><input type="text" class="form-control" id="value-3" name="value-3" placeholder="0-36" /></td>
                                                                <td>Q16.3 Number of brothers and sisters from both sides that are residents of Israel</td>
                                                            </tr>
                                                            <tr class="input-green">
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Eligibility score </span><input type="text" class="form-control" id="eligibility-score" name="eligibility-score" /></div>
                                                                </td>
                                                                <td><input type="text" class="form-control" id="points-4" name="points-4" placeholder="0-1350" /></td>
                                                                <td><input type="text" class="form-control" id="value-4" name="value-4" placeholder="0-30" /></td>
                                                                <td>Q16.4 Number of month for army services for men (0-36 month)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table> -->
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
                                                                    <div class="td-input d-f a-i-c"><span>Total Points</span> <input type="text" class="form-control" id="total-points" name="total-points" placeholder="30-5050" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Basic Score</span> <input type="text" class="form-control" id="basic-score" name="basic-score" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Army score</span><input type="text" class="form-control" id="army-score" name="army-score" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr class="input-green">
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>Eligibility score </span><input type="text" class="form-control" id="eligibility-score" name="eligibility-score" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="points-1" name="points-1" placeholder="30-5050" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="value-2" name="value-2" placeholder="0-2000" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" id="points-3" name="points-3" placeholder="0-1350" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" id="points-3" name="points-3" placeholder="Service Points (Q16.4 + Q16.5)" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" id="points-4" name="points-4" placeholder="0-1350" /></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="value-1" name="value-1" placeholder="0-30" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="value-3" name="value-3" placeholder="0-15" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="value-3" name="value-3" placeholder="0-20" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="value-4" name="value-4" placeholder="0-36" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control" id="value-5" name="value-5" placeholder="0-24" /></td>
                                                            </tr>
                                                        </table>
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