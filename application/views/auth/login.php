<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?=base_url('login')?>" method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
				<div>
					<button type="submit" class="btn btn-primary btn-block">Login</button>
					<button type="submit" class="btn btn-success btn-block">Lihat Katalog</button>
				</div>      
      </form>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
