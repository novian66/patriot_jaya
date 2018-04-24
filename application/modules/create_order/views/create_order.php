
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
            <h1>Buat Order Service Baru</h1>            
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
      <form class="margin-top-40" action="order_service">
                <div class="form-group">
                  <label>Nama Kerusakan</label>
                  <input type="text" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tipe HP</label>
                  <select class="questions-category form-control">
                    <option value="0">Tipe HP</option>
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
                  <label>Deskripsi Kerusakan</label>
                  <textarea cols="12" rows="12" placeholder="Post Your Question Details Here....." id="message" name="message" class="form-control contentt"></textarea>
                </div>

                <div class="form-group">
                  <label>Gunakan Kurir</label>
                  <i><br>Biaya kurir akan dibebankan kepada konsumen.</i>
                  <select class="questions-category form-control">
                    <option value="0">-- Pilih --</option>
                    <option value="36">Ya</option>
                    <option value="0">Tidak</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <a onClick="$('#sk').modal('show');">Syarat dan ketentuan</a>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="checkbox flat-checkbox">
                        <label>
                          <input type="checkbox">
                          <span class="fa fa-check"></span> Saya telah membaca dan setuju dengan syarat ketentuan yang berlaku di Patriot Jaya.
                        </label>
                      </div>
                    </div>

                  </div>
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
            <!-- Modal -->
            <div class="modal fade" id="sk" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center">Syarat dan Ketentuan</h5>
                    </div>          
                    <div style="padding:30px">
                      <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div><!-- .modal-footer -->
                </div><!-- .modal-content -->
              </div><!-- .modal-dialog .modal-lg -->
            </div><!-- .modal -->  
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