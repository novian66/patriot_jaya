
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
            <h1>Tentang Kami</h1>            
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



    <!-- =-=-=-=-=-=-= Contact Us   =-=-=-=-=-=-= -->
    <section class="section-padding-80 white contact-us" id="contacts">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12 contact-detail">
              <!-- End title-section -->
              <div class="row">
                <div class="app-content text-center">
                  <!-- Single download start \-->
                  <div class="col-md-3 col-sm-4">
                    <a href="#" class=""> <span class="app-icon fa fa-globe fa-4x"></span><br>
                      <div class="">  
                        <h5><br>Order<br>lewat website</h5>
                      </div>
                    </a>
                  </div>
                  <!--/ Single download end-->
                  <!-- Single download start \-->
                  <div class="col-md-3 col-sm-4">
                  <a href="#" class=""> <h1 class="app-icon fa fa-car fa-4x"></h1><br>
                      <div class="">  
                        <h5><br>Kurir<br>ambil handphone</h5>
                      </div>
                    </a>
                  </div>
                  <!--/ Single download end-->
                  <!-- Single download start \-->
                  <div class="col-md-3  col-sm-4">
                  <a href="#" class=""> <span class="app-icon fa fa-wrench fa-4x"></span><br>
                      <div class="">  
                        <h5><br>Perbaikan<br>oleh teknisi</h5>
                      </div>
                    </a>
                  </div>
                  <!--/ Single download end-->
                  <!-- Single download start \-->
                  <div class="col-md-3  col-sm-4">
                  <a href="#" class=""> <span class="app-icon fa fa-thumbs-up fa-4x"></span><br>
                      <div class="">  
                        <h5><br>Selesai!<br>Kurir mengantar handphone</h5>
                      </div>
                    </a>
                  </div>
                  <!--/ Single download end-->                  
                </div>
              </div>
              <!-- End row -->
              <br>
            <div class="contact-info">
              <p>Etiam sit amet orci eget eros faucibus tincidunt. Pellentesque commodo eros a enim. Etiam rhoncus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sagittis. </p>
              <p>Vestibulum turpis sem, aliquet eget, lobortis pellentesque.</p>
              <div class="social-links-two clearfix">
                <a class="facebook img-circle" href="#">
                  <span class="fa fa-comment" data-toggle="tooltip" data-placement="bottom" title="Testimoni"></span>
                </a>              
                <a class="facebook img-circle" href="#">
                  <span class="fa fa-facebook-f" data-toggle="tooltip" data-placement="bottom" title="facebook"></span>
                </a>
                <a class="twitter img-circle" href="#">
                  <span class="fa fa-instagram" data-toggle="tooltip" data-placement="bottom" title="instagram"></span>
                </a>
              </div>
            </div>
            <!-- end links -->

          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Contact Us End =-=-=-=-=-=-= -->

	  <!-- =-=-=-=-=-=-= Google Map   =-=-=-=-=-=-= -->
    <div class="contact">
      <div id="map"></div>
    </div>
    <!-- =-=-=-=-=-=-= Google Map End =-=-=-=-=-=-= -->    



  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->

  <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
	<?php include ('template/footer.php') ?>
	<?php include ('template/scripts.php') ?>
  <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
  <!-- Google Map For This Page Only -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&amp;sensor=false"></script>
  <script type="text/javascript" src="js/map.js"></script>
</body>

</html>