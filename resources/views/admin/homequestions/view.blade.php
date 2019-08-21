@extends('theme.default')
 
@section('content')

 
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <!--main-container-part-->
  <div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="{{ url('admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="{{ url('admin/homequestions') }}" class="current">Question & Answer</a>
      </div>
    </div>
    <!--Action boxes-->
    @if(Session::has('flash_success'))      
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong> {{Session :: get('flash_success')}}</strong>
      </div> 
    @endif
    <!-- Sections -->
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <!--  Add Coupon section -->
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>{{ $homequestion->question }}</h5>
            </div>
            <div class="col-md-12"> 
              <br>
              
              <p><?= $homequestion->answer ?></p>

            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
       
  
@endsection 