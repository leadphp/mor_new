@extends('theme.default') @section('content')

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
    <br/>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Service Content</h3>
              </div>              


              <form method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">

                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Service Title" name="title" value="{{ $service->title }}"> @if($errors->has('title'))
                        <div class="invalid-feedback"> {{$errors->first('title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                      <div class="col-sm-12">
                          <textarea class="form-control is-invalid" id="editor" name="short_description">
                          <?= $service->short_description ?>
                          </textarea>
                          @if($errors->has('short_description'))
                          <div class="invalid-feedback"> {{$errors->first('short_description')}}</div>
                          @endif
                    </div>
                  </div>
                  <div class="box-body">
                      <div class="form-group"><br/>
                          <label for="inputEmail3" class="col-sm-2 control-label"> Image :</label>
                            <div class="col-sm-10">
                               {!! Form::file('image',['id'=>'service_img'], array('placeholder' => 'Service Image','class' => 'form-control')) !!}
                            </div>
                      </div>
                  </div>
                  <div class="box-body">
                      <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                              <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                @if(!empty($service->image))
                                <img class="service_img img-thumbnail" src="{{ URL::to($service->image) }}" >
                                @else
                                <img class="service_img img-thumbnail" src="{{ URL::to('/images/avatars/default-profile.png') }}" >
                                @endif                
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

<!-- Ck Editor for Blog Content -->
<script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('short_description');
</script>
@endsection