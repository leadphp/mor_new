@extends('theme.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br/>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Meta_tags.index') }}"><i class="fa fa-eye"></i> View All Meta Tags</a>
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
    {!! Form::open(array('route' => 'Meta_tags.store','method'=>'POST','enctype' => 'multipart/form-data')) !!}
         @include('admin.Metatags.form')
    {!! Form::close() !!}
@endsection