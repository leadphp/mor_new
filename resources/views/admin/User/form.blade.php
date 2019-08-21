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
                <h3 class="card-title">User Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <input type="hidden" name="role" value="user">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">First Name :</label>
                        <div class="col-sm-12">
                            {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Last Name :</label>
                        <div class="col-sm-12">
                            {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email :</label>
                        <div class="col-sm-12">
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Phone Number :</label>
                        <div class="col-sm-12">
                            {!! Form::text('phone_number', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
                        </div>
                  </div>
                 <!--  <div class="form-group">
                      <label for="input-24">Profile Image :</label>
                      <div class="file-loading">
                          <input id="input-24" name="profile_img" type="file">
                      </div>
                  </div> -->
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

<!-- /. Image upload -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
$("#input-24").fileinput();
$("#input-24").fileinput({'showUpload':false, 'previewFileType':'any'});
</script>


