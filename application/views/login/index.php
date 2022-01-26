<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <img src="<?php echo base_url('assets/img/login.jpg'); ?>" height= "500px" width="400px">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="<?php echo site_url('C_login/login/');?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                    </div>
                     <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <!-- <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo site_url('c_login/regist')?>">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>