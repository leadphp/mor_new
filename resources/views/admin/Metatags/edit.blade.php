@extends('theme.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                 <h3>Meta Tags <small><span class="glyphicon glyphicon-star"></span></small></h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Meta_tags.index') }}"> Back</a>
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
    {!! Form::model($MetaTags, ['method' => 'POST','route' => ['Meta_tags.update'],'enctype' => 'multipart/form-data']) !!}
        @include('admin.Metatags.form')
    {!! Form::close() !!}
@endsection