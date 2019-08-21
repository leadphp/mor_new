
<link rel="stylesheet" href="{{ URL::asset('admin/css/adminlte.min.css') }}">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Mortgage Calculator</a>
  </div>

  <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        
        <form action="{{ url('login') }}" method="post">
          {{ csrf_field() }}

          <div class="form-group label-floating is-empty"><label class="control-label">Email</label><input type="text" class="form-control " name="email" value="" id="email"><span class="material-input"></span><label for="email" class="error">&nbsp;</label></div>

          <div class="form-group label-floating is-empty"><label class="control-label">Password</label><input type="password" class="form-control " name="password" value="" id="password"><span class="material-input"></span><label class="error" for="password">&nbsp;</label></div>
          
          <div class="row">
            <div class="col-md-12">
           
            <!-- /.col -->
            
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            
          </div>
                <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                        Forgot Your Password?
                </a>
          <!-- /.col -->
          </div>
        </form>
   
        <!-- /.social-auth-links -->
   
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>