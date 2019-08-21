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
                          <li class="breadcrumb-item active"><a href="{{ route('User.index') }}">View</a></li>
                        </ol>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>

              </div>
        </div>
    </div>
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
    {!! Form::model($user, ['method' => 'POST','route' => ['User.update', $user->id],'enctype' => 'multipart/form-data']) !!}
        @include('admin.User.form')
    {!! Form::close() !!}
@endsection