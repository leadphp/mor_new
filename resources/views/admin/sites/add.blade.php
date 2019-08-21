@extends('theme.default') 
@section('content')


<div class="row">
  <div class="col-lg-12 margin-tb">
      <br/>
      <div class="pull-left">
          <section class="content-header">
             <h1>Site Content<small><span class="glyphicon glyphicon-star"></span></small></h1>
          </section>
      </div>
  </div>
</div>

<!--main-container-part-->
<div id="content">
    <!--Action boxes-->
    @if(Session::has('flash_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong> {{Session :: get('flash_success')}}</strong>
    </div>
    @endif

    <form method="POST" action="{{ url('admin/sites/add')}}" class="form-horizontal" enctype="multipart/form-data" role="form">

    {{ csrf_field() }}

    <!-- ************************************
    |
    | Website Logo 
    |
    |**************************************** -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Website Logo</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>            
              </div>

                <div class="card-body">
                  <div class="box-body">
                      <div class="form-group"><br/>
                          <label for="inputEmail3" class="col-sm-2 control-label">Logo :</label>
                          <div class="col-sm-10">
                             {!! Form::file('image',['id'=>'site_logo'], array('placeholder' => 'Testimonial Image','class' => 'form-control')) !!}
                          </div>
                      </div>
                  </div>
                  <div class="box-body">
                      <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                              @if(!empty($sites->image))
                                <img class="site_logo img-thumbnail" src="{{ URL::to($sites->image) }}" >
                                @else
                                <img class="site_logo img-thumbnail" src="{{ URL::to('/images/avatars/default-profile.png') }}" >
                                @endif                
                          </div>
                      </div>
                  </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <br/>

    <!-- ************************************
    |
    | Copyright
    |
    |**************************************** -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Copyright Content</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div> 
              </div>            

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Text :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Copyright Text" name="copyright_text" value="{{ $sites[1]['value'] }}"> @if($errors->has('copyright_text'))
                        <div class="invalid-feedback"> {{$errors->first('copyright_text')}}</div>
                        @endif
                    </div>
                  </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary category_button">Submit</button>
    </div> 

  </form>

</div>
</div>
</div>

@endsection