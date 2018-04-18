
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
            <h1>Registrasi</h1>
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
          <div class="col-sm-12  col-md-12 ">

            <div class="box-panel">
              <!-- form login -->
              <form>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text"  class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Kerusakan</label>
                  <select class="questions-category form-control">
                    <option value="0">All Categories</option>
                    <option value="36">Php</option>
                    <option value="37">Html</option>
                    <option value="42">Bootstrap</option>
                    <option value="43">Wordpress</option>
                    <option value="44">Laravel</option>
                    <option value="45">Plugins</option>
                    <option value="46">Routes</option>
                    <option value="47">Css</option>
                    <option value="48">Responsive</option>
                    <option value="38">File Upload</option>
                    <option value="39">Ajax</option>
                    <option value="40">Jquery</option>
                    <option value="41">Featured</option>
                  </select>
                </div>                
                <div class="form-group">
                  <label>Email</label>
                  <input type="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat Lengkap</label>
                  <input type="text"  class="form-control">
                </div>                
                <div class="form-group">
                  <label>No Telpon</label>
                  <input type="text"  class="form-control">
                </div>                 
                <div class="form-group">
                  <label>Password</label>
                  <input type="password"  class="form-control">
                </div>
                <div class="form-group">
                  <label>Ulangi Password</label>
                  <input type="password"  class="form-control">
                </div>
                <div class="form-group">
                  <div class="row">

                    <div class="col-xs-12 text-right">
                      <p class="help-block"><a href="login">Sudah punya akun?</a>
                      </p>
                    </div>
                  </div>
                </div>

                <a href="login" class="btn btn-primary btn-lg btn-block">Buat Akun</a>

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