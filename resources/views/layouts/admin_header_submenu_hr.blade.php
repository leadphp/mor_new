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
                        <li><a href="javascript:void(0);">פעולה</a></li>
                        <li><a href="javascript:void(0);">פעולה נוספת</a></li>
                        <li><a href="javascript:void(0);">עוד משהו כאן</a></li>
                    </ul>
                </div>
                <div class="user-details d-f f-d-c"> <span>{{$data_->first_name}} {{$data_->last_name}}</span> <span>{{$data_->email}}</span> <span>{{$data_->phone_number}}</span> </div>
            </div>
            <div class="h-b-nav">
                <ul class="nav navbar-nav d-f">
                    <li class="active"><a href="{{url('admin/registration-hr/29')}}">הרשמה</a></li>
                    <li><a href="javascript:void(0);">דו"ח סופי</a></li>
                    <li><a href="{{url('admin/customer-detail-hr/29')}}">ההצעות שלי</a></li>
                    <li><a href="{{url('admin/bank-info-hr')}}">פרטי הבנק</a></li>
                    <li><a href="{{url('admin/compare-offer-hr')}}">השווה את ההצעה</a></li>
                    <li><a href="{{url('admin/report1-hr')}}">דו"ח 1</a></li>
                    <li><a href="{{url('admin/report2-hr')}}">דו"ח 2</a></li>
                </ul>
            </div>
            <div class="h-b-buttons d-f j-c-s-b"> <a href="javascript:void(0);" class="main-button button-red">אפשר ללקוח לערוך רישום עוד פעם אחת</a> <a href="javascript:void(0);" class="main-button button-green">עריכת רישום באתר</a> <a href="javascript:void(0);" class="main-button button-orange">חישוב אלגוריתם מחדש</a>                </div>
            <div class="offer-status-container d-f a-i-c">
                <div class="offer-text">סטטוס האם קיבל הצעה: </div>
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
                        <li><a href="javascript:void(0);">פעולה</a></li>
                        <li><a href="javascript:void(0);">פעולה נוספת</a></li>
                        <li><a href="javascript:void(0);">עוד משהו כאן</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
<style type="text/css">
 .offer-status-container .user-img-orange {
    width: 20px;
    height: 20px;
    background-color: #e69753;
    border-color: #e69753;
    border-radius: 50%;
}
.offer-status-container .user-img-grey {
    width: 20px;
    height: 20px;
    background-color: #a0aba4;
    border-color: #a0aba4;
    border-radius: 50%;
}
</style>
        @endforeach