<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Akun - Pedia Shop | Top Up Game Tanpa Ribet</title>
  <meta name="description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran">
  <meta name="keywords" content="Top Up Game Murah, Joki Mobile Legend dan Layanan Booster Social Media, Instant 24 Jam, Mobile Legends, Diamond Mobile Legends, Free Fire, DM FF,  Mobile, PUBGM, Genshin Impact, CODM, Valorant, Wild Rift">
  <meta property="og:title" content="Register Akun - Pedia Shop | Top Up Game Tanpa Ribet"/>
  <meta property="og:description" content="Game Top Up Adalah Tempat Top Up Game Murah, Joki Mobile Legends dan Booster Media Yang Aman, Murah dan Terpercaya. ByHansMart Menyediakan Layanan Top Up Games, Joki Mobile Legends, Booster Social Media. Untuk Mempermudah Pembayaran Anda Disini Kami Juga Menyediakan Berbagai Macam Metode Pembayaran" />
  <meta property="og:url" content="https://games.pediashop.my.id" />
  <meta property="og:image" content="https://games.pediashop.my.id/upload/logo_master_20232707193347.png" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="Arie Budi" />
  <meta name="contact" content="ariebudi.com" />
  <meta name="copyright" content="Copyright (c) ariebudi.com. All Rights Reserved." />
  <meta name="robots" content="index, nofollow">

  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gvCGHQM/Black1-Futuristic-Game-Logo.png">
  
  <link rel="stylesheet" href="https://games.pediashop.my.id/assets/plugins/summernote/dist/summernote-bs4.css"/>
  <!-- simplebar CSS-->
  <link href="https://games.pediashop.my.id/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="https://games.pediashop.my.id/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="https://games.pediashop.my.id/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="https://games.pediashop.my.id/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="https://games.pediashop.my.id/assets/css/horizontal-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="https://games.pediashop.my.id/assets/css/app-style.css" rel="stylesheet"/>
  <link href="https://games.pediashop.my.id/assets/css/style-main3.css" rel="stylesheet"/>
 
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start topbar header-->
    
    <!--End topbar header-->

    <div class="clearfix pt-5"></div>
    <div class="pt-5 pb-5">
      <div class="container">
       <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="pt-5 pb-2 text-center">
              <a href="https://games.pediashop.my.id">
                <img src="https://i.ibb.co/f17rKNB/Tambahkan-subjudul.png" class="img-fluid" style="display: block; margin: 0 auto;" alt="logo icon">
              </a>
              <p class="text-white">Silahkan Isi Form Dibawah Untuk Melakukan Pendaftaran Akun.</p>
              <hr>
            </div>
            <div class="pb-3">
              <div class="section">
                <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group mb-2">
        <label for="name" class="text-white">Nama Lengkap</label>
        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap Anda" pattern="[A-Za-z\s]{8,}+" title="Hanya Masukan Huruf" required>
    </div>
    <div class="form-group mb-2">
        <label for="email" class="text-white">Alamat Email</label>
        <input type="email" name="email" class="form-control" placeholder="Alamat email valid" required>
    </div>
    <div class="form-group mb-2">
        <label for="password" class="text-white">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Kombinasi Huruf dan Angka Tanpa Spesial Karakter, Minimal 8 Karakter" pattern="[A-Z0-9a-z]{8,}" title="Kombinasi Huruf dan Angka Tanpa Spesial Karakter, Minimal 8 Karakter" required>
    </div>
    <div class="form-group mb-2">
        <label for="password_confirmation" class="text-white">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Kombinasi Huruf dan Angka Tanpa Spesial Karakter, Minimal 8 Karakter" pattern="[A-Z0-9a-z]{8,}" title="Kombinasi Huruf dan Angka Tanpa Spesial Karakter, Minimal 8 Karakter" required>
    </div>
    <div class="form-group mb-2">
        <label for="no_hp" class="text-white">No. Whatsapp</label>
        <input type="text" name="no_hp" class="form-control" placeholder="No. Whatsapp aktif! Ex: 08123456789" required>
    </div>
    <div class="form-group mb-2">
        <label for="referral_code" class="text-white">Kode Referal (Opsional)</label>
        <input type="text" name="referral_code" class="form-control" placeholder="Masukkan Kode Referal Jika Ada">
    </div>
    <button type="submit" name="submit" value="submit" class="btn btn-primary text-white btn-block mt-3">Buat Akun</button>
</form>
<hr>

                        <p class="text-center text-white">Sudah Punya Akun?</p>
                        <a href="{{ url('login') }}" class="btn btn-danger btn-block">Masuk Akun!</a>
                    </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/js/jquery.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/js/popper.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/js/bootstrap.min.js"></script>
  


  <!-- simplebar js -->
  <script src="https://games.pediashop.my.id/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- horizontal-menu js -->
  <script src="https://games.pediashop.my.id/assets/js/horizontal-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="https://games.pediashop.my.id/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
  <!--Select Plugins Js-->
  <script src="https://games.pediashop.my.id/assets/plugins/select2/js/select2.min.js"></script>
  <!--Data Tables js-->
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="https://games.pediashop.my.id/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>