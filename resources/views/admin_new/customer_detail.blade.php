<!-- admin content starts here -->
@include('layouts.admin_top_header')
@include('layouts.admin_header_subheader')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p class="margin-t-a"><b>Customer Status:<br/></b> <b>Bank:</b>AA (Mizrachi) | <b>Has Enslevment:</b> (Yes/No) | <b>Funding Type:</b> A/B/C/Any_Cause
                        <br/> <b>Loan Type B:</b> Yes/No (4-30 years, 1.2%)
                        <br/> <b>Loan Type C:</b> Yes/No (4-30 Years, 1.2%)</p>
                </div>
            </div>
            <div class="cst-customer-status">
                <ul class="d-f">
                    <li class="d-f">Customer Status:
                        <span>AA (Mizrachi) | </span>
                        <span style="margin-left: 4px;">Enslevment (Yes/No) | </span>
                    </li>
                    <li class="d-f">Funding Type:
                        <span>Funding_A/B/C or Any_Cause | </span>
                    </li>
                    <li class="d-f">Loan Type B:
                        <span>Yes/No (4-30 years, 1.2%) | </span>
                    </li>
                    <li class="d-f">Loan Type C:
                        <span>Yes/No (4-30 years, 1.2%)</span>
                    </li>
                </ul>
            </div>
            <div class="offer-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">customer offers</a></li>
                    <li role="presentation" class="active"><a href="#database-offers" aria-controls="database-offers" role="tab" data-toggle="tab">Database offers</a></li>
                    <li role="presentation"><a href="#new-uploads" aria-controls="new-uploads" role="tab" data-toggle="tab">new uploads</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="customer-offers">
                        <div class="tab-inner d-f">
                            <div class="table-wrap">
                                <div class="table-heading d-f a-i-c j-c-s-b">
                                    <h2>Suggested Offers - 3 Personal Offers:</h2>
                                    <a href="javascript:void(0);" class="main-button button-bordered  button-large">Upload Offer to Customer From DB</a> </div>
                                <div class="table-container suggested-offers-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Interest <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Years <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Loan Type C <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Interest <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Years <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Loan Type B <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Funding Type A/B/C <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Has Enslevment?</th>
                                                <th>Monthly Return (MR)</th>
                                                <th>Funding Calc (%) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Mortgage Fee <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Property Value <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Bank Code <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Bank Names <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Date <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th colspan="3">Number <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="data-multiple">2.72%</span>
                                                    <span class="data-multiple">2.72%</span>
                                                    <span class="data-multiple">2.72%</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">10</span>
                                                    <span class="data-multiple">10</span>
                                                    <span class="data-multiple">10</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">V</span>
                                                    <span class="data-multiple">V</span>
                                                    <span class="data-multiple">V</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause/Funding A/B/C</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Lorem</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>1</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="data-multiple">2.32%</span>
                                                    <span class="data-multiple">2.32%</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">5</span>
                                                    <span class="data-multiple">5</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">V</span>
                                                    <span class="data-multiple">V</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>2</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Funding_A</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>EE</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>3</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="database-offers">
                        <div class="tab-inner d-f">
                            <div class="table-wrap">
                                <div class="table-heading d-f f-d-c">
                                    <h2>Data - Base</h2>
                                    <div class="table-sub-heading d-f a-i-c">
                                        <div class="t-s-h-container">
                                            <h5>Offers Data-Base:</h5>
                                            <p>Show offers from today to 60 days ago only, order table by funding_type.</p>
                                        </div>
                                        <div class="t-s-h-container">
                                            <h5>Funding Type:</h5>
                                            <p>Funding_A: 0-45%, Funding_B: 45-60%, Funding_C: 60-75%, Any_Cause: 0-50%</p>
                                        </div>
                                        <a href="javascript:void(0);" class="main-button button-bordered  button-large" data-toggle="modal" data-target="#new-offer-modal">Upload New Offer to Data-Base</a> </div>
                                </div>
                                <div class="table-container database-offers-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Interest <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Years <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Loan Type C <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Interest <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Years <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Loan Type B <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Funding Type A/B/C <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Has Enslevment?</th>
                                                <th>Monthly Return (MR)</th>
                                                <th>Funding Calc (%) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Mortgage Fee <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Property Value <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Bank Code <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Bank Names <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Date <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th colspan="3">Number <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="data-multiple">2.72%</span>
                                                    <span class="data-multiple">2.72%</span>
                                                    <span class="data-multiple">2.72%</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">10</span>
                                                    <span class="data-multiple">10</span>
                                                    <span class="data-multiple">10</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">V</span>
                                                    <span class="data-multiple">V</span>
                                                    <span class="data-multiple">V</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause/Funding A/B/C</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Lorem</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>1</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="data-multiple">2.32%</span>
                                                    <span class="data-multiple">2.32%</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">5</span>
                                                    <span class="data-multiple">5</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">V</span>
                                                    <span class="data-multiple">V</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>2</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Funding_A</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>EE</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>3</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2.72%</td>
                                                <td>10</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause/Funding A/B/C</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Lorem</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>4</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="data-multiple">2.32%</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">5</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">V</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>5</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Funding_A</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>EE</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>6</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2.72%</td>
                                                <td>10</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause/Funding A/B/C</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Lorem</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>7</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="data-multiple">2.32%</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">5</span>
                                                </td>
                                                <td>
                                                    <span class="data-multiple">V</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>8</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Funding_A</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>EE</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>9</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2.72%</td>
                                                <td>10</td>
                                                <td>V</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>Any_Cause/Funding A/B/C</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> No</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>DD</td>
                                                <td>Lorem</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>10</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="pagination-container">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="active"><a href="javascript:void(0);">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li><a href="javascript:void(0);">3</a></li>
                                        <li><a href="javascript:void(0);">4</a></li>
                                        <li><a href="javascript:void(0);">5</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="database-filters">
                                <div class="d-b-date d-f a-i-c">
                                    <h2>Filters For Data-base</h2>
                                    <form>
                                        <ul class="d-f a-i-f-e">
                                            <li>
                                                <label>Date</label>
                                                <div class="form-group datepicker-container">
                                                    <input type="text" class="datepicker" id="from-date" name="from-date" placeholder="From Date" />
                                                    <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                                            </li>
                                            <li>
                                                <div class="form-group datepicker-container">
                                                    <input type="text" class="datepicker" id="to-date" name="to-date" placeholder="To Date" />
                                                    <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                                            </li>
                                            <li>
                                                <button type="submit" class="main-button button-bordered button-large">Show 60 Days Ago Only</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="d-b-selects">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>Loan type</label>
                                                <select class="selectpicker">
                        <option>Show All</option>
                        <option>Show All-1</option>
                        <option>Show All-2</option>
                      </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>Funding type</label>
                                                <select class="selectpicker">
                        <option>Show All</option>
                        <option>Show All-1</option>
                        <option>Show All-2</option>
                      </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>Has enslevment</label>
                                                <select class="selectpicker">
                        <option>Show All</option>
                        <option>Show All-1</option>
                        <option>Show All-2</option>
                      </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>Bank Code & Name</label>
                                                <select class="selectpicker">
                        <option>Show All</option>
                        <option>Show All-1</option>
                        <option>Show All-2</option>
                      </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="new-uploads">
                        <div class="tab-inner d-f">
                            <div class="table-wrap">
                                <div class="table-heading d-f a-i-f-e">
                                    <h2>Loan table</h2>
                                    <span>(show only)</span> </div>
                                <div class="table-container loan-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Status of loan <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>loan name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>loan type <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>lorem ipsum <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Prime</td>
                                                <td>Prime</td>
                                                <td style="text-align: center;">a</td>
                                                <td>Lorem ipsum dolor sit</td>
                                            </tr>
                                            <tr>
                                                <td>linked</td>
                                                <td>cost_Inter_Linked</td>
                                                <td style="text-align: center;">B</td>
                                                <td>Dolor sit amet lorem</td>
                                            </tr>
                                            <tr>
                                                <td>not linked</td>
                                                <td>cost_Inter_Unlinked</td>
                                                <td style="text-align: center;">c</td>
                                                <td>Lorem ipsum dolor sit</td>
                                            </tr>
                                            <tr>
                                                <td>linked</td>
                                                <td>Var_Inter_5year_Linked</td>
                                                <td style="text-align: center;">d</td>
                                                <td>Dolor sit amet lorem</td>
                                            </tr>
                                            <tr>
                                                <td>not linked</td>
                                                <td>Var_Inter_5year_Unlinked</td>
                                                <td style="text-align: center;">e</td>
                                                <td>Lorem ipsum dolor sit</td>
                                            </tr>
                                            <tr>
                                                <td>not linked (10% from Prime)</td>
                                                <td>Euro_Inter</td>
                                                <td style="text-align: center;">f</td>
                                                <td>Dolor sit amet lorem</td>
                                            </tr>
                                            <tr>
                                                <td>not linked (10% from Prime)</td>
                                                <td>Dollar_Inter</td>
                                                <td style="text-align: center;">g</td>
                                                <td>Lorem ipsum dolor sit</td>
                                            </tr>
                                            <tr>
                                                <td>linked</td>
                                                <td>Eligibility_Linked</td>
                                                <td style="text-align: center;">h</td>
                                                <td>Dolor sit amet lorem</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap">
                                <div class="table-heading d-f f-d-c">
                                    <h2>new offers form site:</h2>
                                    <span>pdf + word + image</span> </div>
                                <div class="table-container new-offer-table table-nowrap table-auto">
                                    <table style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>number <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Upload Date <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Full Name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>E-Mail <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Phone <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Total Mortgage <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>Property Value <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th colspan="3">Monthly Return <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>17-06-2019</td>
                                                <td>Yossi Cohen</td>
                                                <td>ezhotel1@gmail.com</td>
                                                <td>0506-998223</td>
                                                <td>1,000,000</td>
                                                <td>2,000,000</td>
                                                <td>3,500</td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
                                                <td><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination-container">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="active"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="best-match">
                                <div class="best-match-container">
                                    <h3>Get the best 3 files, Best match should be file number #1</h3>
                                    <h5>Search for best offer process:</h5>
                                    <ul>
                                        <li><span>1.</span> Search from today to 60-days ago (MAX).</li>
                                        <li><span>2.</span> Search on chosen bank (8 options) based on the best bank algo found</li>
                                        <li><span>3.1</span> Has Enslevment or not? yes/no search - must have match.</li>
                                        <li><span>3.2</span> Search 4 options based on funding type of algo A/B/C/ Any_Cause - must have match.</li>
                                        <li><span>4.</span> According to Full-Algo loan types found - search for correct loan types C / B / C+B / no C+B</li>
                                    </ul>
                                </div>
                                <div class="best-match-container">
                                    <h3>Find The Best Match:</h3>
                                    <ul>
                                        <li><span>5.</span> If has loan type C / B / C+B / no C+B (2/2 match):</li>
                                        <li>If found - search plus/minus 5 years on the correct type and search for minimum interest.</li>
                                        <li><span>5.2</span> If not found (2/2 match) - search on other types that are close at least (1/2 match).</li>
                                        <li>If found - search plus/minus 5 years on the correct type and search for minimum interest.</li>
                                        <li><span>5.3</span> If not found (1/2 match) - search on other types that are close at least (0/2 match).</li>
                                        <li>If found - search plus/minus 5 years on the correct type and search for minimum interest.</li>
                                        <li><span>5.4</span> If not found leave blank and give message:</li>
                                    </ul>
                                    <p>"Not found compatibale offers - please contact us and we will assist you"</p>
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

    <div id="new-offer-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <h2 class="modal-title">Fill The Data Below To Upload New Offer To Data-Base</h2>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="n-o-offer-container">
                            <div class="row clearfix d-f a-i-f-e">
                                <div class="col-sm-4">
                                    <h5>Offer Initiation Date</h5>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group datepicker-container">
                                                        <input type="text" class="datepicker" id="offer-initiation-date" name="offer-initiation-date" placeholder="From Date" />
                                                        <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Bank gave offer</h5>
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>Bank Code</th>
                                                <th>Bank's Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="bank-code" name="bank-code" placeholder="AA" /></td>
                                                <td><select class="selectpicker">
                          <option>Mizrachi</option>
                          <option>Mizrachi-1</option>
                          <option>Mizrachi-2</option>
                        </select></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group file-upload-container">
                                        <input type="file" accept="image/*">
                                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Upload Offer File <i class="fa fa-upload" aria-hidden="true"></i></a>
                                        <label>offer_name1.pdf</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="n-o-funding-container">
                            <div class="row clearfix d-f">
                                <h5>Funding Calc = (Mortgage Fee / Property Value) *100</h5>
                                <div class="col-sm-5">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Mortgage fee</th>
                                                <th>Property value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="mortgage-fee" name="mortgage-fee" placeholder="1,000,000" /></td>
                                                <td><input type="text" class="form-control" id="property-value" name="property-value" placeholder="2,500,000" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <span class="d-f a-i-c"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                <div class="col-sm-3">
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>Funding Calc (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>55.21%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-3">
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>Monthly Return (MR)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="monthly-return" name="monthly-return" placeholder="2,500" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="n-o-funding-status-container">
                            <div class="row clearfix d-f">
                                <h5>Funding Status</h5>
                                <div class="col-sm-3">
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>Has Enslevment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="enslevment" name="enslevment" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-3">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>funding type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><select class="selectpicker">
                          <option>Any_Cause</option>
                          <option>Any_Cause-1</option>
                          <option>Any_Cause-2</option>
                        </select></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Based on Funding Calc Suggested Funding Type:</h5>
                                    <ul>
                                        <li>Funding_A: 0-45%,</li>
                                        <li>Funding_B: 45-60%,</li>
                                        <li>Funding_C: 60-75%,</li>
                                        <li>Any_Cause: 0-50%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="n-o-loan-type-container">
                            <div class="row clearfix d-f">
                                <div class="col-sm-6">
                                    <h5>Do You Have Loan Type C? ( V/X )</h5>
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>Interest (0-10%)</th>
                                                <th>Years (4-30)</th>
                                                <th>Loan Type C</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group with-icon">
                                                        <input type="text" class="form-control" id="interest-1" name="interest-1" placeholder="1.0">
                                                        <span class="input-icon">%</span> </div>
                                                </td>
                                                <td><select class="selectpicker">
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option selected>10</option>
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
                        </select></td>
                                                <td style="text-align: center;">
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="loan-type-c-1" name="loan-type-c-1" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group with-icon">
                                                        <input type="text" class="form-control" id="interest-2" name="interest-2" placeholder="1.0">
                                                        <span class="input-icon">%</span> </div>
                                                </td>
                                                <td><select class="selectpicker">
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option selected>10</option>
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
                        </select></td>
                                                <td style="text-align: center;">
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="loan-type-c-2" name="loan-type-c-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group with-icon">
                                                        <input type="text" class="form-control" id="interest-3" name="interest-3" placeholder="1.0">
                                                        <span class="input-icon">%</span> </div>
                                                </td>
                                                <td><select class="selectpicker">
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option selected>10</option>
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
                        </select></td>
                                                <td style="text-align: center;">
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="loan-type-c-3" name="loan-type-c-3" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Do You Have Loan Type B? ( V/X )</h5>
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>Interest (0-10%)</th>
                                                <th>Years (4-30)</th>
                                                <th>Loan Type B</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group with-icon">
                                                        <input type="text" class="form-control" id="interest-4" name="interest-4" placeholder="1.0">
                                                        <span class="input-icon">%</span> </div>
                                                </td>
                                                <td><select class="selectpicker">
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option selected>10</option>
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
                        </select></td>
                                                <td style="text-align: center;">
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="loan-type-b-1" name="loan-type-b-1" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group with-icon">
                                                        <input type="text" class="form-control" id="interest-5" name="interest-5" placeholder="1.0">
                                                        <span class="input-icon">%</span> </div>
                                                </td>
                                                <td><select class="selectpicker">
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option selected>10</option>
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
                        </select></td>
                                                <td style="text-align: center;">
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="loan-type-b-2" name="loan-type-b-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group with-icon">
                                                        <input type="text" class="form-control" id="interest-6" name="interest-6" placeholder="1.0">
                                                        <span class="input-icon">%</span> </div>
                                                </td>
                                                <td><select class="selectpicker">
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option selected>10</option>
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
                        </select></td>
                                                <td style="text-align: center;">
                                                    <div class="form-group custom-check-container">
                                                        <input type="checkbox" id="loan-type-b-3" name="loan-type-b-3" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="main-button button-bordered button-large">Upload New Offer To Data-Base</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer_admin')