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
                <h3 class="card-title">Add Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <input type="hidden" name="role" value="user">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Question :</label>
                          <div class="col-sm-12">
                             {!! Form::textarea('question', null, array('placeholder' => 'Question','class' => 'form-control')) !!}
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



