@extends('theme.default')
 
@section('content')

     <div class="row">
        <div class="col-lg-12 margin-tb">
          <br/>
            <div class="pull-left">
                <section class="content-header">
                   <h1>Users<small><span class="glyphicon glyphicon-star"></span></small></h1>
                </section>
            </div>
            <!-- <div class="pull-right">
                <a class="btn btn-primary fa fa-plus" href="{{ route('User.create') }}"> Add User</a>
            </div> -->
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
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th width="120px">Action</th>
                  </tr>
                  @foreach ($users as $user)
                  <?php $status = $user->status; ?>
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $user->first_name}}</td>
                      <td>{{ $user->last_name}}</td>
                      <td>{{ $user->email}}</td>
                      <td>{{ $user->phone_number }}</td>
                      <td>
                          <a class="btn btn-primary fa fa-pencil" href="{{ route('User.edit',$user->id) }}"></a>
                          {!! Form::open(['method' => 'POST','route' => ['User.destroy'],'style'=>'display:inline']) !!}
                          {!! Form::hidden('id', $user->id , array( 'placeholder' => 'Id','class' => 'form-control')) !!}
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
    {!! $users->render() !!}

@endsection