@include('layouts.admin_top_header_hr')

    <!-- search-bar starts here -->

    <div class="search-wrap">
        <div class="container-fluid">
            <div class="search-inner d-f a-i-c j-c-s-b">
                <form>
                    <div class="form-group search-container">
                        <input type="search" class="form-control" id="searchuser" name="search" placeholder="חפש לפי שם, שם משפחה, דואר או טלפון" />
                        <span class="input-icon"><i class="fa fa-search"></i></span> </div>
                </form>
                <div class="customer-count">
                    <ul>
                        <li>לקוחות רשומים: <span>{{$counts}}</span></li>
                        <li>לקוחות בתשלום: <span>20</span></li>
                    </ul>
                </div>
                <div class="total-payments">
                    <h5>סה"כ תשלומים</h5>
                    <p>900,000 ש"ח</p>
                </div>
                <a href="javascript:void(0);" class="main-button button-large button-green">ייצא את הטבלה לאקסל<img src="{{ URL::asset('admin_new/images/icon-excel.png') }}" alt=""/></a>
                <ul class="cst-breadcrumb d-f">
                    <li><a href="javascript:void(0);">משכנתא דיגיטלית / </a></li>
                    <li>לקוחות</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- search-bar ends here -->
@foreach ($user_data as $user)
<input type="hidden" name="demo" id="demo" value="{{date('d/m/Y', strtotime($user->created_at))}}">
   @endforeach
    <!-- main content starts here -->

    <div class="main-content">
        <div class="container-fluid">
            <div class="online-clerk-wrap">
                <div class="table-container online-customers-table">
                    <table id="customerTables" style="text-align: center;">
                        <thead>
                            <tr>
                                <!-- <th>הצג את הלקוח</th>-->
                                <th>מספר לקוח # <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>זמן רישום <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th style="display: none;">זמן רישום <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>שם פרטי <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>שם משפחה <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>אימייל <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>טלפון <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>זמן התשלום <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th style="display: none;" >זמן התשלום <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>תשלומים <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>הורד את החשבונית <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>לקוח נרשם</th>
                                <th>לקוח שילם</th>
                                <th>לקוח קיבל הצעה</th>
                                <th>לקוח פנה לבנק</th>
                                <th>השווה הצעה</th>
                                <!-- <th>טען הצעה</th> -->
                                <th>הצעה שלקוח טען <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>שם הבנק <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>מחק</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_data as $user)
                            <tr>
                                <td><a href="/admin/registration-hr/{{$user->id}}">{{$user->id}}</a></td>
                                <td style="white-space:nowrap; display: none;">{{date('m/d/Y', strtotime($user->created_at))}}</td>
                                <td style="white-space:nowrap;"><a href="/admin/registration-hr/{{$user->id}}">{{date('d/m/Y', strtotime($user->created_at))}}</a></td>
                                <td><a href="/admin/registration-hr/{{$user->id}}">{{$user->first_name}}</a></td>
                                <td><a href="/admin/registration-hr/{{$user->id}}">{{$user->last_name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td style="white-space:nowrap;">{{$user->phone_number}}</td>
                                <td style="white-space:nowrap; display: none;">04/22-/2019</td>
                                <td style="white-space:nowrap;">22/04/2019</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <!-- <td><a href="/admin/customer-detail/{{$user->id}}"><a href="/admin/customer-detail-hr/{{$user->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a></a></td>
                                 -->
                                <td><a href="/admin/registration-hr/{{$user->id}}"><span class="indicator i-yellow"></span></a></td>
                                <td><a href="/admin/registration-hr/{{$user->id}}"><span class="indicator i-green"></span></a></td>
                                <td><a href="/admin/registration-hr/{{$user->id}}"><span class="indicator i-green"></span></a></td>
                                <td><a href="/admin/registration-hr/{{$user->id}}"><span class="indicator i-gray"></span></a></td>
                                <td><a href="/admin/registration-hr/{{$user->id}}"><span class="indicator i-gray"></span></a></td>
                                <!-- <td><span class="indicator i-gray"></span></td> -->
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="/admin/customer-delete-hr/{{$user->id}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                             @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="indicator-pagination-wrap d-f a-i-c j-c-s-b">
                    <div class="indicator-container">
                        <ul class="d-f">
                            <li> <span class="indicator i-gray"></span> אין מידע </li>
                            <li> <span class="indicator i-yellow"></span> בתהליך </li>
                            <li> <span class="indicator i-green"></span> בוצע </li>
                            <li> <span class="indicator i-red"></span> משהו לא בסדר </li>
                        </ul>
                    </div>
                    <div class="pagination-container">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <!-- <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li><a href="javascript:void(0);">5</a></li>
                                <li>.....</li>
                                <li><a href="javascript:void(0);">38</a></li>
                                <li>/</li>
                                <li>(48 לקוחות)</li> -->
                            </ul> 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content ends here -->

    <!-- customer filters starts here -->

    <div class="customer-filters">
        <div class="d-b-date d-f a-i-c">
            <h2>מסנני לקוחות</h2>
            <form>
                <ul class="d-f a-i-f-e">
                    <li><button type="button" class="main-button button-bordered button-large click-filter">נקה את כל המסנן</button></li>
                    <li>
                        <label>זמן רישום</label>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker1" id="from-register-time" name="from-register-time" placeholder="From" readonly="readonly" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker2" id="to-register-time" name="to-register-time" placeholder="To" readonly="readonly" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <button type="submit" class="main-button button-bordered button-large show-all-dates">הצג את כל התאריכים</button>
                    </li>
                </ul>
                <ul class="d-f a-i-f-e">
                    <li>
                        <label>זמן התשלום</label>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker3" id="from-payment-time" name="from-payment-time" placeholder="From" readonly="readonly"/>
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker4" id="to-payment-time" name="to-payment-time" placeholder="To" readonly="readonly" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <button type="submit" class="main-button button-bordered button-large show-all-pay">הצג את כל התאריכים</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="d-b-selects">
            <ul class="d-f j-c-s-b">
                <li>
                    <div class="d-b-select-container s-in-progress d-f f-d-c">
                        <label>לקוח נרשם</label>
                        <select class="selectpicker">
                <option>בתהליך</option>
                <option>בתהליך-1</option>
                <option>בתהליך-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container s-done d-f f-d-c">
                        <label>לקוח שילם</label>
                        <select class="selectpicker">
                <option>הצג הכול</option>
                <option>הצג הכול-1</option>
                <option>הצג הכול-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>לקוח קיבל הצעה</label>
                        <select class="selectpicker">
                <option>ההצעות שלי</option>
                <option>ההצעות שלי-1</option>
                <option>ההצעות שלי-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>לקוח פנה לבנק</label>
                        <select class="selectpicker">
                            <option>ההצעות שלי</option>
                            <option>ההצעות שלי-1</option>
                            <option>ההצעות שלי-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>השווה הצעה</label>
                        <select class="selectpicker">
                            <option>השווה הצעה</option>
                            <option>השווה הצעה-1</option>
                            <option>השווה הצעה-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>טען הצעה</label>
                        <select class="selectpicker">
                            <option>טען הצעה</option>
                            <option>טען הצעה-1</option>
                            <option>טען הצעה-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>בנק מומלץ ע"י האלגוריתם</label>
                        <select class="selectpicker">
                            <option>בנק מומלץ ע"י האלגוריתם</option>
                            <option>בנק מומלץ ע"י האלגוריתם-1</option>
                            <option>בנק מומלץ ע"י האלגוריתם-2</option>
              </select>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@include('layouts.footer_admin_hr')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

  /*Date Filter + Data Table starts here*/
$(document).ready(function(){
    
    $('#to-register-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate', 'now');
    $('#from-register-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate','01/01/2019');
    
    $('#from-payment-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate','01/01/2019');
    $('#to-payment-time').datepicker({ format:"dd/mm/yyyy",autoclose: true}).datepicker('setDate', 'now');


    $('#customerTables').DataTable({
        language: {
                    paginate: {
                        next: '>>',
                        previous: '<<'
                    }
                },
                "bPaginate": true,
       // pagingType: "numbers",
       // searching: false,
        bInfo: false,
        "dom": 't<"pagination"p>',
    });
    
    var table = $('#customerTables').DataTable(); 
    $('#searchuser').on( 'keyup', function () {
       table.search( this.value, true, false ).draw();
    } );
     

    $('#customerTables_filter').hide();
    $('#customerTables_length').hide();
    
    $(".click-filter").on("click", function(){
      window.location.replace('/admin/dashboard-hr');
    });

  

    $(".show-all-dates").on("click", function(e){
    e.preventDefault();
      //$(this).datepicker('hide');

        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {

                 var sd = $('#from-register-time').val(),
                 endDate = $('#to-register-time').val();

                 var dateAr = sd.split('/');
                 var min = dateAr[2] + '' + dateAr[1] + '' + dateAr[0];
                 
                 var dateAr2 = endDate.split('/');
                 var max = dateAr2[2] + '' +dateAr2[1] + '' + dateAr2[0];
               
                 var startDate1 = new Date(data[1]);
                 // var startDate1 = $('#demo').val();
                 // var dateAr3 = startDate1.split('/');

                 // var startDate = dateAr3[2] + '' +dateAr3[1] + '' + dateAr3[0];
                 // if(startDate<=max && startDate>=min){
                 //     alert(1);
                 // }
                 var startDate = normalizeDate(startDate1);
                 // alert(min +'*********'+startDate+'************'+max);
                 if (min == "undefinedundefined" && max == "undefinedundefined") { return true; }
                 if (min == "undefinedundefined" && startDate <= max) { return true;}
                 if(max == "undefinedundefined" && startDate >= min) {return true;}
                 if (startDate <= max && startDate >= min) { return true; }
                 return false;
            
            }
        );


        var normalizeDate = function(dateString) {
              var date = new Date(dateString);

               var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
               //var normalized = ("0" + date.getDate()).slice(-2)+ '' +(("0" + (date.getMonth() + 1)).slice(-2))+ '' +date.getFullYear();
              // alert(normalized);
              return normalized;
        }

       
            
            var table = $('#customerTables').DataTable();

            // $('#to-register-time').change(function () {
            //     table.draw();
            // });
            // $('#from-register-time').change(function () {
            //     table.draw();
            // });
            table.draw();
        });


        /*Date filter for payment column*/
         $(".show-all-pay").on("click", function(e){
            e.preventDefault();
          //  $(this).datepicker('hide');

            $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                 var sd = $('#from-payment-time').val(),
                 endDate = $('#to-payment-time').val();

                 var dateAr = sd.split('/');
                 var min = dateAr[2] + '' + dateAr[1] + '' + dateAr[0];
                 
                 var dateAr2 = endDate.split('/');
                 var max = dateAr2[2] + '' +dateAr2[1] + '' + dateAr2[0];
               
                 var startDate1 = new Date(data[7]);
                 
                 // var startDate1 = $('#demo').val();
                 // var dateAr3 = startDate1.split('/');

                 // var startDate = dateAr3[2] + '' +dateAr3[1] + '' + dateAr3[0];
                 // if(startDate<=max && startDate>=min){
                 //     alert(1);
                 // }
                 var startDate = normalizeDate(startDate1);
                 // alert(min +'*********'+startDate+'************'+max);
                 if (min == "undefinedundefined" && max == "undefinedundefined") { return true; }
                 if (min == "undefinedundefined" && startDate <= max) { return true;}
                 if(max == "undefinedundefined" && startDate >= min) {return true;}
                 if (startDate <= max && startDate >= min) { return true; }
                 return false;
            
            }
        );
        

        var normalizeDate = function(dateString) {
              var date = new Date(dateString);

               var normalized = date.getFullYear() + '' + (("0" + (date.getMonth() + 1)).slice(-2)) + '' + ("0" + date.getDate()).slice(-2);
               //var normalized = ("0" + date.getDate()).slice(-2)+ '' +(("0" + (date.getMonth() + 1)).slice(-2))+ '' +date.getFullYear();
              // alert(normalized);
              return normalized;
        }

       
            
             var table = $('#customerTables').DataTable();
            // $('#to-payment-time').change(function () {
            //     table.draw();
            // });
            // $('#from-payment-time').change(function () {
            //     table.draw();
            // });
            table.draw();
        });

         /*Payment date filter ends here*/
});

/*Data Table and Date Filter ends here*/

</script>

