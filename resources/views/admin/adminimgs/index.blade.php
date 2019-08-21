@extends('theme.default') 
@section('content')
<!--main-container-part-->
<div id="content">
   <!--Action boxes-->
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span12">
            <br/>
            <div class="widget-box">
               @if(Session::has('flash_success'))
               <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong> {{Session :: get('flash_success')}}</strong>
               </div>
               @endif
               <div class="col-lg-12 margin-tb">
                  <section class="content-header blog_heading">
                     <h1>Admin Profile Image<small><span class="glyphicon glyphicon-star"></span></small></h1>
                  </section>
               </div>
               <div class="dashboard-table-container sub-detail">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body table-responsive p-0">
                              <table class="table table-hover">
                                 <tr>
                                    <th>Image</th>
                                    <th width="280px">Action</th>
                                 </tr>
                                 <?php $i = 0; ?>
                                 @foreach($adminimgs as $adminimg)
                                 <tr>
                                    <td><img src="{{ $adminimg->admin_img }}" width="70"></td>
                                    <td>
                                       <a href="{{ url('admin/adminimgs/edit') }}/{{$adminimg->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    </td>
                                 </tr>
                                 @endforeach
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{ $adminimgs->links() }}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection