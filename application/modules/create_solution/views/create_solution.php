
<!DOCTYPE html>
<html lang="en">

<?php include ('template/head.php') ?>

<body>
  <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
  <!-- <div class="preloader"><span class="preloader-gif"></span>
  </div> -->
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
            <h1>Tanya Solusi Baru</h1>            
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
    <!-- =-=-=-=-=-=-= Blog & News =-=-=-=-=-=-= -->
    <section id="blog" class="custom-padding white">
      <div class="container">
              <p class="text-center">Sebelum mengsubmit pertanyaan, pastikan bahwa belum ada pertanyaan yang serupa.</p>
              <hr>
      <form class="margin-top-40">
                <div class="form-group">
                  <label>Judul Pertanyaan</label>
                  <input type="text" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                  <label>Kateogri Kerusakan</label>
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
                  <label>Detail Pertanyaan</label>
                  <textarea cols="12" rows="12" placeholder="Post Your Question Details Here....." id="message" name="message" class="form-control contentt"></textarea>
                </div>

                <button class="btn btn-primary pull-right">Kirim</button>

              </form>
        <br>    
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Blog & News end =-=-=-=-=-=-= -->


  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->

  <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
	<?php include ('template/footer.php') ?>
	<?php include ('template/scripts.php') ?>
  <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
  <script>
        $(document).ready(function() {
          $('.contentt').summernote();
        });
    </script>
</body>

</html>