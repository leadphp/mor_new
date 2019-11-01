@include('layouts.admin_top_header_hr')
@include('layouts.admin_header_submenu_hr')       

    <!-- header ends here -->

    <!-- admin content starts here -->

    <div class="main-content">
        <div class="container-fluid d-f">
            <div class="questions-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#all-questions" aria-controls="customer-offers" role="tab" data-toggle="tab">הצג את כל השאלות</a></li>
                    <li role="presentation" class="general_info_button"><a href="#general-info" aria-controls="general-info" role="tab" data-toggle="tab">Q1-7 מידע כללי</a></li>
                    <li role="presentation" class="define_needs_button"><a href="#define-needs" aria-controls="define-needs" role="tab" data-toggle="tab">Q8-11 הגדרת צרכים</a></li>
                    <li role="presentation" class="finance_info_button"><a href="#finance-info" aria-controls="finance-info" role="tab" data-toggle="tab">Q12-16 מידע פיננסי</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all-questions">
                        <div class="tab-inner d-f">
                            <ul>
                                <li>
                                    <h2>Q1-7 מידע כללי</h2>
                                    <ul class="questions d-f">
                                        <li><span>Q1.</span> אזור מגורים</li>
                                        <li><span>Q2.</span>דירה נוספת </li>
                                        <li><span>Q3.</span> מין</li>
                                        <li><span>Q4.</span> הכנסה משפחתית</li>
                                        <li><span>Q5.</span> חיסכון משפחתי </li>
                                        <li><span>Q6.</span> חשבון בנק</li>
                                        <li><span>Q7.</span> מעבר בנק</li>
                                        <li><span>Q7.1</span> הגיל המבוגר ביותר</li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Q8-11 הגדרת צרכים</h2>
                                    <ul class="questions d-f">
                                        <li>Q8. סיבת משכנתא</li>
                                        <li>Q9. סוג האדם המבקש את המשכנתא</li>
                                        <li>Q10. תאריך כניסה</li>
                                        <li>Q11. הערכת נכס</li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Q12-16 מידע פיננסי</h2>
                                    <ul class="questions d-f">
                                        <li>Q12. החזר חודשי</li>
                                        <li>Q13. פרעונות</li>
                                        <li>Q14. הלוואות קיימות</li>
                                        <li>Q15. הלוואות עתידיות</li>
                                        <li>Q16. זכאות</li>
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
                                        <h2>Q1-7 מידע כללי</h2>
                                        <ul class="questions d-f">
                                            <li><span>Q1.</span> אזור מגורים</li>
                                            <li><span>Q2.</span>דירה נוספת </li>
                                            <li><span>Q3.</span> מין</li>
                                            <li><span>Q4.</span> הכנסה משפחתית</li>
                                            <li><span>Q5.</span> חיסכון משפחתי </li>
                                            <li><span>Q6.</span> חשבון בנק</li>
                                            <li><span>Q7.</span> מעבר בנק</li>
                                            <li><span>Q7.1</span> הגיל המבוגר ביותר</li>
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
                                        <h2>Q8-11 הגדרת צרכים</h2>
                                        <ul class="questions d-f">
                                            <li>Q8. סיבת משכנתא</li>
                                            <li>Q9. סוג האדם המבקש את המשכנתא</li>
                                            <li>Q10. תאריך כניסה</li>
                                            <li>Q11. הערכת נכס</li>
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
                                        <h2>Q12-16 מידע פיננסי</h2>
                                        <ul class="questions d-f">
                                            <li>Q12. החזר חודשי</li>
                                            <li>Q13. פרעונות</li>
                                            <li>Q14. הלוואות קיימות</li>
                                            <li>Q15. הלוואות עתידיות</li>
                                            <li>Q16. זכאות</li>
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
                        <label>הבנק הטוב ביותר על בסיס האלגוריתם</label>
                        <input type="text" class="form-control" id="best-bank-algo" name="best-bank-algo" placeholder="AA - Mizrahi " />
                    </div>
                    <div class="form-group">
                        <label>משכנתא מומלץ</label>
                        <input type="text" class="form-control" id="mortgage-recommended" name="best-bank-algo" placeholder="1,00,000" />
                    </div>
                    <div class="form-group">
                        <label>החזר חודשי מומלץ</label>
                        <input type="text" class="form-control" id="req-pmt-recommended" name="req-pmt-recommended" placeholder="1,00,000" />
                    </div>
                </form>
            </div>
            <div class="all-questions-wrap d-f j-c-s-b a-i-f-e">
                <div class="question-container question-1-7 d-f j-c-s-b">
                    <div class="question-container question-1">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Q1-7 מידע כללי</a>
                        <div class="table-container table-auto table-nowrap leaving-location-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="4">Q1 אזור מגורים</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.1 דירה ללא משכנתא</td>
                                        <td>--</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>1.2 דירה עם משכנתא</td>
                                        <td>--</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>1.3 דירה שכורה</td>
                                        <td><span class="no">Yes</span></td>
                                        <td>תשלום חודשי</td>
                                        <td>Value</td>
                                    </tr>
                                    <tr>
                                        <td>1.4 דירה חינם</td>
                                        <td>--</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="question-container question-2">

                        <div class="table-container table-auto table-nowrap aprt-ownership-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>2.1 מצב דירה</th>
                                        <th>With_Morg1</th>
                                        <th>With_Morg2</th>
                                        <th>No_Morg3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2.2 ערך הנכס</td>
                                        <td>1k - 10m</td>
                                        <td>1k - 10m</td>
                                        <td>1k - 10m</td>
                                    </tr>
                                    <tr>
                                        <td>2.3 משכנתא שנשאר לשלם</td>
                                        <td>1k - 10m</td>
                                        <td>1k - 10m</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>2.4 ערך חזקה על הדירה</td>
                                        <td>1k - 10m</td>
                                        <td>1k - 10m</td>
                                        <td>1k - 10m</td>
                                    </tr>
                                    <tr>
                                        <td>2.5 משכנתא חודשית</td>
                                        <td>1k - 100K</td>
                                        <td>1k - 100K</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>2.6 הכנסה משכר דירה</td>
                                        <td>1k - 100K</td>
                                        <td>1k - 100K</td>
                                        <td>1k - 100K</td>
                                    </tr>
                                    <tr>
                                        <td>2.7 איזה בנק</td>
                                        <td>AA Mizrahi</td>
                                        <td>BB Discount</td>
                                        <td>X</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-heading d-f">
                            <div class="success-div d-f f-d-c j-c-c">
                                <span>יש בבעלותי דירה</span>
                                <span>2A: דירה ללא משכנתא, 2B: דירה עם משכנתא</span>
                            </div>
                            <div class="alert-div d-f a-i-c">
                                <span>2C: אין דירה בבעלותי</span>
                            </div>
                        </div>
                    </div>
                    <div class="owner-monthly-container question-3">
                        <ul>
                            <li>
                                <div class="form-group d-f f-d-c a-i-c">
                                    <span>2.8 ערך חזקה על דירה מקסימלי</span>
                                    <label><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Max (2.4"></i>
                                    </label>
                                    <input type="text" class="form-control" id="max_owner_value" name="max_owner_value" />
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </li>
                            <li>
                                <div class="form-group d-f f-d-c a-i-c">
                                    <span>2.9 תשלום חודשי כולל דירות</span>
                                    <label><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Sum 1.5 + Sum 2.5 - Sum 2.6)"></i></label>
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
                                        <th colspan="2">מידע כללי <i class="fa fa-question-circle" style="float: right; color: #fff;"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3 מין</td>
                                        <td>Male / Female</td>
                                    </tr>
                                    <tr>
                                        <td>4 הכנסה משפחתית</td>
                                        <td>Value</td>
                                    </tr>
                                    <tr>
                                        <td>5.1 מצב הכנסות-הוצאות יציב</td>
                                        <td>Yes / No</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data-multiple">5.2 במידה וחוסך, כמה?</span>
                                            <span class="data-multiple">אם יציב: 0, אם לא יציב: ערך מעל 1000</span>
                                        </td>
                                        <td>Value</td>

                                    </tr>
                                    <tr>
                                        <td>6 מיקום חשבון בנק</td>
                                        <td>AA- II Banks</td>
                                    </tr>
                                    <tr>
                                        <td>7 האם מוכן לעבור בנק</td>
                                        <td>Yes / No</td>
                                    </tr>
                                    <tr>
                                        <td>7.1 גיל הלווה המבוגר ביותר</td>
                                        <td>18 - 120</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="question-container question-8-11 d-f">
                    <div class="question-8-11-left">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered">Q8-11 הגדרת צרכים</a>
                        <h2>Q8 סיבת משכנתא</h2>
                        <div class="mortgage-cause d-f j-c-s-b">
                            <div class="m-c-heading">Q8 סיבת משכנתא
                            </div>
                            <div class="m-c-1">
                                <ul>
                                    <li>
                                        <span>8.1 דירה חדשה</span>
                                        <span class="no">Yes</span>
                                    </li>
                                    <li>
                                        <span>8.2 דירה יד שניה</span>
                                        <span>X</span>
                                    </li>
                                    <li>
                                        <span>8.3 בניה עצמית</span>
                                        <span>X</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="m-c-2">
                                <ul>
                                    <li>
                                        <span>8.4 תוכנית למשתכן</span>
                                        <span>X</span>
                                    </li>
                                </ul>
                                <div class="condition-div d-f f-d-c">
                                    <i class="fa fa-question-circle"></i>
                                    <div class="cst-tooltip">
                                        <span>If chose 8.4 Mishtaken_Program</span>
                                        <span>Skip Q9: </span>
                                        <span>Q9.3 first_aprt -> YES</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-c-3">
                                <ul>
                                    <li>
                                        <span>8.5 לכל מטרה</span>
                                        <span>X</span>
                                    </li>
                                </ul>
                                <div class="condition-div c-d-2 d-f f-d-c">
                                    <i class="fa fa-question-circle"></i>
                                    <div class="cst-tooltip">
                                        <span>If chose 8.5 Any_Cause</span>
                                        <span>Skip Q9 + Q10:</span>
                                        <span>Q9 -  All Should be X</span>
                                        <span>Q10.1 Enter_month = 0</span>
                                        <span>Q10.2 Req_Grace = 0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="question-9-11 d-f f-d-c">
                                <div class="m-c-4 no-margin">
                                    <h2>Q9 סוג לקוח</h2>
                                    <div class="m-c-heading">Q9 סוג לקוח
                                    </div>
                                    <ul>
                                        <li>
                                            <span>9.1 משקיע</span>
                                            <span class="no">Yes</span>
                                        </li>
                                        <li>
                                            <span>9.2 משפר דיור</span>
                                            <span>X</span>
                                        </li>
                                        <li>
                                            <span>9.3 דירה ראשונה</span>
                                            <span>X</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="offer-tabs grace ">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#grace" aria-controls="customer-offers" role="tab" data-toggle="tab">Q11 הערכת נכס</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="grace">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q10 גרייס</h2>
                                                        <span>חודש כניסה לדירה עבור גרייס לשאלות 8.1, 8.2, 8.3</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="a-month-return">
                                                        <div class="col-2">
                                                            <span>10.1 כניסה בעוד 3-36 חודשים או כניסה מידית</span>
                                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="Grace Period"></i>
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
                                                            <span>10.2 סכום גרייס דרוש</span> <i class="fa fa-question-circle"></i>
                                                            <div class="cst-tooltip">If Chose 5.1 Val 12.1
                                                                <br/> If Chose 5.1 Val 12.1
                                                            </div>
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
                                        <li role="presentation " class="active"><a href="#property-evaluation" aria-controls="customer-offers" role="tab" data-toggle="tab">גרייס</a></li>
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
                                                            <span>11.1 ערך הנכס</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="property-value" name="property-value" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.2 מימון עצמי</span>
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
                                                        <span>תוכנית למשתכן (שאלה 8.4)</span>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.1 ערך הנכס</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="property-value-1" name="property-value-1" placeholder="1k-10m" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.4 ערך שוק של הנכס</span>
                                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="If above 1.8 M set to 1.8M"></i>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="market-value" name="market-value" placeholder="1,800,000 (Max)" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.2 מימון עצמי</span>
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
                                                        <span>לכל מטרה (שאלה 8.5)</span>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.1 ערך הנכנס</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="property-value-2" name="property-value-2" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.3 סכום משכנתא</span>
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
                            <h3>הנחה שניתנת ללקוחות הבנק</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bank-customer-discount" name="bank-customer-discount" placeholder="0.5%-" />
                                <span class="indicator i-green">1</span>
                            </div>
                            <ul>
                                <li><span class="text-green">מאופשר</span> - ויש התאמה בין האלגו לבנק של הלקוח – יש הנחה.</li>
                                <li><span class="text-grey">מאופשר</span> - ולא נמצא בנק מתאים - לא ניתן הנחה.</li>
                                <li><span class="text-red">מושבת</span> - לא ניתן הנחה.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="question-container">
                    <div class="question-12-16 d-f f-d-c">
                        <a href="javascript:void(0);" class="main-button button-large button-bordered" style="margin-top: 20px;">Q12-16 מידע פיננסי</a>
                        <div class="table-container table-auto finance-info-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="28">טבלת החזר חודשי-שנים ממוצע של בנק מזרחי טפחות<i style="float:right;" class="fa fa-question-circle"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3. כמות שנים</td>
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
                                        <td>ריבית בנקאית ממוצעת (A+D+H/3 for AA)</td>
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
                                        <td>Q12 החזר חודשי</td>
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
                                        <li role="presentation " class="active"><a href="#monthly-return" aria-controls="monthly-return" role="tab" data-toggle="tab">החזר חודשי (MR)</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="monthly-return">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q12 החזר חודשי</h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>12.1 החזר חודשי מחושב</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="wanted-mr" name="wanted-mr"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>12.3 יחס הכנס להוצאה</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="income-ratio" name="income-ratio" placeholder="0-39%"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>12.2 שנים</span>
                                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="If ( 80 age - 12.2 &#60; 7.1) Give blue message"></i>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="wanted-years" name="wanted-years" placeholder="4-30"> </div>
                                                    </div>
                                                    <div class="monthly-return-question">
                                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="אם בחרת כן: המשך לשאלה הבאה, אם לא: יש לבחור את המחוון [12.2 + 7.1] &lt;=8 0 שנים"></i>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12" style="margin-top: 10px;">
                                                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="12.3 יחס הכנסה: אם מעל 39% זה אדום, מתחת או שווה זה ירוק. Calc: [(12.1 Req_PMT + 2.9) / 4. Family_Income]"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="offer-tabs mortgage-morg">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#mortgage-morg" aria-controls="mortgage-morg" role="tab" data-toggle="tab">משכנתא</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="mortgage-morg">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>משכנתא מבוקשת</h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="req-mortgage-text">
                                                        <i class="fa fa-question-circle"></i>
                                                        <div class="cst-tooltip">
                                                            <p><span>Q11A + Q11B:</span> Calc Mortgage by 11.1 -11.2</p>
                                                            <p><span>Q11C:</span> Value From registration 11.3</p>
                                                        </div>
                                                    </div>
                                                    <div class="a-month-return d-f a-i-c">
                                                        <div class="col-2">
                                                            <span>11.3 משכנתא מבוקשת</span>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control" id="mortgage-fee-1" name="mortgage-fee-1"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="req-table-ratio">
                                                        <div class="form-group">
                                                            <label>20.4 טבלת רגולציה</label>
                                                            <div class="r-t-r-input-container d-f a-i-c">
                                                                <input type="text" class="form-control" id="regulation-table-percent" name="regulation-table-percent" placeholder="50 / 70 / 75%">
                                                                <i class="fa fa-question-circle"></i>
                                                                <div class="cst-tooltip">
                                                                    <span>See Regulation_Table for Calc</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>11.4 אחוז מימון מבוקש</label>
                                                            <div class="r-t-r-input-container d-f a-i-c">
                                                                <input type="text" class="form-control" id="morg-ratio" name="morg-ratio" placeholder="1-100%">
                                                                <i class="fa fa-question-circle"></i>
                                                                <div class="cst-tooltip">
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
                            </div>
                            <div class="col-md-8">
                                <div class="offer-tabs investments">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#investments" aria-controls="investments" role="tab" data-toggle="tab">השקעה</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active clearfix" id="investments">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-inner-heading">
                                                        <h2>Q13 השקעות</h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="table-container table-auto table-nowrap investments-table">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Q13 Investments</th>
                                                                    <th>השקעה 1</th>
                                                                    <th>השקעה 2</th>
                                                                    <th>השקעה 3</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13.3 סכום השקעה</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13.4 משך תקופת ההשקעה</td>
                                                                    <td>1-20</td>
                                                                    <td>1-20</td>
                                                                    <td>1k - 10m</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <form class="A_loan_qa">
                                                        <div class="form-group">
                                                            <h1>13.1 יש השקעה</h1>
                                                            <input id="has_loan" type="radio" name="select1">
                                                            <label for="has_loan">Yes</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <h1>13.2 אין השקעה</h1>
                                                            <input id="no_loan" type="radio" name="select1">
                                                            <label for="no_loan">No</label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="alert">
                                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="* Sort Invest 1-3 from low to high by years and give investments from low to high"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="offer-tabs A_current_loan current-loans">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation " class="active"><a href="#current-loans" aria-controls="current-loans" role="tab" data-toggle="tab">הלוואות קיימות</a></li>
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
                                                                            <h2>Q14</h2>
                                                                        </td>
                                                                        <td><span class="indicator i-green">1</span></td>
                                                                        <td><span class="indicator i-red">1</span></td>
                                                                        <td><span class="indicator i-green">1</span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>הלוואות נוכחיות/קיימות</th>
                                                                        <th>הלוואה 1</th>
                                                                        <th>הלוואה 2</th>
                                                                        <th>הלוואה 3</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>14.3 סכום הלוואה</td>
                                                                        <td>1k - 10m</td>
                                                                        <td>1k - 10m</td>
                                                                        <td>1k - 10m</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>14.4 משך תקופת ההלוואה</td>
                                                                        <td>1-30 years</td>
                                                                        <td>1-30 years</td>
                                                                        <td>1-30 years</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>--</td>
                                                                        <td>--</td>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>14.6 החזר חודשי</td>
                                                                        <td>PMT</td>
                                                                        <td>PMT</td>
                                                                        <td>PMT</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <form class="A_loan_qa">
                                                        <div class="form-group">
                                                            <h1>14.1 יש הלוואה</h1>
                                                            <input id="has_loan" type="radio" name="select1">
                                                            <label for="has_loan">Yes</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <h1>14.2 אין הלוואה</h1>
                                                            <input id="no_loan" type="radio" name="select1">
                                                            <label for="no_loan">No</label>
                                                        </div>
                                                    </form>

                                                    <form class="A_table-input">
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>14.7: Loan_Fee</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="(Sum green 14.3 (0-3 green max"></i></p>
                                                        </div>
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>14.8: Monthly_Return_Fee</p>
                                                            <input type="text" placeholder="Monthly_Return_Fee">
                                                            <p><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="(Sum green 14.6 (0-3 green max"></i></p>
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
                                        <li role="presentation " class="active"><a href="#future-loans" aria-controls="future-loans" role="tab" data-toggle="tab">הלוואות עתידיות</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="future-loans">
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <h2>Q15 הלוואות עתידיות</h2>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="table-container online-customers-table left-table">
                                                        <table style="text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <td>הלוואות עתידיות</td>
                                                                    <td><span class="indicator i-green">1</span></td>
                                                                    <td><span class="indicator i-red">1</span></td>
                                                                    <td><span class="indicator i-green">1</span></td>

                                                                </tr>
                                                                <tr>
                                                                    <th>הלוואות עתידיות</th>
                                                                    <th>הלוואה עתידית 1</th>
                                                                    <th>הלוואה עתידית 2</th>
                                                                    <th>הלוואה עתידית 3</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15.3 סכום הלוואה</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                    <td>1k - 10m</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.4 משך תקופת הלוואה</td>
                                                                    <td>1-30 years</td>
                                                                    <td>1-30 years</td>
                                                                    <td>1-30 years</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.5 ריבית</td>
                                                                    <td>0-100%</td>
                                                                    <td>0-100%</td>
                                                                    <td>0-100%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15.6 החזר חודשי</td>
                                                                    <td>PMT Calc</td>
                                                                    <td>PMT Calc</td>
                                                                    <td>PMT Calc</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="constant-future-loans-wrap">

                                                        <div class="online-clerk-wrap left-table">
                                                            <div class="table-container online-customers-table">
                                                                <table style="text-align: center;">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>הלוואות בנק מיוחדות קבועות</td>
                                                                            <td><span class="indicator i-green">1</span></td>
                                                                            <td><span class="indicator i-red">1</span></td>
                                                                            <td><span class="indicator i-red">1</span></td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th>הלוואות בנק קבועות</th>
                                                                            <th>AA-Mizrachi </th>
                                                                            <th>DD-Hpoalim</th>
                                                                            <th>EE-Leumi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>15.7 סכום הלוואה</td>
                                                                            <td>1k - 10m</td>
                                                                            <td>1k - 10m</td>
                                                                            <td>1k - 10m</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15.8 משך תקופת הלוואה</td>
                                                                            <td>1-30 years</td>
                                                                            <td>1-30 years</td>
                                                                            <td>1-30 years</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15.9 ריבית</td>
                                                                            <td>0-100%</td>
                                                                            <td>0-100%</td>
                                                                            <td>0-100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15.10 החזרת חודשי</td>
                                                                            <td>PMT Calc</td>
                                                                            <td>PMT Calc</td>
                                                                            <td>PMT Calc</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <i class="fa fa-question-circle"></i>
                                                        <div class="cst-tooltip">
                                                            <p class="A-title_center"><b>Consider if you move to above banks only (from Other bank)</b> Take into account only if Q7: Yes &amp; Q6 different from <a href="javascript:void(0);">Bank By Algo</a> &amp;
                                                                <a href="javascript:void(0);">Bank By Algo</a> is in Constant future loan table.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <form class="A_loan_qa">
                                                        <div class="form-group">
                                                            <h1>15.1 יש הלוואות עתידיות</h1>
                                                            <input id="has_loan" type="radio" name="select1">
                                                            <label for="has_loan">Yes</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <h1>15.2 אין הלוואות</h1>
                                                            <input id="no_loan" type="radio" name="select1">
                                                            <label for="no_loan">No</label>
                                                        </div>
                                                    </form>

                                                    <form class="A_table-input">
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>15.11: Loan_Fee</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="(Sum green 14.3 (0-3 green max"></i></p>
                                                        </div>
                                                        <div class="form-group">
                                                            <i class="fa fa-arrow-right"></i>
                                                            <p>15.12 Monthly Return</p>
                                                            <input type="text" placeholder="Loan_Fee_Sum">
                                                            <p><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="(Sum green 14.6 (0-3 green max"></i></p>
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
                                        <h2>Q16 זכאות</h2>
                                        <a href="javascript:void(0);" class="main-button button-large button-green">זכאי</a>
                                        <a href="javascript:void(0);" class="main-button button-large button-red">לא זכאי</a>
                                        <div class="elegebility-question d-f a-i-c">
                                            <i class="fa fa-question-circle"></i>
                                            <div class="cst-tooltip">
                                                <ul>
                                                    <li>1. Ask Elegebility question Q8 only if you don't have any apartment only! (2.1c and chose 1.3/1.4 only)</li>
                                                    <li>2. Calc Elegebility only if has loan type C in loan type table.</li>
                                                </ul>
                                            </div>
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
                                                    <th>Q16 זכאות</th>
                                                    <th>נקודות לחישוב</th>
                                                    <th>ערך שהוזן בהרשמה</th>
                                                    <th style="background-color: #fff">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>כלל הנקודות</span> <input type="text" class="form-control" id="total-points" name="total-points" placeholder="30-5050" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>ניקוד בסיס</span> <input type="text" class="form-control" id="basic-score" name="basic-score" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span>ניקוד צבא</span><input type="text" class="form-control" id="army-score" name="army-score" /></div>
                                                                </td>
                                                            </tr>
                                                            <tr class="input-green">
                                                                <td>
                                                                    <div class="td-input d-f a-i-c"><span><b>נקודות זכאות</b></span><input type="text" class="form-control" id="eligibility-score" name="eligibility-score" /></div>
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
                                                                    <input type="text" class="form-control" id="service-points" name="service-points" placeholder="(Service Points (Q16.4 + Q16.5" /></td>
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
                                                                <td>Q16.1 מספר שנות נישואים בעל ואישה</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.2 מספר ילדים מתחת לגיל 21</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.3 מספר אחים ואחיות משני הצדדים, בעל ואישה ביחד תושבי ישראל</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.4 מספר חודשי שירות צבאי (לגבר)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Q16.5 מספר חודשי שירות לאומי (לאישה)</td>
                                                            </tr>
                                                        </table>
                                                    </td>




                                                </tr>
                                            </tbody>
                                        </table>
                                        <p style="margin-top: 10px;"><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="** All data above should be sent to admin while customers fill form."></i></p>
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
    <script src="{{ URL::asset('admin_new_hr/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('admin_new_hr/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('admin_new_hr/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('admin_new_hr/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('admin_new_hr/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('admin_new_hr/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>