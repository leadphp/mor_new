@extends('theme.default')
 
@section('content')

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <br/>
            <div class="pull-left">
                <section class="content-header">
                   <h1>Coupons<small><span class="glyphicon glyphicon-star"></span></small></h1>
                </section>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-plus" href="{{ route('Coupons.create') }}"> Add Coupon</a>
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
                    <th>Coupon Code</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th width="280px">Action</th>
                  </tr>
                  <?php $i = 0; ?>
                      @foreach ($coupons as $coupon)
                      <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $coupon->coupon_code }}</td>
                          <td>{{ $coupon->type }}</td>
                          <td>{!! Str::words($coupon->description, 20,'....') !!}</td>
                          <td>{{ $coupon->amount }}</td>
                          <td>
                              <a class="btn btn-primary fa fa-pencil" href="{{ route('Coupons.edit',$coupon->id) }}"></a>
                              {!! Form::open(['method' => 'POST','route' => ['Coupons.destroy'],'style'=>'display:inline']) !!}
                              {!! Form::hidden('id', $coupon->id , array( 'placeholder' => 'Id','class' => 'form-control')) !!}
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
    {!! $coupons->render() !!}

@endsection