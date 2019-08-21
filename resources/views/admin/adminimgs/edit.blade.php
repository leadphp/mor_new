@extends('theme.default') 
@section('content')

<!--main-container-part-->
<div id="content">
    <!--Action boxes-->
    @if(Session::has('flash_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong> {{Session :: get('flash_success')}}</strong>
    </div>
    @endif
    <!-- Sections -->
  <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>
            <br/>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profile Image Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form method="POST" role="form" class="form-horizontal" enctype="multipart/form-data">
               {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Profile Image :</label>
                        <div class="col-sm-10">
                           {!! Form::file('admin_img',['id'=>'admin_img'], array('placeholder' => 'Profile Image','class' => 'form-control')) !!}
                        </div>
                  </div>
                  <div class="form-group">
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                            @if(!empty($adminimg->admin_img))
                                <img class="profile_banner_preiew img-thumbnail" src="{{ URL::to($adminimg->admin_img) }}" >
                            @else
                                <img class="profile_banner_preiew img-thumbnail" src="{{ URL::to('/images/avatars/default-profile.png') }}" >
                            @endif
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
</div>
</div>

@endsection