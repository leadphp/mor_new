@extends('theme.default') 
@section('content')

<?php //echo "<pre>"; print_r($common); die; ?>
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

    <form method="POST" action="{{ url('admin/commons/add')}}" class="form-horizontal" enctype="multipart/form-data" role="form">

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
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>            
              </div>

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="banner_title" value="{{ $common[27]['value'] }}"> @if($errors->has('banner_title'))
                        <div class="error-msg"> {{$errors->first('banner_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="banner_subtitle" value="{{ $common[26]['value'] }}"> @if($errors->has('banner_subtitle'))
                        <div class="error-msg"> {{$errors->first('banner_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="banner_btn_text1" value="{{ $common[25]['value'] }}"> @if($errors->has('banner_btn_text1'))
                              <div class="error-msg"> {{$errors->first('banner_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="banner_btn_link1" value="{{ $common[24]['value'] }}"> @if($errors->has('banner_btn_link1'))
                              <div class="error-msg"> {{$errors->first('banner_btn_link1')}}</div>
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
                              <input type="text" class="span form-control" placeholder="Enter button text" name="banner_btn_text2" value="{{ $common[23]['value'] }}"> @if($errors->has('banner_btn_text2'))
                              <div class="error-msg"> {{$errors->first('banner_btn_text2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="banner_btn_link2" value="{{ $common[22]['value'] }}"> @if($errors->has('banner_btn_link2'))
                              <div class="error-msg"> {{$errors->first('banner_btn_link2')}}</div>
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
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div> 
              </div>            

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="purchase_title" value="{{ $common[21]['value'] }}"> @if($errors->has('purchase_title'))
                        <div class="error-msg"> {{$errors->first('purchase_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="purchase_subtitle" value="{{ $common[20]['value'] }}"> @if($errors->has('purchase_subtitle'))
                        <div class="error-msg"> {{$errors->first('purchase_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="pur_btn_text1" value="{{ $common[19]['value'] }}"> @if($errors->has('pur_btn_text1'))
                              <div class="error-msg"> {{$errors->first('pur_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="pur_btn_link1" value="{{ $common[18]['value'] }}"> @if($errors->has('pur_btn_link1'))
                              <div class="error-msg"> {{$errors->first('pur_btn_link1')}}</div>
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
                              <input type="text" class="span form-control" placeholder="Enter button Text" name="pur_btn_text2" value="{{ $common[17]['value'] }}"> @if($errors->has('pur_btn_text2'))
                              <div class="error-msg"> {{$errors->first('pur_btn_text2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="pur_btn_link2" value="{{ $common[16]['value'] }}"> @if($errors->has('pur_btn_link2'))
                              <div class="error-msg"> {{$errors->first('pur_btn_link2')}}</div>
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
                <h3 class="card-title">Sample Mortgage Report - Section</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div> 
              </div>            

                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Title" name="report_title" value="{{ $common[15]['value'] }}"> @if($errors->has('report_title'))
                        <div class="error-msg"> {{$errors->first('report_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="report_subtitle" value="{{ $common[14]['value'] }}"> @if($errors->has('report_subtitle'))
                        <div class="error-msg"> {{$errors->first('report_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                      <div class="col-sm-12">
                          <textarea class="form-control is-invalid" name="description">
                              <?=  $common[13]['value']  ?>
                          </textarea>

                          @if($errors->has('description'))
                          <div class="error-msg"> {{$errors->first('description')}}</div>
                          @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="report_btn_text1" value="{{ $common[12]['value'] }}"> @if($errors->has('report_btn_text1'))
                              <div class="error-msg"> {{$errors->first('report_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="report_btn_link1" value="{{ $common[11]['value'] }}"> @if($errors->has('report_btn_link1'))
                              <div class="error-msg"> {{$errors->first('report_btn_link1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-body">
                      <div class="form-group"><br/>
                          <label for="inputEmail3" class="col-sm-2 control-label">Report Image :</label>
                          <div class="col-sm-10">
                             {!! Form::file('image',['id'=>'report_img'], array('placeholder' => 'Testimonial Image','class' => 'form-control')) !!}
                          </div>
                      </div>
                  </div>
                  <div class="box-body">
                      <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                              @if(!empty($testimonial->image))
                                <img class="report_img img-thumbnail" src="{{ URL::to($common->image) }}" >
                                @else
                                <img class="report_img img-thumbnail" src="{{ URL::to('/images/avatars/default-profile.png') }}" >
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
                        <input type="text" class="span form-control" placeholder="Enter Title" name="saving_title" value="{{ $common[10]['value'] }}"> @if($errors->has('saving_title'))
                        <div class="error-msg"> {{$errors->first('saving_title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Subtitle :</label>
                      <div class="col-sm-12">
                        <input type="text" class="span form-control" placeholder="Enter Subtitle" name="saving_subtitle" value="{{ $common[9]['value'] }}"> @if($errors->has('saving_subtitle'))
                        <div class="error-msg"> {{$errors->first('saving_subtitle')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Text :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button text" name="saving_btn_text1" value="{{ $common[8]['value'] }}"> @if($errors->has('saving_btn_text1'))
                              <div class="error-msg"> {{$errors->first('saving_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-1 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="saving_btn_link1" value="{{ $common[7]['value'] }}"> @if($errors->has('saving_btn_link1'))
                              <div class="error-msg"> {{$errors->first('saving_btn_link1')}}</div>
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
                              <input type="text" class="span form-control" placeholder="Enter button text" name="saving_btn_text2" value="{{ $common[6]['value'] }}"> @if($errors->has('saving_btn_text2'))
                              <div class="error-msg"> {{$errors->first('saving_btn_text2')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button-2 Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="saving_btn_link2" value="{{ $common[5]['value'] }}"> @if($errors->has('saving_btn_link2'))
                              <div class="error-msg"> {{$errors->first('saving_btn_link2')}}</div>
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
                        <input type="text" class="span form-control" placeholder="Enter Title" name="title" value="{{ $common[4]['value'] }}"> @if($errors->has('grant_title'))
                        <div class="error-msg"> {{$errors->first('title')}}</div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description :</label>
                      <div class="col-sm-12">
                          <textarea class="form-control is-invalid" name="short_description">
                              <?= $common[3]['value']  ?>
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
                              <input type="text" class="span form-control" placeholder="Enter button text" name="grant_btn_text1" value="{{ $common[2]['value'] }}"> @if($errors->has('grant_btn_text1'))
                              <div class="error-msg"> {{$errors->first('grant_btn_text1')}}</div>
                              @endif
                          </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Button Link :</label>
                            <div class="col-sm-12">
                              <input type="text" class="span form-control" placeholder="Enter button link" name="grant_btn_link1" value="{{ $common[1]['value'] }}"> @if($errors->has('grant_btn_link1'))
                              <div class="error-msg"> {{$errors->first('grant_btn_link1')}}</div>
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
</div>
<!-- Ck Editor for Blog Content -->
<script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('short_description');
</script>
@endsection