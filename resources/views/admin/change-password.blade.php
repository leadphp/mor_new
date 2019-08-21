@include('theme.default')

@section('content')

<div class="row">
{!! Form::hidden('id', null, array('placeholder' => 'Id','class' => 'form-control')) !!}

  <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Old Password :</label>
                          <div class="col-sm-12">
                             {!! Form::text('old_password', null, array('placeholder' => 'Coupon Code','class' => 'form-control')) !!}
                          </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">New Password  :</label>
                          <div class="col-sm-12">
                             {!! Form::text('new_password', null, array('placeholder' => 'New password','class' => 'form-control')) !!}
                          </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password :</label>
                          <div class="col-sm-12">
                             {!! Form::text('confirm_password', null, array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                          </div>
                  </div>
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
@endsection
