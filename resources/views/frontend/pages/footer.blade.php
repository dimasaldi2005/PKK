<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>TP - PKK <span>Kabupaten Nganjuk</span></h3>
          <div class="mt-3">
            <h6 class="p-2 ">Kontak :</h6>
            <div class="p-2 "><a href="#" class=""><i class="bi bi-whatsapp"></i></a> 087754215178</div>
            <div class="p-2 "><a href="#" class="email"><i class="bi bi-envelope"></i></a> admin@pkk-nganjuk.my.id</div>
            <div class="p-2 "><a href="#" class=""><i class="bi bi-geo-alt-fill"></i></a>Jl. Dermojoyo No.21, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links" style="pointer-events: none;">
          <h6 class="p-2 ">Jumlah Pengunjung :</h6>
          <p class=" ">Hari ini :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <p class=" ">Minggu ini :&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;</p>
          <p class=" ">Bulan ini :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;</p>
          <p class=" ">Tahun ini :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <p class=" ">Semua Pengunjung :&emsp;&emsp;&emsp;</p>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-links" style="pointer-events: none;">
          <h6 class="p-2 ">IP Pengunjung anda :</h6>
          <?php
          if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $visitorIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } else {
            $visitorIP = $_SERVER['REMOTE_ADDR'];
          }

          echo "Alamat IP pengunjung: " . $visitorIP;
          ?>
          <!-- //map -->
          <a href="https://maps.app.goo.gl/ZTJdZZNjV3bYFJVZ9" target="_blank" style="text-decoration:none;">
            <div class="card shadow-sm border-0 mt-3" style="border-radius: 12px; overflow:hidden;">

              <div class="card-header bg-white">
                <h6 class="mb-0">
                  <i class="bi bi-geo-alt-fill text-danger"></i>
                  Lokasi Kantor
                </h6>
              </div>

              <div class="card-body p-0">
                <iframe
                  src="https://www.google.com/maps?q=Kecamatan+Nganjuk&output=embed"
                  width="100%"
                  height="220"
                  style="border:0; pointer-events:none;"
                  loading="lazy">
                </iframe>
              </div>

            </div>
          </a>
        </div>



      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->