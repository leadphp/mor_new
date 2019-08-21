 <!-- search-bar starts here -->
@include('layouts.admin_top_header')
    <div class="search-wrap">
        <div class="container-fluid">
            <div class="search-inner d-f a-i-c j-c-s-b">
                <form>
                    <div class="form-group search-container">
                        <input type="text" class="form-control" id="searchuser" name="search" value="" placeholder="Search By Name, Last Name, Mail Or Phone" />
                        <span class="input-icon"><i class="fa fa-search"></i></span> </div>
                </form>
                <div class="customer-count">
                    <ul>
                        <li>Registered Customers: <span>{{$counts}}</span></li>
                        <li>Payed Customers: <span>10</span></li>
                    </ul>
                </div>
                <div class="total-payments">
                    <h5>Total payments</h5>
                    <p>900,000 NIS</p>
                </div>
                <a href="javascript:void(0);" class="main-button-excel button-large button-green">Export to Excel<img src="{{ URL::asset('admin_new/images/icon-excel.png') }}" alt=""/></a>
                <ul class="cst-breadcrumb d-f">
                    <li><a href="javascript:void(0);">Mashkanta Online / </a></li>
                    <li>Customers</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- search-bar ends here -->

    <!-- main content starts here -->

    <div class="main-content">
        <div class="container-fluid">
            <div class="online-clerk-wrap">
                <div class="table-container online-customers-table">
                    <table id="customerTable" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>View Customer</th>
                                <th>Registration</th>
                                <th>Payed</th>
                                <th>My Offers</th>
                                <th>Bank Info</th>
                                <th>Compare Offer</th>
                                <th>Upload Offer</th>
                                <th>Customer # <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Register Time <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>First Name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Last name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Phone <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Payment time <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Price (NIS) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Download invoice <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Bank name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Download Offer <i class="fa fa-sort" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($user_data as $user)

                         
                            <tr>
                                <td><a href="/admin/customer-detail"><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>{{$user->id}}</td>
                                <td style="white-space:nowrap;">{{date('m-d-Y', strtotime($user->created_at))}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td style="white-space:nowrap;">{{$user->phone_number}}</td>
                                <td style="white-space:nowrap;">04-22-2019</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>

                            @endforeach
                            
                            <!-- <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>9</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>8</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>7</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>6</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>5</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>4</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>3</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>2</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/customer-detail"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><span class="indicator i-yellow"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-green"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td><span class="indicator i-gray"></span></td>
                                <td>1</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>Yossi</td>
                                <td>Cohen</td>
                                <td>ezhotel01@gmail.com</td>
                                <td style="white-space:nowrap;">0506-998223</td>
                                <td style="white-space:nowrap;">22-4-2019 | 15:34</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="indicator-pagination-wrap d-f a-i-c j-c-s-b">
                    <div class="indicator-container">
                        <ul class="d-f">
                            <li> <span class="indicator i-gray"></span> No Info </li>
                            <li> <span class="indicator i-yellow"></span> In Progress </li>
                            <li> <span class="indicator i-green"></span> Done </li>
                        </ul>
                    </div>
                    <div class="pagination-container">
                        <nav aria-label="Page navigation">

                           <!--   -->
                            <ul class="pagination">
                                <!-- <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li><a href="javascript:void(0);">5</a></li>
                                <li>.....</li>
                                <li><a href="javascript:void(0);">38</a></li>
                                <li>/</li>
                                <li>(48 Customers)</li> -->
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
            <h2>Customer Filters</h2>
            <form>
                <ul class="d-f a-i-f-e">
                    <li>
                        <label>Register time</label>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker1" id="from-register-time" name="from-register-time" placeholder="From" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker2" id="to-register-time" name="to-register-time" placeholder="To" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <button type="submit" class="main-button-date button-bordered button-large">Show all dates</button>
                    </li>
                </ul>
                <ul class="d-f a-i-f-e">
                    <li>
                        <label>Payment time</label>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker3" id="from-payment-time" name="from-payment-time" placeholder="From" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker4" id="to-payment-time" name="to-payment-time" placeholder="To" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <button type="submit" class="main-button-pay button-bordered button-large">Show all dates</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="d-b-selects">
            <ul class="d-f j-c-s-b">
                <li>
                    <div class="d-b-select-container s-in-progress d-f f-d-c">
                        <label>Registration</label>
                        <select class="selectpicker">
                <option>In progress</option>
                <option>In progress-1</option>
                <option>In progress-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container s-done d-f f-d-c">
                        <label>Payed</label>
                        <select class="selectpicker">
                <option>Show All</option>
                <option>Show All-1</option>
                <option>Show All-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>My offers</label>
                        <select class="selectpicker">
                <option>Show All</option>
                <option>Show All-1</option>
                <option>Show All-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>Bank info</label>
                        <select class="selectpicker">
                <option>Show All</option>
                <option>Show All-1</option>
                <option>Show All-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>Compare offer</label>
                        <select class="selectpicker">
                <option>Show All</option>
                <option>Show All-1</option>
                <option>Show All-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>Upload offer</label>
                        <select class="selectpicker">
                <option>Show All</option>
                <option>Show All-1</option>
                <option>Show All-2</option>
              </select>
                    </div>
                </li>
                <li>
                    <div class="d-b-select-container d-f f-d-c">
                        <label>Chose bank by algo</label>
                        <select class="selectpicker">
                <option>Show All</option>
                <option>Show All-1</option>
                <option>Show All-2</option>
              </select>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@include('layouts.footer_admin')
    <!-- customer filters ends here -->
<script type="text/javascript">
$(document).ready(function(){
     $('#customerTable').DataTable({
        language: {
                    paginate: {
                        next: '>>',
                        previous: '<<'
                    }
                },
                "bPaginate": true,
        //pagingType: "numbers",
       // searching: false,
        bInfo: false,
       // "dom": 't<"pagination"p>',
    });
    
    var table = $('#customerTable').DataTable(); 
    $('#searchuser').on( 'keyup', function () {
        table.search( this.value, true, false ).draw();
    } );
    

    $('#customerTable_filter').hide()
    $(".main-button-date").on("click", function(e){
    e.preventDefault();

        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                 var sd = $('#from-register-time').val(),
                 endDate = $('#to-register-time').val();

                 var dateAr = sd.split('/');
                 var min = dateAr[2] + '' + dateAr[0] + '' + dateAr[1];
                
                 var dateAr2 = endDate.split('/');
                 var max = dateAr2[2] + '' +dateAr2[0] + '' + dateAr2[1];
                
                 var startDate1 = new Date(data[8]);
                 var startDate = normalizeDate(startDate1);
                  
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
              return normalized;
        }

       
            
             var table = $('#customerTable').DataTable();
            $('#to-register-time').change(function () {
                table.draw();
            });
            $('#from-register-time').change(function () {
                table.draw();
            });
            table.draw();
        });

  });
</script>  