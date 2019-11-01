@include('layouts.admin_top_header_hr')
@include('layouts.admin_header_submenu_hr')  
    <!-- admin content starts here -->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p class="margin-t-a"><b>סטטוס לקוח:<br/></b> <b>בנק:</b>AA - מזרחי טפחות | <b>יש שיעבוד :</b> כן/לא | <b>סוג מימון:</b> א/ב/ג/כל מטרה
                        <br/> <b>ריבית קבועה צמודה:</b> (סוג B): כן/לא (4-40 שנים, 1.2%)
                        <br/> <b>ריבית קבועה לא צמודה:</b> (סוג C): כן/לא (4-40 שנים, 1.2%)</p>
                </div>
            </div>
            <div class="cst-customer-status">
                <ul class="d-f">
                    <li class="d-f">סטטוס לקוח:
                        <span>אא (Mizrachi) | </span>
                        <span style="margin-left: 4px;">שיעבוד (כן/לא) | </span>
                    </li>
                    <li class="d-f">סוג מימון:
                        <span>מימון א / ב / ג או כל סיבה | </span>
                    </li>
                    <li class="d-f">סוג הלוואה ב:
                        <span>כן/לא (4-30 שנים, 1.2%) | </span>
                    </li>
                    <li class="d-f">סוג הלוואה ג:
                        <span>כן/לא (4-30 שנים, 1.2%)</span>
                    </li>
                </ul>
            </div>
            <div class="offer-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#customer-offers" aria-controls="customer-offers" role="tab" data-toggle="tab">שלושה הצעות שניתנו ללקוח</a></li>
                    <li role="presentation" class="active"><a href="#database-offers" aria-controls="database-offers" role="tab" data-toggle="tab">בסיס נתונים הצעות</a></li>
                    <li role="presentation"><a href="#new-uploads" aria-controls="new-uploads" role="tab" data-toggle="tab">העלאות חדשות מהאתר</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="customer-offers">
                        <div class="tab-inner d-f">
                            <div class="table-wrap">
                                <div class="table-heading d-f a-i-c j-c-s-b">
                                    <h2>הצעות שהלקוח קיבל – שלושה הצעות טובות תואמות ללקוח:</h2>
                                    <a href="javascript:void(0);" class="main-button button-bordered  button-large">טען הצעה ללקוח מבסיס הנתונים</a> </div>
                                <div class="table-container suggested-offers-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ריבית <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>שנים <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית קבועה לא צמודה (סוג C)
                                                    <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>שנים <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית קבועה צמודה (סוג B) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>סוג מימון א/ב/ג/כל מטרה
                                                    <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>יש שיעבוד?</th>
                                                <th>החזר חודשי</th>
                                                <th>אחוז מימון <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>משכנתא כוללת <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ערך הנכס <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>קוד בנק במערכת <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>שם הבנק <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>תאריך <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th colspan="3">מספר <i class="fa fa-sort" aria-hidden="true"></i></th>
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
                                                <td>כל סיבה/מימון א / ב / ג</td>
                                                <td>&nbsp;</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>AA</td>
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
                                                <td>כל סיבה</td>
                                                <td>&nbsp;</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>BB</td>
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
                                                <td>מימון א</td>
                                                <td>&nbsp;</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>CC</td>
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
                                    <h2>בסיס הנתונים</h2>
                                    <div class="table-sub-heading d-f a-i-c">
                                        <div class="t-s-h-container">
                                            <h5>תצוגה של בסיס הנתונים:</h5>
                                            <p>הצג הצעות מהיום ועד לפני 60 יום בלבד, סדר בטבלה.</p>
                                        </div>
                                        <div class="t-s-h-container">
                                            <h5>סוג מימון:</h5>
                                            <p>מימון א: 0-45%, מימון ב: 45-60%, מימון ג: 60-75%, לכל מטרה 0-50%</p>
                                        </div>
                                        <a href="javascript:void(0);" class="main-button button-bordered  button-large" data-toggle="modal" data-target="#new-offer-modal">טען הצעה חדשה לבסיס הנתונים</a> </div>
                                </div>
                                <div class="table-container database-offers-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ריבית <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>שנים <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית קבועה לא צמודה (סוג C)
                                                    <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית <span class="table-heading-small">(0-10%)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית <span class="table-heading-small">(4-30)</span> <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ריבית קבועה צמודה (סוג B) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>סוג מימון א/ב/ג/כל מטרה
                                                    <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>יש שיעבוד</th>
                                                <th>החזר חודשי</th>
                                                <th>אחוז מימון <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>דמי משכנתא <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ערך הנכס <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>קוד בנק <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>שמות בנק <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>תאריך <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th colspan="3">מספר <i class="fa fa-sort" aria-hidden="true"></i></th>
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
                                                <td>כל סיבה / מימון א/ב/ג</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>AA</td>
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
                                                    <span class="data-multiple">אשר</span>
                                                    <span class="data-multiple">אשר</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>כל סיבה</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>BB</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>2</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>אשר</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>מימון א</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>CC</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>3</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2.72%</td>
                                                <td>10</td>
                                                <td>אשר</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>כל סיבה / מימון א/ב/ג</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> לא</span></td>
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
                                                    <span class="data-multiple">אשר</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>כל סיבה</td>
                                                <td><span class="yes">Yes </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>EE</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>5</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>אשר</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>מימון א</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>FF</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>6</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2.72%</td>
                                                <td>10</td>
                                                <td>אשר</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>כל סיבה / מימון א/ב/ג</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>GG</td>
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
                                                    <span class="data-multiple">אשר</span>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>כל סיבה</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>HH</td>
                                                <td>Ipsum</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>8</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4.30%</td>
                                                <td>1.6</td>
                                                <td>אשר</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>איקס</td>
                                                <td>מימון A</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>60.00%</td>
                                                <td>10,20,000</td>
                                                <td>17,00,000</td>
                                                <td>II</td>
                                                <td>Dolor</td>
                                                <td style="white-space: nowrap;" style="white-space: nowrap;">24-4-2019</td>
                                                <td>9</td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-cloud-download"></i></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2.72%</td>
                                                <td>10</td>
                                                <td>אשר</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>X</td>
                                                <td>כל סיבה / מימון א/ב/ג</td>
                                                <td><span class="yes">כן </span>/<span class="no"> לא</span></td>
                                                <td>&nbsp;</td>
                                                <td>55.21%</td>
                                                <td>9,00,000</td>
                                                <td>16,30,000</td>
                                                <td>JJ</td>
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
                                    <h2>מסננים לבסיס נתונים</h2>
                                    <form>
                                        <ul class="d-f a-i-f-e">
                                            <li>
                                                <label>תאריך התחלה</label>
                                                <div class="form-group datepicker-container">
                                                    <input type="text" class="datepicker" id="from-date" name="from-date" placeholder="תאריך" />
                                                    <img src="images/icon-calendar.png" alt="" /> </div>
                                            </li>
                                            <li>
                                                <label>תאריך סיום</label>
                                                <div class="form-group datepicker-container">
                                                    <input type="text" class="datepicker" id="to-date" name="to-date" placeholder="לתאריך" />
                                                    <img src="images/icon-calendar.png" alt="" /> </div>
                                            </li>
                                            <li>
                                                <button type="submit" class="main-button button-bordered button-large">הצג הצעות 60 ימים אחרונים</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="d-b-selects">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>סוג הלוואה</label>
                                                <select class="selectpicker">
                        <option>הצג הכול</option>
                        <option>הצג הכול-1</option>
                        <option>הצג הכול-2</option>
                      </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>סוג מימון</label>
                                                <select class="selectpicker">
                                                    <option>הצג הכול</option>
                                                    <option>הצג הכול-1</option>
                                                    <option>הצג הכול-2</option>
                      </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>האם יש שיעבוד</label>
                                                <select class="selectpicker">
                                                    <option>הצג הכול</option>
                                                    <option>הצג הכול-1</option>
                                                    <option>הצג הכול-2</option>
                      </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-b-select-container d-f f-d-c">
                                                <label>שם וקוד בנק במערכת</label>
                                                <select class="selectpicker">
                                                    <option>הצג הכול</option>
                                                    <option>הצג הכול-1</option>
                                                    <option>הצג הכול-2</option>
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
                                <div class="table-heading d-f f-d-c">
                                    <h2>הצעות שהועלו מהאתר:</h2>
                                    <span>קבצים pdf, word, image</span> </div>
                                <div class="table-container new-offer-table table-nowrap table-auto">
                                    <table style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>מספר <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>תאריך העלאת הצעה <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>שם מלא <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>אימייל <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>טלפון <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ערך משכנתא <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th>ערך נכס <i class="fa fa-sort" aria-hidden="true"></i></th>
                                                <th colspan="3">החזר חודשי <i class="fa fa-sort" aria-hidden="true"></i></th>
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
                                    <h3>קבל את ההצעה הטובה ביותר על בסיס האלגוריתם הבא:</h3>
                                    <h5>חפש את תהליך ההצעה הטוב ביותר:</h5>
                                    <ul>
                                        <li><span>1.</span> חפש מהיום ועד ל -60 יום (מקסימום).</li>
                                        <li><span>2.</span> חיפוש בהתאם לבנק הנבחר.</li>
                                        <li><span>3.1</span> האם יש שיעבוד – בדיקה כן או לא</li>
                                        <li><span>3.2</span> חיפוש על פי סוג המימון: א/ב/ג/כל מטרה</li>
                                        <li><span>4.</span> חיפוש בהתאם להימצאות מסלול הלוואה מתאימה: על פי B או C מצא את ההתאמה הטובה ביותר:
                                        </li>
                                    </ul>
                                </div>
                                <div class="best-match-container">
                                    <h3>מצא את המשחק הטוב ביותר:</h3>
                                    <ul>
                                        <li><span>5.1</span> מציאת התאמה 2 מתוך 2, חיפוש על פי פלוס מינוס 5 שנים, חיפוש ריבית מינימלית.</li>
                                        <li>אם נמצא - חיפוש פלוס / מינוס 5 שנים על הסוג הנכון לחפש ריבית מינימלית.</li>
                                        <li><span>5.2</span> מציאת התאמה 1 מתוך 2, חיפוש על פי פלוס מינוס 5 שנים, חיפוש ריבית מינימלית.</li>
                                        <li>אם נמצא - חיפוש פלוס / מינוס 5 שנים על הסוג הנכון לחפש ריבית מינימלית.</li>
                                        <li><span>5.3</span> מציאת התאמה 0 מתוך 2, חיפוש על פי פלוס מינוס 5 שנים, חיפוש ריבית מינימלית.</li>
                                        <li>אם נמצא - חיפוש פלוס / מינוס 5 שנים על הסוג הנכון לחפש ריבית מינימלית.</li>
                                        <li><span>5.4</span> במידה ולא נמצא שום התאמה להתליך הנ"ל יש להופיע הודעה: "לא נמצאה התאמה".</li>
                                    </ul>
                                    <p>"לא נמצא הצעות תואם - אנא פנה אלינו ואנו נעזור לך"</p>
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
                    <h2 class="modal-title">מלא את הנתונים להלן כדי להעלות הצעה חדשה לבסיס נתונים</h2>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="n-o-offer-container">
                            <div class="row clearfix d-f a-i-f-e">
                                <div class="col-sm-4">
                                    <h5>קבלת</h5>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>תאריך</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group datepicker-container">
                                                        <input type="text" class="datepicker" id="offer-initiation-date" name="offer-initiation-date" placeholder="From Date" />
                                                        <img src="images/icon-calendar.png" alt="" /> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <h5>הבנק אשר נתן את ההצעה</h5>
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>קוד בנק</th>
                                                <th>שם הבנק</th>
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
                                        <a href="javascript:void(0);" class="main-button button-large button-bordered">העלאה קובץ אישור עקרוני<i class="fa fa-upload" aria-hidden="true"></i></a>
                                        <label>offer_name1.pdf</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="n-o-funding-container">
                            <div class="row clearfix d-f">
                                <h5>אחוז מימון = (דמי משכנתא / ערך הנכס) * 100</h5>
                                <div class="col-sm-5">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>דמי משכנתא</th>
                                                <th>ערך הנכס</th>
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
                                                <th>אחוז מימון (%)</th>
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
                                                <th>החזר חודשי</th>
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
                                <h5>מצב מימון</h5>
                                <div class="col-sm-3">
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>יש שיעבוד?</th>
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
                                                <th>סוג מימון</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><select class="selectpicker">
                          <option>לכל מטרה</option>
                          <option>לכל מטרה-1</option>
                          <option>לכל מטרה-2</option>
                        </select></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <h5>אפשרויות מימון:</h5>
                                    <ul>
                                        <li>מימון א: 0-45%,</li>
                                        <li>מימון ב: 45-60%,</li>
                                        <li>מימון ג: 60-75%,</li>
                                        <li>לכל מטרה: 0-50%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="n-o-loan-type-container">
                            <div class="row clearfix d-f">
                                <div class="col-sm-6">
                                    <h5>תמהיל מכיל ריבית קבועה לא צמודה (סוג C)</h5>
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>ריבית (0-10%)</th>
                                                <th>שנים (4-30)</th>
                                                <th>סוג הלוואה ג</th>
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
                                    <h5>תמהיל מכיל ריבית קבועה צמודה (סוג B)</h5>
                                    <table style="table-layout: fixed;">
                                        <thead>
                                            <tr>
                                                <th>ריבית (0-10%)</th>
                                                <th>שנים (4-30)</th>
                                                <th>סוג הלוואה ב</th>
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
                    <button type="submit" class="main-button button-bordered button-large">טען הצעה חדשה לבסיס נתונים</button>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer_admin_hr')
    