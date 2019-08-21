@extends('theme.default') 

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <br/>
      <div class="pull-left">
          <section class="content-header">
             <h1>Home Page Content<small><span class="glyphicon glyphicon-star"></span></small></h1>
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

    <form method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">

    {{ csrf_field() }}

    <!-- ************************************
    |
    | Banner Sections
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
                <h3 class="card-title">Banner - Section</h3>
              </div>              

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="banner_title" value="{{ $common->banner_title }}"> @if($errors->has('banner_title'))
                        <div class="invalid-feedback"> {{$errors->first('banner_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="banner_subtitle" value="{{ $common->banner_subtitle }}"> @if($errors->has('banner_subtitle'))
                        <div class="invalid-feedback"> {{$errors->first('banner_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="banner_btn_text1" value="{{ $common->banner_btn_text1 }}"> @if($errors->has('banner_btn_text1'))
                              <div class="invalid-feedback"> {{$errors->first('banner_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="banner_btn_link1" value="{{ $common->banner_btn_link1 }}"> @if($errors->has('banner_btn_link1'))
                              <div class="invalid-feedback"> {{$errors->first('banner_btn_link1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="banner_btn_text2" value="{{ $common->banner_btn_text2 }}"> @if($errors->has('banner_btn_text2'))
                              <div class="invalid-feedback"> {{$errors->first('banner_btn_text2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="banner_btn_link2" value="{{ $common->banner_btn_link2 }}"> @if($errors->has('banner_btn_link2'))
                              <div class="invalid-feedback"> {{$errors->first('banner_btn_link2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ************************************
    |
    | Purchase Sections
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
                <h3 class="card-title">Purchase - Section</h3>
              </div>              

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="purchase_title" value="{{ $common->purchase_title }}"> @if($errors->has('purchase_title'))
                        <div class="invalid-feedback"> {{$errors->first('purchase_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="purchase_subtitle" value="{{ $common->purchase_subtitle }}"> @if($errors->has('purchase_subtitle'))
                        <div class="invalid-feedback"> {{$errors->first('purchase_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="pur_btn_text1" value="{{ $common->pur_btn_text1 }}"> @if($errors->has('pur_btn_text1'))
                              <div class="invalid-feedback"> {{$errors->first('pur_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="pur_btn_link1" value="{{ $common->pur_btn_link1 }}"> @if($errors->has('pur_btn_link1'))
                              <div class="invalid-feedback"> {{$errors->first('pur_btn_link1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="pur_btn_text2" value="{{ $common->pur_btn_text2 }}"> @if($errors->has('pur_btn_text2'))
                              <div class="invalid-feedback"> {{$errors->first('pur_btn_text2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="pur_btn_link2" value="{{ $common->pur_btn_link2 }}"> @if($errors->has('pur_btn_link2'))
                              <div class="invalid-feedback"> {{$errors->first('pur_btn_link2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ************************************
    |
    | Sample Mortgage Report - Sections
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
                <h3 class="card-title">Sample Mortgage Report - Sections</h3>
              </div>              

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="report_title" value="{{ $common->report_title }}"> @if($errors->has('report_title'))
                        <div class="invalid-feedback"> {{$errors->first('report_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="saving_subtitle" value="{{ $common->saving_subtitle }}"> @if($errors->has('saving_subtitle'))
                        <div class="invalid-feedback"> {{$errors->first('saving_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                      <div class="col-sm-12">
                          <textarea class="form-control is-invalid" id="editor" name="description">
                          <?= $common->description ?>
                          </textarea>
                          @if($errors->has('description'))
                          <div class="invalid-feedback"> {{$errors->first('description')}}</div>
                          @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="pur_btn_text1" value="{{ $common->pur_btn_text1 }}"> @if($errors->has('pur_btn_text1'))
                              <div class="invalid-feedback"> {{$errors->first('pur_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="pur_btn_link1" value="{{ $common->pur_btn_link1 }}"> @if($errors->has('pur_btn_link1'))
                              <div class="invalid-feedback"> {{$errors->first('pur_btn_link1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    </div>
                    <div class="box-body">
                      <div class="form-group"><br/>
                          <label for="inputEmail3" class="col-sm-2 control-label">Image :</label>
                            <div class="col-sm-10">
                               {!! Form::file('image',['id'=>'report_img'], array('placeholder' => 'Testimonial Image','class' => 'form-control')) !!}
                            </div>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                              <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                @if(!empty($testimonial->image))
                                <img class="report_img img-thumbnail" src="{{ URL::to($common->image) }}" >
                                @else
                                <img class="report_img img-thumbnail" src="{{ URL::to('/images/avatars/default-profile.png') }}" >
                                @endif                
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ************************************
    |
    | How Much you can save - Sections
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
                <h3 class="card-title">How much you can save - Section</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div> 
              </div>            

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="saving_title" value="{{ $common->saving_title }}"> @if($errors->has('saving_title'))
                        <div class="invalid-feedback"> {{$errors->first('saving_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="saving_subtitle" value="{{ $common->saving_subtitle }}"> @if($errors->has('saving_subtitle'))
                        <div class="invalid-feedback"> {{$errors->first('saving_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="saving_btn_text1" value="{{ $common->saving_btn_text1 }}"> @if($errors->has('saving_btn_text1'))
                              <div class="invalid-feedback"> {{$errors->first('saving_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="saving_btn_link1" value="{{ $common->saving_btn_link1 }}"> @if($errors->has('saving_btn_link1'))
                              <div class="invalid-feedback"> {{$errors->first('saving_btn_link1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="saving_btn_text2" value="{{ $common->saving_btn_text2 }}"> @if($errors->has('saving_btn_text2'))
                              <div class="invalid-feedback"> {{$errors->first('saving_btn_text2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="saving_btn_link2" value="{{ $common->saving_btn_link2 }}"> @if($errors->has('saving_btn_link2'))
                              <div class="invalid-feedback"> {{$errors->first('saving_btn_link2')}}</div>
                              @endif
                          </div>
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
    | About Granting Mortgages - Sections
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
                <h3 class="card-title">About granting mortgages - Section</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div> 
              </div>            

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="saving_title" value="{{ $common->saving_title }}"> @if($errors->has('saving_title'))
                        <div class="invalid-feedback"> {{$errors->first('saving_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                      <div class="col-sm-12">
                          <textarea class="form-control is-invalid" name="short_description">
                              <?= old('short_description')?>
                          </textarea>

                          @if($errors->has('short_description'))
                          <div class="error-msg"> {{$errors->first('short_description')}}</div>
                          @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter Title" name="grant_btn_text1" value="{{ $common->grant_btn_text1 }}"> @if($errors->has('grant_btn_text1'))
                              <div class="invalid-feedback"> {{$errors->first('grant_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter Title" name="grant_btn_link1" value="{{ $common->grant_btn_link1 }}"> @if($errors->has('grant_btn_link1'))
                              <div class="invalid-feedback"> {{$errors->first('grant_btn_link1')}}</div>
                              @endif
                          </div>
                      </div>
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

<!-- Ck Editor for Blog Content -->
<script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('short_description');
</script>
@endsection