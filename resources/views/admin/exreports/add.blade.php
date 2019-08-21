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
    <br/>
    <!-- Sections -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Example Report Details</h3>
              </div>            


              <form method="POST" action="{{ url('admin/exreports/add')}}" class="form-horizontal" enctype="multipart/form-data" role="form">

                {{ csrf_field() }}
                <div class="card-body">
                  <div class="box-body">
                      <div class="form-group"><br/>
                                <label for="inputEmail3" class="col-sm-2 control-label">Example Report PDF :</label>
                                <div class="col-sm-10">
                                   {!! Form::file('pdf',['id'=>'pdf'], array('placeholder' => 'Upload PDF','class' => 'form-control')) !!}
                                </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary category_button">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>
</div>
</div>
</div>

@endsection