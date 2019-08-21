@extends('theme.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Social Icon Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Meta_tags.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Social Icon:</strong>
                {{ $socialicons->icon_class}}<br/>
                <strong>Social Link:</strong>
                {{ $socialicons->icon_link}}
            </div>
        </div>
    </div>
@endsection