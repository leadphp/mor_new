@include('layouts.admin_top_header_hr')
@include('layouts.admin_header_submenu_hr')       

    <!-- admin content starts here -->

    <div class="main-content" style="padding-top: 30px;">
        <div class="container-fluid d-f">
            <div class="bank-info-wrap" style="direction: rtl;">
                <div class="indicator-container">
                    <h4>סטטוס מילוי פרקטים לבנק:</h4>
                    <ul class="d-f">
                        <li> <span class="indicator i-gray"></span> אין מידע </li>
                        <li> <span class="indicator i-yellow"></span> בתהליך </li>
                        <li> <span class="indicator i-green"></span> בוצע </li>
                    </ul>
                </div>
                <div class="b-i-steps-wrap d-f j-c-s-b">
                    <div class="b-i-steps-wrap-left">
                        <div class="b-i-steps-container">
                            <h2>(Personal Details (Files 1-3</h2>
                            <div class="b-i-steps-content">
                                <div class="b-i-steps-heading d-f j-c-s-b">
                                    <div>
                                        <h2>פרטים אישיים:</h2>
                                        <h3>תצלום תעודת זהות (עם ספח פתוח) של הלווים:</h3>
                                    </div>
                                    <div class="all-docs">
                                        <div class="form-group-container">
                                            <div class="form-group">
                                                <label>כל הקבצים מאוחדים</label>
                                                <div class="file-upload-container">
                                                    <input type="file" accept=".pdf">
                                                    <a href="javascript:void(0);" class="file-upload-button d-f a-i-c">No File <img src="images/icon-upload-img.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-i-form-container">
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>1.1 -</span> לווה 1:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>1.2 -</span> לווה 2:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <h3>בנק מזרחי טפחות</h3>
                                            <label><span>2.1 -</span> עובר ושב 3 חודשים אחרונים מהבנק</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h3>בנק פועלים</h3>
                                            <label><span>2.2 -</span> עובר ושב 3 חודשים אחרונים מהבנק</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                        <p class="note"> (הערה: נא לא לצרף אקסל, אלא הדפסה מהאינטרנט של חשבון הבנק בלבד).</p>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>3.1 -</span> פירוט הלוואות מהאינטרנט של חשבון הבנק:</label>
                                            <div class="file-upload-container">
                                                <div class="file-upload-button d-f a-i-c"><img src="images/icon-pdf.png" alt=""><span>my_maskoret_julay.pdf</span> מסמך מצורף
                                                    <a href="javascript:void(0);" class="delete-file"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>3.2 -</span> פירוט הלוואות מהאינטרנט של חשבון הבנק:</label>
                                            <div class="file-upload-container">
                                                <div class="file-upload-button d-f a-i-c"><img src="images/icon-pdf.png" alt=""><span>my_maskoret_julay.pdf</span> מסמך מצורף
                                                    <a href="javascript:void(0);" class="delete-file"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="note"> (הערה: נא לא לצרף אקסל, אלא הדפסה מהאינטרנט של חשבון הבנק בלבד).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>(Income Details (Files 4-9</h2>
                            <div class="b-i-steps-content">
                                <div class="b-i-steps-heading">
                                    <h2>פרטי הכנסות:</h2>
                                    <h3>שכיר - תלושי שכר 3 חודשים אחרונים:</h3>
                                </div>
                                <div class="b-i-form-container">
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>4.1 -</span> לווה 1:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>4.2 -</span> לווה 2:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                        <p class="note">
                                            <span class="i-f-h"><b>עצמאי</b>- שומת מס:</span>
                                            <br/> עד ספטמבר - נדרש שומת מס שנתיים אחורה (כלומר: נאופוסט 2018 - אנו נדרשים לשומה של 2016).
                                            <br/> לאחר ספטמבר - נדרש שומת מס שנה + שנתיים אחורה (כלומר: בספטמבר 2018 - אנו נדרשים לשומה של 2017 + 2016).
                                        </p>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>5.1 -</span> לווה 1:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>5.2 -</span> לווה 2:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                        <p class="note">
                                            <span class="i-f-h"><b>אישור רואה חשבון בהתאם לבנק הנבחר:</b></span>
                                            <br/> אנא הורד את הקובץ ולאחר מכן שלח לרואה חשבון שלך למילוי הפרטים.
                                            <br/>בסיום, יש לצרף את הקובץ מחדש לאחר מילוי של כל הפרטים על ידי הרואה חשבון.
                                        </p>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>6.1 -</span> לווה 1: <a href="javascript:void(0);" class="download-button"><img src="images/icon-download.png" alt=""/> הורד טופס עבור הרואה חשבון</a></label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>6.2 -</span> לווה 2: <a href="javascript:void(0);" class="download-button"><img src="images/icon-download.png" alt=""/> הורד טופס עבור הרואה חשבון</a></label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <h4 class="f-g-heading">חופשת לידה:
                                            </h4>
                                            <label><span>7.1 -</span> אישור ביטוח לאומי או מכתב שחרור בית חולים:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>7.2 -</span> תלוש שכר אחרון של האשה:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <h4 class="f-g-heading">הכנסות נוספות:
                                            </h4>
                                            <label><span>8.1 -</span> דמי שכירות של דירה - כהכנסה נוספת:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>8.2 -</span> דמי שכירות של דירה - כהכנסה נוספת:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>8.3 -</span> פנסיה - כהכנסה נוספת:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>8.4 -</span> פנסיה - כהכנסה נוספת:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <h4 class="f-g-heading">במצב נכות:
                                            </h4>
                                            <label><span>9.1 -</span> אישור ביטוח לאומי.</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label><span>9.2 -</span> אישור ביטוח לאומי.</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container appartments-u-own">
                            <h2>(Q2 Apartsment You Own (Files 10.1-10.3</h2>
                            <div class="b-i-steps-content">
                                <div class="b-i-steps-heading">
                                    <h2>פרטי הכנסות:</h2>
                                    <h3>שכיר - תלושי שכר 3 חודשים אחרונים:</h3>
                                </div>
                                <div class="b-i-form-container">
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="f-g-c-heading">דירה 1 :
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.1a -</span> נסח טאבו או אישור זכויות על הדירה:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.2a -</span> דוח יתרות לסילוק משכנתא:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.3a -</span> דוח תשלומי משכנתא - 2 שנים אחרונות:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="f-g-c-heading"> דירה 2 :
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.1b -</span> נסח טאבו או אישור זכויות על הדירה:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.2b -</span> דוח יתרות לסילוק משכנתא:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.3b -</span> דוח תשלומי משכנתא - 2 שנים אחרונות:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="f-g-c-heading"> דירה 3 :
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.1c -</span> נסח טאבו או אישור זכויות על הדירה:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.2c -</span> דוח יתרות לסילוק משכנתא:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>10.3c -</span> דוח תשלומי משכנתא - 2 שנים אחרונות:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>(Q2 Apartsment You Own (Files 11</h2>
                            <div class="b-i-steps-content">
                                <div class="b-i-steps-heading">
                                    <h2>פרטי נכס קיים:</h2>
                                </div>
                                <div class="b-i-form-container">
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>11 -</span> חוזה רכישה מלא - כולל כל הנספחים: </label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>(Q8.3 Self-Construction (File 12</h2>
                            <div class="b-i-steps-content">
                                <div class="b-i-steps-heading">
                                    <h2>בניה עצמית:</h2>
                                </div>
                                <div class="b-i-form-container">
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>12.1 -</span> היתר בניה:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>12.2 -</span> כתב כמויות חתום על ידי אדריכל/מפקח:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>12.3 -</span> הסכם התקשרות עם הקבלן:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><span>12.4 -</span> אישור זכויות/ נסח טאבו:</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>(Q8.5 Any-Cause (File 13</h2>
                            <div class="b-i-steps-content">
                                <div class="b-i-steps-heading">
                                    <h2>הלוואה לכל מטרה:</h2>
                                </div>
                                <div class="b-i-form-container">
                                    <div class="form-group-container d-f a-i-f-e">
                                        <div class="form-group">
                                            <label><span>13 -</span>  נוסח טאבו של הדירה.</label>
                                            <div class="file-upload-container">
                                                <input type="file" accept="image/*">
                                                <a href="javascript:void(0);" class="file-upload-button d-f a-i-c"><img src="images/icon-upload-img.png" alt="">No File </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-i-steps-wrap-right">
                        <div class="b-i-steps-container">
                            <h2>Step 01 - Chose Clerk</h2>
                            <div class="b-i-steps-content">
                                <div class="bank-name-container">
                                    שם הבנק הנבחר שיתן לך את המשכנתא האופטימלית: <span>מזרחי טפחות</span>
                                </div>
                                <div class="choose-clerk-select-container d-f j-c-s-b a-i-c">
                                    <span>
                                    באיזה עיר תרצה לחתום על המשכנתא:
                                    </span>
                                    <div class="form-group select-frontend">
                                        <label>עיר</label>
                                        <select class="selectpicker">
                                  <option>עיר</option>
                                  <option>עיר</option>
                                  <option>עיר</option>
                                  <option>עיר</option>
                                </select>

                                    </div>
                                </div>
                                <div class="choose-clerk-select-container d-f j-c-s-b a-i-c">
                                    <span>
                                    באיזה סניף אתה מעוניין לחתום:
                                    </span>
                                    <div class="form-group select-frontend">
                                        <label>שם סניף</label>
                                        <select class="selectpicker">
                                      <option>שם סניף</option>
                                      <option>שם סניף</option>
                                      <option>שם סניף</option>
                                      <option>שם סניף</option>
                                    </select>

                                    </div>
                                </div>
                                <div class="choose-clerk-select-container d-f j-c-s-b a-i-c">
                                    <span>
                                    שם פקיד מטפל:
                                    </span>
                                    <div class="form-group select-frontend">
                                        <label>שם פקיד מלא </label>
                                        <select class="selectpicker">
                                          <option>שם פקיד מלא </option>
                                          <option>שם פקיד מלא </option>
                                          <option>שם פקיד מלא </option>
                                          <option>שם פקיד מלא </option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="b-i-steps-content">
                                <div class="bank-selected-container d-f j-c-s-b">
                                    <div class="bank-selected-text">
                                        <h4>בנק מזרחי טפחות</h4>
                                        <ul>
                                            <li>סניף: <span>הנגב – 58744</span></li>
                                            <li>הנציג שיטפלך בך הוא :<span>אפריים גבריאלוב</span></li>
                                            <li>מייל : <span>bank@gmail.com</span></li>
                                            <li>פקס : <span>03-123456789</span></li>
                                            <li>טלפון לתיאום פגישה : <span>08-7457444</span></li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0);" class="bank-selected-logo">
                                        <img src="images/logo-inner.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>Step 03 - General Details</h2>
                            <div class="b-i-steps-content no-background">
                                <div class="chat-container d-f f-d-c a-i-f-s">
                                    <div class="message-pic">
                                        <img src="images/advisor.png" alt="">
                                    </div>
                                    <div class="message d-i-f f-d-c">
                                        <span class="chat-icon"><img src="images/chat-icon.png" alt=""></span>
                                        <p>האם יש לווה נוסף שיצטרף אליך בלקיחת המשכנתא?</p>
                                        <span class="message-timing">18:20</span>
                                    </div>
                                    <div class="custom-radio-wrap d-f">
                                        <div class="custom-radio-container">
                                            <input type="radio" id="there-is" name="123" value="" checked/>
                                            <div class="custom-radio-text">
                                                יש
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="nothing" name="123" value="" />
                                            <div class="custom-radio-text">
                                                אין
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-i-steps-content">
                                <div class="table-container table-nowrap table-auto general-details-table">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span>1.</span> שם פרטי</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <label>פרטי לווה (1)</label>
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" placeholder="ליאור" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <label>פרטי לווה (2)</label>
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>2.</span> שם משפחה</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" placeholder="ליאור" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>3.</span> כתובת מגורים נוכחית</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" placeholder="ליאור" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>4.</span> כתובת אימייל</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" placeholder="Lior@domain.com" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>5.</span> טלפון נייד</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" placeholder="054-7890123" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>6.</span> מין</th>
                                                <td>
                                                    <div class="custom-radio-wrap d-f">
                                                        <div class="custom-radio-container gender-radio gender-female ">
                                                            <input type="radio" id="female" name="567" value="" checked>
                                                            <div class="custom-radio-text d-f a-i-c">
                                                                <span style="margin-left: 15px;"></span> נקבה
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio-container gender-radio gender-male">
                                                            <input type="radio" id="male" name="567" value="">
                                                            <div class="custom-radio-text d-f a-i-c">
                                                                <span style="margin-left: 15px;"></span> זכר
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-radio-wrap d-f">
                                                        <div class="custom-radio-container gender-radio gender-female ">
                                                            <input type="radio" id="female" name="678" value="" checked>
                                                            <div class="custom-radio-text d-f a-i-c">
                                                                <span style="margin-left: 15px;"></span> נקבה
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio-container gender-radio gender-male">
                                                            <input type="radio" id="male" name="678" value="">
                                                            <div class="custom-radio-text d-f a-i-c">
                                                                <span style="margin-left: 15px;"></span> זכר
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>7.</span> מס זהות</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>8.</span> תאריך הנפקת ת.ז</th>
                                                <td>
                                                    <div class="form-group datepicker-container input-frontend">
                                                        <input type="text" class="datepicker" id="issue-date" name="issue-date" placeholder="DD.MM.YYYY" />
                                                        <img src="images/icon-calendar-green.png" alt="" /> </div>
                                                </td>
                                                <td>
                                                    <div class="form-group datepicker-container input-frontend">
                                                        <input type="text" class="datepicker" id="issue-date-2" name="issue-date-2" placeholder="DD.MM.YYYY" />
                                                        <img src="images/icon-calendar-green.png" alt="" /> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>9.</span> תאריך לידה</th>
                                                <td>
                                                    <div class="form-group datepicker-container input-frontend">
                                                        <input type="text" class="datepicker" id="birth-date" name="birth-date" placeholder="DD.MM.YYYY" />
                                                        <img src="images/icon-calendar-green.png" alt="" /> </div>
                                                </td>
                                                <td>
                                                    <div class="form-group datepicker-container input-frontend">
                                                        <input type="text" class="datepicker" id="birth-date-2" name="birth-date-2" placeholder="DD.MM.YYYY" />
                                                        <img src="images/icon-calendar-green.png" alt="" /> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>10.</span> מצב משפחתי</th>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                                    <option>שם סניף</option>
                                                                    <option>שם סניף</option>
                                                                    <option>שם סניף</option>
                                                                    <option>שם סניף</option>
                                                                  </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                                    <option>שם סניף</option>
                                                                    <option>שם סניף</option>
                                                                    <option>שם סניף</option>
                                                                    <option>שם סניף</option>
                                                                  </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>11.</span> מספר ילדים (עד געל 18)</th>
                                                <td>
                                                    <div class="number-spinner d-f j-c-c">
                                                        <input type="text" class="pl-ns-value" value="1" maxlength=2>
                                                        <span class="ns-btn">
                                                                            <a data-dir="up"><<span class="icon-plus"></span>></a>
                                                        </span>
                                                        <span class="ns-btn">
                                                                        <a data-dir="dwn"><span class="icon-minus"></span></a>
                                                        </span>


                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="number-spinner d-f j-c-c">
                                                        <input type="text" class="pl-ns-value" value="1" maxlength=2>
                                                        <span class="ns-btn">
                                                                                    <a data-dir="up"><<span class="icon-plus"></span>></a>
                                                        </span>
                                                        <span class="ns-btn">
                                                                                <a data-dir="dwn"><span class="icon-minus"></span></a>
                                                        </span>


                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>Step 04 - Finance Details</h2>
                            <div class="b-i-steps-content">
                                <div class="table-container table-nowrap table-auto general-details-table finance-details-table">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span>12.</span> סטטוס תעסוקתי</th>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <label>פרטי לווה (1)</label>
                                                        <select class="selectpicker">
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                          </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <label>פרטי לווה (2)</label>
                                                        <select class="selectpicker">
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                          </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>13.</span> שם מקום העבודה</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>14.</span> תפקיד</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>15.</span> ותק (תקופת עבודה)</th>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                            <option>1-150</option>
                                                            <option>1-200</option>
                                                            <option>1-250</option>
                                                            <option>1-300</option>
                                                          </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                          </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>16.</span> הכנסה נטו בחודש</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" placeholder="054-7890123" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>17.</span> הכנסה חודשית נוספת</th>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                            <option>1-150</option>
                                                            <option>1-200</option>
                                                            <option>1-250</option>
                                                            <option>1-300</option>
                                                          </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                            <option>שכיר/ה</option>
                                                          </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>18.</span> פרט הכנסות אחרות</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>19.</span> תאריך הנפקת ת.ז</th>
                                                <td>
                                                    <div class="custom-radio-wrap d-f">
                                                        <div class="custom-radio-container gender-radio gender-female ">
                                                            <input type="radio" id="female" name="678" value="" checked>
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                קיימת
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio-container gender-radio gender-male">
                                                            <input type="radio" id="male" name="678" value="">
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                לא קיימת
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-radio-wrap d-f">
                                                        <div class="custom-radio-container gender-radio gender-female ">
                                                            <input type="radio" id="female" name="789" value="" checked>
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                קיימת
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio-container gender-radio gender-male">
                                                            <input type="radio" id="male" name="789" value="">
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                לא קיימת
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>20.</span> בנק בו מנוהל חשבון עו”ש</th>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                            <option>מזרחי טפחות</option>
                                                            <option>מזרחי טפחות</option>
                                                            <option>מזרחי טפחות</option>
                                                            <option>מזרחי טפחות</option>
                                                          </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group select-frontend">
                                                        <select class="selectpicker">
                                                            <option>אחר</option>
                                                            <option>אחר</option>
                                                            <option>אחר</option>
                                                            <option>אחר</option>
                                                          </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>21.</span> פרט את שם הבנק</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>22.</span> מספר סניף</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details-2" name="borrower-details-2" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>Q8.3 Self-Construction</h2>
                            <div class="b-i-steps-content">
                                <div class="table-container table-nowrap table-auto general-details-table finance-details-table">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span>23.</span> מטרה</th>
                                                <td>
                                                    <div class="custom-radio-wrap d-f">
                                                        <div class="custom-radio-container">
                                                            <input type="radio" id="buying-plot" name="89" value="" checked>
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                <span></span> קניית מגרש
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio-container">
                                                            <input type="radio" id="buying-land" name="89" value="">
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                <span></span> קניית מגרש ובניה
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>24.</span> האם יש כבר היתרי בניה?</th>
                                                <td>
                                                    <div class="custom-radio-wrap d-f">
                                                        <div class="custom-radio-container">
                                                            <input type="radio" id="permit-yes" name="89" value="" checked>
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                <span></span> כן
                                                            </div>
                                                        </div>
                                                        <div class="custom-radio-container">
                                                            <input type="radio" id="permit-no" name="89" value="">
                                                            <div class="custom-radio-text d-f a-i-c j-c-c">
                                                                <span></span> לא
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>25.</span> שווי הקרקע</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>26.</span> עלויות פיתוח</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>27.</span> עלויות בניה משוערות</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>28.</span> שטח המגרש (מ”ר)</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span>29.</span> שטח הבניה (מ”ר)</th>
                                                <td>
                                                    <div class="form-group input-frontend">
                                                        <input type="text" class="form-control" id="borrower-details" name="borrower-details" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="b-i-steps-container">
                            <h2>Q8.5 Any-Cause</h2>
                            <div class="b-i-steps-content no-background">
                                <div class="any-cause-radios d-f a-i-c">
                                    <label><span>30 </span> מטרה:</label>
                                    <div class="custom-radio-wrap d-f">
                                        <div class="custom-radio-container">
                                            <input type="radio" id="help-children" name="345" value="" checked/>
                                            <div class="custom-radio-text">
                                                עזרה לילדים
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="repay-loans" name="345" value="" />
                                            <div class="custom-radio-text">
                                                פירעון הלוואות קיימות
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="vacation-abroad" name="345" value="" />
                                            <div class="custom-radio-text">
                                                חופשה בחו”ל
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="renovation" name="345" value="" />
                                            <div class="custom-radio-text">
                                                שיפוץ
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="purchse-vehicles" name="345" value="" />
                                            <div class="custom-radio-text">
                                                רכישת רכב
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="starting-business" name="345" value="" />
                                            <div class="custom-radio-text">
                                                פתיחת עסק
                                            </div>
                                        </div>
                                        <div class="custom-radio-container">
                                            <input type="radio" id="other" name="345" value="" />
                                            <div class="custom-radio-text">
                                                אחר
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="any-cause-input">
                                    <div class="form-group input-frontend d-f a-i-c">
                                        <label><span>31.</span>פירוט נוסף:</label>
                                        <input type="text" class="form-control" id="further-details" name="further-details" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="b-i-steps-container">
                            <h2>Step 01 - Chose Clerk</h2>
                            <div class="b-i-steps-content">
                                <div class="bank-name-container">
                                    שם הבנק הנבחר שיתן לך את המשכנתא האופטימלית: <span>מזרחי טפחות</span>
                                </div>
                                <div class="choose-clerk-select-container d-f j-c-s-b a-i-c">
                                    <span>
                                        באיזה עיר תרצה לחתום על המשכנתא:
                                        </span>
                                    <div class="form-group select-frontend">
                                        <label>ריע</label>
                                        <select class="selectpicker">
                                      <option>ריע</option>
                                      <option>ריע</option>
                                      <option>ריע</option>
                                      <option>ריע</option>
                                    </select>

                                    </div>
                                </div>
                                <div class="choose-clerk-select-container d-f j-c-s-b a-i-c">
                                    <span>
                                        באיזה סניף אתה מעוניין לחתום:
                                        </span>
                                    <div class="form-group select-frontend">
                                        <label>שם סניף</label>
                                        <select class="selectpicker">
                                          <option>שם סניף</option>
                                          <option>שם סניף</option>
                                          <option>שם סניף</option>
                                          <option>שם סניף</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="choose-clerk-select-container d-f j-c-s-b a-i-c">
                                    <span>
                                        שם פקיד מטפל:
                                        </span>
                                    <div class="form-group select-frontend">
                                        <label>שם פקיד מלא </label>
                                        <select class="selectpicker">
                                              <option>שם פקיד מלא </option>
                                              <option>שם פקיד מלא </option>
                                              <option>שם פקיד מלא </option>
                                              <option>שם פקיד מלא </option>
                                            </select>

                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- admin content ends here -->
@include('layouts.footer_admin_hr')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>