@extends('theme.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br/>
            <!-- Content Wrapper. Contains page content -->
              <div class="">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item active"><a href="{{ route('Coupons.index') }}">View</a></li>
                        </ol>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>

              </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($coupons, ['method' => 'POST','route' => ['Coupons.update', $coupons->id],'enctype' => 'multipart/form-data']) !!}
    {!! Form::hidden('id', null, array('placeholder' => 'Id','class' => 'form-control')) !!}
        @include('admin.Coupons.form')
    {!! Form::close() !!}
@endsection