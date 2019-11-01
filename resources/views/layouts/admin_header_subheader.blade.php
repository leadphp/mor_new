@foreach($data as $data_)
<header>
        <div class="header-bottom d-f a-i-c j-c-c">
            <div class="user-profile d-f">
                <div class="user-name">
                    <a href="javascript:void(0);" class="dropdown-toggle d-f a-i-c" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="user-img">
                            <div> <i class="fa fa-user"></i> </div>
                        </div>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);">Action</a></li>
                        <li><a href="javascript:void(0);">Another action</a></li>
                        <li><a href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </div>
                <div class="user-details d-f f-d-c"> <span>{{$data_->first_name}} {{$data_->last_name}}</span> <span>{{$data_->email}}</span> <span>{{$data_->phone_number}}</span> </div>
            </div>
            <div class="h-b-nav">
                <ul class="nav navbar-nav">
                    <li class="{{(\Request::route()->getName()=='admin_registration')?'active':''}}" ><a href="/admin/registration/{{$data_->id}}">Registration</a></li>
                     <li class="{{(\Request::route()->getName()=='forntend_report')?'active':''}}" ><a href="/report/{{$data_->id}}">final report</a></li>
                     <li class="{{(\Request::route()->getName()=='admin.customer.details')?'active':''}}" ><a href="/admin/customer-detail/{{$data_->id}}">My offers</a></li>
                    <li class="{{(\Request::route()->getName()=='bank_info')?'active':''}}" ><a href="/admin/bank-info/{{$data_->id}}">Bank info</a></li>
                    
                    <li class="{{(\Request::route()->getName()=='compare_offers')?'active':''}}" ><a href="/admin/compare-offers/{{$data_->id}}">Compare offer</a></li>
                    <li class="{{(\Request::route()->getName()=='report1')?'active':''}}" ><a href="/admin/report1/{{$data_->id}}">report 1</a></li>
                    <li class="{{(\Request::route()->getName()=='report2')?'active':''}}" ><a href="/admin/report2/{{$data_->id}}">report 2</a></li>
                   
                </ul>
            </div>
            <div class="h-b-buttons d-f j-c-s-b"> <a href="javascript:void(0);" class="main-button button-red">Allow Customer To Edit Registration One More Time</a> <a href="{{url('/questions_flow')}}" target="_blank" class="main-button button-green">Edit Registration On Site</a> <a href="javascript:void(0);" class=" cal-full-algo main-button button-orange">Calculate Full -Algo Again</a>                </div>
            <div class="offer-status-container d-f a-i-c">
                <div class="offer-text"> Registration Status: 
                 </div>
                <div class="offer-status-dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle d-f a-i-c" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php 
                if($ques == 0){
                    echo "<div class=user-img-grey> </div>";
                }
                elseif ($ques >0 && $ques <=14) {
                    echo "<div class=user-img-orange> </div>";
                    
                }
                else {
                    echo "<div class=user-img> </div>";
                }
                ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);">Action</a></li>
                        <li><a href="javascript:void(0);">Another action</a></li>
                        <li><a href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @endforeach

    <!-- header ends here -->

    