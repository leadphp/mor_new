@extends('theme.default')
 
@section('content')

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <br/>
            <div class="pull-left">
                <section class="content-header">
                   <h1>Organization Logos<small><span class="glyphicon glyphicon-star"></span></small></h1>
                </section>
            </div>
            <div class="pull-right">
                 <a class="btn btn-primary fa fa-plus" href="{{ url('admin/logos/add') }}"> Add New</a>
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
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                  <?php $i = 0; ?>
                      @foreach ($logos as $user)
                      <tr>
                          <td>{{ ++$i }}</td>
                          <td><img class="testi_img" src="{{ $user->image }}" width="70" height="70"></td>
                          <td>{{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                          <td>
                              <a href="{{ url('admin/logos/edit') }}/{{$user->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                              <a href="{{ url('admin/logos/del') }}/{{$user->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
    {!! $logos->render() !!}

@endsection