@extends('theme.default')
 
@section('content')

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <br/>
            <div class="pull-left">
                <section class="content-header">
                   <h1>Questions<small><span class="glyphicon glyphicon-star"></span></small></h1>
                </section>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-plus" href="{{ route('Questions.create') }}"> Add Question</a>
            </div>
        </div>
    </div>
    <br/> 
    @if(Session::has('flash_success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong> {{Session :: get('flash_success')}}</strong>
      </div>
    @endif
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>No</th>
                    <th>Question</th>
                    <th width="280px">Action</th>
                  </tr>
                  <?php $i = 0; ?>
                      @foreach ($questions as $question)
                      <tr>
                          <td>{{ ++$i }}</td>
                          <td>{!! Str::words($question->question, 20,'....') !!}</td>
                          <td>
                              <a class="btn btn-primary fa fa-pencil" href="{{ route('Questions.edit',$question->id) }}"></a>
                              {!! Form::open(['method' => 'POST','route' => ['Questions.destroy'],'style'=>'display:inline']) !!}
                              {!! Form::hidden('id', $question->id , array( 'placeholder' => 'Id','class' => 'form-control')) !!}
                              {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger delete_trash'] )  }}
                              {!! Form::close() !!}
                          </td>
                      </tr>
                      @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
    {!! $questions->render() !!}

@endsection