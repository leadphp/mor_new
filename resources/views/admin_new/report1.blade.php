@include('layouts.admin_top_header')
@include('layouts.admin_header_subheader')

	<div class="main-content report1-admin">
        <div class="container-fluid">
            <div class="row report-online">
                <div class="col-md-8">
                    <form class="redio-design" id="top-1">
                        <div class="form-group">
                            <input id="radio1" type="radio" checked name="select1">
                            <label for="radio1">AA - Mizrahi</label>
                        </div>
                        <div class="form-group">
                            <input id="radio2" type="radio" name="select1">
                            <label for="radio2">BB-Discount</label>
                        </div>
                        <div class="form-group">
                            <input id="radio3" type="radio" name="select1">
                            <label for="radio3">CC - Igud</label>
                        </div>
                        <div class="form-group">
                            <input id="radio4" type="radio" name="select1">
                            <label for="radio4">DD- Hapolaim</label>
                        </div>
                        <div class="form-group">
                            <input id="radio5" type="radio" name="select1">
                            <label for="radio5">EE - Leumi</label>
                        </div>
                        <div class="form-group">
                            <input id="radio6" type="radio" name="select1">
                            <label for="radio6">FF - Otsar Hahayal</label>
                        </div>
                        <div class="form-group">
                            <input id="radio7" type="radio" name="select1">
                            <label for="radio7">GG- Jerusalem</label>
                        </div>
                        <div class="form-group">
                            <input id="radio8" type="radio" name="select1">
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
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="a-month-return">
                                                            <div class="col-2">
                                                                <span>12.1 Req_PMT</span> (Wanted MR)
                                                            </div>
                                                            <div class="col-2">
                                                                <button class="a-time-selection">1 - 10m</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="a-month-return">
                                                            <div class="col-2">
                                                                <span>12.2 Req_NPER</span> (Wanted MR)
                                                            </div>
                                                            <div class="col-2">
                                                                <button class="a-time-selection">1 - 10m</button>
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
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active req-mortgage" id="customer-offers">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="a-month-return">
                                                            <div class="col-2">
                                                                <span>11.3 Mortgage_Fee</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <button class="a-time-selection">1k - 10m</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form class="A_table-full">
                                                            <div class="form-group">
                                                                <p>11.4: Morg_Ratio (%)
                                                                </p>
                                                                <input type="text" placeholder="1-100%">
                                                            </div>
                                                            <div class="form-group">
                                                                <p>11.5: Regulation Table (%)</p>
                                                                <input type="text" placeholder="50/70/75%">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-content a-main">
                                <div class="container-fluid">
                                    <div class="offer-tabs A_current_loan">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation " class="active"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">customer offers</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <a class="A_title_table" href="javascript:void(0)">Q14 Current Loans</a>
                                                        <div class="online-clerk-wrap left-table">
                                                            <div class="table-container online-customers-table">
                                                                <table style="text-align: center;">
                                                                    <thead>
                                                                        <tr>
                                                                            <td></td>
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
                                                                            <td>1k - 10m</td>
                                                                            <td>1k - 10m</td>
                                                                            <td>1k - 10m</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>14.4 Loan_Time</td>
                                                                            <td>1-30 years</td>
                                                                            <td>1-30 years</td>
                                                                            <td>1-30 years</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>14.6 Monthly Return (MR)</td>
                                                                            <td>PMT )</td>
                                                                            <td>PMT )</td>
                                                                            <td>PMT )</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <form class="A_loan_qa">
                                                            <div class="form-group">
                                                                <h1>14.1 Has_Loans</h1>
                                                                <input id="has_loan" type="radio" name="select1">
                                                                <label for="has_loan">Yes</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <h1>14.2 No_Loans</h1>
                                                                <input id="no_loan" type="radio" name="select1">
                                                                <label for="no_loan">No</label>
                                                            </div>
                                                        </form>
                                                        <form class="A_table-input">
                                                            <div class="form-group">
                                                                <i class="fa fa-arrow-right"></i>
                                                                <p>14.7: Loan_Fee</p>
                                                                <input type="text" placeholder="Loan_Fee_Sum">
                                                                <p>Sum green 14.3</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <i class="fa fa-arrow-right"></i>
                                                                <p>14.8: PMT Sum</p>
                                                                <input type="text" placeholder="Loan_Fee_Sum">
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
                                                <ul>
                                                    <li>1. ezhotel1@gmail.com | Error#3: Did not find any bank with intrest.</li>
                                                    <li>2. ezhotel2@gmail.com | Error#4: Report did not initiated.</li>
                                                    <li>3. ezhotel3@gmail.com | Error#5: Lorem Ipsum dolor sit</li>
                                                    <li>4. kobi123@gmail.com | Error#5: Lorem Ipsum dolor sit</li>
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
                                    <div role="tabpanel" class="tab-pane active" id="customer-offers">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="A_title_table" href="javascript:void(0)">Q15 Future Loans</a>
                                                <div class="online-clerk-wrap left-table">
                                                    <div class="table-container online-customers-table">
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
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.4 Loan_Time</td>
                                                                    <td>1-30 years</td>
                                                                    <td>1-30 years</td>
                                                                    <td>1-30 years</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.5 Interest</td>
                                                                    <td>0-100%</td>
                                                                    <td>0-100%</td>
                                                                    <td>0-100%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.6 Monthly Return (MR)</td>
                                                                    <td>PMT Calc</td>
                                                                    <td>PMT Calc</td>
                                                                    <td>PMT Calc</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="A-title_center"><b>Consider if you move to above banks only (from Other bank)</b> Take into account only if Q7: Yes & Q6 different from <a href="javascript:void(0);">Bank By Algo</a> &
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
                                                                    <th><span>Q15B</span>Constant Future Loans </th>
                                                                    <th>AA-Mizrachi </th>
                                                                    <th>DD-Hpoalim</th>
                                                                    <th>EE-Leumi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> 15.7 Loan_fee</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.8 Loan_Time</td>
                                                                    <td>1-30 years</td>
                                                                    <td>1-30 years</td>
                                                                    <td>1-30 years</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.9 Interest</td>
                                                                    <td>0-100%</td>
                                                                    <td>0-100%</td>
                                                                    <td>0-100%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.10 Monthly Return (MR)</td>
                                                                    <td>PMT Calc</td>
                                                                    <td>PMT Calc</td>
                                                                    <td>PMT Calc</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <form class="A_loan_qa">
                                                    <div class="form-group">
                                                        <h1>15.1 Has_Future_Loans</h1>
                                                        <input id="has_loan" type="radio" name="select1">
                                                        <label for="has_loan">Yes</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <h1>15.2 No_Future_Loans</h1>
                                                        <input id="no_loan" type="radio" name="select1">
                                                        <label for="no_loan">No</label>
                                                    </div>
                                                </form>
                                                <form class="A_table-input">
                                                    <div class="form-group">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <p>15.11: Loan_Fee</p>
                                                        <input type="text" placeholder="- Loan_Fee_Sum">
                                                        <p>Sum green 15.3 (0-3 max) + green 15.7 (0-1max)</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <p>15.12: PMT Sum</p>
                                                        <input type="text" placeholder="- PMT Sum">
                                                        <p>Sum green 15.6 (0-3 max) + green 15.10 (0-1 max)</p>
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
                                                                <span>20.2 Req_PMT_Algo</span> (Wanted MR)
                                                            </div>
                                                            <div class="col-2">
                                                                <button class="a-time-selection">1 - 10m</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="a-month-return">
                                                            <div class="col-2">
                                                                <span>12.2 Req_NPER</span> (Wanted Years)
                                                            </div>
                                                            <div class="col-2">
                                                                <button class="a-time-selection">4-30</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row first-tab">
                                        <div class="A_table-div">
                                            <div class="col-md-6">
                                                <div class="A_table-input">
                                                    <div class="form-group">
                                                        <p>11.1 Property_Value</p>
                                                        <input type="text" placeholder="1k-10m">
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
                                                                                    <span>Q6 Customer Bank_Account</span>
                                                                                </div>
                                                                                <div class="col-2">
                                                                                    <button class="a-time-selection">AA-HH</button>
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
                                                <div class="A_table-input">
                                                    <div class="form-group">
                                                        <p>11.4 Property_Market_Value for 11B</p>
                                                        <input type="text" placeholder="1.8M (max)">
                                                    </div>
                                                    <div class="form-group">
                                                        <h3 class="blue-color">Discount (For The Bank Customers)</h3>
                                                        <input class="text-center" type="text" placeholder="-0.5%">
                                                        <span class="indicator i-green">1</span>
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
                                                                <span>20.1 Req_Morg_Algo</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <button class="a-time-selection">1k - 10m</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form class="A_table-full">
                                                            <div class="form-group">
                                                                <p>20.3: Morg_Ratio (%)
                                                                    <span>if 11A/C: Calc 20.1/11.1, if 11B:20.1/11.4 </span>
                                                                </p>
                                                                <input type="text" placeholder="1-100%">
                                                            </div>
                                                            <div class="form-group">
                                                                <p>20.4: Regulation Table (%)</p>
                                                                <input type="text" placeholder="50/70/75%">
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
                                                                <h1>20.5: Needs Enslavemnt?
                                                                    <span>Yes 20.3>20.4 </span>
                                                                </h1>
                                                                <div class="selection">
                                                                    <input id="algo1" type="radio" checked name="algo">
                                                                    <label for="algo1">Yes</label>
                                                                </div>
                                                                <div class="selection">
                                                                    <input id="algoNo" type="radio" name="algo">
                                                                    <label for="algoNo">No</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h1>14.2 No_Loans</h1>
                                                                <div class="selection">
                                                                    <input id="algo2" type="radio" checked name="algo2">
                                                                    <label for="algo2">Yes</label>
                                                                </div>
                                                                <div class="selection">
                                                                    <input id="algo2NO" type="radio" name="algo2">
                                                                    <label for="algo2NO">No</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form class="A_table-full">
                                                            <div class="form-group">
                                                                <p>20.6: Minimum Ens (%) </p>
                                                                <input type="text" placeholder="1-50%">
                                                                <p><span>If Yes: Calc 20.3-20.4, If No: 0%</span></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <p>2.8 Aprt MAX Value</p>
                                                                <input type="text" placeholder="">
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
                                <p><span>20.8: Funding Morg</span> Calc 20.1 *minimum (20.4 or 20.3)
                                </p>
                            </div>
                            <div class="col-2 a2">
                                <input type="text" placeholder="1k-10m">
                                <span>Ratio:</span>
                                <input type="text" placeholder="0-75%">
                            </div>
                            <div class="col-2 a3">
                                <span>20.11 Funding Type Table</span>
                                <input type="text" placeholder="Funding A_1-45">
                            </div>
                            <div class="col-2 a4">
                                <h3>Best On Loan Tree</h3>
                                <input type="text" placeholder="Start, H1-4, L1-5">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 normal-full">
                        <div class="funding-tree tree_right">
                            <div class="col-2 a1">
                                <button class="a-time-selection">Enslevment Tree</button>
                                <p><span>20.9: Enslevment Morg</span> Calc 20.1*20.6
                                </p>
                            </div>
                            <div class="col-2 a2">
                                <input type="text" placeholder="1k-10m">
                                <span>Ratio:</span>
                                <input type="text" placeholder="1%-75%">
                            </div>
                            <div class="col-2 a4 last">
                                <div class="form-group">
                                    <h3>20.7 To check Ens. with algo?</h3>
                                    <div class="selection">
                                        <input id="algo2" type="radio" checked="" name="algo2">
                                        <label for="algo2">Yes</label>
                                    </div>
                                    <div class="selection">
                                        <input id="algo2NO" type="radio" name="algo2">
                                        <label for="algo2NO">No</label>
                                    </div>
                                </div>

                                <div class="A_right_p">
                                    <p><b>YES:</b> Aprt max val 2.8 above 20.9 & value 20.7 yes & 20.5 yes</p>
                                    <p><b>NO:</b> put 20.9 to be 0 and ratio 0% (No Ens. calc needed)</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-content a-main A_final_mr">
                            <div class="container-fluid">
                                <div class="offer-tabs A_future_loan">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class=""><a href="#tab_A1" aria-controls="tab_A1" role="tab" data-toggle="tab">Start</a></li>
                                        <li role="presentation " class="blue"><a href="#tab_A2" aria-controls="tab_A2" role="tab" data-toggle="tab">H1, h2, h3, h4</a></li>
                                        <li role="presentation " class="active"><a href="#tab_A3" aria-controls="tab_A" role="tab" data-toggle="tab">l1, l2, l3, l4, l5</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane " id="tab_A1">
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>26612</td>
                                                                            <td>31944</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right">2/3</td>
                                                                            <td>886667</td>
                                                                            <td class="b-o-bottom-right-left">10</td>
                                                                            <td>0.29</td>
                                                                            <td>22722</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert"></span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>26612</td>
                                                                            <td>31944</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right">2/3</td>
                                                                            <td>886667</td>
                                                                            <td class="b-o-bottom-right-left">10</td>
                                                                            <td>0.29</td>
                                                                            <td>22722</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert"></span><span class="t-b-c-full red success">** No elegebility</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab_A2">
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>23367</td>
                                                                            <td>28118</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">Linked</td>
                                                                            <td>B</td>
                                                                            <td class="b-o-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">10</td>
                                                                            <td>0.29</td>
                                                                            <td>11361</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Not Linked</td>
                                                                            <td class="b-o-bottom">E</td>
                                                                            <td class="b-o-bottom-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">15</td>
                                                                            <td>0.21</td>
                                                                            <td>8116</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>23367</td>
                                                                            <td>28118</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">Linked</td>
                                                                            <td>B</td>
                                                                            <td class="b-o-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">10</td>
                                                                            <td>0.29</td>
                                                                            <td>11361</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Not Linked</td>
                                                                            <td class="b-o-bottom">E</td>
                                                                            <td class="b-o-bottom-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">15</td>
                                                                            <td>0.21</td>
                                                                            <td>8116</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>15334</td>
                                                                            <td>18627</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">not Linked</td>
                                                                            <td>E</td>
                                                                            <td class="b-o-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">30</td>
                                                                            <td>0.06</td>
                                                                            <td>2658</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Not Linked</td>
                                                                            <td class="b-o-bottom">C</td>
                                                                            <td class="b-o-bottom-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">15</td>
                                                                            <td>0.23</td>
                                                                            <td>8785</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle C after Y years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>15334</td>
                                                                            <td>18627</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">not Linked</td>
                                                                            <td>E</td>
                                                                            <td class="b-o-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">30</td>
                                                                            <td>0.06</td>
                                                                            <td>2658</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Not Linked</td>
                                                                            <td class="b-o-bottom">C</td>
                                                                            <td class="b-o-bottom-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">15</td>
                                                                            <td>0.23</td>
                                                                            <td>8785</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle C after Y years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>11840</td>
                                                                            <td>14509</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">Linked</td>
                                                                            <td>D</td>
                                                                            <td class="b-o-right">0.333</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">30</td>
                                                                            <td>0.07</td>
                                                                            <td>2950</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Not Linked</td>
                                                                            <td class="b-o-bottom">C</td>
                                                                            <td class="b-o-bottom-right">0.333</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">25</td>
                                                                            <td>0.13</td>
                                                                            <td>5000</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle C after Y years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>11840</td>
                                                                            <td>14509</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">Linked</td>
                                                                            <td>D</td>
                                                                            <td class="b-o-right">0.333</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">30</td>
                                                                            <td>0.07</td>
                                                                            <td>2950</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Not Linked</td>
                                                                            <td class="b-o-bottom">C</td>
                                                                            <td class="b-o-bottom-right">0.333</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">25</td>
                                                                            <td>0.13</td>
                                                                            <td>5000</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle C after Y years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>14025</td>
                                                                            <td>17092</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">Linked</td>
                                                                            <td>D</td>
                                                                            <td class="b-o-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">30</td>
                                                                            <td>0.07</td>
                                                                            <td>2950</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">20</td>
                                                                            <td>0.19</td>
                                                                            <td>7185</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after Y years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full success">** First do elegebility process for B>A according of elegebility TABLE.</span>
                                                                <!-- <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o-top-right-left">30</td>
                                                                            <td>0.1</td>
                                                                            <td>3891</td>
                                                                            <td>14025</td>
                                                                            <td>17092</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-left">Linked</td>
                                                                            <td>D</td>
                                                                            <td class="b-o-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-o-bottom-right-left">30</td>
                                                                            <td>0.07</td>
                                                                            <td>2950</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">20</td>
                                                                            <td>0.19</td>
                                                                            <td>7185</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after Y years.</span> <span class="alert">Y go from 10 to 30</span><span class="t-b-c-full red success">** No elegebility</span>
                                                                <!-- <a href="javascript:void(0);" class="arrow a-green"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="tab_A3">
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
                                                                            <td>886667</td>
                                                                            <td class="b-o">10</td>
                                                                            <td>0.29</td>
                                                                            <td>22722</td>
                                                                            <td>33017</td>
                                                                            <td>39505</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">prime</td>
                                                                            <td class="b-o-bottom">A</td>
                                                                            <td class="b-o-bottom-right-left">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">13</td>
                                                                            <td>0.27</td>
                                                                            <td>10295</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert">Y go from 30 to 25</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
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
                                                                            <td>886667</td>
                                                                            <td class="b-o">10</td>
                                                                            <td>0.29</td>
                                                                            <td>22722</td>
                                                                            <td>33017</td>
                                                                            <td>39505</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">prime</td>
                                                                            <td class="b-o-bottom">A</td>
                                                                            <td class="b-o-bottom-right-left">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">13</td>
                                                                            <td>0.27</td>
                                                                            <td>10295</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert">Y go from 30 to 25</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o">25</td>
                                                                            <td>0.15</td>
                                                                            <td>5678</td>
                                                                            <td>30751</td>
                                                                            <td>36820</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right-left">2/3</td>
                                                                            <td>886667</td>
                                                                            <td class="b-r">8</td>
                                                                            <td>0.31</td>
                                                                            <td>25072</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert">Y go from 10 to 8</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o">25</td>
                                                                            <td>0.15</td>
                                                                            <td>5678</td>
                                                                            <td>30751</td>
                                                                            <td>36820</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right-left">2/3</td>
                                                                            <td>886667</td>
                                                                            <td class="b-r">8</td>
                                                                            <td>0.31</td>
                                                                            <td>25072</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 10 years.</span> <span class="alert">Y go from 10 to 8</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>886667</td>
                                                                            <td class="b-o">8</td>
                                                                            <td>0.31</td>
                                                                            <td>25072</td>
                                                                            <td>32604</td>
                                                                            <td>39008</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">prime</td>
                                                                            <td class="b-o-bottom">A</td>
                                                                            <td class="b-o-bottom-right-left">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">20</td>
                                                                            <td>0.2</td>
                                                                            <td>7531</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 8 years.</span> <span class="alert">Y go from 25 to 20</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
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
                                                                            <td>886667</td>
                                                                            <td class="b-o">8</td>
                                                                            <td>0.31</td>
                                                                            <td>25072</td>
                                                                            <td>32604</td>
                                                                            <td>39008</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">prime</td>
                                                                            <td class="b-o-bottom">A</td>
                                                                            <td class="b-o-bottom-right-left">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">20</td>
                                                                            <td>0.2</td>
                                                                            <td>7531</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 8 years.</span> <span class="alert">Y go from 25 to 20</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o">20</td>
                                                                            <td>0.2</td>
                                                                            <td>7531</td>
                                                                            <td>42086</td>
                                                                            <td>50150</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right-left">2/3</td>
                                                                            <td>886667</td>
                                                                            <td class="b-r">4</td>
                                                                            <td>0.35</td>
                                                                            <td>34555</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after Y years.</span> <span class="alert">Y go from 8 to 4</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
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
                                                                            <td>443333</td>
                                                                            <td class="b-o">20</td>
                                                                            <td>0.2</td>
                                                                            <td>7531</td>
                                                                            <td>42086</td>
                                                                            <td>50150</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">Linked</td>
                                                                            <td class="b-o-bottom">B</td>
                                                                            <td class="b-o-bottom-right-left">2/3</td>
                                                                            <td>886667</td>
                                                                            <td class="b-r">4</td>
                                                                            <td>0.35</td>
                                                                            <td>34555</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after Y years.</span> <span class="alert">Y go from 8 to 4</span><span class="t-b-c-full red success">** No elegebility</span>
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
                                                                            <td>886667</td>
                                                                            <td class="b-o">4</td>
                                                                            <td>0.35</td>
                                                                            <td>34555</td>
                                                                            <td>52101</td>
                                                                            <td>61925</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">prime</td>
                                                                            <td class="b-o-bottom">A</td>
                                                                            <td class="b-o-bottom-right-left">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">4</td>
                                                                            <td>0.36</td>
                                                                            <td>17546</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 4 years.</span> <span class="alert">Y go from 20 to 4</span><span class="t-b-c-full success">** First do elegebility process for B&gt;A according of elegebility TABLE.</span>
                                                                <!-- <a href="javascript:void(0);" class="arrow a-red"><i class="fa fa-arrow-down" aria-hidden="true"></i></a> -->
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
                                                                            <td>886667</td>
                                                                            <td class="b-o">4</td>
                                                                            <td>0.35</td>
                                                                            <td>34555</td>
                                                                            <td>52101</td>
                                                                            <td>61925</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="b-o-bottom-left">prime</td>
                                                                            <td class="b-o-bottom">A</td>
                                                                            <td class="b-o-bottom-right-left">1/3</td>
                                                                            <td>443333</td>
                                                                            <td class="b-r">4</td>
                                                                            <td>0.36</td>
                                                                            <td>17546</td>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span>*Recycle B after 4 years.</span> <span class="alert">Y go from 20 to 4</span><span class="t-b-c-full red success">** No elegebility</span>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>



@include('layouts.footer_admin')