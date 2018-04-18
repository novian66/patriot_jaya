
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
            <h1>LCD Mati Total</h1>            
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
    <!-- =-=-=-=-=-=-= Question Details =-=-=-=-=-=-= -->

    <section class="section-padding-80 white question-details">
      <div class="container">
        <!-- Row -->
        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <!-- Question Detail -->

            <!-- Question Listing -->
            <div class="listing-grid ">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h3><a  href="#"> Bootstrap fixed sidebar causes main content to overlap ? </a></h3>
                  <div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span> <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <p> I am a novice when it comes to Bootstrap and css in general. I would like a site with a fixed sidebar, fixed top nav and main content that scrolls. </p>
                  <p>The navbar is fixed and works ok. The layout of the sidebar and main content is fine too. The problem comes when I set the sidebar to fixed. The main content overlaps the sidebar.</p>
                  <p>I am using a basic grid layout:</p>
                </div>
              </div>
            </div>
            <!-- Question Listing End -->

            <div class="clearfix"></div>
            <!-- Thread Reply -->
            <div class="thread-reply">
              <h2>Komentar </h2>

              <!-- Reply Grid -->
              <div class="media-block card-box ribbon-content">


                <div class="media-left">
                  <a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
                    <img class="img-sm" alt="Profile Picture" src="images/authors/9.jpg">

                  </a>

                </div>
                <div class="media-body">
                  <div class="mar-btm">
                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">Muhammad Umair</a></h4>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i>   11 min ago</p>
                  </div>
                  <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>

                  <p><strong>Edit: </strong>if you only want this effect to happen when the nav isn't collapsed surround it in the appropriate media query.</p>

                  <div class="pad-ver pull-right">

                  </div>

                </div>
              </div>
              <!-- Reply Grid End -->
              <!-- Reply Grid -->
              <div class="media-block card-box ">

                <div class="media-left">
                  <a href="#">
                    <img class="img-sm" alt="Profile Picture" src="images/authors/7.jpg">

                  </a>

                </div>
                <div class="media-body">
                  <div class="mar-btm">
                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">Martina Jaz</a></h4>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i>   21 min ago</p>
                  </div>
                  <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>

                  <div class="pad-ver pull-right">


                  </div>

                </div>
              </div>
              <!-- Reply Grid End -->
              <!-- Reply Grid -->
              <div class="media-block card-box ">

                <div class="media-left">
                  <a href="#">
                    <img class="img-sm" alt="Profile Picture" src="images/authors/6.jpg">

                  </a>

                </div>
                <div class="media-body">
                  <div class="mar-btm">
                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a></h4>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i>   40 min ago</p>
                  </div>
                  <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>

                  <div class="pad-ver pull-right">


                  </div>

                </div>
              </div>
              <!-- Reply Grid End -->

              <div class="clearfix"></div>

              <form>
                <div class="form-group">
                  <label>Tulis Jawaban</label>
                  <textarea cols="12" rows="7" class="form-control contentt" placeholder="I Have The Aswert"></textarea>
                </div>

                <button class="btn btn-primary btn-lg btn-block">Kirim Jawaban</button>

              </form>

            </div>
            <!-- Thread Reply End -->
          </div>

          <!-- Right Sidebar -->
          <div class="col-md-4 col-sm-12 col-xs-12 clearfix">

            <!-- sidebar -->
            <div class="side-bar">
              <div class="widget">
                <div class="widget-image widget-image-sm"> <img alt="image" src="images/light-background.jpg">
                  <div class="widget-image-content text-center"> <img class="img-thumbnail" alt="avatar" src="images/authors/12.jpg">
                    <h2 class="widget-heading text-light"><strong>John Doe</strong></h2>
                  </div>
                </div>
                <div class="widget-content widget-content-full border-bottom">
                  <div class="row">
                    <ul>
                      <li><i class="fa fa-phone fa-lg"></i> *********343</li>
                      <li><i class="fa fa-send fa-lg"></i> *********gmail.com</li>
                    </ul>
                  </div>
                </div>
                <div class="widget-content border-bottom">
                  <h4>Profil</h4>
                  <p>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit.</p>
                  <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                </div>
              </div>


            </div>
            <!-- sidebar end -->
          </div>
          <!-- Right Sidebar End -->

        </div>
        <!-- Row End -->
      </div>
    </section>
    <!-- =-=-=-=-=-=-= Question Details end =-=-=-=-=-=-= -->



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