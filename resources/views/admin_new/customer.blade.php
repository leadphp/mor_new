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
    @foreach ($user_data as $user)
<input type="hidden" name="demo" id="demo" value="{{date('d/m/Y', strtotime($user->created_at))}}">
   @endforeach
    <!-- main content starts here -->

    <div class="main-content">
        <div class="container-fluid">
            <div class="online-clerk-wrap">
                <div class="table-container online-customers-table" id="customer-table-append">
                    <table id="customerTable" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Customer # <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th style="display: none;">Register Time <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Register Time <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>First Name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Last name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Mail <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Phone <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th style="display: none;">Payment time <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Payment time <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Price (NIS) <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Download invoice <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Registration</th>
                                <th>Payed</th>
                                <th>My Offers</th>
                                <th>Bank Info</th>
                                <th>Compare Offer</th>
                               
                                <th>Download Offer <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Bank name <i class="fa fa-sort" aria-hidden="true"></i></th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody class="data-app">
                            @php 
                                $counter = 0;
                            @endphp
                            @foreach ($user_data as $user)
                          
                                @php $classs = $class[$counter]; @endphp


                            <tr>
                                <td><a href="/admin/registration/{{$user->id}}">{{$user->id}}</a></td>
                                <td style="white-space:nowrap; display: none;">{{date('m/d/Y', strtotime($user->created_at))}}</td>
                                <td style="white-space:nowrap;"><a href="/admin/registration/{{$user->id}}">{{date('d/m/Y', strtotime($user->created_at))}}</a></td>
                                <td><a href="/admin/registration/{{$user->id}}">{{$user->first_name}}</a></td>
                                <td><a href="/admin/registration/{{$user->id}}">{{$user->last_name}}</a></td>
                                <td class="remove_capital_letter">{{$user->email}}</td>
                                <td style="white-space:nowrap;">{{$user->phone_number}}</td>
                                <td style="white-space:nowrap; display: none;">04/22-/2019</td>
                                <td style="white-space:nowrap;">22/04/2019</td>
                                <td>700</td>
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td><a href="/admin/registration/{{$user->id}}"><span class="indicator i-{{$classs}}"></span></a></td>
                                <td><a href="/admin/registration/{{$user->id}}"><span class="indicator i-green"></span></a></td>
                                <td><a href="/admin/registration/{{$user->id}}"><span class="indicator i-gray"></span></a></td>
                                <td><a href="/admin/registration/{{$user->id}}"><span class="indicator i-gray"></span></a></td>
                                <td><a href="/admin/registration/{{$user->id}}"><span class="indicator i-gray"></span></a></td>
                                <!-- <td><a href="/admin/registration/{{$user->id}}"><a href="/admin/registration/{{$user->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a></a></td> -->
                              
                                
                                
                                <!-- <td><span class="indicator i-gray"></span></td> -->
                                
                                
                                <td><a href="javascript:void(0);"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                <td>AA-HH</td>
                                <td><a href="/admin/customer-delete/{{$user->id}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                            @php
                                $counter++;
                            @endphp
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
                            <li> <span class="indicator i-red"></span> Algo Error </li>
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
                        <button type="button" class="main-button-reset button-bordered button-large">Clear All Filters</button>
                    </li>
                    <li>
                        <label>Register time</label>
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
                        <button type="submit" class="main-button-date button-bordered button-large">Show Dates</button>
                    </li>
                </ul>
                <ul class="d-f a-i-f-e">
                    <li>
                        <label>Payment time</label>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker3" id="from-payment-time" name="from-payment-time" placeholder="From" readonly="readonly" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <div class="form-group datepicker-container">
                            <input type="text" class="datepicker4" id="to-payment-time" name="to-payment-time" placeholder="To" readonly="readonly" />
                            <img src="{{ URL::asset('admin_new/images/icon-calendar.png') }}" alt="" /> </div>
                    </li>
                    <li>
                        <button type="submit" class="main-button-pay button-bordered button-large">Show Dates</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="d-b-selects">
            <ul class="d-f j-c-s-b">
                <li>
                    <div class="d-b-select-container s-in-progress d-f f-d-c">
                        <label>Registration</label>
                        <select class="selectpicker" name="status_check">
                <option value="show all">Show All</option>
                <option value="in progress">In Progress</option>
                <option value="completed">Completed</option>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>


