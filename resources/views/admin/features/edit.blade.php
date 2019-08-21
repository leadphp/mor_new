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
                <h3 class="card-title">Algorithm's Feature Content</h3>
              </div>              


              <form method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">

                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter algorithm feature title" name="title" value="{{ $feature->title }}"> @if($errors->has('title'))
                        <div class="invalid-feedback"> {{$errors->first('title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                      <div class="col-sm-12">
                          <textarea class="form-control is-invalid" id="editor" name="description">
                          <?= $feature->description ?>
                          </textarea>
                          @if($errors->has('short_description'))
                          <div class="invalid-feedback"> {{$errors->first('description')}}</div>
                          @endif
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
    CKEDITOR.replace('description');
</script>
@endsection