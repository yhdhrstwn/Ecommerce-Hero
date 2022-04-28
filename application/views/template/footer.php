    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row mt-3 pt-5">
          <div class="col-4">
            <h2>Contact us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <h2>Adderss</h2>
            <div class="row pb-1">
              <div class="col-4 align-self-center text-center">
                <i class="bi bi-geo-alt-fill fs-4"></i>
              </div>
              <div class="col-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <h2>Telp</h2>
            <div class="row pb-1">
              <div class="col-4 text-center">
                <i class="bi bi-telephone-fill fs-4"></i>
              </div>
              <div class="col-4">(+62)8691948154</div>
            </div>
            <h2>Email</h2>
            <div class="row pb-5">
              <div class="col-4 text-center">
                <i class="bi bi-envelope-fill fs-4"></i>
              </div>
              <div class="col-4">yahudahero168@gmail.com</div>
            </div>
          </div>
          <div class="col-4">
            <h2 class="text-center">Social media</h2>
            <div class="row">
              <div class="col-lg text-center">
                <a href="#" target="_blank" class="text-decoration-none">
                  <i class="bi bi-twitter fs-4" style="color: white;"></i>
                  <p style="color: white;">Twitter</p>
                </a>
              </div>
              <div class="col-lg text-center">
                <a href="#" target="_blank" class="text-decoration-none">
                  <i class="bi bi-facebook fs-4" style="color: white;"></i>
                  <p style="color: white;">Facebook</p>
                </a>
              </div>
              <div class="col-lg text-center">
                <a href="https://www.instagram.com/yhdhrstwn/" target="_blank" class="text-decoration-none">
                  <i class="bi bi-instagram fs-4" style="color: white;"></i>
                  <p style="color: white;">Instagram</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <h2 class="text-end">Navigation</h2>
            <div class="row">
              <a href="<?= site_url('home')?>" class="text-decoration-none mb-2 mt-2 fs-5" style="color: #fff; text-align:right;">Home</a>
            </div>
            <div class="row">
              <a href="<?= site_url('product')?>" class="text-decoration-none mb-2 mt-2 fs-5" style="color: #fff; text-align:right;">Product</a>
            </div>
            <div class="row">
              <a href="<?= site_url('men')?>" class="text-decoration-none mb-2 mt-2 fs-5" style="color: #fff; text-align:right;">Men</a>
            </div>
            <div class="row">
              <a href="<?= site_url('women')?>" class="text-decoration-none mb-2 mt-2 fs-5" style="color: #fff; text-align:right;">Women</a>
            </div>
            <div class="row">
              <a href="<?= site_url('about')?>" class="text-decoration-none mb-2 mt-2 fs-5" style="color: #fff; text-align:right;">About us</a>
            </div>
            <div class="row">
              <a href="<?= site_url('contact')?>" class="text-decoration-none mb-2 mt-2 fs-5" style="color: #fff; text-align:right;">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $("#bank").on("change", function(){
          let keterangan = $("#bank option:selected").attr("data-keterangan");
          $("#norekDetail").text(keterangan);
        });
      });
    </script>
  </body>
</html>