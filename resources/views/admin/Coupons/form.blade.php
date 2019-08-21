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
                <h3 class="card-title">Add Coupon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Coupon Code :</label>
                          <div class="col-sm-12">
                             {!! Form::text('coupon_code', null, array('placeholder' => 'Coupon Code','class' => 'form-control')) !!}
                          </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Type :</label>
                          <div class="col-sm-12">
                             {!! Form::text('type', null, array('placeholder' => 'Type','class' => 'form-control')) !!}
                          </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                          <div class="col-sm-12">
                             {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                          </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Amount :</label>
                          <div class="col-sm-12">
                             {!! Form::text('amount', null, array('placeholder' => 'Amount','class' => 'form-control')) !!}
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



