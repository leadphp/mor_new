@include('layouts.admin_top_header_hr')
@include('layouts.admin_header_submenu_hr') 

    <!-- admin content starts here -->

    <div class="main-content offer-compare">
        <div class="container-fluid">
            <div class="compare-offer-wrap d-f j-c-s-b">
                <div class="compare-offer-top">
                    <ul class="d-f a-i-f-e">
                        <li class="d-f a-i-c"> <a href="javascript:void(0);" class="main-button button-large">לקוח השווה להצעה קיימת</a>
                            <span class="indicator i-green"></span> </li>
                        <li>
                            <div class="form-group">
                                <label>ערך הנכס</label>
                                <input style="max-width: 146px;" type="text" class="form-control" id="property-value" name="property-value" placeholder="2,200,000" />
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label style="margin-left: 0;">סוג מימון</label>
                                <input type="text" class="form-control" id="total-property-value" name="total0-property-value" placeholder="Funding A_1-45" />
                            </div>
                        </li>
                        <li class="upload">
                            <h4>לקוח העלאה הצעה</h4>
                            <div class="d-f a-i-c"> <a href="javascript:void(0);" class="main-button button-large" download>הורד הצעה
                  <i class="fa fa-cloud-download"></i></a> <span class="indicator i-gray"></span> </div>
                        </li>
                    </ul>
                </div>
                <div class="c-o-left">
                    <div class="table-container table-auto compare-offers-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>מסלול הלוואה</th>
                                    <th>שם מסלול הלוואה מלא</th>
                                    <th>ריבית</th>
                                    <th>שנים</th>
                                    <th>משכנתא</th>
                                    <th>החזר חודשי</th>
                                    <th>משכנתא צמודה</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>Prime</td>
                                    <td>2.00%</td>
                                    <td>4 to 30</td>
                                    <td>1100200</td>
                                    <td>Pmt_Calc</td>
                                    <td>1200200</td>
                                </tr>
                                <tr>
                                    <td>B</td>
                                    <td>Conts_inter_Linked</td>
                                    <td>2.00%</td>
                                    <td>4 to 30</td>
                                    <td>1100200</td>
                                    <td>Pmt_Calc</td>
                                    <td>1200200</td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td>Conts_inter_Unlinked</td>
                                    <td>2.00%</td>
                                    <td>4 to 30</td>
                                    <td>1100200</td>
                                    <td>Pmt_Calc</td>
                                    <td>1200200</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>Var_Inter_5Year_Linked</td>
                                    <td>2.00%</td>
                                    <td>4 to 30</td>
                                    <td>1100200</td>
                                    <td>Pmt_Calc</td>
                                    <td>1200200</td>
                                </tr>
                                <tr>
                                    <td>E</td>
                                    <td>Var_Inter_5Year_Unlinked</td>
                                    <td>2.00%</td>
                                    <td>4 to 30</td>
                                    <td>1100200</td>
                                    <td>Pmt_Calc</td>
                                    <td>1200200</td>
                                </tr>
                                <tr class="sum">
                                    <th scope="row" colspan="4">Total:
                                        </td>
                                        <td>1,000,000</td>
                                        <td>4500</td>
                                        <td>1,100,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="funding-tree-container">
                        <ul class="d-f a-i-f-e">
                            <li><a href="javascript:void(0);" class="main-button button-green button-large">Funding tree</a></li>
                            <li>
                                <div class="form-group">
                                    <label>Show years</label>
                                    <select class="selectpicker">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                                </div>
                            </li>
                            <li class="input-max-years">
                                <div class="form-group d-f a-i-c">
                                    <label>מקסימום שנים</label>
                                    <input type="text" class="form-control" id="max-years" name="max-years" placeholder="30" />
                                </div>
                            </li>
                        </ul>
                        <ul class="d-f a-i-c">
                            <li><a href="javascript:void(0);" class="main-button button-bordered">A</a></li>
                            <li><a href="javascript:void(0);" class="main-button button-bordered">F</a></li>
                            <li><a href="javascript:void(0);" class="main-button button-bordered">G</a></li>
                            <li><a href="javascript:void(0);" class="main-button button-bordered">D</a></li>
                            <li><a href="javascript:void(0);" class="main-button button-bordered">B</a></li>
                            <li><a href="javascript:void(0);" class="main-button button-bordered">h</a></li>
                            <li class="last-a-l">
                                <h4>לא ניתן לבצע חישוב מעל 75% מימון ומתקבלת הודעה</h4>
                                <div class="form-group input-type-percentage d-f a-i-c">
                                    <label>אחוז מימון א/ב/ג מסלולים:</label>
                                    <input type="text" class="form-control" id="table-type-percentage" name="table-type-percentage" placeholder="1.75%" />
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mortgage-linked-wrap">
                        <div class="table-container table-auto mortgage-linked-table wid-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>החזר חודשי צמוד
                                        </th>
                                        <th>החזר חודשי
                                        </th>
                                        <th>יתרת משכנתא צמודה
                                        </th>
                                        <th>יתרת משכנתא
                                        </th>
                                        <th>החזר ריבית
                                        </th>
                                        <th>החזר קרן
                                        </th>
                                        <th>פריים/מדד חודשי
                                        </th>
                                        <th>מספר</th>
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
                                        <td>0.40%</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>1564.03</td>
                                        <td>1556.23</td>
                                        <td>177902.44</td>
                                        <td>177015.59</td>
                                        <td>1475.13</td>
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
                                        <td>0.70%</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>1568.73</td>
                                        <td>1556.23</td>
                                        <td>178189.74</td>
                                        <td>176770.27</td>
                                        <td>1473.09</td>
                                        <td>83.14</td>
                                        <td>0.80%</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>1570.30</td>
                                        <td>1556.23</td>
                                        <td>178284.38</td>
                                        <td>176687.13</td>
                                        <td>1472.39</td>
                                        <td>83.83</td>
                                        <td>0.90%</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>1571.87</td>
                                        <td>1556.23</td>
                                        <td>178378.15</td>
                                        <td>176603.29</td>
                                        <td>1471.69</td>
                                        <td>84.53</td>
                                        <td>1.01%</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>1573.44</td>
                                        <td>1556.23</td>
                                        <td>178471.06</td>
                                        <td>176518.76</td>
                                        <td>1470.99</td>
                                        <td>85.24</td>
                                        <td>1.11%</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>1575.14</td>
                                        <td>1556.23</td>
                                        <td>178577.19</td>
                                        <td>176433.52</td>
                                        <td>1470.28</td>
                                        <td>85.95</td>
                                        <td>1.22%</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>1576.85</td>
                                        <td>1556.23</td>
                                        <td>178857.63</td>
                                        <td>176518.76</td>
                                        <td>1470.99</td>
                                        <td>85.24</td>
                                        <td>1.33%</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>1578.55</td>
                                        <td>1556.23</td>
                                        <td>178963.58</td>
                                        <td>176433.52</td>
                                        <td>1470.28</td>
                                        <td>85.95</td>
                                        <td>1.43%</td>
                                        <td style="border-bottom: 1px solid #00a133!important;">14</td>
                                    </tr>
                                    <tr>
                                        <td>1578.55</td>
                                        <td>1556.23</td>
                                        <td>178963.58</td>
                                        <td>176433.52</td>
                                        <td>1470.28</td>
                                        <td>85.95</td>
                                        <td>1.43%</td>
                                        <td class="sum-border">Sum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mortgage-linked-wrap">
                        <div class="arrow-container"> <a href="javascript:void(0);" class="arrow"><i class="fa fa-arrow-up"
                  aria-hidden="true"></i></a> <a href="javascript:void(0);" class="arrow a-green"><i
                  class="fa fa-arrow-up" aria-hidden="true"></i></a> </div>
                        <div class="table-container table-auto mortgage-linked-table no-margin">
                            <table>
                                <thead>
                                    <tr>
                                        <th>החזר חודשי צמוד
                                        </th>
                                        <th>החזר חודשי
                                        </th>
                                        <th>יתרת משכנתא צמודה
                                        </th>
                                        <th>יתרת משכנתא
                                        </th>
                                        <th>החזר ריבית
                                        </th>
                                        <th>החזר קרן
                                        </th>
                                        <th>פריים/מדד חודשי
                                        </th>
                                        <th>מספר</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1557.70</td>
                                        <td>1556.23</td>
                                        <td>178963.58</td>
                                        <td>176433.52</td>
                                        <td>1470.28</td>
                                        <td>85.95</td>
                                        <td>0.1.43%</td>
                                        <td>Sum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-bottom-content d-f j-c-s-b a-i-c"> <span class="alert">MR Linked = Mortgage Linked
                Above</span> <span>Total Sum on funding table columns</span> </div>
                    </div>
                </div>
                <div class="c-o-right">
                    <div class="offer-comparing">
                        <h4>השוואת הצעה קיימת שקיבלת לאלגוריתם שלנו: </h4>
                        <ul>
                            <li class="d-f">
                                <div class="offer-comparing-left">
                                    <div class="offer-comparing-heading d-f a-i-c">
                                        <span>A</span>
                                        <h4>הצעה שהלקוח קיבל – משכנתא צמודה</h4>
                                    </div>
                                    <div class="form-group offer-comparing-input">
                                        <input type="text" class="form-control" id="customer-offer" name="customer-offer" placeholder="Customer Offer" />
                                    </div>
                                </div>
                            </li>
                            <li class="d-f">
                                <div class="offer-comparing-left o-c-green">
                                    <div class="offer-comparing-heading d-f a-i-c">
                                        <span>B.</span>
                                        <h4>הצעה על בסיס האלגוריתם – משכנתא צמודה</h4>
                                    </div>
                                    <div class="form-group offer-comparing-input">
                                        <input type="text" class="form-control" id="best-mortgage" name="best-mortgage" placeholder="Best Mortgage" />
                                    </div>
                                </div>
                            </li>
                            <li class="d-f">
                                <div class="offer-comparing-left o-c-red">
                                    <div class="offer-comparing-heading d-f a-i-c">
                                        <span>C.</span>
                                        <h4>חסכון מחושב</h4>
                                    </div>
                                    <div class="form-group offer-comparing-input">
                                        <input type="text" class="form-control" id="savings-value" name="savings-value" placeholder="Savings Value" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="table-wrap">
                        <div class="table-heading d-f a-i-f-e">
                            <h2>Loan table</h2>
                            <span>(show only)</span>
                        </div>
                        <div class="table-container table-nowrap table-auto loan-table full-w">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Status of loan <i class="fa fa-sort" aria-hidden="true"></i></th>
                                        <th>loan name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                        <th>loan type <i class="fa fa-sort" aria-hidden="true"></i></th>
                                        <th>(loan name (HEB <i class="fa fa-sort" aria-hidden="true"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Prime linked</td>
                                        <td>Prime</td>
                                        <td style="text-align: center;">a</td>
                                        <td>מסלול פריים</td>
                                    </tr>
                                    <tr>
                                        <td>Madad linked</td>
                                        <td>const_Inter_Linked</td>
                                        <td style="text-align: center;">B</td>
                                        <td>ריבית קבועה צמודה למדד</td>
                                    </tr>
                                    <tr>
                                        <td>not linked</td>
                                        <td>const_Inter_Unlinked</td>
                                        <td style="text-align: center;">c</td>
                                        <td>ריבית קבועה לא צמודה</td>
                                    </tr>
                                    <tr>
                                        <td>Madad linked</td>
                                        <td>Var_Inter_5year_Linked</td>
                                        <td style="text-align: center;">d</td>
                                        <td>ריבית משתנה כל 5 שנים צמודה</td>
                                    </tr>
                                    <tr>
                                        <td>not linked</td>
                                        <td>Var_Inter_5year_Unlinked</td>
                                        <td style="text-align: center;">e</td>
                                        <td>ריבית משתנה כל 5 שנים לא צמודה</td>
                                    </tr>
                                    <tr>
                                        <td>not linked</td>
                                        <td>Euro_Inter</td>
                                        <td style="text-align: center;">f</td>
                                        <td>מסלול יורו</td>
                                    </tr>
                                    <tr>
                                        <td>not linked</td>
                                        <td>Dollar_Inter</td>
                                        <td style="text-align: center;">g</td>
                                        <td>מסלול דולר</td>
                                    </tr>
                                    <tr>
                                        <td>Madad linked</td>
                                        <td>Eligibility_Linked</td>
                                        <td style="text-align: center;">h</td>
                                        <td>מסלול זכאות</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="table-wrap">
                        <div class="table-heading d-f a-i-f-e">
                            <h2>Bank table</h2>
                            <span>(show only)</span>
                        </div>
                        <div class="table-container table-nowrap table-auto bank-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Bank Code <i class="fa fa-sort" aria-hidden="true"></i></th>
                                        <th>Banks Name (ENG) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                        <th>Banks Name (HEB) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AA</td>
                                        <td>Mizrahi</td>
                                        <td>בנק מזרחי-טפחות</td>
                                    </tr>
                                    <tr>
                                        <td>BB</td>
                                        <td>Discount</td>
                                        <td>בנק דיסקונט</td>
                                    </tr>
                                    <tr>
                                        <td>CC</td>
                                        <td>Igud</td>
                                        <td>בנק איגוד</td>
                                    </tr>
                                    <tr>
                                        <td>DD</td>
                                        <td>Hapoalim</td>
                                        <td>בנק הפועלים</td>
                                    </tr>
                                    <tr>
                                        <td>EE</td>
                                        <td>Leumi</td>
                                        <td>בנק לאומי</td>
                                    </tr>
                                    <tr>
                                        <td>FF</td>
                                        <td>Otsar hahayal</td>
                                        <td>בנק לאומי</td>
                                    </tr>
                                    <tr>
                                        <td>GG</td>
                                        <td>Jerusalem</td>
                                        <td>בנק ירושלים</td>
                                    </tr>
                                    <tr>
                                        <td>HH</td>
                                        <td>Habaenleumi</td>
                                        <td>הבנק הבינלאומי</td>
                                    </tr>
                                    <tr>
                                        <td>II</td>
                                        <td>Other Bank</td>
                                        <td>בנק אחר</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- admin content ends here -->
      @include('layouts.footer_admin_hr')