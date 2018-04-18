
<!DOCTYPE html>
<html lang="en">

<?php include ('template/head.php') ?>

<body>
  <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->

	<!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
	<?php include ('template/topbar.php') ?>
	<!-- =-=-=-=-=-=-= HEADER Navigation =-=-=-=-=-=-= -->
	<?php include ('template/menu.php') ?>
  <!-- HEADER Navigation End -->


  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">
    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Login</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <!-- end bread -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>

    <!-- =-=-=-=-=-=-= Page Breadcrumb End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

            <div class="box-panel">
              <!-- form login -->
              <form method="post" action="login/proses">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" placeholder="Your Email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" placeholder="Your Password" class="form-control">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                    </div>
                  </div>
                </div>

                <button class="btn btn-primary btn-lg btn-block">Log In</button>

              </form>
              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Login Form   End =-=-=-=-=-=-= -->

  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->

  <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
	<?php include ('template/footer.php') ?>
	<?php include ('template/scripts.php') ?>
  <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->

</body>

</html>