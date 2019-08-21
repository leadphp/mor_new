@extends('theme.default')
 
@section('content')

<br/>
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <section class="content-header">
               <h1>Meta Tags<small><span class="glyphicon glyphicon-star"></span></small></h1>
            </section>
        </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Meta_tags.create') }}"><i class="fa fa-plus"></i> Add Meta Tags</a>
            </div>
        </div>
    </div>
    <br/>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                      <th>Slug</th>
                      <th>Meta Title</th>
                      <th>Meta Keywords</th>
                      <th>Meta Descriptions</th>
                      <th width="280px">Action</th>
                  </tr>
                  @foreach ($MetaTags as $k => $Metatag)
                  <?php //print_r($user->id); ?>
                  <tr>
                      
                      <td>{{ $Metatag->slug }}</td>
                      <td>{{ $Metatag->meta_title }}</td>
                      <td>{{ $Metatag->meta_keywords }}</td>
                      <td>{{ $Metatag->meta_descriptions }}</td>
                      <td>
                          <a class="btn btn-primary fa fa-pencil" href="{{ route('Meta_tags.edit',$Metatag->id) }}"></a>
                          {!! Form::open(['method' => 'POST','route' => ['Meta_tags.destroy'],'style'=>'display:inline']) !!}
                          {!! Form::hidden('id', $Metatag->id , array( 'placeholder' => 'Id','class' => 'form-control')) !!}
                          {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                          {!! Form::close() !!}
                      </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
    {!! $MetaTags->render() !!}

@endsection